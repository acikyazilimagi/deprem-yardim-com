<x-layouts.app>
    {{-- MAIN CONTENTS --}}
    <section class="main-content injured-list block mt-[30px] xl:mt-[150px]">
        <div class="container max-w-[1660px]">
            <div class="wrapper grid gap-0 grid-cols-1">
                <div class="inner-wrapper grid grid-cols-1 gap-0 space-y-0 sm:space-y-5">
                    <div x-data="map({
                        locations: @js(\App\Models\Injured::whereNot('coordinates', null)->select('coordinates', 'geocode_data')->get()->toArray())
                    })" class="h-[750px]">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

<script>
    document.querySelector('header').classList.add('header-full')
    document.querySelector('footer').classList.add('footer-full')
</script>
