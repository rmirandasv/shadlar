@props(['model' => 'dropdownOpen', 'align' => 'left'])

<div
    x-show="{{ $model }}"
    x-cloak
    @click.away="{{ $model }} = false"
    @keydown.escape.window="{{ $model }} = false"
    {{ $attributes->class([
        'absolute z-50 mt-2 min-w-[8rem] overflow-hidden rounded-md border shadow-md',
        'origin-top-left' => $align === 'left',
        'origin-top-right' => $align === 'right',
    ]) }}
    style="background-color: var(--color-dropdown-background); border-color: var(--color-dropdown-border);"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
>
    <div class="p-1">
        {{ $slot }}
    </div>
</div>

