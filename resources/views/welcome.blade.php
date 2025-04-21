@extends('layouts.main')

@section('title', 'SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="flex gap-16 px-20 py-8">
        <img src="{{ asset('images/landing-image1.svg') }}" alt="" width="470px">
        <div>
            <div class="flex items-center gap-2">
                <span
                    class="text-8xl font-title text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-yellow-500">55</span>
                <div class="leading-tight">
                    <div class="font-title text-3xl">Tahun</div>
                    <div class="font-title text-3xl ">SMK Tamansiswa Jetis Yogyakarta</div>
                </div>
            </div>
            <p class="text-justify text-lg mt-2 font-subtitle">Selamat datang di website SMK Tamansiswa Jetis Yogyakarta.
                Dalam perkembangan era glob alisasi dan pesatnya kemajuan
                teknologi dan informasi ini, tidak dapat dipungkiri bahwa keberadaan sebuah website untuk dunia pendidikan
                khususnya
                sekolah, sangatlah penting. Media website dapat digunakan sebagai penyedia sarana dalam menyebarluaskan
                informasi dan
                perkembangan terkini dari sekolah kepada orang tua dan masyarakat, yang memang harus diketahui oleh setiap
                stakeholder
                secara riil. Disamping itu, website juga dapat menjadi ajang promosi sekolah yang cukup efektif. Berbagai
                kegiatan
                kemajuan sekolah dapat diinformasikan, disertai data maupun gambar yang relevan, sehingga masyarakat dapat
                mengetahui
                prestasi-prestasi yang telah berhasil diraih oleh SMK Tamansiswa Jetis Yogyakarta.</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>
    <div class="grid grid-cols-3 gap-10 pb-8 px-20 justify-center">
        {{-- Card 1 --}}
        <div
            class="flex justify-center py-4 px-8 gap-7 bg-secondary rounded-4xl drop-shadow-default hover:bg-black border-b-2 border-white">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="" height="100" viewBox="0 0 24 24">
                    <defs>
                        <linearGradient id="grad-icon" x1="100%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FFFF; stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FFC107; stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#grad-icon)"
                        d="M5 13.18v2.81c0 .73.4 1.41 1.04 1.76l5 2.73c.6.33 1.32.33 1.92 0l5-2.73c.64-.35 1.04-1.03 1.04-1.76v-2.81l-6.04 3.3c-.6.33-1.32.33-1.92 0zm6.04-9.66l-8.43 4.6c-.69.38-.69 1.38 0 1.76l8.43 4.6c.6.33 1.32.33 1.92 0L21 10.09V16c0 .55.45 1 1 1s1-.45 1-1V9.59c0-.37-.2-.7-.52-.88l-9.52-5.19a2.04 2.04 0 0 0-1.92 0" />
                </svg>
            </div>
            <div class="leading-tight">
                <h1 class="text-white font-subtitle font-semibold text-2xl">PPDB Online<br>Pendaftaran<br>Peserta
                    Didik<br>Baru</h1>
            </div>
        </div>

        {{-- Card 2 --}}
        <div
            class="flex justify-center py-4 px-8 gap-7 bg-secondary rounded-4xl drop-shadow-default hover:bg-black border-b-2 border-white">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="" height="100" viewBox="0 0 512 512">
                    <defs>
                        <linearGradient id="grad-icon" x1="100%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FFFF; stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FFC107; stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#grad-icon)"
                        d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256m131.83 176H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432M147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91m65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89" />
                </svg>
            </div>
            <div class="leading-tight">
                <h1 class="text-white font-subtitle font-semibold text-2xl">Ikatan Alumni<br>dan Bursa<br>Lowongan<br>Kerja
                </h1>
            </div>
        </div>

        {{-- Card 3 --}}
        <div
            class="flex justify-center py-4 px-8 gap-7 bg-secondary rounded-4xl drop-shadow-default hover:bg-black border-b-2 border-white">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="" height="100" viewBox="0 0 24 24">
                    <defs>
                        <linearGradient id="grad-icon" x1="100%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FFFF; stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#FFC107; stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#grad-icon)"
                        d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1m-7 8v-4h-4v4H7V4h10v14z" />
                    <path fill="url(#grad-icon)" d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z" />
                </svg>
            </div>
            <div class="flex items-center">
                <h1 class="text-white font-subtitle font-semibold text-2xl">E - Perpus <br> Online</h1>
            </div>
        </div>
    </div>

    {{-- Berita --}}
    @include('components.berita')

    <div class="max-w-8xl px-10 mx-auto">
        <hr class="border-t-2 py-5  border-primary">
    </div>

    @include('components.galeri')

@endsection
