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
        <div class="flex flex-col justify-center py-14 md:px-0 items-center">
            <h1 class="text-3xl font-title pb-10">Galeri SMK Tamsis YK</h1>
            <div class="bg-[#107A9B2E] py-6 px-8 rounded-lg drop-shadow-default">

                <!-- Komponen Galeri -->
                <div x-data="galeri()" x-init="init()" data-berita='@json($berita)'
                    class="space-y-8">

                    <!-- Galeri -->
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-14">
                        <template x-for="item in paginatedBerita" :key="item.gambar">
                            <div x-transition:enter="transition-opacity duration-500" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                @click="$dispatch('open-modal', { image: item.gambar })"
                                class="cursor-pointer hover:scale-105 transition-transform duration-300">
                                <img :src="'/images/galeri/' + item.gambar" :alt="item.gambar"
                                    class="w-full h-24 md:w-full md:h-48 object-cover rounded-xl">
                            </div>
                        </template>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center space-x-2">
                        <template x-for="page in totalPages" :key="page">
                            <button @click="currentPage = page"
                                :class="currentPage === page ? 'bg-sign text-white' : 'bg-white text-gray-800 hover:bg-gray-200'"
                                class="px-2 py-1 md:px-3 md:py-1 text-md border border-gray-300 rounded-xl transition">
                                <span x-text="page"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Terpisah (masih dalam halaman yang sama) -->
    <div x-data="{ showModal: false, activeImage: '' }" x-on:open-modal.window="activeImage = $event.detail.image; showModal = true"
        x-show="showModal" @keydown.escape="showModal = false" @click.away="showModal = false"
        class="fixed inset-0 z-50 flex items-center justify-center px-10 md:p-4" style="display: none;">


        <div class="absolute inset-0 backdrop-blur-lg"></div>
        <div class="relative max-w-4xl w-full" @click.stop>
            <!-- Tombol close -->
            <button @click="showModal = false" class="absolute -top-10 right-0 text-white hover:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Gambar zoom -->
            <img :src="'/images/galeri/' + activeImage" alt="Zoomed Image"
                class="w-full h-full object-cover rounded-lg shadow-xl">
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
