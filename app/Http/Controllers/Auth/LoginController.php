<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Twitch authentication page.
     *
     * @return RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('Twitch')->redirect();
    }

    /**
     * Obtain the user information from Twitch.
     *
     * @return JsonResponse
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('Twitch')->user();

        return response()->json($user);
    }
}
