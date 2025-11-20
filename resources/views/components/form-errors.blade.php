@props(['errors' => []])

@if(!empty($errors))
    <div
        {{ $attributes->class([
            'text-sm',
        ]) }}
        style="color: var(--form-error-foreground);"
    >
        @foreach($errors as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

