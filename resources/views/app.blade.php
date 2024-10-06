<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @livewire('components.navbar')
    <main class="flex-1 ml-[60px] px-6 overflow-y-auto">
        <div class="max-w-[1050px] mx-auto columns-1 sm:columns-2  md:columns-3 gap-5 space-y-5">
            @livewire('components.post-card', ['imagePath' => '/rio-de-janeiro.gif','postContent' => 'streetwear aesthetics, targeting hype beasts and fashion-forward individuals. This versatile accessory can be worn as a scarf or transformed into a compact handbag with a practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly.'])
            @livewire('components.post-card', ['imagePath' => '/meme1.jpg','postContent' => 'streetwear aesthetics, targeting hype beasts and fashion-forward individuals. This versatile accessory can be worn as a scarf or transformed into a compact handbag with a practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly. '])
            @livewire('components.post-card', ['imagePath' => '/meme2.png','postContent' => 'streetwear aesthetics, targeting hype beasts and fashion-forward individuals. This versatile accessory can be worn as a scarf or transformed into a compact handbag with a practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly. practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly.'])
            @livewire('components.post-card', ['imagePath' => '/meme3.jpg','postContent' => 'streetwear aesthetics, targeting hype beasts and fashion-forward individuals. This versatile accessory can be worn as a scarf or transformed into a compact handbag with a practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly. '])
            @livewire('components.post-card', ['imagePath' => '/rio-de-janeiro.gif','postContent' => 'streetwear aesthetics, targeting hype beasts and fashion-forward individuals. This versatile accessory can be worn as a scarf or transformed into a compact handbag with a practical loop closure, ensuring your essentials stay close at hand stylishly and discreetly. '])
            
        </div>
    </main>
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
