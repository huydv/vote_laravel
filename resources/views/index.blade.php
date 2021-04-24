<x-app-layout>
    <div>
        <div class="filters flex space-x-6">
            <div class="w-1/3">
                <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                    <option value="Category 1">Category 1</option>
                    <option value="Category 2">Category 2</option>
                    <option value="Category 3">Category 3</option>
                    <option value="Category 4">Category 4</option>
                </select>
            </div>

            <div class="w-1/3">
                <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                    <option value="Filter 1">Filter 1</option>
                    <option value="Filter 2">Filter 2</option>
                    <option value="Filter 3">Filter 3</option>
                    <option value="Filter 4">Filter 4</option>
                </select>
            </div>
            
            <div class="w-2/3 relative">
                <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
                    
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div> <!-- End filters -->

        <div class="ideas-containers space-y-6 my-6">
            <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">vote</button>
                    </div>
                </div>

                <div class="flex flex-1 px-2 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="mx-4 w-full">
                        <h4 class="text-xl font-semibold">
                            <a href="" class="hover:underline">Title go here</a>
                        </h4>

                        <div class="text-gray-600 mt-3 line-clamp-3">
                            Lorem ipsum, dolor sit amet 
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
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
            </div>

            
        </div> <!-- End idea-containers -->
    </div>
</x-app-layout>
