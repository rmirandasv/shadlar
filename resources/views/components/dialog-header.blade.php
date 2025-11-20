<div
    {{ $attributes->class([
        'relative flex flex-col space-y-1.5 text-center sm:text-left p-6 pb-4',
    ]) }}
>
    {{ $slot }}
    
    @if(isset($close))
        <div class="absolute right-4 top-4">
            {{ $close }}
        </div>
    @endif
</div>

