<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="px-4 py-4 bg-[#102E4A]">
    <div>
    <form id="otsing" action="" method="get" class="py-4 flex flex-col mt-8 lg:flex  space-y-6 items-center">
        <input type="search" name="search" id="q" class="w-full border-0 p-2 bg-white rounded-full shadow-xl" autocomplete="off" placeholder="Sisesta märksõna">
        <input type="search" name="county" id="q" class="w-full border-0 p-2  bg-white rounded-full shadow-xl" autocomplete="off" placeholder="Maakond">
        <input type="search" name="specialty" id="q" class="w-full border-0 p-2  bg-white rounded-full shadow-xl" autocomplete="off" placeholder="Valdkond">
            <select name="county" id="county" class="w-full flex flex-col mt-8 rounded-full">
                <option value="harjumaa" class="bg-white">Harjumaa</option>
                <option value="raplamaa">Raplamaa</option>
                <option value="saaremaa">Saaremaa</option>
                <option value="pärnumaa">Pärnumaa</option>
            </select>
        <button class="w-full bg-gradient-to-r from-[#fed132] to-[#eeaa10] text-[#102E4A] py-2 px-4 rounded-full font-bold uppercase border-black ">
            <span class="relative">Otsi</span>
        </button>
    </form>
    </div>
</div>

<div class="container flex flex-col px-2 py-4">
    <div class="w-full draggable">
        <div class="container flex flex-col items-center gap-16 mx-auto">
            <div class="grid w-full grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                
                <div class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>    
                </span>
                <p class="text-2xl font-extrabold text-dark-grey-900">
                    Pakun tööd
                </p>
                <p class="text-center text-dark-grey-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </p>
                <button class="btn-default overflow-hidden relative w-64 bg-gradient-to-r bg-[#102E4A] text-white py-4 px-4 rounded-xl font-bold uppercase transition-all duration-100 -- hover:shadow-md border border-stone-100 hover:bg-gradient-to-t hover:from-stone-100 before:to-stone-50 hover:-translate-y-[3px]">
                    <span class="relative">Sisesta remondisoov</span>
                </button>
                </div>

                <div class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                </span>
                <p class="text-2xl font-extrabold text-dark-grey-900">
                    Teenusepakkujad
                </p>
                <p class="text-center text-dark-grey-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </p>
                <button class="btn-default overflow-hidden relative w-64 bg-[#102E4A] text-white py-4 px-4 rounded-xl font-bold uppercase transition-all duration-100 -- hover:shadow-md border border-stone-100 hover:bg-gradient-to-t hover:from-stone-100 before:to-stone-50 hover:-translate-y-[3px]">
                    <span class="relative">Otsi teenusepakkujaid</span>
                </button>
                </div>
                
                <div class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-xl">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg> 
                </span>
                <p class="text-2xl font-extrabold text-dark-grey-900">
                    SOS remonttööd
                </p>
                <p class="text-center text-dark-grey-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="btn-default overflow-hidden relative w-64 bg-[#102E4A] text-white py-4 px-4 rounded-xl font-bold uppercase transition-all duration-100 -- hover:shadow-md border border-stone-100 hover:bg-gradient-to-t hover:from-stone-100 before:to-stone-50 hover:-translate-y-[3px]">
                    <span class="relative">SOS teenusepakkujad</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>

   
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
