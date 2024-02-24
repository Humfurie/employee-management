<table class="table-fixed w-full">
    <thead class="table-header-group">
        <tr class="table-row">
            <th class="table-cell text-left">
                Position
            </th>
            <th class="table-cell text-left">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="table-row-group">
        @foreach ($positions as $item)
            <tr class="table-row">
                <td class="table-cell">
                    {{ $item->position }}
                </td>
                <td class="table-cell">
                    <a href="{{ route('position.show', ['position' => $item->id]) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('position.edit', ['position' => $item->id]) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('position.showDelete', ['position' => $item->id]) }} "
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
