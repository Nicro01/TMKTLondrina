<script>
import Navbar from "@/Components/NavbarLogged.vue";
import { useForm } from "@inertiajs/vue3";

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
            progress: 0,
        };
    },
    components: {
        Navbar,
    },
    methods: {
        onSubmit() {
            this.resultVisible = true;
            this.loading = true;
            this.progress = 0;

            this.form
                .post("/leads/store")
                .onUpdateProgress((event) => {
                    this.progress = Math.round(
                        (event.loaded * 100) / event.total
                    );
                })
                .then((response) => {
                    this.loading = false;
                    this.downloadUrl = URL.createObjectURL(
                        new Blob([response.data])
                    );
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
                class="block sm:w-5/12 mt-20 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
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
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleInput7"
                            placeholder="City"
                        />
                        <label
                            for="exampleInput7"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >City
                        </label>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="text"
                            name="segment"
                            v-model="form.segment"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleInput7"
                            placeholder="Segment"
                        />
                        <label
                            for="exampleInput7"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Segment
                        </label>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="text"
                            name="fileName"
                            id="fileName"
                            v-model="form.fileName"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            placeholder="Segment"
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
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                            >Range</label
                        >
                        <input
                            type="range"
                            min="0"
                            max="5000"
                            name="range"
                            v-model="form.rangeValue"
                            class="transparent h-[4px] w-full cursor-pointer appearance-none border-transparent bg-neutral-200 dark:bg-neutral-600"
                            id="customRange1"
                        />
                    </div>

                    <!--Submit button-->
                    <button
                        id="submit"
                        class="dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]] inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-gray-700 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
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
                class="flex justify-center w-5/12 my-10 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
            >
                <div
                    id="loading"
                    class="h-4 w-full bg-gray-300"
                    role="progressbar"
                    :aria-valuenow="progress"
                    aria-valuemin="0"
                    aria-valuemax="100"
                >
                    <div
                        class="h-full bg-blue-500"
                        :style="{ width: `${progress}%` }"
                    ></div>
                </div>
            </div>
        </div>
    </div>
</template>
