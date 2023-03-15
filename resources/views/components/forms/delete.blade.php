<form method="post" {{ $attributes->merge(['action' => '#', 'class' => 'form-horizontal']) }}>
    @method('delete')
    @csrf
    {{ $slot }}
</form>
