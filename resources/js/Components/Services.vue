<script>
export default {
    data() {
        return {
            visibleProspect: null,
            visibleActive: null,
            visibleReceptive: null,
        };
    },
    methods: {
        toggleProspect(element) {
            if (this.visibleProspect === element) {
                this.visibleProspect = null;
                return;
            }
            this.visibleProspect = element;
        },
        toggleActive(element) {
            if (this.visibleActive === element) {
                this.visibleActive = null;
                return;
            }
            this.visibleActive = element;
        },
        toggleReceptive(element) {
            if (this.visibleReceptive === element) {
                this.visibleReceptive = null;
                return;
            }
            this.visibleReceptive = element;
        },
    },
};
</script>
<template>
    <div class="container mx-auto md:px-6">
        <section class="mb-32 text-center">
            <h2 class="mb-16 text-3xl font-bold text-[#213557]">
                Nossos Serviços
            </h2>

            <div class="grid sm:grid-cols-3 gap-10 sm:gap-0">
                <div
                    class="max-w-sm mx-auto bg-white shadow-lg grow rounded-lg overflow-hidden"
                >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Prospecção</div>
                        <p class="text-gray-600 text-base">
                            Prospecção inclui identificar potenciais clientes
                            alinhados ao perfil de negócio das empresas
                            parceiras, ampliar a base de clientes, construir
                            relacionamentos duradouros e obter dados para
                            personalizar estratégias de vendas.
                        </p>
                    </div>
                    <div class="px-6 py-4 bottom-0">
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleProspect('identificar')"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            >Identificar</span
                        >
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleProspect('expandir')"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            >Expandir</span
                        >
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleProspect('estabelecer-pros')"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            >Estabelecer</span
                        >
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleProspect('coletar')"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            >Coletar</span
                        >
                    </div>
                    <div
                        v-if="visibleProspect === 'identificar'"
                        id="identificar"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Identificar</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                    <div
                        v-if="visibleProspect === 'expandir'"
                        id="expandir"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Expandir</b>
                            <p>
                                Expandir a base de clientes e aumentar as
                                oportunidades de vendas.
                            </p>
                        </div>
                    </div>
                    <div
                        v-if="visibleProspect === 'estabelecer-pros'"
                        id="estabelecer-pros"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Estabelecer</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                    <div
                        v-if="visibleProspect === 'coletar'"
                        id="coletar"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Coletar</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden"
                >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            Telemarketing Ativo
                        </div>
                        <p class="text-gray-600 text-base">
                            O telemarketing ativo visa a abordagem personalizada
                            para converter leads em clientes, visando aprimorar
                            a eficiência das vendas e otimizar os resultados
                            comerciais.
                        </p>
                    </div>
                    <div class="px-6 py-4 bottom-0">
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleActive('estabelecer-ativo')"
                            >Estabelecer</span
                        >
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleActive('melhorar')"
                            >Melhorar</span
                        >
                    </div>
                    <div
                        v-if="visibleActive === 'estabelecer-ativo'"
                        id="estabelecer-ativo"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Estabelecer</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                    <div
                        v-if="visibleActive === 'melhorar'"
                        id="melhorar"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Melhorar</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden"
                >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            Telemarketing Receptivo
                        </div>
                        <p class="text-gray-600 text-base">
                            O telemarketing receptivo visa atender
                            eficientemente às demandas das empresas parceiras,
                            garantindo soluções adequadas para cada contato e
                            reduzindo o tempo de espera do cliente.
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleReceptive('atender')"
                            >Atender</span
                        >
                        <span
                            class="inline-block bg-[#365A80] hover:bg-[#7ea4cd] transition-all duration-100 cursor-pointer rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"
                            @click="toggleReceptive('reduzir')"
                            >Reduzir</span
                        >
                    </div>
                    <div
                        v-if="visibleReceptive === 'atender'"
                        id="atender"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Atender</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                    <div
                        v-if="visibleReceptive === 'reduzir'"
                        id="reduzir"
                        data-te-collapse-item
                    >
                        <div class="block rounded-lg bg-white p-6">
                            <b class="text-center text-lg">Reduzir</b>
                            <p>
                                Identificar e contatar potenciais clientes que
                                estejam alinhados com o perfil de negócio das
                                empresas parceiras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
