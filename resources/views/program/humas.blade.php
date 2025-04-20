@extends('layouts.main')

@section('title', 'Program Kerja Waka Kurikulum')

@section('content')
    @include('components.slider')

    <div class="flex flex-col py-10">
        <div class="flex px-10 justify-center">
            <div class="space-y-3">
                <div class="relative w-96 flex-shrink-0">
                    <!-- Vector backgrounds -->
                    <img src="{{ asset('images/Vector.png') }}" alt="vector1" class="absolute w-40 top-10 left-8 ">
                    <img src="{{ asset('images/vector-1.png') }}" alt="vector2" class="absolute w-30 top-24 left-40">

                    <!-- Profile Photo -->
                    <img src="{{ asset('images/humas.png') }}" alt="Waka Kurikulum"
                        class="relative z-10 object-cover  left-10 " width="280px">
                </div>
                <span class="text-center text-xl font-subtitle leading-tight">
                    <h1 class="font-semibold">Waka Humas</h1>
                    <p class="">Sumarjono, S.Pt</p>
                </span>
            </div>
            <div class="flex flex-col justify-center w-1/2">
                <span class="">
                    <h1 class="font-title text-4xl font-semibold">PROGRAM KERJA WAKA HUMAS</h1>
                    <p class="font-subtitle text-xl pt-8 text-justify">Pelaksanaan Praktek Kerja Lapangan (PKL) sebagai
                        bentuk promosi atau ajang pembuktian kepada Dunia Usaha/Dunia Industri bahwa siswa memiliki
                        kompetensi keterampilan dan bisa menerapkannya di tempat prakerin. Sehingga kedepannya pihak
                        industri akan menyeleksi kebutuhan tenaga kerja.</p>
                </span>
            </div>
        </div>
        <div class="max-w-6xl mx-auto pt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                <!-- Column 1 -->
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">1.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menyediakan fasilitas sekolah untuk kepentingan pembelajaran sepanjang tidak mengganggu
                            kelancaran Proses Belajar Mengajar, demikian sebaliknya fasilitas yang ada di sekolah dapat
                            digunakan untuk kepentingan SMK Tamansiswa Jetis Yogyakarta.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">2.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan baik dengan Balai Pendidikan Menengah Kota Yogyakarta dan Dinas Pendidikan
                            Provinsi, serta Perguruan Tinggi di Yogyakarta.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">3.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin kerjasama dengan DIKDASMEN dalam peningkatan mutu pendidikan dan mutu SDM SMK
                            Tamansiswa Jetis Yogyakarta.
                        </p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="space-y-6">
                    <!-- Item 6 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">6.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan yang baik dengan pihak dunia usaha dalam upaya pemasaran produk lulusan,
                            pemagangan, dan studi siswa sesuai dengan kompetensi yang dimiliki.
                        </p>
                    </div>

                    <!-- Item 7 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">7.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan baik dengan SMP/MTs, SMA/SMK sederajat di wilayah Kota Yogyakarta, dan Pemprov
                            DIY pada umumnya.
                        </p>
                    </div>

                    <!-- Item 8 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">8.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan dengan perguruan tinggi negeri dan swasta, terutama dalam upaya peningkatan
                            jumlah siswa yang melanjutkan studi.
                        </p>
                    </div>

                    <!-- Item 9 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-4">9.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan baik dengan Pemerintah Kecamatan Jetis Yogyakarta, dan Pemkot Yogyakarta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="border-t-2 my-8 border-primary">

    @include('components.berita')
@endsection
