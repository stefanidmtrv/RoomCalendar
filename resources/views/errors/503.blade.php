<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Service Unavailable'))
        @section('code', '503')
        @section('message', __('Service Unavailable'))
    </x-slot>
</x-layouts.app>
