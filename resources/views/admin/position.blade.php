@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            Weclome
            <x-slot name="actions">
            </x-slot>
        </x-slot>
        <x-slot name="body">
            <x-table.positions-table :positions="$positions" />
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('position.create') }}" class="btn btn-dark">Create</a>
                    <a href="{{ route('position.showTrash') }}" class="btn btn-dark">Deleted Positions</a>
                </div>
                <div>
                    {{ $positions->links() }}
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
