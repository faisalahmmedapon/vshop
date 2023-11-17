<template lang="">
    <AdminLayout>
        <Head title="Categories" />



        <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
                                <div class="px-4 mx-auto max-w-screen-2xl">
                                    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                        <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                            <div class="flex items-center flex-1 space-x-4">
                                                <h5>
                                                    <span class="text-gray-500">All Categories:</span>
                                                    <span class="dark:text-white">{{ categories.length }}</span>
                                                </h5>
                                            </div>
                                            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                                <button @click="openAddModal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white  rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                    Add new Category
                                                </button>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">Category</th>
                                                        <th scope="col" class="px-4 py-3"> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr v-for="category in categories" :key="category.id" class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ category.name }}</td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">

                                                            <button class="mr-1" @click="openEditModal(category)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>

                                                            </button>
                                                            <button class="mr-1" @click="removeCategory(category)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                Showing
                                                <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                                                of
                                                <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                                            </span>
                                            <ul class="inline-flex items-stretch -space-x-px">
                                                <li>
                                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <span class="sr-only">Previous</span>
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                                </li>
                                                <li>
                                                    <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <span class="sr-only">Next</span>
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
        </section>

        <!-- add product form start -->

        <el-dialog
            v-model="dialogVisible"
            :title="isEditMode ? 'Edit Category' : 'Add New Category'"
            width="30%"
        >
            <form
                @submit.prevent="isEditMode ? updateProduct() : createProduct()"
            >
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        v-model="useThisFormForCategoryCreateOrUpdate.name"
                        type="text"
                        name="name"
                        id="name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                    />
                    <label
                        for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Name</label
                    >
                    <div v-if="errors.name">{{ errors.name }}</div>
                </div>

                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Submit
                </button>
            </form>
        </el-dialog>

        <!-- add product form end -->




    </AdminLayout>
</template>
<script setup>
import { Head, usePage, Link } from "@inertiajs/vue3";
import { useForm, router } from "@inertiajs/vue3";
import AdminLayout from ".././Components/AdminLayout.vue";
import { ref } from "vue";

import Swal from "sweetalert2";

defineProps({
    categories: Array,
    errors: Object,
});

// open add modal
const isEditMode = ref(false);
const dialogVisible = ref(false);

// for product create use this code
const openAddModal = () => {
    dialogVisible.value = true;
    isEditMode.value = false;
};

const useThisFormForCategoryCreateOrUpdate = useForm({
    id: "",
    name: "",
});

const createProduct = async () => {
    try {
        console.log(useThisFormForCategoryCreateOrUpdate);

        // Append each image file to form data
        await router.post(
            "/admin/category/store",
            useThisFormForCategoryCreateOrUpdate,
            {
                onSuccess: (page) => {
                    dialogVisible.value = false;
                    useThisFormForCategoryCreateOrUpdate.reset();
                    Swal.fire({
                        toast: true,
                        icon: "success",
                        position: "top-end",
                        text: "Category created successfully",
                        showCloseButton: true,
                        showConfirmButton: false,
                        timer: 5000,
                    });
                },
            }
        );
    } catch (e) {
        console.log(e);
    }
};

// for product update use this code

const openEditModal = (category) => {
    isEditMode.value = true;
    dialogVisible.value = true;

    useThisFormForCategoryCreateOrUpdate.id = category.id;
    useThisFormForCategoryCreateOrUpdate.name = category.name;
};

const updateProduct = async () => {
    try {
        await router.post(
            "/admin/category/update/" + useThisFormForCategoryCreateOrUpdate.id,
            useThisFormForCategoryCreateOrUpdate,
            {
                onSuccess: (page) => {
                    dialogVisible.value = false;
                    useThisFormForCategoryCreateOrUpdate.reset();
                    Swal.fire({
                        toast: true,
                        icon: "success",
                        position: "top-end",
                        text: "Category updated successfully",
                        showCloseButton: true,
                        showConfirmButton: false,
                        timer: 5000,
                    });
                },
            }
        );
    } catch (e) {
        console.log(e);
    }
};




const removeCategory = async (category) => {
    try {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                router.get(
                    "/admin/category/delete/" + category.id, {
                    onSuccess: (page) => {
                        dialogVisible.value = false;
                        useThisFormForCategoryCreateOrUpdate.reset();
                        Swal.fire(
                            'Deleted!',
                            'Your Category has been deleted.',
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
<style>
.demo-image__error .image-slot {
    font-size: 30px;
}

.demo-image__error .image-slot .el-icon {
    font-size: 30px;
}

.demo-image__error .el-image {
    width: 100%;
    height: 200px;
}
</style>
