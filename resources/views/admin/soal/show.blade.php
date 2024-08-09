@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
    <main class="pt-14 h-[100vh] md:ml-64">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <p class="my-2 text-gray-900 dark:text-white"><a href="{{ route('soal.index') }}">Soal</a> / Create</p>
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

                    <form action="{{ route('soal.update', $soal->id) }}" method="POST" class="col-span-2">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="soal_id" value="{{ $soal->id }}">
                        <input type="hidden" name="status" id="status" value="">
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
                                            <textarea id="soal_{{ $loop->iteration }}" rows="4" placeholder="Tulis soal disini"
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

                                                        <!-- Radio button untuk memilih kunci jawaban -->
                                                        <input type="radio"
                                                            name="input[{{ $loop->parent->iteration }}][kunci_jawaban]"
                                                            {{ $detail->kunci_jawaban == $option ? 'checked' : '' }}
                                                            value="{{ $option }}" class="form-radio">

                                                        <!-- Input text untuk jawaban -->
                                                        <input type="text" value="{{ $detail->{'jawaban_' . $option} }}"
                                                            id="jawaban_{{ $option }}_{{ $loop->parent->iteration }}"
                                                            name="input[{{ $loop->parent->iteration }}][jawaban_{{ $option }}]"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Jawaban {{ strtoupper($option) }}">
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Penjelasan
                                            </div>
                                            <textarea id="penjelasan_{{ $loop->iteration }}" rows="4" name="input[{{ $loop->iteration }}][pembahasan]"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $detail->pembahasan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="grid gap-4 my-5 sm:grid-cols-2">
                            <button type="submit" onclick="submitForm('draft')"
                                class="text-white inline-flex justify-center items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full">
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
                    </form>
                </div>
            </div>
        </section>
        </div>
    </main>
@endsection
