<x-user-market>
    <div class="font-[sans-serif] bg-white">
        <div class="p-6 lg:max-w-7xl max-w-4xl mx-auto">
            <div
                class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
                <div class="lg:col-span-3 w-full lg:sticky top-0 text-center">
                    <div class="px-4 py-10 rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative">
                        <img src="{{ $product->getFirstMediaUrl('product') }}" alt="Product"
                            class="w-4/5 rounded object-cover" />
                        <button type="button" class="absolute top-4 right-4">
                            <a href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="#ccc"
                                    class="mr-1 hover:fill-[#333]" viewBox="0 0 64 64">
                                    <path
                                        d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                        data-original="#000000"></path>
                                </svg>
                            </a>

                        </button>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-extrabold text-[#333]">{{ $product->name }} |
                        {{ $product->category->name }}</h2>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <p class="text-[#333] text-4xl font-bold">{{ $product->price }} MAD</p>
                    </div>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <h4>Description:</h4>
                    </div>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <p class="text-[#333] text-2xl font-light">{{ $product->description }} </p>
                    </div>

                    <div class="flex flex-wrap gap-4 mt-10">

                        <button
                            class="min-w-[200px] px-4 py-3 text-center bg-[#333] hover:bg-[#111] text-white text-sm font-bold rounded"
                            data-modal-target="add-order" data-modal-toggle="add-order" type="button">

                            Buy now
                        </button>

                        <!-- Main modal -->
                        <div id="add-order" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            create order
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="add-order">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="/session" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <div class="form__input">
                                                <label for="city"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    City</label>
                                                <input type="text" name="city" id="city"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="name of category" required />
                                            </div>
                                            <div class="form__input">
                                                <label for="address"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    address</label>
                                                <input type="text" name="address" id="address"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="name of category" required />
                                            </div>
                                            <div class="form__input">
                                                <label for="code_zip"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Code zip</label>
                                                <input type="text" name="code_zip" id="code_zip"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="name of category" required />
                                            </div>
                                            <label for="quantity-input"
                                                class="block my-6 text-sm font-semibold text-gray-900 dark:text-white">Choose
                                                quantity:</label>
                                            <div class="relative flex items-center max-w-[8rem] ">
                                                <button type="button" id="decrement-button"
                                                    data-input-counter-decrement="quantity-input"
                                                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <svg class="w-3 h-3 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <input type="text" id="quantity-input" name="quantity"
                                                    data-input-counter aria-describedby="helper-text-explanation"
                                                    class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="999" required />
                                                <button type="button" id="increment-button"
                                                    data-input-counter-increment="quantity-input"
                                                    class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <svg class="w-3 h-3 text-gray-900 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <button type="submit"
                                                class="w-full text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                style="">
                                                save
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





            <div class="mt-16 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
                <h3 class="text-lg font-bold text-[#333]">Product information</h3>
                <ul class="mt-6 space-y-6 text-[#333]">
                    <li class="text-sm">Name <span class="ml-4 float-right">{{ $product->name }}</span></li>
                    <li class="text-sm">Category <span class="ml-4 float-right">{{ $product->category->name }}</span>
                    </li>
                    <li class="text-sm">Stock <span class="ml-4 float-right">{{ $product->stock }}</span></li>
                    <li class="text-sm">Price <span class="ml-4 float-right">{{ $product->price }} MAD</span></li>
                    <li class="text-sm">Description <span class="ml-4 float-right">{{ $product->description }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-user-market>
