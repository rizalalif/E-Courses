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


                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        @foreach ($bahan as $item )
                        <h2 id="accordion-arrow-icon-heading-{{$item->id}}">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-arrow-icon-body-{{$item->id}}" aria-expanded="false" aria-controls="accordion-arrow-icon-body-{{$item->id}}">
                                <span>{{$item->paketable->getTable() == 'materis' ? "Materi" : "Soal"}}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-arrow-icon-body-{{$item->id}}" class="hidden" aria-labelledby="accordion-arrow-icon-heading-{{$item->id}}">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">{{$item->paketable->description}}-{{$item->paketable_id}}</p>
                                <!-- <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p> -->
                                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                    <a href="{{$item->paketable->getTable() == 'soals' ? route('soal.detail.show',$item->paketable_id) : route('materi.detail.show',$item->paketable_id)}}" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">{{$item->paketable->getTable() == 'soals' ? "List Soal" : "List Materi"}}</a>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </section>
</main>
@endsection