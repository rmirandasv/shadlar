@props(['href' => '#'])

<a
    href="{{ $href }}"
    {{ $attributes->class([
        'transition-colors',
    ]) }}
    style="color: var(--color-muted-foreground);"
    onmouseenter="this.style.color = 'var(--color-card-foreground)'"
    onmouseleave="this.style.color = 'var(--color-muted-foreground)'"
>
    {{ $slot }}
</a>

