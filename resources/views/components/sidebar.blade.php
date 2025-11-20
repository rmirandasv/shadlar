@props(['model' => 'sidebarOpen', 'variant' => 'sidebar', 'side' => 'left'])

<aside
    :class="{{ $model }} ? 'w-64' : 'w-0'"
    {{ $attributes->class([
        'group peer relative flex h-screen flex-col overflow-hidden transition-all duration-300 ease-in-out',
        'border-r' => $side === 'left',
        'border-l' => $side === 'right',
    ]) }}
    style="background-color: var(--sidebar-background); border-color: var(--sidebar-border);"
>
    <div
        x-show="{{ $model }}"
        x-transition:enter="transition-opacity duration-300 ease-in-out"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-300 ease-in-out"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="flex h-full w-64 flex-col"
    >
        {{ $slot }}
    </div>
</aside>

