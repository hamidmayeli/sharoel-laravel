<div>
    <div class="columns-1 md:columns-2 lg:columns-3 gap-4 space-y-4">
        @foreach ($images as $image)
            <div class="relative group" x-data="{ shown: false }" x-intersect.once="shown = true">
                <img src="{{$image->getFirstMedia('images')?->getUrl()}}" class="w-full aspect-auto object-cover shadow-lg cursor-pointer"
                     x-show="shown"
                     x-transition:enter="transition linear duration-700"
                     x-transition:enter-start="opacity-0 scale-50"
                     x-transition:enter-end="opacity-100 scale-100">
            </div>
        @endforeach
    </div>
    @if($currentPage?->hasMorePages())
        <div
            x-data="{
                observe() {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                @this.call('loadMore');
                            }
                        });
                    });

                    observer.observe(this.$el);
                }
            }"
            x-init="observe"
            class="h-4">
        </div>
        @endif

</div>
