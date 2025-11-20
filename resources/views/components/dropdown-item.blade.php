@props(['disabled' => false, 'variant' => 'default'])

@php
    $tag = $attributes->has('href') ? 'a' : 'button';
    $textColor = $variant === 'destructive' ? 'var(--color-destructive)' : 'var(--color-dropdown-foreground)';
@endphp

<{{ $tag }}
    {{ $attributes->class([
        'relative flex cursor-pointer select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none',
        'transition-colors',
        'data-[disabled]:pointer-events-none data-[disabled]:opacity-50',
    ])->merge([
        'style' => "color: {$textColor};",
        'data-disabled' => $disabled ? 'true' : null,
        'onmouseenter' => !$disabled ? "this.style.backgroundColor = 'var(--color-dropdown-hover)'" : null,
        'onmouseleave' => !$disabled ? "this.style.backgroundColor = 'transparent'" : null,
        'onfocus' => !$disabled ? "this.style.backgroundColor = 'var(--color-dropdown-hover)'" : null,
        'onblur' => !$disabled ? "this.style.backgroundColor = 'transparent'" : null,
    ]) }}
    @if($disabled)
        disabled
    @endif
>
    {{ $slot }}
</{{ $tag }}>

