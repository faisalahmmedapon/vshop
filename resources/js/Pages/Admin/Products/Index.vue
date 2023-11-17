<template lang="">
    <AdminLayout>
        <Head title="Products" />



        <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
                                <div class="px-4 mx-auto max-w-screen-2xl">
                                    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                        <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                            <div class="flex items-center flex-1 space-x-4">
                                                <h5>
                                                    <span class="text-gray-500">All Products:</span>
                                                    <span class="dark:text-white">{{ products.length }}</span>
                                                </h5>
                                                <h5>
                                                    <span class="text-gray-500">Total sales:</span>
                                                    <span class="dark:text-white">$88.4k</span>
                                                </h5>
                                            </div>
                                            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                                <button @click="openAddModal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white  rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                    Add new product
                                                </button>
                                                <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                    </svg>
                                                    Update stocks 1/250
                                                </button>
                                                <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                    </svg>
                                                    Export
                                                </button>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="p-4">
                                                            <div class="flex items-center">
                                                                <input id="checkbox-all" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="px-4 py-3">Product</th>
                                                        <th scope="col" class="px-4 py-3">Category</th>
                                                        <th scope="col" class="px-4 py-3">Brand</th>
                                                        <th scope="col" class="px-4 py-3">Stock</th>
                                                        <th scope="col" class="px-4 py-3">Quantity</th>
                                                        <th scope="col" class="px-4 py-3">Price</th>
                                                        <th scope="col" class="px-4 py-3">Sales/Month</th>
                                                        <th scope="col" class="px-4 py-3">Rating</th>
                                                        <th scope="col" class="px-4 py-3">Sales</th>
                                                        <th scope="col" class="px-4 py-3">Revenue</th>
                                                        <th scope="col" class="px-4 py-3"> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr v-for="product in products" :key="product.id" class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td class="w-4 px-4 py-3">
                                                            <div class="flex items-center">
                                                                <input  id="checkbox-table-search-1" type="button" onclick="event.stopPropagation()" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                            </div>
                                                        </td>
                                                        <th scope="row" class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <img v-if="product.product_images.length > 0"
                                :src="`/${product.product_images[0].image}`"
                                :alt="product.title" class="w-auto h-8 mr-3">
                                                            <img v-else class="w-auto h-8 mr-3"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulVpB9YDxnnJBgPdrm5Rc5x6xmJH0xO1FYihUJpEiDSvHEOgSBSHnADEC-NLfeIQ-vos&usqp=CAU"
                                :alt="product.title" />
                                                            {{ truncateString( product.title, 20 ) }}
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">{{ product.category.name}}</span>
                                                        </td>
                                                        <td class="px-4 py-2">
                                                            <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">{{ product.brand.name}}</span>
                                                        </td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <div class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full"></div>
                                                                {{ product.inStock }}
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ product.quantity }}</td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"> ${{ product.price }} </td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">$1000</td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                <span class="ml-1 text-gray-500 dark:text-gray-400">5.0</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2 text-gray-400" aria-hidden="true">
                                                                    <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                                                </svg>
                                                                1.6M
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-2">$3.2M</td>
                                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                                                            <Link class="mr-1" :href="route('admin.product.show',product.id)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                                                            </Link>

                                                            <button class="mr-1" @click="openEditModal(product)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>

                                                            </button>
                                                            <button class="mr-1" @click="removeProduct(product)">
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
            :title="isEditMode ? 'Edit Product' : 'Add Product'"
            width="30%"
        >
            <form
                @submit.prevent="isEditMode ? updateProduct() : createProduct()"
            >
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        v-model="useThisFormForProductCreateOrUpdate.title"
                        type="text"
                        name="title"
                        id="title"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                    />
                    <label
                        for="title"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Title</label
                    >
                    <div v-if="errors.title">{{ errors.title }}</div>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label
                        for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Description
                    </label>
                    <textarea
                        v-model="
                            useThisFormForProductCreateOrUpdate.description
                        "
                        id="description"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=" Enter Description "
                    ></textarea>
                    <div v-if="errors.description">
                        {{ errors.description }}
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <label
                            for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Category
                        </label>
                        <select
                            v-model="
                                useThisFormForProductCreateOrUpdate.category_id
                            "
                            id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option
                                v-for="category in categories"
                                :key="category.id"
                                :value="category.id"
                            >
                                {{ category.name }}
                            </option>
                        </select>

                        <div v-if="errors.category_id">
                            {{ errors.category_id }}
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label
                            for="brand"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >
                            Brand
                        </label>
                        <select
                            v-model="
                                useThisFormForProductCreateOrUpdate.brand_id
                            "
                            id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option
                                v-for="brand in brands"
                                :key="brand.id"
                                :value="brand.id"
                            >
                                {{ brand.name }}
                            </option>
                        </select>
                        <div v-if="errors.brand_id">{{ errors.brand_id }}</div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input
                            v-model="useThisFormForProductCreateOrUpdate.price"
                            type="text"
                            name="price"
                            id="price"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label
                            for="price"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Price</label
                        >
                        <div v-if="errors.price">{{ errors.price }}</div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input
                            v-model="
                                useThisFormForProductCreateOrUpdate.quantity
                            "
                            type="number"
                            name="quantity"
                            id="quantity"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        <label
                            for="quantity"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Quantity</label
                        >
                        <div v-if="errors.quantity">{{ errors.quantity }}</div>
                    </div>
                </div>

                <!-- upload multiple images -->

                <div class="pb-2 pt-4">

                    <label
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input"
                        >Upload Product Images</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="product_images"
                        id="file_input"
                        type="file"
                        multiple
                        @change="handleFileChange"
                    />
                    <p
                        class="mt-1 text-sm text-gray-500 dark:text-gray-300 py-3"
                        id="product_images"
                    >
                        SVG, PNG, JPG or GIF (MAX. 800x400px).
                    </p>

                    <div class="mb-4">
                                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        Images</span>
                                    <div class="grid grid-cols-3 gap-4 mb-4">

                                        <div v-for="product_image in useThisFormForProductCreateOrUpdate.product_images" :key="product_image.id"
                                            class="relative p-2 bg-gray-100 rounded-lg sm:w-36 sm:h-36 dark:bg-gray-700">
                                            <img :src="`/${product_image.image}`">
                                            <button type="button" @click="removeImage(product_image)"
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


                    <!-- <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="" srcset=""> -->

                    <!-- <input type="file" name="product_images" id="product_images" multiple @change="handleFileChange" /> -->
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
    brands: Array,
    products: Array,
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

