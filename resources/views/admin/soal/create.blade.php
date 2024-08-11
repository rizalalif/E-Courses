@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
    <main class="pt-14 h-[100vh] md:ml-64">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <p class="my-2 text-gray-900 dark:text-white"><a href="{{ route('soal.index') }}">Soal</a> / Create</p>
            <form action="{{ route('soal.store') }}" method="POST" class="col-span-2">
                @csrf
                <input type="hidden" name="status" id="status" value="">
                <input type="hidden" name="jumlah_soal" id="jumlah_soal" value="1">
                <div class="max-w-full px-4 py-4 mx-auto rounded-md lg:py-5 dark:bg-gray-800">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Soal Baru</h2>
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class="">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Nama Soal" required="">
                                @error('nama')
                                    <p>{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                                Pengerjaan</label>
                            <input type="number" name="waktu_pengerjaan" id="waktu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="menit" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="description" rows="4" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Tulis deskripsi soal disini"></textarea>
                        </div>
                        {{-- Soal --}}
                        <div class="sm:col-span-2" id="soal">
                            <div id="accordion-open-0" data-accordion="open" class="my-2">
                                <h2 id="accordion-open-heading-0">
                                    <button type="button"
                                        class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right dark:border-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-open-body-0" aria-expanded="false"
                                        aria-controls="accordion-open-body-0">
                                        <span class="flex items-center">Soal 1</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-open-body" class="" aria-labelledby="accordion-open-heading-0">
                                    {{-- Soal --}}
                                    <div id="soal-container"
                                        class="p-5 border border-b-0 border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                        <div id="soal-0" class="mb-4">
                                            <textarea id="soal_1" rows="4" placeholder="Tulis soal disini" name="input[1][soal]"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required></textarea>
                                            <div class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban
                                            </div>
                                            <div class="">
                                                @foreach (['a', 'b', 'c', 'd', 'e'] as $option)
                                                    <div class="flex items-center py-2 space-x-2">
                                                        <input type="radio" name="input[1][kunci_jawaban]"
                                                            value="{{ $option }}" class="form-radio " required>
                                                        <input type="text" id="jawaban_{{ $option }}_0"
                                                            name="input[1][jawaban_{{ $option }}]"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Jawaban {{ strtoupper($option) }}" required>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan
                                            </div>
                                            <textarea id="penjelasan_0" rows="4" name="input[1][pembahasan]"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
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
                        <div class="grid grid-cols-2 gap-4 sm:col-span-2 ">
                            <button type="submit" onclick="submitForm('draft')"
                                class=" text-white inline-flex justify-center items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full">
                                <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Draft
                            </button>
                            <button type="submit" onclick="submitForm('finish')"
                                class="text-white inline-flex justify-center items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full">
                                <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Finish
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        var i = 1;

        $('#tambah-soal').click(function() {
            ++i;
            console.log('berhasil ditekan');

            var newSoal = `
        <div id="accordion-open-${i}" data-accordion="open" class="my-2">
            <h2 id="accordion-open-heading-${i}">
                <button type="button"
                        class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right dark:border-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-open-body-${i}" aria-expanded="false"
                        aria-controls="accordion-open-body-${i}">
                        <span class="flex items-center">Soal ${i}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
            </h2>
            <div id="accordion-open-body-${i}" class="open" aria-labelledby="accordion-open-heading-${i}">
                <div id="soal-container-${i}"
                    class="p-5 border border-b-0 border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                    <div id="" class="mb-4">
                        <textarea id="soal_${i}" rows="4" placeholder="Tulis soal disini" name="input[${i}][soal]"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required></textarea>
                        <div class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</div>
                        <div>
                            ${['a', 'b', 'c', 'd', 'e'].map(option => `
                                                                                                                                                        <div class="flex items-center py-2 space-x-2">
                                                                                                                                                            <input type="radio" name="input[${i}][kunci_jawaban]" value="${option}" class="form-radio" required>
                                                                                                                                                            <input type="text" id="jawaban_${option}_${i}" name="input[${i}][jawaban_${option}]"
                                                                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                                                                                                placeholder="Jawaban ${option.toUpperCase()}" required>
                                                                                                                                                        </div>`).join('')}
                        </div>
                        <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan</div>
                        <textarea id="penjelasan_${i}" rows="4" name="input[${i}][pembahasan]"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required></textarea>
                    </div>
                </div>
            </div>
        </div>`;

            $('#soal').append(newSoal);
            $('#jumlah_soal').val(i);
        });
        window.Flowbite.initAccordions();
    </script>

    <script>
        function submitForm(status) {
            document.getElementById('status').value = status;
            document.forms[0].submit(); // Submit the form
        }
    </script>
@endsection
