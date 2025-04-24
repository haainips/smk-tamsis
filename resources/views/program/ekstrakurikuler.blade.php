@extends('layouts.main')

@section('title', 'Ekstrakurikuler - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')

    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <!-- Sports Section -->
        <div class="py-8 md:py-14 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-title font-semibold text-center mb-6 sm:mb-8">BIDANG OLAHRAGA</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-6 md:gap-8 lg:gap-10">
                <!-- Tennis -->
                <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        TENIS MEJA
                    </div>
                    <div class="p-3 sm:p-4 font-subtitle text-base sm:text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-2 sm:mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class="mb-2 sm:mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p>(08123456789)</p>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        FUTSAL
                    </div>
                    <div class="p-3 sm:p-4 font-subtitle text-base sm:text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-2 sm:mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class="mb-2 sm:mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p>(08123456789)</p>
                    </div>
                </div>

                <!-- Voli -->
                <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        VOLI
                    </div>
                    <div class="p-3 sm:p-4 font-subtitle text-base sm:text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-2 sm:mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class="mb-2 sm:mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p>(08123456789)</p>
                    </div>
                </div>

                <!-- Badminton -->
                <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        BADMINTON
                    </div>
                    <div class="p-3 sm:p-4 font-subtitle text-base sm:text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-2 sm:mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class="mb-2 sm:mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p>(08123456789)</p>
                    </div>
                </div>

                <!-- Basket -->
                <div class="overflow-hidden col-span-2 md:col-span-2 border border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        BASKET
                    </div>
                    <div class="p-3 sm:p-4 font-subtitle text-base sm:text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-2 sm:mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class="mb-2 sm:mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p>(08123456789)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-10">
            <hr class="border-t-2 py-5 border-primary">
        </div>

        {{-- Bidang Seni --}}
        <div class=" flex flex-col items-center gap-6">
            <h2 class="text-3xl font-title font-semibold text-center mb-6">BIDANG SENI</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-6 md:gap-8 lg:gap-10">
                <!-- Karawitan -->
                <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        KARAWITAN
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Musik -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        MUSIK
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Silat -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        SILAT
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Seni Rupa -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        SENI RUPA
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
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

        <div class="px-10">
            <hr class="border-t-2 py-5 mt-10  border-primary">
        </div>

        {{-- Bidang Kompetensi Keahlian --}}
        <div class="py-8 md:py-4 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-title font-semibold text-center mb-6 sm:mb-8">BIDANG KOMPETENSI KEAHLIAN</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-6 md:gap-8 lg:gap-10">
                <!-- Robotik -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        ROBOTIK
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Setir Mobil -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-defaul">
                        SETIR MOBIL
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Web Design -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        WEB DESIGN
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Percetakan -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        PERCETAKAN
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
                        <p class="mb-1">Jadwal Kegiatan</p>
                        <p class="font-bold text-yellow-500 mb-3">Kamis 15.00 - 17.00</p>

                        <p class="mb-1">Kontak Pengajar</p>
                        <p class=" mb-3">Norma Prakasa, S.Pd</p>

                        <p class="mb-1">Telepon / WA</p>
                        <p class="">(08123456789)</p>
                    </div>
                </div>

                <!-- Paint & Airbrush -->
                <div class="overflow-hidden col-span-2 md:col-span-2 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div
                        class="bg-teal-600 rounded-t-lg text-white text-center py-2 px-4 font-title text-lg sm:text-xl drop-shadow-default">
                        PAINT & AIRBRUSH
                    </div>
                    <div class="p-4 font-subtitle text-md text-center">
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
