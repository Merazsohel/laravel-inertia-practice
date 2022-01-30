<template>
    <Head title="Login Page"/>
<main class="grid place-items-center min-h-screen">
    <section class="bg-white p-8 rounded-xl max-w-md mx-auto border">
        <h1 class="text-3xl max-w-md  mx-auto">Login</h1>

        <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                <input v-model="form.email" class="border border-gray-400 p-2 w-full" type="email" name="email" id="email">
                <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                <input v-model="form.password" class="border border-gray-400 p-2 w-full" type="password" name="password" id="password">
                <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">
                    Login
                </button>
            </div>
        </form>
    </section>
</main>
</template>

<script>
export default {
    layout: null
}
</script>

<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

let form = useForm({
    email: '',
    password: ''
});

let submit = () => {
    form.post('/login');
};
</script>
