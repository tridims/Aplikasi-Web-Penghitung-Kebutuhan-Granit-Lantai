<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },
        }
    </script>
    <title>Aplikasi Kalkulator Lantai Granit</title>
</head>

<body>
    <nav class="bg-laravel shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-white capitalize dark:text-gray-300">
            <a href="/" class="text-white transition-colors duration-200 transform dark:text-gray-200 border-b-2 border-dark-500 mx-1.5 sm:mx-6">home</a>

            <a href="https://github.com/tridims/Aplikasi-Web-Penghitung-Kebutuhan-Granit-Lantai" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-dark-500 mx-1.5 sm:mx-6">Source Code</a>
        </div>
    </nav>

    <main class='mt-5'>
        {{$slot}}
    </main>

    <footer class="flex flex-col bg-laravel items-center justify-between px-6 py-4 dark:bg-gray-800 sm:flex-row mt-20">
        <a href="#" class="text-xl font-bold text-white dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Pemweb TIF-D</a>

        <p class="py-2 text-white dark:text-white sm:py-0">By Dimas Tri Mustakim</p>

        <div class="flex -mx-2">

            <a href="https://github.com/tridims/Aplikasi-Web-Penghitung-Kebutuhan-Granit-Lantai" class="mx-2 text-white dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                Source
            </a>
        </div>
    </footer>
    <x-flash-message />
</body>

</html>