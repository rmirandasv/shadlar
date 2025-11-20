@props(['model' => 'dropdownOpen'])

<div x-data="{ {{ $model }}: false }" class="relative inline-block text-left">
    {{ $slot }}
</div>

