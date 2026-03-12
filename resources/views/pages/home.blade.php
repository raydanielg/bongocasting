@extends('layouts.frontend')

@section('title', 'Karibu BongoCasting')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content relative" x-data="{}" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1.5, ease: 'power4.out' })">
            <span class="badge-primary mb-6 inline-block">{{ __('Tanzania\'s #1 Casting Platform') }}</span>
            <h1 class="mb-8 font-heading">{{ __('Gundua Vipaji Bora') }} <br> <span class="text-primary-600">{{ __('vya Kitanzania') }}</span></h1>
            <p class="text-xl opacity-80 mb-12 max-w-2xl mx-auto">
                {{ __('Tunakuunganisha na waigizaji, wanamitindo, na wasanii bora') }} kwa ajili ya miradi yako ya filamu, matangazo na burudani.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-6">
                <a href="/talents" class="btn btn-primary text-lg">{{ __('Tafuta Vipaji') }}</a>
                <a href="/register" class="btn btn-outline text-lg">{{ __('Jiunge Kama Talent') }}</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 border-y border-white/10 glass-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="stat-item text-center">
                    <span class="stat-number">5K+</span>
                    <span class="stat-label">{{ __('Vipaji') }}</span>
                </div>
                <div class="stat-item text-center">
                    <span class="stat-number">200+</span>
                    <span class="stat-label">{{ __('Wasanii') }}</span>
                </div>
                <div class="stat-item text-center">
                    <span class="stat-number">1.2K+</span>
                    <span class="stat-label">Bookings</span>
                </div>
                <div class="stat-item text-center">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">{{ __('Makampuni') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Talents -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="mb-4">{{ __('Vipaji Vinavyovuma') }}</h2>
                    <p class="text-white/60">{{ __('Baadhi ya vipaji bora vilivyopata kura nyingi wiki hii.') }}</p>
                </div>
                <a href="/talents" class="text-primary-600 font-semibold hover:underline flex items-center space-x-2">
                    <span>{{ __('Ona Vyote') }}</span>
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach(range(1, 4) as $index)
                <div class="card card-hover group cursor-pointer p-4">
                    <div class="relative aspect-square rounded-xl overflow-hidden mb-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Talent{{ $index }}" alt="Talent" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <div class="w-full">
                                <button class="btn btn-primary w-full py-2 text-xs font-bold">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg mb-1 group-hover:text-primary-600 transition">Model {{ $index }}</h3>
                    <p class="text-white/40 text-xs uppercase tracking-widest mb-3">Fashion & Commercial</p>
                    <div class="flex items-center justify-between text-xs">
                        <span class="flex items-center text-yellow-400">
                            <i class="fas fa-star mr-1"></i> 4.9
                        </span>
                        <span class="text-white/60">Dar es Salaam</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-900 opacity-20"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center glass py-16 rounded-3xl neon-border">
            <h2 class="mb-6 text-white italic">Unatafuta Kipaji Maalum Kwa Ajili ya Mradi Wako?</h2>
            <p class="text-xl text-white/80 mb-10">
                Wasiliana nasi leo na timu yetu ya wataalam itakusaidia kupata kile unachokitafuta.
            </p>
            <a href="/contact" class="btn-primary px-10 py-4 text-xl shadow-neon-strong">Wasiliana Nasi</a>
        </div>
    </section>
@endsection
