<?php
    include '../../C.D.G/include/head.php';
?>

<body>

<?php
    include '../../C.D.G/include/navbar.php';
?>

<!-- Mes Informations -->
<div id="profil" class="flex justify-center my-20 sm">
    <div class="shadow-md shadow-purple-dark/[.7] w-4/5 pb-6 border-2 border-purple-light rounded-lg">
        <div class="flex mt-6">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg mt-10 ml-20" src="../assets/img/avatar.png" alt="Avatar de profil"/>
            <div class="shadow-md shadow-purple-dark/[.7] h-20 px-6 mt-10 mx-auto">
                <h3 class="font-semibold text-4xl px-14 pt-4">Mon Profil</h3>
            </div>
        </div>  
        <div class="flex flex-row justify-start mt-12 ml-10">
            <div class="flex flex-row ml-6 w-auto">
                <ul class="flex flex-col -mb-px text-sm font-medium text-center mt-10" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2 " role="presentation">
                        <button class="inline-block w-44 px-2 py-2 hover:text-white text-white bg-purple-light flex items-center justify-between" id="informations-tab" data-tabs-target="#informations" type="button" role="tab" aria-controls="informations" aria-selected="true"><img src="../assets/img/apprenants.png">Mes informations</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block w-44 px-2 py-2 hover:text-white text-white bg-purple-light flex items-center justify-between" id="publications-tab" data-tabs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false"><img src="../assets/img/publications.png">Mes Publications</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block w-44 px-2 py-2 hover:text-white text-white bg-purple-light flex items-center justify-between" id="favoris-tab" data-tabs-target="#favoris" type="button" role="tab" aria-controls="favoris" aria-selected="false"><img src="../assets/img/favoris.png">Mes Favoris</button>
                    </li>
                    <div class="mt-7">
                        <button class="w-28 h-auto xs:h-12 text-purple-light uppercase border-2 font-medium rounded-2xl text-xs px-2 py-2 text-center shadow-sm shadow-purple-dark">Ajouter un nouveau code</button>
                    </div>
                </ul> 
            </div>
            <div class="flex mb-16 mt-6" id="myTabContent">  
                <div class="hidden flex" id="informations" role="tabpanel" aria-labelledby="informations-tab">
                    <div class="ml-24">
                        <label class="block mb-2 text-sm font-medium text-purple-light dark:text-white" for="file_input">Modifier avatar</label>
                        <input class="block w-full text-sm text-purple-light border-2 border-purple-light rounded-lg cursor-pointer" id="file_input" type="file">
                        <label for="email" class="mt-10 block mb-2 text-sm font-medium text-purple-light dark:text-white">Modifier email</label>
                        <input type="email" id="email" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="ml-40">
                    <label for="password" class="block mb-2 text-sm font-medium text-purple-light dark:text-white">Modifier mot de passe</label>
                    <input type="password" id="password" class="mb-16 bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block p-2.5">                   
                    <a href="#" class="text-purple-light hover:underline">Supprimer mon compte</a>
                    </div>
                </div>

                <!-- Mes publications --> 
                <div class="hidden flex flex-wrap gap-10 ml-10" id="publications" role="tabpanel" aria-labelledby="publications-tab">
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                            Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                            Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                            Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mes Favoris -->
                <div class="hidden flex flex-wrap gap-10 ml-10" id="favoris" role="tabpanel" aria-labelledby="favoris-tab">
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <!-- <div class="flex flex-row justify-between"> -->
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                                <!-- <img src="../assets/img/fav-code.png" alt="" class="w-10"> -->
                            <!-- </div> -->
                            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <div class="flex flex-row justify-between">
                                <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                                Voir plus
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <img src="../assets/img/fav-code.png" alt="" class="w-10">
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <div class="flex flex-row justify-between">
                                <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                                Voir plus
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <img src="../assets/img/fav-code.png" alt="" class="w-10">
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs bg-white border-2 border-purple-light rounded-lg shadow">
                        <img class="rounded-lg" src="../assets/img/code.jpg" alt="Votre code" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Titre du code</h5>
                            <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Ici la description du code.</p>
                            <div class="flex flex-row justify-between">
                                <a href="#" type="btn" class="inline-flex items-center w-30 h-auto text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-2 py-2 text-center shadow-sm shadow-purple-dark ">
                                Voir plus
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <img src="../assets/img/fav-code.png" alt="" class="w-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php
    include '../../C.D.G/include/footer.php';
?>

</body>
</html>