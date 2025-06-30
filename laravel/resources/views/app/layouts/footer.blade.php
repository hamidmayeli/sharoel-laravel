<footer class="flex w-full flex-col items-center p-5 bg-surface-container-low">
    <div class="mb-5">
        <div
            x-data="{ visible: false }"
            x-intersect:enter="visible = true"
            :class="{
        'opacity-100 translate-y-0': visible,
        'opacity-0 translate-y-4': !visible
    }"
            class="transition-all text-center duration-1000 ease-in-out transform text-3xl md:text-5xl capitalize"
        >
            {{__('no appointment yet?')}}
        </div>
    </div>
    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-5 xl:w-4/5">
        <img class="w-full aspect-video rounded-xl overflow-hidden" src={{asset('images/appointment.jpg')}}  />
        <div class="h-full flex flex-col justify-between">
            <div>
                <p class="mb-5 text-center md:text-start">{{__('appointment_description')}}</p>
                <div class="flex gap-4 mb-5">
                    <a href="tel:+491629363405" class="bg-primary text-on-primary rounded-lg py-1 px-3 flex gap-3 items-center">
                        <i class="fa fa-mobile fa-lg" aria-hidden="true"></i>
                        <span class="capitalize">{{__('call')}}</span>
                    </a>
                    <a href="https://wa.me/+491629363405" class="bg-primary text-on-primary rounded-lg py-2 px-4 flex gap-3 items-center">
                        <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
                        <span class="capitalize">{{__('whatsapp chat')}}</span>
                    </a>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-2">
                                                <span class="text-title">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg></span>
                    <span class="text-xl">+491629363405</span>
                </div>
                <div class="flex items-center gap-2">
                        <span class="text-title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
  <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
</svg>

                        </span>
                    <span class="text-xl">sharoelstudio@gmail.com</span>
                </div>
                <div class="flex items-center gap-2">
                        <span class="text-title">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
</svg>

                        </span>
                    <span class="text-xl">Rosmarinstraße 33, 40235, Düsseldorf</span>
                </div>
            </div>
        </div>
    </div>
</footer>
