@extends('layouts.main')

@section('title', 'Pramuka SMK Tamansiswa Jetis Jejakkan Kaki di PDT ke-53 - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="py-10 space-y-1 max-w-6xl mx-auto">
        <h1 class="font-title text-3xl text-center">Pramuka SMK Tamansiswa Jetis <br> Jejakkan Kaki di PDT ke-53</h1>
        <p class="font-subtitle text-sm text-center pb-4">Diterbitkan pada : Mar 10, 2025 - 15:30 WIB</p>
        <div class="flex justify-center pb-4">
            <img src="{{ asset('images/berita3-3.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            <p>
                Dalam perhelatan Pengembaraan Desember Tradisional (PDT) ke-53 yang diselenggarakan oleh Kwartir Cabang Gerakan Pramuka Kota Yogyakarta, SMK Tamansiswa Jetis Yogyakarta berhasil menorehkan sejarah baru. Untuk pertama kalinya, sekolah dengan sejarah panjang ini mengirimkan delegasinya untuk mengikuti ajang bergengsi yang diikuti oleh 20 sekolah negeri dan 3 sekolah swasta di Yogyakarta. Dengan semangat juang yang tinggi, satu sangga putra (Arkatama) dan satu sangga putri (Nirwana) dari Ambalan Pramuka Soewarma (R.M. Soerwardi Soerjaningrat-Laksamana Malahayati) siap mengukir prestasi.
            </p>
            <p>
                PDT yang berlangsung selama lima hari, mulai tanggal 14 hingga 18 Desember 2024, menyajikan tantangan yang menarik bagi para peserta. Dengan rute yang mengelilingi berbagai situs bersejarah di Yogyakarta, para pramuka muda diajak untuk menyusuri jejak kerajaan-kerajaan yang pernah berjaya di tanah Jawa. Start dari Taman Budaya Embung Giwangan, para peserta kemudian melakukan perjalanan panjang yang menguji fisik dan mental, hingga akhirnya mencapai garis finish di Balai Kota Yogyakarta.
            </p>
        </div>
        <div class="flex justify-center py-8">
            <img src="{{ asset('images/berita-3.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            <p>
                Lebih dari sekadar perlombaan, PDT ke-53 juga menjadi wadah bagi para peserta untuk mempererat persaudaraan dan nasionalisme. Dengan hidup bersama selama beberapa hari, para siswa dari berbagai sekolah dapat saling mengenal, berbagi pengalaman, dan membangun relasi yang baik. Semangat kebersamaan dan kekompakan yang terjalin selama kegiatan ini diharapkan dapat terus terbawa dalam kehidupan sehari-hari.
            </p>
            <p>
                Mengusung tema “Pramuka Yogyakarta Berbudaya”, PDT ke-53 tidak hanya fokus pada aspek fisik dan keterampilan, tetapi juga pada pengembangan karakter. Para peserta diajak untuk lebih menghargai budaya dan sejarah bangsa, serta menanamkan nilai-nilai luhur seperti gotong royong, toleransi, dan saling menghormati. Dengan demikian, diharapkan para peserta dapat menjadi generasi muda yang memiliki kepribadian yang tangguh, berakhlak mulia, dan cinta tanah air.
            </p>
        </div>
    </div>
@endsection
