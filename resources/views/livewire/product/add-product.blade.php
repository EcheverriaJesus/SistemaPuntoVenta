<x-button-add :ruta="route('order.index')">
    Agregar Producto
 </x-button-add>
 
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


<form action="{{ route('product.store') }}" method="POST">
    @csrf
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

    <x-button class="ml-4">
        {{ __('Add') }}
    </x-button>
</form>