<x-app-layout>
    <div>
       <a href="/" class="flex items-center font-semibold hover:underline">
       <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="ml-2">All Ideas()</span>
       </a>
    </div>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />


<div class="relative pt-4 my-8 mt-1 space-y-6 comments-container ml-22">
    <div class="relative flex bg-white comment-container rounded-xl">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <!-- <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4> -->

                <div class="mt-3 text-gray-600 line-clamp-3">
                    Lorem ipsum, dolor sit amet
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                        <div class="font-bold text-blue">Andrea</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2">

                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                            Click
                            <ul
                                x-cloak
                                x-show.transition.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute z-10 py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as spam</a></li>
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->

    <div class="relative flex bg-white is-admin comment-container rounded-xl">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mt-1 font-bold text-center uppercase text-blue text-xxs">Admin</div>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Consideration"</a>
                </h4>

                <div class="mt-3 text-gray-600 line-clamp-3">
                    Lorem ipsum, dolor sit amet
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div class="flex items-center space-x-2">

                        <button class="relative bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                            Click
                            <ul class="hidden py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as spam</a></li>
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->

    <div class="relative flex bg-white comment-container rounded-xl">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <!-- <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4> -->

                <div class="mt-3 text-gray-600 line-clamp-3">
                    Lorem ipsum, dolor sit amet
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                        <div class="font-bold text-blue">Andrea</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div class="flex items-center space-x-2">

                        <button class="relative bg-gray-100 rounded-full hover:bg-gray-200 h-7">
                            Click
                            <ul class="hidden py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Mark as spam</a></li>
                                <li><a href="" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->
</div> <!-- End comments-container -->

</x-app-layout>
