@extends('admin.layout.master')
@section('title', 'Paket')
@section('content')

<!-- <section class="p-2bg-white dark:bg-gray-900"> -->
<main class="pt-16 h-[100vh] md:ml-64">

    <section class="p-2 bg-gray-50 dark:bg-gray-900 sm:p-5 ">
        <div class="max-w-screen-4xl px-4 mx-auto lg:px-12">

            <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new paket</h2>
                <form id="add" action="{{route('paket.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="flex-col gap-8">
                            <label class="block my-2 text-sm font-medium text-gray-900 dark:text-white" for="large_size">Thumbnail</label>
                            <img id="preview" srcset="{{asset('assets/img/image.png')}}" class="w-full h-44 max-w-xl rounded-lg" alt="image description">
                            <div class="sm:col-span-2 my-4">
                                <input id="thumbnail" value="{{ old('thumbnail') }}" name="thumbnail" class="relative-absolute mb-1 w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                                <!-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p> -->
                            </div>


                        </div>


                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type paket name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kategori" class="block my-2 text-sm font-medsoaium text-gray-900 dark:text-white">Kategori</label>
                                <select id="kategori" name="kategori" value="{{old('kategori')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="">Select Kategori</option>
                                    @foreach ($kategori as $cat )
                                    <option value="{{$cat->id}}" {{ old('kategori') == $cat->id ? 'selected' : '' }}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="day_active" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Day Active</label>
                                <input type="number" name="day_active" value="{{old('day_active')}}" id="day_active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type day active paket" required="">
                            </div>
                            <div class="w-full">
                                <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount</label>
                                <input type="number" name="diskon" id="discount" value="{{old('diskon')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="100%" required="">
                            </div>
                            <div class="w-full">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price" value="{{old('price')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{old('description')}}</textarea>
                        </div>
                        <div class="flex flex-row gap-4 sm:col-span-2">
                            <!-- <div class="flex flex-col gap-4"> -->
                            <div id="container-materi" class="basis-4/6 space-y-2">
                                <label for="materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Materi</label>

                                @php
                                $oldMateris = old('materi', []); // Get the old 'materi' input as an array
                                @endphp
                                @if(count($oldMateris) > 0)
                                @foreach ($oldMateris as $oldMateri )

                                <div id="dropdown-materi-{{$oldMateri}}" class="flex flex-col gap-2">
                                    <select id="materi-{{$oldMateri}}" name="materi[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option disabled selected="">Select Materi</option>
                                        @foreach ($materis as $materi )
                                        <option value="{{$materi->id}}" {{ $oldMateri == $materi->id ? 'selected' : '' }}>{{$materi->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @endforeach
                                @else
                                <!-- Render default dropdown if no old values exist -->
                                <div id="dropdown-materi" class="flex flex-col gap-2">
                                    <select id="materi" name="materi[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option disabled selected>Select Materi</option>
                                        @foreach ($materis as $materi)
                                        <option value="{{$materi->id}}">{{$materi->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif

                            </div>
                            <div id="container-soal" class="basis-4/6 space-y-2">
                                <label for="soal" class="block mb-2 text-sm font-medsoaium text-gray-900 dark:text-white">Soal</label>
                                @php
                                $oldSoals = old('soal', []); // Get the old 'materi' input as an array
                                @endphp
                                @if(count($oldSoals) > 0)
                                @foreach ($oldSoals as $oldSoal )

                                <div id="dropdown-soal-{{$oldSoal}}" class="flex flex-col gap-2">
                                    <select id="soal-{{$oldSoal}}" name="soal[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option disabled selected="">Select Soal</option>
                                        @foreach ($soals as $soal )
                                        <option value="{{$soal->id}}" {{ $oldSoal == $soal->id ? 'selected' : '' }}>{{$soal->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @endforeach
                                @else
                                <!-- Render default dropdown if no old values exist -->
                                <div id="dropdown-soal" class="flex flex-col gap-2">
                                    <select id="soal" name="soal[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option disabled selected>Select Soal</option>
                                        @foreach ($soals as $soal)
                                        <option value="{{$soal->id}}">{{$soal->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif

                            </div>
                        </div>

                    </div>
                </form>
                <div class="flex flex-row justify-end gap-4" id="dropdown-item">
                    <button type="input" di onclick="addItem('materi')" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800">
                        Add Materi
                    </button>
                    <button type="input" onclick="addItem('soal')" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800">
                        Add Soal
                    </button>
                    <button type="submit" form="add" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Submit Paket
                    </button>
                </div>
            </div>
        </div>

    </section>


    @endsection
</main>

<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#thumbnail').change(function() {
            previewImage(this)

        });
    })

    function previewImage(input) {
        var preview = $('#preview')[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.srcset = e.target.result;
                preview.style.block = 'block';

            }
            reader.readAsDataURL(input.files[0]);


        }
    }







    function addItem(item) {
        const containerMateri = document.getElementById('container-materi');
        const containerSoal = document.getElementById('container-soal');

        const DropdownMateri =
            `<div id="dropdown-materi" class="flex flex-col gap-2">
                    <select id="materi" name="materi[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                         <option disabled selected="">Select Materi</option>
                         @foreach ($materis as $materi )
                         <option value="{{$materi->id}}">{{$materi->name}} - {{$materi->id}}</option>
                         @endforeach

                    </select>
                </div>`;
        const DropdownSoal =
            `<div id="dropdown-soal" class="flex flex-col gap-2">
                    <select id="soal" name="soal[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option disabled selected="">Select Soal</option>
                        @foreach ($soals as $soal )
                        <option value="{{$soal->id}}">{{$soal->name}} - {{$soal->id}}</option>
                        @endforeach

                    </select>
            </div>`;

        const newContainer = document.createElement('div');
        newContainer.className = 'flex flex-col gap-2';

        if (item === 'materi') {
            newContainer.innerHTML = DropdownMateri
            containerMateri.appendChild(newContainer)
            // console.log(newContainer);
            // console.log(DropdownMateri);
        } else {
            newContainer.innerHTML = DropdownSoal
            containerSoal.appendChild(newContainer)
            // console.log(newContainer);
        }

    }
</script>