<div class="px-5">
    <x-button_back>
        <x-slot name="route"> {{route('product.index')}} </x-slot>
         {{ __('product.index') }}
       </x-button_back>
    <div class="p-6 lg:p-8 bg-gradient-to-r from-[#004e7c] to-[#0174ab] border-b border-gray-200 mb-10 rounded-lg">
        <div class="w-full h-auto p-6 mb-3 space-y-6 bg-white border shadow-2xl md:bg-white rounded-xl md:px-20">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="flex justify-center pb-5">
                    <h2 class="font-semibold text-lg text-gray-500 leading-tight pt-2">
                        {{ __('REGISTRAR PRODUCTO') }}
                    </h2>
                </div>
                <div>
                    <x-label for="codigo" value="{{ __('Codigo') }}" />
                    <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autofocus autocomplete="codigo" placeholder="Ingrese codigo del producto"/>
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
                    <x-button wire:click="store" class="ml-4">
                        {{ __('Add') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
    
</div>
{{--  <button wire:click="$toggle('confirming')">Abrir Modal</button>

 <x-confirmation-modal wire:model="confirming">
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="content">
        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('confirming')" wire:loading.attr="disabled">
            Nevermind
        </x-secondary-button>

        <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
            Delete Account
        </x-danger-button>
    </x-slot>
</x-confirmation-modal> --}}
