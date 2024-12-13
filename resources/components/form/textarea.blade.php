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

    if (!empty(old($name))) {
        $value = old($name);
    }

    $errorClass = !empty($errors->first($name)) ? 'has-error' : '';
@endphp

@if (!empty($label))
    <label class="{{ $labelClasses }}" for="{{ $id }}">{{ $label }}</label>
@endif

<span class="{{ $errorClass }}">
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'form-control'
        ]) }}
    >@if($slot->isNotEmpty()){{ $slot }}@else{{ $value }}@endif</textarea>

    @error($name)
        <p class="help-block no-mb error-message">
            {{ $errors->first($name) }}
        </p>
    @enderror
</span>
