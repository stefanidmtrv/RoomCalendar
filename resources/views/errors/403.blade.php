<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">

        @extends('errors::minimal')

        @section('title', __('Forbidden'))
        @section('code', '403')
        @section('message', __($exception->getMessage() ?: 'Forbidden'))
    </x-slot>
</x-layouts.app>
