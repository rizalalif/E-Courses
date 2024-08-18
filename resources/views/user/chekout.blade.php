@extends('user.layouts.master')
@section('content')
    <section class="py-8 antialiased bg-white mb-[300px] dark:bg-gray-900 md:pt-8">
        <form action="{{ route('user.order') }}" class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <ol
                class="flex items-center w-full max-w-2xl text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                <li
                    class="after:border-1 flex items-center text-greenTaskUp after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:text-primary-500 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Cart
                    </span>
                </li>

                <li
                    class="after:border-1 flex items-center text-greenTaskUp after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:text-primary-500 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Checkout
                    </span>
                </li>

                <li class="flex items-center shrink-0">
                    <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Order summary
                </li>
            </ol>

            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                <div class="flex-1 min-w-0 space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Chekout Details</h2>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="your_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Your name </label>
                                <input type="text" id="your_name"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-green-500 dark:focus:ring-green-500"
                                    placeholder="Bonnie Green"  />
                            </div>
                            <div>
                                <label for="your_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Phone Number* </label>
                                <input type="text" id="phone-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-green-500 dark:focus:ring-green-500"
                                    placeholder="123-456-7890"  />
                            </div>
                        </div>
                    </div>





                    <div>
                        <label for="voucher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Enter
                            a gift card, voucher or promotional code </label>
                        <div class="flex items-center max-w-md gap-4">
                            <input type="text" id="voucher"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-greenTaskUp focus:ring-greenTaskUp dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder=""  />
                            <button type="button"
                                class="flex items-center justify-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Apply</button>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
                    <div class="flow-root">
                        <div class="-my-3 divide-y divide-gray-200 dark:divide-gray-800">
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">$8,094.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                <dd class="text-base font-medium text-green-500">0</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">$8,392.00</dd>
                            </dl>
                        </div>
                    </div>
                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed
                        to Payment</button>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script></script>
@endsection
