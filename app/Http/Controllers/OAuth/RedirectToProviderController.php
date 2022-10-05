<?php 

namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\SocialProvider;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

final class RedirectToProviderController extends Controller
{
    /**
     * @param SocialProvider $provider
     * @return RedirectResponse
     */
    public function __invoke(SocialProvider $provider): RedirectResponse
    {
        return Socialite::driver($provider->value)->redirect();
    }

}
