@extends('user.layouts.master')
@section('content')
<section class="py-8 antialiased bg-gray-50 dark:bg-gray-900 md:py-12 ">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="mb-4">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Welcome back, {{$username}}</h1>
            <p class="mt-2 text-greenTaskUp dark:text-gray-300">Pilih paket sesuai kebutuhanmu</p>
        </div>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden lg:rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/corosel.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/corosel.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/corosel.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/corosel.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/corosel.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

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

                    @foreach ($categories as $category )

                    <div class="flex-none w-full sm:w-[calc(50%-16px)] md:w-[calc(33%-16px)] lg:w-[calc(20%-16px)]">
                        <button type="button"
                            class="w-full py-5 font-semibold bg-white border border-greenTaskUp rounded-xl text-greenTaskUp">
                            {{$category->name}}
                        </button>
                    </div>
                    @endforeach
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


        <div class="grid gap-4 mt-10 mb-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($pakets as $paket )

            <x-card-product id="{{$paket->id}}" image="{{ asset('assets/img/'.$paket->thumbnail) }}" discount="{{$paket->discount}}%" name="{{$paket->name}}"
                category="{{$paket->category->name}}" type="{{$paket->paket_type}}" price="{{$paket->price}}" />
            @endforeach
        </div>

        <div class="w-full text-center">
            <button type="button"
                class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show
                more</button>
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