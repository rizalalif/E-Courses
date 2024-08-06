@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
    <main class="pt-14 h-[100vh] md:ml-64">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <p class="my-2 text-gray-900 dark:text-white"><a href="{{ route('soal.index') }}">Soal</a> / Create</p>
            <div class="max-w-full px-4 py-4 mx-auto rounded-md lg:py-5 dark:bg-gray-800">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama Soal" required="">
                    </div>
                    <div>
                        <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                            Pengerjaan</label>
                        <input type="number" name="waktu" id="waktu"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="menit" required="">
                    </div>
                    <div>
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                            Soal</label>
                        <input type="number" name="jumlah" id="jumlah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Jumlah Soal" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tulis deskripsi soal disini"></textarea>
                    </div>
                    {{-- Soal --}}
                    <div id="soal-container" class="p-4 mb-4 rounded-lg bg-gray-50 dark:bg-gray-700 sm:col-span-2">
                        <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white ">Soal</h2>
                        <div id="soal-1" class="mb-4">
                            <textarea id="soal_1" rows="4" placeholder="Tulis soal disini"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                            <div class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</div>
                            <div class="">
                                <div class="flex items-center py-2 space-x-2">
                                    <input type="radio" name="jawaban_1" value="a" class="form-radio">
                                    <input type="text" id="jawaban_a_1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Jawaban A">
                                </div>
                                <div class="flex items-center py-2 space-x-2">
                                    <input type="radio" name="jawaban_1" value="b" class="form-radio">
                                    <input type="text" id="jawaban_b_1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Jawaban B">
                                </div>
                                <div class="flex items-center py-2 space-x-2">
                                    <input type="radio" name="jawaban_1" value="c" class="form-radio">
                                    <input type="text" id="jawaban_c_1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Jawaban C">
                                </div>
                                <div class="flex items-center py-2 space-x-2">
                                    <input type="radio" name="jawaban_1" value="d" class="form-radio">
                                    <input type="text" id="jawaban_d_1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Jawaban D">
                                </div>
                                <div class="flex items-center py-2 space-x-2">
                                    <input type="radio" name="jawaban_1" value="e" class="form-radio">
                                    <input type="text" id="jawaban_e_1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Jawaban E">
                                </div>
                            </div>
                            <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan</div>
                            <textarea id="penjelasan_1" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <button id="tambah-soal" type="button" w-10"
                            class="text-white inline-flex justify-center items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full">
                            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Soal
                        </button>
                    </div>

                    <template id="soal-template">
                        <div class="p-4 mt-4 rounded-lg bg-gray-50 dark:bg-gray-700 sm:col-span-2">
                            <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white ">Soal</h2>
                            <div id="soal-1" class="mb-4">
                                <textarea rows="4" placeholder="Tulis soal disini"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                <div class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</div>
                                <div class="">
                                    <div class="flex items-center py-2 space-x-2">
                                        <input type="radio" name="jawaban" value="a" class="form-radio">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jawaban A">
                                    </div>
                                    <div class="flex items-center py-2 space-x-2">
                                        <input type="radio" name="jawaban" value="b" class="form-radio">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jawaban B">
                                    </div>
                                    <div class="flex items-center py-2 space-x-2">
                                        <input type="radio" name="jawaban" value="c" class="form-radio">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jawaban C">
                                    </div>
                                    <div class="flex items-center py-2 space-x-2">
                                        <input type="radio" name="jawaban" value="d" class="form-radio">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jawaban D">
                                    </div>
                                    <div class="flex items-center py-2 space-x-2">
                                        <input type="radio" name="jawaban" value="e" class="form-radio">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Jawaban E">
                                    </div>
                                </div>
                                <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan</div>
                                <textarea rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                            </div>
                        </div>
                    </template>



                </div>
            </div>
        </section>
        </div>
        <script>
            document.getElementById('tambah-soal').addEventListener('click', function() {
                const container = document.getElementById('soal-container');
                const template = document.getElementById('soal-template');
                const clone = template.content.cloneNode(true);

                const soalCount = container.querySelectorAll('div.mb-4').length + 1;

                clone.querySelector('textarea').id = `soal_${soalCount}`;
                clone.querySelectorAll('input[type="radio"]').forEach((radio, index) => {
                    radio.name = `jawaban_${soalCount}`;
                });
                clone.querySelector('textarea:last-of-type').id = `penjelasan_${soalCount}`;

                container.appendChild(clone);
            });
        </script>
    @endsection
