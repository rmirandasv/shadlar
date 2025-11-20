<div
    {{ $attributes->class([
        'flex flex-col items-center justify-center text-center',
        'py-16 px-4',
    ]) }}
    style="background-color: var(--empty-background);"
>
    {{ $slot }}
</div>

