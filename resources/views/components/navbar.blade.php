@inject('user', 'App\Services\TwitchUser')

<div>
    <nav class="flex flex-col md:flex-row bg-blue-600 text-white leading-none">
        <div class="flex items-center mx-5 py-5 md:py-0">
            <h1 class="text-2xl ml-2 inline-block">{{ config('app.name', 'Vale Tips') }}</h1>
        </div>
        <div class="md:flex md:flex-grow bg-blue-700 md:bg-blue-600">
            <ul class="text-lg md:flex md:ml-auto ">
                <li class="w-full md:w-auto p-5 inline-block border-b-4 border-transparent ">
                    <img src="{{ $user->getAvatar()  }}" class="inline-block h-8 w-8 rounded-full mr-4"/> {{ $user->getName() }} <span class="border-l"></span>
                    <a href="{{ route('logout') }}" title="Logout"><i class="far fa-sign-out ml-2"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="flex justify-between bg-white shadow-md px-64 py-3">
        <div class="flex-col">
            <a href="#"><i class="fal fa-list mr-2"></i> Categories</a>
        </div>
    </nav>
</div>
