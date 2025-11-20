@props(['defaultOpen' => false, 'title' => null])

<div {{ $attributes->class(['w-full']) }} x-data="{ open: {{ $defaultOpen ? 'true' : 'false' }} }">
    <button
        @click="open = !open"
        class="flex w-full items-center justify-between py-4 text-left font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2"
        style="color: var(--color-muted-foreground); --tw-ring-color: var(--color-ring);"
        :style="open ? { color: 'var(--color-primary)' } : {}"
    >
        <span>{{ $title }}</span>
        <svg
            class="h-5 w-5 transition-transform duration-200"
            :class="{ 'rotate-180': open }"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 max-h-0"
        x-transition:enter-end="opacity-100 max-h-screen"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 max-h-screen"
        x-transition:leave-end="opacity-0 max-h-0"
        class="overflow-hidden text-sm"
        style="color: var(--color-muted-foreground);"
    >
        <div class="pb-4">
            {{ $slot }}
        </div>
    </div>

    <hr class="border-slate-200 dark:border-slate-700" />
</div>
