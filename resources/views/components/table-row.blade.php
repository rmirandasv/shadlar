@props(['hover' => true])

<tr
    {{ $attributes->class([
        'border-b transition-colors',
        'hover:bg-[var(--table-row-hover)]' => $hover,
    ]) }}
    style="border-color: var(--table-row-border);"
    onmouseenter="{{ $hover ? "this.style.backgroundColor = 'var(--table-row-hover)'" : '' }}"
    onmouseleave="{{ $hover ? "this.style.backgroundColor = 'transparent'" : '' }}"
>
    {{ $slot }}
</tr>

