@props(['model' => 'sidebarOpen'])

<main
    {{ $attributes->class([
        'flex-1 h-screen overflow-y-auto transition-all duration-300 ease-in-out',
    ]) }}
    :class="{{ $model }} ? 'ml-0' : 'ml-0'"
    style="transition: margin-left 300ms ease-in-out;"
>
    {{ $slot }}
</main>

