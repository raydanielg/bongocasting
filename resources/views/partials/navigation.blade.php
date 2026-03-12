<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
     :class="scrolled ? 'glass py-3 shadow-lg' : 'bg-transparent py-5'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-2xl font-heading font-extrabold tracking-tighter italic">
                        <span class="text-primary-600">BONGO</span>CASTING
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link @if(request()->routeIs('home')) nav-link-active @endif">{{ __('Nyumbani') }}</a>
                <a href="/talents" class="nav-link @if(request()->routeIs('talents.*')) nav-link-active @endif">{{ __('Talents') }}</a>
                <a href="/artists" class="nav-link @if(request()->routeIs('artists.*')) nav-link-active @endif">{{ __('Artists') }}</a>
                
                <!-- Language Switcher -->
                <div class="flex items-center space-x-2 bg-white/5 rounded-lg p-1 border border-white/10">
                    <a href="{{ route('lang.switch', 'en') }}" 
                       class="px-2 py-1 text-xs rounded-md transition-all {{ app()->getLocale() == 'en' ? 'bg-primary-600 text-white' : 'text-white/60 hover:text-white' }}">
                        EN
                    </a>
                    <a href="{{ route('lang.switch', 'sw') }}"
                       class="px-2 py-1 text-xs rounded-md transition-all {{ app()->getLocale() == 'sw' ? 'bg-primary-600 text-white' : 'text-white/60 hover:text-white' }}">
                        SW
                    </a>
                </div>

                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode" class="p-2 rounded-lg hover:bg-primary-600/10 transition-colors">
                    <i class="fas" :class="darkMode ? 'fa-sun text-yellow-400' : 'fa-moon text-gray-600'"></i>
                </button>

                @auth
                    <a href="/admin" class="btn btn-primary py-2 px-5 text-sm">{{ __('Dashboard') }}</a>
                @else
                    <a href="/login" class="nav-link">{{ __('Ingia') }}</a>
                    <a href="/register" class="btn btn-primary py-2 px-5 text-sm">{{ __('Jisajili') }}</a>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-white hover:text-primary-600 focus:outline-none transition">
                    <i class="fas fa-bars text-2xl" x-show="!open"></i>
                    <i class="fas fa-times text-2xl" x-show="open" style="display: none;"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden glass-dark mt-2 border-t border-white/10"
         style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="/" class="block py-3 nav-link">Nyumbani</a>
            <a href="/talents" class="block py-3 nav-link">Talents</a>
            <a href="/artists" class="block py-3 nav-link">Artists</a>
            <a href="/about" class="block py-3 nav-link">Kuhusu</a>
            <a href="/contact" class="block py-3 nav-link">Mawasiliano</a>
            <div class="pt-4 flex flex-col space-y-3">
                @auth
                    <a href="/admin" class="btn-primary w-full">Dashboard</a>
                @else
                    <a href="/login" class="btn-outline w-full">Ingia</a>
                    <a href="/register" class="btn-primary w-full">Jisajili</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
