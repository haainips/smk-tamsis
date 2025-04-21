@extends('layouts.main')

@section('title', 'Program Kerja Waka Kurikulum')

@section('content')
    @include('components.slider')

    <div class="flex flex-col py-10">
        <div class="flex px-10 justify-center">
            <div class="space-y-3">
                <div class="relative w-96 flex-shrink-0">
                    <!-- Vector backgrounds -->
                    <img src="{{ asset('images/Vector.png') }}" alt="vector1" class="absolute w-17 top-10 left-16 ">
                    <img src="{{ asset('images/vector-1.png') }}" alt="vector2" class="absolute w-44 top-18 left-32">

                    <!-- Profile Photo -->
                    <img src="{{ asset('images/kesiswaan.png') }}" alt="Waka Kurikulum"
                        class="relative z-10 object-cover left-24" width="190px">
                </div>
                <span class="text-center text-xl font-subtitle leading-tight">
                    <h1 class="font-semibold">Waka Kesiswaan</h1>
                    <p class="">Nyi. Siti Suryani, SS</p>
                </span>
            </div>
            <div class="flex flex-col justify-center w-1/2">
                <span class="">
                    <h1 class="font-title text-3xl font-semibold">PROGRAM KERJA WAKA KESISWAAN</h1>
                    <p class="font-subtitle text-xl pt-8 text-justify">Wakil Kepala Sekolah Bidang Kesiswaan (Waka
                        Kesiswaan) adalah salah satu pejabat struktural di sekolah yang bertanggung jawab atas pengelolaan
                        dan pengembangan seluruh kegiatan yang berkaitan dengan siswa, baik dalam aspek akademik maupun
                        non-akademik.</p>
                </span>
            </div>
        </div>
        <div class="max-w-6xl mx-auto pt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                <!-- Column 1 -->
                <div class="space-y-3">
                    <!-- Item 1 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-6">1.</span>
                        <p class="font-subtitle text-xl text-justify">Program pembinaan PPTS/OSIS mencakup :</p>
                    </div>
                    <ul class="list-disc text-justify ml-10 font-subtitle text-xl space-y-2">
                        <li>Pembinaan kedisiplinan terhadap Tuhan yang Maha Esa</li>
                        <li>Pembinaan akhlak mulia atau karakter bangsa</li>
                        <li>Pembinaan kepemimpinan, wawasan kebangsaan, dan bela negara</li>
                        <li>Pembinaan prestasi akademik/non-akademik sesuai bakat dan minat</li>
                        <li>Pembinaan demokrasi, hak asasi manusia, kesetaraan gender, dan toleransi dalam masyarakat plural
                        </li>
                        <li>Pembinaan keterampilan dan kewirausahaan</li>
                        <li>Pembinaan hidup sehat dan gizi berbasis sumber gizi yang terstandarisasi</li>
                        <li>Pembinaan sastra dan budaya</li>
                        <li>Pembinaan teknologi informasi dan komunikasi (TIK)</li>
                        <li>Pembinaan komunikasi dalam bahasa Inggris</li>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div class="space-y-3">
                    <!-- Item 6 -->
                    <div class="flex items-start">
                        <span class="font-subtitle text-xl mr-6">2.</span>
                        <p class="font-subtitle text-xl text-justify">Program Pembinaan Ekstrakurikuler</p>
                    </div>
                    <ul class="list-disc text-justify ml-10 font-subtitle text-xl space-y-2">
                        <li>Bidang Olahraga.</li>
                        <li>Bidang Seni.</li>
                        <li>Pembinaan Ketaqwaan Terhadap Tuhan Yang Maha Esa.</li>
                        <li>Pembinaan keterampilan dan Kewirausahaan.</li>
                        <li>Bidang Penguasaan Bahasa Asing.</li>
                        <li>Bidang kompetensi keahlian.</li>
                    </ul>

                    <!-- Item 7 -->
                    <div class="flex items-start mt-8">
                        <span class="font-subtitle text-xl mr-6">3.</span>
                        <p class="font-subtitle text-xl text-justify">
                            Menjalin hubungan baik dengan SMP/MTs, SMA/SMK sederajat di wilayah Kota Yogyakarta, dan Pemprov
                            DIY pada umumnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>

    @include('components.berita')
@endsection
