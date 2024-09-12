<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Kelas untuk rotasi ikon dengan transisi */
        .rotate-180 {
            transform: rotate(180deg);
            transition: transform 0.3s ease-in-out;
        }

        /* Kelas default untuk ikon sebelum rotasi */
        .rotate-0 {
            transform: rotate(0deg);
            transition: transform 0.3s ease-in-out;
        }

        #sidebar {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body>
    <header class="sticky top-0 z-50 ">
        <nav
            class="antialiased bg-white border border-gray-200 px-4 lg:px-6 py-2.5  dark:bg-gray-800 drop-shadow-md flex">
            <a href="{{ route('user.learning') }}" type="button" id="show-button"
                class="inline-flex items-center px-4 font-bold text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-l-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <div class="flex items-center">
                <h1 class="px-2 py-1 text-lg font-bold border rounded-r">{{$name}}</h1>
            </div>
        </nav>
    </header>

    <div class="container flex flex-col mx-auto mt-4 lg:flex-row">
        <section class="w-full lg:flex-grow">
            <div class="px-4 2xl:px-0 bg-slate-100">
                <div class="flex flex-col items-center p-4">
                    <div class="flex items-center justify-center">
                        <div class="p-4 bg-blue-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V5a2 2 0 00-2-2H6a2 2 0 00-2 2v3m12 0v3" />
                            </svg>
                        </div>
                    </div>
                    <h2 class="mt-4 text-lg font-bold">Berlangganan Untuk Melihat Modul</h2>
                    <p class="mt-2 text-gray-500">Belajar lebih banyak materi di kelas ini dengan berlangganan di
                        TaskUp.</p>
                </div>
            </div>
        </section>
        <aside id="sidebar" class="w-full transition-transform duration-300 ease-in-out lg:w-1/3 ">
            <div class="p-4 bg-gray-100 rounded-lg">
                <div class="flex items-center justify-between">
                    <h1 class="text-lg font-bold">Daftar Modul</h1>
                    <button id="toggleSidebar"
                        class="inline-flex items-center px-4 py-2 font-bold text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="mt-4">
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-green-500 rounded-full h-2.5 w-9/12"></div>
                    </div>
                    <span class="ml-2 text-xs font-medium text-gray-500">90% Selesai</span>
                </div>
                <div class="mt-8">
                    <ul class="space-y-4">
                        <!-- Materi 1 -->
                        <li class="flex flex-col">
                            <div class="flex items-center justify-between cursor-pointer toggle-submenu">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 transition-transform transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Materi</p>
                                </div>
                                <span>5/6</span>
                            </div>

                            <ul class="hidden mt-2 space-y-2 submenu">
                                @foreach ($material as $materi )
                                @if ($materi->paketable_type == 'App\Models\Materi')

                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">{{$materi->paketable->name}}</p>
                                </li>
                                @endif
                                @endforeach
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Mekanisme Belajar (Gratis)</p>
                                </li>
                                <!-- Tambahkan lebih banyak sub-materi di sini -->
                            </ul>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex items-center justify-between cursor-pointer toggle-submenu">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 transition-transform transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Soal</p>
                                </div>
                                <span>5/6</span>
                            </div>

                            <ul class="hidden mt-2 space-y-2 submenu">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Persetujuan Hak Cipta (Gratis)</p>
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Mekanisme Belajar (Gratis)</p>
                                </li>
                                <!-- Tambahkan lebih banyak sub-materi di sini -->
                            </ul>
                        </li>
                        <!-- Materi 2 -->
                        <li class="flex flex-col">
                            <div class="flex items-center justify-between cursor-pointer toggle-submenu">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 transition-transform transform rotate-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <p class="ml-2 text-gray-500">Pendahuluan</p>
                                </div>
                                <span>0/11</span>
                            </div>
                            <ul class="hidden mt-2 space-y-2 submenu">
                                <!-- Sub-materi untuk Pendahuluan -->
                            </ul>
                        </li>
                        <!-- Tambahkan lebih banyak materi di sini -->
                    </ul>
                </div>
            </div>
        </aside>
        <button id="show-button"
            class="fixed hidden px-4 py-2 font-bold text-gray-700 bg-gray-200 rounded-md bottom-4 right-4 hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function() {
        $('.toggle-submenu').on('click', function() {
            $(this).siblings('.submenu').stop(true, true).slideToggle(
                300); // Menggunakan slideToggle dengan durasi 300ms
            $(this).find('svg').toggleClass(
                'rotate-180 rotate-0');
        });
        $('#toggleSidebar').click(function() {
            console.log('berkas ditekan');
            $('#sidebar').toggleClass('-translate-x-full translate-x-0');
        });
    });
</script>

</html>