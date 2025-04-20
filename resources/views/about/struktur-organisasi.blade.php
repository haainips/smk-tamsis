@extends('layouts.main')

@section('title', 'SMK Tamansiswa Jetis Yogyakarta')

@section('content')
    @include('components.slider')
    <div class="flex flex-col justify-center py-8 items-center gap-8">
        <span class="font-title text-3xl text-center">STRUKTUR ORGANISASI</span>
        <img src="{{ asset('images/struktur-organisasi.png') }}" alt="" width="1000px">
    </div>
    <hr class="border-t-4 my-8 border-primary">
    @include ('components.berita')
@endsection