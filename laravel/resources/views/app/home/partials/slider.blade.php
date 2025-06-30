<div x-data="carousel({{ json_encode($sliderImages->count()) }})" class="relative w-full mx-auto overflow-hidden">
    <div
        class="flex transition-transform duration-500 ease-in-out"
        :style="{ transform: `translateX(${(dir === 'ltr' ? -1 : 1) * page * 100}%)` }"
    >
        @foreach($sliderImages as $image)
            <div class="w-full md:w-1/3 flex-shrink-0 md:p-2">
                {{$image->getFirstMedia('images')?->img()->attributes(['class'=>["w-full aspect-square object-cover md:rounded-lg shadow-md"]])}}
            </div>
        @endforeach
    </div>

    <!-- Navigation Buttons -->
    <button @click="prev"
            class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600" lang="en">
        &lt;
    </button>
    <button @click="next"
            class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600"  lang="en">
        &gt;
    </button>
</div>

<script>
    function carousel(count) {
        const autoTimer = 7000
        return {
            count: count,
            page: 0,
            pageItems: 1,
            timer: null,
            dir: window.getComputedStyle(document.documentElement).direction || 'ltr', // Detect direction
            init() {
                this.setResponsivePageItems();
                window.addEventListener('resize', this.setResponsivePageItems);
                this.startAutoSlide();
            },
            setResponsivePageItems() {
                this.pageItems = window.innerWidth >= 768 ? 3 : 1;
            },
            startAutoSlide() {
                this.timer = setInterval(() => this.next(), autoTimer);
            },
            stopAutoSlide() {
                clearInterval(this.timer);
            },
            prev() {
                this.stopAutoSlide();
                this.page = (this.page > 0) ? this.page - 1 : Math.ceil(count / this.pageItems) - 1;
                this.startAutoSlide();
            },
            next() {
                this.stopAutoSlide();
                this.page = (this.page < Math.ceil(count / this.pageItems)  - 1) ? this.page + 1 : 0;
                this.startAutoSlide();
            },
        };
    }
</script>
