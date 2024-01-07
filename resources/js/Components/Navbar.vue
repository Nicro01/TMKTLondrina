<template>
    <nav
        class="sm:w-full bg-white text-gray-900 sm:text-md py-6 shadow-lg shadow-slate-400"
        :class="
            isOpen
                ? 'absolute z-10 h-full w-full transition-all delay-1000 overflow-y-hidden'
                : ''
        "
    >
        <div
            class="nav-wrapper flex sm:mx-10 mx-6 items-center"
            :class="
                isOpen
                    ? 'flex-col h-full justify-start gap-10'
                    : 'justify-between'
            "
        >
            <a href="#" class="brand-logo flex items-center gap-5">
                <div class="sm:text-2xl text-base font-extrabold">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-[#213557] to-[#365A80]"
                        :class="isOpen ? 'text-2xl mx-auto' : ''"
                    >
                        TMKT Londrina
                    </span>
                </div>
            </a>
            <div
                class="sm:hidden"
                :class="isOpen ? 'absolute right-0 mr-5 z-20' : ''"
            >
                <button v-if="!isOpen" @click="isOpen = !isOpen">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                </button>
                <button v-else @click="isOpen = !isOpen">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.5"
                        stroke="currentColor"
                        class="w-6 h-6 z-30"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
            <ul
                :class="
                    isOpen
                        ? 'flex-col h-full justify-start gap-10'
                        : 'hidden sm:flex'
                "
                class="right flex gap-6"
            >
                <li><Link href="/">Home</Link></li>
                <li><Link href="#sobre-nos">Sobre Nós</Link></li>
                <li><Link href="#contato">Contato</Link></li>
                <li>
                    <Link
                        href="/login"
                        class="button bg-gradient-to-r from-[#213557] to-[#336090] py-2 px-4 rounded-3xl text-white"
                        >Login</Link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

let isOpen = ref(false);
</script>
