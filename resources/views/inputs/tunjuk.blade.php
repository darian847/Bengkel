<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Penginputan Label</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <x-forsearch></x-forsearch>

            <div style="padding-top: 25px">
                <form method="POST" action="/inputs" class=" max-w-3xl mx-auto">
                    @csrf
                    <div class="max-w-screen-xl mx-auto w-auto grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-5">
                            <label for="nama-prod"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                                Produk</label>
                            <input id="nama-prod" type="text" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $post->nama }}" readonly required>
                        </div>
                        <div class="mb-5">
                            <label for="warna-prod"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Warna
                                Produk</label>
                            <input id="warna-prod" type="text" name="warna"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $post->warna }}" readonly required>
                        </div>
                        <div class="mb-5">
                            <label for="jumlah-prod"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jumlah
                                Produk</label>
                            <input id="jumlah-prod" type="text" name="jumlah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $post->jumlah }}" readonly required>
                        </div>
                        <div class="mb-5">
                            <label for="mesin-prod"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Mesin
                            </label>
                            <input id="mesin-prod" type="text" name="mesin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $post->mesin }}" required>
                        </div>
                        <div class="mb-5">
                            <label for="batch-prod"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Kode Batch
                                Produk</label>
                            <input id="batch-prod" type="text" name="batch"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $post->batch }}" readonly required>
                        </div>
                        <div class="mb-5">
                            <label for="datepicker-autohide"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide" name="tanggal" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pilih Tanggal" autocomplete="off" required>
                            </div>

                        </div>
                        <div class="mb-5">
                            <label for="shift-mesin"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Shift</label>
                            <select type="text" id="shift-meisn" name="shift"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="I/II/III/IV" required>

                                <option selected></option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>

                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="penginput"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                                Penginput</label>
                            <select list="penginput" type="text" id="penginput" name="namainput"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama" required>


                                <option selected></option>
                                <option value="Yosi">Yosi</option>

                            </select>
                        </div>
                    </div>
                    <div class="mb-5">
                        <br>

                        <button type="submit"
                            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm mx-auto w-2/3 mb-5 px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-600 justify-center flex">Menuju
                            Halaman Print</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    </div>
</body>
