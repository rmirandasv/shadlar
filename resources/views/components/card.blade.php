<div
    {{ $attributes->class([
        'rounded-lg border shadow-sm',
    ]) }}
    style="background-color: var(--color-card-background); border-color: var(--color-card-border);"
>
    {{ $slot }}
</div>

