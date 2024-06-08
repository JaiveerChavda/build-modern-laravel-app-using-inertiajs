<script setup>
import {computed} from 'vue'
import Nav from './Nav.vue'
import { usePage} from '@inertiajs/vue3';
const username = computed(() => usePage().props.auth.user.username)
</script>

<template>
    <Head>
        <title>MyApp</title>
        <meta head-key="description" name="description" content="This is the default description" />
    </Head>
    <section class="p-6 bg-gray-200 ">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App <span class="text-sm font-normal">welocme {{ username }}</span></h1>

            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
        <slot/>
        </div>
    </section>
</template>
