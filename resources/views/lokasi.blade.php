@extends('layouts.main')

@section('title', 'Lokasi Sekolah - SMK Tamansiswa Jetis Yogyakarta')

@section('content')

    @include('components.slider')

    <div class="lg:flex items-center justify-center py-20 gap-10  px-10 md:px-10">
        <span class="space-y-4 w-1/2 text-center">
            <h1 class="font-title text-2xl md:text-3xl text-center pb-4">LOKASI SEKOLAH</h1>
            <div class="flex gap-4 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="" viewBox="0 0 256 367">
                    <path fill="#34a853"
                        d="M70.585 271.865a371 371 0 0 1 28.911 42.642c7.374 13.982 10.448 23.463 15.837 40.31c3.305 9.308 6.292 12.086 12.714 12.086c6.998 0 10.173-4.726 12.626-12.035c5.094-15.91 9.091-28.052 15.397-39.525c12.374-22.15 27.75-41.833 42.858-60.75c4.09-5.354 30.534-36.545 42.439-61.156c0 0 14.632-27.035 14.632-64.792c0-35.318-14.43-59.813-14.43-59.813l-41.545 11.126l-25.23 66.451l-6.242 9.163l-1.248 1.66l-1.66 2.078l-2.914 3.319l-4.164 4.163l-22.467 18.304l-56.17 32.432z" />
                    <path fill="#fbbc04"
                        d="M12.612 188.892c13.709 31.313 40.145 58.839 58.031 82.995l95.001-112.534s-13.384 17.504-37.662 17.504c-27.043 0-48.89-21.595-48.89-48.825c0-18.673 11.234-31.501 11.234-31.501l-64.489 17.28z" />
                    <path fill="#4285f4"
                        d="M166.705 5.787c31.552 10.173 58.558 31.53 74.893 63.023l-75.925 90.478s11.234-13.06 11.234-31.617c0-27.864-23.463-48.68-48.81-48.68c-23.969 0-37.735 17.475-37.735 17.475v-57z" />
                    <path fill="#1a73e8"
                        d="M30.015 45.765C48.86 23.218 82.02 0 127.736 0c22.18 0 38.89 5.823 38.89 5.823L90.29 96.516H36.205z" />
                    <path fill="#ea4335"
                        d="M12.612 188.892S0 164.194 0 128.414c0-33.817 13.146-63.377 30.015-82.649l60.318 50.759z" />
                </svg>
                <a href="https://maps.app.goo.gl/5ugeVVGyP8PT5vUW8"
                    class="font-subtitle text-md md:text-lg font-semibold hover:underline" target="_blank">SMK Tamansiswa
                    Jetis Yogyakarta</a>
            </div>
            <p class="font-subtitle text-md md:text-lg">Jl. Pakuningratan No.34A, Cokrodiningratan, Kec. Jetis, Kota
                Yogyakarta, Daerah
                Istimewa Yogyakarta 55233</p>
            <div class="lg:flex items-center justify-center">
                <a href="https://maps.app.goo.gl/1KTXmjoA7HLwKQW98" target="_blank" rel="noopener noreferrer"
                    class="border flex gap-2 font-subtitle max-w-md text-white border-black bg-secondary drop-shadow-default rounded-full mt-5 px-4 py-1 hover:bg-white hover:text-[#02807F] transition justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                    </svg>Buka di Google Maps
                </a>
                
            </div>
        </span>
        <div class="hidden lg:block">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0877731619025!2d110.363906!3d-7.780518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5839811988ef%3A0xc1047e227e7ffb0e!2sTamansiswa%20Vocational%20High%20School%20Jetis!5e0!3m2!1sen!2sid!4v1745181891992!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=" lg:hidden pt-10">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0877731619025!2d110.363906!3d-7.780518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5839811988ef%3A0xc1047e227e7ffb0e!2sTamansiswa%20Vocational%20High%20School%20Jetis!5e0!3m2!1sen!2sid!4v1745181891992!5m2!1sen!2sid"
                width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
