@extends('admin.layout.app')

@section('content')
    <x-forms.post :action="route('employee.store')">
        <x-card>
            <x-slot name="header">
                <h3 class="card-title">New Employee</h3>
                <x-slot name="actions">
                    <a href="{{ route('employee') }}" class="btn btn-dark">Cancel</a>
                </x-slot>
            </x-slot>
            
            <x-slot name="body">
                <div class="card-body d-flex justify-content-evenly">
                    <div>
                        <label for="first_name" class="card-text">First Name</label>
                        <input type="text" name="first_name" required>
                    </div>
                    <div>
                        <label for="middle_name" class="card-text">Middle Name</label>
                        <input type="text" name="middle_name" required>
                    </div>
                    <div>
                        <label for="last_name" class="card-text">Last Name</label>
                        <input type="text" name="last_name" required>
                    </div>
                    <div>
                        <label for="position">Position</label>
                        <select name="position" id="position" class="form-control" required>
                            <option value="" disabled selected>Select a position</option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->position }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </x-slot>
        </x-card>
    </x-forms.post>
@endsection
