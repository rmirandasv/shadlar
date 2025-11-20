@props(['checked' => false, 'model' => null])

<label
    {{ $attributes->class([
        'inline-flex items-center gap-2 cursor-pointer',
    ]) }}
    x-data="{ checked: @js($checked) }"
    @if($model)
        x-modelable="checked"
        x-model="{{ $model }}"
    @endif
    @click="checked = !checked"
>
    <div
        class="relative h-6 w-11 rounded-full transition-colors duration-200 ease-in-out"
        :style="checked ? 'background-color: var(--form-focus-ring);' : 'background-color: var(--form-border);'"
    >
        <div
            class="absolute left-1 top-1 h-4 w-4 rounded-full bg-white transition-transform duration-200 ease-in-out"
            :class="checked ? 'translate-x-5' : ''"
            style="box-shadow: 0 2px 4px rgba(0,0,0,0.2);"
        ></div>
    </div>
    <span style="color: var(--form-foreground);">
        {{ $slot }}
    </span>
</label>

