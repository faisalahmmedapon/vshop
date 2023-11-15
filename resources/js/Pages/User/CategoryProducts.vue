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

                <div v-if="category_products.products.length > 0"
                    class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
                >
                    <div
                        v-for="product in category_products.products"
                        :key="product.id"
                        class="group relative add-to-cart"
                        @click="addToCart(product)"
                    >
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80"
                        >
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
                        </div>

<div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                        {{ product.title }}
                                </h3>
                            </div>
                        </div>
<div class="mt-4 flex justify-between">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ product.category.name }}</span>

                            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">${{ product.price }}</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ product.brand.name }}</span>

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

        <!-- body main part end -->
    </UserLayout>
</template>

<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import UserLayout from "./Layouts/UserLayout.vue";
import Swal from "sweetalert2";
import { router } from "@inertiajs/vue3";
import { onMounted, ref, watch, computed } from "vue";


const category_products = usePage().props.category_products;



const addToCart = async (product) => {
    try {
        const response = await axios.get("/add-to-cart/" + product.id);

        // Assuming the response contains relevant data
        // console.log(response.data);
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
</style> -->
