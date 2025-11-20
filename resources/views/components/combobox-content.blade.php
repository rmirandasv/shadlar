@props(['model' => 'isOpen', 'searchModel' => 'searchQuery'])

<div
    x-show="{{ $model }}"
    x-cloak
    {{ $attributes->class([
        'absolute z-50 mt-1 max-h-60 w-full overflow-auto rounded-md border shadow-md',
    ]) }}
    style="background-color: var(--dropdown-background); border-color: var(--dropdown-border);"
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

