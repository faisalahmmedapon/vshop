<template>
    <UserLayout>
        <Head title="Product Details"/>


        <section class="py-20 overflow-hidden bg-white font-poppins dark:bg-gray-800">
            <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 md:w-1/2">
                        <div class="sticky top-0 z-50 overflow-hidden">
                            <div
                                class="relative mb-6 lg:mb-10"
                                style="height: 450px"
                            >
                                <img
                                    v-if="(product.product_images && product.product_images.length > 0)"
                                    :src="`${imageUrl}` || `/${product.product_images[0].image}`"
                                    :alt="product.title"
                                    class="object-contain w-full h-full"
                                />
                                <img
                                    v-else
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                    :alt="product.title"
                                    class="object-contain w-full h-full"
                                />
                            </div>
                            <div class="flex-wrap hidden md:flex" v-if="product.product_images.length > 0">
                                <div v-for="product_image in product.product_images" class="w-1/2 p-2 sm:w-1/4">
                                    <Link @click="changeImage(product_image)" class="block border border-blue-100 dark:border-gray-700 dark:hover:border-gray-600 hover:border-blue-300" >
                                        <img :src="`/${product_image.image}`" :alt="product.title" class="object-cover w-full lg:h-32" />
                                    </Link>
                                </div>
                            </div>
                            <div class="flex-wrap hidden md:flex" v-else>
                                <img

                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                    :alt="product.title"
                                    class="h-full w-full object-cover object-center lg:h-full lg:w-full"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2">
                        <div class="lg:pl-20">
                            <div
                                class="pb-6 mb-8 border-b border-gray-200 dark:border-gray-700"
                            >
                                <span
                                    class="text-lg font-medium text-rose-500 dark:text-rose-200"
                                >New</span
                                >
                                <h2
                                    class="max-w-xl mt-2 mb-6 text-xl font-bold dark:text-gray-300 md:text-2.5xl"
                                >
                                    {{ product.title }}
                                </h2>
                                <div class="flex flex-wrap items-center mb-6">
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
                                            ></path>
                                        </svg
                                        >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5 text-yellow-400"
                                            fill="currentColor"
                                            viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            ></path>
                                        </svg
                                        >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5 text-yellow-400"
                                            fill="currentColor"
                                            viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            ></path>
                                        </svg
                                        >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5 text-yellow-400"
                                            fill="currentColor"
                                            viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            ></path>
                                        </svg
                                        >
                                        <svg
                                            aria-hidden="true"
                                            class="w-5 h-5 text-yellow-400"
                                            fill="currentColor"
                                            viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            ></path>
                                        </svg
                                        >
                                        <span
                                            class="ml-1 text-gray-500 dark:text-gray-400"
                                        >5.0</span
                                        >
                                    </div>
                                    <Link
                                        class="mb-4 ml-3 text-xs underline dark:text-gray-400 dark:hover:text-gray-300 lg:mb-0"
                                        href="#"
                                    >
                                        Be the first to review the product
                                    </Link>
                                </div>
                                <p
                                    class="max-w-md mb-8 text-gray-700 dark:text-gray-400"
                                >
                                    {{ product.description }}
                                </p>
                                <div
                                    class="p-4 mb-8 border border-gray-300 dark:border-gray-700"
                                >
                                    <h2
                                        class="mb-4 text-xl font-semibold dark:text-gray-400"
                                    >
                                        Real time
                                        <span
                                            class="px-2 bg-blue-500 text-gray-50"
                                        >26</span
                                        >
                                        visitors right now!
                                    </h2>
                                    <div
                                        class="mb-1 text-xs font-medium text-gray-700 dark:text-gray-400"
                                    >
                                        Hurry up! left 23 in Stock
                                    </div>
                                    <div
                                        class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-600"
                                    >
                                        <div
                                            class="bg-blue-600 dark:bg-blue-400 h-2.5 rounded-full"
                                            style="width: 45%"
                                        ></div>
                                    </div>
                                </div>
                                <p
                                    class="inline-block text-2xl font-semibold text-gray-700 dark:text-gray-400 space-x-2"
                                >
                                    <span>$ {{ product.price - 2 }}</span>
                                    <span
                                        class="font-normal text-gray-500 line-through dark:text-gray-400"
                                    > <sup>$ {{ product.price }}</sup> </span
                                    >
                                </p>
                            </div>
                            <!-- <div class="mb-8">
                            <h2 class="mb-2 text-xl font-bold dark:text-gray-400">
                                Color</h2>
                            <div class="flex flex-wrap -mb-2">
                                <button
                                    class="p-1 mb-2 mr-2 border border-transparent rounded-full hover:border-gray-400 dark:border-gray-800 dark:hover:border-gray-400 ">
                                    <div class="w-6 h-6 bg-red-600 rounded-full"></div>
                                </button>
                                <button
                                    class="p-1 mb-2 mr-2 border border-transparent rounded-full hover:border-gray-400 dark:border-gray-800 dark:hover:border-gray-400">
                                    <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                                </button>
                                <button
                                    class="p-1 mb-2 border border-transparent rounded-full hover:border-gray-400 dark:border-gray-800 dark:hover:border-gray-400">
                                    <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                                </button>
                                <button
                                    class="p-1 mb-2 border border-transparent rounded-full hover:border-gray-400 dark:border-gray-800 dark:hover:border-gray-400">
                                    <div class="w-6 h-6 rounded-full bg-sky-400"></div>
                                </button>
                            </div>
                        </div>
                         <div class="pb-6 mb-8 border-b border-gray-300 dark:border-gray-700">
                            <h2 class="mb-2 text-xl font-bold dark:text-gray-400">
                                Size</h2>
                            <div class="flex flex-wrap -mb-2">
                                <button
                                    class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 dark:border-gray-400 hover:text-blue-600 dark:hover:border-gray-300 dark:text-gray-400">XL
                                </button>
                                <button
                                    class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">S
                                </button>
                                <button
                                    class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">M
                                </button>
                                <button
                                    class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 dark:border-gray-400 dark:hover:border-gray-300 dark:text-gray-400">XS
                                </button>
                            </div>
                        </div> -->
                            <div class="flex flex-wrap items-center">
