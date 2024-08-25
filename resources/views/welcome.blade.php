<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic App</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <livewire:top-bar-navigation/>
        <main id="content">
            <div class="py-12 bg-gray-200">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <livewire:hero-section/>
                        <livewire:featured-doctors/>
                        <livewire:specialist-cards/>
                        <livewire:articles-section/>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
