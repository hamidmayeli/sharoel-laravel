<div>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-5 p-5">
            <h1 class="text-2xl font-bold mb-4">{{__('Files')}}</h1>
            <div>
                <a href="{{route('admin.gallery.create')}}"
                   class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                    New File
                </a>
            </div>
        </div>
        <div class="mb-8">
            <select  wire:model.live="cat" class="block w-80 border border-gray-300 rounded px-4 py-2">
                <option value="">{{ __('All Categories') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->slug }}">{{ _($category->slug) }}</option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            @foreach($images as $image)
                <div class="w-full aspect-square relative group">
                    <img class="rounded-xl w-full aspect-square object-cover" src="{{$image->getFirstMedia('images')?->getUrl()}}" alt="">
                    <div class="flex items-center justify-center absolute inset-0 bottom-0 gap-3 opacity-0 group-hover:opacity-100 transition-opacity bg-black/20">
                        <button class="bg-danger size-10 flex items-center justify-center text-on-danger rounded-xl shadow-sm" wire:click="delete({{$image->id}})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                        @if($image->mainImageOf)
                            <button class="size-10 bg-slate-600 flex items-center justify-center rounded-xl shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-yellow-300">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        @else
                            <button class="size-10 bg-slate-600 flex items-center justify-center rounded-xl shadow-sm" wire:click="make_it_main_image({{$image->id}})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fill-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        {{ $images->links(data: ['scrollTo' => false]) }}
    </div>
</div>
