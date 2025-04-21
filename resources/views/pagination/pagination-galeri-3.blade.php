@php
    $berita = [
        ['gambar' => 'galeri1.jpeg'],
        ['gambar' => 'galeri2.jpeg'],
        ['gambar' => 'galeri3.jpeg'],
        ['gambar' => 'galeri4.jpeg'],
        ['gambar' => 'galeri5.jpeg'],
        ['gambar' => 'galeri6.jpeg'],
        ['gambar' => 'galeri7.jpeg'],
        ['gambar' => 'galeri8.jpeg'],
        ['gambar' => 'galeri9.jpeg'],
        ['gambar' => 'galeri10.jpeg'],
        ['gambar' => 'galeri11.jpeg'],
        ['gambar' => 'galeri12.jpeg'],
        // dst...
    ];
@endphp

@extends('layouts.main')

@section('title', 'Lokasi Sekolah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="max-w-8xl mx-auto">
        <div class="flex flex-col justify-center py-14 items-center ">
            <h1 class="text-3xl font-title pb-10">Galeri SMK Tamsis YK</h1>
            <div class="bg-[#107A9B2E] py-6 px-8 rounded-lg drop-shadow-default">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-14">
                    @foreach ($berita as $item)
                        <div class="">
                            <img src="{{ asset('images/galeri/' . $item['gambar']) }}" alt="{{ $item['gambar'] }}"
                                class="w-full h-48 object-cover rounded-xl">
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- Pagination Static --}}
            <div class="flex justify-center space-x-2 py-4">
                <a href="{{ route('galeri') }}"
                class="px-3 py-1 border border-gray-300 rounded-xl bg-white hover:bg-gray-200">1</a>
                <a href="{{ route('pagination-galeri-2') }}"
                class="px-3 py-1 border border-gray-300 rounded-xl bg-white hover:bg-gray-200">2</a>
                <a href="#" class="px-3 py-1 border border-gray-300 rounded-xl bg-sign text-white">3</a>
            </div>
        </div>
    </div>

@endsection
