<template>
    <UserLayout>

        <Head title="Cart Checkout" />
        <section class="bg-white dark:bg-gray-900">


            <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32 mt-5">
                <a href="#" class="text-2xl font-bold text-gray-800">Sneekpeeks</a>
                <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
                    <div class="relative">
                        <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                            <li class="flex items-center space-x-3 text-left sm:space-x-4">
                                <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700"
                                    href="#"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg></a>
                                <span class="font-semibold text-gray-900">Shop</span>
                            </li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            <li class="flex items-center space-x-3 text-left sm:space-x-4">
                                <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2"
                                    href="#">2</a>
                                <span class="font-semibold text-gray-900">Shipping</span>
                            </li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            <li class="flex items-center space-x-3 text-left sm:space-x-4">
                                <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-400 text-xs font-semibold text-white"
                                    href="#">3</a>
                                <span class="font-semibold text-gray-500">Payment</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
                <div class="px-4 pt-8">
                    <p class="text-xl font-medium">Order Summary</p>
                    <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
                    <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                        <div v-for="cart in carts" :key="cart.id" class="flex flex-col rounded-lg bg-white sm:flex-row">

                            <img v-if="cart.product.product_images.length >
                                0
                                " :src="`/${cart.product.product_images[0].image}`" :alt="cart.product.title"
                                class="m-2 h-24 w-28 rounded-md border object-cover object-center" />
                            <img v-else
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                :alt="cart.product.title"
                                class="m-2 h-24 w-28 rounded-md border object-cover object-center" />


                            <div class="flex w-full flex-col px-4 py-4">
                                <span class="font-semibold">T: {{ cart.product.title }}</span>
                                <span class="float-right text-gray-400"> Q: {{ cart.quantity }}</span>
                                <p class="text-lg font-bold"> P: $ {{ cart.quantity * cart.product.price }}</p>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
                    <p class="mt-8 text-lg font-medium">Select Payment Methods </p>

                    <form class="mt-5 grid gap-6">

                        <div class="">
                            <div class="relative py-2">
                                <input class="peer hidden" id="radio_for_payment_methods_1" type="radio" name="radio"
                                    checked />
                                <span
                                    class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                                <label
                                    class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                                    for="radio_for_payment_methods_1">
                                    <img class="w-14 object-contain"
                                        src="https://w7.pngwing.com/pngs/510/354/png-transparent-food-indian-cuisine-bangladeshi-cuisine-devops-dubai-cash-on-delivery.png"
                                        alt="Cash On Delivery" />
                                    <div class="ml-5">
                                        <span class="mt-2 font-semibold"> Cash On Delivery </span>
                                    </div>
                                </label>
                            </div>
                            <div class="relative py-2">
                                <input class="peer hidden" id="radio_for_payment_methods_2" type="radio" name="radio" />
                                <span
                                    class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                                <label
                                    class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                                    for="radio_for_payment_methods_2">
                                    <img class="w-14 object-contain"
                                        src="https://easydigitaldownloads.com/wp-content/uploads/edd/2019/03/stripe-product-image.png"
                                        alt="" />
                                    <div class="ml-5">
                                        <span class="mt-2 font-semibold"> Stripe </span>
                                    </div>
                                </label>
                            </div>
                        </div>


                        <p class="text-xl font-medium mt-3">Shipping Address</p>
                        <p class="text-gray-400">Complete your order by providing your Shipping Address.</p>
                        <div class="">

                            <div class="p-1">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="name" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Name Here" required="">
                            </div>

                            <div class="p-1">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Email Here" required="">
                            </div>
                            <div class="p-1">
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                                <input type="number" name="phone" id="phone" placeholder="01307788699"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>



                            <!-- Total -->
                            <div class="mt-6 border-t border-b py-2">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Subtotal</p>
                                    <p class="font-semibold text-gray-900">${{ subtotal.toFixed(2) }}</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Shipping</p>
                                    <p class="font-semibold text-gray-900">${{ shippingCharge.toFixed(2) }}</p>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Total</p>
                                <p class="text-2xl font-semibold text-gray-900">${{ totalAmount.toFixed(2) }}</p>
                            </div>
                        </div>
                        <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Place
                            Order</button>

                    </form>
                </div>
            </div>


        </section>


        <!-- body main part end -->
    </UserLayout>
</template>

<script setup>
import UserLayout from "./Layouts/UserLayout.vue";

import { ref, computed } from "vue";
import { Head, usePage, } from "@inertiajs/vue3";
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
