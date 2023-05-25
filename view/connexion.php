<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CDG/assets/dist/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="flex justify-evenly my-20">
    <!-- Formulaire de Connexion -->
    <div class="w-full max-w-sm p-4 bg-white border-2 border-purple-light rounded-card-radius shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="#">
            <h5 class="text-xl font-medium text-purple-light text-center uppercase">Connexion</h5>
            <div>
                <!-- <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> -->
                <input type="email" name="email" id="email" class="border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" placeholder="ADRESSE EMAIL" required>
            </div>
            <div>
                <!-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label> -->
                <input type="password" name="password" id="password" placeholder="MOT DE PASSE" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" required>
            </div>
            <div class="flex items-start">
                <a href="#" class="ml-auto text-sm text-purple-light hover:underline dark:text-blue-500">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="w-full text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-5 py-2.5 text-center dark:bg-blue-600">Se Connecter</button>
        </form>
    </div>

    <!-- formulaire d'inscription -->
    <div class="w-full max-w-sm p-4 bg-white border-2 border-purple-light rounded-card-radius shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="#">
            <h5 class="text-xl font-medium text-purple-light text-center uppercase">S'enregistrer</h5>
            <div>
                <!-- <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> -->
                <input type="name" name="name" id="name" class="border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" placeholder="NOM" required>
            </div>
            <div>
                <!-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label> -->
                <input type="lastname" name="lastname" id="lastname" placeholder="PRENOM" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" required>
            </div>
            <div>
                <!-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label> -->
                <input type="email" name="email" id="email" placeholder="ADRESSE EMAIL" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" required>
            </div>
            <div>
                <!-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label> -->
                <input type="password" name="password" id="password" placeholder="MOT DE PASSE" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" required>
            </div>
            <div>
                <!-- <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label> -->
                <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="CONFIRMER MOT DE PASSE" class="bg-gray-50 border-2 border-purple-light text-purple-light text-sm rounded-lg block w-full p-2.5 placeholder-purple-light" required>
            </div>
            <button type="submit" class="w-full text-purple-light uppercase border-2 font-medium rounded-2xl text-sm px-5 py-2.5 text-center dark:bg-blue-600">Se Connecter</button>
        </form>
    </div>
</div>

</body>
</html>
