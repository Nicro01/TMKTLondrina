<template>
    <div class="container mx-auto">
        <div
            class="relative flex py-5 mb-16 md:mx-[20%] items-center text-4xl select-none"
        >
            <div class="flex-grow border-t border-gray-600"></div>
            <span
                class="flex-shrink mx-4 text-2xl font-extrabold text-[#213557] md:text-4xl text-center sm:text-start"
                >Nossa Essência</span
            >
            <div class="flex-grow border-t border-gray-600"></div>
        </div>

        <!-- Section: Design Block -->
        <section class="mb-12 md:mb-32">
            <div class="flex flex-wrap">
                <div
                    v-show="window.innerWidth > 1024"
                    class="mb-12 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12 relative z-10 md:left-60"
                >
                    <div class="flex lg:py-12">
                        <img
                            draggable="false"
                            src="https://picsum.photos/1000/1000"
                            class="md:w-7/12 rounded-lg shadow-lg lg:ml-16 z-[10]"
                            alt="image"
                        />
                    </div>
                </div>
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                    <div
                        class="flex min-h-[480px] items-center rounded-lg md:rounded-s-lg bg-[#365a80] p-6 md:text-center text-gray-300 lg:pl-12 lg:text-left"
                    >
                        <div class="lg:pl-12">
                            <div
                                class="relative mb-5 flex py-5 items-center select-none text-2xl md:text-4xl"
                            >
                                <div class="flex-grow border-t"></div>
                                <span class="flex-shrink mx-4">Missão</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <p class="mb-6 pb-2 lg:pb-0">
                                Nossa missão é impulsionar o sucesso
                                empresarial, valorizando o diálogo e as conexões
                                humanas como pilares fundamentais. Por meio de
                                soluções de telemarketing inovadoras, nos
                                dedicamos a transformar cada interação em uma
                                oportunidade única para fortalecer laços,
                                construir confiança e promover o crescimento
                                sustentável. Acreditamos que um atendimento ao
                                cliente excepcional é o caminho para superar
                                expectativas e fidelizar clientes. <br /><br />

                                Comprometemo-nos com a excelência, a inovação e
                                a plena satisfação do cliente, elementos que
                                consideramos essenciais para preparar as
                                empresas para um futuro próspero. Nossas
                                estratégias são projetadas para otimizar as
                                comunicações e cultivar relações autênticas
                                entre empresas e seus públicos. Assim, ao
                                escolher nossos serviços, nossos parceiros estão
                                investindo em uma cultura de sucesso contínuo,
                                apoiada por tecnologia avançada e um compromisso
                                inabalável com a qualidade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="md:mb-32">
            <div class="flex flex-wrap items-center">
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                    <div
                        class="flex min-h-[480px] items-center rounded-lg md:rounded-e-lg bg-[#365a80] p-6 md:text-center text-gray-300 lg:pl-12 lg:text-left"
                    >
                        <div class="lg:pr-12">
                            <div
                                class="relative mb-5 flex py-5 items-center select-none text-2xl md:text-4xl"
                            >
                                <div class="flex-grow border-t"></div>
                                <span class="flex-shrink mx-4">Valores</span>
                                <div class="flex-grow border-t"></div>
                            </div>
                            <p class="mb-6 pb-2 lg:pb-0">
                                Comprometemo-nos com a realização de metas e o
                                reconhecimento do valor de cada indivíduo,
                                guiados por princípios éticos e inclusivos.
                                Acreditamos firmemente que soluções justas e
                                acessíveis são fundamentais para o crescimento
                                coletivo e sustentável. Esta convicção molda
                                nossas operações, assegurando que cada ação
                                promova a equidade e beneficie todos os
                                stakeholders. <br />
                                <br />

                                Valorizamos a diversidade e a igualdade de
                                oportunidades no ambiente de trabalho, pois
                                entendemos que a inclusão de diferentes
                                perspectivas é crucial para o enriquecimento da
                                nossa cultura corporativa. Ao priorizar a
                                integridade e a responsabilidade em nossas
                                práticas, demonstramos que é possível alcançar
                                sucesso empresarial sem abrir mão do respeito
                                mútuo, da equidade e da transparência.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    v-show="window.innerWidth > 1024"
                    class="mb-12 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12 relative z-10 md:right-12"
                >
                    <div class="flex lg:py-12">
                        <img
                            draggable="false"
                            src="https://picsum.photos/1000/1000"
                            class="md:w-7/12 rounded-lg shadow-lg lg:mr-16 z-[10]"
                            alt="image"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            window: {
                innerWidth: 0,
            },
        };
    },
    mounted() {
        this.window.innerWidth = window.innerWidth;
        window.addEventListener("resize", () => {
            this.window.innerWidth = window.innerWidth;
        });
    },
};
</script>
