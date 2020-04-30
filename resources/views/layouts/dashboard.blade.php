<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($pageTitle) ? $pageTitle . ' / ' : '') . config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div>
        @yield('content')
    </div>
</body>
</html>
