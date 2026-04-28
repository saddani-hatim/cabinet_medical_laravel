<x-guest-layout>
    <div class="p-8 max-w-4xl">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Side: Benefits -->
            <div class="hidden md:block">
                <div class="text-center md:text-left">
                    <h1 class="text-3xl font-extrabold text-slate-900 mb-4">{{ __('Join Our Healthcare Family') }}</h1>
                    <p class="text-lg text-slate-600 mb-8">{{ __('Create your account and gain access to personalized medical services, appointment scheduling, and comprehensive health management tools.') }}</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">{{ __('Easy Appointment Booking') }}</h3>
                                <p class="text-slate-600 text-sm">{{ __('Schedule consultations with just a few clicks') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">{{ __('Secure Health Records') }}</h3>
                                <p class="text-slate-600 text-sm">{{ __('Your medical data is protected and private') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">{{ __('24/7 Support') }}</h3>
                                <p class="text-slate-600 text-sm">{{ __('Access help whenever you need it') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Form -->
            <div>
                <div class="md:hidden text-center mb-8">
                    <h1 class="text-2xl font-extrabold text-slate-900 mb-2">{{ __('Create Account') }}</h1>
                    <p class="text-slate-600">{{ __('Join our healthcare community today') }}</p>
                </div>
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <x-input-label for="name" :value="__('Full Name')" class="text-slate-700 font-semibold" />
                            <x-text-input id="name" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600 text-sm" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email Address')" class="text-slate-700 font-semibold" />
                            <x-text-input id="email" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-semibold" />
                            <x-text-input id="password" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-700 font-semibold" />
                            <x-text-input id="password_confirmation" class="block mt-2 w-full px-4 py-3 border border-slate-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600 text-sm" />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between mt-8 gap-4">
                        <a class="text-sm text-slate-600 hover:text-blue-600 transition-colors" href="{{ route('login') }}">
                            {{ __('Already have an account? Sign in') }}
                        </a>

                        <button type="submit" class="btn-premium bg-blue-500 text-white hover:bg-blue-600 shadow-lg shadow-blue-200/50 px-8 py-3 w-full sm:w-auto">
                            {{ __('Create Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
