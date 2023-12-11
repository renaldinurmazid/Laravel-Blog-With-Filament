<x-default-layout>
    <section class="bg-success dark:bg-gray-900 z-50">
        <div class="bg-primary m-0 p-4 md:p-10 flex flex-col md:flex-row items-center">
            <img src="{{ asset('images/kode Pelajar.png') }}" alt="Kode Pelajar" width="400px" height="400px">
            <div class="md:ml-8 mt-4 md:mt-0 text-center md:text-left">
                <p class="text-3xl md:text-6xl font-bold mt-3 mb-3 text-white">Kode Pelajar</p>
                <p class="text-xl md:text-2xl text-white">"Mengenal kode adalah seperti memahami teka-teki yang tak
                    terbatas. Mari bersama-sama menjelajahi dunia yang penuh dengan kode!"</p>
                <div class="mt-3">
                    <a href="{{ route('posts.index') }}"
                        class="text-white bg-secondary hover:bg-danger focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Mulai
                        Belajar</a>
                </div>
            </div>
        </div>
        <div class="container mx-auto m-4 mb-0 p-6">
            <p class="text-primary dark:text-secondary text-xl font-semibold">KATEGORI</p>
            <p class="text-black  dark:text-white text-3xl font-bold">Mau belajar apa hari ini?</p>
            <div class="flex flex-wrap justify-center p-6">
                @foreach ($categories as $category)
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full dark:bg-gray-800 bg-danger p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                  </svg>                                  
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">{{ $category->name }}</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="leading-relaxed text-base text-white dark:text-gray-300 ">
                                {!! $cleanDescriptions[$category->id] !!}
                            </p>                            
                            <a href="#"
                                class="mt-3 text-white dark:text-white hover:text-secondary inline-flex items-center dark:hover:text-secondary">Learn
                                More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container mx-auto m-4 mb-0 p-6">
            <h1 class="text-xl md:text-2xl font-bold dark:text-white">Postingan Terakhir di Kode Pelajar!</h1>
        </div>
        <div class="flex flex-wrap justify-center p-6">
            @forelse ($posts as $post)
            <x-single-post :post="$post" />
            @empty
            <h1 class="font-semibold italic text-sm text-gray-500">
                There are no posts to show.
            </h1>
            @endforelse
            {{-- <div class="m-5">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm">
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                      </li>
                      <li>
                        {{ $posts->links() }}
                    </li>
                      <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div> --}}
        </div>
    </section>
</x-default-layout>
