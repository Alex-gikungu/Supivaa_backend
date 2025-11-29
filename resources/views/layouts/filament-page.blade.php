{{-- resources/views/layouts/filament-page.blade.php --}}
<x-filament::layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold tracking-tight">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    {{ $slot }}
</x-filament::layout>
