@props(['name', 'value' => null])

<div
    {{ $attributes->class([
        'grid gap-2',
    ]) }}
    role="radiogroup"
>
    {{ $slot }}
</div>

