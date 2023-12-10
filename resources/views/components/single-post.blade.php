<div class="p-2 max-w-sm">
    <div class="flex rounded-lg h-full dark:bg-gray-800 bg-white p-8 flex-col hover:shadow-2xl">
        <div class="mb-3">
            <img src="{{ $post->banner_url }}" alt="img_post" width="400" height="100" class="rounded-xl">
        </div>
        <div class="flex items-center mb-3">
            <a href="{{ route('posts.show', $post->slug) }}" class="text-gray-900 font-bold dark:text-white text-lg "
                tabindex="0" role="link">{{ $post->title }}</a>
        </div>
        <div class="flex flex-col justify-between flex-grow">
            <p class="truncate-20-words leading-relaxed text-base text-gray-600 dark:text-gray-300">
                {{ $post->excerpt }}
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let elements = document.querySelectorAll('.truncate-20-words');
        elements.forEach(function (el) {
            let wordsArray = el.textContent.split(' ');
            if (wordsArray.length > 40) {
                el.textContent = wordsArray.slice(0, 40).join(' ') + '...';
            }
        });
    });

</script>
