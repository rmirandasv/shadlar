@props(['variant' => 'info', 'title' => null, 'description' => null])

@php
    $bgColors = [
        'success' => 'var(--color-success-bg)',
        'error' => 'var(--color-error-bg)',
        'warning' => 'var(--color-warning-bg)',
        'info' => 'var(--color-info-bg)',
    ];
    $borderColors = [
        'success' => 'var(--color-success-border)',
        'error' => 'var(--color-error-border)',
        'warning' => 'var(--color-warning-border)',
        'info' => 'var(--color-info-border)',
    ];
@endphp

<div
    {{ $attributes->class([
        'rounded-lg border p-4',
        'flex gap-3',
    ]) }}
    style="background-color: {{ $bgColors[$variant] ?? $bgColors['info'] }}; border-color: {{ $borderColors[$variant] ?? $borderColors['info'] }};"
>
    @if(isset($icon))
        <div
            @class([
                'flex-shrink-0',
                'text-success' => $variant === 'success',
                'text-error' => $variant === 'error',
                'text-warning' => $variant === 'warning',
                'text-info' => $variant === 'info',
            ])
        >
            {{ $icon }}
        </div>
    @endif

    <div class="flex-1 space-y-1">
        @if($title)
            <h4
                @class([
                    'font-semibold leading-none tracking-tight',
                    'text-success-foreground' => $variant === 'success',
                    'text-error-foreground' => $variant === 'error',
                    'text-warning-foreground' => $variant === 'warning',
                    'text-info-foreground' => $variant === 'info',
                ])
            >
                {{ $title }}
            </h4>
        @endif

        @if($description)
            <p
                @class([
                    'text-sm',
                    'text-success-foreground/80' => $variant === 'success',
                    'text-error-foreground/80' => $variant === 'error',
                    'text-warning-foreground/80' => $variant === 'warning',
                    'text-info-foreground/80' => $variant === 'info',
                ])
            >
                {{ $description }}
            </p>
        @endif

        @if(isset($slot) && trim($slot))
            <div
                @class([
                    'text-sm',
                    'text-success-foreground/80' => $variant === 'success',
                    'text-error-foreground/80' => $variant === 'error',
                    'text-warning-foreground/80' => $variant === 'warning',
                    'text-info-foreground/80' => $variant === 'info',
                ])
            >
                {{ $slot }}
            </div>
        @endif
    </div>
</div>

