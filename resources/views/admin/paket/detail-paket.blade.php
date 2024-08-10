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
                            @foreach ($materi as $item )

                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">
                                    {{$loop->iteration}}

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
                                <td class="px-6 py-4">
                                    <a href="{{route('materi.detail.show',$item->paketable->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
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
                            @foreach ($soal as $item )

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{$loop->iteration}}
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
                                    <a href="{{route('soal.detail.show',$item->paketable->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
</main>
@endsection