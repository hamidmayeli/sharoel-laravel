<x-app-layout title="{{__('gallery_title')}}" description="{{__('gallery_description')}}">
    <div class="container mx-auto px-4 py-8 mt-32">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold text-center mb-2 capitalize">{{__('our gallery')}}</h1>
            <p class="mb-8 w-full lg:w-1/2 text-center">{{__('gallery_intro')}}</p>
        </div>
        <livewire:infinite-image-list />
    </div>
</x-app-layout>
