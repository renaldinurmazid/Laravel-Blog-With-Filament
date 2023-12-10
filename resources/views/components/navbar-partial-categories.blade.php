<div class="mt-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
    <h5 class="pb-1 ml-3 text-gray-400">*Category</h5>
    @forelse ($categories as $cat)
            <button class="px-2 py-1 ml-3 tracking-wide capitalize transition-colors duration-300 transform bg-black dark:bg-white rounded-full focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                <a href="/posts?category={{ $cat->slug }}" class="dark:text-black text-white text-sm">{{ $cat->name }}</a>
            </button>
    @empty
        <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
            href="#">No Category</a>
    @endforelse
</div>
