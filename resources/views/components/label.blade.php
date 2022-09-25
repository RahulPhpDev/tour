@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm font-medium text-gray-900 block mb-2 block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
