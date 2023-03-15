@extends('admin.layout.app')

@section('content')
    <x-forms.put :action="route()">
        <x-card>
            <x-slot class="header">
                <div>

                </div>
            </x-slot>
            <x-slot class="body">
                <div>
                    
                </div>
            </x-slot>
        </x-card>
    </x-forms.put>
@endsection
