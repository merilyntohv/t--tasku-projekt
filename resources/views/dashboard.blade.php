<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex justify-center gap-8">

    <form id="otsing" action="" method="get" class="  mt-8 rounded-full flex gap-4">
        <input type="search" name="q" id="q" class="w-full border-0 p-4 bg-gray-200 rounded-full" autocomplete="off" placeholder="Otsing...">
        <input type="search" name="q" id="q" class="w-full border-0 p-4 bg-gray-200 rounded-full" autocomplete="off" placeholder="Otsing...">
        <input type="search" name="q" id="q" class="w-full border-0 p-4 bg-gray-200 rounded-full" autocomplete="off" placeholder="Otsing...">
        <button type="submit" class="flex items-center justify-center p-2">
            <div class=" border-black rounded-full  bg-[#184A45FF] hover:bg-[#ffffff] transition-colors ease-in py-4 px-4 flex items-center justify-center">
                <span class="material-symbols-outlined text-white hover:text-black">search</span>
            </div>
        </button>
    </form>
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
