@extends('admin.layout.master')
@section('title', 'Paket')
@section('content')


<main class="pt-16 h-[100vh] md:ml-64">


    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />
                    <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1
                        class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        {{$paket->name}}

                    </h1>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        {{$paket->description}}
                    </p>
                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />





                </div>
            </div>
            <div class="px-10">

                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Materi
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Materi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Detail
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1
                            @endphp
                            @foreach ($paket->paket_detail as $item )
                            @if ($item->paketable_type == 'App\Models\Materi')

                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">
                                    {{$no++}}
                                </td>
                                <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$item->paketable->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$item->paketable->status}}

                                </td>
                                <td class="px-6 py-4">
                                    {{$item->paketable->description}}

                                </td>
                                <!-- Materi -->
                                <td class="px-6 py-4">
                                    <button id="dropdown-button-{{$item->id}}" data-dropdown-toggle="dropdown-{{$item->id}}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="dropdown-{{$item->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                            <li>
                                                <a href="{{ route('materi.detail.show',$item->paketable->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{route('paket.material.delete',$item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="confirm('Apakah anda akan yakin ingin menghapus paket {{$paket->name}}')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Soal
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Soal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Waktu Pengerjaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Detail
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1
                            @endphp
                            @foreach ($paket->paket_detail as $item )
                            @if ($item->paketable_type == 'App\Models\Soal')

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{$no++}}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$item->paketable->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$item->paketable->waktu_pengerjaan}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$item->paketable->status}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$item->paketable->description}}
                                </td>
                                <td class="px-6 py-4">
                                    <button id="dropdown-button-{{$item->id}}" data-dropdown-toggle="dropdown-{{$item->id}}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="dropdown-{{$item->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                            <li>
                                                <a href="{{ route('soal.detail.show',$item->paketable->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{route('paket.material.delete',$item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="confirm('Apakah anda akan yakin ingin menghapus soal {{$item->paketable->name}} dari paket {{$paket->name}} ')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif

                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
</main>
@endsection