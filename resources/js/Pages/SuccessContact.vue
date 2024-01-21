<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import { initTE, Ripple, Input } from "tw-elements";

export default {
    components: {
        Navbar,
        initTE,
        Ripple,
        Input,
        Footer,
    },
    mounted() {
        initTE({ Ripple, Input });
    },
};
</script>

<template>
    <Navbar />
    <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
            <div
                class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat bg-[url('../../img/Escritorio.jpg')] rounded-lg"
            ></div>
            <div class="container px-6 md:px-12">
                <div
                    class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]"
                >
                    <div class="flex flex-wrap items-center">
                        <div
                            class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6"
                        >
                            <div class="max-w-md mx-auto text-center">
                                <h2
                                    class="mb-4 text-3xl font-bold text-gray-900"
                                >
                                    Obrigado por entrar em contato!
                                </h2>
                                <p class="mb-4 text-gray-700">
                                    Em breve retornaremos sua mensagem.
                                </p>
                                <a
                                    href="/"
                                    class="inline-block px-10 py-3 mt-6 text-sm font-medium leading-6 text-center text-white uppercase transition bg-gray-900 rounded shadow ripple hover:shadow-lg hover:bg-gray-800 focus:outline-none"
                                >
                                    Voltar para a página inicial
                                </a>
                            </div>
                        </div>
                        <div
                            class="w-full h-[60vh] shrink-0 grow-0 basis-auto lg:w-7/12"
                        >
                            <div
                                class="w-full h-full bg-fit bg-[50%] bg-no-repeat bg-[url('../../img/Circles.png')]"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <Footer />
    <!-- Container for demo purpose -->
</template>
