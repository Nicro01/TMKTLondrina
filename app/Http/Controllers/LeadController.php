<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exports\LeadsExport;
use App\Models\LeadModel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LeadController extends Controller
{
    private $client;
    private $apiKey;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->apiKey = 'AIzaSyCQGZwah06y7My792j7xk4dgERkClYE2Pw';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $files = auth()->user()->id != 0 ? LeadModel::where('user_id', auth()->user()->id)->get() : LeadModel::all();

        return Inertia::render('Leads/Index', [
            'files' => $files,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Leads/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = $request->city;
        $radius = $request->rangeValue;
        $segment = $request->segment;
        $fileName = $request->fileName;

        // Armazene a resposta da API em cache
        $geocodeResponse = Cache::remember("geocode/json?address={$city}&key={$this->apiKey}", 60, function () use ($city) {
            return $this->client->get("https://maps.googleapis.com/maps/api/geocode/json?address={$city}&key={$this->apiKey}");
        });

        $geocodeData = json_decode($geocodeResponse->getBody());

        $latitude = $geocodeData->results[0]->geometry->location->lat;
        $longitude = $geocodeData->results[0]->geometry->location->lng;

        $places = [];
        $pageToken = null;

        do {
            $placesResponse = $this->client->get("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location={$latitude},{$longitude}&radius={$radius}&keyword={$segment}&key={$this->apiKey}" . ($pageToken ? "&pagetoken={$pageToken}" : ''));
            $placesData = json_decode($placesResponse->getBody());


            foreach ($placesData->results as $place) {

                $phoneNumber = Cache::remember("place/details/{$place->place_id}", 60, function () use ($place) {
                    $placeDetailsResponse = $this->client->get("https://maps.googleapis.com/maps/api/place/details/json?place_id={$place->place_id}&fields=formatted_phone_number&key={$this->apiKey}");
                    $placeDetailsData = json_decode($placeDetailsResponse->getBody());
                    return $placeDetailsData->result->formatted_phone_number ?? null;
                });

                $places[] = [
                    'razao_social' => $place->name,
                    'telefone_1' => $phoneNumber,
                    'endereco' => $place->vicinity,
                ];
            }


            $pageToken = $placesData->next_page_token ?? null;

            sleep(2);
        } while ($pageToken && count($places) < 60);

        $user = auth()->user();

        $export = new LeadsExport($places);
        $fileName = "{$fileName}.xlsx";
        $filePath = "users/{$user->id}/exports";

        LeadModel::create([
            'user_id' => $user->id,
            'file_name' => $fileName,
            'file_path' => $filePath,
        ]);

        Excel::store($export, $filePath . '/' . $fileName, 'public');

        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = auth()->user();
        $file = LeadModel::where('id', $id)->first();

        $filePath = storage_path("public/users/{$user->id}/exports/{$file->file_name}");

        $spreadsheet = IOFactory::load($filePath);

        //dd(Storage::path($filePath));

        $worksheet = $spreadsheet->getActiveSheet();

        $data = [];

        foreach ($worksheet->getRowIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            $row = [];

            foreach ($cellIterator as $cell) {
                $row[] = $cell->getValue();
            }

            $data[] = $row;
        }

        //dd($data);

        return Inertia::render('Leads/Show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
