@extends('layouts.main')

@section('title', 'Sejarah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')

    <div class="py-14 md:px-4 max-w-6xl px-8 mx-auto">
        <h1 class="text-3xl font-title font-semibold text-center">Sejarah SMK Tamansiswa Jetis Yogyakarta</h1>

        <p class="font-subtitle text-lg md:text-xl leading-relaxed pt-6 text-justify">
            SMK Tamansiswa Jetis Yogyakarta merupakan Sekolah Menengah Kejuruan Swasta di bawah naungan Yayasan Persatuan
            Perguruan Tamansiswa yang berpusat di Yogyakarta. Sekolah ini berdiri pada 1 Januari 1969 dengan nama Tamansiswa
            Karya Madya Teknik Jetis Yogyakarta. Gagasan pendirian sekolah ini dicetuskan oleh Ki Madukoro dan Ki Utomo,
            keduanya guru SMK Negeri Jetis, bersama Ki Suprapto.
        </p>

        <p class="font-subtitle text-lg md:text-xl leading-relaxed pt-4 text-justify">
            Langkah-langkah pendirian dimulai Oktober–November 1968. Rapat pertama dihadiri Ki Suprapto, Ki Madukoro, dan Ki
            Utomo
            yang menyepakati berdirinya STM Taman Karya Madya Jetis. Rapat kedua pada November 1968 dihadiri tokoh-tokoh
            Tamansiswa
            lainnya dan disepakati penggunaan nama STM Tamansiswa agar lebih dikenal masyarakat.
        </p>

        <p class="font-subtitle text-lg md:text-xl leading-relaxed pt-4 text-justify">
            STM ini membuka penerimaan pertama kali pada 2 Januari 1968 dengan dua jurusan: Mesin Umum dan Listrik Kuat.
            Penjurusan dilakukan saat siswa naik kelas dua berdasarkan nilai-nilai pelajaran tertentu.
        </p>

        <div class="font-subtitle text-lg md:text-xl mt-6 space-y-6">
            <div>
                <div class="flex gap-3">
                    <span class="flex-none">1.</span>
                    <span>Ketua: RM. Madukoro (Januari 1969 – September 1969)</span>
                </div>
                <div class="ml-7">Wakil Ketua: Ki Abdul Kadir (Januari 1967 – September 1969)</div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">2.</span>
                    <span>Ketua: Ki Abdul Kadir (September 1969 – April 1976)</span>
                </div>
                <div class="ml-7">Wakil Ketua I: Ki Slamet W (September 1969 – Mei 1976)</div>
                <div class="ml-7">Wakil Ketua II: Ki Utomo (September 1974 – April 1976)</div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">3.</span>
                    <span>Ketua: Ki Utomo (April 1976 – Maret 1980)</span>
                </div>
                <div class="ml-7">Wakil Ketua I: Ki Subarno (Juni 1975 – Juli 1980)</div>
                <div class="ml-7">Wakil Ketua II: Ki Suyitno (Agustus 1978 – Maret 1980)</div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">4.</span>
                    <span>Ketua: Ki Utomo (Maret 1980 – Desember 1996)</span>
                </div>
                <div class="ml-7">Wakil Ketua II: Ki Tego Piyoto (November 1984)</div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">5.</span>
                    <span>Ketua: Ki Sugiyono Pranoto, S.Pd. (Desember 1996)</span>
                </div>
                <div class="ml-7">Wakil Ketua I: Drs. Musli Dahlan (Desember 1996)</div>
                <div class="ml-7">Wakil Ketua II: Ki Drs. Agus Sumartono dan Ki Darmadi, S.Pd. (Desember 1996)</div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">6.</span>
                    <span>Ketua: Drs. Musli Dahlan (2012 – 2017)</span>
                </div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">7.</span>
                    <span>Ketua: Misdar, M.M. (2017 – 2019)</span>
                </div>
            </div>

            <div>
                <div class="flex gap-3">
                    <span class="flex-none">8.</span>
                    <span>Revitalisasi dan Rujukan sesuai Inpres No. 9 Tahun 2016</span>
                </div>
            </div>

        </div>

        <p class="font-subtitle text-lg md:text-xl leading-relaxed mt-6 text-justify">
            SMK Tamansiswa Jetis Yogyakarta saat ini memiliki beberapa jurusan: Teknik Komputer dan Jaringan, Teknik
            Kendaraan
            Ringan, Teknik Bisnis Sepeda Motor, serta Multimedia. Kampus I berada di Jl. Pakuningratan 34A dan Kampus II di
            Jl.
            Bintaran Wetan 15A.
        </p>
    </div>

    @include('components.berita')
@endsection
