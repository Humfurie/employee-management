@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            Weclome
            <x-slot name="actions">
            </x-slot>
        </x-slot>
        <x-slot name="body">
            <x-table.employee-table :employee="$employee" />
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('employee.create') }}" class="btn btn-dark">Create</a>
                    <a href="{{ route('employee.showTrash') }}" class="btn btn-dark">Deleted Employees</a>
                </div>
                <div>
                    {{ $employee->links() }}
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
