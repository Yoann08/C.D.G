<?php
include '../config/head.php';
?>

<body>

<!-- Mes Informations -->
<div class="flex justify-center my-20 sm">
    <div class="shadow-md shadow-purple-dark/[.7] w-4/5 h-auto pb-6 border-2 border-purple-light rounded-lg">
        <div class="flex mt-6">
            <div class="shadow-md shadow-purple-dark/[.7] py-8 px-8 mx-auto">
                <h3 class="font-semibold text-4xl">Mes Informations</h3>
            </div>
        </div>  
            <div class="flex flex-row justify-center">
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