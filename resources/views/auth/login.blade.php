<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style='background-image:url("img/loginBg.jpg")'>
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

    <body class="font-mono bg-gray-400">
        @include('components.navbar')
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex"
                    style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                        style="background-image: url('img/cat.jpg')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded  appearance-none"
                                    id="email" name="email" type="text" placeholder="email" />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded  appearance-none"
                                    id="password" name="password" type="password" placeholder="******************" />
                            </div>
                            <div class="mb-4">
                                <input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                                <label class="text-sm" for="checkbox_id">
                                    Remember Me
                                </label>
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700"
                                    type="submit">
                                    Sign In
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="{{ route('register') }}">
                                    Create an Account!
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#">
                                    Forgot Password?
                                </a>
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

</html>
