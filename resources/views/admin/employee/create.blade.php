@inject('model', '\App\Models\Employee')

@extends('admin.layout.app')

@section('content')
    <x-forms.post :action="route('employee.store')">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name">
        </div>
        <div>
            <label for="middle_name">Middle Name</label>
            <input type="text" name="middle_name">
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name">
        </div>
        <button type="submit">Save</button>
    </x-forms.post>
@endsection
