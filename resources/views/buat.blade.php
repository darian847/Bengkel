<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Surat Perintah Kerja</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- BAGIAN 1 --}}
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <form method="POST" action="{{ route('store.buat') }}">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">SPK
                                NO :</label>
                            <input type="text" id="first_name" name="nospk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 ">KEPADA :
                            </label>
                            <input type="text" id="company" name="kepada"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="shift-mesin"
                                class="block mb-2 text-sm font-medium text-gray-900 ">JENIS REPAIR
                                :
                            </label>
                            <select type="text" id="shift-meisn" name="jenisrepair"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5    "
                                placeholder="DEPARTEMENT">

                                <option selected></option>
                                <option value="MESIN">MESIN</option>
                                <option value="MOULDING">MOULDING</option>
                                <option value="LAIN-LAIN">LAIN-LAIN</option>

                            </select>
                        </div>
                    </div>
                   <div class="mb-6">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 ">KETERANGAN :</label>
                        <textarea id="message" rows="4" name="keterangan"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500    "
                            placeholder=""></textarea>
                    </div>
                    <div class="mb-6">
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">ESTIMASI PENYELESAIAN :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide1" name="estimasi" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5     "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input id="bordered-radio-1" type="radio" value="Ada Estimasi Penyelesaian" name="sinput1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                            <label for="bordered-radio-1"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Ada Estimasi Penyelesaian</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input checked id="bordered-radio-2" type="radio" value="Belum
                                Ada Estimasi Penyelesaian"
                                name="sinput1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                            <label for="bordered-radio-2"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Belum
                                Ada Estimasi Penyelesaian</label>
                        </div>
                    </div>


                                        <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>


            </div>
    </main>
    </div>

</body>

</html>
