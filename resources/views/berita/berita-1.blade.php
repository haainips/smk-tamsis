@extends('layouts.main')

@section('title', 'Pesantren Ramadan 1446 Hijriah Kelas X SMK Tamansiswa Jetis - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="py-10 space-y-1 max-w-6xl mx-auto">
        <h1 class="font-title text-3xl text-center">Pesantren Ramadan 1446 Hijriah <br>Kelas X SMK Tamansiswa Jetis</h1>
        <p class="font-subtitle text-sm text-center pb-4">Diterbitkan pada : Mar 10, 2025 - 15:30 WIB</p>
        <div class="flex justify-center pb-4">
            <img src="{{ asset('images/berita1.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            <p>Bulan Ramadan, bulan yang penuh berkah, menjadi momen istimewa bagi umat Islam untuk meningkatkan iman dan takwa. Sejalan dengan Surat Edaran Bersama Menteri Pendidikan Dasar dan Menengah, Menteri Agama, dan Menteri Dalam Negeri Republik Indonesia Nomor 4 Tahun 2025, Nomor 9 Tahun 2025, Nomor 400.6/1432.A/SJ tentang Pembelajaran di Bulan Ramadan Tahun 1446 Hijriah/2025 Masehi, SMK Tamansiswa Jetis menyelenggarakan kegiatan Pesantren Ramadan. Kegiatan ini bertujuan untuk menumbuhkan karakter mulia, kepemimpinan, dan kesadaran sosial di kalangan siswa, selain tentunya memperdalam pemahaman agama.</p>
            <p>Kegiatan Pesantren Ramadan di SMK Tamansiswa Jetis dilaksanakan secara bertahap. Pada pekan pertama, kegiatan ini diikuti oleh seluruh siswa kelas X dan bertempat di aula lantai 2 SMK Tamansiswa Jetis. Acara dibuka secara resmi oleh Kepala Sekolah, Bapak Asnan Wiharno, S.Pd, M.Pd. Beliau menyampaikan harapannya agar kegiatan ini dapat memberikan manfaat yang besar bagi seluruh siswa. Pada pekan-pekan berikutnya, kegiatan Pesantren Ramadan akan dilanjutkan untuk siswa kelas XI dan XII.</p>
        </div>
        <div class="flex justify-center py-8">
            <img src="{{ asset('images/berita1-2.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            <p>Pesantren Ramadan ini tidak hanya diperuntukkan bagi siswa Muslim. Bagi siswa yang beragama selain Islam, SMK Tamansiswa Jetis juga menyediakan kegiatan bimbingan rohani yang dilaksanakan di ruangan terpisah. Hal ini menunjukkan komitmen sekolah dalam memberikan pelayanan pendidikan yang inklusif dan menghargai keberagaman.</p>
            <p>Pada kesempatan kali ini, kegiatan Pesantren Ramadan diisi oleh Ustadz Untung Supramono. Dalam ceramahnya, beliau menyampaikan materi tentang keberkahan yang hakiki, yaitu kebahagiaan. Beliau menjelaskan bahwa untuk mencapai kebahagiaan, seseorang harus senantiasa bersyukur, memanfaatkan usia dengan sebaik-baiknya, dan mengisi masa muda dengan kegiatan yang bermanfaat. Pesan ini diharapkan dapat menjadi inspirasi bagi para siswa untuk menjalani kehidupan yang lebih bermakna</p>
            <p>Dengan adanya kegiatan Pesantren Ramadan ini, diharapkan para siswa SMK Tamansiswa Jetis dapat meningkatkan pemahaman agama, menumbuhkan karakter mulia, dan menjadi generasi yang bermanfaat bagi masyarakat.</p>
        </div>
    </div>
@endsection
