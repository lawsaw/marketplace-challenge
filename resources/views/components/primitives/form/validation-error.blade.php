<p
    {{ $attributes->merge([
        'class' => "text-xs text-red-500 font-semibold",
    ]) }}
>{{ $slot  }}</p>
