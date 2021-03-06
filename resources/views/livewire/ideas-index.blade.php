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
            <livewire:idea-index
                :idea="$idea"
                :key="$idea->id"
                :votesCount="$idea->votes_count" />
        @endforeach


    </div> <!-- End idea-containers -->

    <div class="my-8">
        {{-- {{ $ideas->links() }} --}}
        {{ $ideas->appends(request()->query())->links() }}
    </div>
</div>
