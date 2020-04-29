<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vale Tips / Admin</title>

        <script src="https://kit.fontawesome.com/f3e891ea97.js" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mt-64">
                <a href="{{ route('login.twitch') }}" class="bg-purple-600 hover:bg-purple-500 text-white font-thin text-2xl py-2 px-4 border-b-4 border-purple-800 hover:border-purple-600">
                    <span class="pr-2"><i class="fab fa-twitch"></i></span> Login with Twitch
                </a>
                <p class="text-gray-600 mt-8 font-thin">
                    We only need basic user information to verify identity and update your profile information on the site.<br/>
                    We do not ask for any other permissions.<br/>
                    If you see it asking for more, please contact Matthew immediately and do not finish the login.
                </p>
            </div>
        </div>
    </body>
</html>
