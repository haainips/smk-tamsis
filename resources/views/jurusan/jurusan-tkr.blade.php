@extends('layouts.main')

@section('title', 'Jurusan TKR - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex gap-10 py-20 justify-center">
        <img src="{{ asset('images/tkr.png') }}" alt="" class="rounded-xl h-80">
        <div class="leading-tight space-y-4 w-1/2">
            <h1 class="text-3xl font-title font-semibold">Kompetensi Keahlian Teknik Kendaraan Ringan</h1>
            <p class="font-subtitle text-lg text-justify">Adalah program keahlian yang fokus pada pemeliharaan, perbaikan, dan perawatan kendaraan ringan, seperti mobil. Jurusan ini mempelajari sistem otomotif, termasuk mesin, kelistrikan, sasis, dan transmisi kendaraan.</p>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>

    <div class="flex flex-col md:flex-row gap-8 md:gap-16 py-14 max-w-7xl mx-auto">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-xl font-semibold pt-8">
                “Terwujudnya Lulusan Kompetensi Keahlian Teknik Kendaraan Ringan yang Kompeten, Beriman, Berakhlak dan Kompetitif Tingkat”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-8 text-xl space-y-4 font-subtitle text-justify">
                <li>Meningkatkan keterampilan hidup mandiri siswa Teknik Kendaraan Ringan.</li>
                <li>Memiliki kecerdasan, pengetahuan yang memadai sesuai kebutuhan dunia Industri Otomotif.</li>
                <li>Memiliki kepribadian, iman dan taqwa, serta berakhlak mulia.</li>
                <li>Mampu mengisi lowongan pekerjaan pada umumnya dan pekerjaan didunia Teknik Otomotif pada khususnya, serta dapat mengembangkan sikap profesionalisme.</li>
            </ol>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    @include('components.berita')
@endsection
