<x-app-layout>

    <x-forms.put :action="route('employee.softDelete', $employee->id)">

        <x-slot name="header">
            <h3 class="card-text">Are You Sure You Want To Delete?</h3>

            <div name="actions">
                <a href="{{ route('employee') }}" class="btn btn-dark">Cancel</a>
            </div>
        </x-slot>
        <div name="body">
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
                {{ isset($employee->position) ? $employee->position->position : '' }}
            </div>
        </div>

        <div name="footer">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>

    </x-forms.put>
</x-app-layout>
