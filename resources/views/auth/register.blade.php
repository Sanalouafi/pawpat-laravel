<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background-image: url('img/bodyBg.jpg');">
    <style>
        input {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        }

        /* nav  */
        .glass-nav {
            position: fixed;
            top: 0;
            width: 100%;
            backdrop-filter: blur(10px);
            background-color: rgba(28, 27, 25, 0.566);
            z-index: 1000;
            transition: background-color 0.3s;
        }

        .glass-nav.scrolled {
            background-color: rgba(41, 40, 40, 0.284);
        }

        .active-link {
            background-color: transparent;
            color: #FD9E02;
        }
    </style>
    @include('components.navbar')

    <body class="font-mono bg-gray-400">
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex"
                    style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                        <form id="registrationForm" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST"
                            action="{{ route('register') }}">
                            @csrf
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">Full
                                        Name</label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="name" type="text" name="name" placeholder="Full Name" />
                                    <div class="text-red-500 text-xs italic" id="nameError"></div>
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">Phone
                                        Number</label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="phone" name="phone" type="text" placeholder="Phone Number" />
                                    <div class="text-red-500 text-xs italic" id="phoneError"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="cni">CNI</label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                    id="cni" name="cni" type="text" placeholder="CNI" />
                                <div class="text-red-500 text-xs italic" id="cniError"></div>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">Email</label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                    id="email" name="email" type="email" placeholder="Email" />
                                <div class="text-red-500 text-xs italic" id="emailError"></div>
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                        for="password">Password</label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="password" name="password" type="password"
                                        placeholder="******************" />
                                    <div class="text-red-500 text-xs italic" id="passwordError"></div>
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">Confirm
                                        Password</label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="c_password" type="password" placeholder="******************" />
                                    <div class="text-red-500 text-xs italic" id="confirmPasswordError"></div>
                                </div>
                            </div>
                            <div class="mb-6 text-center">
                                <button id="registerButton"
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="submit">Register Account</button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#">Already have an account? Login!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
    </body>
    <script src="{{ URL::asset('js/register.js') }}"></script>
</body>

</html>
