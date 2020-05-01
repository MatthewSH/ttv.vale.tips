<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($pageTitle) ? $pageTitle . ' / ' : '') . config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <div class="container mx-auto pt-4">
        @yield('content')
    </div>
</body>
</html>
