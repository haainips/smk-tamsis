@extends('layouts.main')

@section('title', 'SMK Tamansiswa Jetis Yogyakarta')

@section('content')
        @include('components.slider')
    <div class=""> 
        <span class="flex flex-col items-center font-subtitle text-xl leading-tight pt-3 text-justify">
            <h1 class="text-5xl font-title mt-9">VISI</h1>
            <p class="pt-6 text-3xl text-center">“Terwujudnya Sumber Daya Manusia yang beriman dan bertaqwa, cerdas, inovatif, serta berdaya saing global”.</p>
            <h1 class="text-5xl font-title pt-20">MISI</h1>
        </span>
        <div class="flex font-subtitle text-2xl pl-30 pt-8 gap-3">
            <div class="flex-none">1.</div>
            <div>Mengamalkan ajaran agama sesuai keyakinan masing-masing</div>
        </div>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">2.</div>
            <div>Meraih prestasi baik dibidang akademik maupun non-akademik.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">3.</div>
            <div>Berkarya secara kreatif dan mandiri.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">4.</div>
            <div>Meningkatkan proses pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">5.</div>
            <div>Melaksanakan pembelajaran dengan sistem Among (metode pendidikan khas Tamansiswa).</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">6.</div>
            <div>Mewujudkan kompetensi pendidik dan tenaga kependidikan sesuai tuntutan pendidikan nasional.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">7.</div>
            <div>Menyediakan sarana dan prasarana pendidikan yang relevan, mutakhir, dan berorientasi ke masa depan.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">8.</div>
            <div>Mengembangkan standar pengelolaan pendidikan berbasis Manajemen Berbasis Sekolah (MBS).</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">9.</div>
            <div>mengembangkan standar penilaian pendidikan sesuai perkembangan kurikulum.</div>
        </div v>
        <div class="flex font-subtitle text-2xl gap-2 pl-30 mt-5">
            <div class="flex-none">10.</div>
            <div>Menciptakan lingkungan sekolah yang kondusig, bersih, indah, rindang, dan nyaman.</div>
        </div v>


    </div>

        <hr class="border-t-4 m-8 border-primary">
        @include ('components.berita')
@endsection