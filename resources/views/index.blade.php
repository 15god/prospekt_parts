<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>prospekt_parts</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <div id="app">
            <parts-table :products="{{ $products }}" :positions="{{ $positions }}" :total="{{ $total }}" :status="{{ $status }}" />
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
