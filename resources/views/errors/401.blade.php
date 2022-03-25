<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Unauthorized'))
        @section('code', '401')
        @section('message', __('Unauthorized'))
    </x-slot>
</x-layouts.app>
