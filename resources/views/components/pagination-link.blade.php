@props(['href' => '#', 'isActive' => false, 'disabled' => false])

@php
    $tag = $disabled ? 'span' : ($href !== '#' ? 'a' : 'button');
@endphp

<{{ $tag }}
    @if($href !== '#' && !$disabled) href="{{ $href }}" @endif
    @if($disabled) aria-disabled="true" @endif
    {{ $attributes->class([
        'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium',
        'h-10 w-10',
        'transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
    ]) }}
    @if($isActive)
        style="background-color: var(--pagination-active-background); color: var(--pagination-active-foreground);"
    @elseif($disabled)
        style="background-color: var(--pagination-disabled); color: var(--pagination-disabled-foreground); cursor: not-allowed;"
    @else
        style="color: var(--pagination-foreground);"
        onmouseenter="this.style.backgroundColor = 'var(--pagination-hover)';"
        onmouseleave="this.style.backgroundColor = 'transparent';"
    @endif
>
    {{ $slot }}
</{{ $tag }}>

