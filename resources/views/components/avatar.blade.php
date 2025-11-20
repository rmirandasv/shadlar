@props(['src' => null, 'alt' => '', 'size' => 'md', 'fallback' => null])

<div
    {{ $attributes->class([
        'relative flex shrink-0 overflow-hidden rounded-full',
        'h-8 w-8' => $size === 'sm',
        'h-10 w-10' => $size === 'md',
        'h-12 w-12' => $size === 'lg',
        'h-16 w-16' => $size === 'xl',
    ]) }}
    style="background-color: var(--avatar-background); border: 1px solid var(--avatar-border);"
>
    @if($src)
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            class="h-full w-full object-cover"
            onerror="this.style.display = 'none'; this.nextElementSibling.style.display = 'flex';"
        />
    @endif

    <div
        class="flex h-full w-full items-center justify-center text-sm font-medium"
        style="background-color: var(--avatar-fallback-background); color: var(--avatar-fallback-foreground); display: {{ $src ? 'none' : 'flex' }};"
    >
        @if($fallback)
            {{ $fallback }}
        @else
            {{ $slot }}
        @endif
    </div>
</div>

