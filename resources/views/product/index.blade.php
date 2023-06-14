<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight pt-2">
            {{ __('ADMINISTRA TUS PRODUCTOS EN ESTE APARTADO') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-1">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">     
    <section class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-4">
       
        <article class="block w-full ">
            <div class="block w-full md:w-1/3">
             <form action="{{ route('product.index') }}" method="GET">
                <label for="searchProduct" class="mb-2 text-base font-medium text-gray-700">Buscar Usuario</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="#1A56DB" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                        <input type="search" id="searchProduct" name="searchProduct" class="block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar por nombre">
                </div>
                        <button type="submit" class="flex items-center px-4 py-2 font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-[#004e7c] border rounded-md tet-sm border-transparet hover:bg-[#0174ab]">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="ml-1 text-xs">Buscar</span>
                        </button>
             </form>
            </div>
        </article>
        
        <article>
            <div class="flex hover:scale-105 ease-in duration-300">
                <a href="#"
                    class="flex items-center px-4 py-2 font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-[#004e7c] border rounded-md tet-sm border-transparet hover:bg-[#0174ab]">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <label class="ml-1 text-xs">Agregar Producto</label>
                </a>
            </div>
        </article>
    </section>
    <livewire:product.mostrar-product />
        </div>
    </div>
</x-app-layout>

