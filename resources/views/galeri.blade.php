@php
    $berita = [
        ['gambar' => 'galeri1.jpeg'],
        ['gambar' => 'galeri2.jpeg'],
        ['gambar' => 'galeri3.jpeg'],
        ['gambar' => 'galeri4.jpeg'],
        ['gambar' => 'galeri5.jpeg'],
        ['gambar' => 'galeri6.jpeg'],
        ['gambar' => 'galeri7.jpeg'],
        ['gambar' => 'galeri8.jpeg'],
        ['gambar' => 'galeri9.jpeg'],
        ['gambar' => 'galeri10.jpeg'],
        ['gambar' => 'galeri11.jpeg'],
        ['gambar' => 'galeri12.jpeg'],
        ['gambar' => 'galeri12.jpeg'],
        ['gambar' => 'galeri11.jpeg'],
        ['gambar' => 'galeri10.jpeg'],
        ['gambar' => 'galeri9.jpeg'],
        ['gambar' => 'galeri8.jpeg'],
        ['gambar' => 'galeri7.jpeg'],
        ['gambar' => 'galeri6.jpeg'],
        ['gambar' => 'galeri5.jpeg'],
        ['gambar' => 'galeri4.jpeg'],
        ['gambar' => 'galeri3.jpeg'],
        ['gambar' => 'galeri2.jpeg'],
        ['gambar' => 'galeri1.jpeg'],
        ['gambar' => 'galeri12.jpeg'],
        ['gambar' => 'galeri11.jpeg'],
        ['gambar' => 'galeri10.jpeg'],
        ['gambar' => 'galeri9.jpeg'],
        ['gambar' => 'galeri8.jpeg'],
        ['gambar' => 'galeri7.jpeg'],
        ['gambar' => 'galeri6.jpeg'],
        ['gambar' => 'galeri1.jpeg'],
        ['gambar' => 'galeri2.jpeg'],
        ['gambar' => 'galeri3.jpeg'],
        ['gambar' => 'galeri4.jpeg'],
        ['gambar' => 'galeri5.jpeg'],

        // dst...
    ];
@endphp

@extends('layouts.main')

@section('title', 'Galeri Sekolah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="max-w-8xl mx-auto">
        <div class="flex flex-col justify-center py-14 items-center">
            <h1 class="text-3xl font-title pb-10">Galeri SMK Tamsis YK</h1>
            <div class="bg-[#107A9B2E] py-6 px-8 rounded-lg drop-shadow-default">

                <div x-data="galeri()" x-init="init()" data-berita='@json($berita)'
                    class="space-y-8">

                    <!-- Galeri -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-14">
                        <template x-for="item in paginatedBerita" :key="item.gambar">
                            <div x-transition:enter="transition-opacity duration-500" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <img :src="'/images/galeri/' + item.gambar" :alt="item.gambar"
                                    class="w-full h-48 object-cover rounded-xl">
                            </div>
                        </template>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center space-x-2">
                        <template x-for="page in totalPages" :key="page">
                            <button @click="currentPage = page"
                                :class="currentPage === page ? 'bg-sign text-white' : 'bg-white text-gray-800 hover:bg-gray-200'"
                                class="px-3 py-1 border border-gray-300 rounded-xl transition">
                                <span x-text="page"></span>
                            </button>
                        </template>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Alpine Component -->
    <script>
        function galeri() {
            return {
                berita: [],
                currentPage: 1,
                itemsPerPage: 12,
                get paginatedBerita() {
                    let start = (this.currentPage - 1) * this.itemsPerPage;
                    let end = start + this.itemsPerPage;
                    return this.berita.slice(start, end);
                },
                get totalPages() {
                    return Math.ceil(this.berita.length / this.itemsPerPage);
                },
                init() {
                    this.berita = JSON.parse(this.$el.getAttribute('data-berita'));
                }
            }
        }
    </script>

@endsection
