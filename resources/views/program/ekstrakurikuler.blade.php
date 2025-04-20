@extends('layouts.main')

@section('title', 'Program Kerja Waka Kurikulum')

@section('content')
    @include('components.slider')

    <div class="container mx-auto px-4 py-8">
        <!-- Sports Section -->
        <div class="py-14">
            <h2 class="text-4xl font-title font-semibold text-center mb-6">BIDANG OLAHRAGA</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-10">
                <!-- Tennis -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        TENIS MEJA
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        FUTSAL
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Voli -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        VOLI
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Badminton -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        BADMINTON
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Basket -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        BASKET
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bidang Seni --}}
        <div class=" flex flex-col items-center gap-6">
            <h2 class="text-4xl font-title font-semibold text-center mb-6">BIDANG SENI</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-14">
                <!-- Karawitan -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        KARAWITAN
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Musik -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        MUSIK
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Silat -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        SILAT
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Seni Rupa -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        SENI RUPA
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bidang Kompetensi Keahlian --}}
        <div class="pt-14 pb-20 flex flex-col items-center gap-6">
            <h2 class="text-4xl font-title font-semibold text-center mb-6">BIDANG KOMPETENSI KEAHLIAN</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-14">
                <!-- Robotik -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        ROBOTIK
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Musik -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        SETIR MOBIL
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Web Design -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        WEB DESIGN
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Percetakan -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        PERCETAKAN
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Paint & Airbrush -->
                <div class="overflow-hidden ">
                    <div class="bg-teal-600 rounded-full text-white text-center py-1 font-title text-xl drop-shadow-default border-b-1 border-white">
                        PAINT & AIRBRUSH
                    </div>
                    <div class="p-4 font-subtitle text-lg text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>
                        
                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>
                        
                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-t-2 mb-10 border-primary">
    @include('components.berita')
@endsection