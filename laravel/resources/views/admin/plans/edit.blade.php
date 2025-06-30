<x-admin-dashboard-layout>
    <div class="w-full h-full flex items-center justify-center mx-auto p-6">
        <div class="w-full max-w-96">
            <h2 class="text-2xl font-bold mb-4 text-title uppercase text-center relative">
                <span>{{$plan->name}}</span>
                <a href="{{route('admin.plans.index')}}" class="absolute left-0 inset-y-0 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
</svg>
</a>
            </h2>
            <form method="post" class="mt-6 space-y-6" action="{{route('admin.plans.update',["plan"=>$plan->id])}}" >
                @csrf
                @method('patch')
                <div>
                    <x-input-label for="price" :value="__('price')" />
                    <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" value="{{old('price',$plan->price)}}" autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('price')" />
                </div>
                <div>
                    <x-input-label for="discounted_price" :value="__('discounted price')" />
                    <x-text-input id="discounted_price" name="discounted_price" type="text" class="mt-1 block w-full" value="{{old('discounted_price',$plan->discounted_price)}}" />
                    <x-input-error class="mt-2" :messages="$errors->get('discounted_price')" />
                </div>
                <div>
                    <div class="flex gap-5">
                        <input id="is_discounted" name="is_discounted" type="checkbox" class="mt-1 block" value="1" {{ old('is_discounted', $plan->is_discounted) ? 'checked' : '' }} />
                        <x-input-label for="is_discounted" :value="__('Is the plan discounted?')" />
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('is_discounted')" />
                </div>
                <div>
                    <x-input-label for="discount_text_en" :value="__('discount text in English')" />
                    <x-text-input id="discount_text_en" name="discount_text_en" type="text" class="mt-1 block w-full" value="{{old('discount_text_en',$plan->discount_text_en)}}" />
                    <x-input-error class="mt-2" :messages="$errors->get('discount_text_en')" />
                </div>
                <div>
                    <x-input-label for="discount_text_fa" :value="__('discount text Persian')" />
                    <x-text-input id="discount_text_fa" name="discount_text_fa" type="text" class="mt-1 block w-full" value="{{old('discount_text_fa',$plan->discount_text_fa)}}" />
                    <x-input-error class="mt-2" :messages="$errors->get('discount_text_fa')" />
                </div>
                <div>
                    <x-input-label for="discount_text_de" :value="__('discount text German')" />
                    <x-text-input id="discount_text_de" name="discount_text_de" type="text" class="mt-1 block w-full" value="{{old('discount_text_de',$plan->discount_text_de)}}" />
                    <x-input-error class="mt-2" :messages="$errors->get('discount_text_de')" />
                </div>
                <button class="w-full py-3 bg-primary text-on-primary uppercase rounded-lg">{{ __('Save') }}</button>
            </form>
        </div>
    </div>

</x-admin-dashboard-layout>
