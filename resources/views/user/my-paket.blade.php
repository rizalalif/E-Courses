@extends('user.layouts.master')

@section('content')
<section class="py-4 antialiased bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <h2 class="mb-3 text-xl font-semibold text-gray-800">Progress Belajar</h2>

        <div class="flex flex-col lg:flex-row lg:space-x-4">
            <!-- Bagian Kelas yang Dipelajari -->
            <div class="mb-8 lg:w-1/2">
                <h3 class="mb-3 text-lg font-medium">Kelas yang Dipelajari</h3>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="space-y-4">
                        @foreach ($data as $paket )

                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <span>{{$paket->paket_name}}</span>
                            <a href=""
                                class="px-3 py-2 text-sm text-white bg-blue-500 rounded-lg ms-2 hover:bg-blue-600 focus:outline-none">Lanjutkan</a>
                        </div>
                        @endforeach
                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <span>Memulai Pemrograman Dengan Java</span>
                            <button
                                class="px-3 py-2 text-sm text-white bg-blue-500 rounded-lg ms-2 hover:bg-blue-600 focus:outline-none">Lanjutkan</button>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <span>Memulai Pemrograman Dengan C</span>
                            <button
                                class="px-3 py-2 text-sm text-white bg-blue-500 rounded-lg ms-2 hover:bg-blue-600 focus:outline-none">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Kelas yang Diselesaikan -->
            <div class="mb-8 lg:w-1/2">
                <h3 class="mb-3 text-lg font-medium">Kelas yang Diselesaikan</h3>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <span>Cloud Practitioner Essentials (Belajar Dasar AWS Cloud)</span>
                            <button
                                class="px-3 py-2 text-sm text-white bg-blue-500 rounded-lg ms-2 hover:bg-blue-600 focus:outline-none">Detail</button>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <span>Belajar Dasar Pemrograman JavaScript</span>
                            <button
                                class="px-3 py-2 text-sm text-white bg-blue-500 rounded-lg ms-2 hover:bg-blue-600 focus:outline-none">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    // Tambahkan script jika diperlukan
</script>
@endsection