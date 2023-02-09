<div class="form-content scrollbar">
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        <div class="item mt-5 col-span-2">
            <div class="button-field flex items-center bg-secondary-400 duration-500 rounded-full rounded-tr-none overflow-hidden">
                <button type="button" wire:click="clearForm" class="button group/button w-full h-[70px] flex items-center justify-center px-[25px] sm:px-[50px] bg-secondary-400 border border-solid border-secondary-400 relative space-x-[15px] duration-500 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-secondary-500 hover:before:left-0 before:duration-500">
                    <div class="icon text-[12px] flex items-center text-white relative z-2 duration-500 group-[.loading]/button:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10.36 10">
                            <path d="m9.36,1L1,9" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
                            <path d="m1,1l8.36,8" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px;"/>
                        </svg>
                    </div>
                    <div class="text text-[16px] font-semibold flex items-center text-white relative z-2 duration-500 group-hover/button:text-white">
                        Temizle
                    </div>
                    <!-- LOADING -->
                    <div class="loading hidden group-[.loading]/button:block relative top-[50%] translate-y-[-50%] !h-[16px] !w-[16px] z-2 after:content after:absolute after:right-[0px] after:border-[3px] after:border-solid after:border-white/50 after:border-t-[3px] after:border-t-solid after:border-t-white after:rounded-full after:w-[16px] after:h-[16px] after:animate-spin">
                    </div>
                </button>
                <div class="split w-[2px] h-[30px] flex bg-white"></div>
                <button type="submit" class="button group/button w-full h-[70px] flex items-center justify-center px-[25px] sm:px-[50px] bg-secondary-400 border border-solid border-secondary-400 relative space-x-[15px] duration-500 overflow-hidden before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-secondary-500 hover:before:left-0 before:duration-500">
                    <div class="icon text-[12px] flex items-center text-white relative z-2 duration-500 group-[.loading]/button:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18.43 17.7">
                            <path d="m15.8,16.95H2.63c-.5,0-.98-.19-1.33-.53-.35-.34-.55-.8-.55-1.27V2.55c0-.48.2-.94.55-1.27.35-.34.83-.53,1.33-.53h10.35l4.7,4.5v9.9c0,.48-.2.94-.55,1.27-.35.34-.83.53-1.33.53Z" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5px;"/>
                            <path d="m13.92,16.95v-7.2H4.51v7.2" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5px;"/>
                        </svg>
                    </div>
                    <div class="text text-[16px] font-semibold flex items-center text-white relative z-2 duration-500 group-hover/button:text-white">
                        Kaydet
                    </div>
                    <!-- LOADING -->
                    <div class="loading hidden group-[.loading]/button:block relative top-[50%] translate-y-[-50%] !h-[16px] !w-[16px] z-2 after:content after:absolute after:right-[0px] after:border-[3px] after:border-solid after:border-white/50 after:border-t-[3px] after:border-t-solid after:border-t-white after:rounded-full after:w-[16px] after:h-[16px] after:animate-spin">
                    </div>
                </button>
            </div>
            <!-- ERROR -->
            <div class="tooltip hidden text-[12px] group-[.error]/input:flex text-red-500 absolute right-[5px] -bottom-[11px] bg-white px-[10px] py-[3px] rounded border-[1px] border-solid border-red-500">
                Hata
            </div>
            <!-- SUCCESS -->
            <div class="tooltip hidden text-[12px] group-[.success]/input:flex text-green-500 absolute right-[5px] -bottom-[11px] bg-white px-[10px] py-[3px] rounded border-[1px] border-solid border-green-500">
                Düzgün
            </div>
        </div>
    </form>

    @if (session('success'))
        <div x-data x-init="$store.sweetalert.alert(@js(session('success')))"></div>
    @elseif (session('error'))
        <div x-data x-init="$store.sweetalert.alert(@js(session('error')))"></div>
    @endif
</div>
