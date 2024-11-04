@props([
    'id' => '',
    'name' => '',
    'value' => null,
    'label' => '',
    'labelClasses' => '',
])

@php
    if (empty($id)) {
        $id = $name;
    }
@endphp

@if (!empty($label))
    <label class="{{ $labelClasses }}" for="{{ $id }}">{{ $label }}</label>
@endif

<textarea
    id="{{ $id }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'form-control'
    ]) }}
>@if($slot->isNotEmpty()){{ $slot }}@else{{ $value }}@endif</textarea>
