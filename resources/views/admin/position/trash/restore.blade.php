@extends('admin.layout.app')

@section('content')
    <x-forms.put :action="route('position.restore', $positions)">
        <x-card>
            <x-slot name="header">
                <h3>Restore Position?</h3>
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
                <button type="submit" class="btn btn-primary">Restore</button>
            </x-slot>
        </x-card>
    </x-forms.put>
@endsection
