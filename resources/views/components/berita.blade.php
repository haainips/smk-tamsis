<div class="px-4 sm:px-6 md:px-10 py-10">
    <div class="flex flex-col py-6 px-4 sm:px-6 md:px-8 bg-[#107A9B2E] rounded-lg">
        <div class="flex flex-wrap justify-between items-center">
            <p class="text-black font-subtitle font-semibold text-2xl sm:text-2xl">Berita Terbaru</p>
            <a href="{{ route('berita') }}" class="text-black font-subtitle text-xs md:text-sm hover:underline mt-2 sm:mt-0">Lihat
                Semua Berita</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 px-6 md:px-2 md:gap-6 py-3 mt-6">
            <div class="space-y-3">
                <img src="{{ asset('images/berita1.png') }}" alt="" class="w-full rounded-2xl">
                <h2 class="font-subtitle text-base sm:text-lg">Pesantren Ramadan 1446 Hijriah Kelas X SMK Tamansiswa
                    Jetis Yogyakarta</h2>
                <p class="text-gray-600 font-subtitle text-sm">Kamis, 14 Januari 2025</p>
                <a href="{{ route('berita1') }}"
                    class="inline-block w-full py-2 mt-3 text-white font-subtitle border border-white bg-secondary drop-shadow-default rounded-full hover:bg-black transition text-center">
                    Lihat Berita
                </a>
            </div>

            <div class="space-y-1 md:space-y-3">
                <img src="{{ asset('images/berita2.png') }}" alt="" class="w-full rounded-2xl">
                <h2 class="font-subtitle text-base sm:text-lg mt-2">Alumni Mengajar: Wadah Berbagi Inspirasi Sekaligus Mempererat Silaturahmi</h2>
                <p class="text-gray-600 font-subtitle text-sm">Kamis, 14 Januari 2025</p>
                <a href="{{ route('berita2') }}"
                    class="inline-block w-full py-2 mt-3 text-white font-subtitle border border-white bg-secondary drop-shadow-default rounded-full hover:bg-black transition text-center">
                    Lihat Berita
                </a>
            </div>

            <div class="space-y-3">
                <img src="{{ asset('images/berita3.png') }}" alt="" class="w-full rounded-2xl">
                <h2 class="font-subtitle text-base sm:text-lg">Pramuka SMK Tamansiswa Jetis Jejakkan Kaki di PDT ke-53</h2>
                <p class="text-gray-600 font-subtitle text-sm">Kamis, 14 Januari 2025</p>
                <a href="{{ route('berita3') }}"
                    class="inline-block w-full py-2 mt-3 text-white font-subtitle border border-white bg-secondary drop-shadow-default rounded-full hover:bg-black transition text-center">
                    Lihat Berita
                </a>
            </div>
        </div>
    </div>
</div>
