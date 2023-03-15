<form method="POST" {{ $attributes->merge(['action' => '#', 'class' => 'form-horizontal']) }}>
    @csrf

    {{ $slot }}
</form>
