<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Events') }}
        </h2>
        <div>
            <a href="{{ route('events.create') }}" class="font-bold text-green-600 underline underline-offset-2 hover:text-slate-200">
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
                                <th scope="col" class="flex items-center gap-2 px-6 py-3">
                                    <a
                                        href="{{ route('events.edit', $event) }}"
                                        class="text-green-400 hover:text-green-500"
                                    >
                                        Edit
                                    </a>
                                                   <!-- Authentication -->
                                    <form method="POST" action="{{ route('events.destroy', $event) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a
                                            href="{{ route('events.destroy', $event) }}"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                            class="text-red-400 hover:text-red-500"
                                        >
                                            Del
                                        </a>
                                    </form>

                                </th>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 font-bold text-center text-gray-500 bg-white">
                                No Events
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
