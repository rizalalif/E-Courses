@extends('user.layouts.master')
@section('content')
<section class="mb-16 antialiased bg-white dark:bg-gray-900">
    <div class="mx-auto 2xl:px-0 item">
        <div class="relative px-4 py-8 bg-center bg-cover dark:bg-gray-800"
            style="background-image: url('{{ asset("assets/img/bg.png") }}');">
            <!-- SVG yang akan berada di belakang -->
            <img src="{{ asset('assets/img/lampu.svg') }}" alt=""
                class="absolute top-[70px] right-[150px] z-0 animate-bounce-slow w-20">
            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt=""
                class="absolute w-[75px] left-[107px] bottom-[35px] z-0 animate-spin-slow hidden lg:block">

            <div class="relative z-10 max-w-screen-xl mx-auto lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="max-w-md mx-auto my-auto shrink-0 lg:max-w-lg">
                    <img class="w-full " src="{{ asset('assets/img/'.$paket->thumbnail) }}" alt="" />
                </div>
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="mt-10 text-2xl font-semibold text-gray-900 sm:text-3xl dark:text-white">
                        {{$paket->name}}
                    </h1>
                    <div class="flex items-center gap-4 mt-4">
                        <p class="text-lg font-bold text-red-500 line-through sm:text-xl dark:text-white animate-pulse">
                            Rp.{{$paket->price}}
                        </p>
                        <p class="text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white">
                            Rp.{{$viewDiscount}}
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class=" rounded bg-yellow-100 px-2.5 pt-0.5 mt-2 text-xs font-medium text-yellow-400 dark:bg-primary-900 dark:text-primary-300">
                            {{$paket->category->name}}</span>
                        <span
                            class=" rounded bg-red-100 px-2.5 pt-0.5 mt-2 text-xs font-medium text-red-400 dark:bg-primary-900 dark:text-primary-300">
                            {{$paket->status}}</span>
                    </div>
                    <div class="mt-1 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="{{ route('user.checkout.single',$paket->id) }}" title=""
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-greenTaskUp focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 17.345a4.76 4.76 0 0 0 2.558 1.618c2.274.589 4.512-.446 4.999-2.31.487-1.866-1.273-3.9-3.546-4.49-2.273-.59-4.034-2.623-3.547-4.488.486-1.865 2.724-2.899 4.998-2.31.982.236 1.87.793 2.538 1.592m-3.879 12.171V21m0-18v2.2" />
                            </svg>
                            Buy Now
                        </a>
                        <a href="{{route('user.learning.material',$paket->id)}}" title=""
                            class="text-white mt-4 sm:mt-0 bg-greenTaskUp hover:bg-greenTaskUp-dark focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>

                            Pelajari
                        </a>
                    </div>

                    <hr class="my-6 border-x-green-500 md:my-4 dark:border-gray-800" />

                    <p class="mb-6 text-gray-900 dark:text-gray-400">
                        {{$paket->description}}
                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="p-5 mt-12 border-2 rounded-lg dark:bg-gray-800">
                <h2 class="mb-3 text-2xl font-bold text-gray-800 dark:text-white">Isi Paket</h2>
                <div id="accordion-open-1" data-accordion="open" class="py-1 rounded-lg">
                    <h2 id="accordion-open-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-800 bg-white border border-gray-200 rtl:text-right focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                            data-accordion-target="#accordion-open-body-1" aria-expanded="false"
                            aria-controls="accordion-open-body-1">
                            <span class="flex items-center">
                                Is there a Figma file available?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-300 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden transition duration-300"
                        aria-labelledby="accordion-open-heading-1">
                        <div class="p-5 bg-white border border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-800 dark:text-gray-400">Flowbite is first conceptualized and
                                designed
                                using the Figma software so everything you see in the library has a design equivalent in
                                our
                                Figma file.</p>
                        </div>
                    </div>
                </div>

                <div id="accordion-open-2" data-accordion="open" class="py-1 rounded-lg">
                    <h2 id="accordion-open-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-800 bg-white border border-gray-200 rtl:text-right focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                            data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                            aria-controls="accordion-open-body-2">
                            <span class="flex items-center">
                                Is there a Figma file available?</span>
                            <svg data-accordion-icon class="w-3 h-3 transition duration-300 rotate-180 shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden transition duration-300"
                        aria-labelledby="accordion-open-heading-2">
                        <div class="p-5 bg-white border border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-800 dark:text-gray-400">Flowbite is first conceptualized and
                                designed
                                using the Figma software so everything you see in the library has a design equivalent in
                                our
                                Figma file.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative px-4 py-8 bg-center bg-cover dark:bg-gray-800"
                style='background-image: url("{{ asset('assets/img/bg.png') }}")'>
                <h2 class="mb-3 text-2xl font-bold text-gray-800 dark:text-white">Paket Lainnya</h2>

                <div class="overflow-x-hidden scroll-container ">
                    <div class="flex space-x-4">
                        <!-- Item 1 -->
                        <a href="/halaman-tujuan"
                            class="item flex flex-col w-full h-auto bg-white sm:flex-row md:w-[60%] lg:w-[40%] shrink-0 no-underline">
                            <div class="relative w-full sm:w-1/3 h-60 sm:h-auto lg:w-1/4">
                                <span
                                    class="rounded bg-rose-700 px-2.5 pt-0.5 text-xs font-medium text-white dark:bg-primary-900 dark:text-primary-300 absolute top-3 left-3">
                                    Sale
                                </span>
                                <img src="{{ asset('assets/img/corosel.jpg') }}" class="object-cover w-full h-full"
                                    alt="">
                            </div>
                            <div class="w-full px-4 py-6 text-slate-600 sm:w-2/3 lg:w-3/4">
                                <h1 class="text-lg font-semibold text-greenTaskUp">Data Science</h1>
                                <h2 class="my-2 text-lg font-bold">Pemrograman Machine Learning</h2>
                                <p class="text-sm font-light text-slate-500">Fokus dalam pengembangan model Machine
                                    Learning</p>
                                <div class="flex gap-2 my-2">
                                    <p class="font-semibold text-md text-slate-300">Rp. 1.200.000</p>
                                    <p class="font-semibold text-[#40BB15] text-md">Rp. 1.000.000</p>
                                </div>
                                <div class="flex items-center gap-2 my-2">
                                    <div class="flex items-center gap-0">
                                        <img src="{{ asset('assets/img/jam.svg') }}" alt="" class="w-4">
                                        <p class="text-[10px]">10 Days</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/soal.svg') }}" alt="" class="w-3">
                                        <p class="text-[10px]">10 Soal & Materi</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/progress.svg') }}" alt=""
                                            class="w-3">
                                        <p class="text-[10px]">Progress</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="flex items-center justify-center px-4 py-2 text-white bg-blue-500 rounded">
                                        Pelajari
                                    </button>
                                </div>
                            </div>
                        </a>
                        <!-- Item 2 -->
                        <a href="/halaman-tujuan"
                            class="flex flex-col w-full h-auto bg-white sm:flex-row md:w-[60%] lg:w-[40%] shrink-0 no-underline">
                            <div class="relative w-full sm:w-1/3 h-60 sm:h-auto lg:w-1/4">
                                <span
                                    class="rounded bg-rose-700 px-2.5 pt-0.5 text-xs font-medium text-white dark:bg-primary-900 dark:text-primary-300 absolute top-3 left-3">
                                    PRICING
                                </span>
                                <img src="{{ asset('assets/img/corosel.jpg') }}" class="object-cover w-full h-full"
                                    alt="">
                            </div>
                            <div class="w-full px-4 py-6 text-slate-600 sm:w-2/3 lg:w-3/4">
                                <h1 class="text-lg font-semibold text-greenTaskUp">Data Science</h1>
                                <h2 class="my-2 text-lg font-bold">Pemrograman Machine Learning</h2>
                                <p class="text-sm font-light text-slate-500">Fokus dalam pengembangan model Machine
                                    Learning</p>
                                <div class="flex gap-2 my-2">
                                    <p class="font-semibold text-md text-slate-300">Rp. 1.200.000</p>
                                    <p class="font-semibold text-[#40BB15] text-md">Rp. 1.000.000</p>
                                </div>
                                <div class="flex items-center gap-2 my-2">
                                    <div class="flex items-center gap-0">
                                        <img src="{{ asset('assets/img/jam.svg') }}" alt="" class="w-4">
                                        <p class="text-[10px]">10 Days</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/soal.svg') }}" alt="" class="w-3">
                                        <p class="text-[10px]">10 Soal & Materi</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/progress.svg') }}" alt=""
                                            class="w-3">
                                        <p class="text-[10px]">Progress</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="flex items-center justify-center px-4 py-2 text-white bg-blue-500 rounded">
                                        Pelajari
                                    </button>
                                </div>
                            </div>
                        </a>
                        <!-- Item 3 -->
                        <a href="/halaman-tujuan"
                            class="flex flex-col w-full h-auto bg-white sm:flex-row md:w-[60%] lg:w-[40%] shrink-0 no-underline">
                            <div class="relative w-full sm:w-1/3 h-60 sm:h-auto lg:w-1/4">
                                <span
                                    class="rounded bg-rose-700 px-2.5 pt-0.5 text-xs font-medium text-white dark:bg-primary-900 dark:text-primary-300 absolute top-3 left-3">
                                    PRICING
                                </span>
                                <img src="{{ asset('assets/img/corosel.jpg') }}" class="object-cover w-full h-full"
                                    alt="">
                            </div>
                            <div class="w-full px-4 py-6 text-slate-600 sm:w-2/3 lg:w-3/4">
                                <h1 class="text-lg font-semibold text-greenTaskUp">Data Science</h1>
                                <h2 class="my-2 text-lg font-bold">Pemrograman Machine Learning</h2>
                                <p class="text-sm font-light text-slate-500">Fokus dalam pengembangan model Machine
                                    Learning</p>
                                <div class="flex gap-2 my-2">
                                    <p class="font-semibold text-md text-slate-300">Rp. 1.200.000</p>
                                    <p class="font-semibold text-[#40BB15] text-md">Rp. 1.000.000</p>
                                </div>
                                <div class="flex items-center gap-2 my-2">
                                    <div class="flex items-center gap-0">
                                        <img src="{{ asset('assets/img/jam.svg') }}" alt="" class="w-4">
                                        <p class="text-[10px]">10 Days</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/soal.svg') }}" alt="" class="w-3">
                                        <p class="text-[10px]">10 Soal & Materi</p>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/img/progress.svg') }}" alt=""
                                            class="w-3">
                                        <p class="text-[10px]">Progress</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="flex items-center justify-center px-4 py-2 text-white bg-blue-500 rounded">
                                        Pelajari
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4 mt-5">
                    <button
                        class="flex items-center justify-center w-10 h-10 text-white bg-gray-500 rounded-full hover:bg-gray-600"
                        id="scroll-left">
                        <i class="fas fa-chevron-left"></i> <!-- Ikon panah kiri -->
                    </button>
                    <button
                        class="flex items-center justify-center w-10 h-10 text-white bg-gray-500 rounded-full hover:bg-gray-600"
                        id="scroll-right">
                        <i class="fas fa-chevron-right"></i> <!-- Ikon panah kanan -->
                    </button>
                </div>
            </div>



        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    const scrollContainer = document.querySelector('.scroll-container');
    const scrollRightButton = document.getElementById('scroll-right');
    const scrollLeftButton = document.getElementById('scroll-left');

    // Tunggu hingga elemen kartu ter-render untuk mendapatkan lebar kartu
    window.addEventListener('load', () => {
        const firstCard = scrollContainer.querySelector('.item');
        if (firstCard) {
            const cardWidth = firstCard.offsetWidth;

            scrollRightButton.addEventListener('click', () => {
                scrollContainer.scrollBy({
                    left: cardWidth + 10, // Geser berdasarkan lebar kartu
                    behavior: 'smooth'
                });
            });

            scrollLeftButton.addEventListener('click', () => {
                scrollContainer.scrollBy({
                    left: -cardWidth + 10, // Geser berdasarkan lebar kartu
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
@endsection