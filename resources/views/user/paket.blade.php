@extends('user.layouts.master')
@section('content')
    <section class="py-3 antialiased bg-gray-50 dark:bg-gray-900 md:py-0 ">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="justify-between my-8 lg:flex lg:items-center lg:mt-10">
                <h1 class="mb-4 text-4xl font-bold text-center lg:mb-0">Semua <span class="text-greenTaskUp">Paket</span>
                    di
                    TaskUp</h1>
                <div class="lg:w-1/3">
                    <form class="max-w-md mx-auto">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
                        <div class="relative">
                            <input type="search" id="default-search"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-greenTaskUp focus:border-greenTaskUp dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-[#89C7AA] hover:bg-[#7EB89D] font-medium rounded-xl text-sm px-2 py-2 dark:bg-blue-600 dark:hover:bg-green transition-colors duration-300">
                                <svg class="w-4 h-4 text-greenTaskUp-dark" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full h-[140px] bg-greenTaskUp-light flex items-center justify-between p-2">
                <!-- Tombol Previous -->
                <button type="button" id="prevBtn"
                    class="flex items-center justify-center p-3 transition-colors duration-300 bg-gray-100 rounded-full text-greenTaskUp-dark hover:text-greenTaskUp-light hover:bg-greenTaskUp">
                    <svg class="w-4 h-4 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>

                <!-- Carousel Items -->
                <div class="w-full mx-3 overflow-hidden">
                    <div id="carouselItems" class="flex space-x-4 transition-transform duration-700 ease-in-out">
                        <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                            <button type="button"
                                class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                                Data Science
                            </button>
                        </div>
                        <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                            <button type="button"
                                class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                                Machine Learning
                            </button>
                        </div>
                        <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                            <button type="button"
                                class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                                Web Development
                            </button>
                        </div>
                        <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                            <button type="button"
                                class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                                Artificial Intelligence
                            </button>
                        </div>
                        <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                            <button type="button"
                                class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                                Cloud Computing
                            </button>
                        </div>
                        <!-- Tambahkan item lain sesuai kebutuhan -->
                    </div>
                </div>

                <!-- Tombol Next -->
                <button type="button" id="nextBtn"
                    class="flex items-center justify-center p-3 transition-colors duration-300 bg-gray-100 rounded-full text-greenTaskUp-dark hover:text-greenTaskUp-light hover:bg-greenTaskUp">
                    <svg class="w-4 h-4 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="col-span-12 pt-4 xl:col-span-10">
                <div class="grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4 md:col-span-3">
                    <x-card-product image="{{ asset('assets/img/corosel.jpg') }}" discount="20%" name="Produk Dummy"
                        category="Kategori Dummy" type="Tipe Dummy" price="100000" />
                    <x-card-product image="{{ asset('assets/img/corosel.jpg') }}" discount="20%" name="Produk Dummy"
                        category="Kategori Dummy" type="Tipe Dummy" price="100000" />
                    <x-card-product image="{{ asset('assets/img/corosel.jpg') }}" discount="20%" name="Produk Dummy"
                        category="Kategori Dummy" type="Tipe Dummy" price="100000" />
                    <x-card-product image="{{ asset('assets/img/corosel.jpg') }}" discount="20%" name="Produk Dummy"
                        category="Kategori Dummy" type="Tipe Dummy" price="100000" />
                    <x-card-product image="{{ asset('assets/img/corosel.jpg') }}" discount="20%" name="Produk Dummy"
                        category="Kategori Dummy" type="Tipe Dummy" price="100000" />
                </div>
                <nav aria-label="Page navigation example" class="flex justify-center mt-4">
                    <ul class="flex items-center h-8 -space-x-px text-sm">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 ms-0 border-e-0 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 flex items-center justify-center h-8 px-3 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        const carouselItems = document.getElementById('carouselItems');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        let scrollPosition = 0;

        nextBtn.addEventListener('click', () => {
            const itemWidth = carouselItems.firstElementChild.clientWidth + 16; // Lebar item + margin
            const maxScroll = carouselItems.scrollWidth - carouselItems.clientWidth;
            scrollPosition = Math.min(scrollPosition + itemWidth, maxScroll);
            carouselItems.style.transform = `translateX(-${scrollPosition}px)`;
        });

        prevBtn.addEventListener('click', () => {
            const itemWidth = carouselItems.firstElementChild.clientWidth + 16; // Lebar item + margin
            scrollPosition = Math.max(scrollPosition - itemWidth, 0);
            carouselItems.style.transform = `translateX(-${scrollPosition}px)`;
        });
    </script>
@endsection
