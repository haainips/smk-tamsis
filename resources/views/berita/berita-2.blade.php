@extends('layouts.main')

@section('title', 'Alumni Mengajar: Wadah Berbagi Inspirasi Sekaligus
            Mempererat Silaturahmi - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="py-10 space-y-1 max-w-6xl mx-auto">
        <h1 class="font-title text-3xl text-center">Alumni Mengajar: Wadah Berbagi Inspirasi <br> Sekaligus
            Mempererat Silaturahmi</h1>
        <p class="font-subtitle text-sm text-center pb-4">Diterbitkan pada : Mar 10, 2025 - 15:30 WIB</p>
        <div class="flex justify-center pb-4">
            <img src="{{ asset('images/berita2.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            <p>Sepanjang berdirinya sebuah instansi pendidikan, alumni merupakan bagian tak terpisahkan dalam perjalanannya.
                SMK Tamansiswa Jetis Yogyakarta yang berdiri sejak tahun 1969, telah meluluskan ribuan alumni yang tersebar
                di berbagai wilayah Indonesia. Mereka telah berkontribusi dan menjadi bagian dari pembangunan bangsa.</p>
            <p>SMK Tamansiswa Jetis Yogyakarta terus berupaya memperkuat sinergi antara alumni dan civitas akademika. Salah
                satu bentuk kolaborasi yang dilakukan diantaranya melalui kegiatan Alumni Mengajar yang diselenggarakan pada
                pada hari Senin, 13 Januari 2025 di kampus Bintaran. Kegiatan ini bertujuan mempererat silaturahmi antara
                alumni dan sekolah serta berbagi pengalaman dan ilmu baru</p>
            <p>Kegiatan ini dihadiri oleh seluruh guru dari jurusan Teknik Kendaraan Ringan, Teknik Sepeda Motor, dan Teknik
                Instalasi Tenaga Listrik. Bapak Wardaya, alumni angkatan 1986 dari jurusan mesin yang kini mengajar di SMK
                Negeri 2 Surabaya, menjadi narasumber utama. Beliau berbagi pengetahuan mengenai perkembangan teknologi
                otomotif, serta memberikan tips-tips praktis dalam mengembangkan kurikulum yang relevan dengan kebutuhan
                industri.</p>
            <p>Dalam kesempatan diskusi dan sharing, Bapak Wardaya juga membagikan pengalaman tentang penerapan dual system
                dan kelas industri di tempatnya mengajar. Beliau menjelaskan kurikulum yang dijalankan bersama dengan mitra
                industri serta bagaimana mekanismenya. Yang menjadi poin penting dan tidak dapat diganggu gugat adalah
                keselarasan antara pihak SMK dengan industri. Hal tersebut mutlak karena SMK merupakan "lumbung" untuk
                memasok kebutuhan SDM di dunia usaha dan dunia industri.</p>
        </div>
        <div class="flex justify-center py-8">
            <img src="{{ asset('images/berita2-2.jpg') }}" alt="" width="800px" class=" rounded-2xl">
        </div>
        <div class="font-subtitle text-lg text-justify space-y-4 max-w-4xl mx-auto">
            Kegiatan Alumni Mengajar diharapkan membawa dampak positif bagi kemajuan SMK Tamansiswa Jetis Yogyakarta. Dengan berbagi pengalaman dan ilmu, diharapkan dapat meningkatkan kualitas pendidikan dan mempersiapkan siswa untuk siap menghadapi tantangan industri. SMK Tamansiswa Jetis Yogyakarta mengucapkan terima kasih kepada Bapak Wardaya dan semua pihak yang berpartisipasi. Kegiatan ini diharapkan dapat terus berlanjut dan memberikan manfaat bagi semua pihak.
        </div>
    </div>
@endsection
