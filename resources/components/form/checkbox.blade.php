@props([
    'id' => '',
    'name' => '',
    'value' => null,
    'checked' => false,
    'label' => '',
    'labelClasses' => '',
])

@php
    if (empty($id)) {
        $id = $name;
    }
@endphp

<input
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        value="{{ $value }}"
        {{ $checked ? 'checked' : null }}
        {{ $attributes->merge([
            'class' => 'form-control'
        ]) }}
/>

@if($slot->isNotEmpty())
    {{ $slot }}
@else
    <label class="{{ $labelClasses }}" for="{{ $id }}">
        {{ $label }}
    </label>
@endif