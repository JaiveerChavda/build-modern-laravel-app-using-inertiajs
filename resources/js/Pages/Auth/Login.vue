<script setup>
import {useForm} from '@inertiajs/vue3'
import ErrorMessage from '../../Shared/Input/ErrorMessage.vue'
let form = useForm({
    email:'',
    password:'',
})

let submit = () => {
    form.post('/login',{
        onFinish: () => form.reset('password')
    });
}

defineOptions({
    layout:null
})
</script>

<template>

    <Head title="Login" />

    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-md mx-auto border w-full">
            <h1 class="text-3xl mb-6">Log In</h1>

            <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input type="email" v-model="form.email" class="rounded border border-gray-400 p-2 w-full" name="email"
                        id="email">
                    <ErrorMessage :message="form.errors.email" />

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        password
                    </label>

                    <input type="password" v-model="form.password" class="rounded border border-gray-400 p-2 w-full"
                        name="password" id="password">
                    <ErrorMessage :message="form.errors.password" />

                </div>

                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    :disabled="form.processing">Submit</button>
            </form>
        </section>
    </main>
</template>
