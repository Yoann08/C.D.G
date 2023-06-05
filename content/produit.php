<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TAILWIND CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="/tailwind.config.js"></script>

        <!-- FLOWBITE -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- TAILWIND CONFIG -->
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

        <!-- TINY MCE -->
        <script src="https://cdn.tiny.cloud/1/wcm7yyvazr4l2qtnt0k53efapz7i9qcsqurynkpwn1f66enm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#writecode',
                branding: false,
                plugins: 'codesample code',
                codesample_languages: [
                    { text: 'HTML', value: 'markup' },
                    { text: 'JavaScript', value: 'javascript' },
                    { text: 'CSS', value: 'css' },
                    { text: 'PHP', value: 'php' },
                ],
                toolbar: 'codeSample',
                menubar: false,
                tabfocus_elements: ':prev,:next',
            });
        </script>
        
        <!-- TITRE -->
        <title>Codes De Geek</title>
    </head>

    <body class="bg-background">

        <?php include 'include/navbar.php'; ?>

        <div class="shadow-md shadow-purple-dark/[.7] py-10 mb-5">
            <!-- LOGO LANGAGE -->
            <div class="my-10">
                <img class="w-28 mx-auto" src="../../../C.D.G/assets/image/html.png" alt="">
            </div>

            <!-- CODE + DESCRIPTION + COMMENTAIRES-->
            <div>
                <div class="flex flex-col lg:flex-row w-4/5 lg:w-4/5 xl:w-3/4 2xl:w-2/3 gap-y-4 lg:gap-y-0 lg:gap-x-4 mx-auto mb-5">
                    <!-- CODE -->
                    <div class="mx-auto md:w-4/5 xl:w-2/4 order-2 lg:order-1">
                        <img class="rounded-lg" src="../../C.D.G/assets/image/5.png" alt="">
                    </div>
                    <!-- DESCRIPTION -->
                    <div class="mx-auto md:w-4/5 xl:w-96 order-1 lg:order-2 border-2 border-purple-light rounded-lg p-4">
                        <!-- AVATAR + UTILISATEUR -->
                        <div class="flex flex-row justify-start items-center mb-4">
                            <img class="rounded-full w-12 mr-4" src="../../C.D.G/assets/image/2.png" alt="">
                            <div class="flex flex-col">
                                <h2 class="text-lg text-purple-dark">Richard Mielot</h2>
                                <p class="text-sm text-purple-light">Promo Développeur Web & Web Mobile 2023</p>
                            </div>
                        </div>
                        <!-- DESCRIPTION CODE -->
                        <div class="max-h-4/5">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni consectetur asperiores numquam et pariatur voluptate? Pariatur, provident. Totam officiis, dolore voluptatem quasi incidunt commodi consequatur quam sequi pariatur libero ab, magnam accusantium praesentium amet delectus veritatis ullam unde adipisci porro quis. Rem, enim. Aliquid ab fugit sint expedita quisquam, magnam cumque praesentium provident ipsum corrupti officiis architecto est voluptatem fugiat optio, temporibus ad tempore minima! Sit adipisci repudiandae dolorem ad sapiente, natus corrupti. Veniam, vel.</p>
                        </div>
                    </div>
                </div>

                <!-- COMMENTAIRES -->
                <div class="flex flex-col w-4/5 mx-auto lg:w-full mt-5 order-3">
                    <!-- COMMENTAIRE 1 -->
                    <div id="commOne" class="flex flex-col items-end md:w-4/5 mx-auto w">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row justify-center">
                            <img class="rounded-full w-8 h-8 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="text-xs border-2 border-purple-light rounded-md p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex flex-row justify-end mb-2">
                            <button class="text-xs mr-1">J'aime</button>
                            <button class="text-xs mr-1">Répondre</button>
                            <button class="text-xs mr-1">Modifier</button>
                            <button class="text-xs">Supprimer</button>
                        </div>

                        <!-- REPONSE 1 COMMENTAIRE 1 -->
                        <div id="repOneCommOne" class="w-5/6 flex flex-col items-end">
                            <!-- AVATAR + COMMENTAIRE -->
                            <div class="flex flex-row justify-center">
                                <img class="rounded-full w-8 h-8 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                                <p class="text-xs border-2 border-purple-light rounded-md p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla.</p>
                            </div>
                            <!-- BOUTON ACTIONS -->
                            <div class="flex flex-row justify-end mb-2">
                                <button class="text-xs mr-1">J'aime</button>
                                <button class="text-xs mr-1">Répondre</button>
                                <button class="text-xs mr-1">Modifier</button>
                                <button class="text-xs">Supprimer</button>
                            </div>

                            <!-- REPONSE 1 DE REPONSE 1 COMMENTAIRE 1 -->
                            <div id="repToRepOneCommOne" class="w-5/6 flex flex-col items-end">
                                <!-- AVATAR + COMMENTAIRE -->
                                <div class="flex flex-row justify-center">
                                    <img class="rounded-full w-8 h-8 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                                    <p class="text-xs border-2 border-purple-light rounded-md p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- BOUTON ACTIONS -->
                                <div class="flex flex-row justify-end">
                                    <button class="text-xs mr-1">J'aime</button>
                                    <button class="text-xs mr-1">Modifier</button>
                                    <button class="text-xs">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COMMENTAIRE 2 -->
                    <div id="commTwo" class="flex flex-col items-end md:w-4/5 mb-2 mx-auto">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row justify-center">
                            <img class="rounded-full w-8 h-8 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="text-xs border-2 border-purple-light rounded-md p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex flex-row justify-end">
                            <button class="text-xs mr-1">J'aime</button>
                            <button class="text-xs mr-1">Répondre</button>
                            <button class="text-xs mr-1">Modifier</button>
                            <button class="text-xs">Supprimer</button>
                        </div>
                    </div>
                    <!-- COMMENTAIRE 3 -->
                    <div id="commThree" class="flex flex-col items-end md:w-4/5 mb-2 mx-auto">
                        <!-- AVATAR + COMMENTAIRE -->
                        <div class="flex flex-row justify-center">
                            <img class="rounded-full w-8 h-8 mr-2" src="../../C.D.G/assets/image/2.png" alt="">
                            <p class="text-xs border-2 border-purple-light rounded-md p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quos, aspernatur nihil voluptatum maiores fuga nulla. Nemo deleniti provident temporibus.</p>
                        </div>
                        <!-- BOUTON ACTIONS -->
                        <div class="flex flex-row justify-end">
                            <button class="text-xs mr-1">J'aime</button>
                            <button class="text-xs mr-1">Répondre</button>
                            <button class="text-xs mr-1">Modifier</button>
                            <button class="text-xs">Supprimer</button>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start w-full mx-auto mt-4">
                        <h3 class="text-md mb-1">Rédiger un commentaire</h3>
                        <form action="" method="post" class="flex flex-col justify-center items-end w-full">
                            <textarea name="postComm" id="postComm" class="border-2 border-purple-light rounded-lg w-full"></textarea>
                            <button class="bg-purple-light text-white text-sm uppercase mt-2 py-1 px-2 rounded-md">Poster</button>
                        </form>
                    </div>
                </div>
            </div>

        

        <?php include 'include/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>