<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Server Error'))
        @section('code', '500')
        @section('message', __('Server Error'))
    </x-slot>
</x-layouts.app>
