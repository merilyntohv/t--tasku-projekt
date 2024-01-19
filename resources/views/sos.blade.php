<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @foreach ($companies as $company)
        <div class="flex flex-col items-center gap-3 px-8 py-10 bg-white rounded-3xl shadow-xl mt-2">
            <ul>
                <li>Ettevõtte nimi:  {{ $company->name }}</li>
                <li>Email:  {{ $company->email }}</li>
                <li>Tel. nr:  {{ $company->tel_nr }}</li>
                <li>Valdkond:  {{ $company->description }}</li>
            </ul>
        </div>
    @endforeach
</x-guest-layout>