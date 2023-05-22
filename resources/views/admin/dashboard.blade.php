<x-app-layout>
    <x-slot name="header">
        Weclome
        <div name="actions">
        </div>
    </x-slot>
    <div name="body">
        <x-table.employee-table :employee="$employee" />
    </div>
    <div name="footer">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('employee.create') }}" class="btn btn-dark">Create</a>
                <a href="{{ route('employee.showTrash') }}" class="btn btn-dark">Deleted Employees</a>
            </div>
            <div>
                {{ $employee->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
