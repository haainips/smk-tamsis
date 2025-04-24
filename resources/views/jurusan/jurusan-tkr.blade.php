@extends('layouts.main')

@section('title', 'Jurusan TKR - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col md:flex-row gap-6 md:gap-10 py-12 md:py-20 max-w-7xl mx-auto px-10">
        <img src="{{ asset('images/tkr.png') }}" alt="" class="rounded-xl h-64 md:h-80 w-full md:w-auto object-cover">

        <div class="leading-tight space-y-4 md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-title font-semibold text-center md:text-start">Kompetensi Keahlian Teknik Kendaraan Ringan</h1>
            <p class="font-subtitle text-md md:text-lg text-justify">
                Adalah program keahlian yang fokus pada pemeliharaan, perbaikan, dan perawatan kendaraan ringan, seperti mobil. Jurusan ini mempelajari sistem otomotif, termasuk mesin, kelistrikan, sasis, dan transmisi kendaraan.
            </p>
        </div>
    </div>

    <div class="px-10">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    <div class="flex flex-col md:flex-row gap-8 md:gap-16 py-10 lg:px-10 px-20">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-lg md:text-xl font-semibold pt-6">
                “Terwujudnya Lulusan Kompetensi Keahlian Teknik Kendaraan Ringan yang Kompeten, Beriman, Berakhlak dan Kompetitif Tingkat”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-6 text-base md:text-xl space-y-4 font-subtitle text-justify">
                <li>Meningkatkan keterampilan hidup mandiri siswa Teknik Kendaraan Ringan.</li>
                <li>Memiliki kecerdasan, pengetahuan yang memadai sesuai kebutuhan dunia Industri Otomotif.</li>
                <li>Memiliki kepribadian, iman dan taqwa, serta berakhlak mulia.</li>
                <li>Mampu mengisi lowongan pekerjaan pada umumnya dan pekerjaan di dunia Teknik Otomotif pada khususnya, serta dapat mengembangkan sikap profesionalisme.</li>
            </ol>
        </div>
    </div>

    <div class="px-10">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    @include('components.berita')
@endsection
