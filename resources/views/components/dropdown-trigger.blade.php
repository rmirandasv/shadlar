@props(['model' => 'dropdownOpen'])

<div @click="{{ $model }} = !{{ $model }}" {{ $attributes }}>
    {{ $slot }}
</div>

