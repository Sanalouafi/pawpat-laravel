<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PawPat Marketplace</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .product-item {
            display: block;
            /* Ensures the link takes up the whole block */
            text-decoration: none;
            /* Removes underline from the link */
            color: inherit;
            /* Inherits text color from parent */
        }

        .image-container {
            max-width: 342px;
            max-height: 342px;
            width: 100%;
            /* Adjust this based on your layout requirements */
            height: auto;
            /* Maintains the aspect ratio */
            display: flex;
            justify-content: center;
            align-items: center;
            /* Centers the image in the div */
            overflow: hidden;
            /* Hides parts of the image that exceed the container */
        }

        .image-container img {
            width: 100%;
            /* Makes the image fill the container */
            height: 100%;
            /* Adjust height to fill the container */
            object-fit: cover;
            /* Ensures the image covers the area without distortion */
        }

        .product-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 3px;
        }

        .product-price {
            padding-top: 1px;
            color: #333;
            /* Dark gray color for the price text */
        }

        .product-icon {
            width: 24px;
            height: 24px;
            fill: currentColor;
            /* Uses the text color */
        }

        /* nav  */
        .glass-nav {
            position: fixed;
            top: 0;
            width: 100%;
            backdrop-filter: blur(10px);
            background-color: rgba(28, 27, 25, 0.083);
            z-index: 1000;
            transition: background-color 0.3s;
        }

        .glass-nav.scrolled {
            background-color: rgba(41, 40, 40, 0.064);
        }

        .active-link {
            background-color: transparent;
            color: #FD9E02;
        }

        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    @include('components.navbar')
    <!--Nav-->
    <nav id="header" class="w-full mt-16 py-2">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />



        </div>
    </nav>
    {{ $slot }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
