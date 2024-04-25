<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAWPAT landing page</title>
    <meta name="description"
        content="Get started with a free landing page built with Tailwind CSS and the Flowbite Blocks system.">
    <link href="{{ URL::asset('css/output.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body>
    @include('components.navbar')

    <section class="first-section mt-1">
        <div class="grid  px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1
                    class="  mb-4 mt-14 pt-36 max-w-2xl text-white  text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Not only people need a house.</h1>
                <p class="mb-6 pt-4 max-w-2xl font-bold text-white lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id es
                </p>
                <a href="{{route('register')}}"
                    class="inline-flex justify-center items-center py-3 px-10 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-400  focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Make a friend

                </a>

            </div>
        </div>
    </section>


    <section class="second-section lg:h-full md:h-full">
        <div class="py-8 px-4 sm:py-16 lg:px-6">
            <div class="mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl text-center font-extrabold text-black dark:text-black">What We Offer</h2>
            </div>
            <div class="centered-container py-64">
                <div class="md:grid md:grid-cols-2 lg:grid-cols-2  md:gap-24 gap-24 w-full ">

                    <div class="p-6 rounded-lg mx-24 ">
                        <div class="flex justify-center items-center offer">
                            <img src="{{ URL::asset('img/landing-page-image/training.png') }}" alt="Pet training"
                                class="mr-6">
                            <a href="#" class="mb-2 text-xl font-bold dark:text-black ">Pet training</a>
                        </div>
                    </div>
                    <div class="p-6 rounded-lg mx-24 ">
                        <div class="flex justify-center items-center offer">
                            <img src="{{ URL::asset('img/landing-page-image/grooming.png') }}" alt="Pet training"
                                class="mr-6">
                            <a href="#" class="mb-2 text-xl font-bold dark:text-black ">Pet grooming</a>
                        </div>
                    </div>

                    <div class="p-6 rounded-lg mx-24 ">
                        <div class="flex justify-center items-center offer">
                            <img src="{{ URL::asset('img/landing-page-image/supplies.png') }}" alt="Pet training"
                                class="mr-6">
                            <a href="#" class="mb-2 text-xl font-bold dark:text-black ">Pet supplies</a>
                        </div>
                    </div>
                    <div class="p-6 rounded-lg mx-24 ">
                        <div class="flex justify-center items-center offer">
                            <img src="{{ URL::asset('img/landing-page-image/adoption.png') }}" alt="Pet training"
                                class="mr-6">
                            <a href="#" class="mb-2 text-xl font-bold dark:text-black ">Pet adoption</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>


    <section class="third-section lg:h-full md:h-full">
        <div class="pt-16 px-4 mx-auto w-full lg:pt-16 lg:px-6">
            <div class="max-w-full-lg text-black sm:text-lg dark:text-black">
                <h2 class="mb-4 text-4xl font-semibold text-center text-black dark:text-black">About PawPal Haven</h2>
                <p class="mx-0 sm:mx-2 lg:mx-64 pt-8 text-center font-light text-2xl md:text-2xl">
                    At PawPal Haven, we believe in creating a one-stop
                    destination for all your furry friend's needs. <br>
                    From expert animal training to a wide array of pet supplies and top-notch grooming services, we're
                    here to ensure your pet's well-being and happiness.</p>

            </div>
        </div>
        <div class="centered-container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 pt-20 pb-10 lg:pt-40 lg:pb-20">
                <div class="p-16 bg-gray-100 rounded-lg flex flex-col items-center text-center">
                    <div class="mx-auto">
                        <img src="{{ URL::asset('img/landing-page-image/safety.png') }}" class="h-40 w-40">
                    </div>
                    <h3 class="text-lg font-bold mt-2">
                        Always
                        safety-first
                    </h3>
                </div>
                <div class="p-16 bg-gray-100 rounded-lg flex flex-col items-center text-center">
                    <div class="mx-auto">
                        <img src="{{ URL::asset('img/landing-page-image/care.png') }}" class="h-40 w-40">
                    </div>
                    <h3 class="text-lg font-bold mt-2">
                        Fun-focused
                        Care
                    </h3>
                </div>
                <div class="p-16 bg-gray-100 rounded-lg flex flex-col items-center text-center">
                    <div class="mx-auto">
                        <img src="{{ URL::asset('img/landing-page-image/satifaction.png') }}" class="h-40 w-40"
                            alt="Satisfaction">
                    </div>
                    <h3 class="text-lg font-bold mt-2">
                        Always safety-first
                    </h3>
                </div>


            </div>
        </div>

    </section>

    <section class="section-4 bg-white ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto  text-center">
                <h2
                    class="mx-auto max-w-screen-sm pt-6 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">
                    Our
                    <span>friends</span> who are looking for <span>house.</span>
                </h2>

                <!-- cards -->

                <div class="py-8 grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/cat.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-between mt-4">
                            <button class="pet-button text-white py-2 px-12 rounded-lg font-bold ">
                                Learn More
                            </button>
                            <a href="">
                                <svg fill="#126782" height="40px" width="40px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 471.701 471.701" xml:space="preserve" stroke="#126782">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path
                                                d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1 c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3 l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4 C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3 s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4 c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3 C444.801,187.101,434.001,213.101,414.401,232.701z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/cat.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-between mt-4">
                            <button class="pet-button text-white py-2 px-12 rounded-lg font-bold ">Learn
                                More
                            </button>
                            <a href="">
                                <svg fill="#126782" height="40px" width="40px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 471.701 471.701" xml:space="preserve" stroke="#126782">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path
                                                d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1 c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3 l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4 C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3 s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4 c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3 C444.801,187.101,434.001,213.101,414.401,232.701z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/cat.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-between mt-4">
                            <button class="pet-button text-white py-2 px-12 rounded-lg font-bold ">Learn
                                More
                            </button>
                            <a href="">
                                <svg fill="#126782" height="40px" width="40px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 471.701 471.701" xml:space="preserve" stroke="#126782">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path
                                                d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1 c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3 l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4 C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3 s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4 c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3 C444.801,187.101,434.001,213.101,414.401,232.701z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- end cards -->
                <a href="#" class="see-more text-white py-2 px-12 rounded-lg  "
                    style="background: #8ECAE6;">See
                    More</a>
            </div>
        </div>
    </section>

    <section class="section-5  ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto  text-center">
                <h2
                    class="mx-auto max-w-screen-sm pt-6 text-4xl font-semibold leading-tight text-white dark:text-white">
                    Trending <span>Products</span>
                </h2>
                <p class="mx-0 sm:mx-2 lg:mx-64 pt-8 text-center text-white font-light text-2xl md:text-2xl">Quis autem
                    vel eum
                    iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatu</p>

                <!-- cards -->

                <div class="py-8 grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/product.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-center mt-4">
                            <button class="pet-button text-white py-4 px-12 rounded-lg font-bold "
                                style="background: #F9D775;">Learn
                                More
                            </button>


                        </div>
                    </div>
                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/product.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-center mt-4">
                            <button class="pet-button text-white py-4 px-12 rounded-lg font-bold "
                                style="background: #F9D775;">Learn
                                More
                            </button>


                        </div>
                    </div>
                    <div class="product-card bg-white rounded-lg shadow-lg p-8 sm:mx-auto">
                        <div class="relative overflow-hidden">
                            <img class="object-cover w-full h-full"
                                src="{{ URL::asset('img/landing-page-image/product.png') }}" alt="Product">
                            <div class="absolute inset-0 bg-black opacity-40"></div>

                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                        <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed sed
                            ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                        <div class="flex items-center justify-center mt-4">
                            <button class="pet-button text-white py-4 px-12 rounded-lg font-bold "
                                style="background: #F9D775;">Learn
                                More
                            </button>


                        </div>
                    </div>
                </div>
                <!-- end cards -->

            </div>
        </div>
    </section>

    <footer class="p-4sm:p-6 " style="background-color: #001520;">
        <div class="mx-24 max-w-screen-xxl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <span
                            class="self-center text-white text-2xl font-semibold whitespace-nowrap dark:text-white">Subscribe</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#"
                        class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.glass-nav');
            if (window.scrollY > 60) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const currentUrl = window.location.pathname;

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active-link');
                }
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>
