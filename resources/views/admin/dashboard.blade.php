@extends('admin.layout.app')

@section('content')
    <div>
        <x-table :employee=$employee />
    </div>
@endsection
