<x-app-layout>
    <x-slot name="header">
        Weclome
        <div name="actions">
        </div>
    </x-slot>
    <div name="body">
        {{-- {{$employees}} --}}
        <x-table.employee-table :employees="$employees" />
    </div>
    <div name="footer">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('employee.create') }}" class="btn btn-dark">Create</a>
                <a href="{{ route('employee.showTrashed') }}" class="btn btn-dark">Deleted Employees</a>
            </div>
            <div>
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
