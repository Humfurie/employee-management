<table class="table-auto">
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
        @foreach ($employees as $employee)
            <tr>
                {{-- <td>
                   {{ $employee}}
                </td> --}}
                <td>
                    {{ $employee->first_name }}
                </td>
                <td>
                    {{ $employee->middle_name }}
                </td>
                <td>
                    {{ $employee->last_name }}
                </td>
                <td>
                    {{ isset($employee->position) ? $employee->position->position : '' }}
                </td>
                <td>
                    <form action="{{ route('employee.restore', ['employee' => $employee->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit">Restore</button>
                        </form>

                    <a href="{{ route('employee.forceDelete', ['employee' => $employee->id]) }}"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
