<x-layouts.app>

    <x-slot name="title">

    </x-slot>

    <x-slot name="slot">
        @extends('errors::minimal')

        @section('title', __('Page Expired'))
        @section('code', '419')
        @section('message', __('Page Expired'))
    </x-slot>
</x-layouts.app>
