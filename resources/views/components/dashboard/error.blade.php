<p
    {{ $attributes->merge([
        'class' => "text-sm text-red-500 font-semibold",
    ]) }}
>{{ $slot  }}</p>
