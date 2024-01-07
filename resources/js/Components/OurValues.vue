<template>
    <section
        class="pb-24 select-none bg-[#f6f8f9] container mx-auto my-24"
        id="sobre-nos"
    >
        <h2
            class="text-3xl text-center font-extrabold text-[#213557] sm:text-4xl mb-10"
        >
            Nossos Valores
        </h2>
        <div
            class="grid grid-cols-5 max-w-7xl h-[500px] max-h-[500px] min-h-[500px] mx-auto px-4 sm:px-6 lg:px-8 gap-10 pt-12 items-center justify-center"
        >
            <div
                class="col-span-3"
                v-for="valor in valores"
                v-show="valores.indexOf(valor) == currentSlide"
            >
                <h2
                    class="text-2xl font-extrabold text-[#213557] sm:text-4xl mb-3"
                >
                    {{ valor.title }}
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                    {{ valor.description }}
                </p>
            </div>
            <div
                id="ourValues"
                class="relative col-span-2"
                data-te-carousel-init
                data-te-ride="carousel"
                data-te-interval="false"
            >
                <!--Carousel indicators-->
                <div
                    class="absolute -bottom-40 left-0 right-0 z-[2] mb-16 flex list-none gap-5 justify-between p-0"
                    data-te-carousel-indicators
                >
                    <button
                        type="button"
                        data-te-target="#ourValues"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="box-content h-[70px] w-[100px] flex-initial shadow-3-strong shadow-[#365A80] rounded bg-cover cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true"
                        aria-label="Slide 1"
                        :style="{
                            backgroundImage: 'url(' + slideImages[0] + ')',
                        }"
                        @click="changeSlide(0)"
                    ></button>
                    <button
                        type="button"
                        data-te-target="#ourValues"
                        data-te-slide-to="1"
                        class="box-content h-[70px] w-[100px] shadow-3-strong shadow-[#365A80] rounded bg-cover flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 2"
                        :style="{
                            backgroundImage: 'url(' + slideImages[1] + ')',
                        }"
                        @click="changeSlide(1)"
                    ></button>
                    <button
                        type="button"
                        data-te-target="#ourValues"
                        data-te-slide-to="2"
                        class="box-content h-[70px] w-[100px] flex-initial shadow-3-strong shadow-[#365A80] rounded bg-cover cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 3"
                        :style="{
                            backgroundImage: 'url(' + slideImages[2] + ')',
                        }"
                        @click="changeSlide(2)"
                    ></button>
                    <button
                        type="button"
                        data-te-target="#ourValues"
                        data-te-slide-to="3"
                        class="box-content h-[70px] w-[100px] flex-initial shadow-3-strong shadow-[#365A80] rounded bg-cover cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 4"
                        :style="{
                            backgroundImage: 'url(' + slideImages[3] + ')',
                        }"
                        @click="changeSlide(3)"
                    ></button>
                </div>

                <!--Carousel items-->
                <div
                    class="relative w-full max-w-7xl overflow-hidden after:clear-both after:block after:content-[''] rounded"
                >
                    <!--First item-->
                    <div
                        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden"
                    >
                        <img
                            :src="slideImages[0]"
                            class="block w-full max-w-3xl"
                            alt="..."
                        />
                    </div>
                    <!--Second item-->
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item
                        style="backface-visibility: hidden"
                    >
                        <img
                            :src="slideImages[1]"
                            class="block w-full max-w-3xl"
                            alt="..."
                        />
                    </div>
                    <!--Third item-->
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item
                        style="backface-visibility: hidden"
                    >
                        <img
                            :src="slideImages[2]"
                            class="block w-full max-w-3xl"
                            alt="..."
                        />
                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item
                        style="backface-visibility: hidden"
                    >
                        <img
                            :src="slideImages[3]"
                            class="block self-center max-w-sm scale-125"
                            alt="..."
                        />
                    </div>
                </div>

                <!--Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 -top-10 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#ourValues"
                    data-te-slide="prev"
                    @click="changeSlide(currentSlide - 1)"
                >
                    <span class="inline-block h-8 w-8">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5L8.25 12l7.5-7.5"
                            />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Previous</span
                    >
                </button>
                <!--Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 -top-10 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#ourValues"
                    data-te-slide="next"
                    @click="changeSlide(currentSlide + 1)"
                >
                    <span class="inline-block h-8 w-8">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Next</span
                    >
                </button>
            </div>
        </div>
    </section>
</template>

<script>
import { Ripple, initTE, Carousel } from "tw-elements";

export default {
    components: {
        Ripple,
        Carousel,
        initTE,
    },
    data() {
        return {
            currentSlide: 0,
            slideImages: [
                "/img/Valores/Comprometimento.svg",
                "/img/Valores/Etica.svg",
                "/img/Valores/Inclusao.svg",
                "/img/Valores/Reconhecimento.svg",
            ],
            valores: [
                {
                    title: "Comprometimento",
                    description:
                        "Oferecemos soluções para o dia a dia que se conectam com as melhores práticas de atendimento ao cliente.",
                },
                {
                    title: "Ética",
                    description:
                        "Atuamos para garantir um ambiente saudável e relações harmoniosas e de igualdade entre todos os colaboradores.",
                },
                {
                    title: "Inclusão",
                    description:
                        "Abrimos as portas de nossa empresa para todos aqueles que desejam crescer e se desenvolver, sem distinção de qualquer natureza.",
                },
                {
                    title: "Reconhecimento",
                    description:
                        "Trabalhamos com metas bem definidas e um plano de negócios desenhado para auxiliar colaboradores e clientes a alcançarem os resultados e reconhecimento esperados.  ",
                },
            ],
        };
    },
    mounted() {
        initTE({ Ripple, Carousel });
    },

    methods: {
        changeSlide(index) {
            this.currentSlide =
                index >= 0 && index < this.slideImages.length
                    ? index
                    : index < 0
                    ? this.slideImages.length - 1
                    : 0;
        },
    },
    watch: {},
};
</script>
