<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Pixel Positions</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;&display=swap">
        @vite(['resources/css/app.css/', 'resources/js/app.js'])
    </head>
    <body class="bg-[#060606] text-white font-[Hanken Grotesk]">
        <div class="px-10">
            <nav class="flex justify-between items-center py-4 border-b border-white/20">
                <div>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <a href="/">Jobs</a>
                    <a href="/">Careers</a>
                    <a href="/">Salaries</a>
                    <a href="/">Companies</a>
                </div>

                <div>
                    <a href="">Post a Job</a>
                </div>
            </nav>

            <main class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </main>
    </body>
</html>
