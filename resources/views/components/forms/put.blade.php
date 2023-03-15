<form method="post">
    @csrf
    @method('put')
    {{ $slot }}
</form>
