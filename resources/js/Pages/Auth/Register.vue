<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <div class="w-full max-w-sm p-4 bg-white  rounded-lg  sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" @submit.prevent="submit">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white  text-center">Registration</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        Name</label>
                    <input id="name" type="text" v-model="form.name" required autofocus autocomplete="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <p class="text-red-600">{{ form.errors.name }}</p>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input id="email" type="email" v-model="form.email" required autocomplete="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <p class="text-red-600">{{ form.errors.email }}</p>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" name="password" id="password" v-model="form.password"
                        autocomplete="current-password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <p class="text-red-600">{{ form.errors.password }}</p>
                </div>
                <div>
                    <label for="password_confirmation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input id="password_confirmation" type="password" v-model="form.password_confirmation" required
                        autocomplete="new-password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <p class="text-red-600">{{ form.errors.password_confirmation }}</p>
                </div>

                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered?
                    <Link :href="route('login')" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                        class="text-blue-700 hover:underline dark:text-blue-500">Already registered?</Link>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
