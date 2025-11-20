@props(['model' => 'searchQuery', 'openModel' => 'isOpen', 'placeholder' => 'Search...'])

<input
    type="text"
    x-model="{{ $model }}"
    @input="filterItems()"
    @focus="{{ $openModel }} = true"
    {{ $attributes->class([
        'flex h-10 w-full rounded-md border px-3 py-2 text-sm',
        'placeholder:text-muted-foreground',
        'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2',
    ]) }}
    placeholder="{{ $placeholder }}"
    style="background-color: var(--combobox-background); color: var(--combobox-foreground); border-color: var(--combobox-border);"
    onfocus="this.style.borderColor = 'var(--form-focus-ring)'; this.style.boxShadow = '0 0 0 2px var(--form-focus-ring)';"
    onblur="this.style.borderColor = 'var(--combobox-border)'; this.style.boxShadow = 'none';"
/>

