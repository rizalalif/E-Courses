@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
<main class="pt-14 h-[100vh] md:ml-64">
    <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
        <p class="my-2 text-gray-900 dark:text-white"><a href="{{ route('soal.index') }}">Soal</a> / Create</p>
        <form id="add-soal" action="{{ route('soal.store') }}" method="POST" class="col-span-2">
            @csrf
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
                        <button id="tambah-soal" type="button"
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
                        <button type="submit" onclick="submitForm('draft')" name="status" value="draft"
                            class=" text-white inline-flex justify-center items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full">
                            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Save as Draft
                        </button>
                        <button type="submit" form="add-soal" name="status" value="finish"
                            class="text-white inline-flex justify-center items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full">
                            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    </div>
</main>
<!-- Modal HTML -->
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
            <div class="flex justify-center items-center space-x-4">
                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Yes, I'm sure
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    var i = 1;

    $('#tambah-soal').click(function() {
        ++i;
        console.log('berhasil ditekan');
        console.log({
            soal: i
        });


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
    window.onbeforeunload = function(e) {
        e.preventDefault();
        $('#deleteModal').modal('show');
        return false;
    };
</script>

@endsection