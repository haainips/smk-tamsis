@extends('layouts.main')

@section('title', 'Berita Terbaru - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="py-10 space-y-4">
        <h1 class="font-title text-4xl text-center">Alumni Mengajar: Wadah Berbagi Inspirasi Sekaligus Mempererat Silaturahmi</h1>
        <p class="font-subtitle text-xl text-center">Diterbitkan pada : Mar 10, 2025 - 15:30 WIB</p>
        <div class="flex justify-center">
            <img src="{{ asset('images/berita-1.jpg') }}" alt="" width="1000px" class="" class=" rounded-2xl">
        </div>
    </div>
@endsection