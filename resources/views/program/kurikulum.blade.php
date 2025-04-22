@extends('layouts.main')

@section('title', 'Program Kerja Waka Kurikulum')

@section('content')
    @include('components.slider')

    <div class="md:flex px-10 justify-center pb-16">
        <div>
            <div class="relative w-96 flex-shrink-0">
                <!-- Vector backgrounds -->
                <img src="{{ asset('images/Vector.png') }}" alt="vector1" class="absolute w-44 top-32 left-10 ">
                <img src="{{ asset('images/vector-1.png') }}" alt="vector2" class="absolute w-30 top-52 left-44">

                <!-- Profile Photo -->
                <img src="{{ asset('images/kurikulum.png') }}" alt="Waka Kurikulum"
                    class="relative z-10 object-cover rounded-full left-10 top-10" width="380px">
            </div>
            <span class="text-center text-lg md:text-xl font-subtitle">
                <h1 class="font-semibold">Waka Kurikulum</h1>
                <p class="">Chairin Vita H, S.Si, M.pd</p>
            </span>
        </div>
        <div class="flex flex-col justify-center mt-16 md:w-1/2">
            <span class="">
                <h1 class="font-title text-center md:text-start text-2xl md:text-3xl font-semibold mt-20">PROGRAM KERJA WAKA KURIKULUM</h1>
                <p class="font-subtitle text-lg pt-8 text-justify">Wakil Kepala Sekolah bidang Kurikulum (Waka Kurikulum) di
                    SMK
                    Tamansiswa Jetis Yogyakarta adalah pejabat yang bertanggung jawab atas perencanaan, pelaksanaan, dan
                    evaluasi kurikulum pendidikan di sekolah tersebut. Tugas utama Waka Kurikulum meliputi pengembangan
                    program
                    pembelajaran, penyusunan jadwal pelajaran, serta memastikan kurikulum yang diterapkan sesuai dengan
                    standar
                    pendidikan nasional dan kebutuhan industri. </p>
            </span>

            <ol class="py-4 space-y-2 list-decimal list-inside font-subtitle text-lg md:text-xl mt-10">
                <li>Pengaturan Program Kerja</li>
                <li>Penyusunan Kalender Pendidikan</li>
                <li>Perencanaan dan Pembagian Kelas</li>
                <li>Pembagian Tugas Mengajar</li>
                <li>Pembagian Tugas Tambahan</li>
                <li>Penyusunan Jadwal Mengajar</li>
                <li>
                    Penyusunan program dan perangkat pembelajaran, antara lain:
                    <ul class="ml-8 mt-2 text-base md:text-lg space-y-2 list-[upper-alpha] list-inside">
                        <li class="font-normal">Program Tahunan</li>
                        <li class="font-normal">Program Semester</li>
                        <li class="font-normal">Analisis SK-KD</li>
                        <li class="font-normal">Penentuan KKM</li>
                        <li class="font-normal">Silabus</li>
                        <li class="font-normal">RPP</li>
                        <li class="font-normal">Program Remedial dan Pengayaan</li>
                        <li class="font-normal">Program Penilaian</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>

    @include('components.berita')
@endsection
