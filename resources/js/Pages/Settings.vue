<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    time: String,
})
</script>
<template>
    <div class="card">
        <h1 class="text-3xl">Settings</h1>
    </div>

    <div class="mt-[800px]">

        <p>{{ time }} <span>
                <Link href="/settings" class="text-blue-500" preserve-scroll>refresh</Link>
            </span></p>
    </div>
</template>
