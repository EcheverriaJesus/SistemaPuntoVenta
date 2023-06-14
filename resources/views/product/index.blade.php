<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight pt-2">
            {{ __('ADMINISTRA TUS PRODUCTOS EN ESTE APARTADO') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">     
            <livewire:product.mostrar-product />
        </div>
    </div>
</x-app-layout>