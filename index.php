<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="/tailwind.config.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7a859a4e2.js" crossorigin="anonymous"></script>    
    <script src="/content/script.js"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: 
                {
                    'purple-dark': '#4f2779',
                    'purple-light': '#ad53a6',
                    'black': '#000d32',
                    'yellow': '#ffd700',
                    'cyan': '#58ffd3',
                    'background': '#fbfbfb',
                },
                fontFamily: 
                {
                    'roboto': ['Roboto', 'sans-serif'],
                    'baloo': ['Baloo 2', 'cursive'],
                },
                extend: 
                {
                    borderRadius: 
                    {
                        'card-radius': '1.25rem',
                        'button-radius': '3.125rem',
                    }
                },
            },
            plugins: [],
        } 
    </script>

<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>

    <title>Codes De Geek</title>
</head>

<body>
<!-- ---------------NAVBAR--------------- -->

<?php
    include 'content/include/navbar.php';
?>

<!-- ---------------CAROUSEL--------------- -->

<body>
  <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src=" assets/image/2.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/3.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/4.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/5.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/2.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/4.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/3.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/5.png" />
    </swiper-slide>
    <swiper-slide>
      <img class="rounded-2xl shadow-md shadow-purple-dark/[.7]" src="assets/image/2.png" />
    </swiper-slide>
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<!-- ---------------SECTION 1--------------- -->

<img class= "mt-16 shadow-md shadow-purple-dark/[.7]" src=" assets/image/section1.png" />

<!-- ---------------SECTION HTML--------------- -->

<div class="py-16 shadow-md shadow-purple-dark/[.7]">
    <div class="flex flex-row justify-between mr-8 sm:mr-20 sm:ml-14 md:mr-32 md:ml-24">
        <img class="w-28" src="assets/image/html.png" />
        <button type="submit" class="flex justify-around w-auto h-10 text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark">Voir plus</button>
    </div>
    <div class="flex flex-wrap justify-center gap-5 md:mx-16 2xl:gap-28">
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    </div>
</div>

<!-- ---------------SECTION CSS--------------- -->

<div class="bg-purple-dark/[.07] py-16 shadow-md shadow-purple-dark/[.7]">
    <div class="flex flex-row justify-between mr-8 sm:mr-20 sm:ml-14 md:mr-32 md:ml-24">
        <img class="w-28" src="assets/image/css.png" />
        <button type="submit" class="flex justify-around w-auto h-10 text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark">Voir plus</button>
    </div>
    <div class="flex flex-wrap justify-center gap-5 md:mx-16 2xl:gap-28">
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    </div>
</div>

<!-- ---------------SECTION JS--------------- -->

<div class="py-16 shadow-md shadow-purple-dark/[.7]">
    <div class="flex flex-row justify-between mr-8 sm:mr-20 sm:ml-14 md:mr-32 md:ml-24">
        <img class="w-28" src="assets/image/js.png" />
        <button type="submit" class="flex justify-around w-auto h-10 text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark">Voir plus</button>
    </div>
    <div class="flex flex-wrap justify-center gap-5 md:mx-16 2xl:gap-28">
        <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
        <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
        <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
        <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    </div>
</div>

<!-- ---------------SECTION PHP--------------- -->
<div class="bg-purple-dark/[.07] py-16 shadow-md shadow-purple-dark/[.7]">
    <div class="flex flex-row justify-between mr-8 sm:mr-20 sm:ml-14 md:mr-32 md:ml-24">
        <img class="w-28" src="assets/image/php.png" />
        <button type="submit" class="flex justify-around w-auto h-10 text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark">Voir plus</button>
    </div>
    <div class="flex flex-wrap justify-center gap-5 md:mx-16 2xl:gap-28">
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    <a href="#" class=" mt-16 h-72 w-60 block p-6 bg-white border border-purple-light border-gray-200 rounded-2xl drop-shadow-md shadow-md shadow-purple-dark/[.7]"></a>
    </div>
</div>

<!-- ---------------BACK TO TOP--------------- -->

<button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-purple-light hover:bg-purple-700 text-white text-lg font-semibold transition-colors duration-300">
    <svg src="assets/image/backtotop.png" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>

<!-- ---------------FOOTER--------------- -->

<?php
    include 'content/include/footer.php';
?>

    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>