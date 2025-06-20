<div>
    <section class="" style="padding-top: 25px">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-3/3">
            <!-- Start coding here -->
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <section class="bg-white dark:bg-gray-900">
                    <div class=" items-center py-8 px-4 mx-auto max-w-screen-xl md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                        <img class="w-2/3 dark:hidden rounded-3xl mx-auto" src="{{ asset('storage/LabelNormal.jpg') }}"
                            alt="Label Normal">
                        <img class="w-2/3 hidden dark:block rounded-3xl mx-auto"
                            src="{{ asset('storage/LabelNormal.jpg') }}" alt="Label Normal">
                        <div class="mt-4 md:mt-0">
                            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">
                                Masukkan Nama Produk</h2>
                            <form method="GET" action="/posts" class="w-full mx-auto">
                                <label for="default-search"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="search" name="search" id="search"
                                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                                        placeholder="" required />
                                    <button type="submit"
                                        class="text-white absolute end-2.5 bottom-2.5 bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Search</button>
                                </div>
                            </form>




                        </div>
                    </div>
                </section>
                <x-menu></x-menu>
            </div>
        </div>
    </section>
</div>
