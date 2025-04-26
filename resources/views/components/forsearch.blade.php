<div>
    <section class="" style="padding-top: 25px">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-2/3">
            <!-- Start coding here -->
            <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full">
                        <form method="GET" action="{{ $slot }}" class="flex items-center">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="search" name="search" id="search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required>

                            </div>
                            <div
                                class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                                <div class="flex items-center w-full space-x-3 md:w-auto">
                                    <button type="submit"
                                        class=" justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                        type="button">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
</div>
</section>
</div>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="{{ asset('storage/LabelNormal.jpg') }}" alt="Label Normal">
        <img class="w-full hidden dark:block" src="{{ asset('storage/LabelNormal.jpg') }}" alt="Label Normal">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's create more tools and ideas that brings us together.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect with friends and communities of people who share your interests. Connecting with your friends and family as well as discovering new ones is easy with features like Groups.</p>
            <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</section>
