<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Events') }}
        </h2>
        <div>
            <a href="{{ route('events.create') }}" class="text-gray-800 hover:text-slate-200">
            New Event
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Hey im an index
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