<!--                                <div class="mb-4 mr-4 lg:mb-0">-->
<!--                                    <div class="w-28">-->
<!--                                        <div-->
<!--                                            class="relative flex flex-row w-full h-10 bg-transparent rounded-lg"-->
<!--                                        >-->
<!--                                            <button-->
<!--                                                class="w-20 h-full text-gray-600 bg-gray-100 border-r rounded-l outline-none cursor-pointer dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-300"-->
<!--                                            >-->
<!--                                                <span-->
<!--                                                    class="m-auto text-2xl font-thin"-->
<!--                                                >-</span-->
<!--                                                >-->
<!--                                            </button>-->
<!--                                            <input-->
<!--                                                type="number"-->
<!--                                                class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-100 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black"-->
<!--                                                placeholder="1"-->
<!--                                            />-->
<!--                                            <button-->
<!--                                                class="w-20 h-full text-gray-600 bg-gray-100 border-l rounded-r outline-none cursor-pointer dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-300"-->
<!--                                            >-->
<!--                                                <span-->
<!--                                                    class="m-auto text-2xl font-thin"-->
<!--                                                >+</span-->
<!--                                                >-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="mb-4 mr-4 lg:mb-0">
                                    <button
                                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        Buy Now
                                    </button>
                                </div>
                                <div class="mb-4 mr-4 lg:mb-0">
                                    <button
                                        @click="addToCart(product)"
                                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-cart"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mb-4 lg:mb-0">
                                    <button
                                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-heart"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </UserLayout>
</template>

<script setup>
import UserLayout from "./Layouts/UserLayout.vue";
import {Head, usePage} from "@inertiajs/vue3";
import Swal from "sweetalert2";
import {router} from "@inertiajs/vue3";

import { ref } from 'vue';

const imageUrl = ref('');

defineProps({
    product: Object,
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



const changeImage = (image) => {
    imageUrl.value = image.image.startsWith('/') ? image.image : `/${image.image}`;
    // console.log(imageUrl.value);
};






</script>

<style>
.add-to-cart {
    cursor: pointer;
}
</style>
