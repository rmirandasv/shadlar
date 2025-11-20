@props(['align' => 'left'])

<td
    {{ $attributes->class([
        'p-4 align-middle',
        'text-left' => $align === 'left',
        'text-center' => $align === 'center',
        'text-right' => $align === 'right',
    ]) }}
    style="color: var(--table-foreground);"
>
    {{ $slot }}
</td>

