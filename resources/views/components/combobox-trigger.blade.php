@props(['model' => 'selectedValue', 'searchModel' => 'searchQuery', 'openModel' => 'isOpen', 'placeholder' => 'Select framework...'])

<button
    type="button"
    @click="{{ $openModel }} = !{{ $openModel }}"
    {{ $attributes->class([
        'flex h-10 w-full items-center justify-between rounded-md border px-3 py-2 text-sm',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2',
        'disabled:cursor-not-allowed disabled:opacity-50',
    ]) }}
    style="background-color: var(--combobox-background); color: var(--combobox-foreground); border-color: var(--combobox-border);"
    onfocus="this.style.borderColor = 'var(--form-focus-ring)'; this.style.boxShadow = '0 0 0 2px var(--form-focus-ring)';"
    onblur="this.style.borderColor = 'var(--combobox-border)'; this.style.boxShadow = 'none';"
>
    <span x-text="{{ $model }} ? {{ $model }}.label : '{{ $placeholder }}'" 
          :style="{{ $model }} ? 'color: var(--combobox-foreground);' : 'color: var(--form-placeholder);'">
    </span>
    <svg class="h-4 w-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
    </svg>
</button>

