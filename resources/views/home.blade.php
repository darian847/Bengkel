<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Dashboard</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <section class="bg-white ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">

        <div class="grid gap-8 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="text-center text-gray-500 ">
                <a href="/posts/index" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/d.png') }}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Surat Permintaan Perbaikan Mesin dan Matras</h5>
                                    <p class="mb-3 font-normal text-gray-700 "></p>
                                </div>
                            </a>

            </div>
           <div class="text-center text-gray-500 ">
                <a href="/posts/indexa" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/e.png') }}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Surat Perintah Kerja</h5>
                                    <p class="mb-3 font-normal text-gray-700 "></p>
                                </div>
                            </a>

            </div>

        </div>
    </div>
</section>
        </div>
    </main>
    </div>

</body>

</html>
