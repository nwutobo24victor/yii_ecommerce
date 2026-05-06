<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Yii-Ecommerce') }}</title>

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 text-gray-900">
    <div class="block w-full">
        @include('components.navigation')
    </div>
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>

</html>
