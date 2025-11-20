@props(['checked' => false, 'value' => null])

<label
    {{ $attributes->class([
        'inline-flex items-center gap-2 cursor-pointer',
    ]) }}
>
    <input
        type="checkbox"
        @if($checked) checked @endif
        @if($value) value="{{ $value }}" @endif
        class="h-4 w-4 rounded border transition-colors"
        style="border-color: var(--form-border); accent-color: var(--form-focus-ring);"
        onfocus="this.style.outline = '2px solid var(--form-focus-ring)'; this.style.outlineOffset = '2px';"
        onblur="this.style.outline = 'none';"
    />
    <span style="color: var(--form-foreground);">
        {{ $slot }}
    </span>
</label>

