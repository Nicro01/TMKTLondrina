<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import { initTE, Ripple, Input } from "tw-elements";
import { useForm } from "@inertiajs/vue3";

export default {
    props: {
        success: Boolean,
    },
    data() {
        return {
            url: route("contato.store"),
            form: new useForm({
                name: "",
                email: "",
                message: "",
            }),
            phone: window.innerWidth < 768 ? true : false,
        };
    },
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
    methods: {
        onSubmit() {
            this.form
                .post(this.url)
                .then((response) => {
                    console.log(response);
                    this.success = true;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
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
                            <div class="max-w-md mb-10" v-if="!success">
                                <h2
                                    class="mb-4 text-2xl md:text-3xl font-bold text-gray-900 text-center md:text-start"
                                >
                                    Entre em contato
                                </h2>
                                <p
                                    class="mb-4 text-gray-700 text-center md:text-start"
                                >
                                    Preencha o formulário abaixo para entrar em
                                    contato conosco.
                                </p>
                            </div>
                            <div
                                class="max-w-md mx-auto text-center"
                                v-if="success"
                            >
                                <h2
                                    class="mb-4 text-2xl md:text-3xl font-bold text-gray-900"
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
                            <form @submit.prevent="onSubmit()" v-if="!success">
                                <div
                                    class="relative mb-6"
                                    data-te-input-wrapper-init
                                >
                                    <input
                                        type="text"
                                        v-model="form.name"
                                        required
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleInput90"
                                        placeholder="Nome"
                                    />
                                    <label
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                                        for="exampleInput90"
                                        >Nome
                                    </label>
                                </div>
                                <div
                                    class="relative mb-6"
                                    data-te-input-wrapper-init
                                >
                                    <input
                                        type="email"
                                        v-model="form.email"
                                        required
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleInput91"
                                        placeholder="Seu melhor e-mail"
                                    />
                                    <label
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                                        for="exampleInput91"
                                        >Seu melhor e-mail
                                    </label>
                                </div>
                                <div
                                    class="relative mb-6"
                                    data-te-input-wrapper-init
                                >
                                    <textarea
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleFormControlTextarea1"
                                        v-model="form.message"
                                        required
                                        rows="3"
                                        placeholder="Mensagem"
                                    ></textarea>
                                    <label
                                        for="exampleFormControlTextarea1"
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                                        >Mensagem</label
                                    >
                                </div>
                                <div
                                    class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex"
                                >
                                    <input
                                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                                        type="checkbox"
                                        value=""
                                        id="exampleCheck96"
                                        checked
                                    />
                                    <label
                                        class="inline-block pl-[0.15rem] hover:cursor-pointer select-none"
                                        for="exampleCheck96"
                                    >
                                        Me mande uma cópia da mensagem
                                    </label>
                                </div>
                                <button
                                    type="submit"
                                    data-te-ripple-init
                                    data-te-ripple-color="light"
                                    class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] lg:mb-0"
                                >
                                    Enviar
                                </button>
                            </form>
                        </div>
                        <div
                            class="w-full h-[60vh] shrink-0 grow-0 basis-auto lg:w-7/12"
                            v-if="!phone"
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
