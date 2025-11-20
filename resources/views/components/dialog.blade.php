@props(['model' => 'open', 'trigger' => null])
<div x-data="{ {{ $model }}: false }">
    <button x-on:click="{{ $model }} = true">
        {{ $trigger }}
    </button>
    <div x-show="{{ $model }}" x-cloak
        @keydown.escape.window="{{ $model }} = false" class="fixed inset-0 z-50 flex items-center justify-center"
        style="background-color: var(--color-dialog-overlay);" x-transition:enter="ease-out duration-200"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <div @click.away="{{ $model }} = false" class="relative z-50 w-full max-w-lg rounded-lg border shadow-lg"
            style="background-color: var(--color-dialog-background); border-color: var(--color-dialog-border);"
            x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
            {{ $slot }}
        </div>
    </div>
</div>
