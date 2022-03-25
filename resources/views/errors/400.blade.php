<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Bad request'))
        @section('code', '400')
        @section('message', __('Bad request'))
    </x-slot>
</x-layouts.app>
