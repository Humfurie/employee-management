@extends('admin.layout.app')

@section('content')
    <x-forms.put :action="route('position.update', $positions)">
        <x-card>
            <x-slot name="header">
                <h3>Are You Sure You Want To Delete?</h3>
                <x-slot name="actions">
                    <a href="{{ route('position') }}" class="btn btn-dark">Cancel</a>
                </x-slot>
            </x-slot>

            <x-slot name="body">
                <div>
                    <label for="position">Position</label>
                    <input type="text" name="position" value="s{{ $positions->position }}" required>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </x-slot>
        </x-card>
    </x-forms.put>
@endsection
