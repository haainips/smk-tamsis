@extends('layouts.main')

@section('title', 'Jurusan TITL - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col md:flex-row gap-6 md:gap-10 py-12 md:py-20 max-w-7xl mx-auto px-10">
        <img src="{{ asset('images/titl.jpg') }}" alt="" class="rounded-xl h-64 md:h-80 w-full md:w-auto object-cover">

        <div class="leading-tight space-y-4 px-4 md:w-1/2">
            <h1 class="text-2xl text-center md:text-end md:text-3xl font-title font-semibold">Kompetensi Keahlian Teknik Instalasi Tenaga Listrik
            </h1>
            <p class="font-subtitle text-md md:text-lg text-justify">
                Adalah Jurusan Yang Mempelajari Seluruh Bidang-Bidang Yang Berkaitan Dengan Listrik, Mulai Dari Instalasi
                Rumah Tangga, Instalasi Pembangkitan Dan Instalasi Industri. Kami Menyediakan Fasilitas Yang Memadai Dengan
                Media-Media Terbaru Yang Update Sesuai Dengan Standart Industri di Era 4.0.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    <div class="flex flex-col md:flex-row gap-10 md:gap-16 py-10 max-w-7xl mx-auto px-10">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-lg md:text-xl font-semibold pt-6">
                “ Terwujudnya Lulusan Kompetensi Keahlian Teknik Instalasi Tenaga Listrik, Beriman, Berakhlak dan Kompetitif
                Tingkat Tinggi ”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-6 text-base md:text-xl space-y-4 font-subtitle text-justify">
                <li>Memiliki kepribadian disiplin, iman dan taqwa serta berakhlak mulia.</li>
                <li>Meningkatkan keterampilan hidup mandiri siswa Teknik Instalasi Tenaga Listrik.</li>
                <li>Memiliki kecerdasan pengetahuan yang memadai, sesuai kebutuhan dunia industri.</li>
                <li>Mampu mengisi lowongan pekerjaan di dunia kerja, khususnya pada bidang teknik ketenagalistrikan.</li>
                <li>Mencetak teknisi listrik yang mempunyai sikap profesionalisme.</li>
            </ol>
        </div>
    </div>


    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    @include('components.berita')
@endsection
