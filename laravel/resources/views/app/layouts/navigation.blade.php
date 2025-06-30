<header class="flex items-center px-4 md:px-10 fixed top-0 inset-x-0 z-50 text-title transition-all duration-300" x-data="{ scrolled: false }"
        x-init="
        scrolled = window.scrollY > 0;
        window.addEventListener('scroll', () => {
      scrolled = window.scrollY > 0;
    })"
        :class="{ 'bg-transparent text-white': !scrolled && '{{ Route::currentRouteName() }}' === 'home','bg-transparent': !scrolled, 'bg-surface shadow-lg': scrolled }">
    <div class="md:hidden block" x-data="{ open: false }">
        <!-- Button that toggles the menu -->
        <button @click="open = !open" class="p-4">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path :class="{ 'hidden': open }" class="transition-all" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Fullscreen Menu with Animation (Position and Opacity) -->
        <div
            x-show="open"
            x-transition:enter="transition transform duration-500 ease-out opacity-0"
            x-transition:enter-start="translate-y-[-100%] opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition transform duration-500 ease-in opacity-100"
            x-transition:leave-start="translate-y-0 opacity-100"
            x-transition:leave-end="translate-y-[-100%] opacity-0"
            class="fixed inset-0 z-50 bg-black/80"
        >
            <div class="flex flex-col justify-center items-center h-full gap-10">
                <div class="text-center flex flex-col items-center gap-4 uppercase text-white text-xl">
                    <a href={{route('home')}}>
                        {{__('home')}}
                    </a>
                    <a href={{route('gallery.index')}}>
                        {{__('gallery')}}
                    </a>
                    <a href={{route('about')}}>
                        {{__('about')}}
                    </a>
                    <a href={{route('contact')}}>
                        {{__('contact')}}
                    </a>

                    <button @click="open = false" class="mt-6 p-2 text-white rounded-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="w-full flex items-center justify-center gap-5 text-white">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="block" rel="alternate" hreflang="{{ $localeCode }}" href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)}}">
                            {{$properties['native']}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        <a  class="flex items-center justify-center w-20 aspect-square" href="{{route('home')}}">
            @include('components.application-logo')
        </a>
    <div class="gap-5 ms-5 items-center uppercase hidden md:flex">
        <a href={{route('home')}}>
            {{__('home')}}
        </a>
        <a href={{route('gallery.index')}}>
            {{__('gallery')}}
        </a>
        <a href={{route('about')}}>
            {{__('about')}}
        </a>
        <a href={{route('contact')}}>
            {{__('contact')}}
        </a>
    </div>
    <div class="flex gap-2 items-center ms-auto">
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none">
                        <div>{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleNative() }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <x-dropdown-link  rel="alternate" hreflang="{{ $localeCode }}" :href="LaravelLocalization::getLocalizedURL($localeCode, null, [], true)">
                            {{$properties['native']}}
                        </x-dropdown-link>
                    @endforeach

                </x-slot>
            </x-dropdown>
        </div>
        <a class="p-2 block" href="https://www.instagram.com/sharoel_studio">
            <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
        </a>
        <a class="p-2 block" href="https://www.facebook.com/sharoel_studio">
            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
        </a>
        <a class="p-2 block" href="https://wa.me/+491629363405">
            <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
        </a>
        <a class="p-2 block" href="tel:+491629363405">
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
        </a>
    </div>
</header>
