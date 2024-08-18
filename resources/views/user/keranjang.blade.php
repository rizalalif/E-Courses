@extends('user.layouts.master')
@section('content')
    <section class="py-8 mb-20 antialiased bg-white dark:bg-gray-900 md:pt-8">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">KeranjangMu</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="flex-none w-full mx-auto lg:max-w-2xl xl:max-w-4xl">
                    <div class="space-y-6">
                        <div
                            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                            <div class="flex items-center justify-between gap-6 space-y-4 md:space-y-0">
                                <a href="#" class="shrink-0 md:order-1">
                                    <img class="w-40 h-25 dark:hidden" src="{{ asset('assets/img/corosel.jpg') }}"
                                        alt="imac image" />
                                </a>
                                <div class="text-end md:order-2 md:w-32">
                                    <p class="text-base font-bold text-red-500 line-through dark:text-white">$1,499</p>
                                    <p class="text-base font-bold text-gray-900 dark:text-white">$1,499</p>
                                </div>
                            </div>

                            <div class="justify-between w-full min-w-0 mt-3 md:flex justify-items-start">
                                <div class="">
                                    PC
                                    system All in One APPLE iMac (2023) mqrq3ro/a, Apple M3, 24" Retina 4.5K, 8GB, SSD
                                    256GB, 10-core GPU, Keyboard layout INT
                                </div>

                                <div class="flex items-center gap-4">
                                    <button type="button"
                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                        <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex-1 max-w-4xl mx-auto mt-6 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="p-4 space-y-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$7,592.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 pt-2 border-t border-gray-200 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$8,191.00</dd>
                            </dl>
                        </div>

                        <a href="{{ route('user.checkout') }}"
                            class="flex w-full items-center justify-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed
                            to Checkout</a>

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                            <a href="{{ route('user.home') }}" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium underline text-greenTaskUp hover:no-underline dark:text-primary-500">
                                Continue Shopping
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
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
