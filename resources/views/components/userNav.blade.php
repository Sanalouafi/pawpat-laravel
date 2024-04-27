<header>
    <nav class="px-5 lg:px-5 py-2.5 glass-nav">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="{{ URL::asset('img/landing-page-image/pawpatlogo.png') }}" class=" pr-4 sm:h-9"
                    style="width: 60px; height: 50px;" alt=" Logo" />
                <span class="self-center  text-xl font-semibold whitespace-nowrap " style="color: #FD9E02;">PAWPAT</span>
            </a>
            <div class="flex items-center lg:order-2">

                <div x-data="{ open: false }">
                    <div @click="open = !open" class="relative border-b-4 border-transparent"
                        :class="{ 'border-indigo-700 transform transition duration-300 ': open }"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100">
                        <div class="flex justify-center items-center space-x-3 cursor-pointer">
                            <div
                                class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                    alt="" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                            <ul class="space-y-3 dark:text-white">
                                <li class="font-medium">
                                    <a href="#"
                                        class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                        <div class="mr-3">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                        </div>
                                        Account
                                    </a>
                                </li>

                                <hr class="dark:border-gray-700">
                                <li class="font-medium">
                                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                        @csrf
                                        <button type="button"
                                            class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            onclick="document.getElementById('logoutForm').submit()">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            <span>Log out</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden  "
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('user.index') }}"
                            class="nav-link block py-2 pr-4 pl-3 text-white text-l rounded bg-yellow-500 lg:bg-transparent lg:text-yellow-500 lg:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('user.index') }}#services"
                            class="nav-link block py-2 pr-4 pl-3 text-white text-lg border-b hover:bg-black hover:text-yellow-500 lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-yellow-500">services</a>
                    </li>
                    <li>
                        <a href="{{ route('marketUser') }}"
                            class="nav-link block py-2 pr-4 pl-3 text-white text-l border-b  hover:bg-black hover:text-yellow-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-500 lg:p-0">Marketplace</a>
                    </li>
                    <li>
                        <a href="#"
                            class="nav-link block py-2 pr-4 pl-3 text-white text-l border-b  hover:bg-black hover:text-yellow-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-yellow-500 lg:p-0">Our
                            Pet</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
