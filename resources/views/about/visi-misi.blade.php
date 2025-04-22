@extends('layouts.main')

@section('title', 'Visi dan Misi - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="max-w-6xl mx-auto pt-10 px-10 md:px-4 text-justify">
        <div class="flex flex-col items-center font-subtitle text-lg md:text-xl leading-tight pt-3">
            <h1 class="text-3xl md:text-4xl font-title mt-9">VISI</h1>
            <p class="pt-6 text-xl md:text-2xl text-center">“Terwujudnya Sumber Daya Manusia yang beriman dan bertaqwa,
                cerdas, inovatif, serta berdaya saing global”.</p>

            <h1 class="text-3xl md:text-4xl font-title pt-16">MISI</h1>
        </div>

        <div class="mt-8 space-y-5 font-subtitle text-md md:text-2xl">
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>1.</span>
                <p>Mengamalkan ajaran agama sesuai keyakinan masing-masing.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>2.</span>
                <p>Meraih prestasi baik di bidang akademik maupun non-akademik.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>3.</span>
                <p>Berkarya secara kreatif dan mandiri.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>4.</span>
                <p>Meningkatkan proses pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>5.</span>
                <p>Melaksanakan pembelajaran dengan sistem <i>Among</i> (metode pendidikan khas Tamansiswa).</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>6.</span>
                <p>Mewujudkan kompetensi pendidik dan tenaga kependidikan sesuai tuntutan pendidikan nasional.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>7.</span>
                <p>Menyediakan sarana dan prasarana pendidikan yang relevan, mutakhir, dan berorientasi ke masa depan.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>8.</span>
                <p>Mengembangkan standar pengelolaan pendidikan berbasis Manajemen Berbasis Sekolah (MBS).</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>9.</span>
                <p>Mengembangkan standar penilaian pendidikan sesuai perkembangan kurikulum.</p>
            </div>
            <div class="flex items-start gap-3 pl-2 md:pl-6">
                <span>10.</span>
                <p>Menciptakan lingkungan sekolah yang kondusif, bersih, indah, rindang, dan nyaman.</p>
            </div>
        </div>
    </div>


    <hr class="border-t-4 m-8 border-primary">
    @include ('components.berita')
@endsection
