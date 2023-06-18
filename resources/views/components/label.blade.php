@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-normal text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
