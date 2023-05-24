<x-app-layout>
    <x-slot name="header">
        Weclome
        <div name="actions">
        </div>
    </x-slot>
    <div name="body">
        <x-table.positions-table :positions="$positions" />
    </div>
    <div name="footer">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('position.create') }}" class="btn btn-dark">Create</a>
                <a href="{{ route('position.showTrashed') }}" class="btn btn-dark">Deleted Positions</a>
            </div>
            <div>
                {{ $positions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
