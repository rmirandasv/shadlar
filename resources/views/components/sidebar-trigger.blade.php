@props(['model' => 'sidebarOpen'])

<button
    @click="{{ $model }} = !{{ $model }}"
    {{ $attributes->class([
        'inline-flex items-center justify-center rounded-md p-2 text-sm font-medium transition-colors',
        'hover:bg-accent hover:text-accent-foreground',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring',
    ]) }}
    style="color: var(--sidebar-foreground);"
    onmouseenter="this.style.backgroundColor = 'var(--sidebar-accent)'; this.style.color = 'var(--sidebar-accent-foreground)'"
    onmouseleave="this.style.backgroundColor = 'transparent'; this.style.color = 'var(--sidebar-foreground)'"
>
    {{ $slot }}
</button>

