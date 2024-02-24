@extends('layouts.app')

@section('content')
    <x-card>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Positions Table') }}
            </h2>
        </x-slot>


        <x-slot name="body">
            <div class="py-12 w-screen">
                <div class="flex justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-screen">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <x-table.positions-table :positions="$positions" />
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route('position.create') }}" class="btn btn-dark">Create</a>
                                <a href="{{ route('position.showTrash') }}" class="btn btn-dark">Deleted Positions</a>
                                <div>
                                    {{ $positions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-card>
@endsection
