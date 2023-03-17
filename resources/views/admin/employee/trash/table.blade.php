@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            Deleted Employees
            <x-slot name="actions">
                <a href="{{ route('employee') }}" class="btn btn-dark">Back</a>
            </x-slot>
        </x-slot>
        <x-slot name="body">
            <x-table.deleted-employee :employee="$employee" />
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-between">
                <div></div>
                <div>
                    {{ $employee->links() }}
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
