<nav
    {{ $attributes->class([
        'flex items-center justify-between border-b',
    ]) }}
    style="background-color: var(--navigation-background); border-color: var(--navigation-border);"
>
    @if(isset($start))
        <div class="flex items-center gap-4">
            {{ $start }}
        </div>
    @endif

    @if(isset($center))
        <div class="flex items-center gap-1">
            {{ $center }}
        </div>
    @endif

    @if(isset($end))
        <div class="flex items-center gap-4">
            {{ $end }}
        </div>
    @endif
</nav>

