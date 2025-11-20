@props(['value', 'model' => 'selectedValue', 'openModel' => 'isOpen', 'searchModel' => 'searchQuery'])

<button
    type="button"
    data-combobox-item
    data-combobox-value="{{ $value }}"
    @click="{{ $model }} = { value: '{{ $value }}', label: $el.textContent.trim() }; {{ $openModel }} = false; {{ $searchModel }} = ''; $dispatch('combobox-selected', { value: '{{ $value }}' });"
    {{ $attributes->class([
        'relative flex cursor-pointer select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none w-full',
        'transition-colors',
    ]) }}
    :style="({{ $model }} && {{ $model }}.value === '{{ $value }}') ? 'background-color: var(--combobox-hover); color: var(--dropdown-foreground);' : 'color: var(--dropdown-foreground);'"
    onmouseenter="if (!({{ $model }} && {{ $model }}.value === '{{ $value }}')) this.style.backgroundColor = 'var(--combobox-hover)';"
    onmouseleave="if (!({{ $model }} && {{ $model }}.value === '{{ $value }}')) this.style.backgroundColor = 'transparent';"
>
    {{ $slot }}
</button>

