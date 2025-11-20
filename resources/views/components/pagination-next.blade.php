@props(['href' => '#', 'disabled' => false])

@php
    $tag = $disabled ? 'span' : ($href !== '#' ? 'a' : 'button');
@endphp

<{{ $tag }}
    @if($href !== '#' && !$disabled) href="{{ $href }}" @endif
    @if($disabled) aria-disabled="true" @endif
    {{ $attributes->class([
        'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium',
        'h-10 px-4',
        'transition-colors',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
    ]) }}
    @if($disabled)
        style="background-color: var(--pagination-disabled); color: var(--pagination-disabled-foreground); cursor: not-allowed;"
    @else
        style="color: var(--pagination-foreground);"
        onmouseenter="this.style.backgroundColor = 'var(--pagination-hover)';"
        onmouseleave="this.style.backgroundColor = 'transparent';"
    @endif
>
    <span>Next</span>
    <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</{{ $tag }}>

