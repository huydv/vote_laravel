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

                    <div 
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 transition duration-150 ease-in py-2 px-4">
                            Open
                        </div>

                        <button 
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul 
                                x-cloak
                                x-show.transition.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
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
            <div
                x-data="{ isOpen: false }"  
                class="relative">
                <button 
                    @click="isOpen = !isOpen"
                    type="button" class="flex items-center justify-center h-11 w-32 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 easin px-6 py-3">
                    Reply
                </button>

                <div
                    x-cloak
                    x-show.transition.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false" 
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button" class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 easin px-6 py-3">
                                Post Comment
                            </button>

                            <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ">
                                <svg class="text-gray-600 h-5 w-5 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 px-6 py-3">
                    <span>Set status</span>
                    <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    
                </button>

                <div 
                    x-cloak
                    x-show.transition.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="" class="space-y-4 px-4 py-6">
                    <div class="space-y-2 ">
                        <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio bg-gray-200 text-green border-none" type="radio" checked="" name="radio-direct" value="1">
                            <span class="ml-2">Open</span>
                        </label>
                        </div>
                        <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio bg-gray-200 text-green border-none" type="radio" name="radio-direct" value="2">
                            <span class="ml-2">Considering</span>
                        </label>
                        </div>
                        <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio bg-gray-200 text-yellow border-none" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">In Progress</span>
                        </label>
                        </div>

                        <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio bg-gray-200 text-green border-none" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">Implemented</span>
                        </label>
                        </div>


                        <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio bg-gray-200 text-red border-none" type="radio" name="radio-direct" value="3">
                            <span class="ml-2">Closed</span>
                        </label>
                        </div>
                    </div>

                    <div>
                        <textarea name="update_comment" id="update_comment" cols="30" rows="4"
                        class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" 
                        placeholder="Add an update comment"></textarea>
                    </div>

                    <div class="flex items-center justify-between spcae-x-3">
                        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ">
                            <svg class="text-gray-600 h-5 w-5 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="ml-2">Attach</span>
                        </button>


                        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ">
                            <span class="ml-2">Update</span>
                        </button>
                    </div>


                    <div>
                        <label class="font-normal inline-flex items-center">
                            <input class="form-checkbox rounded bg-gray-200" name="notify_voters" type="checkbox" checked="">
                            <span class="ml-2">Notify all voters</span>
                        </label>
                    </div>

                    </form>
                </div>

            </div>
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

                    <div 
                        x-data="{ isOpen: false }" 
                        class="flex items-center space-x-2">

                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7">
                            Click
                            <ul 
                                x-cloak
                                x-show.transition.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 z-10 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
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
                    <a href="" class="hover:underline">Status changed to "Under Consideration"</a>
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
