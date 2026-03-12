@extends('layouts.frontend')

@section('title', 'Tafuta Wasanii - BongoCasting')

@section('content')
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-8">
                <div>
                    <h1 class="mb-4 text-gradient">Wasanii Wetu</h1>
                    <p class="text-white/60 max-w-xl">Wasanii wenye uzoefu katika muziki, uzalishaji wa maudhui, na sanaa za maonyesho.</p>
                </div>
                <div class="flex space-x-4">
                    <button class="btn-outline px-6 py-2">Wote</button>
                    <button class="btn-outline px-6 py-2">Muziki</button>
                    <button class="btn-outline px-6 py-2">Content Creators</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(range(1, 6) as $index)
                <div class="glass-card overflow-hidden group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://api.dicebear.com/7.x/shapes/svg?seed=Artist{{ $index }}" alt="Artist" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold mb-1">Artist Group {{ $index }}</h3>
                                <p class="text-primary-600 font-semibold tracking-widest text-xs uppercase">Bongo Flava & Afrobeat</p>
                            </div>
                            <div class="badge-gold">PRO</div>
                        </div>
                        <p class="text-white/60 mb-8 line-clamp-2 italic italic">
                            "Tunatoa burudani ya kiwango cha juu kwa ajili ya matamasha na sherehe mbalimbali."
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3 text-white/40">
                                <i class="fab fa-instagram hover:text-white cursor-pointer"></i>
                                <i class="fab fa-youtube hover:text-white cursor-pointer"></i>
                                <i class="fab fa-spotify hover:text-white cursor-pointer"></i>
                            </div>
                            <button class="btn-primary py-2 px-6 text-sm">Angalia Kazi</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
