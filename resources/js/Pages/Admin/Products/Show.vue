<template>
    <AdminLayout>

        <Head title="Product Show" />

        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
            <div class="mx-auto max-w-screen-2xl px-4 lg:px-12">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg">


                    <form>
                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 px-3 py-3">
                            <div class="space-y-4 sm:col-span-2 sm:space-y-6">
                                <div>
                                    <label for="title"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        Title</label>
                                    <input type="text" name="title" id="title"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        :value="product.title" required="">
                                </div>
                                <div>
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <div
                                        class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                        <div
                                            class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                            <div
                                                class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                                                <div class="flex items-center space-x-1 sm:pr-4">
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Attach file</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Embed map</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Upload image</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Format code</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Add emoji</span>
                                                    </button>
                                                </div>
                                                <div class="flex-wrap items-center hidden space-x-1 sm:flex sm:pl-4">
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Add list</span>
                                                    </button>
                                                    <button type="button"
                                                        class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Settings</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <button type="button" data-tooltip-target="tooltip-fullscreen"
                                                class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="sr-only">Full screen</span>
                                            </button>
                                            <div id="tooltip-fullscreen" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                                data-popper-reference-hidden="" data-popper-escaped=""
                                                data-popper-placement="bottom"
                                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 335px, 0px);">
                                                Show full screen
                                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-white rounded-b-lg dark:bg-gray-800"><textarea
                                                id="description" rows="8"
                                                class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                placeholder="Write product description here"
                                                required="">{{ product.description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        Images</span>
                                    <div class="grid grid-cols-3 gap-4 mb-4">

                                        <div v-for="product_image in product.product_images" :key="product_image.id"
                                            class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                                            <img :src="`/${product_image.image}`">
                                            <button type="button" @click="RemoveImage(product_image)"
                                                class="absolute text-blue-600 dark:text-blue-500 hover:text-blue-500 dark:hover:text-blue-400 bottom-1 left-1">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="sr-only">Remove image</span>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="space-y-4 sm:space-y-6">
                                <div>
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="text" id="price"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        :value="product.price" placeholder="Product Price" required="">
                                </div>
                                <div>
                                    <label for="category"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label><select
                                        id="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option v-for="category in categories" :value="category.name"> {{ category.name }}
                                        </option>
                                    </select>
                                </div>

                                <div>
                                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Brands
                                    </label>
                                    <select id="brand"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option v-for="brand in brands" :value="brand.name">
                                            {{ brand.name }}
                                        </option>
                                    </select>
                                </div>



                                <div>
                                    <label for="quantity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Quantity</label>
                                    <input type="number" name="quantity" id="quantity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        :value="product.quantity" placeholder="Ex. 12" required="">
                                </div>
                                <div>
                                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Stock</label>
                                    <input type="number" name="stock" id="stock"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        :value="product.inStock" placeholder="Ex. 12" required="">
                                </div>
                                <div>

                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                        </div>
                                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"> Published
                                        </span>
                                    </label>

                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </section>

    </AdminLayout>
</template>

<script setup>

import AdminLayout from '../Components/AdminLayout.vue';
import Swal from "sweetalert2";
import { useForm, router, Head } from "@inertiajs/vue3";
defineProps({
    categories: Array,
    brands: Array,
    product: Object,
});


const RemoveImage = async (product_image) => {
    try {

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to remove this image!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                router.get(
                    "/admin/remove/product/image/" + product_image.id, {
                    onSuccess: (page) => {
                        dialogVisible.value = false;
                        Swal.fire(
                            'Deleted!',
                            'Your Product image has been deleted.',
                            'success'
                        )
                    },
                }
                );
            }
        });


    } catch (e) {
        console.log(e);
    }
};



</script>


<style></style>
