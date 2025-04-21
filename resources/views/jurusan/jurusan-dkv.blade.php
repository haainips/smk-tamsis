@extends('layouts.main')

@section('title', 'Jurusan DKVSMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex justify-center gap-10 py-20">
        <img src="{{ asset('images/dkv.jpg') }}" alt="" class="rounded-xl h-80">
        <div class="leading-tight space-y-4 w-1/2">
            <h1 class="text-3xl font-title font-semibold">Kompetensi Keahlian Desain Komunikasi Visual</h1>
            <p class="font-subtitle text-lg text-justify">Adalah program keahlian yang berfokus pada pembelajaran desain grafis, ilustrasi, animasi, fotografi, dan media komunikasi visual lainnya. Jurusan ini membekali siswa dengan keterampilan dalam menciptakan karya visual yang efektif untuk berbagai kebutuhan industri kreatif, seperti periklanan, media sosial, branding, dan multimedia.</p>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 border-primary">
    </div>

    <div class="flex flex-col md:flex-row gap-8 md:gap-16 py-20 max-w-7xl mx-auto">
        <!-- VISI -->
        <div class="md:w-1/2">
            <h2 class="text-4xl font-title text-center mb-4">VISI</h2>
            <p class="text-center font-subtitle text-xl font-semibold pt-8">
                “ Menjadikan peserta didik yang unggul, kreatif, berkarakter di bidang Desain Komunikasi Visual yang mampu menciptakan lulusan professional. ”
            </p>
        </div>

        <!-- MISI -->
        <div class="md:w-1/2">
            <h2 class="text-4xl font-title text-center mb-4">MISI</h2>
            <ol class="list-decimal pl-6 pt-8 text-xl space-y-4 font-subtitle text-justify">
                <li>Menyelenggarakan pendidikan berbasis keterampilan di bidang desain grafis, ilustrasi, animasi, dan multimedia sesuai dengan perkembangan teknologi.</li>
                <li>Membentuk lulusan yang kompeten dan berdaya saing dalam dunia industri kreatif maupun wirausaha.</li>
                <li>Mendorong inovasi dan kreativitas siswa dalam menghasilkan karya desain yang orisinal dan berkualitas.</li>
                <li>Mengembangkan karakter profesionalisme melalui etika kerja, komunikasi, dan tanggung jawab dalam berkarya.</li>
            </ol>
        </div>
    </div>

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    @include('components.berita')
@endsection
