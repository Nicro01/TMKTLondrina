<template>
    <Navbar />
    <Link
        href="/leads"
        type="button"
        data-te-ripple-init
        data-te-ripple-color="light"
        class="m-5 absolute inline-block rounded-full bg-primary p-2 uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
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
        class="relative w-[70%] mx-auto h-[70%] shadow-xl shadow-slate-300 my-10"
    >
        <div id="datatable"></div>
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
    components: {
        Datatable,
        Navbar,
        Link,
    },
    mounted() {
        initTE({ Datatable });
        this.initDatatable(); // Chame o método aqui
    },
    methods: {
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
