@extends('layouts.main')

@section('title', 'Jurusan DKV - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col md:flex-row justify-center gap-6 md:gap-10 py-12 md:py-20 max-w-7xl mx-auto px-10">
        <img src="{{ asset('images/dkv.jpg') }}" alt="" class="rounded-xl h-64 md:h-80 w-full md:w-auto object-cover">

        <div class="leading-tight space-y-4 md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-title font-semibold text-center md:text-start">Kompetensi Keahlian Desain Komunikasi Visual</h1>
            <p class="font-subtitle text-md md:text-lg text-justify">
                Adalah program keahlian yang berfokus pada pembelajaran desain grafis, ilustrasi, animasi, fotografi, dan
                media komunikasi visual lainnya. Jurusan ini membekali siswa dengan keterampilan dalam menciptakan karya
                visual yang efektif untuk berbagai kebutuhan industri kreatif, seperti periklanan, media sosial, branding,
                dan multimedia.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4">
        <hr class="border-t-2 border-primary mb-10">
    </div>

    <div class="flex flex-col md:flex-row gap-8 md:gap-16 py-10 md:py-20 max-w-7xl mx-auto px-10">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-lg md:text-xl font-semibold pt-6">
                “ Menjadikan peserta didik yang unggul, kreatif, berkarakter di bidang Desain Komunikasi Visual yang mampu
                menciptakan lulusan professional. ”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-3xl md:text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-6 text-base md:text-xl space-y-4 font-subtitle text-justify">
                <li>Menyelenggarakan pendidikan berbasis keterampilan di bidang desain grafis, ilustrasi, animasi, dan
                    multimedia sesuai dengan perkembangan teknologi.</li>
                <li>Membentuk lulusan yang kompeten dan berdaya saing dalam dunia industri kreatif maupun wirausaha.</li>
                <li>Mendorong inovasi dan kreativitas siswa dalam menghasilkan karya desain yang orisinal dan berkualitas.
                </li>
                <li>Mengembangkan karakter profesionalisme melalui etika kerja, komunikasi, dan tanggung jawab dalam
                    berkarya.</li>
            </ol>
        </div>
    </div>


    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    @include('components.berita')
@endsection
