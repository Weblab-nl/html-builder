@props([
    'for' => '',
    'text' => ''
])

<label for="{{ $for }}" {{ $attributes }}>{{ $text }}</label>
