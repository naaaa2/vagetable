<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a herf="/">
                <x-application-logo class="" />
            </a>
        </x-slot>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保持する') }}</span>
                </label>
            </div>

            
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('ログイン') }}
                </x-primary-button>
            </div>
        </form>

        <div class="p-3 bg-white border-b border-gray-200">
        </div>
        <br>

        
        <label for="name" class="col-sm-4 col-form-label text-md-right">SNSアカウントでログイン</label>
        <br>
        <br>
        
        <form method="GET" action="{{ route('oauth.redirect', ['provider' => 'github']) }}">
        <div class="ml-3">
        <button class="text-white bg-gray-700 border-0 py-1 px-5 focus:outline-none hover:bg-gray-900 rounded text-lg w-full">GitHub</button>
        </div>
        </form>
        <br>

        <form method="GET" action="{{ route('oauth.redirect', ['provider' => 'line']) }}">
        <div class="ml-3">
        <button class="text-white bg-green-500 border-0 py-1 px-6 focus:outline-none hover:bg-green-600 rounded text-lg w-full">LINE</button>
        </div>
        </form>
        <br>

        
        <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('会員登録がお済みでない方はこちらへ') }}
                </a>
        </div>

    </x-auth-card>
</x-guest-layout>
