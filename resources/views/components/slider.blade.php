<script>
    function slider() {
        return {
            activeSlide: 0,
            slides: [
                { image: '{{ asset('images/slider1.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta', position: 'object-[60%_60%]' },
                { image: '{{ asset('images/slider2.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider3.png') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider4.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider5.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta', position: 'object-[50%_30%]' }
            ],
            next() {
                this.activeSlide = (this.activeSlide + 1) % this.slides.length
            },
            prev() {
                this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length
            }
        }
    }
</script>

<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-10">
  <div x-data="slider()" class="relative overflow-hidden rounded-2xl mt-4 h-[250px] sm:h-[300px] md:h-[350px] lg:h-[400px] drop-shadow-default">
    <div class="flex transition-transform duration-700 ease-in-out"
         :style="`transform: translateX(-${activeSlide * 100}%);`">
      <template x-for="(slide, index) in slides" :key="index">
        <div class="w-full flex-shrink-0 h-[250px] sm:h-[300px] md:h-[350px] lg:h-[400px] relative">
          <img :src="slide.image" alt=""
            class="w-full h-full object-cover rounded-2xl"
            :class="slide.position ?? 'object-center'" />
          <div class="absolute inset-0 flex items-center justify-center bg-black/40">
            <h2 class="text-white font-title text-xl sm:text-3xl md:text-4xl lg:text-5xl opacity-80 drop-shadow-default text-center px-4"
                x-text="slide.caption"></h2>
          </div>
        </div>
      </template>
    </div>

    <!-- Tombol navigasi -->
    <button @click="prev"
      class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 bg-white rounded-full py-1 px-2 sm:p-3 shadow transition hover:bg-gray-100">
      &#10094;
    </button>
    <button @click="next"
      class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 bg-white rounded-full py-1 px-2 sm:p-3 shadow transition hover:bg-gray-100">
      &#10095;
    </button>

    <!-- Pagination Bullet -->
    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex space-x-2">
      <template x-for="(slide, index) in slides" :key="index">
        <button @click="activeSlide = index"
          :class="activeSlide === index ? 'bg-white' : 'bg-gray-400'"
          class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full transition"></button>
      </template>
    </div>
  </div>
</div>


