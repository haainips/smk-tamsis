@extends('layouts.main')

@section('title', 'Program Kerja Waka Sarpras - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')

    <div class="flex flex-col py-10">
        <div class="md:flex px-10 justify-center">
            <div class="space-y-3">
                <div class="relative w-96 flex-shrink-0">
                    <!-- Vector backgrounds -->
                    <img src="{{ asset('images/Vector.png') }}" alt="vector1" class="absolute w-40 top-10 left-18 md:left-8 ">
                    <img src="{{ asset('images/vector-1.png') }}" alt="vector2" class="absolute w-30 top-24 left-48 md:left-40">

                    <!-- Profile Photo -->
                    <img src="{{ asset('images/sarpras.png') }}" alt="Waka Kurikulum"
                        class="relative z-10 object-cover left-14 md:left-10 " width="280px">
                </div>
                <span class="text-center text-lg md:text-xl font-subtitle leading-tight">
                    <h1 class="font-semibold">Waka Sarpras</h1>
                    <p class="">Asnan Wiharno, M.Pd</p>
                </span>
            </div>
            <div class="flex flex-col justify-center md:w-1/2 pt-10">
                <span class="">
                    <h1 class="font-title text-2xl md:text-3xl font-semibold text-center md:text-start">PROGRAM KERJA WAKA SARPRAS</h1>
                    <p class="font-subtitle text-lg md:text-xl pt-8 text-justify">WAKA SARPAS di SMK adalah singkatan dari Wakil Kepala Sekolah bidang Sarana dan Prasarana. Tugas utama WAKA SARPAS adalah mengelola, mengawasi, dan memastikan ketersediaan serta pemeliharaan sarana dan prasarana di sekolah agar proses pembelajaran berjalan dengan lancar.</p>
                </span>
                <p class="font-subtitle text-lg md:text-xl pt-8">PROGRAM UMUM :</p>
                <ol class="px-4 space-y-3 list-decimal font-subtitle text-lg md:text-xl mt-4 text-justify">
                <li>Membantu tugas kepala sekolah di dalam penyelenggaraan kegiatan sekolah sehari-hari terutama menyangkut urusan penyediaan dan pemeliharaan sarana dan prasarana.</li>
                <li>Menyediakan, mengatur, memelihara sarana dan prasarana sekolah dengan pelaksanaan kegiatan sekolah dan proses belajar mengajar dapat berjalan dengan tertib dan lancar. Tentu saja hal ini tidak lepas dari pengawasan.</li>
                <li>Mengupayakan kepada seluruh aparat penyelenggara sekolah (guru, karyawan,maupun siswa) akan pentingnya kesadaran diri untuk ikut memelihara keindahan dan kebersihan lingkungan sekolah sebagai unsur ketahanan sekolah.</li>
                <li>Memikirkan, mengusahakan sarana dan prasarana yang belum ada/diadakan serta mengganti memperbaiki sarana dan prasarana yang telah rusak.</li>
                <li>Menyusun rencana kebutuhan sarana dan prasarana sekolah.</li>
                <li>Mengkoordinasikan pendayagunaan sarana dan prasarana sekolah</li>
                <li>Mengelola dalam pembiyaan alat-alat pengajaran</li>
                <li>Menyusun laporan pelaksanaan urusan sarana dan prasarana sekolah</li>
            </ol>
            </div>
        </div>
    </div>
    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>
    @include('components.berita')
@endsection




