@props([
    'id' => '',
    'name' => '',
    'value' => 1,
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
    type="radio"
    value="{{ $value }}"
    {{ $checked ? 'checked' : null }}
    {{ $attributes }}
/>

@if($slot->isNotEmpty())
    {{ $slot }}
@else
    <label class="{{ $labelClasses }}" for="{{ $id }}">
        {{ $label }}
    </label>
@endif
