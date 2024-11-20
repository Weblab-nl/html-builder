@props([
    'id' => '',
    'name' => '',
    'value' => null,
])

@php
    if (empty($id)) {
        $id = $name;
    }
@endphp

<input
    id="{{ $name }}"
    name="{{ $name }}"
    class="form-control"
    type="hidden"
    value="{{ $value }}"
>
