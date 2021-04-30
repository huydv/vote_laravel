<div class="idea-button-container">
    <div class="flex bg-white idea-container rounded-xl">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">{{ $idea->title }}</a>
                </h4>

                <div class="mt-3 text-gray-600">
                    {{ $idea->description }}
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                        <div class="font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div>&bull;</div>
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
    </div> <!--End Idea -->


    <div class="flex items-center justify-between mt-6 buttons-container">
        <div class="flex items-center ml-6 space-x-4">
            <div
                x-data="{ isOpen: false }"
                class="relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button" class="flex items-center justify-center w-32 px-6 py-3 text-sm font-semibold text-white transition duration-150 border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover easin">
                    Reply
                </button>

                <div
                    x-cloak
                    x-show.transition.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 mt-2 text-sm font-semibold text-left bg-white w-104 shadow-dialog rounded-xl">
                    <form action="" class="px-4 py-6 space-y-4">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 px-6 py-3 text-sm font-semibold text-white transition duration-150 border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover easin">
                                Post Comment
                            </button>

                            <button type="button" class="flex items-center justify-center w-32 text-xs font-semibold transition duration-150 bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400 ">
                                <svg class="w-5 h-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <div
                x-data="{ isOpen: false }"
                class="relative">

                <button type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center px-6 py-3 text-sm font-semibold transition duration-150 bg-gray-200 border border-gray-200 h-11 w-36 rounded-xl hover:border-gray-400">
                    <span>Set status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>

                </button>

                <div
                    x-cloak
                    x-show.transition.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 mt-2 text-sm font-semibold text-left bg-white w-76 shadow-dialog rounded-xl">
                    <form action="" class="px-4 py-6 space-y-4">
                    <div class="space-y-2 ">
                        <div>
                        <label class="inline-flex items-center">
                            <input class="bg-gray-200 border-none form-radio text-green" type="radio" checked="" name="radio-direct" value="1">
                            <span class="ml-2">Open</span>
                        </label>
                        </div>
                        <div>
                        <label class="inline-flex items-center">
                            <input class="bg-gray-200 border-none form-radio text-green" type="radio" name="radio-direct" value="2">
                            <span class="ml-2">Considering</span>
                        </label>
                        </div>
                        <div>
                        <label class="inline-flex items-center">
                            <input class="bg-gray-200 border-none form-radio text-yellow" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">In Progress</span>
                        </label>
                        </div>

                        <div>
                        <label class="inline-flex items-center">
                            <input class="bg-gray-200 border-none form-radio text-green" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">Implemented</span>
                        </label>
                        </div>


                        <div>
                        <label class="inline-flex items-center">
                            <input class="bg-gray-200 border-none form-radio text-red" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">Closed</span>
                        </label>
                        </div>
                    </div>

                    <div>
                        <textarea name="update_comment" id="update_comment" cols="30" rows="4"
                        class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                        placeholder="Add an update comment"></textarea>
                    </div>

                    <div class="flex items-center justify-between spcae-x-3">
                        <button type="button" class="flex items-center justify-center w-1/2 text-xs font-semibold transition duration-150 bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400 ">
                            <svg class="w-5 h-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="ml-2">Attach</span>
                        </button>


                        <button type="button" class="flex items-center justify-center w-1/2 text-xs font-semibold text-white transition duration-150 border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover ">
                            <span class="ml-2">Update</span>
                        </button>
                    </div>


                    <div>
                        <label class="inline-flex items-center font-normal">
                            <input class="bg-gray-200 rounded form-checkbox" name="notify_voters" type="checkbox" checked="">
                            <span class="ml-2">Notify all voters</span>
                        </label>
                    </div>

                    </form>
                </div>

            </div>
        </div>

        <div class="flex items-center space-x-3">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl leading-snug
                    @if($hasVoted) text-blue @endif">
                    {{ $votesCount }}
                </div>

                <div class="text-xs leading-none text-gray-400">Votes</div>
            </div>

            @if($hasVoted)
                <button type="button"
                    wire:click.prevent="vote"
                    class="w-32 px-6 py-3 text-xs font-semibold text-white uppercase transition duration-150 border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                    <span>Voted</span>

                </button>
            @else
                <button type="button"
                    wire:click.prevent="vote"
                    class="w-32 px-6 py-3 text-xs font-semibold uppercase transition duration-150 bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                    <span>Vote</span>

                </button>
            @endif
        </div>
    </div>  <!-- End buttons-container -->
</div>  <!-- End idean-buttons-container -->
