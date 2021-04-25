<x-app-layout>
    <div>
        <div class="flex flex-col filters md:flex-row">
            <div class="w-full md:w-1/3">
                <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                    <option value="Category 1">Category 1</option>
                    <option value="Category 2">Category 2</option>
                    <option value="Category 3">Category 3</option>
                    <option value="Category 4">Category 4</option>
                </select>
            </div>

            <div class="w-full md:w-1/3">
                <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                    <option value="Filter 1">Filter 1</option>
                    <option value="Filter 2">Filter 2</option>
                    <option value="Filter 3">Filter 3</option>
                    <option value="Filter 4">Filter 4</option>
                </select>
            </div>

            <div class="relative w-full md:w-2/3">
                <input type="search" placeholder="Find an idea" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl">

                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div> <!-- End filters -->

        <div class="my-6 space-y-6 ideas-containers">
            @foreach($ideas as $idea)
                <div
                    x-data
                    @click="
                        const target = $event.target.tagName.toLowerCase();
                        const ignores = ['button', 'svg', 'path', 'a'];
                        if(! ignores.includes(target)) {
                            $event.target.closest('.idea-container').querySelector('.idea-link').click();
                        }

                        <!-- location.href ='{{ route('idea.show', $idea) }}' -->
                    "
                    class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
                    <div class="px-5 py-8 border-r border-gray-100">
                        <div class="text-center">
                            <div class="text-2xl font-semibold">12</div>
                            <div class="text-gray-500">Votes</div>
                        </div>

                        <div class="mt-8">
                            <button class="w-20 px-4 py-3 text-xs font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-xl">vote</button>
                        </div>
                    </div>

                    <div class="flex flex-1 px-2 py-6">
                        <div class="flex-none">
                            <a href="#">
                                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between w-full mx-4">
                            <h4 class="text-xl font-semibold">
                                <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
                            </h4>

                            <div class="mt-3 text-gray-600 line-clamp-3">
                                {{ $idea->description }}
                            </div>

                            <div class="flex items-center justify-between mt-6">
                                <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                                    <div>&bull;</div>
                                    <div>Category</div>
                                    <div>&bull;</div>
                                    <div class="text-gray-900">3 Comments</div>
                                </div>

                                <div
                                    x-data="{ isOpen: false }"
                                    class="flex items-center space-x-2">
                                    <div class="px-4 py-2 font-bold leading-none text-center uppercase transition duration-150 ease-in bg-gray-200 rounded-full text-xxs w-28 h-7">
                                        Open
                                    </div>

                                    <button
                                        @click="isOpen = !isOpen"
                                        class="relative bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                                        Click
                                        <ul
                                            x-cloak
                                            x-show.transition.top.left="isOpen"
                                            @click.away="isOpen = false"
                                            @keydown.escape.window="isOpen = false"
                                            class="absolute py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                            <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as spam</a></li>
                                            <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div> <!-- End idea-containers -->

        <di class="my-8">
            {{ $ideas->links() }}
        </div>
    </div>
</x-app-layout>
