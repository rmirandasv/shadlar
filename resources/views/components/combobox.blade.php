@props(['model' => 'selectedValue', 'searchModel' => 'searchQuery', 'openModel' => 'isOpen'])

<div
    x-data="{
        {{ $openModel }}: false,
        {{ $searchModel }}: '',
        {{ $model }}: null,
        filterItems() {
            const query = this.{{ $searchModel }}.toLowerCase();
            const items = Array.from(this.$el.querySelectorAll('[data-combobox-item]'));
            items.forEach(item => {
                const label = item.textContent.trim().toLowerCase();
                if (!query || label.includes(query)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    }"
    @click.away="{{ $openModel }} = false"
    @keydown.escape.window="{{ $openModel }} = false"
    class="relative w-full"
    {{ $attributes }}
>
    {{ $slot }}
</div>

