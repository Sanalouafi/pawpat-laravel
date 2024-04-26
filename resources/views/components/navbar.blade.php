<header>
    <nav class="px-5 lg:px-5 py-2.5 glass-nav">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="{{URL::asset('img/landing-page-image/pawpatlogo.png')}}" class=" pr-4 sm:h-9" style="width: 60px; height: 50px;" alt=" Logo" />
                <span class="self-center  text-xl font-semibold whitespace-nowrap "
                    style="color: #FD9E02;">PAWPAT</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="{{route('login')}}" class="nav-link text-white text-l   px-5 py-2.5 mr-2 ">Log
                    in</a>
                <a href="{{route('register')}}"
                    class="text-white bg-yellow-600 hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-yellow-600 dark:hover:bg-yellow-500 ">Get
                    started</a>
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
                        <a href="{{route('home')}}"
                            class="nav-link block py-2 pr-4 pl-3 text-white text-l rounded bg-yellow-500 lg:bg-transparent lg:text-yellow-500 lg:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{route('home')}}#services"
                        class="nav-link block py-2 pr-4 pl-3 text-white text-lg border-b hover:bg-black hover:text-yellow-500 lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-yellow-500">services</a>
                    </li>
                    <li>
                        <a href="{{route('marketPlace')}}"
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
