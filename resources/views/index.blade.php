<x-layouts.app>
    {{-- CAROUSEL FIELD --}}
    <section class="homepage-field h-screen hidden xl:block">
        <div class="container max-w-[1660px] px-20px md:max-w-full sm:px-0 h-full">
            <div class="wrapper h-full relative">
                <div class="text-content max-w-[1660px] w-full left-1/2 -translate-x-1/2 grid gap-0 grid-cols-1 sm:grid-cols-[minmax(0,_7fr)_minmax(0,_5fr)] sm:gap-5 absolute top-1/2 translate-y-[calc(-50%+65px)] z-[22] px-[20px]">
                    <div class="text-field space-y-[130px]">
                        <div class="title text-white text-[28px] leading-tight md:text-[36px] lg:text-[42px] xl:text-[60px]">Resmi Sivil Toplum<br>Örgütlerinin Hızlı<br>Ulaşabilmesi İçin <span class="text-secondary-500 font-bold">Yardım<br>Adresi</span> Bildirin.</div>
                        <div class="info-boxes flex space-x-5">
                            <div class="info-box flex">
                                <div class="icon bg-secondary-400 md:p-[15px] p-[20px] xl:p-[25px] min-w-[130px] flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="58" viewBox="0 0 42.45 58.61">
                                        <path d="m21.23,0C9.52,0,0,9.52,0,21.23c0,14.53,19,35.85,19.8,36.75.76.85,2.09.84,2.84,0,.81-.9,19.8-22.23,19.8-36.75,0-11.7-9.52-21.23-21.23-21.23Zm0,31.91c-5.89,0-10.68-4.79-10.68-10.68s4.79-10.68,10.68-10.68,10.68,4.79,10.68,10.68-4.79,10.68-10.68,10.68Z" style="fill: #fff;"/>
                                    </svg>
                                </div>
                                <div class="text-field bg-white md:p-[15px] p-[20px] xl:p-[25px] flex flex-col justify-center">
                                    <div class="title text-black font-bold text-[18px] leading-tight">Toplam Kayıt</div>
                                    <div class="expo text-secondary-400 md:text-[48px] text-[60px] xl:text-[70px] leading-none font-bold">
                                        {{ strtoupper(\Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($injuredCities->sum('total'))) }}
                                    </div>
                                </div>
                            </div>
                            <div class="info-box flex">
                                <div class="icon bg-secondary-400 md:p-[15px] p-[20px] xl:p-[25px] min-w-[130px] flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="40" viewBox="0 0 66 40.07">
                                        <path d="m37.71,11.79h-9.43c-2.6,0-4.71,2.11-4.71,4.71v18.86c0,2.6,2.11,4.71,4.71,4.71h9.43c2.6,0,4.71-2.11,4.71-4.71v-18.86c0-2.6-2.11-4.71-4.71-4.71Z" style="fill: #fff;"/>
                                        <path d="m14.14,18.86H4.71c-2.6,0-4.71,2.11-4.71,4.71v11.79c0,2.6,2.11,4.71,4.71,4.71h9.43c2.6,0,4.71-2.11,4.71-4.71v-11.79c0-2.6-2.11-4.71-4.71-4.71Z" style="fill: #fff;"/>
                                        <path d="m61.29,0h-9.43c-2.6,0-4.71,2.11-4.71,4.71v30.64c0,2.6,2.11,4.71,4.71,4.71h9.43c2.6,0,4.71-2.11,4.71-4.71V4.71c0-2.6-2.11-4.71-4.71-4.71Z" style="fill: #fff;"/>
                                    </svg>
                                </div>
                                <div class="text-field bg-white md:p-[15px] p-[20px] xl:p-[25px] flex flex-col justify-center">
                                    <div class="title text-black font-bold text-[18px]">Günlük Ziyaretçi</div>
                                    <div class="expo text-secondary-400 md:text-[48px] text-[60px] xl:text-[70px] leading-none font-bold">
                                        {{ strtoupper(\Coduo\PHPHumanizer\NumberHumanizer::metricSuffix($pageViews)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-field relative h-full">
                    <div class="gradient bg-gradient-to-t from-primary-500 via-primary-500/70 to-primary-500/80 absolute top-0 left-0 w-full h-full z-[21]"></div>
                    <div class="one-carousel swiper h-full ">
                        <div class="swiper-wrapper h-full">
                            <div class="swiper-slide h-full">
                                <div class="image w-full h-full">
                                    <img src="{{ asset('images/other/image-1.webp') }}" alt="Deprem Yardım" class="w-full h-full object-fit object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FORM FIELD --}}
    <section class="form-field relative z-[30] grid gap-0 grid-cols-1 px-[20px] mb-5 xl:top-0 xl:right-0 xl:fixed xl:grid-cols-[minmax(0,_7fr)_minmax(0,_5fr)] xl:px-0 pointer-events-none sm:gap-5 h-full">
        <div class="form-inner p-7 mb-10 space-y-5 bg-white rounded-[40px] xl:rounded-[100px] xl:rounded-r-none xl:rounded-bl-none sm:p-[60px] sm:pb-[60px] sm:mb-0 col-start-1 xl:col-start-2 pointer-events-auto flex flex-col justify-center xl:h-screen">
            <div class="title-field space-y-3">
                <div class="title text-[20px] leading-tight text-red-500">1 Kişi Giriniz</div>
                <div class="title text-[32px] leading-tight text-primary-500 font-bold">Yardım Adresi Bildirim Formu</div>
            </div>
            <livewire:address-notification-form/>
        </div>
    </section>
    {{-- MAIN CONTENTS --}}
    <section class="main-content">
        <div class="container max-w-[1660px]">
            <div class="wrapper grid gap-0 grid-cols-1 xl:grid-cols-[minmax(0,_7fr)_minmax(0,_5fr)] sm:gap-5">
                <div class="inner-wrapper grid grid-cols-1 gap-0 space-y-0 sm:space-y-5">
                    {{-- YARDIM TALEPLERİ --}}
                    <div class="registered-requests-assistance mt-5 order-2 sm:order-1 sm:mb-0 sm:mt-[40px] xl:mb-[100px]">
                        <div class="top-field">
                            <div class="title text-white text-[28px] leading-tight md:text-[36px] lg:text-[42px] xl:text-[54px] font-bold mb-[40px] xl:mb-[100px]">Kayıtlı <span class="text-secondary-500">Yardım</span><br class="hidden sm:block"> Talepleri</div>
                        </div>
                        <div class="carousel-field relative">
                            <div class="gradient bg-gradient-to-l from-primary-500 via-primary-500/50 to-primary-500/0 absolute top-0 right-0 w-[50%] h-full z-[21]"></div>
                            <div class="marquee-carousel swiper">
                                <div class="swiper-wrapper !w-full">
                                    @foreach($injuredCities as $injuredCity)
                                        <div class="swiper-slide !w-auto px-8">
                                            <div class="text-content">
                                                <div class="text text-secondary-400 font-bold text-[16px] leading-tight text-center text-stroke">
                                                    {{ $injuredCity->city }}
                                                </div>
                                                <div class="text text-white font-bold text-[34px] sm:text-[36px] md:text-[48px] lg:text-[54px] xl:text-[60px] leading-tight text-center text-stroke">
                                                    {{ $injuredCity->total }}
                                                </div>
                                                <div class="split bg-white/30 w-[1px] h-full absolute left-0 bottom-0"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- TABLE --}}
                    <div class="injured-table order-1 sm:order-2">
                        <livewire:home.injured-list/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
