<script>
import Navbar from "@/Components/NavbarLogged.vue";
import { Ripple, initTE } from "tw-elements";

export default {
    props: {
        files: {
            type: Array,
            required: true,
        },
    },
    components: {
        Navbar,
    },
    mounted() {
        initTE({ Ripple });
    },
};
</script>
<template>
    <div>
        <Navbar />
        <h2 class="text-2xl mt-10 font-bold text-center text-slate-700">
            Seus Leads
        </h2>
        <div class="lg:px-8 flex flex-col gap-5 justify-center items-center">
            <div class="mt-10 grid grid-cols-4 gap-4">
                <div
                    v-for="file in files"
                    class="flex items-center gap-5 relative px-4 py-6 bg-gray-200 shadow-lg sm:rounded-3xl bg-clip-padding bg-opacity-30 border border-gray-200"
                    style="backdrop-filter: blur(20px)"
                >
                    <svg
                        viewBox="0 0 32 32"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8"
                    >
                        <path
                            d="M28.781,4.405H18.651V2.018L2,4.588V27.115l16.651,2.868V26.445H28.781A1.162,1.162,0,0,0,30,25.349V5.5A1.162,1.162,0,0,0,28.781,4.405Zm.16,21.126H18.617L18.6,23.642h2.487v-2.2H18.581l-.012-1.3h2.518v-2.2H18.55l-.012-1.3h2.549v-2.2H18.53v-1.3h2.557v-2.2H18.53v-1.3h2.557v-2.2H18.53v-2H28.941Z"
                            style="fill: #20744a; fill-rule: evenodd"
                        />
                        <rect
                            x="22.487"
                            y="7.439"
                            width="4.323"
                            height="2.2"
                            style="fill: #20744a"
                        />
                        <rect
                            x="22.487"
                            y="10.94"
                            width="4.323"
                            height="2.2"
                            style="fill: #20744a"
                        />
                        <rect
                            x="22.487"
                            y="14.441"
                            width="4.323"
                            height="2.2"
                            style="fill: #20744a"
                        />
                        <rect
                            x="22.487"
                            y="17.942"
                            width="4.323"
                            height="2.2"
                            style="fill: #20744a"
                        />
                        <rect
                            x="22.487"
                            y="21.443"
                            width="4.323"
                            height="2.2"
                            style="fill: #20744a"
                        />
                        <polygon
                            points="6.347 10.673 8.493 10.55 9.842 14.259 11.436 10.397 13.582 10.274 10.976 15.54 13.582 20.819 11.313 20.666 9.781 16.642 8.248 20.513 6.163 20.329 8.585 15.666 6.347 10.673"
                            style="fill: #ffffff; fill-rule: evenodd"
                        />
                    </svg>
                    <div class="w-full">
                        <h2>{{ file.file_name }}</h2>
                        <a
                            :href="`/leads/${file.id}`"
                            type="button"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            class="inline-block rounded bg-green-300 w-full text-center mt-2 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-600 shadow-[0_4px_9px_-4px_#20744a] transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_#202118),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] hover:text-slate-100"
                            >Ver Lead</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
