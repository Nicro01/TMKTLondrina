<?php

namespace App\Exports;

use App\Models\LeadModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadsExport implements FromCollection, WithHeadings
{
    protected $leads;

    public function __construct($leads)
    {
        $this->leads = $leads;
    }

    public function collection()
    {
        return collect($this->leads);
    }

    public function headings(): array
    {
        return [
            'razao_social',
            'telefone_1',
            'endereco',
        ];
    }
}
