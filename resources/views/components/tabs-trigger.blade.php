@props(['value', 'model' => 'activeTab'])

<button
    type="button"
    role="tab"
    @click="{{ $model }} = '{{ $value }}'"
    :aria-selected="{{ $model }} === '{{ $value }}'"
    {{ $attributes->class([
        'inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium',
        'ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2',
        'disabled:pointer-events-none disabled:opacity-50',
    ]) }}
    x-bind:style="{{ $model }} === '{{ $value }}' 
        ? 'color: var(--tabs-trigger-active-foreground); background-color: var(--form-background); box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);' 
        : 'color: var(--tabs-trigger-foreground); background-color: transparent;'"
    @mouseenter="if ({{ $model }} !== '{{ $value }}') $el.style.color = 'var(--tabs-trigger-hover-foreground)';"
    @mouseleave="if ({{ $model }} !== '{{ $value }}') $el.style.color = 'var(--tabs-trigger-foreground)';"
>
    {{ $slot }}
</button>

