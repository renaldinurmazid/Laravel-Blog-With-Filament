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
                {{-- CARD 1 --}}
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full dark:bg-gray-800 bg-danger p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                  </svg>                                  
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">Pemrograman WEB</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                Berisi tutorial mengenai dasar-dasar HTML,CSS dan JavaScript.
                            </p>
                            <a href="#"
                                class="mt-3 text-white dark:text-white hover:text-secondary inline-flex items-center">Learn
                                More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- CARD 2 --}}
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full dark:bg-gray-800 bg-danger p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                  </svg>                                  
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">System Administrator</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                Berisi tutorial mengenai dasar-dasar mengenai Basic Command Linux, Shell Scripting, ansible & Docker.
                            </p>
                            <a href="#"
                                class="mt-3 text-white dark:text-white hover:text-secondary inline-flex items-center">Learn
                                More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- CARD 3 --}}
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full dark:bg-gray-800 bg-danger p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                  </svg>                                  
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">BackEnd Developer</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <p class="leading-relaxed text-base text-white dark:text-gray-300">
                                Berisi tutorial mengenai dasar REST-FULL API Java, Spring Boot & Framwork Laravel.
                            </p>
                            <a href="#"
                                class="mt-3 text-white dark:text-white hover:text-secondary inline-flex items-center">Learn
                                More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
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
            <div class="m-5">
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
            </div>
        </div>
    </section>
</x-default-layout>
