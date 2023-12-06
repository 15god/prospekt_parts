<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>prospekt_parts</title>
    </head>
    <body class="antialiased">
    @foreach($products as $product)
        <div>{{ $product->name }}</div>
    @endforeach
    </body>
</html>
