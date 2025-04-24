@extends('layouts.main')

@section('title', 'Jurusan TSM - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-10 py-12 md:py-20 max-w-7xl mx-auto px-10">
        <img src="{{ asset('images/tsm.png') }}" alt="" class="rounded-xl h-64 md:h-80 w-full md:w-auto object-cover">

        <div class="leading-tight space-y-4 md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-title font-semibold text-center md:text-start">Kompetensi Keahlian Teknik Sepeda Motor</h1>
            <p class="font-subtitle text-md md:text-lg text-justify">
                Adalah program keahlian dalam bidang teknik otomotif yang berfokus pada perawatan, perbaikan, dan modifikasi sepeda motor. Jurusan ini membekali siswa dengan keterampilan praktis dalam menangani berbagai jenis kendaraan roda dua, baik dari aspek mekanik, kelistrikan, hingga sistem injeksi.
            </p>
        </div>
    </div>

    <div class="px-10">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    <div class="flex flex-col md:flex-row gap-8 lg:gap-16 py-10 lg:py-14 px-20 lg:px-10">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-lg md:text-xl font-semibold pt-6">
                “ Mencetak lulusan yang kompeten, profesional, dan berdaya saing dalam bidang Teknik Sepeda Motor serta siap menghadapi tantangan industri otomotif yang berkembang pesat. ”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-6 text-base md:text-xl space-y-4 font-subtitle text-justify">
                <li>Menyelenggarakan pendidikan dan pelatihan berbasis kompetensi dalam bidang perawatan, perbaikan, dan modifikasi sesuai dengan standar industri.</li>
                <li>Mengembangkan keterampilan siswa dalam teknologi otomotif modern, termasuk sistem injeksi, kelistrikan, dan manajemen bengkel.</li>
                <li>Membentuk lulusan yang memiliki etos kerja tinggi, disiplin, dan berorientasi pada kualitas layanan otomotif.</li>
                <li>Membangun kerja sama dengan dunia usaha dan industri otomotif untuk meningkatkan pengalaman praktik dan peluang kerja siswa.</li>
                <li>Mendorong kewirausahaan di bidang otomotif dengan membekali siswa keterampilan membuka dan mengelola bengkel mandiri.</li>
            </ol>
        </div>
    </div>

    <div class="px-10">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    @include('components.berita')
@endsection

