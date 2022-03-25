<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Too Many Requests'))
        @section('code', '429')
        @section('message', __('Too Many Requests'))
    </x-slot>
</x-layouts.app>
