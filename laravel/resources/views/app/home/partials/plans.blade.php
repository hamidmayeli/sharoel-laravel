@php
    $basic = $plans->firstWhere('name', 'basic');
    $silver = $plans->firstWhere('name', 'silver');
    $gold = $plans->firstWhere('name', 'gold');
    $videography = $plans->firstWhere('name', 'videography');
@endphp
<div class="relative overflow-hidden">
    <img class="hidden xl:block absolute inset-0" src={{asset('images/plans.jpg')}} alt="">
    <div class="hidden xl:block absolute inset-0 backdrop-blur"></div>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 p-5 gap-5 relative z-10 max-w-screen-2xl">
            <div class="w-full flex flex-col bg-surface border rounded-2xl p-4 space-y-5">
                <div class="flex flex-col px-4 border-b">
                    <div class="flex justify-center mb-2">
                        <span class="text-center text-2xl font-black uppercase">{{__('basic')}}</span>
                    </div>
                    @if($basic->is_discounted)
                        <div class="flex text-rose-500 text-sm justify-center font-bold gap-2 mb-4">
                        <div>
                            @switch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())
                                @case('en')
                                    {{$basic->discount_text_en}}
                                    @break
                                @case('fa')
                                    {{$basic->discount_text_fa}}
                                    @break
                                @case('de')
                                    {{$basic->discount_text_de}}
                                    @break
                            @endswitch
                        </div>
                    </div>
                    @endif
                    @if($basic->is_discounted)
                    <div class="flex gap-4 items-center mb-4">
                        <div class="flex font-bold text-2xl line-through text-neutral-400">
                            <span>{{$basic->price}}</span>
                            <span>€</span>
                        </div>
                        <div class="flex font-bold text-2xl text-title">
                            <span>{{$basic->discounted_price}}</span>
                            <span>€</span>
                        </div>
                    </div>
                    @else
                            <div class="flex font-bold text-2xl text-title 4">
                                <span>{{$basic->price}}</span>
                                <span>€</span>
                            </div>
                    @endif

                </div>
                <div class="flex gap-2">
                    <span class="font-bold">1,5</span>
                    <span>{{__('hour photo session')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">3</span>
                    <span>{{__('outfits from my Studio or your Side')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">5</span>
                    <span>{{__('professionally retouched high-quality images as digital files')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">1</span>
                    <span>{{__('professionally retouched high-quality printed image')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">3</span>
                    <span>{{__('not edited images as digital files')}}</span>
                </div>
                <div class="flex items-center p-4">
                    <a href="https://wa.me/+491629363405"
                       class="block text-primary bg-on-primary w-full py-4 hover:text-on-primary hover:bg-primary rounded-lg border-primary border capitalize text-center transition-all">
                        {{__('make an appointment now')}}
                    </a>
                </div>
            </div>
            <div class="w-full flex flex-col bg-surface border rounded-2xl p-4 space-y-5">
                <div class="flex flex-col px-4 border-b">
                    <div class="flex justify-center mb-2">
                            <span
                                class="text-center text-2xl font-black text-stone-400 uppercase">{{__('silver')}}</span>
                    </div>
                    @if($silver->is_discounted)
                        <div class="flex text-rose-500 text-sm justify-center font-bold gap-2 mb-4">
                            <div>
                                @switch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())
                                    @case('en')
                                        {{$silver->discount_text_en}}
                                        @break
                                    @case('fa')
                                        {{$silver->discount_text_fa}}
                                        @break
                                    @case('de')
                                        {{$silver->discount_text_de}}
                                        @break
                                @endswitch
                            </div>
                        </div>
                    @endif
                    @if($silver->is_discounted)
                        <div class="flex gap-4 items-center mb-4">
                            <div class="flex font-bold text-2xl line-through text-neutral-400">
                                <span>{{$silver->price}}</span>
                                <span>€</span>
                            </div>
                            <div class="flex font-bold text-2xl text-title">
                                <span>{{$silver->discounted_price}}</span>
                                <span>€</span>
                            </div>
                        </div>
                    @else
                        <div class="flex font-bold text-2xl text-title 4">
                            <span>{{$silver->price}}</span>
                            <span>€</span>
                        </div>
                    @endif
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">2,5</span>
                    <span>{{__('hour photo session')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">4</span>
                    <span>{{__('outfits from my Studio or your Side')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">10</span>
                    <span>{{__('professionally retouched high-quality images as digital files')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">2</span>
                    <span>{{__('professionally retouched high-quality printed image')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">6</span>
                    <span>{{__('not edited images as digital files')}}</span>
                </div>
                <div class="flex items-center p-4">
                    <a href="https://wa.me/+491629363405"
                       class="block text-primary bg-on-primary w-full py-4 hover:text-on-primary hover:bg-primary rounded-lg border-primary border capitalize text-center transition-all">
                        {{__('make an appointment now')}}
                    </a>
                </div>
            </div>
            <div class="w-full flex flex-col bg-surface border rounded-2xl p-4 space-y-5">
                <div class="flex flex-col px-4 border-b">
                    <div class="flex justify-center mb-2">
                            <span
                                class="text-center text-2xl font-black text-yellow-700 uppercase">{{__('gold')}}</span>
                    </div>
                    @if($gold->is_discounted)
                        <div class="flex text-rose-500 text-sm justify-center font-bold gap-2 mb-4">
                            <div>
                                @switch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())
                                    @case('en')
                                        {{$gold->discount_text_en}}
                                        @break
                                    @case('fa')
                                        {{$gold->discount_text_fa}}
                                        @break
                                    @case('de')
                                        {{$gold->discount_text_de}}
                                        @break
                                @endswitch
                            </div>
                        </div>
                    @endif
                    @if($gold->is_discounted)
                        <div class="flex gap-4 items-center mb-4">
                            <div class="flex font-bold text-2xl line-through text-neutral-400">
                                <span>{{$gold->price}}</span>
                                <span>€</span>
                            </div>
                            <div class="flex font-bold text-2xl text-title">
                                <span>{{$gold->discounted_price}}</span>
                                <span>€</span>
                            </div>
                        </div>
                    @else
                        <div class="flex font-bold text-2xl text-title 4">
                            <span>{{$gold->price}}</span>
                            <span>€</span>
                        </div>
                    @endif
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">3,5</span>
                    <span>{{__('hour photo session')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">5</span>
                    <span>{{__('outfits from my Studio or your Side')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">15</span>
                    <span>{{__('professionally retouched high-quality images as digital files')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">3</span>
                    <span>{{__('professionally retouched high-quality printed image')}}</span>
                </div>
                <div class="flex gap-2">
                    <span class="font-bold">8</span>
                    <span>{{__(('not edited images as digital files'))}}</span>
                </div>
                <div class="flex items-center p-4">
                    <a href="https://wa.me/+491629363405"
                       class="block text-primary bg-on-primary w-full py-4 hover:text-on-primary hover:bg-primary rounded-lg border-primary border capitalize text-center transition-all">
                        {{__('make an appointment now')}}
                    </a>
                </div>
            </div>
            <div class="w-full flex flex-col bg-surface border rounded-2xl p-4 space-y-5">
                <div class="flex flex-col px-4 border-b">
                    <div class="flex justify-center mb-2">
                        <span class="text-center text-2xl font-black uppercase">{{__('videography')}}</span>
                    </div>
                    @if($videography->is_discounted)
                        <div class="flex text-rose-500 text-sm justify-center font-bold gap-2 mb-4">
                            <div>
                                @switch(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())
                                    @case('en')
                                        {{$videography->discount_text_en}}
                                        @break
                                    @case('fa')
                                        {{$videography->discount_text_fa}}
                                        @break
                                    @case('de')
                                        {{$videography->discount_text_de}}
                                        @break
                                @endswitch
                            </div>
                        </div>
                    @endif
                    @if($videography->is_discounted)
                        <div class="flex gap-4 items-center mb-4">
                            <div class="flex font-bold text-2xl line-through text-neutral-400">
                                <span>{{$videography->price}}</span>
                                <span>€</span>
                            </div>
                            <div class="flex font-bold text-2xl text-title">
                                <span>{{$videography->discounted_price}}</span>
                                <span>€</span>
                            </div>
                        </div>
                    @else
                        <div class="flex font-bold text-2xl text-title 4">
                            <span>{{$videography->price}}</span>
                            <span>€</span>
                        </div>
                    @endif
                </div>
                <div class="flex items-center justify-center gap-2 flex-1 text-xl">
                    <span class="font-bold">1.5</span>
                    <span>{{__('minutes long video')}}</span>
                </div>
                <div class="flex items-center p-4">
                    <a href="https://wa.me/+491629363405"
                       class="block text-primary bg-on-primary w-full py-4 hover:text-on-primary hover:bg-primary rounded-lg border-primary border capitalize text-center transition-all">
                        {{__('make an appointment now')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
