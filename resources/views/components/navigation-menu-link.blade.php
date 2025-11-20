@props(['href' => '#', 'active' => false])

@php
    $tag = $href !== '#' ? 'a' : 'button';
@endphp

<{{ $tag }}
    @if($href !== '#') href="{{ $href }}" @endif
    {{ $attributes->class([
        'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium',
        'px-4 py-2',
        'transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
    ]) }}
    @if($active)
        style="background-color: var(--navigation-link-active); color: var(--navigation-link-active-foreground);"
    @else
        style="color: var(--navigation-foreground);"
        onmouseenter="this.style.backgroundColor = 'var(--navigation-link-hover)';"
        onmouseleave="this.style.backgroundColor = 'transparent';"
    @endif
>
    {{ $slot }}
</{{ $tag }}>

