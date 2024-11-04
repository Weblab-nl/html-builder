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

    $errorClass = !empty($errors->first($name)) ? 'has-error' : '';
@endphp

@if (!empty($label))
    <label class="{{ $labelClasses }}" for="{{ $id }}">{{ $label }}</label>
@endif

<span class="{{ $errorClass }}">
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

    @error($name)
        <p class="help-block no-mb">
            {{ $errors->first($name) }}
        </p>
    @enderror
</span>

