<div class="table-content">
    <div class="top-field flex justify-between flex-col space-y-5 sm:space-y-0 sm:flex-row mb-[40px] xl:mb-[100px]">
        <div class="title text-white text-[28px] leading-tight md:text-[32px] lg:text-[36px] xl:text-[40px] font-bold">En Son <span class="text-secondary-500">Yardım</span><br class="hidden sm:block"> Kayıtları</div>
        {{-- OKLAR, AŞAĞIDAKİ TABLOYU DEĞİŞTİRECEK --}}
        <div class="filter-field flex items-center justify-between space-x-5">
            <div class="button-field flex items-center space-x-5">
                <a href="javascript:;"
                   wire:click="previousPage"
                   @class([
                        'group/button w-[30px] h-[30px] flex items-center justify-center border border-solid border-white rounded-full duration-500 hover:bg-white md:w-[90px] md:h-[90px]',
                        'opacity-25 pointer-events-none' => $injureds->onFirstPage()
                   ])
                >
                    <div class="icon flex items-center text-white justify-center duration-500 fill-white group-hover/button:fill-primary-500">
                        <svg class="w-[16px] h-[16px] md:w-[36px] md:h-[36px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2">
                            <path d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </div>
                </a>
                <a href="javascript:;"
                   wire:click="nextPage"
                   @class([
                       'group/button w-[30px] h-[30px] flex items-center justify-center border border-solid border-white rounded-full duration-500 hover:bg-white md:w-[90px] md:h-[90px]',
                       'opacity-25 pointer-events-none' => $injureds->onLastPage()
                    ])
                >
                    <div class="icon flex items-center text-white justify-center duration-500 fill-white group-hover/button:fill-primary-500">
                        <svg class="w-[16px] h-[16px] md:w-[36px] md:h-[36px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2">
                            <path d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="custom-table click-open mb-[40px] xl:mb-[100px]">
        <div class="custom-filter"></div>
        <div class="table-field">
            <div class="table-wrapper grid grid-cols-1 gap-5 sm:grid-cols-2">
                @foreach($injureds as $injured)
                    <div class="item group/item cursor-pointer border border-solid border-primary-700 bg-primary-700 sm:bg-transparent sm:border-white rounded-xl duration-500 [&.active]:bg-primary-700 [&.active]:border-primary-700 [&.active]:z-20">
                        <div class="item-content relative p-5 sm:p-3 h-full sm:flex sm:items-center">
                            <div class="main-content flex items-center sm:space-x-3">
                                <div class="icon duration-500 !w-8 h-8 !min-w-[32px] group-hover/item:bg-primary-300 items-center justify-center rounded-full group-[.active]/item:rotate-180 hidden sm:flex">
                                    <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path>
                                    </svg>
                                </div>
                                <div class="title text-[20px] text-white leading-tight flex items-center">
                                    {{ sprintf('%s / %s / %s', $injured->city, $injured->district, $injured->street) }}
                                </div>
                            </div>
                            <div class="w-[calc(100%+2px)] inner-content pl-0 border border-solid border-primary-700 sm:top-[calc(100%-8px)] sm:pl-14 pr-3 duration-500 sm:absolute sm:h-0 sm:opacity-0 sm:invisible sm:-left-[1px] rounded-b-xl group-[.active]/item:opacity-100 group-[.active]/item:visible group-[.active]/item:bg-primary-700">
                                <div class="info-box space-y-3 sm:py-4">
                                    <div class="address text-[18px] leading-tight text-white/70">
                                        {{ sprintf('%s / %s / %s / %s', $injured->city, $injured->district, $injured->street, $injured->street2) }}
                                        <br/><br/>
                                        {{ $injured->address }}
                                    </div>
                                    <a href="javascript:;" class="address text-[18px] leading-tight text-secondary-400 duration-500 hover:text-secondary-500 flex w-fit">
                                        {{ $injured->maps_link }}
                                    </a>
                                    <div class="name text-[18px] leading-tight text-secondary-400">
                                        {{ $injured->name }}
                                    </div>
                                    <div class="name text-[18px] leading-tight text-secondary-400">
                                        {{ $injured->created_at->format('d.m.Y H:i') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="button-field">
        <a href="/injured" class="button group/button w-fit h-[70px] flex justify-center rounded-full px-[25px] sm:px-[50px] bg-secondary-400 border border-solid border-secondary-400 relative space-x-[15px] duration-500 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-secondary-500 hover:before:left-0 before:duration-500">
            <div class="text text-[16px] font-semibold flex items-center text-white relative z-2 duration-500 group-hover/button:text-white">Tümünü Görüntüle</div>
        </a>
    </div>
</div>
