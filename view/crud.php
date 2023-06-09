<?php
include '../../C.D.G/include/head.php';
?>
<body>
<!-- ---------------NAVBAR--------------- -->

<?php
include '../../C.D.G/include/navbar.php';
?>

<!-- ---------------TABLEAU DE BORD--------------- -->

<div id="admin-crud" class="flex justify-center pt-20 pb-32 shadow-md shadow-purple-dark/[.7]">
    <div class="shadow-md shadow-purple-dark/[.7] w-4/5 h-auto pb-6 border-2 border-purple-light rounded-lg">
        <div class="flex mt-6">
            <div class="shadow-md shadow-purple-dark/[.7] py-8 px-8 mx-auto">
                <h3 class="font-semibold text-4xl">Tableau de bord</h3>
            </div>
        </div>  
            <div class="flex flex-col justify-center lg:flex-row">
                <div class="flex flex-row ml-6 w-auto">
                    <ul class="flex flex-col -mb-px text-sm font-medium text-center mt-10" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2 " role="presentation">
                            <button class="hover:text-white text-white inline-block w-32 px-2 py-2 bg-purple-light flex items-center justify-between" id="apprenants-tab" data-tabs-target="#apprenants" type="button" role="tab" aria-controls="apprenants" aria-selected="true"><img src="../../C.D.G/assets/image/apprenants.png">Apprenants</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="hover:text-white text-white inline-block w-32 px-2 py-2  bg-purple-light flex items-center justify-between" id="publications-tab" data-tabs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false"><img src="../../C.D.G/assets/image/publications.png">Publications</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="shadow-md shadow-purple-dark/[.7] text-center hidden p-4 bg-gray-50 mt-10 mx-6" id="apprenants" role="tabpanel" aria-labelledby="apprenants-tab">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Nom
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Prénom
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Avatar
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Nombre de publication
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Juliette
                                        </th>
                                        <td class="px-6 py-4">
                                            Devillé
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            15
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Richard
                                        </th>
                                        <td class="px-6 py-4">
                                            Mielot
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            6
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Stéphane
                                        </th>
                                        <td class="px-6 py-4">
                                            Jullion
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            36
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Yoann
                                        </th>
                                        <td class="px-6 py-4">
                                            Laporte
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            25
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shadow-md shadow-purple-dark/[.7] text-center hidden p-4 bg-gray-50 mt-10 mx-6" id="publications" role="tabpanel" aria-labelledby="publications-tab">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Titre
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Publié par
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Code
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Nombre de vue
                                        </th>
                                        <th scope="col" class="w-44 px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Flex direction
                                        </th>
                                        <td class="px-6 py-4">
                                            Juliette Devillé
                                        </td>
                                        <td class="px-6 py-4">
                                            oishndkgjqklekf
                                        </td>
                                        <td class="px-6 py-4">
                                            15
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Richard
                                        </th>
                                        <td class="px-6 py-4">
                                            Mielot
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            6
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Stéphane
                                        </th>
                                        <td class="px-6 py-4">
                                            Jullion
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            36
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Yoann
                                        </th>
                                        <td class="px-6 py-4">
                                            Delaporte
                                        </td>
                                        <td class="px-6 py-4">
                                            img.jpg
                                        </td>
                                        <td class="px-6 py-4">
                                            25
                                        </td>
                                        <td class="flex items-center px-6 py-4 space-x-3">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><img src="../../C.D.G/assets/image/edit.png" alt="Edit"></a>
                                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><img src="../../C.D.G/assets/image/delete.png" alt="Edit"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>
<!-- ---------------FOOTER--------------- -->

<?php
include '../../C.D.G/include/footer.php';
?>

    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>