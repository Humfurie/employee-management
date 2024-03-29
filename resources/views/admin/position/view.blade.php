@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            <h3>Position Information</h3>
            <x-slot name="actions">
                <a href="{{ route('position') }}" class="btn btn-dark">Back</a>
            </x-slot>
        </x-slot>

        <x-slot name="body">
            <div>
                <h5>Position Name</h5>
                {{ $positions->position }}
            </div>
        </x-slot>

        <x-slot name="footer">
            <a href="{{ route('position.edit', $positions->id) }}" class="btn btn-warning">Edit</a>
        </x-slot>
    </x-card>
@endsection
