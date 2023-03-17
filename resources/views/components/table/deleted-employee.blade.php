<table class="table">
    <thead>
        <tr>
            <th scope="col">
                First Name
            </th>
            <th scope="col">
                Middle Name
            </th>
            <th scope="col">
                Last Name
            </th>
            <th scope="col">
                Position
            </th>
            <th scope="col">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employee as $item)
            <tr>
                <td>
                    {{ $item->first_name }}
                </td>
                <td>
                    {{ $item->middle_name }}
                </td>
                <td>
                    {{ $item->last_name }}
                </td>
                <td>
                    {{ isset($item->position[0]) ? $item->position[0]->position : '' }}
                </td>
                <td>
                    <a href="{{ route('employee.showRestore', ['employee' => $item->id]) }}" class="btn btn-primary">Restore</a>
                    <a href="{{ route('employee.permaDelete', ['employee' => $item->id]) }}"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
