@props([
    'darkMode' => false,
    'width' => 'sm',
    'trigger' => null,
])

<div {{ $attributes->class('relative filament-dropdown') }} x-data="{}">
    @isset($trigger)
        <div
            x-on:click="$refs.panel.toggle"
            {{ $trigger->attributes->class(['filament-dropdown-trigger']) }}
        >
            {{ $trigger }}
        </div>
    @endisset

    <div
        x-ref="panel"
        x-cloak
        x-transition
        x-transition:enter="transition"
        x-transition:enter-start="-translate-y-1 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-1 opacity-0"
        {{-- x-float.placement.bottom.flip.offset="{ offset: 8 }" --}}
        {{-- x-float.placement.bottom-start.flip.offset="{ offset: 8 }" --}}
        {{-- x-float.placement.bottom-end.flip.offset.shift.teleport="{ offset: 8 }" --}}
        {{-- x-float.placement.bottom-end.offset="{ offset: 8 }" --}}
        x-float.placement.bottom-end.offset="{ offset: 8 }"
        @class([
            'filament-dropdown-panel absolute hidden z-20 w-screen shadow-xl rounded-xl top-full',
            match ($width) {
                'xs' => 'max-w-xs',
                'md' => 'max-w-md',
                'lg' => 'max-w-lg',
                'xl' => 'max-w-xl',
                '2xl' => 'max-w-2xl',
                '3xl' => 'max-w-3xl',
                '4xl' => 'max-w-4xl',
                '5xl' => 'max-w-5xl',
                '6xl' => 'max-w-6xl',
                '7xl' => 'max-w-7xl',
                default => 'max-w-sm',
            },
        ])
    >
        <ul @class([
            'py-1 space-y-1 bg-white shadow rounded-xl shadow-xl ring-1 ring-gray-900/10 overflow-hidden rounded-xl',
            'dark:bg-gray-700 dark:divide-gray-600 dark:ring-white/20' => $darkMode,
        ])>
            {{ $slot }}
        </ul>
    </div>
</div>
