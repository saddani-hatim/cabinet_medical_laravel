<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Cabinet Médical') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        animation: {
                            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                            'float': 'float 3s ease-in-out infinite',
                        },
                        keyframes: {
                            float: {
                                '0%, 100%': { transform: 'translateY(0)' },
                                '50%': { transform: 'translateY(-10px)' },
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            .medical-gradient {
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            }
            .text-gradient {
                background: linear-gradient(135deg, #059669 0%, #047857 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .premium-card {
                background: white;
                border-radius: 1rem;
                box-shadow: 0 6px 24px -10px rgba(16, 185, 129, 0.15), 0 2px 10px -6px rgba(16, 185, 129, 0.1);
            }
            .btn-premium {
                padding: 0.75rem 1.5rem;
                border-radius: 0.9rem;
                font-weight: 700;
                transition: all 0.2s;
            }
            .unique-section {
                background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            }
        </style>
    </head>
    <body class="antialiased bg-[#f0fdf4] text-slate-900">
        <div class="relative min-h-screen overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-full -z-10 bg-[#f0fdf4]">
                <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-emerald-200/60 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-teal-200/70 rounded-full blur-[120px]"></div>
            </div>

            <nav class="max-w-7xl mx-auto px-6 py-8 flex items-center justify-between relative z-10">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 medical-gradient rounded-xl flex items-center justify-center text-white shadow-lg shadow-emerald-200/60 hover:rotate-12 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-slate-900">{{ config('APP_NAME', 'Cabinet Médical') }}</span>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-2">
                        <a href="{{ route('locale.switch', 'fr') }}" class="text-sm font-semibold text-slate-700 hover:text-emerald-600 transition-colors">FR</a>
                        <span class="text-slate-400">|</span>
                        <a href="{{ route('locale.switch', 'en') }}" class="text-sm font-semibold text-slate-700 hover:text-emerald-600 transition-colors"> EN</a>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn-premium bg-emerald-500 text-white hover:bg-emerald-600">{{ __('Tableau de bord') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-700 hover:text-emerald-600 transition-colors">{{ __('Connexion') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-premium bg-white text-slate-900 border border-emerald-200 hover:bg-emerald-50">{{ __('Inscription') }}</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>

            <main class="max-w-7xl mx-auto px-6 pt-16 pb-24 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    
                    <div class="order-1 lg:order-1 relative">
                        <div class="premium-card p-4 -rotate-3 lg:-rotate-6 scale-95 opacity-50 absolute inset-0 -z-10 -translate-x-6 translate-y-12 bg-emerald-50"></div>
                        <div class="premium-card p-8 bg-white shadow-2xl relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-32 h-32 medical-gradient opacity-10 rounded-bl-[100px] transition-transform group-hover:scale-110 duration-500"></div>
                            
                            <div class="flex items-center justify-between mb-10">
                                <h3 class="text-xl font-bold text-slate-900">{{ __('Rendez-vous à venir') }}</h3>
                                <span class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                                </span>
                            </div>

                            <div class="space-y-6 relative z-10">
                                <div class="flex items-center gap-4 p-4 rounded-2xl bg-emerald-50 border border-emerald-100 hover:shadow-md transition-shadow cursor-pointer hover:-translate-y-1 transform duration-200">
                                    <div class="w-12 h-12 rounded-xl bg-emerald-500 flex items-center justify-center text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs font-bold text-emerald-500 uppercase tracking-wider">{{ __('Médecine Générale') }}</span>
                                        <span class="block text-slate-900 font-bold">{{ __('Aujourd\'hui, 14:00') }}</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-4 rounded-2xl bg-teal-50 border border-teal-100 hover:shadow-md transition-shadow cursor-pointer hover:-translate-y-1 transform duration-200">
                                    <div class="w-12 h-12 rounded-xl bg-teal-500 flex items-center justify-center text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs font-bold text-teal-600 uppercase tracking-wider">{{ __('Pédiatrie') }}</span>
                                        <span class="block text-slate-900 font-bold">{{ __('Demain, 11:00') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 pt-8 border-t border-emerald-50 flex items-center justify-between">
                                <div class="flex -space-x-3">
                                    @for($i=0; $i<4; $i++)
                                        <div class="w-10 h-10 rounded-full border-4 border-white bg-emerald-100 flex items-center justify-center text-emerald-500 font-bold text-xs">+</div>
                                    @endfor
                                </div>
                                <span class="text-sm font-bold text-emerald-600">{{ __('+24 cette semaine') }}</span>
                            </div>
                        </div>
                        
                        <div class="absolute -right-8 bottom-1/4 animate-float hidden md:flex items-center gap-3 bg-white p-3 rounded-2xl shadow-xl border border-emerald-100 z-20">
                            <span class="flex h-4 w-4 relative">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500"></span>
                            </span>
                            <div>
                                <span class="block text-xs font-bold text-emerald-600 uppercase">{{ __('Statut') }}</span>
                                <span class="block text-sm font-bold text-slate-800">{{ __('Médecins Disponibles') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-2 lg:order-2 lg:pl-10">
                        <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-sm font-bold tracking-wide uppercase mb-6 shadow-sm border border-emerald-200">
                            ✨ {{ __('Excellence en Santé') }}
                        </span>
                        <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                            {{ __('Votre Santé, Notre Priorité') }} <br><span class="text-gradient">{{ __('Soins Médicaux Avancés') }}</span> <br>{{ __('à Portée de Main') }}
                        </h1>
                        <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-lg">
                            {{ __('Découvrez des soins de santé de pointe avec notre équipe d\'experts. Prenez rendez-vous, accédez à vos dossiers et gérez votre parcours de santé en toute simplicité.') }}
                        </p>
                        <div class="flex flex-col xl:flex-row gap-4">
                            <a href="{{ route('register') }}" class="btn-premium bg-emerald-500 text-white text-center py-4 px-8 text-lg hover:bg-emerald-600 shadow-xl shadow-emerald-200/50 hover:-translate-y-1 transform transition-all group flex items-center justify-center gap-2">
                                {{ __('Commencer') }}
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        
                        </div>
                    </div>

                </div>
            </main>

            <section class="py-24 bg-white relative border-y border-slate-100">
                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
                        <div>
                            <span class="text-emerald-500 font-bold tracking-wider uppercase text-sm mb-2 block">{{ __('Processus Simple') }}</span>
                            <h2 class="text-4xl font-extrabold text-slate-900 mb-4">{{ __('Comment Ça Marche') }}</h2>
                            <p class="text-lg text-slate-600 max-w-xl">{{ __('Obtenir les soins dont vous avez besoin est simple. Suivez ces étapes faciles pour commencer votre parcours de santé avec nous.') }}</p>
                        </div>
                        <a href="{{ route('register') }}" class="hidden md:flex text-emerald-600 font-bold hover:text-emerald-700 items-center gap-2 group">
                            {{ __('Commencez Dès Maintenant') }}
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-8 relative mt-12">
                        <div class="hidden md:block absolute top-[40px] left-[16%] right-[16%] h-0.5 border-t-2 border-dashed border-emerald-200 -z-10"></div>
                        
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-500 text-2xl font-bold mx-auto mb-6 shadow-sm border border-emerald-100 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300">1</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Créez Votre Compte') }}</h3>
                            <p class="text-slate-600">{{ __('Inscrivez-vous en quelques secondes avec vos informations de base. Pas de longs formulaires ni de délais d\'attente.') }}</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-500 text-2xl font-bold mx-auto mb-6 shadow-sm border border-emerald-100 group-hover:bg-teal-500 group-hover:text-white transition-colors duration-300">2</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Prenez Rendez-vous') }}</h3>
                            <p class="text-slate-600">{{ __('Choisissez votre médecin, date et heure préférées. Obtenez une confirmation instantanée et des rappels.') }}</p>
                        </div>
                        <div class="text-center group">
                            <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-500 text-2xl font-bold mx-auto mb-6 shadow-sm border border-emerald-100 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">3</div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Recevez des Soins de Qualité') }}</h3>
                            <p class="text-slate-600">{{ __('Présentez-vous à votre rendez-vous et recevez une attention médicale personnalisée de nos experts.') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="unique-section py-24 relative overflow-hidden">
                <div class="absolute inset-0 bg-white opacity-40 z-0"></div>
                <div class="absolute -right-40 top-20 w-96 h-96 bg-emerald-300 rounded-full blur-[100px] opacity-30"></div>
                <div class="absolute -left-40 bottom-20 w-96 h-96 bg-teal-300 rounded-full blur-[100px] opacity-30"></div>

                <div class="max-w-7xl mx-auto px-6 relative z-10">
                    <div class="text-center mb-16">
                        <span class="text-emerald-600 font-bold tracking-wider uppercase text-sm mb-2 block">{{ __('Nos Avantages') }}</span>
                        <h2 class="text-4xl font-extrabold text-slate-900 mb-4">{{ __('Pourquoi Choisir Notre Cabinet ?') }}</h2>
                        <p class="text-lg text-slate-600 max-w-2xl mx-auto">{{ __('Découvrez ce qui distingue notre pratique médicale et pourquoi les patients nous confient leurs besoins de santé.') }}</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center premium-card p-8 hover:-translate-y-2 transition-transform duration-300 bg-white/80 backdrop-blur-md">
                            <div class="w-16 h-16 medical-gradient rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-emerald-200">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Rapidité Exceptionnelle') }}</h3>
                            <p class="text-slate-600">{{ __('Obtenez des rendez-vous programmés en minutes, pas en jours. Notre système optimisé garantit que vous voyez le bon médecin au bon moment.') }}</p>
                        </div>
                        <div class="text-center premium-card p-8 hover:-translate-y-2 transition-transform duration-300 bg-white/80 backdrop-blur-md">
                            <div class="w-16 h-16 medical-gradient rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-emerald-200">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Sécurité Fiable') }}</h3>
                            <p class="text-slate-600">{{ __('Vos informations de santé sont protégées avec une sécurité de niveau bancaire. La confidentialité est notre priorité absolue.') }}</p>
                        </div>
                        <div class="text-center premium-card p-8 hover:-translate-y-2 transition-transform duration-300 bg-white/80 backdrop-blur-md">
                            <div class="w-16 h-16 medical-gradient rounded-2xl flex items-center justify-center text-white mx-auto mb-6 shadow-lg shadow-emerald-200">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('Équipe Expérimentée') }}</h3>
                            <p class="text-slate-600">{{ __('Notre équipe de professionnels de la santé hautement qualifiés apporte des années d\'expérience pour offrir les meilleurs soins possibles.') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="bg-slate-900 text-slate-300 py-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-[80px]"></div>
                <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <div class="w-8 h-8 medical-gradient rounded flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </div>
                        <span class="text-xl font-bold tracking-tight text-white">{{ config('APP_NAME', 'Cabinet Médical') }}</span>
                    </div>
                    <p class="text-slate-400 text-sm">
                        &copy; {{ date('Y') }} {{ config('APP_NAME', 'Cabinet Médical') }}. {{ __('Tous droits réservés.') }}
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>
