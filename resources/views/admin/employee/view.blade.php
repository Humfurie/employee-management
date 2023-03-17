@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            <div class="card-body d-flex justify-content-evenly">
                <h3>Employee Information</h3>
                <x-slot name="actions">
                    <a href="{{ route('employee') }}" class="btn btn-dark">Back</a>
                </x-slot>
            </div>
        </x-slot>
        <x-slot name="body">
            <div class="card-body d-flex justify-content-evenly">
                <div>
                    <h5 class="card-title">First Name</h5>
                    <p class="card-text">
                        {{ $employee->first_name }}
                    </p>
                </div>
                <div>
                    <h5 class="card-title">Middle Name</h5>
                    <p class="card-text">
                        {{ $employee->middle_name }}
                    </p>
                </div>
                <div>
                    <h5 class="card-title">Last Name</h5>
                    <p class="card-text">
                        {{ $employee->last_name }}
                    </p>
                </div>
                <div>
                    <h5 class="card-title">Position</h5>
                    <p class="card-text">
                        {{ isset($employee->position[0]) ? $employee->position[0]->position : '' }}
                    </p>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
        </x-slot>
    </x-card>
@endsection
