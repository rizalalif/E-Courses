@extends('admin.layout.master')
@section('title', 'Paket')
@section('content')

<main class="pt-16 h-[100vh] md:ml-64">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-4xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
            <form id="update" method="post" action="{{route('paket.update',$paketData->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="flex-col gap-8">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="large_size">Thumbnail</label>
                        <img id="preview" srcset="{{asset('assets/img/'.$paketData->thumbnail)}}" class="w-full h-44 max-w-xl rounded-lg" alt="{{$paketData->thumbnail}}">
                        <div class="sm:col-span-2 my-4">
                            <input type="hidden" name="hidThumbnail" value="{{$paketData->thumbnail}}">
                            <input id="thumbnail" value="{{ $paketData->thumbnail }}" name="thumbnail" class="relative-absolute mb-1 w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
                            <!-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p> -->
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a product description here...">{{$paketData->description}}</textarea>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paket Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$paketData->name}}" placeholder="Type product name" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="{{$paketData->category->id}}" selected>{{$paketData->category->name}}</option>
                                @foreach ($categories as $category )
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Paket</label>
                            <select id="tipe" name="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="{{$paketData->paket_type}}">{{$paketData->paket_type == 'free' ? 'Free':'Purchase' }}</option>
                                @if ($paketData->paket_type == 'free' )
                                <option value="purchase">Purchase</option>
                                @else
                                <option value="free">Free</option>
                                @endif
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$paketData->price}}" placeholder="Product brand" required="">
                        </div>
                        <div class="w-full">
                            <label for="diskon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount</label>
                            <input type="number" name="discount" id="diskon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$paketData->discount}}" placeholder="$299" required="">
                        </div>
                        <div class="w-full">
                            <label for="active" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Day Active</label>
                            <input type="number" name="active" id="active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$paketData->day_active_paket}}" placeholder="Product brand" required="">
                        </div>
                        <div class="w-full">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="{{$paketData->status}}">{{$paketData->status == 'active' ? 'Active':'Inactive' }}</option>
                                @if ($paketData->status == 'active' )
                                <option value="inactive">Inactive</option>
                                @else
                                <option value="active">Active</option>
                                @endif
                            </select>
                        </div>

                    </div>

                    <div class="flex flex-row gap-4 sm:col-span-2">
                        <!-- <div class="flex flex-col gap-4"> -->
                        <div id="container-materi" class="basis-4/6 space-y-2">
                            <label for="materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Materi</label>
                            @foreach ($paketData->paket_detail as $material)
                            @if ($material->paketable_type == 'App\Models\Materi')
                            <input type="hidden" name="detailMateri[]" value="{{$material->id}}">
                            <div id="dropdown-materi" class="flex flex-col gap-2">
                                <select id="materi" name="materi[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="{{$material->paketable->id}}" selected="">{{$material->paketable->name}}</option>
                                    @foreach ($materi as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div id="container-soal" class="basis-4/6 space-y-2">
                            <label for="soal" class="block mb-2 text-sm font-medsoaium text-gray-900 dark:text-white">Soal</label>
                            @foreach ($paketData->paket_detail as $material)
                            @if ($material->paketable_type == 'App\Models\Soal')
                            <input type="hidden" name="detailSoal[]" value="{{$material->id}}">
                            <div id="dropdown-soal" class="flex flex-col gap-2">
                                <select id="soal" name="soal[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="{{$material->paketable->id}}" selected="">{{$material->paketable->name}}</option>
                                    @foreach ($soal as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="flex flex-row justify-end gap-4">
                    <button type="button" onclick="addItem('materi')" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800">
                        Add Materi
                    </button>
                    <button type="button" onclick="addItem('soal')" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800">
                        Add Soal
                    </button>
                    <button type="submit" form="update" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Update Paket
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection

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
                         @foreach ($materi as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                         @endforeach

                    </select>
                </div>`;
        const DropdownSoal =
            `<div id="dropdown-soal" class="flex flex-col gap-2">
                    <select id="soal" name="soal[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option disabled selected="">Select Soal</option>
                        @foreach ($soal as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
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