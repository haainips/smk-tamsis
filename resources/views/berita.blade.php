@php
    $berita = [
        [
            'judul' => 'Pesantren Ramadan 1446 Hijriah Kelas X SMK Tamansiswa Jetis Yogyakarta',
            'gambar' => 'berita1.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-1',
        ],
        [
            'judul' => 'Alumni Mengajar: Wadah Berbagi Inspirasi Sekaligus Mempererat Silaturahmi',
            'gambar' => 'berita2.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-2',
        ],
        [
            'judul' => 'Pramuka SMK Tamansiswa Jetis Jejakkan Kaki di PDT ke-53',
            'gambar' => 'berita3.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'KEBERHASILAN SMK TAMANSISWA JETIS YOGYAKARTA DALAM MENGGELAR...',
            'gambar' => 'berita4.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Asesmen Bakat Minat Kelas XII SMK Tamansiswa Jetis Yogyakarta',
            'gambar' => 'berita5.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis Mengadakan Simulasi Bencana Gempa...',
            'gambar' => 'berita6.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Workshop bersama Komite Sekolah dalam Upaya Pengembangan...',
            'gambar' => 'berita7.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis meriahkan HUT Kota Yogyakarta ke-261...',
            'gambar' => 'berita8.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Workshop Pemanfaatan Sarana dan Prasarana Pendukung Penyelenggaraan...',
            'gambar' => 'berita9.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Workshop Pemanfaatan Sarana dan Prasarana Pendukung Penyelenggaraan...',
            'gambar' => 'berita9.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis meriahkan HUT Kota Yogyakarta ke-261...',
            'gambar' => 'berita8.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis meriahkan HUT Kota Yogyakarta ke-261...',
            'gambar' => 'berita7.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Workshop bersama Komite Sekolah dalam Upaya Pengembangan...',
            'gambar' => 'berita6.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis Mengadakan Simulasi Bencana Gempa...',
            'gambar' => 'berita5.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'Pesantren Ramadan 1446 Hijriah Kelas X SMK Tamansiswa Jetis Yogyakarta',
            'gambar' => 'berita4.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-1',
        ],
        [
            'judul' => 'Asesmen Bakat Minat Kelas XII SMK Tamansiswa Jetis Yogyakarta',
            'gambar' => 'berita3.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'SMK Tamansiswa Jetis Mengadakan Simulasi Bencana Gempa...',
            'gambar' => 'berita2.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        [
            'judul' => 'KEBERHASILAN SMK TAMANSISWA JETIS YOGYAKARTA DALAM MENGGELAR...',
            'gambar' => 'berita1.png',
            'tanggal' => 'Kamis, 14 Januari 2025',
            'link' => '/berita-3',
        ],
        // dst...
    ];
@endphp

@extends('layouts.main')

@section('title', 'Berita Sekolah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="flex flex-col justify-center py-14 px-10 md:px-20 lg:px-0 items-center">
        <h1 class="text-2xl md:text-3xl font-title pb-10">BERITA SMK TAMSIS JETIS YK</h1>
        <div class="py-6 rounded-lg drop-shadow-default">

            <div x-data="galeri()" x-init="init()" data-berita='@json($berita)'
                class="space-y-8 px-10 md:px-0">

                <!-- Galeri -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-10 space-y-4 w-full">
                    <template x-for="item in paginatedBerita" :key="item.gambar">
                        <div x-transition:enter="transition-opacity duration-500" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                            <!-- Gambar -->
                            <img :src="'/images/berita/' + item.gambar" :alt="item.judul"
                                class="w-full h-48 object-cover rounded-xl pb-4">

                            <!-- Judul Berita -->
                            <h2 class="font-subtitle text-md md:text-lg font-semibold line-clamp-3" x-text="item.judul">
                            </h2>

                            <!-- Tanggal -->
                            <p class="font-subtitle text-sm text-gray-500 pb-4" x-text="item.tanggal"></p>

                            <!-- Link Selengkapnya -->
                            <a :href="item.link"
                                class="inline-block border-b-1 w-full py-1 text-white font-subtitle border-white bg-secondary drop-shadow-default rounded-full hover:bg-black transition text-center">
                                Lihat Berita
                            </a>
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

    <!-- Alpine Component -->
    <script>
        function galeri() {
            return {
                berita: [],
                currentPage: 1,
                itemsPerPage: 9,
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
