@extends('layouts.app')

@section('content')
    <x-forms.post :action="route('employee.store')">
        <x-card>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('New Employee') }}
                </h2>
                <x-slot name="actions">
                    <a href="{{ route('employee') }}"
                        class="text-gray-800 dark:text-gray-200">Cancel</a>
                </x-slot>
            </x-slot>

            <x-slot name="body">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" required
                                autofocus autocomplete="first_name" />
                        </div>
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <x-input-label for="middle_name" :value="__('Middle Name')" />
                            <x-text-input id="middle_name" name="middle_name" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="middle_name" />
                        </div>
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" required
                                autofocus autocomplete="last_name" />
                        </div>
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <x-input-label for="position" :value="__(' Position')" />
                            <select name="position" id="position" class=" bg-white shadow sm:rounded-lg w-full" required>
                                <option value="" disabled selected>Select a position</option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">
                                        {{ $position->position }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </x-slot>
        </x-card>
    </x-forms.post>
@endsection
