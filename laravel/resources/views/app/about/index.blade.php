<x-app-layout>
    <div class="my-32 px-5 grid grid-cols-1 lg:grid-cols-3 lg:gap-x-5 gap-y-5">
        <img class="rounded-2xl size-full object-cover" src={{asset('images/about.jpg')}} alt="">
        <div class="col-span-2 h-full max-w-4xl flex flex-col justify-center">
            <h1 class="text-4xl font-bold mb-10">ABOUT SHAROEL STUDIO</h1>
            <p class="mb-5">{{__('about_description_intro')}}</p>
            <p class="mb-5">{{__('about_description_story')}}</p>
            <p class="mb-5">{{__('about_description_experience')}}</p>
            <p class="mb-5">{{__('about_description_services')}}</p>
            <p class="mb-5">{{__('about_description_closing')}}</p>
        </div>
    </div>
</x-app-layout>
