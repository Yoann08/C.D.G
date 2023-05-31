<?php
include '../config/head.php';
?>

<body>

<!-- Mes Informations -->
<div class="flex justify-center my-20 sm">
    <div class="shadow-md shadow-purple-dark/[.7] w-4/5 pb-6 border-2 border-purple-light rounded-lg">
        <div class="flex mt-6">
            <div class="shadow-md shadow-purple-dark/[.7] py-8 px-8 mx-auto">
                <h3 class="font-semibold text-4xl">Mes Informations</h3>
            </div>
        </div>  
            <div class="flex flex-row justify-start mt-12 ml-10">
                <div class="flex flex-row ml-6 w-auto border-b border-gray-200">
                    <ul class="flex flex-col -mb-px text-sm font-medium text-center mt-10" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2 " role="presentation">
                            <button class="inline-block w-44 px-2 py-2 text-white bg-purple-light border border-purple-light flex items-center justify-between" id="apprenants-tab" data-tabs-target="#apprenants" type="button" role="tab" aria-controls="apprenants" aria-selected="false"><img src="../assets/img/apprenants.png">Mes informations</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block w-44 px-2 py-2 text-white bg-purple-light border border-purple-light flex items-center justify-between" id="publications-tab" data-tabs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false"><img src="../assets/img/publications.png">Mes Publications</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block w-44 px-2 py-2 text-white bg-purple-light border border-purple-light flex items-center justify-between" id="publications-tab" data-tabs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false"><img src="../assets/img/favoris.png">Mes Favoris</button>
                        </li>
                    </ul>
                </div>
                <div class="ml-20 ">
                    <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modifier mon email</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modifier mon email</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <a href="#">Supprimer mon compte</a>
                </div>
            </div>
        </div>    
    </div> 

<!-- Mes Publications -->

<!-- Mes Favoris -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</body>
</html>