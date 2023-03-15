@extends('admin.layout.app')

@section('content')
    <x-forms.post :action="route('employee.store')">
        <x-card>

            <x-slot name="body">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name">
                </div>
                <div>
                    <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name">
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name">
                </div>
                <div>
                    <select name="position" id="position" class="form-control">
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->position }}</option>
                        @endforeach
                    </select>
                </div>
                
            </x-slot>

            <x-slot name="footer">
                <button type="submit">Save</button>
            </x-slot>
        </x-card>
    </x-forms.post>
@endsection
