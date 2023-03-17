@extends('admin.layout.app')

@section('content')
    <x-forms.put :action="route('employee.update', $employee)">
        <x-card>
            <x-slot name="header">
                <h3>Update Employee</h3>
                <x-slot name="actions">
                    <a href="{{ route('employee') }}" class="btn btn-dark">Cancel</a>
                </x-slot>
            </x-slot>
            <x-slot name="body">
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
                        <label for="position">Position</label>
                        <select name="position" id="position" class="form-control" required>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}"
                                    {{ $employee->position[0]->id == $position->id ? 'selected' : '' }}>
                                    {{ $position->position }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- {{ $employee->position[0]->id }} --}}
            </x-slot>

            <x-slot name="footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </x-slot>
        </x-card>
    </x-forms.put>
@endsection
