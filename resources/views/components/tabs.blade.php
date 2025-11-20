@props(['defaultValue' => null, 'model' => 'activeTab'])

<div
    x-data="{ {{ $model }}: @js($defaultValue) }"
    {{ $attributes }}
>
    {{ $slot }}
</div>

