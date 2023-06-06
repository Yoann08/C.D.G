<?php
    include '../../C.D.G/include/head.php';
?>

<body class="bg-background">

<?php
    include '../../C.D.G/include/navbar.php';
?>

        <div class="shadow-md shadow-purple-dark/[.7] py-10 mb-5">
            <!-- LOGO LANGAGE -->
            <div class="my-10">
                <img class="w-28 mx-auto" src="../../../C.D.G/assets/image/html.png" alt="">
            </div>

            <!-- CODE + DESCRIPTION + COMMENTAIRES-->
            <div class="w-4/5 xl:w-2/3 mx-auto">
                <!-- CODE + DESCRIPTION -->
                <div class="flex flex-col lg:flex-row lg:gap-x-4 mb-4">
                    <!-- CODE -->
                    <div class="lg:w-4/5 order-2 lg:order-1">
                        <img class="rounded-lg" src="../../C.D.G/assets/image/5.png" alt="">
                    </div>
                    <!-- DESCRIPTION -->
                    <div class="lg:w-4/5 border-2 border-purple-light rounded-lg p-4 order-1 mb-4 lg:mb-0">
                        <!-- AVATAR + UTILISATEUR -->
                        <div class="flex flex-row mb-2">
                            <img class="rounded-full w-12 mr-4" src="../../C.D.G/assets/image/2.png" alt="">
                            <div class="">
                                <h2 class="font-bold text-xl text-purple-dark">Richard Mielot</h2>
                                <p class="font-light text-purple-dark">Promo Développeur Web & Web Mobile 2023</p>
                            </div>
                        </div>
                        <!-- DESCRIPTION CODE -->
                        <div class="indent-16 text-justify">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis laborum aspernatur! Quidem voluptates iure itaque eum possimus dolorum unde quia aliquid veniam vero magnam temporibus, nemo adipisci, aliquam explicabo at aut. Sapiente vel pariatur, provident, ex earum esse reiciendis quam fuga molestias tenetur facere facilis ab iste veritatis neque nisi in dolor quia culpa nulla recusandae. Veniam necessitatibus non eius commodi. Expedita alias illum, reprehenderit magni laboriosam unde et culpa rerum iusto, esse consequatur, officia sapiente corrupti aut velit.</p>
                        </div>
                    </div>
                </div>

                <!-- COMMENTAIRES -->
                <div class="flex flex-col">
                    <!-- COMMENTAIRE 1 -->
                    <div id="commOne" class="flex flex-col items-end">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row">
                            <img class="rounded-full w-12 h-12 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="border-2 border-purple-light rounded-lg p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex justify-end mb-4">
                            <button class="mr-2">J'aime</button>
                            <button class="mr-2">Répondre</button>
                            <button class="mr-2">Modifier</button>
                            <button>Supprimer</button>
                        </div>

                        <!-- REPONSE 1 COMMENTAIRE 1 -->
                        <div id="repOneCommOne" class="w-5/6 flex flex-col items-end">
                            <!-- AVATAR + COMMENTAIRE -->
                            <div class="flex flex-row">
                                <img class="rounded-full w-12 h-12 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                                <p class="border-2 border-purple-light rounded-lg p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla.</p>
                            </div>
                            <!-- BOUTON ACTIONS -->
                            <div class="flex justify-end mb-4">
                                <button class="mr-2">J'aime</button>
                                <button class="mr-2">Répondre</button>
                                <button class="mr-2">Modifier</button>
                                <button>Supprimer</button>
                            </div>

                            <!-- REPONSE 1 DE REPONSE 1 COMMENTAIRE 1 -->
                            <div id="repToRepOneCommOne" class="w-5/6 flex flex-col items-end">
                                <!-- AVATAR + COMMENTAIRE -->
                                <div class="flex flex-row">
                                    <img class="rounded-full w-12 h-12 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                                    <p class="border-2 border-purple-light rounded-lg p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- BOUTON ACTIONS -->
                                <div class="flex justify-end mb-4">
                                    <button class="mr-2">J'aime</button>
                                    <button class="mr-2">Modifier</button>
                                    <button>Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COMMENTAIRE 2 -->
                    <div id="commTwo" class="flex flex-col items-end">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row">
                            <img class="rounded-full w-12 h-12 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="border-2 border-purple-light rounded-lg p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex justify-end mb-4">
                            <button class="mr-2">J'aime</button>
                            <button class="mr-2">Répondre</button>
                            <button class="mr-2">Modifier</button>
                            <button>Supprimer</button>
                        </div>
                    </div>
                    <!-- COMMENTAIRE 3 -->
                    <div id="commThree" class="flex flex-col items-end">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row">
                            <img class="rounded-full w-12 h-12 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="border-2 border-purple-light rounded-lg p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex justify-end mb-4">
                            <button class="mr-2">J'aime</button>
                            <button class="mr-2">Répondre</button>
                            <button class="mr-2">Modifier</button>
                            <button>Supprimer</button>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl text-purple-dark mb-2">Rédiger un commentaire</h3>
                        <form action="" method="post" class="flex flex-col items-end">
                            <textarea name="postComm" id="postComm" class="w-full border-2 border-purple-light rounded-lg mb-2"></textarea>
                            <button class="bg-purple-light rounded-lg px-4 py-2 uppercase text-white">Poster</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include '../../C.D.G/include/footer.php';
?>

    </body>
</html>