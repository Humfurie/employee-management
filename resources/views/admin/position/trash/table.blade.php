@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            Deleted Positions
            <x-slot name="actions">
                <a href="{{ route('position') }}" class="btn btn-dark">Back</a>
            </x-slot>

        </x-slot>
        <x-slot name="body">
            <x-table.deleted-positions :positions="$positions" />
        </x-slot>

        <x-slot name="footer">
            <div class="d-flex justify-content-between">
                <div></div>
                <div>
                    {{ $positions->links() }}
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
