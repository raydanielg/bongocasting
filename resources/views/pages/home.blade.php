@extends('layouts.frontend')

@section('title', 'Karibu BongoCasting - Tanzania\'s Premier Talent Platform')

@section('content')
    <!-- 1. HERO SECTION -->
    <section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden pt-20 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-gray-50'">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 transition-opacity duration-500" :class="darkMode ? 'opacity-40' : 'opacity-10'">
            <div class="absolute inset-0" :style="darkMode ? 'background: linear-gradient(to bottom, transparent, #050505)' : 'background: linear-gradient(to bottom, transparent, #ffffff)'"></div>
            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070" class="w-full h-full object-cover" alt="Hero Background">
        </div>

        <div class="hero-content relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" 
             x-data="{}" 
             x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, ease: 'power3.out' })">
            
            <div class="inline-block px-4 py-1 rounded-full bg-primary-600/20 border border-primary-600/30 text-primary-500 font-bold text-sm mb-8 animate-pulse uppercase tracking-widest">
                TANZANIA'S PREMIER TALENT PLATFORM
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tighter mb-6 leading-tight uppercase transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">
                BONGO<span class="text-primary-600">CASTING</span>
            </h1>

            <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-12 font-medium transition-colors duration-500" :class="darkMode ? 'text-white/80' : 'text-black/70'">
                Connect with the best artists, dancers, models, and producers across the country.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
                <a href="/talents" class="btn btn-primary text-lg px-8 py-4 font-black">FIND TALENT</a>
                <a href="/register" class="btn text-lg px-8 py-4 font-black border transition-all duration-300" :class="darkMode ? 'bg-dark-400 text-white border-white/10 hover:bg-dark-300' : 'bg-gray-200 text-black border-black/5 hover:bg-gray-300'">BECOME A TALENT</a>
                <a href="/about" class="btn text-lg px-8 py-4 font-black border transition-all duration-300" :class="darkMode ? 'bg-white text-black border-transparent hover:bg-gray-200' : 'bg-black text-white border-transparent hover:bg-gray-800'">LEARN MORE</a>
            </div>

            <div class="flex items-center justify-center space-x-2 mb-16">
                <div class="flex -space-x-2 mr-4">
                    @foreach(range(1, 5) as $i)
                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-[var(--bg-main)]" src="https://api.dicebear.com/7.x/avataaars/svg?seed=User{{ $i }}" alt="">
                    @endforeach
                </div>
                <div class="flex items-center text-primary-600 text-xs">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="text-[10px] font-bold ml-2 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/40'">10,000+ Bookings</span>
            </div>

            <!-- Search Bar (Netflix Style) -->
            <div class="max-w-4xl mx-auto p-2 rounded-2xl md:rounded-full border transition-all duration-500 shadow-2xl" :class="darkMode ? 'glass border-white/20' : 'bg-white border-black/5'">
                <form action="/talents" class="flex flex-col md:flex-row items-center">
                    <input type="text" placeholder="Search by talent type (e.g. Actor)..." class="bg-transparent border-none focus:ring-0 w-full px-6 py-4 font-semibold transition-colors duration-500" :class="darkMode ? 'text-white placeholder-white/40' : 'text-black placeholder-black/40'">
                    <div class="hidden md:block w-px h-8 bg-white/10 mx-2" :class="darkMode ? 'bg-white/10' : 'bg-black/10'"></div>
                    <input type="text" placeholder="Location..." class="bg-transparent border-none focus:ring-0 w-full px-6 py-4 font-semibold transition-colors duration-500" :class="darkMode ? 'text-white placeholder-white/40' : 'text-black placeholder-black/40'">
                    <button type="submit" class="w-full md:w-auto btn btn-primary md:rounded-full py-4 px-10 font-black tracking-widest">
                        SEARCH
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 2. STATS COUNTER -->
    <section class="py-24 bg-dark-400 border-y border-white/5 relative overflow-hidden" x-data="{
        stats: [
            { id: 'bookings', value: 10000, suffix: 'K+', label: 'BOOKINGS', icon: 'fa-check-circle' },
            { id: 'artists', value: 5000, suffix: 'K+', label: 'ARTISTS', icon: 'fa-microphone' },
            { id: 'talents', value: 2000, suffix: 'K+', label: 'TALENTS', icon: 'fa-user-check' },
            { id: 'events', value: 500, suffix: '+', label: 'EVENTS', icon: 'fa-calendar-day' }
        ]
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-black mb-16 italic uppercase tracking-tighter"><span class="text-primary-600">BONGOCASTING</span> IN NUMBERS</h2>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <template x-for="stat in stats" :key="stat.id">
                    <div class="stat-item group p-8 rounded-3xl glass border border-white/5 hover:border-primary-600/30 transition-all duration-500">
                        <div class="flex justify-between items-start mb-6">
                            <i class="fas text-3xl text-primary-600 group-hover:scale-110 transition-transform" :class="stat.icon"></i>
                        </div>
                        <div class="text-4xl md:text-5xl font-black text-white mb-2" x-text="stat.value.toLocaleString() + stat.suffix">0</div>
                        <div class="text-white/40 text-sm font-bold tracking-widest" x-text="stat.label">LABEL</div>
                    </div>
                </template>
            </div>

            <div class="mt-16 flex items-center justify-center space-x-4 text-white/60">
                <div class="flex text-primary-600">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span class="font-bold italic text-lg uppercase tracking-tighter">4.8/5 Average Rating from 3,000+ Reviews</span>
            </div>
        </div>
    </section>

    <!-- 3. FEATURED TALENTS -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-white'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-black mb-4 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">FEATURED</span> TALENTS</h2>
                    <p class="font-bold tracking-widest uppercase text-[10px] transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'">Elite professionals from Tanzania</p>
                </div>
                <a href="/talents" class="group flex items-center space-x-2 bg-primary-600/10 hover:bg-primary-600 px-6 py-3 rounded-xl transition-all duration-300">
                    <span class="font-black uppercase text-[10px] tracking-widest transition-colors duration-300 group-hover:text-white" :class="darkMode ? 'text-white' : 'text-black'">View All</span>
                    <x-iconsax icon="arrow-right-up" size="14" class="transform rotate-45 transition-colors duration-300 group-hover:text-white" :color="darkMode ? '#ffffff' : '#000000'" />
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(range(1, 4) as $index)
                <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-3 transition-all duration-500 hover:border-primary-600/30 overflow-hidden">
                    <!-- Image Wrapper -->
                    <div class="relative aspect-square rounded-[1.5rem] overflow-hidden mb-5">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Featured{{ $index }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Talent">
                        
                        <!-- Premium Badge -->
                        <div class="absolute top-3 right-3 z-20">
                            <div class="bg-black/60 backdrop-blur-md px-3 py-1 rounded-full border border-white/10 text-[8px] font-black text-white tracking-widest uppercase">PRO</div>
                        </div>

                        <!-- Hover Action Button -->
                        <div class="absolute inset-0 z-30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-black/20 backdrop-blur-[2px]">
                            <button class="btn-primary px-6 py-2.5 rounded-full text-[10px] font-black tracking-[0.2em] shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 uppercase">
                                BOOK NOW
                            </button>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="px-2 pb-2">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-black uppercase tracking-tight transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">JOHNSON {{ $index }}</h3>
                            <div class="flex items-center text-primary-600">
                                <x-iconsax icon="star" size="12" />
                                <span class="ml-1 text-[10px] font-black">4.9</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center text-primary-600/60">
                                <x-iconsax icon="music" size="14" />
                                <span class="ml-2 text-[9px] font-bold uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'">Musician</span>
                            </div>
                            <div class="flex items-center transition-colors duration-500" :class="darkMode ? 'text-white/30' : 'text-black/30'">
                                <x-iconsax icon="location" size="14" class="text-primary-600/60" />
                                <span class="ml-1 text-[9px] font-black uppercase">Dar</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. CATEGORIES -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-dark-400' : 'bg-gray-50'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black mb-16 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">BROWSE</span> BY CATEGORY</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @php
                    $categories = [
                        ['name' => 'MUSICIANS', 'count' => '2.5K', 'icon' => 'fa-microphone'],
                        ['name' => 'DANCERS', 'count' => '1.8K', 'icon' => 'fa-shoe-prints'],
                        ['name' => 'MODELS', 'count' => '1.2K', 'icon' => 'fa-camera'],
                        ['name' => 'ACTORS', 'count' => '900', 'icon' => 'fa-masks-theater'],
                        ['name' => 'PRODUCERS', 'count' => '450', 'icon' => 'fa-clapperboard'],
                        ['name' => 'MC/HOSTS', 'count' => '650', 'icon' => 'fa-microphone-alt'],
                        ['name' => 'VIDEO VIXEN', 'count' => '400', 'icon' => 'fa-video'],
                        ['name' => 'MUSIC PROD', 'count' => '300', 'icon' => 'fa-headphones'],
                        ['name' => 'COMEDIANS', 'count' => '350', 'icon' => 'fa-face-laugh-squint'],
                        ['name' => 'VOICE ARTISTS', 'count' => '200', 'icon' => 'fa-bullhorn'],
                    ];
                @endphp

                @foreach($categories as $cat)
                <div class="group cursor-pointer">
                    <div class="w-32 h-32 md:w-40 md:h-40 mx-auto rounded-full transition-all duration-500 flex flex-col items-center justify-center relative mb-6 border" :class="darkMode ? 'bg-black border-white/5 group-hover:border-primary-600' : 'bg-white border-black/5 group-hover:border-primary-600 shadow-sm'">
                        <div class="absolute inset-0 rounded-full bg-primary-600 scale-0 group-hover:scale-100 transition-transform duration-500 opacity-10"></div>
                        <i class="fas {{ $cat['icon'] }} text-3xl md:text-4xl text-primary-600 group-hover:scale-110 transition-transform duration-500 mb-2"></i>
                        <span class="font-black text-[10px] tracking-widest uppercase transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'" x-text="'{{ $cat['count'] }}'"></span>
                    </div>
                    <h4 class="font-black tracking-widest text-xs uppercase transition-colors duration-500 group-hover:text-primary-600" :class="darkMode ? 'text-white' : 'text-black'">{{ $cat['name'] }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. HOW IT WORKS -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-white'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black mb-20 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">HOW</span> BONGOCASTING WORKS</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                <div class="p-10 rounded-3xl border transition-all duration-500 group" :class="darkMode ? 'glass border-white/5 hover:border-primary-600/30' : 'bg-gray-50 border-black/5 hover:border-primary-600/30 shadow-sm'">
                    <div class="w-12 h-12 rounded-xl bg-primary-600 text-white flex items-center justify-center text-xl font-black absolute -top-6 left-1/2 -translate-x-1/2 border-4 group-hover:scale-110 transition-transform" :class="darkMode ? 'border-black' : 'border-white'">01</div>
                    <i class="fas fa-search text-5xl text-primary-600 mb-8 block mt-4"></i>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">SEARCH</h3>
                    <p class="font-medium transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">Find the perfect talent for your event or project using our powerful filters.</p>
                </div>

                <div class="p-10 rounded-3xl border transition-all duration-500 group" :class="darkMode ? 'glass border-white/5 hover:border-primary-600/30' : 'bg-gray-50 border-black/5 hover:border-primary-600/30 shadow-sm'">
                    <div class="w-12 h-12 rounded-xl bg-primary-600 text-white flex items-center justify-center text-xl font-black absolute -top-6 left-1/2 -translate-x-1/2 border-4 group-hover:scale-110 transition-transform" :class="darkMode ? 'border-black' : 'border-white'">02</div>
                    <i class="fas fa-calendar-check text-5xl text-primary-600 mb-8 block mt-4"></i>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">BOOK</h3>
                    <p class="font-medium transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">Book with just one click. Our system handles availability and scheduling.</p>
                </div>

                <div class="p-10 rounded-3xl border transition-all duration-500 group" :class="darkMode ? 'glass border-white/5 hover:border-primary-600/30' : 'bg-gray-50 border-black/5 hover:border-primary-600/30 shadow-sm'">
                    <div class="w-12 h-12 rounded-xl bg-primary-600 text-white flex items-center justify-center text-xl font-black absolute -top-6 left-1/2 -translate-x-1/2 border-4 group-hover:scale-110 transition-transform" :class="darkMode ? 'border-black' : 'border-white'">03</div>
                    <i class="fas fa-credit-card text-5xl text-primary-600 mb-8 block mt-4"></i>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">PAY</h3>
                    <p class="font-medium transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">Secure payment through local providers and automatic digital contracts.</p>
                </div>
            </div>

            <div class="mt-24 p-12 rounded-[3rem] border border-primary-600/20 max-w-2xl mx-auto inline-block relative bg-mesh overflow-hidden" :class="darkMode ? 'glass' : 'bg-white shadow-xl'">
                <h3 class="text-4xl font-black mb-4 text-primary-600 uppercase tracking-tighter">SUCCESS</h3>
                <p class="text-xl font-bold mb-4 uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">Your event is a hit!</p>
                <p class="mb-8 font-medium transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">Rate and review the talent to help the community grow.</p>
                <button class="btn btn-primary px-10 py-4 font-black uppercase tracking-widest">GET STARTED FOR FREE</button>
            </div>
        </div>
    </section>

    <!-- 6. SUCCESS STORIES -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-dark-400' : 'bg-gray-100'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black mb-16 text-center uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">SUCCESS</span> STORIES</h2>
            
            <div class="swiper success-swiper overflow-visible">
                <div class="swiper-wrapper pb-12">
                    @php
                        $testimonials = [
                            ['name' => 'DIAMOND PLATNUMZ', 'role' => 'Musician of the Year 2024', 'content' => 'BongoCasting ilinibutia kupata dancer bora kwa ajili ya music video yangu. Video ina view milioni sasa!', 'img' => '🎤'],
                            ['name' => 'NEEMA DANCER', 'role' => 'Best Dancer 2024', 'content' => 'Nimepata kazi nyingi kupitia mfumo huu. Malipo ni salama na hakuna tapeli!', 'img' => '💃'],
                            ['name' => 'MILLEN MAGESE', 'role' => 'International Model', 'content' => 'This platform is world-class. The way it organizes bookings is phenomenal.', 'img' => '📸']
                        ];
                    @endphp

                    @foreach($testimonials as $t)
                    <div class="swiper-slide">
                        <div class="p-10 rounded-[2.5rem] border relative h-full transition-all duration-500" :class="darkMode ? 'glass border-white/5' : 'bg-white border-black/5 shadow-sm'">
                            <i class="fas fa-quote-left text-6xl text-primary-600/10 absolute top-8 left-8"></i>
                            <p class="text-xl font-bold text-white/80 mb-10 relative z-10 leading-relaxed uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white/80' : 'text-black/80'">
                                "{{ $t['content'] }}"
                            </p>
                            <div class="flex items-center space-x-6">
                                <div class="w-16 h-16 rounded-2xl border border-primary-600/30 flex items-center justify-center text-2xl transition-colors duration-500" :class="darkMode ? 'glass' : 'bg-gray-50'">
                                    <span class="font-black text-primary-600">{{ $t['img'] }}</span>
                                </div>
                                <div>
                                    <h4 class="text-lg font-black uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $t['name'] }}</h4>
                                    <div class="flex text-primary-600 text-[10px] mb-1">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="font-black text-[10px] uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'">{{ $t['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="mt-12 flex items-center justify-center space-x-4">
                    <div class="flex -space-x-3">
                        @foreach(range(1, 6) as $i)
                            <img class="w-10 h-10 rounded-full border-2 transition-all duration-500 cursor-pointer" :class="darkMode ? 'border-dark-400 grayscale hover:grayscale-0' : 'border-white grayscale hover:grayscale-0 shadow-sm'" src="https://api.dicebear.com/7.x/avataaars/svg?seed=ST{{ $i }}" alt="">
                        @endforeach
                    </div>
                    <span class="font-black text-xs uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'">And 500+ more stories</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. TRENDING NOW -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-white'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black mb-16 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">TRENDING</span> NOW</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @php
                    $jobs = [
                        ['title' => 'MUSIC VIDEO SHOOT', 'needs' => '2 dancers, 1 video vixen', 'location' => 'Dar es Salaam', 'budget' => '1,500,000', 'applicants' => 15, 'max' => 20],
                        ['title' => 'FASHION WEEK', 'needs' => '5 models, 2 makeup artists', 'location' => 'Arusha', 'budget' => '3,000,000', 'applicants' => 8, 'max' => 10],
                        ['title' => 'CORPORATE EVENT', 'needs' => '1 MC, 1 live band', 'location' => 'Mwanza', 'budget' => '2,500,000', 'applicants' => 3, 'max' => 5],
                    ];
                @endphp

                @foreach($jobs as $job)
                <div class="p-8 rounded-3xl border group transition-all duration-500 relative overflow-hidden" :class="darkMode ? 'glass border-white/5 hover:border-primary-600/30' : 'bg-gray-50 border-black/5 hover:border-primary-600/30 shadow-sm'">
                    <div class="flex justify-between items-start mb-8">
                        <h3 class="text-2xl font-black uppercase tracking-tighter leading-tight max-w-[70%] transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $job['title'] }}</h3>
                        <span class="px-3 py-1 rounded-lg bg-primary-600/10 border border-primary-600/20 text-primary-600 text-[10px] font-black tracking-widest uppercase">URGENT</span>
                    </div>
                    <p class="font-bold text-xs mb-8 uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">Looking for: <span :class="darkMode ? 'text-white' : 'text-black'">{{ $job['needs'] }}</span></p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-10">
                        <div class="p-4 rounded-2xl border transition-colors duration-500" :class="darkMode ? 'glass border-white/5' : 'bg-white border-black/5 shadow-sm'">
                            <span class="text-[9px] font-black uppercase tracking-widest block mb-1" :class="darkMode ? 'text-white/30' : 'text-black/30'">Location</span>
                            <span class="font-black text-xs uppercase transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $job['location'] }}</span>
                        </div>
                        <div class="p-4 rounded-2xl border transition-colors duration-500" :class="darkMode ? 'glass border-white/5' : 'bg-white border-black/5 shadow-sm'">
                            <span class="text-[9px] font-black uppercase tracking-widest block mb-1" :class="darkMode ? 'text-white/30' : 'text-black/30'">Budget</span>
                            <span class="text-primary-600 font-black text-xs">TZS {{ $job['budget'] }}</span>
                        </div>
                    </div>

                    <div class="mb-10">
                        <div class="flex justify-between text-[10px] font-black mb-3">
                            <span class="text-primary-600 uppercase tracking-widest">{{ $job['applicants'] }} APPLICANTS</span>
                            <span class="uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white/40' : 'text-black/40'">{{ round(($job['applicants']/$job['max'])*100) }}% FULL</span>
                        </div>
                        <div class="w-full h-2 rounded-full overflow-hidden p-[2px] border transition-colors duration-500" :class="darkMode ? 'bg-white/5 border-white/10' : 'bg-black/5 border-black/10'">
                            <div class="h-full bg-gradient-to-r from-primary-700 to-primary-500 rounded-full transition-all duration-1000 relative group-hover:shadow-[0_0_15px_rgba(255,0,0,0.5)]" style="width: {{ ($job['applicants']/$job['max'])*100 }}%"></div>
                        </div>
                    </div>

                    <button class="btn btn-primary w-full py-4 font-black uppercase tracking-widest text-xs shadow-none">APPLY NOW</button>
                </div>
                @endforeach
            </div>
            
            <div class="mt-16 text-center">
                <a href="/jobs" class="text-primary-600 font-black text-sm hover:underline uppercase tracking-[0.3em]">VIEW ALL OPENINGS <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- 8. WHY CHOOSE US -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-dark-400' : 'bg-gray-100'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black mb-20 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">WHY</span> BONGOCASTING?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $features = [
                        ['title' => 'SECURE PAYMENTS', 'desc' => 'M-Pesa, Tigo Pesa, Airtel Money supported.', 'icon' => 'fa-lock'],
                        ['title' => 'FAST BOOKING', 'desc' => 'Book your favorite talent in under 5 minutes.', 'icon' => 'fa-bolt-lightning'],
                        ['title' => 'DIGITAL CONTRACTS', 'desc' => 'Legally binding contracts signed online.', 'icon' => 'fa-file-signature'],
                        ['title' => 'COUNTRY-WIDE', 'desc' => 'Access talents across all 26 regions of TZ.', 'icon' => 'fa-earth-africa'],
                        ['title' => 'VERIFIED PROFILES', 'desc' => 'We manually verify every professional profile.', 'icon' => 'fa-circle-check'],
                        ['title' => 'ACCOMMODATION', 'desc' => 'Book hotels for traveling talents instantly.', 'icon' => 'fa-hotel'],
                    ];
                @endphp

                @foreach($features as $f)
                <div class="p-10 rounded-3xl border transition-all duration-500 text-left group" :class="darkMode ? 'glass border-white/5 hover:bg-white/5' : 'bg-white border-black/5 hover:border-primary-600/30 shadow-sm'">
                    <div class="w-14 h-14 rounded-2xl bg-primary-600/10 border border-primary-600/20 flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-primary-600 transition-all duration-500">
                        <i class="fas {{ $f['icon'] }} text-2xl text-primary-600 group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-black mb-4 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $f['title'] }}</h3>
                    <p class="font-medium leading-relaxed transition-colors duration-500" :class="darkMode ? 'text-white/50' : 'text-black/50'">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 9. TOP ARTISTS -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-white'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black mb-16 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">TOP ARTISTS</span> & PRODUCERS</h2>
            
            <div class="flex flex-wrap justify-center gap-12">
                @php
                    $topArtists = [
                        ['name' => 'DIAMOND', 'jobs' => '15+', 'img' => '🎤'],
                        ['name' => 'RAYVANNY', 'jobs' => '23+', 'img' => '🎬'],
                        ['name' => 'ZUCHU', 'jobs' => '10+', 'img' => '🎵'],
                        ['name' => 'KANZI', 'jobs' => '8+', 'img' => '🎥'],
                        ['name' => 'WCB WASAFI', 'jobs' => '50+', 'img' => '🎪'],
                    ];
                @endphp

                @foreach($topArtists as $artist)
                <div class="group cursor-pointer">
                    <div class="w-32 h-32 rounded-3xl border transition-all duration-500 flex flex-col items-center justify-center mb-6 relative" :class="darkMode ? 'bg-dark-400 border-white/5 group-hover:border-primary-600' : 'bg-gray-100 border-black/5 group-hover:border-primary-600 shadow-sm'">
                        <span class="text-4xl font-black text-primary-600 transition-transform duration-500 group-hover:scale-110">{{ $artist['img'] }}</span>
                        <div class="absolute -bottom-2 bg-primary-600 text-white text-[9px] font-black px-3 py-1 rounded-lg tracking-widest">{{ $artist['jobs'] }} JOBS</div>
                    </div>
                    <h4 class="font-black text-xs uppercase tracking-widest transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $artist['name'] }}</h4>
                </div>
                @endforeach
            </div>

            <button class="mt-20 btn btn-outline border-primary-600 text-primary-600 px-10 py-4 font-black uppercase tracking-widest text-xs hover:bg-primary-600 hover:text-white transition-all">BECOME AN ARTIST</button>
        </div>
    </section>

    <!-- 10. UPCOMING EVENTS -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-dark-400' : 'bg-gray-100'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black mb-16 uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'"><span class="text-primary-600">UPCOMING</span> EVENTS</h2>
            
            <div class="rounded-[2.5rem] border overflow-hidden transition-all duration-500" :class="darkMode ? 'glass border-white/5' : 'bg-white border-black/5 shadow-sm'">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead :class="darkMode ? 'bg-black/40' : 'bg-gray-50'">
                            <tr>
                                <th class="px-8 py-6 font-black uppercase tracking-[0.2em] text-[10px]" :class="darkMode ? 'text-white/40' : 'text-black/40'">Event Name</th>
                                <th class="px-8 py-6 font-black uppercase tracking-[0.2em] text-[10px]" :class="darkMode ? 'text-white/40' : 'text-black/40'">Date</th>
                                <th class="px-8 py-6 font-black uppercase tracking-[0.2em] text-[10px]" :class="darkMode ? 'text-white/40' : 'text-black/40'">Location</th>
                                <th class="px-8 py-6 font-black uppercase tracking-[0.2em] text-[10px] text-center" :class="darkMode ? 'text-white/40' : 'text-black/40'">Needed</th>
                                <th class="px-8 py-6 font-black uppercase tracking-[0.2em] text-[10px] text-right" :class="darkMode ? 'text-white/40' : 'text-black/40'">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y font-medium transition-colors duration-500" :class="darkMode ? 'divide-white/5' : 'divide-black/5'">
                            @php
                                $events = [
                                    ['name' => 'Sauti za Busara', 'date' => 'Feb 10-12', 'loc' => 'Zanzibar', 'need' => '25+', 'color' => 'from-primary-600 to-primary-400'],
                                    ['name' => 'EA Fashion Week', 'date' => 'Mar 5', 'loc' => 'Arusha', 'need' => '15+', 'color' => 'from-blue-600 to-blue-400'],
                                    ['name' => 'Bongo Flava Awards', 'date' => 'Apr 20', 'loc' => 'Dar es Salaam', 'need' => '30+', 'color' => 'from-purple-600 to-purple-400'],
                                ];
                            @endphp

                            @foreach($events as $event)
                            <tr class="transition-colors group hover:bg-primary-600/[0.02]">
                                <td class="px-8 py-8">
                                    <div class="text-xl font-black uppercase tracking-tighter transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $event['name'] }}</div>
                                    <div class="w-full max-w-[200px] h-1 bg-white/5 mt-3 overflow-hidden rounded-full">
                                        <div class="h-full bg-gradient-to-r {{ $event['color'] }} group-hover:w-full transition-all duration-1000 w-1/3"></div>
                                    </div>
                                </td>
                                <td class="px-8 py-8 font-black text-sm transition-colors duration-500" :class="darkMode ? 'text-white/60' : 'text-black/60'">{{ $event['date'] }}</td>
                                <td class="px-8 py-8 font-black uppercase tracking-tighter text-sm transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $event['loc'] }}</td>
                                <td class="px-8 py-8 text-center"><span class="px-4 py-2 rounded-xl bg-primary-600/10 font-black text-primary-600 border border-primary-600/20 text-xs">{{ $event['need'] }}</span></td>
                                <td class="px-8 py-8 text-right"><button class="btn btn-primary text-[10px] py-3 px-8 rounded-full font-black tracking-widest shadow-none">DETAILS</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PARTNERS & SPONSORS -->
    <section class="py-24 transition-colors duration-500" :class="darkMode ? 'bg-black' : 'bg-white'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-[10px] font-black mb-16 uppercase tracking-[0.5em] transition-colors duration-500" :class="darkMode ? 'text-white/20' : 'text-black/20'">TRUSTED BY INDUSTRY LEADERS</h2>
            
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-30 hover:opacity-100 transition-all duration-1000">
                @php $partners = ['VODACOM', 'TIGO', 'AZAM', 'CRDB', 'NMB', 'BONGO MOVIE', 'WCB', 'KANZI', 'CLOUDS', 'WASHA']; @endphp
                @foreach($partners as $p)
                    <span class="text-2xl md:text-3xl font-black text-white tracking-tighter hover:text-primary-600 transition-colors cursor-default transition-colors duration-500" :class="darkMode ? 'text-white' : 'text-black'">{{ $p }}</span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 12. CALL TO ACTION -->
    <section class="py-24 relative overflow-hidden bg-mesh">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/90 via-primary-800/90 to-black z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight uppercase tracking-tighter">
                        READY TO JOIN THE <span class="text-black font-black">REVOLUTION?</span>
                    </h2>
                    <p class="text-xl font-bold mb-12 opacity-90 uppercase tracking-widest text-sm text-white">Join 10,000+ elite users already on BongoCasting</p>
                    <div class="flex items-center space-x-4 text-white">
                        <div class="flex text-black space-x-1 bg-white/20 p-2 rounded-lg">
                            <i class="fas fa-star text-xs"></i><i class="fas fa-star text-xs"></i><i class="fas fa-star text-xs"></i><i class="fas fa-star text-xs"></i><i class="fas fa-star text-xs"></i>
                        </div>
                        <span class="font-black text-sm uppercase tracking-tighter opacity-60 text-white">"Best platform for entertainment in TZ"</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-black/40 backdrop-blur-xl p-10 rounded-[3rem] border border-white/10 text-center hover:translate-y-[-10px] transition-all cursor-pointer group">
                        <h3 class="text-2xl font-black text-white mb-2 uppercase tracking-tighter">I NEED TALENT</h3>
                        <p class="text-white/40 mb-8 font-bold text-[10px] tracking-widest uppercase">Post a job now</p>
                        <div class="text-4xl font-black text-white mb-10 tracking-tighter uppercase">FREE!</div>
                        <button class="btn bg-white text-primary-600 w-full group-hover:bg-primary-600 group-hover:text-white transition-colors py-5 font-black uppercase text-xs tracking-[0.2em]">POST A JOB</button>
                    </div>
                    <div class="bg-white p-10 rounded-[3rem] text-center hover:translate-y-[-10px] transition-all cursor-pointer group">
                        <h3 class="text-2xl font-black text-black mb-2 uppercase tracking-tighter">I AM A TALENT</h3>
                        <p class="text-black/40 mb-8 font-bold text-[10px] tracking-widest uppercase">Get hired now</p>
                        <div class="text-4xl font-black text-primary-600 mb-10 tracking-tighter uppercase">FREE!</div>
                        <button class="btn btn-primary w-full py-5 font-black uppercase text-xs tracking-[0.2em]">GET HIRED</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
