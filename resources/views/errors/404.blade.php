<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Not Found'))
        @section('code', '404')
        @section('message', __('Not Found'))
    </x-slot>
</x-layouts.app>
