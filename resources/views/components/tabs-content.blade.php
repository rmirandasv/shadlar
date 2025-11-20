@props(['value', 'model' => 'activeTab'])

<div
    x-show="{{ $model }} === '{{ $value }}'"
    x-cloak
    role="tabpanel"
    {{ $attributes->class([
        'mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
    ]) }}
    style="color: var(--tabs-content-foreground);"
    x-transition:enter="transition-all duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-all duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>
    {{ $slot }}
</div>

