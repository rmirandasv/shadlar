@props(['model' => 'sidebarOpen', 'defaultOpen' => true])

<div
    x-data="{ {{ $model }}: @js($defaultOpen) }"
    {{ $attributes }}
>
    {{ $slot }}
</div>

