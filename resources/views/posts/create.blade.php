<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Form Input</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <form method="POST" action="/posts" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <label for="nama-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                        Produk</label>
                    <input type="text" id="nama-produk" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="JERIGEN 4 LITER" required>
                </div>
                <div class="mb-5">
                    <label for="warna-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Warna
                        Produk</label>
                    <input type="text" id="warna-produk" name="warna"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="NATURAL" required>
                </div>
                <div class="mb-5">
                    <label for="jumlah-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Isi
                        Per Pack</label>
                    <input type="text" id="jumlah-produk" name="jumlah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="25" required>
                </div>
                <div class="mb-5">
                    <label for="mesin-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor
                        Mesin</label>
                    <input type="text" id="mesin-produk" name="mesin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="B-7" required>
                </div>
                <div class="mb-5">
                    <label for="batch-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor
                        Batch</label>
                    <input type="text" id="batch-produk" name="batch"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="JR4-175" required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-600">Simpan</button>
            </form>

        </div>
    </main>
    </div>

</body>

</html>
