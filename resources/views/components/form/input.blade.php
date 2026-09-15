@props([
    'name',
    'label',
    'type' => 'text',
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}" 
        required
        {{ $attributes->merge(['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm']) }}
    >

    @error('{{ $name }}')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
