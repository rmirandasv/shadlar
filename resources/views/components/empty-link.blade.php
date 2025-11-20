@props(['href' => '#'])

<a
    href="{{ $href }}"
    {{ $attributes->class([
        'mt-6 inline-flex items-center gap-2 text-sm transition-colors',
    ]) }}
    style="color: var(--empty-muted-foreground);"
    onmouseenter="this.style.color = 'var(--empty-foreground)';"
    onmouseleave="this.style.color = 'var(--empty-muted-foreground)';"
>
    {{ $slot }}
    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
    </svg>
</a>

