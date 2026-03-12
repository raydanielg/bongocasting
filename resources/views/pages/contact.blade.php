@extends('layouts.frontend')

@section('title', 'Wasiliana Nasi - BongoCasting')

@section('content')
    <section class="pt-40 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <!-- Info -->
                <div class="space-y-12">
                    <div>
                        <h1 class="mb-6">Wasiliana Nasi</h1>
                        <p class="text-xl text-white/60 leading-relaxed">
                            Una maswali, maoni au unahitaji msaada? Timu yetu iko tayari kukusaidia. Jaza fomu au tumia njia zingine za mawasiliano.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="btn-icon text-primary-600"><i class="fas fa-map-marker-alt text-2xl"></i></div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Ofisi Zetu</h4>
                                <p class="text-white/40 text-lg">Posta Mpya, Jengo la NHC, Ghorofa ya 4<br>Dar es Salaam, Tanzania</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="btn-icon text-primary-600"><i class="fas fa-phone text-2xl"></i></div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Tupigie</h4>
                                <p class="text-white/40 text-lg">+255 700 000 000<br>+255 600 000 000</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="btn-icon text-primary-600"><i class="fas fa-envelope text-2xl"></i></div>
                            <div>
                                <h4 class="text-xl font-bold mb-2">Barua Pepe</h4>
                                <p class="text-white/40 text-lg">info@bongocasting.com<br>support@bongocasting.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="glass p-10 rounded-3xl neon-border">
                    <form action="#" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="form-label">Jina Lako Kamili</label>
                                <input type="text" class="form-input" placeholder="Mfano: Juma Kiboko">
                            </div>
                            <div>
                                <label class="form-label">Barua Pepe</label>
                                <input type="email" class="form-input" placeholder="mfano@gmail.com">
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Mada</label>
                            <input type="text" class="form-input" placeholder="Unahitaji msaada wa nini?">
                        </div>
                        <div>
                            <label class="form-label">Ujumbe Wako</label>
                            <textarea rows="6" class="form-input" placeholder="Andika ujumbe wako hapa..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full py-4 text-lg">Tuma Ujumbe Sasa</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
