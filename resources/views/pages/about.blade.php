@extends('layouts.frontend')

@section('title', 'Kuhusu Sisi - BongoCasting')

@section('content')
    <!-- Hero Section -->
    <section class="pt-40 pb-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-primary-600/10 blur-[120px] -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="mb-8">Kuleta Mapinduzi Kwenye <br> <span class="text-white">Sanaa ya Casting</span></h1>
            <p class="text-xl text-white/60 max-w-3xl mx-auto leading-relaxed">
                BongoCasting ni daraja la kidijitali linalowaunganisha wenye vipaji na watafuta vipaji nchini Tanzania. Tumejitolea kuinua viwango vya tasnia ya filamu na urembo.
            </p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="card p-10">
                    <div class="btn-icon mb-6 text-primary-600"><i class="fas fa-bullseye text-3xl"></i></div>
                    <h3 class="text-3xl mb-6">Dira Yetu</h3>
                    <p class="text-white/60 text-lg">Kuwa jukwaa namba moja la casting barani Afrika, tukitoa fursa sawa kwa vipaji vyote bila kujali mahali wanapotoka.</p>
                </div>
                <div class="card p-10">
                    <div class="btn-icon mb-6 text-primary-600"><i class="fas fa-rocket text-3xl"></i></div>
                    <h3 class="text-3xl mb-6">Wito Wetu</h3>
                    <p class="text-white/60 text-lg">Kutumia teknolojia ya kisasa kurahisisha mchakato wa kutafuta, kuajiri, na kusimamia vipaji kwa uwazi na uadilifu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 glass-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="mb-4">Kwa Nini Utuchague Sisi?</h2>
                <p class="text-white/60">Tunaweka ubora na taaluma mbele katika kila kitu tunachofanya.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="space-y-4">
                    <div class="text-5xl text-primary-600 mb-4"><i class="fas fa-user-check"></i></div>
                    <h4 class="text-xl font-bold">Vipaji Vilivyothibitishwa</h4>
                    <p class="text-white/40">Kila talent kwenye platform yetu anapitia mchakato wa uhakiki ili kuhakikisha ubora.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-5xl text-primary-600 mb-4"><i class="fas fa-shield-alt"></i></div>
                    <h4 class="text-xl font-bold">Usalama wa Malipo</h4>
                    <p class="text-white/40">Mifumo yetu inahakikisha malipo yako ni salama na yanafika kwa wakati.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-5xl text-primary-600 mb-4"><i class="fas fa-headset"></i></div>
                    <h4 class="text-xl font-bold">Msaada wa 24/7</h4>
                    <p class="text-white/40">Timu yetu iko tayari kukusaidia wakati wowote unapopata changamoto.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
