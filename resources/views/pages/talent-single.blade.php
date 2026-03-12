@extends('layouts.frontend')

@section('title', 'Wasifu wa Talent - BongoCasting')

@section('content')
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Profile Image & Quick Info -->
                <div class="lg:col-span-1 space-y-8">
                    <div class="glass-card p-4 rounded-3xl neon-border overflow-hidden">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=TalentDetail" alt="Talent" class="w-full aspect-[3/4] object-cover rounded-2xl mb-6">
                        <div class="p-4 space-y-4">
                            <h2 class="text-3xl font-bold">Talent Name</h2>
                            <p class="text-primary-600 font-semibold tracking-widest text-sm uppercase">Fashion Model & Actor</p>
                            <div class="flex items-center space-x-2 text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-white/60 ml-2">(4.8/5)</span>
                            </div>
                        </div>
                    </div>

                    <div class="card space-y-6">
                        <h3 class="text-xl font-bold border-b border-white/10 pb-4">Taarifa Binafsi</h3>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="text-white/40 uppercase">Umri</div>
                            <div class="text-white font-semibold">24</div>
                            <div class="text-white/40 uppercase">Urefu</div>
                            <div class="text-white font-semibold">175 cm</div>
                            <div class="text-white/40 uppercase">Mji</div>
                            <div class="text-white font-semibold">Dar es Salaam</div>
                            <div class="text-white/40 uppercase">Lugha</div>
                            <div class="text-white font-semibold">Kiswahili, English</div>
                        </div>
                        <button class="btn-primary w-full py-4 shadow-neon">Book Now</button>
                    </div>
                </div>

                <!-- Portfolio & Details -->
                <div class="lg:col-span-2 space-y-12">
                    <div class="card p-8">
                        <h3 class="text-2xl font-bold mb-6">Kuhusu Mimi</h3>
                        <p class="text-white/60 leading-relaxed text-lg">
                            Nina uzoefu wa miaka mitatu katika tasnia ya urembo na uigizaji. Nimeshiriki katika kampeni mbalimbali za matangazo ya bidhaa na filamu fupi. Mimi ni mbunifu, mwaminifu na nina uwezo wa kufanya kazi chini ya shinikizo.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-8">Portfolio</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" x-data="{}">
                            @foreach(range(1, 6) as $index)
                            <div class="aspect-square rounded-2xl overflow-hidden glass hover:scale-105 transition duration-500 cursor-zoom-in" 
                                 data-fancybox="gallery" 
                                 data-src="https://api.dicebear.com/7.x/shapes/svg?seed=Work{{ $index }}">
                                <img src="https://api.dicebear.com/7.x/shapes/svg?seed=Work{{ $index }}" class="w-full h-full object-cover">
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card p-8">
                        <h3 class="text-2xl font-bold mb-6">Uzoefu wa Kazi</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <h4 class="text-xl font-bold">Main Model - Vodacom Campaign</h4>
                                <p class="text-primary-600 text-sm mb-2">Jan 2024 - Mar 2024</p>
                                <p class="text-white/60">Alikuwa mhusika mkuu kwenye kampeni ya kidijitali ya Vodacom.</p>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <h4 class="text-xl font-bold">Extra Actor - Bongo Movie</h4>
                                <p class="text-primary-600 text-sm mb-2">Aug 2023</p>
                                <p class="text-white/60">Alishiriki kama mwigizaji wa ziada kwenye tamthilia ya Siri ya Mtungi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
