@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
    <main class="pt-14 h-[100vh] md:ml-64">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <p class="my-2 text-gray-900 dark:text-gray-300"><a href="{{ route('soal.index') }}">Soal</a> / Detail</p>
            <div class="max-w-full px-4 py-4 mx-auto rounded-md lg:py-5 dark:bg-gray-800">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Soal</h2>
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama Soal" required="" readonly value="{{ $soal->name }}">
                    </div>
                    <div>
                        <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                            Pengerjaan</label>
                        <input type="number" name="waktu" id="waktu"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="menit" required="" readonly value="{{ $soal->waktu_pengerjaan }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="description" rows="4" readonly name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tulis deskripsi soal disini">{{ $soal->description }}</textarea>
                    </div>

                    <div class="sm:col-span-2">
                        @foreach ($soal->detailSoals as $detail)
                            <div id="accordion-open-{{ $loop->iteration }}" data-accordion="open" class="my-2">
                                <h2 id="accordion-open-heading-{{ $loop->iteration }}">
                                    <button type="button"
                                        class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right dark:border-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-open-body-{{ $loop->iteration }}"
                                        aria-expanded="false" aria-controls="accordion-open-body-{{ $loop->iteration }}">
                                        <span class="flex items-center">Soal {{ $loop->iteration }}</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-open-body-{{ $loop->iteration }}" class="hidden"
                                    aria-labelledby="accordion-open-heading-{{ $loop->iteration }}">
                                    {{-- Soal --}}
                                    <div
                                        class="p-5 border border-b-0 border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                        <div class="mb-4">
                                            <textarea id="soal_{{ $loop->iteration }}" rows="4" readonly placeholder="Tulis soal disini"
                                                name="input[{{ $loop->iteration }}][soal]"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $detail->soal }}</textarea>
                                            <div class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban
                                            </div>
                                            <div>
                                                @foreach (['a', 'b', 'c', 'd', 'e'] as $option)
                                                    <div class="flex items-center py-2 space-x-2">
                                                        <!-- Label untuk opsi jawaban -->
                                                        <p class="font-bold uppercase dark:text-white">
                                                            {{ strtoupper($option) }}
                                                        </p>

                                                        <!-- Radio button untuk memilih kunci jawaban (read only) -->

                                                        <input type="radio" readonly disabled
                                                            name="input[{{ $loop->parent->iteration }}][kunci_jawaban]"
                                                            {{ $detail->kunci_jawaban == $option ? 'checked' : '' }}
                                                            value="{{ $option }}" class="w-4 h-4 ">

                                                        <!-- Input text untuk jawaban (read only) -->
                                                        <input type="text" readonly
                                                            value="{{ $detail->{'jawaban_' . $option} }}"
                                                            id="jawaban_{{ $option }}_{{ $loop->parent->iteration }}"
                                                            name="input[{{ $loop->parent->iteration }}][jawaban_{{ $option }}]"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Jawaban {{ strtoupper($option) }}">
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan
                                            </div>
                                            <textarea id="penjelasan_{{ $loop->iteration }}" rows="4" readonly
                                                name="input[{{ $loop->iteration }}][pembahasan]"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $detail->pembahasan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="sm:col-span-2">
                        <div class="grid gap-4 my-5 sm:grid-cols-2">
                            <a href="{{ route('soal.edit', $soal->id) }}"
                                class="text-white inline-flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-600 w-full">
                                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 4h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm5 3a1 1 0 0 1-1 1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Edit
                            </a>
                            <button id="deleteSoalBtn" type="button" data-modal-target="deleteModal"
                                data-modal-toggle="deleteModal"
                                class="text-white inline-flex justify-center items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full">
                                <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                                </svg>
                                Delete
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>

    <!-- delete modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button"
                    class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <p class="mb-4 text-gray-500 dark:text-gray-300">Apakah anda yakin menghapus soal?</p>
                <div class="flex items-center justify-center space-x-4">
                    <button data-modal-toggle="deleteModal" type="button"
                        class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        No
                    </button>
                    <form id="deleteForm" action="{{ route('soal.destroy', $soal->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Yes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


@endsection
