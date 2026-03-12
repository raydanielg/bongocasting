@extends('layouts.frontend')

@section('title', 'Tafuta Talents - BongoCasting')

@section('content')
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h1 class="mb-4">Tafuta Talents</h1>
                <p class="text-white/60">Gundua na uunganishe na vipaji bora vya mitindo na uigizaji nchini Tanzania.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                <!-- Filters -->
                <div class="lg:col-span-1 space-y-8">
                    <div class="glass p-6 rounded-2xl">
                        <h3 class="text-xl mb-6">Chuja Matokeo</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="form-label text-sm uppercase tracking-wider">Kategoria</label>
                                <select class="form-input">
                                    <option>Zote</option>
                                    <option>Models</option>
                                    <option>Actors</option>
                                    <option>Dancers</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label text-sm uppercase tracking-wider">Jinsia</label>
                                <div class="flex space-x-4">
                                    <button class="badge-outline px-4 py-2 hover:bg-primary-600 hover:text-white transition">Wote</button>
                                    <button class="badge-outline px-4 py-2 hover:bg-primary-600 hover:text-white transition">Kiume</button>
                                    <button class="badge-outline px-4 py-2 hover:bg-primary-600 hover:text-white transition">Kike</button>
                                </div>
                            </div>

                            <div>
                                <label class="form-label text-sm uppercase tracking-wider">Umri</label>
                                <input type="range" class="w-full accent-primary-600">
                                <div class="flex justify-between text-xs text-white/40 mt-2">
                                    <span>18</span>
                                    <span>60+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Talent Grid -->
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach(range(1, 8) as $index)
                        <div class="card card-hover group cursor-pointer p-4">
                            <div class="relative aspect-square rounded-xl overflow-hidden mb-4">
                                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Talent{{ $index }}" alt="Talent" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                    <div class="w-full space-y-2">
                                        <a href="/talents/{{ $index }}" class="btn btn-primary w-full py-2 text-xs font-bold block text-center">Angalia Profile</a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-lg mb-1 group-hover:text-primary-600 transition">Talent Name {{ $index }}</h3>
                            <p class="text-white/40 text-xs uppercase tracking-widest mb-3">Modeling & Commercial</p>
                            <div class="flex items-center justify-between text-xs">
                                <span class="flex items-center text-yellow-400">
                                    <i class="fas fa-star mr-1"></i> 4.8
                                </span>
                                <span class="text-white/60">Dar es Salaam</span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-16 flex justify-center">
                        <div class="pagination">
                            <button class="pagination-item"><i class="fas fa-chevron-left"></i></button>
                            <button class="pagination-item pagination-item-active">1</button>
                            <button class="pagination-item">2</button>
                            <button class="pagination-item">3</button>
                            <button class="pagination-item"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
