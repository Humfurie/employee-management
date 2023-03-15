@extends('admin.layout.app')

@section('content')
    <x-forms.put :action="route('employee.deFlag', $employee)">
        <x-card>
            <x-slot name="header">
                <h3>Are You Sure You Want To Delete?</h3>

                <x-slot>
                    <a :href="view('admin.dashboard')">Cancel</a>
                </x-slot>
            </x-slot>
            <x-slot name="body">
                <div>
                    <h5>First Name</h5>
                    {{ $employee->first_name }}
                </div>
                <div>
                    <h5>Middle Name</h5>
                    {{ $employee->middle_name }}
                </div>
                <div>
                    <h5>Last Name</h5>
                    {{ $employee->last_name }}
                </div>
                <div>
                    <h5>Position</h5>
                    {{ isset($employee->position[0]) ? $employee->position[0]->position : '' }}
                </div>
            </x-slot>

            <x-slot name="footer">
                <button type="submit">Delete</button>
            </x-slot>
        </x-card>
    </x-forms.put>
@endsection
