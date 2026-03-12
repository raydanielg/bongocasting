<!-- Top Header -->
<div class="bg-black/90 text-white py-2 border-b border-white/5 relative z-[60]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-[10px] font-black italic tracking-[0.2em] uppercase">
        <div class="flex items-center space-x-6">
            <span class="hidden md:inline">Tanzania's Premier Talent Platform</span>
            <div class="flex items-center space-x-4">
                <a href="tel:+255123456789" class="hover:text-primary-600 transition-colors">Call: +255 123 456 789</a>
            </div>
        </div>
        <div class="flex items-center space-x-6">
            <!-- Language Switcher -->
            <div class="flex items-center bg-white/5 rounded-full px-2 py-1 border border-white/10">
                <a href="{{ route('lang.switch', 'en') }}" 
                   class="px-3 py-0.5 rounded-full transition-all {{ app()->getLocale() == 'en' ? 'bg-primary-600 text-white' : 'text-white/40 hover:text-white' }}">
                    EN
                </a>
                <a href="{{ route('lang.switch', 'sw') }}"
                   class="px-3 py-0.5 rounded-full transition-all {{ app()->getLocale() == 'sw' ? 'bg-primary-600 text-white' : 'text-white/40 hover:text-white' }}">
                    SW
                </a>
            </div>

            <!-- Dark Mode Toggle -->
            <button @click="darkMode = !darkMode" class="w-8 h-8 rounded-full glass flex items-center justify-center hover:border-primary-600 transition-all">
                <i class="fas" :class="darkMode ? 'fa-sun text-yellow-400' : 'fa-moon text-white/40'"></i>
            </button>
        </div>
    </div>
</div>

<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
     :class="scrolled ? 'glass py-3 shadow-lg' : 'bg-transparent py-5'"
     class="fixed top-10 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-2xl font-heading font-extrabold tracking-tighter italic">
                        <span class="text-primary-600">BONGO</span><span :class="darkMode ? 'text-white' : 'text-black'">CASTING</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="nav-link @if(request()->routeIs('home')) nav-link-active @endif" :class="darkMode ? 'text-white/80 hover:text-white' : 'text-black/80 hover:text-black'">{{ __('Nyumbani') }}</a>
                <a href="/talents" class="nav-link @if(request()->routeIs('talents.*')) nav-link-active @endif" :class="darkMode ? 'text-white/80 hover:text-white' : 'text-black/80 hover:text-black'">{{ __('Talents') }}</a>
                <a href="/artists" class="nav-link @if(request()->routeIs('artists.*')) nav-link-active @endif" :class="darkMode ? 'text-white/80 hover:text-white' : 'text-black/80 hover:text-black'">{{ __('Artists') }}</a>
                
                @auth
                    <a href="/admin" class="btn btn-primary py-2 px-5 text-sm">{{ __('Dashboard') }}</a>
                @else
                    <a href="/login" class="nav-link" :class="darkMode ? 'text-white/80 hover:text-white' : 'text-black/80 hover:text-black'">{{ __('Ingia') }}</a>
                    <a href="/register" class="btn btn-primary py-2 px-5 text-sm">{{ __('Jisajili') }}</a>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="focus:outline-none transition" :class="darkMode ? 'text-white hover:text-primary-600' : 'text-black hover:text-primary-600'">
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
         class="md:hidden mt-2 border-t border-white/10"
         :class="darkMode ? 'glass-dark' : 'bg-white shadow-xl'"
         style="display: none;">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="/" class="block py-3 nav-link" :class="darkMode ? 'text-white' : 'text-black'">{{ __('Nyumbani') }}</a>
            <a href="/talents" class="block py-3 nav-link" :class="darkMode ? 'text-white' : 'text-black'">{{ __('Talents') }}</a>
            <a href="/artists" class="block py-3 nav-link" :class="darkMode ? 'text-white' : 'text-black'">{{ __('Artists') }}</a>
            <div class="pt-4 flex flex-col space-y-3">
                @auth
                    <a href="/admin" class="btn btn-primary w-full">{{ __('Dashboard') }}</a>
                @else
                    <a href="/login" class="btn btn-outline w-full" :class="!darkMode && 'border-black text-black'">{{ __('Ingia') }}</a>
                    <a href="/register" class="btn btn-primary w-full">{{ __('Jisajili') }}</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
