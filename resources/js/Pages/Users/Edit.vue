<script setup>
import { useForm } from '@inertiajs/vue3';
import ErrorMessage from '../../Shared/Input/ErrorMessage.vue'

let props = defineProps({
    user:Object
});

let form = useForm({
    'name':props.user.name,
    'email':props.user.email,
})

</script>

<template>
     <Head title="Update User" />

<h1 class="text-3xl">Update Users</h1>

<form @submit.prevent="form.put(route('users.update',user.id))" class="max-w-md mx-auto mt-8">

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
            name
        </label>

        <input type="text" v-model="form.name" class="border border-gray-400 p-2 w-full" name="name" id="name"
            >
            <ErrorMessage :message="form.errors.name"/>
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
            Email
        </label>

        <input type="email" v-model="form.email" class="border border-gray-400 p-2 w-full" name="email" id="email"
            >
            <ErrorMessage :message="form.errors.email"/>

    </div>

    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">Submit</button>
</form>
</template>
