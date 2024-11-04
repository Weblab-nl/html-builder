@props([
    'id' => '',
    'name' => '',
    'options' => [],
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

<select
    id="{{ $id }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'form-control'
    ]) }}
>
    @foreach($options as $modelValue => $frontendValue)
        <option value="{{ $modelValue }}" {{ $modelValue === $value ? 'selected' : null}}>{{ $frontendValue }}</option>
    @endforeach
</select>
