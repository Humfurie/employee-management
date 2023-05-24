<div>
    <form action="{{ route('employee') }}" method="get">
        <input type="text" name="search" id="search" placeholder="Search">
        {{-- <button type="submit">Search</button> --}}
    </form>
</div>
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
                    {{ isset($employee->position[0]) ? $employee->position[0]->position : '' }}
                </td>
                <td>
                    <a href="{{ route('employee.show', ['employee' => $employee->id]) }}"
                        class="btn btn-primary">View</a>
                    <a href="{{ route('employee.edit', ['employee' => $employee->id]) }}"
                        class="btn btn-warning">Edit</a>
                    <a href="{{ route('employee.showDelete', ['employee' => $employee->id]) }}"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
