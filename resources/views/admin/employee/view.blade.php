@extends('admin.layout.app')

@section('content')
    <x-card>
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
                {{ isset($employee->position[0]) ? $employee->position[0]->position : ''}}
            </div>
        </x-slot>
    </x-card>
@endsection
