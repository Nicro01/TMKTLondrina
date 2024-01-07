<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>
<template>
    <nav
        class="w-full bg-white text-gray-900 sm:text-md py-6 shadow-lg shadow-slate-400"
    >
        <div class="nav-wrapper flex justify-between mx-10 items-center">
            <a href="#" class="brand-logo flex items-center gap-5">
                <div class="text-2xl font-extrabold">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-[#213557] to-[#365A80]"
                    >
                        TMKT Londrina
                    </span>
                </div></a
            >
            <ul id="nav-mobile" class="right hide-on-med-and-down flex gap-6">
                <li><Link href="/">Home</Link></li>
                <li><Link href="#sobre-nos">Sobre Nós</Link></li>
                <li>
                    <Link href="#contato">Contato</Link>
                </li>

                <li>
                    <Link
                        href="/leads"
                        class="button bg-gradient-to-r from-[#213557] to-[#336090] py-2 px-4 rounded-3xl text-white"
                        >Dashboard</Link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>
