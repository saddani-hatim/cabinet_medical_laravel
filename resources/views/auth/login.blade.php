<x-guest-layout>
    
    <div class="p-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-2">{{ __('Welcome Back') }}</h2>
            <p class="text-slate-600">{{ __('Sign in to your account') }}</p>
        </div>
        
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-semibold" />
                <x-text-input id="email" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
            </div>

            
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-semibold" />

                <x-text-input id="password" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
            </div>

            
            <div class="block mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                    <span class="ms-2 text-sm text-slate-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-slate-600 hover:text-blue-600 transition-colors" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn-premium bg-blue-500 text-white hover:bg-blue-600 shadow-lg shadow-blue-200/50 px-6 py-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
        
        <div class="mt-8 text-center">
            <p class="text-slate-600 text-sm">{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700 font-semibold transition-colors">{{ __('Register here') }}</a></p>
        </div>
    </div>
</x-guest-layout>
