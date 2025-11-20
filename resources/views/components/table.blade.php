<div
    {{ $attributes->class([
        'relative w-full overflow-auto',
    ]) }}
>
    <table
        class="w-full caption-bottom text-sm"
        style="background-color: var(--table-background); color: var(--table-foreground);"
    >
        {{ $slot }}
    </table>
</div>

