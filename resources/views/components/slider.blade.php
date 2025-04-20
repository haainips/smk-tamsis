<script>
    function slider() {
        return {
            activeSlide: 0,
            slides: [
                { image: '{{ asset('images/slider1.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider2.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider3.png') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider4.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' },
                { image: '{{ asset('images/slider5.jpg') }}', caption: 'SMK Tamansiswa Jetis Yogyakarta' }
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


<div x-data="slider()" class="relative overflow-hidden rounded-2xl mt-4 h-[450px] drop-shadow-default">
  <div class="flex transition-transform duration-700 ease-in-out"
       :style="`transform: translateX(-${activeSlide * 100}%);`">
    <template x-for="(slide, index) in slides" :key="index">
      <div class="w-full flex-shrink-0 h-[450px] relative">
        <img :src="slide . image" alt="" class="w-full h-[450px] object-cover" />
        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
          <h2 class="text-white font-title text-6xl opacity-80 drop-shadow-default" x-text="slide.caption"></h2>
        </div>
      </div>
    </template>
  </div>

  <button @click="prev" class="absolute left-8 top-1/2 -translate-y-1/2 bg-white rounded-full px-4 py-2">&#10094;</button>
  <button @click="next" class="absolute right-8 top-1/2 -translate-y-1/2 bg-white rounded-full px-4 py-2">&#10095;</button>

  <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
    <template x-for="(slide, index) in slides" :key="index">
      <button @click="activeSlide = index" :class="activeSlide === index ? 'bg-white' : 'bg-gray-400'" class="w-3 h-3 rounded-full"></button>
    </template>
  </div>
</div>
