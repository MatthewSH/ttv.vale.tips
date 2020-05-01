<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($pageTitle) ? $pageTitle . ' / ' : '') . config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/f3e891ea97.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-300 min-h-screen">
    <x-navbar />
    <div class="container mx-auto pt-8">
        @yield('content')
    </div>
</body>
</html>
