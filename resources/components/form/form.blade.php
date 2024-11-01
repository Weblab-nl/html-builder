<form {{$attributes->merge([
    'method' => 'POST',
    'action' => '',
    'accept-charset' => 'UTF-8',
])}}>
    @csrf
    {{ $slot }}
</form>
