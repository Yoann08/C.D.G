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

        <?php include 'content/include/navbar.php'; ?>

        <div class="shadow-md shadow-purple-dark/[.7] py-10 mb-5">
            <!-- LOGO LANGAGE + BOUTON -->
            <div class="flex flex-row justify-around mb-10">
                <img class="w-28" src="assets/image/html.png" alt="">
                <div class="flex flex-row items-center">
                    <button class="px-4 py-2.5 text-center inline-flex items-center" id="dropdown" data-dropdown-toggle="dropdownFiltre" type="button">
                        <img class="w-8" src="img/filtre.png" alt="">
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownFiltre" class="z-10 hidden bg-background rounded-lg w-36">
                        <ul class="py-1 rounded-lg shadow shadow-md shadow-purple-dark" aria-labelledby="dropdown">
                            <li>
                                <a href="#" class="block px-4 py-2 text-md text-purple-light hover:bg-purple-light hover:text-background">Bootstrap</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-md text-purple-light hover:bg-purple-light hover:text-background">Tailwind</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-md text-purple-light hover:bg-purple-light hover:text-background">Symfony</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-md text-purple-light hover:bg-purple-light hover:text-background">React</a>
                            </li>
                        </ul>
                    </div>
                    <!-- MODAL TOGGLE -->
                    <button class="flex flex-row border-2 border-purple-light rounded-lg py-1 px-2 text-purple-light" data-modal-target="newcode-modal" data-modal-toggle="newcode-modal" type="button">
                        <svg class="w-6 mr-2 fill-purple-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z"/>
                        </svg>
                        Nouveau code
                    </button>
                </div>
            </div>

            <!-- MODAL NOUVEAU CODE -->
            <!-- Main modal -->
            <div id="newcode-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-xl shadow">
                        <button type="button" class="absolute top-3 right-2.5 text-black bg-background rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="newcode-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-black">Ajouter un nouveau code</h3>
                            <form class="space-y-6" action="#">
                                <div>
                                    <label for="nouveaucode" class="block mb-2 text-sm font-medium text-black">Titre du code</label>
                                    <input type="text" name="nouveaucode" id="nouveaucode" class="bg-gray-50 border border-purple-light text-black text-sm rounded-lg focus:ring-purple-light focus:border-purple-light block w-full p-2.5" placeholder="Formulaire, Traitement d'image, etc" required>
                                </div>
                                <div>
                                    <label for="desccode" class="block mb-2 text-sm font-medium text-black">Description du code</label>
                                    <textarea class="bg-background border border-purple-light text-black text-sm rounded-lg focus:ring-purple-light focus:border-purple-light block w-full p-2.5" name="desccode" id="desccode" cols="15" rows="5" required></textarea>
                                </div>
                                <div>
                                    <label for="writecode" class="block mb-2 text-sm font-medium text-black">Code</label>
                                    <div class="bg-background border border-purple-light text-black text-sm rounded-lg overflow-auto focus:ring-purple-light focus:border-purple-light block w-full p-2.5" id="writecode"></div>
                                </div>
                                <button type="submit" class="w-full text-white bg-purple-dark hover:bg-purple-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter mon code</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- CARD LIST -->
            <div class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 md:gap-x-4 lg:gap-y-6 2xl:gap-x-6 w-4/5 mx-auto">
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/2.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/3.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/4.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/5.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/3.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/4.png" alt=""/>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="content/produit.php">
                        <img class="w-80 h-96 rounded-lg mb-4" src="assets/image/2.png" alt=""/>
                    </a>
                </div>
            </div>
        </div>

        <?php include 'content/include/footer.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>