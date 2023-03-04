<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <table>
        <thead>
            <tr>
                <th>
                    First Name
                </th>
                <th>
                    Middle Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Position
                </th>
                <th>
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
                        {{ $item->position }}
                    </td>
                    <td>
                        <a href="{{ route('employee.show', ['employee' => $item->id]) }}">View</a>
                        <a href="{{ route('employee.edit', ['employee' => $item->id]) }}">Edit</a>
                        <a href="{{ route('employee.delete', ['employee' => $item->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
