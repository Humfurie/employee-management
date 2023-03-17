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
                    <a href="{{ route('position.show', ['position' => $item->id]) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('position.edit', ['position' => $item->id]) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('position.showDelete', ['position' => $item->id]) }} "
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
