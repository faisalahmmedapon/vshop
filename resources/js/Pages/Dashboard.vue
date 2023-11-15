
<script setup>
import AuthenticatedLayout from './User/Layouts/UserLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div class="mx-auto w-full max-w-screen-xl d-flex justify-between pt-12">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Dashboard</button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Profile</button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                            aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                            aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="text-gray-600 body-font bg-gray-50 flex justify-center items-center">
                        <div class="container px-5 mx-auto">
                            <div class="flex flex-wrap text-center">
                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Orders</h2>
                                            <h3 class="mt-2 text-xl font-bold text-yellow-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">Orders</button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-yellow-500 to-yellow-400 w-32 h-32  rounded-full shadow-2xl shadow-yellow-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Orders</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Tickets</h2>
                                            <h3 class="mt-2 text-xl font-bold text-orange-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-orange-400  text-white rounded-lg  tracking-wider hover:bg-orange-500 outline-none">Tickets</button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-orange-500 to-orange-400 w-32 h-32  rounded-full shadow-2xl shadow-orange-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Tickets</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Messages</h2>
                                            <h3 class="mt-2 text-xl font-bold text-red-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-red-400  text-white rounded-lg  tracking-wider hover:bg-red-500 outline-none">Messages</button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-red-500 to-red-400 w-32 h-32  rounded-full shadow-2xl shadow-red-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Messages</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Carts </h2>
                                            <h3 class="mt-2 text-xl font-bold text-green-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-green-400  text-white rounded-lg  tracking-wider hover:bg-green-500 outline-none">
                                                Carts
                                            </button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-green-500 to-green-500 w-32 h-32  rounded-full shadow-2xl shadow-green-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Carts</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Reviews</h2>
                                            <h3 class="mt-2 text-xl font-bold text-cyan-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-cyan-400  text-white rounded-lg  tracking-wider hover:bg-cyan-500 outline-none">Reviews</button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-cyan-500 to-cyan-400 w-32 h-32  rounded-full shadow-2xl shadow-cyan-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Reviews</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                                    <div
                                        class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                        <div>
                                            <h2 class="text-gray-900 text-lg font-bold">Total Views</h2>
                                            <h3 class="mt-2 text-xl font-bold text-indigo-500 ">$50000</h3>
                                            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
                                            <button
                                                class="text-sm mt-6 px-4 py-2 bg-indigo-400 text-white rounded-lg  tracking-wider hover:bg-indigo-500 outline-none">Views</button>
                                        </div>
                                        <div
                                            class="bg-gradient-to-tr from-indigo-500 to-indigo-400 w-32 h-32  rounded-full shadow-2xl shadow-[#304FFE] border-white  border-dashed border-2  flex justify-center items-center ">
                                            <div>
                                                <h1 class="text-white text-2xl">Views</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">

                    <div class="bg-white overflow-hidden shadow rounded-lg border">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{ $page.props.auth.user.name }}
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                This is some information about the user.
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $page.props.auth.user.name }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $page.props.auth.user.email }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Phone number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        (123) 456-7890
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        123 Main St<br>
                                        Anytown, USA 12345
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                </div>

                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