const useThisFormForProductCreateOrUpdate = useForm({
    id: "",
    title: "",
    quantity: "",
    description: "",
    price: "",
    category_id: "",
    brand_id: "",
    product_images: [],
});

const createProduct = async () => {
    try {
        console.log(useThisFormForProductCreateOrUpdate);

        // Append each image file to form data
        await router.post(
            "/admin/product/store",
            useThisFormForProductCreateOrUpdate,
            {
                onSuccess: (page) => {
                    dialogVisible.value = false;
                    useThisFormForProductCreateOrUpdate.reset();
                    Swal.fire({
                        toast: true,
                        icon: "success",
                        position: "top-end",
                        text: "Product created successfully",
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

const openEditModal = (product) => {
    isEditMode.value = true;
    dialogVisible.value = true;

    useThisFormForProductCreateOrUpdate.id = product.id;
    useThisFormForProductCreateOrUpdate.title = product.title;
    useThisFormForProductCreateOrUpdate.quantity = product.quantity;
    useThisFormForProductCreateOrUpdate.description = product.description;
    useThisFormForProductCreateOrUpdate.price = product.price;
    useThisFormForProductCreateOrUpdate.category_id = product.category_id;
    useThisFormForProductCreateOrUpdate.brand_id = product.brand_id;
    useThisFormForProductCreateOrUpdate.product_images = product.product_images;
};

const updateProduct = async () => {
    try {
        await router.post(
            "/admin/product/update/" + useThisFormForProductCreateOrUpdate.id,
            useThisFormForProductCreateOrUpdate,
            {
                onSuccess: (page) => {
                    dialogVisible.value = false;
                    useThisFormForProductCreateOrUpdate.reset();
                    Swal.fire({
                        toast: true,
                        icon: "success",
                        position: "top-end",
                        text: "Product updated successfully",
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


import { Plus } from "@element-plus/icons-vue";

const handleFileChange = (event) => {
    const files = event.target.files;

    // Clear existing files
    useThisFormForProductCreateOrUpdate.product_images = [];

    // Add selected files to the form data
    for (let i = 0; i < files.length; i++) {
        useThisFormForProductCreateOrUpdate.product_images.push(files[i]);
    }
};





const removeProduct = async (product) => {
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
                    "/admin/product/delete/" + product.id, {
                    onSuccess: (page) => {
                        dialogVisible.value = false;
                        useThisFormForProductCreateOrUpdate.reset();
                        Swal.fire(
                            'Deleted!',
                            'Your Product has been deleted.',
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


// make this function for text limit
const truncateString = (str, maxLength) => {
    return str.length > maxLength ? str.slice(0, maxLength) + "..." : str;
};


const removeImage = async (this_product_image) => {
    try {
        await router.get(
            "/admin/remove/product/image/" + this_product_image.id
        );

        // Update the necessary state only if the removal is successful
        product_images.value = product_images.value.filter(image => image.id !== this_product_image.id);
        isEditMode.value = true;
        dialogVisible.value = true;

        // Show a success message if needed
        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            text: "Product image removed successfully",
            showCloseButton: true,
            showConfirmButton: false,
            timer: 5000,
        });
    } catch (e) {
        console.error(e);
        // Handle errors if needed
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
