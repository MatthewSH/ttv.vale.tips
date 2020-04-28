<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return Socialite::driver('twitch')->redirect();
    }

    /**
     * Obtain the user information from Twitch.
     *
     * @return JsonResponse
     */
    public function handleProviderCallback(Request $request)
    {
        $twitchUser = Socialite::driver('twitch')->user();

        $user = User::updateOrCreate(['user_id' => $twitchUser->getId()], [
            'user_id' => $twitchUser->getId(),
            'nickname' => $twitchUser->getNickname(),
            'name' => $twitchUser->getName(),
            'email' => $twitchUser->getEmail(),
            'token' => $twitchUser->token,
            'refresh_token' => $twitchUser->refreshToken,
            'expires_in' => $twitchUser->expiresIn,
            'avatar' => $twitchUser->getAvatar(),
            'user' => $twitchUser->user,
            'access_token_response_body' => $twitchUser->accessTokenResponseBody,
        ]);

        $request->session()->put('ttv_user', $user);

        return redirect()->route('dashboard.index');
    }
}
