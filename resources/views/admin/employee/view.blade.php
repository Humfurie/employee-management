@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            <h3>Employee Information</h3>
            <x-slot name="actions">
                <a href="{{ route('index') }}">Back</a>
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
            <a href="{{route('employee.create')}}" class="card-link">Create New Employee</a>
        </x-slot>
    </x-card>
@endsection
