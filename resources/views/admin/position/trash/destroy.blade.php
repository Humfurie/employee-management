@extends('admin.layout.app')

@section('content')
    <x-forms.delete :action="route('position.delete', $positions)">
        <x-card>
            <x-slot name="header">
                <h3>Delete Position?</h3>
                <x-slot name="actions">
                    <a href="{{ route('position.showTrash') }}" class="btn btn-dark" >Cancel</a>
                </x-slot>
            </x-slot>

            <x-slot name="body">
                <div>
                    <h5>Position Name</h5>
                    {{ $positions->position }}
                </div>
            </x-slot>

            <x-slot name="footer">
                <button type="submit" class="btn btn-danger">Delete</button>
            </x-slot>
        </x-card>
    </x-forms.delete>
@endsection
