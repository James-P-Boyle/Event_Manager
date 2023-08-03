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
            <div class="relative overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500">

                    <thead class="text-gray-700 uppercase text-md bg-gray-50" >
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Country
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($events as $event)
                            <tr class="bg-white border-b">
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $event->title }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $event->start_date }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $event->country->name}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edit/Delete
                                </th>
                            </tr>
                        @empty
                            <h1>No Events</h1>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
