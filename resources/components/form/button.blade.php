@props([
    'text' => null,
])

<button {{$attributes}}>@if($slot->isNotEmpty()){{ $slot }}@else{{ $text }}@endif</button>