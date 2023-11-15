<script setup>
import AuthenticatedLayout from './User/Layouts/UserLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="py-16">
                            <h4 class="text-3xl font-bold text-red-500 text-center">
                                "You are Authenticated User"
                            </h4>
                            <p class="mt-4 text-gray-600 text-center">
                                Explore our amazing products and add them to your
                                cart!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
