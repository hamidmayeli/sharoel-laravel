<x-admin-dashboard-layout>
    <div class="w-full h-full flex items-center justify-center mx-auto p-6">
        <div class="w-full max-w-96">
            <h2 class="text-2xl font-bold mb-4 text-title uppercase text-center relative">
                <span>new file</span>
                <a href="{{route('admin.gallery.index')}}" class="absolute left-0 inset-y-0 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </a>
            </h2>
            <form method="post" enctype="multipart/form-data" class="mt-6 space-y-6" action="{{route('admin.gallery.store')}}" >
                @csrf
                <div>
                    <x-input-label for="category" :value="__('category')" />
                    <select name="category" id="category" class="w-full mt-1">
                        @foreach ($categories as $category)
                            <option value="{{$category->slug}}">{{_($category->slug)}}</option>
                        @endforeach
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('category')" />
                </div>
                <div>
                    <x-input-label for="image" :value="__('image')" />
                    <input type="file" name="image" >
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>
                <button class="w-full py-3 bg-primary text-on-primary uppercase rounded-lg">{{ __('Save') }}</button>
            </form>
        </div>
    </div>

</x-admin-dashboard-layout>
