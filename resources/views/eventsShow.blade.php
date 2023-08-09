<x-main-layout>
    <div class="flex justify-between p-2 m-2">
        <h3 class="mb-4 text-2xl font-bold text-indigo-700">{{ $event->title }}</h3>
        <div class="flex space-x-2">
            From:
            <span class="mx-2">wefwefwef </span> |
            <span class="mx-2">wefwefwef</span>
        </div>
    </div>
    <div class="flex flex-wrap mb-16">
        <div class="w-full mb-6 shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:pr-6">
            <div class="flex flex-col">
                <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg">
                    <img src="{{ asset('/storage/' . $event->image) }}" class="w-full" alt="Louvre" />
                    <a href="#!">
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                        </div>
                    </a>
                </div>
                @auth
                    <div class="flex p-4 space-x-2">
                        <button
                            type="button"
                            class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-3.5 h3.5 mr-2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z"
                                />
                            </svg>
                            Like
                        </button>
                        <button
                            type="button"
                            class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-3.5 h3.5 mr-2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"
                                />
                            </svg>
                            Save
                        </button>
                        <button
                            type="button"
                            class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                        >
                            Attending
                            <svg
                                class="w-3.5 h-3.5 ml-2"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 14 10"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9"
                                />
                            </svg>
                        </button>
                    </div>
                @endauth

                <div class="flex flex-col p-4">
                    <span class="font-semibold text-indigo-600">
                        Host Info
                    </span>
                    <div class="flex items-center p-2 mt-6 space-x-4 rounded-md bg-slate-200">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-12 h-12"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round"d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-2xl">{{ $event->user->name }}</span>
                            <span class="text-2xl">{{ $event->user->email }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full p-2 rounded-md shrink-0 grow-0 md:w-6/12 md:pl-6 bg-slate-50">
            <p class="mb-6 text-sm text-yellow-600">
                Start: {{ $event->start_date }} <time>{{ $event->start_time }}</time>
            </p>
            <p>
                @foreach ($event->tags as $tag)
                    <span class="p-1 m-1 bg-indigo-300 rounded">{{ $tag->name }}</span>
                @endforeach
            </p>
            <p class="mt-4 mb-6 text-neutral-500">
                {{ $event->description }}
            </p>
            <div class="flex">
                <div class="flex flex-col">
                    <div class="flex items-center mb-4 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2 text-indigo-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>

                        <div class="text-yellow-700">{{ $event->country->name }}, {{ $event->city->name }}</div>
                    </div>

                </div>
            </div>
            @auth
                <div
                    class="container p-4 mt-6 rounded-md d-flex justify-content-center align-items-center w-50 bg-slate-200">
                    <div class="">
                        <form
                            class="flex justify-between space-x-2"
                            method="POST"
                        >
                            @csrf
                            <input
                                type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                name="content"
                                id="content"
                                placeholder="Comment"
                            >
                            <button
                                type="submit"
                                class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                            >
                                Post
                            </button>
                        </form>
                    </div>
                    <div class="w-full">
                        {{-- @foreach ($event->comments()->latest()->get() as $comment)
                            <div class="w-full p-4 duration-500">
                                <div class="flex items-center p-4 bg-white rounded-lg shadow-md shadow-indigo-50">
                                    <div>
                                        <div class="flex space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <h2 class="text-lg font-bold text-gray-900">{{ $comment->user->name }}</h2>
                                        </div>
                                        <p class="text-sm font-semibold text-gray-400">{{ $comment->content }}</p>
                                        @can('view', $comment)
                                            <form action="{{ route('events.comments.destroy', [$event->id, $comment->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="px-4 py-2 mt-6 text-sm tracking-wider bg-red-400 rounded-lg outline-none hover:bg-red-300">Delete</button>

                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                </div>
            @endauth


        </div>

    </div>

</x-main-layout>
