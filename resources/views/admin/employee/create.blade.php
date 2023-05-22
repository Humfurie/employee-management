<x-app-layout>
    <x-forms.post :action="route('employee.store')">
            <x-slot name="header">
                <h3 class="card-title">New Employee</h3>
                <div name="actions">
                    <a href="{{ route('employee') }}" class="btn btn-dark">Cancel</a>
                </div>
            </x-slot>

            <div name="body">
                <div class="card-body d-flex justify-content-evenly">
                    <div>
                        <label for="first_name" class="card-text">First Name</label>
                        <input type="text" name="first_name" required>
                    </div>
                    <div>
                        <label for="middle_name" class="card-text">Middle Name</label>
                        <input type="text" name="middle_name" required>
                    </div>
                    <div>
                        <label for="last_name" class="card-text">Last Name</label>
                        <input type="text" name="last_name" required>
                    </div>
                    <div>
                        <label for="position">Position</label>
                        <select name="position" id="position" class="form-control" required>
                            <option value="" disabled selected>Select a position</option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->position }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div name="footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </x-forms.post>
</x-app-layout>
