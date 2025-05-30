<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Surat Permintaan Perbaikan Mesin dan Matras</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div>

                <ul>
                    @foreach ($posts as $post)
                        {{-- <div
                            class="max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                             <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                    {{ $post->nospk }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput1 }}</p>
                            <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput2 }}</p>
                            <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput3 }}</p>
                            <a href="/posts/{{ $post->id }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Edit
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            </div> --}}

                            <a href="/posts/{{ $post->id }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/f.png') }}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $post->nospk }}</h5>
                                    <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput1 }}</p>
                                    <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput2 }}</p>
                                    <p class="mb-3 font-normal text-gray-700 ">{{ $post->sinput3 }}</p>
                                </div>
                            </a>



                        <div class=" pb-10">
                        </div>
                    @endforeach
            </div>
            </ul>
        </div>
    </main>
    </div>
</body>
