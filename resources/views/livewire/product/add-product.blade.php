<div class="px-5">
    <x-button_back>
        <x-slot name="route"> {{route('product.index')}} </x-slot>
         {{ __('product.index') }}
       </x-button_back>
    <div class="p-6 lg:p-8 bg-gradient-to-r from-[#004e7c] to-[#0174ab] border-b border-gray-200 mb-10 rounded-lg">
        <div class="w-full h-auto p-6 mb-3 space-y-6 bg-white border shadow-2xl md:bg-white rounded-xl md:px-20">
            <form action="{{ route('product.store') }}" method="POST">
                <button wire:click="$toggle('ExistProduct')">Abrir modal</button>
                @csrf
                <div class="flex justify-center pb-5">
                    <h2 class="font-semibold text-lg text-gray-500 leading-tight pt-2">
                        {{ __('REGISTRAR PRODUCTO') }}
                    </h2>
                </div>
                <div>
                    <x-label for="codigo" value="{{ __('Codigo') }}" />
                    <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autofocus autocomplete="codigo" placeholder="Ingrese codigo del producto"/>
                    <div class="flex items-center pt-3 gap-3">
                        <x-checkbox class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                        <h5 class="text-sm font-normal text-gray-600">Marque la casilla si el producto no cuenta con codigo</h5>
                    </div>
                </div>
            
                <div class="mt-4">
                    <x-label for="name" value="{{ __('Nombre') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" placeholder="Ingrese nombre del producto"/>
                </div>
            
                <div class="mt-4">
                    <x-label for="description" value="{{ __('Descripcion') }}" />
                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" required autocomplete="descripcion" placeholder="Ingrese descripcion del producto [tipo, sabor, etc...]"/>
                </div>
            
                <div class="mt-4">
                    <x-label for="price" value="{{ __('Precio') }}" />
                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" required autocomplete="price" placeholder="Ingrese precio del producto"/>
                </div>
            
                <div class="mt-4">
                    <x-label for="stock" value="{{ __('Stock') }}" />
                    <x-input id="stock" class="block mt-1 w-full" type="number" name="stock" required autocomplete="stock" placeholder="Ingrese la cantidad del producto"/>
                </div>

                <div class="flex justify-end mt-5">
                    <x-button type="submit" class="ml-4">
                        {{ __('Add') }}
                    </x-button>
                    @if (session('notification'))
                        @if ($ExistProduct)
                            <x-dialog-modal wire:model="ExistProduct">
                            <x-slot name="title">
                                Editar Producto
                            </x-slot>

                            <x-slot name="content">
                                <h1>1</h1>
                            </x-slot>

                            <x-slot name="footer">
                                <x-secondary-button wire:click="$toggle('ExistProduct')" wire:loading.attr="disabled">
                                    Aceptar
                                </x-secondary-button>
                            </x-slot>
                            </x-dialog-modal>
                        @endif
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <x-dialog-modal wire:model="ExistProduct">
    <x-slot name="title">
        Editar Producto
    </x-slot>

    <x-slot name="content">
       <h1>1</h1>
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('ExistProduct')" wire:loading.attr="disabled">
            Aceptar
        </x-secondary-button>
    </x-slot>
</x-dialog-modal> --}}
