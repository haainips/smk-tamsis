@extends('layouts.main')

@section('title', 'Sambutan Kepala Sekolah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')

    <div class="flex flex-col md:flex-row gap-6 md:gap-10 py-10 max-w-7xl mx-auto px-8 md:px-4">
    <div class="flex flex-col items-center md:items-start md:w-1/3">
        <img src="{{ asset('images/kepsek.jpeg') }}" alt="" class="rounded-3xl w-80 md:w-fit">
        <div class="flex md:w-full flex-col items-center font-subtitle text-lg leading-tight pt-3">
            <h1>Kepala Sekolah</h1>
            <p class="font-semibold">Ana Aprilia Setyawati, S.E.</p>
            <p class="font-semibold">NIY.070096</p>
        </div>
    </div>
    <div class="md:w-2/3 space-y-4">
        <h1 class="font-title text-2xl md:text-3xl text-center md:text-left">Sambutan Kepala Sekolah</h1>
        <div class="font-subtitle text-base md:text-xl text-justify space-y-4">
            <p>Assalaamu'alaikum Warahmatullahi Wabarakatuh.</p>
            <p>Salam dan Bahagia, Alhamdulillah segala puji hanya bagi Allah karena atas rahmat dan hidayah-Nya kita bisa menata dan mengaktifkan kembali website sekolah ini dengan domain SMK Tamansiswa Jetis Yogyakarta.</p>
            <p>Selamat datang di website SMK Tamansiswa Jetis Yogyakarta. Dalam perkembangan era globalisasi dan pesatnya kemajuan teknologi dan informasi ini, tidak dapat dipungkiri bahwa keberadaan sebuah website untuk dunia pendidikan khususnya sekolah, sangatlah penting. Media website dapat digunakan sebagai penyedia sarana dalam menyebarluaskan informasi dan perkembangan terkini dari sekolah kepada orang tua dan masyarakat, yang memang harus diketahui oleh setiap stakeholder secara riil. Disamping itu, website juga dapat menjadi ajang promosi sekolah yang cukup efektif. Berbagai kegiatan kemajuan sekolah dapat diinformasikan, disertai data maupun gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SMK Tamansiswa Jetis Yogyakarta.</p>
        </div>
    </div>
</div>


    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5 mt-10  border-primary">
    </div>

    <div class="pb-6">
        @include('components.berita')
    </div>

@endsection
