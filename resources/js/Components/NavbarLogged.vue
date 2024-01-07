<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav
        class="w-full bg-white text-gray-900 sm:text-md py-6 shadow-lg shadow-slate-400"
    >
        <div class="nav-wrapper flex justify-between mx-10 items-center">
            <Link href="/leads" class="brand-logo flex items-center gap-5">
                <div class="text-2xl font-extrabold">
                    <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-[#213557] to-[#365A80]"
                    >
                        TMKT Londrina
                    </span>
                </div></Link
            >
            <ul id="nav-mobile" class="right hide-on-med-and-down flex gap-6">
                <li><Link href="/leads">Leads</Link></li>
                <li><Link href="/leads/create">Novo Lead</Link></li>
            </ul>
        </div>
    </nav>
</template>
