<header>
    <nav class="bg-primary text-white font-racing px-6 py-5 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/icons/logo1.png') }}" alt="Logo" class="h-14 md:h-18">
            <a href="{{ route('home') }}" class="text-xl md:text-2xl font-title">SMK Tamansiswa Jetis <br>Yogyakarta</a>
        </div>

        <!-- Hamburger -->
        <button id="menu-toggle" class="lg:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Menu Desktop -->
        <ul class="hidden lg:flex items-center space-x-6 px-4">
            <li><a href="{{ route('home') }}" class="hover:underline font-subtitle font-semibold text-md">Beranda</a>
            </li>

            <li class="relative group">
                <button class="flex items-center font-subtitle font-semibold text-lg hover:underline gap-1">Tentang
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="" class="w-3">
                </button>
                <div class="absolute z-10 hidden group-hover:block bg-primary text-white rounded-b-xl shadow w-60">
                    <a href="{{ route('kepala-sekolah') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">Sambutan
                        Kepala
                        Sekolah</a>
                    <a href="{{ route('sejarah') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">Sejarah</a>
                    <a href="{{ route('visi-misi') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">Visi
                        Misi</a>
                    <a href="{{ route('struktur-organisasi') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle rounded-b-xl font-semibold">Struktur
                        Organisasi</a>
                </div>
            </li>

            <li class="relative group">
                <button class="flex items-center font-subtitle font-semibold text-md gap-1">Jurusan Dibuka
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="" class="w-3">
                </button>
                <div class="absolute z-10 hidden group-hover:block bg-primary text-white rounded-b-xl shadow w-52">
                    <a href="{{ route('titl') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">TITL</a>
                    <a href="{{ route('rpl') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">RPL</a>
                    <a href="{{ route('tkr') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">TKR</a>
                    <a href="{{ route('dkv') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">DKV</a>
                    <a href="{{ route('tsm') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle rounded-b-xl font-semibold">TSM</a>
                </div>
            </li>

            <li class="relative group">
                <button class="flex items-center font-subtitle font-semibold text-md gap-1">Program
                    <img src="{{ asset('images/icons/icon-dropdown.png') }}" alt="" class="w-3">
                </button>
                <div class="absolute z-10 hidden group-hover:block bg-primary text-white rounded-b-xl shadow w-52">
                    <a href="{{ route('kurikulum') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">WK.
                        KURIKULUM</a>
                    <a href="{{ route('humas') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">WK.
                        HUMAS</a>
                    <a href="{{ route('kesiswaan') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">WK.
                        KESISWAAN</a>
                    <a href="{{ route('sarpras') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle font-semibold">WK.
                        SARPRAS</a>
                    <a href="{{ route('ekstrakurikuler') }}"
                        class="block px-4 py-2 hover:bg-white hover:text-primary border font-subtitle rounded-b-xl font-semibold">EKSTRAKURIKULER</a>
                </div>
            </li>

            <li><a href="{{ route('berita') }}" class="hover:underline font-subtitle font-semibold text-md">Berita</a>
            </li>
            <li><a href="{{ route('galeri') }}" class="hover:underline font-subtitle font-semibold text-md">Galeri</a>
            </li>
            <li><a href="#footer" class="hover:underline font-subtitle font-semibold text-md">Kontak</a></li>
        </ul>

        <!-- Menu Mobile -->
        <div id="mobile-menu"
            class="hidden lg:hidden absolute md:top-24 left-0 w-full bg-primary text-white z-50 p-6 space-y-6">
            <a href="{{ route('home') }}" class="block font-subtitle font-semibold text-xl">Beranda</a>

            <!-- Tentang -->
            <button class="w-full flex justify-between items-center font-subtitle font-semibold text-xl"
                onclick="toggleDropdown('tentang-dropdown')">
                Tentang
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="tentang-dropdown" class="hidden space-y-1 pl-4 text-lg">
                <a href="{{ route('kepala-sekolah') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">Sambutan
                    Kepala Sekolah</a>
                <a href="{{ route('sejarah') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">Sejarah</a>
                <a href="{{ route('visi-misi') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">Visi
                    Misi</a>
                <a href="{{ route('struktur-organisasi') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">Struktur
                    Organisasi</a>
            </div>

            <!-- Jurusan Dibuka -->
            <button class="w-full flex justify-between items-center font-subtitle font-semibold text-xl"
                onclick="toggleDropdown('jurusan-dropdown')">
                Jurusan Dibuka
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="jurusan-dropdown" class="hidden space-y-1 pl-4 text-lg">
                <a href="{{ route('titl') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">TITL</a>
                <a href="{{ route('rpl') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">RPL</a>
                <a href="{{ route('tkr') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">TKR</a>
                <a href="{{ route('dkv') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">DKV</a>
                <a href="{{ route('tsm') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">TSM</a>
            </div>

            <!-- Program -->
            <button class="w-full flex justify-between items-center font-subtitle font-semibold text-xl"
                onclick="toggleDropdown('program-dropdown')">
                Program
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="program-dropdown" class="hidden space-y-1 pl-4 text-lg">
                <a href="{{ route('kurikulum') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">WK.
                        KURIKULUM</a>
                <a href="{{ route('humas') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">WK.
                        HUMAS</a>
                <a href="{{ route('kesiswaan') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">WK.
                        KESISWAAN</a>
                <a href="{{ route('sarpras') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">WK.
                        SARPRAS</a>
                <a href="{{ route('ekstrakurikuler') }}"
                    class="block font-subtitle font-semibold hover:bg-white hover:text-primary rounded-xl px-2 py-2">EKSTRAKURIKULER</a>
            </div>
            <a href="{{ route('berita') }}" class="block font-subtitle font-semibold text-xl">Berita</a>
            <a href="{{ route('galeri') }}" class="block font-subtitle font-semibold text-xl">Galeri</a>
            <a href="#footer" class="block font-subtitle font-semibold text-xl">Kontak</a>
        </div>
    </nav>
</header>

<script>
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>
