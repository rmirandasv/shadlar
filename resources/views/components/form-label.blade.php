@props(['required' => false, 'for' => null])

<label
    @if($for) for="{{ $for }}" @endif
    {{ $attributes->class([
        'text-sm font-medium leading-none',
    ]) }}
    style="color: var(--form-label);"
>
    {{ $slot }}
    @if($required)
        <span style="color: var(--form-error);">*</span>
    @endif
</label>

