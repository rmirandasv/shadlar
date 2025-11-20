@props(['variant' => 'primary', 'size' => 'md', 'asLink' => false, 'href' => null])

@if ($asLink)
    <a
        href="{{ $href }}"
        {{ $attributes->class([
            'inline-flex items-center justify-center gap-2 rounded font-medium self-start cursor-pointer',
            'transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2',
            'disabled:opacity-60 disabled:cursor-not-allowed',
            // variants
            'bg-primary text-primary-foreground hover:bg-primary/80 active:bg-primary/90 focus-visible:ring-primary' =>
                $variant === 'primary',
            'bg-secondary text-secondary-foreground hover:bg-secondary/70 active:bg-secondary/90 focus-visible:ring-secondary' =>
                $variant === 'secondary',
            'border border-primary text-primary bg-transparent hover:bg-primary/10 active:bg-primary/20 focus-visible:ring-primary' =>
                $variant === 'outlined',
            'bg-transparent text-muted-foreground hover:bg-muted/70 focus-visible:ring-secondary' => $variant === 'ghost',
            // sizes
            'px-3 py-1.5 text-xs' => $size === 'sm',
            'px-4 py-2 text-sm' => $size === 'md',
            'px-6 py-3 text-base' => $size === 'lg',
        ]) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->class([
            'inline-flex items-center justify-center gap-2 rounded font-medium self-start cursor-pointer',
            'transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2',
            'disabled:opacity-60 disabled:cursor-not-allowed',
            // variants
            'bg-primary text-primary-foreground hover:bg-primary/80 active:bg-primary/90 focus-visible:ring-primary' =>
                $variant === 'primary',
            'bg-secondary text-secondary-foreground hover:bg-secondary/70 active:bg-secondary/90 focus-visible:ring-secondary' =>
                $variant === 'secondary',
            'border border-primary text-primary bg-transparent hover:bg-primary/10 active:bg-primary/20 focus-visible:ring-primary' =>
                $variant === 'outlined',
            'bg-transparent text-muted-foreground hover:bg-muted/70 focus-visible:ring-secondary' => $variant === 'ghost',
            // sizes
            'px-3 py-1.5 text-xs' => $size === 'sm',
            'px-4 py-2 text-sm' => $size === 'md',
            'px-6 py-3 text-base' => $size === 'lg',
        ]) }}>
        {{ $slot }}
    </button>
@endif
