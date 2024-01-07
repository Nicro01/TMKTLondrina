<script>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";
import Waves from "@/Components/Waves.vue";
import CarouselHome from "@/Components/CarouselHome.vue";
import OurClient from "@/Components/OurClient.vue";
import Services from "@/Components/Services.vue";
import Footer from "@/Components/Footer.vue";
import FAQ from "@/Components/FAQ.vue";
import OurValues from "@/Components/OurValues.vue";

import { Ripple, Collapse, initTE } from "tw-elements";

export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    components: {
        Head,
        Link,
        Navbar,
        Waves,
        CarouselHome,
        OurClient,
        Footer,
        FAQ,
        Services,
        OurValues,
        OurValues,
    },
    mounted() {
        initTE({ Ripple, Collapse });
    },
};
</script>

<style>
body {
    background-color: #f6f8f9;
}
</style>
<template>
    <Head title="Welcome" />

    <section class="bg-gradient-to-b from-[#0D2235] to-[#365A80] select-none">
        <Navbar />
        <div
            class="sm:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:flex sm:flex-row flex-col gap-10 sm:pt-32 pt-14"
        >
            <div class="max-w-3xl mx-auto flex flex-col gap-10">
                <h2
                    class="text-2xl font-extrabold text-white sm:text-4xl text-center sm:text-start"
                >
                    <span class="block">TMKT Londrina</span>
                    <span class="block">Soluções em Telemarketing</span>
                </h2>
                <p
                    class="sm:mt-4 sm:text-lg text-sm leading-6 text-white text-center sm:text-start"
                >
                    Desde 2004, a TMKT LONDRINA oferece soluções de
                    telemarketing ativo para grandes empresas do setor editorial
                    de revistas e plataformas digitais
                </p>
                <button
                    class="border sm:self-start self-center rounded-full sm:py-3 py-1 text-white font-extralight sm:max-w-[35%] w-[50%] hover:bg-white hover:text-[#213557] transition duration-300 ease-in-out"
                    data-te-ripple-init
                >
                    Fale Conosco!
                </button>
                <div
                    class="flex gap-4 justify-center mb-10 sm:mb-0 sm:justify-start"
                >
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded-full px-2.5 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #1877f2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                            />
                        </svg>
                    </button>
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded-full px-2.5 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #c13584"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                            />
                        </svg>
                    </button>
                    <button
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="mb-2 inline-block rounded-full px-2.5 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                        style="background-color: #128c7e"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"
                            />
                        </svg>
                    </button>
                </div>
            </div>
            <CarouselHome />
        </div>

        <Waves />
    </section>

    <section class="sm:pt-24 pb-12 select-none bg-[#f6f8f9]" id="sobre-nos">
        <div
            class="flex flex-col sm:flex-row max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:gap-10 pt-12 sm:items-center items-start"
        >
            <img
                src="../../img/Vetores/Atendente.svg"
                width="500"
                alt=""
                draggable="false"
            />
            <div class="flex flex-col">
                <h2
                    class="text-3xl font-extrabold text-[#213557] sm:text-4xl mb-3 text-center sm:text-start"
                >
                    O que é a TMKT Londrina?
                </h2>
                <p
                    class="sm:mt-4 sm:text-lg text-base leading-6 text-gray-500 text-center sm:text-start"
                >
                    A TMKT Londrina é uma empresa que atua no ramo de
                    telemarketing ativo, oferecendo soluções para grandes
                    empresas do setor editorial de revistas e plataformas
                    digitais. Fundada em 2004, a TMKT Londrina tem se dedicado a
                    fornecer serviços de telemarketing de alta qualidade,
                    atendendo às necessidades específicas de seus clientes. Seu
                    foco principal está em oferecer suporte e assistência para
                    empresas que operam no setor editorial, contribuindo para o
                    sucesso e a eficiência de suas operações de marketing e
                    vendas. Com uma vasta experiência e expertise nesse
                    segmento, a TMKT Londrina se destaca como uma parceira
                    confiável para empresas que buscam maximizar seu alcance e
                    impacto no mercado editorial e digital.
                </p>
            </div>
        </div>
    </section>

    <OurValues />

    <section
        class="flex flex-col mx-auto px-4 sm:px-6 lg:px-8 gap-10 py-12 select-none bg-[#f6f8f9]"
    >
        <hr
            class="mb-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100"
        />
        <div class="sm:mx-80">
            <h2
                class="text-3xl text-center font-extrabold text-[#213557] sm:text-4xl mb-3"
            >
                Nossa Essência
            </h2>
            <p
                class="mt-8 sm:text-lg text-base text-center leading-6 text-gray-500"
            >
                Com experiência em treinamento e desenvolvimento na área
                comercial, sua fundadora Rosilene Estevam, já atuava nos Estados
                do Paraná, Santa Catarina e interior de São Paulo, destacando-se
                pelo respeito e valorização do colaborador para oferecer as
                melhores práticas em atendimento
            </p>
        </div>
        <div class="grid-cols-1 sm:grid md:grid-cols-3 sm:mx-32 mx-10">
            <div
                class="mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0"
            >
                <a>
                    <img
                        class="rounded-t-lg max-w-[70%] p-14 mx-auto"
                        draggable="false"
                        src="../../img/Essencia/mission.png"
                        alt="Hollywood Sign on The Hill"
                    />
                </a>
                <div class="p-6 text-center">
                    <h5
                        class="mb-2 font-semibold text-xl leading-tight text-neutral-800 dark:text-neutral-50"
                    >
                        Missão
                    </h5>
                    <p
                        class="mb-4 text-base text-neutral-600 dark:text-neutral-200"
                    >
                        Diálogo e pessoas movem o nosso negócio, por isso
                        oferecemos soluções em atendimento de telemarketing para
                        empresas.
                    </p>
                </div>
            </div>
            <div
                class="mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0"
            >
                <img
                    class="rounded-t-lg max-w-[70%] p-14 mx-auto"
                    draggable="false"
                    src="../../img/Essencia/vision.png"
                    alt="Palm Springs Road"
                />

                <div class="p-6 text-center">
                    <h5
                        class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50"
                    >
                        Visão
                    </h5>
                    <p
                        class="mb-4 text-base text-neutral-600 dark:text-neutral-200"
                    >
                        Destacar-nos no mercado com atendimento de telemarketing
                        humanizado, simplificado e centrado nas pessoas, atuando
                        de forma proativa e reativa.
                    </p>
                </div>
            </div>
            <div
                class="mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0"
            >
                <img
                    class="rounded-t-lg max-w-[70%] p-14 mx-auto"
                    draggable="false"
                    src="../../img/Essencia/value.png"
                    alt="Skyscrapers"
                />

                <div class="p-6 text-center">
                    <h5
                        class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50"
                    >
                        Valores
                    </h5>
                    <p
                        class="mb-4 text-base text-neutral-600 dark:text-neutral-200"
                    >
                        Compromisso com metas e reconhecimento, oferecendo
                        soluções éticas e inclusivas para o crescimento de
                        todos.
                    </p>
                </div>
            </div>
        </div>

        <OurClient />

        <div class="flex justify-center">
            <Services />
        </div>

        <FAQ />
    </section>
    <Footer />
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
