<script>
import Navbar from "@/Components/NavbarLogged.vue";
import { useForm } from "@inertiajs/vue3";
import { Input, Ripple, initTE } from "tw-elements";

export default {
    data() {
        return {
            form: useForm({
                rangeValue: 2500,
                city: "",
                segment: "",
                fileName: "",
            }),
            resultVisible: false,
            loading: false,
            downloadUrl: "",
            completed: false,
        };
    },
    components: {
        Navbar,
        Input,
        Ripple,
    },
    mounted() {
        initTE({ Input, Ripple });
    },
    methods: {
        onSubmit() {
            this.resultVisible = true;
            this.loading = true;

            axios.post("/leads/store", this.form).then((response) => {
                this.loading = false;
                this.downloadUrl = response.data.downloadUrl;
                this.completed = true;
            });
        },
    },
};
</script>

<template>
    <div>
        <Navbar />
        <div class="lg:px-8 flex flex-col gap-5 justify-center items-center">
            <div
                class="block sm:w-5/12 mt-20 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
            >
                <form
                    @submit.prevent="onSubmit"
                    class="flex flex-col gap-4"
                    id="googleAPI"
                >
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="text"
                            name="city"
                            v-model="form.city"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleInput7"
                            placeholder="City"
                        />
                        <label
                            for="exampleInput7"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                            >City
                        </label>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="text"
                            name="segment"
                            v-model="form.segment"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleInput7"
                            placeholder="Segment"
                        />
                        <label
                            for="exampleInput7"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                            >Segment
                        </label>
                    </div>

                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <input
                            type="text"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="fileName"
                            v-model="form.fileName"
                            placeholder="File Name"
                        />
                        <label
                            for="fileName"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >File Name
                        </label>
                    </div>

                    <div class="relative">
                        <span class="absolute top-0 right-0" id="range-value">{{
                            form.rangeValue
                        }}</span>
                        <label
                            for="customRange1"
                            class="mb-2 inline-block text-neutral-700"
                            >Range</label
                        >
                        <input
                            type="range"
                            min="0"
                            max="5000"
                            name="range"
                            v-model="form.rangeValue"
                            class="transparent h-[4px] w-full cursor-pointer appearance-none border-transparent bg-neutral-200"
                            id="customRange1"
                        />
                    </div>

                    <!--Submit button-->
                    <button
                        id="submit"
                        class="inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-100 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                    >
                        Search
                    </button>
                </form>
            </div>

            <div
                id="result"
                v-show="loading"
                class="flex justify-center w-5/12 my-10 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
            >
                <div
                    class="inline-block h-8 w-8 animate-[spinner-grow_0.75s_linear_infinite] rounded-full bg-current align-[-0.125em] opacity-0 motion-reduce:animate-[spinner-grow_1.5s_linear_infinite]"
                    role="status"
                >
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Loading...</span
                    >
                </div>
            </div>
            <div
                v-show="completed"
                id="result"
                class="flex flex-col justify-center sm:w-5/12 my-10 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
            >
                <p
                    class="text-base text-green-500 text-center mb-10 font-light"
                >
                    Arquivo gerado com sucesso
                </p>
                <div class="grid grid-cols-2 gap-10">
                    <a
                        :href="route('leads.index')"
                        class="col-span-1 text-center inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-100 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        >Ver Leads</a
                    >
                    <a
                        :href="downloadUrl"
                        class="col-span-1 text-center inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-100 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                    >
                        Download
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
