@props(['variant' => 'primary', 'shape' => 'pill'])

<span
    {{ $attributes->class([
        'inline-flex items-center justify-center gap-1 font-medium',
        // variants
        'bg-primary text-primary-foreground' => $variant === 'primary',
        'bg-secondary text-secondary-foreground' => $variant === 'secondary',
        'bg-destructive text-destructive-foreground' => $variant === 'destructive',
        'border border-primary text-primary bg-transparent' => $variant === 'outlined',
        'bg-transparent text-muted-foreground' => $variant === 'ghost',
        // shapes
        'rounded-full px-2.5 py-0.5 text-xs w-fit' => $shape === 'pill',
        'rounded-full w-5 h-5 text-xs' => $shape === 'circle',
        'rounded px-2.5 py-0.5 text-xs w-fit' => $shape === 'square',
    ]) }}
>
    {{ $slot }}
</span>

