<template>
    <Navbar />
    <div v-show="!landscape" class="w-full h-screen mt-20">
        <p class="text-center">
            Mude a orientação do seu dispositivo para visualizar a tabela
        </p>
    </div>
    <div v-show="landscape">
        <Link
            href="/leads"
            type="button"
            data-te-ripple-init
            data-te-ripple-color="light"
            class="m-5 absolute inline-block rounded-full bg-primary p-2 uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
            >
                <path
                    fill-rule="evenodd"
                    d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                    clip-rule="evenodd"
                />
            </svg>
        </Link>
        <div
            class="relative sm:w-[70%] w-[100%] sm:mx-auto h-[70%] shadow-xl shadow-slate-300 my-10"
        >
            <div id="datatable"></div>
        </div>
    </div>
</template>

<script>
import { Datatable, initTE } from "tw-elements";
import { Link } from "@inertiajs/vue3";
import Navbar from "@/Components/NavbarLogged.vue";

export default {
    props: {
        data: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            landscape: false,
        };
    },
    components: {
        Datatable,
        Navbar,
        Link,
    },
    mounted() {
        this.checkOrientation();
        window.addEventListener("resize", this.checkOrientation);

        initTE({ Datatable });
        this.initDatatable();
    },
    beforeDestroy() {
        window.removeEventListener("resize", this.checkOrientation);
    },
    methods: {
        checkOrientation() {
            this.landscape = window.innerWidth > window.innerHeight;
            if (!this.landscape) {
                this.landscape = false;
            }
        },
        initDatatable() {
            const dataInfo = {
                columns: [
                    { label: "Razão Social", field: "razao_social" },
                    { label: "Telefone", field: "telefone_1" },
                    { label: "Endereço", field: "endereco" },
                ],
                rows: [...this.data],
            };
            dataInfo.rows.shift();
            new Datatable(document.getElementById("datatable"), dataInfo);
        },
    },
};
</script>
