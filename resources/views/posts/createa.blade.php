<x-layout></x-layout>

<body>
    <x-navbar></x-navbar>
    <x-header>Surat Permintaan Perbaikan Mesin dan Matras</x-header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{-- BAGIAN 1 --}}
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <form method="POST" action="/posts">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <h1 class="mb-4 text-2xl font-bold text-gray-900  md:text-2xl lg:text-2xl">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-blue-500">BAGIAN
                                    1</span>
                            </h1>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">SPK
                                NO :</label>
                            <input type="text" id="first_name" name="nospk" value="{{ $post->nospk }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">TANGGAL :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide1" name="tanggal1" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 ">PEMOHON :
                            </label>
                            <input type="text" id="company" name="pemohon"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="shift-mesin"
                                class="block mb-2 text-sm font-medium text-gray-900 ">DEPARTEMEN / BAGIAN
                                :
                            </label>
                            <select type="text" id="shift-meisn" name="dept"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                                placeholder="DEPARTEMENT">

                                <option selected></option>
                                <option value="PRODUKSI">PRODUKSI</option>
                                <option value="QC">QC</option>
                                <option value="TEKNIK">TEKNIK</option>
                                <option value="LAINNYA">LAINNYA</option>

                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 ">NAMA/NO.MESIN/NO.MOULDING
                            :
                        </label>
                        <input type="text" id="email" name="nomesin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" />
                    </div>
                    <div class="mb-6">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 ">URAIAN
                            KERUSAKAN :</label>
                        <textarea id="message" rows="4" name="uraianbag1"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder=""></textarea>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input id="bordered-radio-1" type="radio" value="Sudah Input Bagian 1" name="sinput1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-1"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Sudah
                                Input Bagian 1</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input checked id="bordered-radio-2" type="radio" value="Belum Input Bagian 1"
                                name="sinput1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-2"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Belum
                                Input Bagian 1</label>
                        </div>
                    </div>


                    {{-- BAGIAN 2 --}}

                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <h1 class="mb-4 text-2xl font-bold text-gray-900  md:text-2xl lg:text-2xl">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-blue-500">BAGIAN
                                    2</span>
                            </h1>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">ESTIMASI
                                PENYELESAIAN :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide2" name="tanggal2" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">TANGGAL PENGERJAAN
                                :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide3" name="tanggal3" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 ">YANG MENGERJAKAN :

                            </label>
                            <input type="text" id="company" name="pekerja"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">TANGGAL
                                PENYELESAIAN
                                :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide4" name="tanggal4" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 ">YANG MENYERAHKAN MOULD
                            :

                        </label>
                        <input type="text" id="email" name="mouldgiver"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" />
                    </div>
                    <div class="mb-6">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 ">TINDAKAN PERBAIKAN
                            :</label>
                        <textarea id="message" rows="4" name="tindakperbaikan"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder=""></textarea>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input id="bordered-radio-1" type="radio" value="Sudah Input Bagian 2" name="sinput2"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-1"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Sudah
                                Input Bagian 2</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input checked id="bordered-radio-2" type="radio" value="Belum Input Bagian 2"
                                name="sinput2"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-2"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Belum
                                Input Bagian 2</label>
                        </div>
                    </div>

                    {{-- BAGIAN 3 --}}


                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <h1 class="mb-4 text-2xl font-bold text-gray-900  md:text-2xl lg:text-2xl">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-blue-500">BAGIAN
                                    3</span>
                            </h1>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">PENERIMA :
                            </label>
                            <input type="text" id="first_name" name="penerimabagus"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 ">TANGGAL TRIAL /
                                PRODUKSI :</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide" name="tanggal5" datepicker datepicker-autohide
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                    placeholder="" autocomplete="off">
                            </div>
                        </div>

                    </div>
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="ok"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 ">OK</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="" name="gkok"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 ">TIDAK</label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 ">CATATAN :</label>
                        <textarea id="message" rows="4" name="catatan"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder=""></textarea>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input id="bordered-radio-1" type="radio" value="Sudah Input Bagian 3" name="sinput3"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-1"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Sudah
                                Input Bagian 3</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm ">
                            <input checked id="bordered-radio-2" type="radio" value="Belum Input Bagian 3"
                                name="sinput3"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                            <label for="bordered-radio-2"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Belum
                                Input Bagian 3</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
                </form>


            </div>
    </main>
    </div>

</body>

</html>
