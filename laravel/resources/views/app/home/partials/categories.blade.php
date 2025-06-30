
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-5 gap-5">
    @foreach($categories as $category)
        <a href="{{route('categories.show',$category)}}" class="relative aspect-[3/4] rounded-xl overflow-hidden group">
            <img src={{$category->mainImage?->getFirstMedia('images')?->getUrl()}} alt=""
                 class="size-full  object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 cursor-pointer">
            <div class="absolute inset-0 p-3 bg-primary/20 group-hover:bg-primary/5 transition-ally duration-300 flex flex-col justify-between group">
                <span class="block p-2 text-on-primary font-bold md:text-2xl uppercase">{{__($category->slug)}}</span>
                <div class="flex justify-center w-full">
                    <span class="text-on-primary font-bold md:text-2xl capitalize flex items-center gap-1 group-hover:animate-pulse border border-white p-5 rounded">
                    <span class="uppercase">{{__('view_more')}}</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 {{LaravelLocalization::getCurrentLocale() === 'fa' ? "rotate-180" : ""}}">
  <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
</svg>
</span>
                </span>
                </div>
            </div>
        </a>
    @endforeach
</div>
