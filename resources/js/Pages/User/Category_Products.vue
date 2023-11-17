<template lang="">
    <UserLayout>
        <Head :title="category_products.name" />

        <div class="">
            <div
                class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-15 lg:max-w-7xl lg:px-8"
            >
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                    {{ category_products.name }}
                </h2>

                <div
                    v-if="category_products.products.length > 0"
                    class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
                >
                    <div
                        v-for="product in category_products.products"
                        :key="product.id"
                        class="group relative add-to-cart"
                    >
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                        >
                        <Link :href="route('product_detail',product.slug)">
                                <img
                                    v-if="product.product_images.length > 0"
                                    :src="`/${product.product_images[0].image}`"
                                    :alt="product.title"
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                                />
                                <img
                                    v-else
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                    :alt="product.title"
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                                />
                            </Link>
                            <div class="px-5 pb-5">
                                <h3 class="text-sm text-gray-700">
                                    {{ product.title }}
                                </h3>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <svg
                                                aria-hidden="true"
                                                class="w-5 h-5 text-yellow-400"
                                                fill="currentColor"
                                                viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                ></path></svg
                                            ><svg
                                                aria-hidden="true"
                                                class="w-5 h-5 text-yellow-400"
                                                fill="currentColor"
                                                viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                ></path></svg
                                            ><svg
                                                aria-hidden="true"
                                                class="w-5 h-5 text-yellow-400"
                                                fill="currentColor"
                                                viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                ></path></svg
                                            ><svg
                                                aria-hidden="true"
                                                class="w-5 h-5 text-yellow-400"
                                                fill="currentColor"
                                                viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                ></path></svg
                                            ><svg
                                                aria-hidden="true"
                                                class="w-5 h-5 text-yellow-400"
                                                fill="currentColor"
                                                viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                ></path></svg
                                            ><span
                                                class="ml-1 text-gray-500 dark:text-gray-400"
                                                >5.0</span
                                            >
                                        </div>
                                    </div>
                                    <div
                                        @click="addToCart(product)"
                                        class="text-black bg-white-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between pt-3"
                                >
                                    <span
                                        class="text-2xl font-bold text-gray-900 dark:text-white"
                                        >Price: ${{ product.price - 2 }}
                                        <sup
                                            ><del>{{ product.price }} </del>
                                            <sup>-$2</sup></sup
                                        >
                                    </span>
                                </div>

                                <div class="mt-4 flex justify-between">
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300"
                                    >
                                        C: {{ product.category.name }}
                                    </span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
                                    >
                                        B: {{ product.brand.name }}</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-16 flex justify-center" v-else>
                    <div>
                        <h4 class="text-3xl font-bold text-red-500">
                            "Items Not Found !!! Please try another Items"
                        </h4>
                        <p class="mt-4 text-gray-600">
                            Explore our amazing products and add them to your
                            cart!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </UserLayout>
</template>

<script setup>
import { Head, Link, usePage } from "@inertiajs/vue3";
import UserLayout from "./Layouts/UserLayout.vue";
import Swal from "sweetalert2";
import { router } from "@inertiajs/vue3";


defineProps({
    category_products : Array,
});



const addToCart = async (product) => {
    try {
        const response = await router.get("/add-to-cart/" + product.id);

        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            text: "Add to cart successfully",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 5000,
        });
        // You can also create a computed property if you want to perform some computations on the total
        const total = usePage().props.total;
        usePage().props.total = total + 1;
    } catch (error) {
        console.error("Error adding to cart:", error.message);
    }
};
</script>

<style>
.add-to-cart {
    cursor: pointer;
}
</style>
