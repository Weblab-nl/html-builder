@props([
    'id' => '',
    'name' => '',
    'type' => 'text',
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

<input
    id="{{ $id }}"
    name="{{ $name }}"
    type="{{ $type }}"
    value="{{ $value }}"
    {{ $attributes->merge([
        'class' => 'form-control'
    ]) }}
/>
