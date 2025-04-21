<div x-data="{
    active: 0,
    slides: ['/images/galeri/galeri1.jpeg', '/images/galeri/galeri2.jpeg', '/images/galeri/galeri3.jpeg','/images/galeri/galeri1.jpeg', '/images/galeri/galeri2.jpeg', '/images/galeri/galeri3.jpeg'],
    startX: 0,
    currentX: 0,
    isDragging: false,
    slideWidth: 40, // 1/3 of container
    next() {
        this.active = Math.min(this.active + 1, this.slides.length - 1);
    },
    prev() {
        this.active = Math.max(this.active - 1, 0);
    },
    swipeStart(e) {
        this.startX = e.touches ? e.touches[0].clientX : e.clientX;
        this.currentX = this.active * this.slideWidth;
        this.isDragging = true;
    },
    swipeMove(e) {
        if (!this.isDragging) return;
        const x = e.touches ? e.touches[0].clientX : e.clientX;
        const diff = (this.startX - x) / (window.innerWidth / 100);
        this.currentX = Math.max(
            Math.min(
                this.active * this.slideWidth + diff,
                (this.slides.length - 1) * this.slideWidth
            ),
            0
        );
    },
    swipeEnd() {
        if (!this.isDragging) return;
        this.isDragging = false;
        
        // Calculate which slide to snap to based on current position
        const targetSlide = Math.round(this.currentX / this.slideWidth);
        this.active = Math.max(0, Math.min(targetSlide, this.slides.length - 1));
        this.currentX = this.active * this.slideWidth;
    },
    getTransform() {
        // When dragging, use currentX for smooth dragging, otherwise use active slide
        return this.isDragging ? 
            `translateX(-${this.currentX}%)` : 
            `translateX(-${this.active * this.slideWidth}%)`;
    }
}" class="overflow-hidden relative w-full select-none">

    <div class="flex gap-4 transition-transform duration-300 ease-out cursor-grab" 
         :class="{'cursor-grabbing': isDragging, 'transition-none': isDragging}" 
         :style="`transform: ${getTransform()}`"
         @touchstart="swipeStart" 
         @touchmove="swipeMove" 
         @touchend="swipeEnd"
         @mousedown="swipeStart"
         @mousemove="swipeMove" 
         @mouseup="swipeEnd" 
         @mouseleave="swipeEnd">

        <template x-for="(slide, index) in slides" :key="index">
            <div class="flex-shrink-0" :style="`width: ${slideWidth}%`">
                <img :src="slide" alt="" class="w-full h-[300px] object-cover rounded-xl pointer-events-none">
            </div>
        </template>
    </div>
</div>