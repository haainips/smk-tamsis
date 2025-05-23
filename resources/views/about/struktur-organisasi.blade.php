@extends('layouts.main')

@section('title', 'Struktur Organisasi - SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col justify-center py-8 items-center gap-8 px-10 ">
        <span class="font-title text-xl md:text-3xl text-center">STRUKTUR ORGANISASI</span>
        <img src="{{ asset('images/struktur-organisasi.png') }}" alt="" width="900px">
    </div>
    <hr class="border-t-4 m-8 border-primary">
    @include ('components.berita')
@endsection