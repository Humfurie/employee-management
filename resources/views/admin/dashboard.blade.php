@extends('admin.layout.app')

@section('content')
    <x-card>
        <x-slot name="header">
            Weclome
        </x-slot>
        <x-slot name="body">
            <x-table :employee="$employee" />
        </x-slot>
    </x-card>
@endsection
