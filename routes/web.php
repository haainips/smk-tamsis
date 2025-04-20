<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('home');

#About
Route::view('/about/kepala-sekolah', 'about.kepala-sekolah')->name('kepala-sekolah');
Route::view('/sejarah', 'about.sejarah')->name('sejarah');
Route::view('/visi-misi', 'about.visi-misi')->name('visi-misi');
Route::view('/struktur-organisasi', 'about.struktur-organisasi')->name('struktur-organisasi');

#Jurusan
Route::view('/jurusan/TITL', 'jurusan.jurusan-titl')->name('titl');
Route::view('/jurusan/RPL', 'jurusan.jurusan-rpl')->name('rpl');
Route::view('/jurusan/TKR', 'jurusan.jurusan-tkr')->name('tkr');
Route::view('/jurusan/DKV', 'jurusan.jurusan-dkv')->name('dkv');
Route::view('/jurusan/TSM', 'jurusan.jurusan-tsm')->name('tsm');

#Program
Route::view('/program/kurikulum', 'program.kurikulum')->name('kurikulum');
Route::view('/program/humas', 'program.humas')->name('humas');
Route::view('/program/kesiswaan', 'program.kesiswaan')->name('kesiswaan');
Route::view('/program/sarpras', 'program.sarpras')->name('sarpras');
Route::view('/program/ekstrakurikuler', 'program.ekstrakurikuler')->name('ekstrakurikuler');

#Berita
Route::view('/berita-1', 'berita.berita-1')->name('berita1');
Route::view('/berita-2', 'berita.berita-2')->name('berita2');
Route::view('/berita-3', 'berita.berita-3')->name('berita3');

