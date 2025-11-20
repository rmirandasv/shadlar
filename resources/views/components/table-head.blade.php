@props(['align' => 'left'])

<th
    {{ $attributes->class([
        'h-12 px-4 text-left align-middle font-medium',
        'text-left' => $align === 'left',
        'text-center' => $align === 'center',
        'text-right' => $align === 'right',
    ]) }}
    style="color: var(--table-header-foreground);"
>
    {{ $slot }}
</th>

