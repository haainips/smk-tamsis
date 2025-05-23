@extends('layouts.main')

@section('title', 'Jurusan RPL - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col md:flex-row gap-6 md:gap-10 py-12 md:py-20 px-4 justify-center">
        <div class="flex justify-center">
            <img src="{{ asset('images/rpl.jpg') }}" alt="" class="rounded-xl h-64 md:h-80 w-fit md:w-auto object-cover">
        </div>
        <div class="leading-tight space-y-8 md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-title text-center md:text-start font-semibold">Kompetensi Keahlian Rekayasa Perangkat Lunak</h1>
            <p class="font-subtitle text-lg md:text-md md:text-start text-justify">Adalah bidang keahlian yang fokus pada pengembangan perangkat lunak atau software. Siswa yang mengambil jurusan ini akan mempelajari berbagai aspek pemrograman, pengembangan aplikasi, dan manajemen perangkat lunak.</p>
        </div>
    </div>

    <div class="px-10">
        <hr class="border-t-2 py-5 border-primary">
    </div>

    <div class="flex flex-col md:flex-row gap-8 md:gap-10 py-8 md:py-14 px-20 lg:px-10">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-lg md:text-xl pt-8 font-semibold">
                “ Tercetaknya Lulusan yang Religius, berwawasan lingkungan, Kompeten dan Kompetitif dalam Bidang Rekayasa Perangkat Lunak ”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4 mt-10 md:mt-2">MISI</h2>
            <ol class="list-decimal pl-6 pt-8 text-md md:text-xl space-y-4 text-justify font-subtitle">
                <li>Melaksanakan pengembangan dan implementasi kurikulum SMK Negeri 1 Sumberasih</li>
                <li>Mengembangkan Penyiapan Persiapan Mengajar, materi pelajaran, media pembelajaran, alat dan bahan praktik yang peduli terhadap lingkungan.</li>
                <li>Melaksanakan pengembangan evaluasi dan pelaporan hasil belajar.</li>
                <li>Mendidik peserta didik dengan keahlian dan ketrampilan dalam progran keahlian Rekayasa Perangkat Lunak, agar dapat bekerja baik secara mandiri atau mengisi pekerjaan yang ada di DU/DI.</li>
                <li>Meningkatkan kualitas pendidik melalui sertifikasi kompetensi.</li>
            </ol>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    @include('components.berita')
@endsection




