<template>
    <UserLayout>

        <Head title="Cart" />
        <section class="bg-white dark:bg-gray-900">

            <!-- when user authenticated  -->
            <div v-if="carts.length >= 1"
                class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12 justify-between md:flex md:space-x-6 xl:px-0">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">Qty</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="cart in carts" :key="cart.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4">
                                    <img v-if="cart.product.product_images.length >
                                        0
                                        " :src="`/${cart.product.product_images[0].image}`" :alt="cart.product.title"
                                        class="w-16 md:w-32 max-w-full max-h-full" />
                                    <img v-else
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                        :alt="cart.product.title" class="w-16 md:w-32 max-w-full max-h-full" />

                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <button @click="decrement(cart)"
                                            class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <div>
                                            <input :value="cart.quantity" type="number" id="first_product"
                                                class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required />
                                        </div>
                                        <button @click="increment(cart)"
                                            class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    $ {{ cart.product.price }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    $ {{ cart.quantity * cart.product.price }}
                                </td>
                                <td class="px-6 py-4">
                                    <button @click="remove(cart)"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr v-for="product in products" :key="product.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4">
                                    <img v-if="product.product_images.length > 0"
                                        :src="`/${product.product_images[0].image}`" :alt="product.title"
                                        class="w-16 md:w-32 max-w-full max-h-full" />
                                    <img v-else
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                        :alt="product.title" class="w-16 md:w-32 max-w-full max-h-full" />

                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{ product.title }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <button @click="decrement(product)"
                                            class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <div>
                                            <input :value="1" type="number" id="first_product"
                                                class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required />
                                        </div>
                                        <button @click="increment(product)"
                                            class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    $ {{ product.price }}
                                </td>
                                <td class="px-6 py-4">
                                    <button @click="remove(product)"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="p-6 flex justify-end ">
                        <button @click="removeAllFormCart()" type="button"
                            class="mt-6 px-3 rounded-md bg-red-500 py-1.5 font-medium text-blue-50 hover:bg-red-600"> Remove
                            All Form Cart </button>
                    </div>
                </div>


                <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                    <div class="mb-2 flex justify-between">
                        <p class="text-gray-700">Subtotal</p>
                        <p class="text-gray-700">${{ subtotal.toFixed(2) }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-700">Shipping</p>
                        <p class="text-gray-700">${{ shippingCharge.toFixed(2) }}</p>
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                        <p class="text-lg font-bold">Total</p>
                        <div class="">
                            <p class="mb-1 text-lg font-bold">${{ totalAmount.toFixed(2) }}</p>
                            <p class="text-sm text-gray-700">including VAT</p>
                        </div>
                    </div>
                    <Link :href="route('check.out')"
                        class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600 px-10 py-2">Check
                        out</Link>
                </div>
            </div>





            <!-- when user is guest  -->
            <div v-else-if="products.length >= 1"
                class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12 justify-between md:flex md:space-x-6 xl:px-0">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">


                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-16 py-3">
                                    <span class="">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">Qty</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="product in products" :key="product.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4">
                                    <img v-if="product.product_images.length > 0"
                                        :src="`/${product.product_images[0].image}`" :alt="product.title"
                                        class="w-16 md:w-32 max-w-full max-h-full" />
                                    <img v-else
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                        :alt="product.title" class="w-16 md:w-32 max-w-full max-h-full" />

                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <button @click="decrement(product)"
                                            class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <div>
                                            <input :value="1" type="number" id="first_product"
                                                class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required />
                                        </div>
                                        <button @click="increment(product)"
                                            class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    $ {{ product.price }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    $ {{ product.price * 1 }}
                                </td>
                                <td class="px-6 py-4">
                                    <button @click="remove(product)"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        Remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="p-6 flex justify-end ">
                        <button @click="removeAllFormCart()" type="button"
                            class="mt-6 px-3 rounded-md bg-red-500 py-1.5 font-medium text-blue-50 hover:bg-red-600"> Remove
                            All Form Cart </button>
                    </div>
                </div>


                <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                    <div class="mb-2 flex justify-between">
                        <p class="text-gray-700">Subtotal</p>
                        <p class="text-gray-700">$129.99</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-700">Shipping</p>
                        <p class="text-gray-700">$4.99</p>
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                        <p class="text-lg font-bold">Total</p>
                        <div class="">
                            <p class="mb-1 text-lg font-bold">$134.98 USD</p>
                            <p class="text-sm text-gray-700">including VAT</p>
                        </div>
                    </div>
                    <button
                        class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check
                        out</button>
                </div>
            </div>






            <!-- if products not fount in his cart -->

            <div v-else
                class="mt-12 ring rounded ring-yellow-500 py-12 px-4 mx-auto max-w-screen-xl text-center justify-center shadow">
                <!-- <h4 class="py-20 font-bold text-7xl">Product Not Found</h4> -->
                <h4 class="text-3xl font-bold text-red-500">
                    No Products Found in Your Cart
                </h4>
                <p class="mt-4 text-gray-600">
                    Explore our amazing products and add them to your
                    cart!
                </p>
            </div>



        </section>


        <!-- body main part end -->
    </UserLayout>
</template>

<script setup>
import UserLayout from "./Layouts/UserLayout.vue";

import { ref , computed } from "vue";
import { Head, usePage, Link } from "@inertiajs/vue3";
import Swal from "sweetalert2";
const products = ref(usePage().props.products);
const carts = ref(usePage().props.carts);


const increment = async (cart) => {
    try {
        const response = await axios.get(
            "/add-to-cart-increment/" + cart.product_id
        );
        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            text: "Add to cart increment successfully",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 5000,
        });

        updateCartViews();
    } catch (error) {
        console.error("Error adding to cart:", error.message);
    }
};
const decrement = async (cart) => {
    try {
        const response = await axios.get(
            "/add-to-cart-decrement/" + cart.product_id
        );
        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            text: "Add to cart decrement successfully",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 5000,
        });

        updateCartViews();
    } catch (error) {
        console.error("Error decrement from cart:", error.message);
    }
};

const remove = async (cart) => {
    try {
        const response = await axios.get(
            "/add-to-cart-remove/" + cart.product_id
        );
        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            text: "Add to cart remove successfully",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 5000,
        });

        updateCartViews();
        const total = usePage().props.total;
        usePage().props.total = total - 1;

    } catch (error) {
        console.error("Error removing to cart:", error.message);
    }
};

const updateCartViews = async () => {
    try {
        const update_cart_views = await axios.get("/update-cart-views");
        products.value = update_cart_views.data.products;
        carts.value = update_cart_views.data.carts;
    } catch (error) {
        console.error("Error updating cart views:", error);
    }
};
const removeAllFormCart = async () => {
    try {
        const removeAllFormCart = await axios.get("/remove-all-from-cart");

        if (removeAllFormCart) {
            Swal.fire({
                toast: true,
                icon: "success",
                position: "top-end",
                text: "Remove all product form cart successfully",
                showCloseButton: true,
                showConfirmButton: false,
                timer: 5000,
            });

            updateCartViews();

            const total = usePage().props.total;
            usePage().props.total = total - total;
        }

    } catch (error) {
        console.error("Error Remove all product form cart:", error);
    }
};



// this code for shippingCharge subtotal totalAmount

const shippingCharge = ref(1); // You can adjust the shipping charge as needed

const subtotal = computed(() => {
  return carts.value.reduce((total, cart) => total + cart.quantity * cart.product.price, 0);
});

const totalAmount = computed(() => {
  return subtotal.value + shippingCharge.value;
});




</script>

<style></style>
