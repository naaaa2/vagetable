<?php 

namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Enums\SocialProvider;
use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as SocialiteTwoUser;

final class CallbackFromProviderController extends Controller
{
/**
     * @param AuthManager $auth
     */
    public function __construct(
        private AuthManager $auth,
    ) {
    }

    /**
     * @param Request $request
     * @param SocialProvider $provider
     * @return JsonResponse
     */
    public function __invoke(Request $request, SocialProvider $provider)
    //: JsonResponse
    {
        /** @var SocialiteTwoUser $socialiteTwoUser */
        $socialiteTwoUser = Socialite::driver($provider->value)->user();

        $socialAccount = SocialAccount::where([
            'provider_name' => $provider->name,
            'provider_id' => $socialiteTwoUser->getId(),
        ])->first();

        if ($socialAccount) {
            $this->auth->guard()->login($socialAccount->user);
            $request->session()->regenerate();

            // return new JsonResponse([
            //     'data' => [
            //         'id' => $socialAccount->user->id,
            //         'name' => $socialAccount->user->name,
            //         'email' => $socialAccount->user->email,
            //     ],
            //     'message' => 'Already social linked.',
            // ]);
            return to_route('home');
        }

        $user = User::firstOrCreate([
            'email' => $socialiteTwoUser->getEmail(),
        ], [
            'name' => $socialiteTwoUser->getName(),
            'password' => Hash::make(Str::random()),
        ]);

        $user->socialAccounts()->create([
            'provider_name' => $provider->value,
            'provider_id' => $socialiteTwoUser->getId(),
            'provider_token' => $socialiteTwoUser->token,
            'provider_refresh_token' => $socialiteTwoUser->refreshToken,
        ]);

        $this->auth->guard()->login($user);
        $request->session()->regenerate();

        // return new JsonResponse([
        //     'data' => [
        //         'id' => $user->id,
        //         'name' => $user->name,
        //         'email' => $user->email,
        //     ],
        //     'message' => 'Successful social link.',
        // ]);
        return to_route('home');
    }
}
