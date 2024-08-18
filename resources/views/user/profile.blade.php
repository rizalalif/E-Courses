@extends('user.layouts.master')
@section('content')
    <section class="py-8 antialiased bg-gray-50 dark:bg-gray-900 md:py-12">
        <div class="max-w-screen-xl px-4 py-10 mx-4 border rounded-md 2xl:px-0 bg-slate-50 lg:mx-auto">
            <div class="max-w-6xl mx-auto">
                <h1 class="text-2xl font-semibold ">Profil Pengguna</h1>
                <hr class="mt-1 mb-6">

                <div class="grid gap-6 mt-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Foto Diri Section -->
                    <div class="flex flex-col items-center space-y-4">
                        <div class="flex items-center justify-center w-32 h-32 bg-gray-200 rounded-full">
                            <img src="https://via.placeholder.com/100" alt="Foto Profil"
                                class="object-cover w-full h-full rounded-md">
                        </div>
                        <button class="px-4 py-2 text-white bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Pilih Foto</button>
                        <p class="text-sm text-center text-gray-500">Gambar Profile Anda sebaiknya memiliki rasio 1:1 dan
                            berukuran tidak lebih dari 2MB.</p>
                    </div>
                    <div class="space-y-4 lg:col-span-2">
                        <div class="grid gap-4 lg:grid-cols-2">
                            <!-- Nama Lengkap Section -->
                            <div class="space-y-2">
                                <label for="namaLengkap" class="block text-sm font-medium text-gray-700">Nama
                                    Lengkap</label>
                                <input type="text" id="namaLengkap"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Rahmat Fauzan" value="Rahmat Fauzan">
                            </div>
                            <!-- Username Section -->
                            <div class="space-y-2">
                                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" id="username"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="rhmfauzan" value="rhmfauzan">
                            </div>
                            <!-- No Telp Section -->
                            <div class="space-y-2">
                                <label for="noTelp" class="block text-sm font-medium text-gray-700">No. Telp</label>
                                <input type="text" id="noTelp"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="081234567890" value="081234567890">
                            </div>
                            <!-- Email Section -->
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email"
                                    class="w-full px-3 py-2 bg-gray-200 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="ffauzan091@gmail.com" value="ffauzan091@gmail.com" readonly>
                                <p class="text-sm text-gray-500">Anda dapat mengubah alamat email melalui menu <a
                                        href="#" class="text-indigo-500">Akun</a>.</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button class="px-4 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script></script>
@endsection
