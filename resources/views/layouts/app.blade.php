<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('APP_NAME', 'Cabinet Médical') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=outfit:400,500,600,700,800&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#fff7ed',
                                100: '#ffedd5',
                                200: '#fed7aa',
                                400: '#f59e0b',
                                500: '#ea580c',
                                600: '#c2410c',
                                700: '#9a3412',
                            },
                            mint: {
                                50: '#ecfdf5',
                                100: '#d1fae5',
                                200: '#a7f3d0',
                                400: '#34d399',
                                500: '#10b981',
                                600: '#059669',
                                700: '#047857',
                            },
                        }
                    }
                }
            }
        </script>
        <style>
            [x-cloak] { display: none !important; }
            
            .premium-sidebar {
                background: rgba(255, 255, 255, 0.88);
                backdrop-filter: blur(24px);
                -webkit-backdrop-filter: blur(24px);
            }
            
            .medical-gradient {
                background: linear-gradient(135deg, #fb923c 0%, #10b981 100%);
            }
            
            .sidebar-item-active {
                background: linear-gradient(90deg, rgba(251, 146, 60, 0.12) 0%, rgba(16, 185, 129, 0.08) 100%);
                border-right: 3px solid #fb923c;
                color: #c2410c !important;
            }
            
            .premium-card {
                background: white;
                border-radius: 1.5rem;
                box-shadow: 0 18px 40px -18px rgba(15, 23, 42, 0.15), 0 6px 16px -12px rgba(15, 23, 42, 0.08);
                border: 1px solid rgba(241, 245, 249, 1);
                transition: transform 0.25s ease, box-shadow 0.25s ease;
            }
            
            .premium-card:hover {
                transform: translateY(-3px);
                box-shadow: 0 25px 45px -20px rgba(15, 23, 42, 0.18), 0 10px 22px -14px rgba(15, 23, 42, 0.1);
            }

            .glass-header {
                background: rgba(255, 255, 255, 0.78);
                backdrop-filter: blur(16px);
                border-bottom: 1px solid rgba(251, 146, 60, 0.12);
            }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-900 bg-[#fff7ed]">
        <div class="fixed inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-orange-50 via-white to-emerald-50/40"></div>
        <div class="flex min-h-screen overflow-hidden">
            
            <aside class="hidden lg:flex flex-col w-72 premium-sidebar border-r border-slate-200/60 shadow-xl shadow-slate-200/20 z-20">
                <div class="p-8 flex items-center gap-4">
                    <div class="w-12 h-12 medical-gradient rounded-2xl flex items-center justify-center text-white shadow-lg shadow-orange-200/80">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-black tracking-tight text-slate-900 uppercase">{{ config('APP_NAME', 'Cabinet') }}</span>
                        <span class="text-[10px] font-bold text-amber-600 uppercase tracking-[0.2em]">Management System</span>
                    </div>
                </div>

                <nav class="flex-1 px-4 space-y-1.5 mt-4">
                    <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all hover:bg-slate-100 text-slate-500 font-bold text-sm mb-6 group">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        {{ __('Back to Website') }}
                    </a>

                    <div class="px-4 pb-2">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ __('Menu') }}</span>
                    </div>

                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all text-sm font-bold {{ request()->routeIs('dashboard') ? 'sidebar-item-active' : 'text-slate-500 hover:bg-slate-50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        {{ __('Dashboard') }}
                    </a>

                    <a href="{{ route('appointments.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all text-sm font-bold {{ request()->routeIs('appointments.*') ? 'sidebar-item-active' : 'text-slate-500 hover:bg-slate-50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ __('Appointments') }}
                    </a>

                    <a href="{{ route('services.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all text-sm font-bold {{ request()->routeIs('services.*') ? 'sidebar-item-active' : 'text-slate-500 hover:bg-slate-50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        {{ __('Services') }}
                    </a>

                    <a href="{{ route('patients.index') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all text-sm font-bold {{ request()->routeIs('patients.*') ? 'sidebar-item-active' : 'text-slate-500 hover:bg-slate-50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        {{ __('Patients') }}
                    </a>

                    <a href="{{ route('email.create') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all text-sm font-bold {{ request()->routeIs('email.*') ? 'sidebar-item-active' : 'text-slate-500 hover:bg-slate-50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        {{ __('Email') }}
                    </a>
                </nav>

                <div class="p-6 border-t border-slate-100">
                    <div class="flex items-center gap-3 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm">
                        <img class="w-10 h-10 rounded-xl border-2 border-slate-50 shadow-sm" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=f97316&color=fff" alt="Avatar">
                        <div class="overflow-hidden">
                            <span class="block text-sm font-black text-slate-900 truncate">{{ Auth::user()->name }}</span>
                            <span class="block text-[10px] font-bold text-slate-500 truncate uppercase">{{ Auth::user()->role }}</span>
                        </div>
                    </div>
                </div>
            </aside>

            
            <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
                <div class="glass-header z-10">
                    @include('layouts.navigation')
                </div>

                
                <main class="flex-1 overflow-y-auto">
                    <div class="max-w-[1600px] mx-auto p-6 lg:p-10">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
