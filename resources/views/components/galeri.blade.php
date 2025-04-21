<div class="max-w-8xl mx-auto px-14">
    <div class="flex flex-col ">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-subtitle font-semibold">Galeri SMK Tamsis YK</h1>
            <a href="{{ route('galeri') }}" class="font-subtitle hover:underline">Lihat Semua Galeri</a>
        </div>
        <div class="py-4">
            @include('components.slider-galeri')
        </div>
    </div>
</div>