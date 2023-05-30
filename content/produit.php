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
        <!-- Roboto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Baloo 2 -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700;800&display=swap" rel="stylesheet"> -->

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
                        // 'baloo': ['Baloo 2', 'cursive'],
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

    <!-- LOGO LANGAGE -->
    <div class="my-10">
        <img class="w-28 mx-auto" src="../../../C.D.G/assets/image/html.png" alt="">
    </div>

    <!-- CODE + DESCRIPTION -->
    <div class="mx-52 my-10 border-2 border-purple-light">
        <!-- CODE -->
        <div class="h-96 w-4/6 border-2 border-purple-light rounded-lg">
        fghjhgfgf
        </div>
        <!-- DESCRIPTION -->
    </div>

    <!-- COMMENTAIRES -->

    <?php include 'include/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </body>
</html>