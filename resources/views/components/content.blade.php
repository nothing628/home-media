<div class="overflow-x-hidden w-full">
    <div
        class="pl-[108px] pr-[15px] pb-[15px] pt-4 md:pl-[243px] xl:py-[30px] xl:pl-[255px] xl:pr-[30px] w-full mx-auto">
        {{ $slot }}
    </div>

    @section('footer')
    <x-footer></x-footer>
    @show
</div>
