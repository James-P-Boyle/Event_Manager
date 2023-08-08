<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Gallery') }}
        </h2>
        <div>
            <a href="{{ route('galleries.create') }}" class="font-bold text-green-600 underline underline-offset-2 hover:text-slate-200">
                New Gallery
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
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Caption
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($galleries as $gallery)
                            <tr class="bg-white border-b">
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <img
                                        src="{{ asset('storage/' . $gallery->image) }}"
                                        alt=""
                                        class="w-20 h-20"
                                    >
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $gallery->caption }}
                                </th>
                                <th scope="col" class="flex items-center gap-2 px-6 py-3">
                                    <a
                                        href="{{ route('galleries.edit', $gallery) }}"
                                        class="text-green-400 hover:text-green-500"
                                    >
                                        Edit
                                    </a>
                                                   <!-- Authentication -->
                                    <form method="POST" action="{{ route('galleries.destroy', $event) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a
                                            href="{{ route('galleries.destroy', $event) }}"
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
                                No Galeries Found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
