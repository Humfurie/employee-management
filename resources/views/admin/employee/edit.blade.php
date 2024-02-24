<x-app-layout>
    <x-forms.put :action="route('employee.update', $employee)">
        <x-slot name="header">
            <h3>Update Employee</h3>
        </x-slot>
        <div name="body">
            <div name="actions">
                <a href="{{ route('employee') }}" class="btn btn-dark">Cancel</a>
            </div>
            <div class="card-body d-flex justify-content-evenly">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="{{ $employee->first_name }}" required>
                </div>
                <div>
                    <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name" value="{{ $employee->middle_name }}" required>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="{{ $employee->last_name }}" required>
                </div>
                <div>
                    <label for="position_id">Position</label>
                    <select name="position_id" class="form-control" required>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}"
                                {{ $employee->position->id == $position->id ? 'selected' : '' }}>
                                {{ $position->position }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- {{ $employee->position[0]->id }} --}}
        </div>

        <div name="footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </x-forms.put>
</x-app-layout>
