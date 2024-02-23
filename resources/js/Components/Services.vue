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
    <div class="container mx-auto md:px-6 max-w-7xl">
        <section class="mb-32 text-center">
            <div
                data-aos="fade-up"
                class="relative flex py-5 mb-16 mx-[10%] md:mx-[20%] items-center text-4xl select-none"
            >
                <div class="flex-grow border-t border-gray-600"></div>
                <span
                    class="flex-shrink mx-4 text-2xl font-extrabold text-[#213557] md:text-4xl text-center sm:text-start"
                    >Nossos Serviços</span
                >
                <div class="flex-grow border-t border-gray-600"></div>
            </div>

            <div class="grid max-xl:grid-cols-1 grid-cols-2 items-start gap-10">
                <div
                    data-aos="fade-down"
                    class="col-span-1 bg-white shadow-lg rounded-lg overflow-hidden"
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
                                concentramos-nos em estabelecer conexões sólidas
                                com os leads, compreendendo suas necessidades e
                                criando um vínculo inicial que impulsione o
                                processo de vendas.
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
                                Na busca pela excelência, buscamos
                                constantemente aprimorar nossas estratégias de
                                telemarketing ativo. Isso inclui refinamento de
                                abordagens, escuta ativa e adaptação contínua
                                para garantir resultados ainda mais eficazes e
                                satisfatórios.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    data-aos="fade-down"
                    class="col-span-1 bg-white shadow-lg rounded-lg overflow-hidden"
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
                                No processo de telemarketing receptivo, nosso
                                foco primordial é atender às necessidades dos
                                clientes de forma ágil e precisa. Estamos
                                comprometidos em oferecer assistência
                                personalizada, respondendo prontamente às
                                consultas e fornecendo soluções eficientes.
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
                                Buscamos constantemente reduzir o tempo de
                                espera do cliente, tornando o processo de
                                atendimento mais eficiente e satisfatório.
                                Através de métodos otimizados e uma equipe
                                dedicada, trabalhamos para diminuir as filas de
                                espera, garantindo uma experiência positiva para
                                cada contato.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
