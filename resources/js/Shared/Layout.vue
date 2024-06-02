<script setup>
import {computed} from 'vue'
import Nav from './Nav.vue'
import { usePage } from '@inertiajs/vue3';
const username = computed(() => usePage().props.auth.user.name)
</script>

<template>
    <section class="p-6 bg-gray-200 ">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App welocme {{ username }} </h1>
            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
        <slot/>
        </div>
    </section>
</template>
