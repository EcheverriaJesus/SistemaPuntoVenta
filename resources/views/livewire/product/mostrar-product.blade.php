<div class="px-5">
    <section class="mt-4 bg-opacity-25 grid md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-3">
     <x-search-bar var="searchProduct" title="Buscar Productos" wiremodel="searchProduct" placeholder="Ingrese código o nombre" />

     <x-button-add :ruta="route('order.index')">
        Agregar Producto
     </x-button-add>
    </section>

    <section class="flex py-3 items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" class="w-6 h-6 stroke-gray-400">
        <path stroke-linecap="round" stroke-linejoin="round" d="M23 6.066v12.065l-11.001 5.869-11-5.869v-12.131l11-6 11.001 6.066zm-21.001 11.465l9.5 5.069v-10.57l-9.5-4.946v10.447zm20.001-10.388l-9.501 4.889v10.568l9.501-5.069v-10.388zm-5.52 1.716l-9.534-4.964-4.349 2.373 9.404 4.896 4.479-2.305zm-8.476-5.541l9.565 4.98 3.832-1.972-9.405-5.185-3.992 2.177z" /></svg>
        <h2 class="text-base font-semibold text-gray-700">Productos Registrados:</h2>
        <p class="text-gray-500 text-base leading-relaxed">Actualmente en el sistema se encuentran {{ $products->total() }} productos registrados.</p>
    </section>

    <section class="p-6 lg:p-8 bg-gradient-to-r from-[#004e7c] to-[#0174ab] border-b border-gray-200 mb-10 rounded-lg">
        <div class="w-full h-auto p-6 mb-3 space-y-6 bg-white border shadow-2xl sm:bg-white rounded-xl">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-white uppercase bg-[#004e7c] dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="w-1/12 px-6 py-3 text-center">Codigo</th>
                          <th scope="col" class="w-1/6 px-6 py-3 text-center">Nombre</th>
                          <th scope="col" class="w-1/3 px-6 py-3 text-center">Descripcion</th>
                          <th scope="col" class="w-1/12 px-6 py-3 text-center">Precio</th>
                          <th scope="col" class="w-1/12 px-6 py-3 text-center">Stock</th>
                          <th scope="col" class="w-1/6 px-6 py-3 text-center">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($products as $product)
                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                              <td class="px-6 py-4 text-center">{{ $product -> codigo }}</td>
                              <td class="px-6 py-4 text-center">{{ $product -> name }}</td>
                              <td class="px-6 py-4 text-center">{{ $product -> description }}</td>
                              <td class="px-6 py-4 text-center">$ {{ $product -> price }}</td>
                              <td class="px-6 py-4 text-center">{{ $product -> stock }}</td>
                              <td class="flex justify-center px-6 py-4 space-x-4 text-center">
                                <a href="{{route('product.edit',$product->id)}}"
                                     class="flex justify-center gap-2 px-2 text-xs font-bold text-black uppercase bg-white border-black rounded-lg hover:scale-90">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg>
                                </a>
                                <button wire:click="$emit('mostrarAlerta', {{$product->id}})"
                                     class="flex justify-center gap-2 px-2 py-2 text-xs font-bold text-white uppercase bg-red-700 rounded-lg hover:scale-90">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg>
                                </button>
                             </td>
                          </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-4 text-center" colspan="6">No se encontraron resultados.</td>
                        </tr>
                      @endforelse
                  </tbody>
              </table>
            </div>
            {{ $products->links() }} 
        </div>
    </section>
</div>