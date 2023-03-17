@extends('admin.layout.app')

@section('content')
    <x-forms.post :action="route('position.store')">
        <x-card>
            <x-slot name="header">
                <h3>New Position</h3>
                <x-slot name="actions">
                    <a href="{{ route('position') }}" class="btn btn-dark">Cancel</a>
                </x-slot>
            </x-slot>

            <x-slot name="body">
                <div>
                    <label for="position">Position</label>
                    <input type="text" name="position" required>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </x-slot>
        </x-card>
    </x-forms.post>
@endsection
