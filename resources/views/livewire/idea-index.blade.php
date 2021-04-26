
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
            <div class="text-2xl font-semibold">{{ $idea->votes_count }}</div>
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
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 Comments</div>
                </div>

                <div
                    x-data="{ isOpen: false }"
                    class="flex items-center space-x-2">
                    <div
                        class=" {{ $idea->status->classes }}
                        px-4 py-2 font-bold leading-none text-center uppercase transition duration-150 ease-in bg-gray-200 rounded-full text-xxs w-30 h-7">
                        {{ $idea->status->name }}
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
