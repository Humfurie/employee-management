<x-app-layout>
    <x-slot name="header">
        Deleted Employees
        <div name="actions">
            <a href="{{ route('employee') }}" class="btn btn-dark">Back</a>
        </div>
    </x-slot>
    <div name="actions">
        <a href="{{ route('employee') }}" class="btn btn-dark">Back</a>
    </div>
    <div name="body">
        <x-table.deleted-employee :employees="$employees" />
    </div>
    <div name="footer">
        <div class="d-flex justify-content-between">
            <div></div>
            <div>
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
