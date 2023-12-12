<x-default-layout>
    <main class="grid grid-cols-1 px-6 md:flex pt-8 pb-16 lg:pt-16 lg:pb-24 bg-success dark:bg-gray-900 md:justify-between">
        <div class="md:flex md:w-5/6 justify-between md:mx-12 md:w-2xl">
            <article
                class="w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->author->photo_url }}" alt="{{ $post->author->name }}">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base font-light text-gray-500 dark:text-gray-400 line-clamp-1">
                                    {!! $post->author->bio !!}</p>
                                <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="{{ $post->created_at->format('Y-m-d') }}"
                                        title="{{ $post->created_at->format('D. m, Y') }}">{{ $post->created_at->format('D. m, Y') }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>

                @if ($post->banner)
                <img src="{{ $post->banner_url }}" alt="{{ $post->title }}" class="w-full rounded-md">
                @endif
                 <div class="text-justify whitespace-pre-line">
                    {!! $post->content !!}
                </div>
                <div class="comments mt-3 bg-primary dark:bg-secondary p-4 rounded-lg">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://renaldinurmazid-blog.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();

                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
            </article>
        </div>
        <div class=" md:mx-6 w-full">
            <div class="m-2">
                <p class="text-xl md:text-2xl font-bold text-primary dark:text-white">Artikel Terbaru!</p>
            </div>
            @foreach ($posts as $p)
            <a href="{{ route('posts.show', $p->slug) }}"
                class="flex flex-rows my-1 md:mx-3 md:my-3 py-2 px-2 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-lg md:h-40 hover:shadow-lg dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover rounded-xl h-20 w-20 m-2"
                    src="{{ $p->banner_url }}" alt="">
                <div class="flex flex-col justify-between leading-normal">
                    <h5 class="mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white">{{$p->title}}
                    </h5>
                    <p class="truncate-20-words font-normal text-gray-700 dark:text-gray-400">{{$p->excerpt}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll('.truncate-20-words');
            elements.forEach(function (el) {
                let wordsArray = el.textContent.split(' ');
                if (wordsArray.length > 10) {
                    el.textContent = wordsArray.slice(0, 10).join(' ') + '...';
                }
            });
        });

    </script>
</x-default-layout>
