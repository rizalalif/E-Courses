@extends('admin.layout.master')
@section('title', 'Soal')
@section('content')
    <main class="pt-14 h-[100vh] md:ml-64">
        <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
            <form action="{{ route('soal.update', $soal->id) }}" method="POST">
                @csrf
                @method('PUT')
                <p class="my-2 text-gray-900 dark:text-white"><a href="{{ route('soal.index') }}">Soal</a> / Create</p>
                <div class="max-w-full px-4 py-4 mx-auto rounded-md lg:py-5 dark:bg-gray-800">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Soal</h2>
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class="">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Nama Soal" required=""value="{{ $soal->name }}">
                        </div>
                        <div>
                            <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu
                                Pengerjaan</label>
                            <input type="number" name="waktu" id="waktu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="menit" required="" value="{{ $soal->waktu_pengerjaan }}">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="description" rows="4" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Tulis deskripsi soal disini">{{ $soal->description }}</textarea>
                        </div>

                        <div class="sm:col-span-2" id="soal">
                            @foreach ($soal->detailSoals as $detail)
                                <div id="accordion-open-{{ $loop->iteration }}" data-accordion="open" class="my-2">
                                    <h2 id="accordion-open-heading-{{ $loop->iteration }}">
                                        <button type="button"
                                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right dark:border-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
                                            data-accordion-target="#accordion-open-body-{{ $loop->iteration }}"
                                            aria-expanded="false"
                                            aria-controls="accordion-open-body-{{ $loop->iteration }}">
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
                                                <input type="hidden" value="{{ $detail->id }}"
                                                    name="input[{{ $loop->iteration }}][id]">
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

                                                            <!-- Radio button untuk memilih kunci jawaban (read only) -->
                                                            <input type="radio"
                                                                name="input[{{ $loop->parent->iteration }}][kunci_jawaban]"
                                                                {{ $detail->kunci_jawaban == $option ? 'checked' : '' }}
                                                                value="{{ $option }}" class="form-radio">

                                                            <!-- Input text untuk jawaban (read only) -->
                                                            <input type="text"
                                                                value="{{ $detail->{'jawaban_' . $option} }}"
                                                                id="jawaban_{{ $option }}_{{ $loop->parent->iteration }}"
                                                                name="input[{{ $loop->parent->iteration }}][jawaban_{{ $option }}]"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Jawaban {{ strtoupper($option) }}">
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div class="mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                    Penjelasan
                                                </div>
                                                <textarea id="penjelasan_{{ $loop->iteration }}" rows="4" name="input[{{ $loop->iteration }}][pembahasan]"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $detail->pembahasan }}</textarea>
                                            </div>
                                            <div>
                                                <div class="flex justify-end">
                                                    <button type="button" id="deleteSoalBtn" value="{{ $detail->id }}"
                                                        data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                                        class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="sm:col-span-2">
                            <button id="tambah-soal" type="button" w-10"
                                class="text-white inline-flex justify-center items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full">
                                Tambah Soal
                            </button>
                        </div>
                        <div class="sm:col-span-2">
                            <button type="button" data-modal-target="editModal" data-modal-toggle="editModal"
                                class="text-white inline-flex justify-center items-center bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-900 w-full">
                                Save Change
                            </button>
                            <!-- edit modal -->
                            <x-modal id="editModal" modalType="normal" type="edit"
                                message="Apakah Anda yakin ingin menghapus mengubah soal?" />
                        </div>
                    </div>
                </div>
            </form>

        </section>
        </div>
    </main>


    <!-- delete modal -->
    <x-modal id="deleteModal" modalType="normal" type="delete" message="Apakah Anda yakin ingin menghapus soal ini?" />




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#deleteSoalBtn', function(e) {
                e.preventDefault();
                console.log('id ditekan');
                var id = $(this).val();
                console.log(id);
                $('#id_soal').val(id);
                var actionUrl = "{{ route('detailsoal.destroy', ':id') }}";
                actionUrl = actionUrl.replace(':id', id);
                $('#deleteForm').attr('action', actionUrl);
            });
        });
    </script>

    <script>
        var i = {{ $soal->detailSoals->count() }};

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
