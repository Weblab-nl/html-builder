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

    $errorClass = !empty($errors->first($name)) ? 'has-error' : '';
@endphp

@if (!empty($label))
    <label class="{{ $labelClasses }}" for="{{ $id }}">{{ $label }}</label>
@endif

<span class="{{ $errorClass }}">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ !empty(old($name)) ? old($name) : $value }}"
        {{ $attributes->merge([
            'class' => 'form-control'
        ]) }}
    />

    @error($name)
        <p class="help-block no-mb error-message">
            {{ $errors->first($name) }}
        </p>
    @enderror
</span>
