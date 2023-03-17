<table class="table">
    <thead>
        <tr>
            <th scope="col">
                Position
            </th>
            <th scope="col">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($positions as $item)
            <tr>
                <td>
                    {{ $item->position }}
                </td>
                <td>
                    <a href="{{ route('position.showRestore', ['position' => $item->id]) }}" class="btn btn-primary">Restore</a>
                    <a href="{{ route('position.permaDelete', ['position' => $item->id]) }} "
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
