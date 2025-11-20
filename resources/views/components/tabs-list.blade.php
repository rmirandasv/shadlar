<div
    {{ $attributes->class([
        'inline-flex h-10 items-center justify-center rounded-md p-1',
    ]) }}
    style="background-color: var(--tabs-list-background);"
    role="tablist"
>
    {{ $slot }}
</div>

