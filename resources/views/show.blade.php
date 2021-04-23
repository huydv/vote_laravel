<x-app-layout>
    <div>
       <a href="/" class="flex items-center font-semibold hover:underline">
       <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="ml-2">All Ideas()</span>
       </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Title go here</a>
                </h4>

                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta doloremque corrupti quo quidem aut hic saepe quia, obcaecati earum et pariatur expedita voluptatem eligendi accusamus reiciendis incidunt, distinctio facere. Velit, maxime deserunt voluptas, nisi quas perspiciatis quam necessitatibus quibusdam, eos dignissimos sed! Voluptatibus ipsum laudantium quas laborum delectus laboriosam quis distinctio recusandae soluta itaque earum ab officiis dolore inventore quod, corrupti non libero optio ea, eum doloribus! Tenetur temporibus ut rem possimus quaerat vitae quia earum, error, aspernatur quidem consectetur harum, nostrum inventore asperiores aliquid alias. Exercitationem, aut obcaecati. Est ad explicabo beatae quod aspernatur impedit voluptates dolore fuga esse?
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 transition duration-150 ease-in py-2 px-4">
                            Open
                        </div>

                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul class="hidden w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End Idea -->


    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button" class="flex items-center justify-center h-11 w-32 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 easin px-6 py-3">
                <span class="ml-1">Reply</span>
            </button>

            <button type="button" class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 px-6 py-3">
                <span>Set status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                
            </button>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button type="button" class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 px-6 py-3">
                <span>Vote</span>
                
            </button>
        </div>
    </div>

</div> <!-- End buttons-container -->

<div class="comments-container relative space-y-6 ml-22 my-8 pt-4 mt-1">
    <div class="comment-container relative bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <!-- <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4> -->

                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum, dolor sit amet 
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-blue">Andrea</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div class="flex items-center space-x-2">

                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul class="hidden w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->

    <div class="is-admin comment-container relative bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4>

                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum, dolor sit amet 
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div class="flex items-center space-x-2">

                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul class="hidden w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->

    <div class="comment-container relative bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <!-- <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4> -->

                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum, dolor sit amet 
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-blue">Andrea</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>

                    <div class="flex items-center space-x-2">

                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul class="hidden w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--End comment-container -->
</div> <!-- End comments-container -->

</x-app-layout>
