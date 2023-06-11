<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight pt-2">
            {{ __('GESTIONA TUS PRODUCTOS EN ESTE APARTADO') }}
        </h2>
    </x-slot>


    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            {{-- <form>   
                <label for="default-search" class="mb-2 text-base font-medium text-gray-700">Buscar Usuario</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="#1A56DB" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input wire:model='searchUser' type="search" id="default-search" class="block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar por nombre" required>
                </div>
            </form> --}}
            <form action="{{ route('products.search') }}" method="GET">
                <input type="text" name="search" placeholder="Buscar productos">
                <button type="submit">Buscar</button>
            </form>

    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                    <a href="https://laravel.com/docs">Documentation</a>
                </h2>
            </div>
    
            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
            </p>
    
            <p class="mt-4 text-sm">
                <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
                    Explore the documentation
    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                        <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
    
        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                    <a href="https://tailwindcss.com/">Tailwind</a>
                </h2>
            </div>
    
            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
            </p>
        </div>
        
    </div>
    <div class="flex p-5 items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M23 6.066v12.065l-11.001 5.869-11-5.869v-12.131l11-6 11.001 6.066zm-21.001 11.465l9.5 5.069v-10.57l-9.5-4.946v10.447zm20.001-10.388l-9.501 4.889v10.568l9.501-5.069v-10.388zm-5.52 1.716l-9.534-4.964-4.349 2.373 9.404 4.896 4.479-2.305zm-8.476-5.541l9.565 4.98 3.832-1.972-9.405-5.185-3.992 2.177z" />
        </svg>
        <h2 class="text-xl font-semibold text-gray-700">
            Productos Registrados:</h2>
        <p class="text-gray-500 text-base leading-relaxed">Actualmente en el sistema se encunatran registrados {{ count($products) }} productos.</p>
    </div>





    
            
              <div class="p-6 lg:p-8 bg-gradient-to-r from-[#004e7c] to-[#0174ab] border-b border-gray-200">

                    <div class="w-full h-auto p-6 mb-10 space-y-6 bg-white border shadow-2xl sm:bg-white rounded-xl">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                              <thead class="text-xs text-white uppercase bg-[#0174ab] dark:bg-gray-700 dark:text-gray-400">
                                  <tr>
                                      <th scope="col" class="w-1/12 px-6 py-3 text-center">ID</th>
                                      <th scope="col" class="w-1/6 px-6 py-3 text-center">Nombre</th>
                                      <th scope="col" class="w-1/3 px-6 py-3 text-center">Descripcion</th>
                                      <th scope="col" class="w-1/12 px-6 py-3 text-center">Precio</th>
                                      <th scope="col" class="w-1/12 px-6 py-3 text-center">Stock</th>
                                      <th scope="col" class="w-1/6 px-6 py-3 text-center">Acciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($products as $product)
                                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                          <td class="px-6 py-4 text-center">{{ $product->id }}</td>
                                          <td class="px-6 py-4 text-center">{{ $product->name }}</td>
                                          <td class="px-6 py-4 text-center">{{ $product->description }}</td>
                                          <td class="px-6 py-4 text-center">$ {{ $product->price }}</td>
                                          <td class="px-6 py-4 text-center">{{ $product->stock }}</td>
                                          <td class="flex justify-center px-6 py-4 space-x-4 text-center">
                                             <a href="{{route('product.edit',$product->id)}}"
                                                 class="flex justify-center gap-2 px-2 text-xs font-bold text-black uppercase bg-white border-black rounded-lg hover:scale-90">
                                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                     stroke="currentColor" class="w-8 h-8">
                                                     <path stroke-linecap="round" stroke-linejoin="round"
                                                         d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                 </svg>
                                             </a>
                                             <button wire:click="$emit('mostrarAlerta', {{$product->id}})"
                                                 class="flex justify-center gap-2 px-2 py-2 text-xs font-bold text-white uppercase bg-red-700 rounded-lg hover:scale-90">
                                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                     <path stroke-linecap="round" stroke-linejoin="round"
                                                         d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                 </svg>
                                             </button>
                                         </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>

              </div>
            </div>
        </div>
    </div>
</x-app-layout>