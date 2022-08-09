@props([
    'actions',
])

<x-tables::dropdown :attributes="$attributes->class('filament-tables-bulk-actions')">
    <x-slot name="trigger">
        <x-tables::bulk-actions.trigger />
    </x-slot>

    @foreach ($actions as $action)
        {{ $action }}
    @endforeach
</x-tables::dropdown>
