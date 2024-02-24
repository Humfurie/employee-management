<table class="table-fixed w-full">
    <thead class="table-header-group">
        <tr class="table-row">
            <th class="table-cell text-left">
                First Name
            </th>
            <th class="table-cell text-left">
                Middle Name
            </th>
            <th class="table-cell text-left">
                Last Name
            </th>
            <th class="table-cell text-left">
                Position
            </th>
            <th class="table-cell text-left">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="table-row-group">
        @foreach ($employee as $item)
            <tr class="table-row">
                <td class="table-cell">
                    {{ $item->first_name }}
                </td>
                <td class="table-cell">
                    {{ $item->middle_name }}
                </td>
                <td class="table-cell">
                    {{ $item->last_name }}
                </td>
                <td class="table-cell">
                    {{ isset($item->position[0]) ? $item->position[0]->position : '' }}
                </td>
                <td class="table-cell">
                    <a href="{{ route('employee.showRestore', ['employee' => $item->id]) }}" class="btn btn-primary">Restore</a>
                    <a href="{{ route('employee.permaDelete', ['employee' => $item->id]) }}"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
