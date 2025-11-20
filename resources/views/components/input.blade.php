@props(['type' => 'text', 'error' => false])

<input
    type="{{ $type }}"
    {{ $attributes->class([
        'flex h-10 w-full rounded-md border px-3 py-2 text-sm',
        'file:border-0 file:bg-transparent file:text-sm file:font-medium',
        'placeholder:text-muted-foreground',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2',
        'disabled:cursor-not-allowed disabled:opacity-50',
    ])->merge([
        'style' => 'background-color: var(--form-background); color: var(--form-foreground); border-color: ' . ($error ? 'var(--form-error)' : 'var(--form-border)') . ';',
    ]) }}
    onfocus="this.style.borderColor = 'var(--form-focus-ring)'; this.style.boxShadow = '0 0 0 2px var(--form-focus-ring)';"
    onblur="this.style.borderColor = '{{ $error ? 'var(--form-error)' : 'var(--form-border)' }}'; this.style.boxShadow = 'none';"
/>

