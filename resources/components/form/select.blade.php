@props([
    'id' => '',
    'name' => '',
    'options' => [],
    'value' => null,
    'label' => '',
    'labelClasses' => '',
    'multiple' => false
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
        @if (!$multiple)
            @foreach($options as $modelValue => $frontendValue)
                <option value="{{ $modelValue }}" {{ $modelValue === $value ? 'selected' : null}}>{{ $frontendValue }}</option>
            @endforeach
        @else
            @foreach($options as $groupName => $group)
                <option disabled>{{ $groupName }}</option>
                @foreach($group as $modelValue => $frontendValue)
                    <option value="{{ $modelValue }}" {{ $modelValue === $value ? 'selected' : null}}>{{ $frontendValue }}</option>
                @endforeach
                <option disabled></option>
            @endforeach
        @endif
    </select>

    @error($name)
        <p class="help-block no-mb">
            {{ $errors->first($name) }}
        </p>
    @enderror
</span>

