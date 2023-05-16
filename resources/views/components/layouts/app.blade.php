<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space News</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-neutral-200 to-neutral-300 text-neutral-800">
    <div class="container min-h-screen">
        <header class="relative flex flex-col lg:flex-row justify-around lg:justify-between items-center mb-8 lg:mb-16 h-36 border-b border-neutral-400">
            <x-partials.menu-main />
            <x-partials.logo>.spacenews</x-partials.logo>
            <x-partials.menu-secondary />
        </header>
    
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-neutral-950 h-16 text-neutral-400 text-sm">
        <div class="container flex items-center h-full">
            <span>&copy All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>