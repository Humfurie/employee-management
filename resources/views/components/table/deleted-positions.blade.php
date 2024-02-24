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
                    <a href="{{ route('position.showRestore', ['position' => $item->id]) }}" class="btn btn-primary">Restore</a>
                    <a href="{{ route('position.permaDelete', ['position' => $item->id]) }} "
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
