{{-- <form method="POST" action="/posts" class="max-w-sm mx-auto">
    @csrf
    <div class="max-w-screen-xl mx-auto w-auto">
        <div class="mb-5">
            <label for="nama-prod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                Produk</label>
            <input id="nama-prod" type="search" name="search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->nama }}" readonly required>
        </div>
        <div class="mb-5">
            <label for="no-mesin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor
                Mesin</label>
            <input type="text" id="no-mesin" name="nomesin"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Contoh : B-7" autocomplete="off" required>
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
                <input id="datepicker-autohide" name="tanggal" datepicker datepicker-autohide type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pilih Tanggal" autocomplete="off" required>
            </div>

        </div>
        <div class="mb-5">
            <label for="shift-mesin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Shift</label>
            <select type="text" id="shift-meisn" name="shift"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="I/II/III/IV" required>

                <option selected></option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>

            </select>
        </div>
        <div class="mb-5">
            <label for="penginput" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama
                Penginput</label>
            <select list="penginput" type="text" id="penginput" name="namainput"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Nama" required>


                <option selected></option>
                <option value="Yosi">Yosi</option>

            </select>
        </div>
        <button type="submit"
            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-600">Submit</button>
</form> --}}
