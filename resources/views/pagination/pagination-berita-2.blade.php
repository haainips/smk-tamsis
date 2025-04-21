@extends('layouts.main')

@section('title', 'Berita - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    @php
        $berita = [
            ['id' => 1, 'judul' => 'Pesantren Ramadan 1446 Hijriah Kelas X SMK Tamansiswa Jetis Yogyakarta', 'gambar' => 'berita1.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 2, 'judul' => 'Alumni Mengajar: Wadah Berbagi Inspirasi Sekaligus Mempererat Silaturahmi', 'gambar' => 'berita2.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 3, 'judul' => 'Pramuka SMK Tamansiswa Jetis Jejakkan Kaki di PDT ke-53', 'gambar' => 'berita3.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 4, 'judul' => 'KEBERHASILAN SMK TAMANSISWA JETIS YOGYAKARTA DALAM MENGGELAR...', 'gambar' => 'berita4.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 5, 'judul' => 'Asesmen Bakat Minat Kelas XII SMK Tamansiswa Jetis Yogyakarta', 'gambar' => 'berita5.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 6, 'judul' => 'SMK Tamansiswa Jetis Mengadakan Simulasi Bencana Gempa...', 'gambar' => 'berita6.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 7, 'judul' => 'Workshop bersama Komite Sekolah dalam Upaya Pengembangan...', 'gambar' => 'berita7.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 8, 'judul' => 'SMK Tamansiswa Jetis meriahkan HUT Kota Yogyakarta ke-261...', 'gambar' => 'berita8.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            ['id' => 9, 'judul' => 'Workshop Pemanfaatan Sarana dan Prasarana Pendukung Penyelenggaraan...', 'gambar' => 'berita9.png', 'tanggal' => 'Kamis, 14 Januari 2025'],
            // dst...
        ];

        $berita = collect($berita)->sortByDesc('id');
    @endphp

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="font-title text-center text-3xl py-10">BERITA SMK TAMSIS JETIS YK</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($berita as $item)
                <div class="py-4">
                    <img src="{{ asset('images/berita/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
                        class="w-full h-48 object-cover rounded-xl">
                    <div class="py-2">
                        <h3 class="font-subtitle font-semibold text-lg">{{ $item['judul'] }}</h3>
                        <p class="font-subtitle text-xs text-gray-500">{{ $item['tanggal'] }}</p>
                        <a href="#"
                            class="inline-block border-b-1 w-full py-1 mt-5 text-white font-subtitle border-white bg-secondary drop-shadow-default rounded-full hover:bg-black transition text-center">Lihat
                            Berita</a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination Static --}}
        <div class="flex justify-center mt-8 space-x-2">
            <a href="{{route('home-berita')}}" class="px-3 py-1 border border-gray-300 rounded-xl hover:bg-gray-200">1</a>
            <a href="#" class="px-3 py-1 border border-gray-300 rounded-xl bg-sign text-white ">2</a>
            <a href="{{route('pagination-berita-3')}}" class="px-3 py-1 border border-gray-300 rounded-xl hover:bg-gray-200">3</a>
        </div>
    </div>
@endsection
