<header>
    <nav class="bg-primary text-white font-racing px-6 py-5 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/icons/logo1.png') }}" alt="Logo" class="h-18">
            <span class="text-2xl font-title">SMK Tamansiswa Jetis <br>Yogyakarta</span>
        </div>
    
        <!-- Menu -->
        <ul class="flex items-center space-x-6 px-6">
            <li><a href="{{route('home')}}" class="hover:underline font-subtitle font-semibold text-xl">Beranda</a></li>
            <div class="relative group">
                <div class="flex items-center gap-2">
                    <button class="flex items-center font-subtitle font-semibold text-xl hover:underline">Tentang</button>
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="">
                </div>
                <div class="absolute z-10 hidden group-hover:block bg-slight text-white rounded-b-xl shadow w-60">
                    <a href="{{route('kepala-sekolah')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">Sambutan Kepala Sekolah</a>
                    <a href="{{route('sejarah')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">Sejarah</a>
                    <a href="{{route('visi-misi')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">Visi Misi</a>
                    <a href="{{route('struktur-organisasi')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold rounded-b-xl">Struktur Organisasi</a>
                </div>
            </div>
            <div class="relative group">
                <div class="flex items-center gap-2">
                    <button class="flex items-center font-subtitle font-semibold text-xl">Jurusan Dibuka</button>
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="">
                </div>
                <div class="absolute z-10 hidden group-hover:block bg-slight text-white rounded-b-xl shadow w-52">
                    <a href="{{route('titl')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">TITL</a>
                    <a href="{{route('rpl')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">RPL</a>
                    <a href="{{route('tkr')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">TKR</a>
                    <a href="{{route('dkv')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">DKV</a>
                    <a href="{{route('tsm')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold rounded-b-xl">TSM</a>
                </div>
            </div>
            <div class="relative group">
                <div class="flex items-center gap-2">
                    <button class="flex items-center font-subtitle font-semibold text-xl">Program</button>
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="">
                </div>
                <div class="absolute z-10 hidden group-hover:block bg-slight text-white rounded-b-xl shadow w-52">
                    <a href="{{route('kurikulum')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">WK. KURIKULUM</a>
                    <a href="{{route('humas')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">WK. HUMAS</a>
                    <a href="{{route('kesiswaan')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">WK. KESISWAAN</a>
                    <a href="{{route('sarpras')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold">WK. SARPRAS</a>
                    <a href="{{route('ekstrakurikuler')}}" class="block px-4 py-2 hover:bg-white hover:text-primary border text-lg font-subtitle font-semibold rounded-b-xl">EKSTRAKURIKULER</a>
                </div>
            </div>
            <li><a href="#" class="hover:underline font-subtitle font-semibold text-xl">Berita</a></li>
            <li><a href="#" class="hover:underline font-subtitle font-semibold text-xl">Galeri</a></li>
            <li><a href="#" class="hover:underline font-subtitle font-semibold text-xl">Kontak</a></li>
        </ul>
    </nav>

</header>