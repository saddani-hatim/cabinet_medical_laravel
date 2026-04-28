<x-guest-layout>
    <div class="p-4 max-w-md mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-2">{{ __('Welcome Back') }}</h2>
            <p class="text-slate-600">{{ __('Sign in to your account') }}</p>
        </div>
        
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-semibold" />
                <x-text-input id="email" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all outline-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-semibold" />
                <x-text-input id="password" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all outline-none"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-emerald-600 shadow-sm focus:ring-emerald-500" name="remember">
                    <span class="ms-2 text-sm text-slate-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col gap-4">
                <button type="submit" class="btn-premium medical-gradient text-white shadow-lg shadow-emerald-200/50 w-full py-4 uppercase tracking-wider">
                    {{ __('Log in') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-sm text-slate-500 hover:text-emerald-700 transition-colors text-center" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
        
        <div class="mt-8 pt-6 border-t border-slate-100 text-center">
            <p class="text-slate-600 text-sm">{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" class="text-emerald-600 hover:text-emerald-700 font-bold transition-colors">{{ __('Register here') }}</a></p>
        </div>
    </div>
</x-guest-layout>
