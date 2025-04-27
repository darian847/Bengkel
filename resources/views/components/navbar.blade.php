<div class="min-h-full" x-data="{ isOpen: false }">
    <nav class=" bg-emerald-700">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="{{ asset('storage/approved.png') }}" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/"
                                class="rounded-md px-3 py-2 text-sm font-medium text-white   hover:bg-gray-700 hover:text-white"
                                aria-current="page">Home</a>
                            <a href="/posts/create"
                                class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 hover:text-white">Tambah
                                Data</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</nav>
