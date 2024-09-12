@extends('user.layouts.master')
@section('content')
<section class="py-5 pb-[300px] antialiased bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="mt-2 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="flex-none w-full mx-auto lg:max-w-2xl xl:max-w-3xl">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Order Detail</h2>
                <div class="mt-2 sm:mt-4">
                    <div class="relative overflow-x-auto border-b border-gray-200 dark:border-gray-800">
                        <table class="w-full font-medium text-left text-gray-900 dark:text-white md:table-fixed">
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                @foreach ($transaction->transaction_detail as $detail )

                                <tr>
                                    <td class="whitespace-nowrap py-4 md:w-[384px]">
                                        <div class="flex items-center gap-4">
                                            <!-- <a href="#"
                                            class="flex items-center w-10 h-10 aspect-square shrink-0">
                                            <img class="w-full h-auto max-h-full dark:hidden"
                                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                            alt="imac image" />
                                        </a> -->
                                            {{$detail->paket_name}}
                                        </div>
                                    </td>

                                    <td class="p-4 text-base font-normal text-gray-900 dark:text-white">x1</td>

                                    <td class="p-4 text-base font-bold text-right text-gray-900 dark:text-white">Rp. {{$detail->price}}

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 space-y-6">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-gray-500 dark:text-gray-400">Original price</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">Rp. {{$transaction->total_price}}</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-500">-$299.00</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 pt-2 border-t border-gray-200 dark:border-gray-700">
                                <dt class="text-lg font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-lg font-bold text-gray-900 dark:text-white">Rp. {{$transaction->total_price}}</dd>
                            </dl>
                            <dl
                                class="flex items-center justify-between gap-4 pt-2 border-t border-gray-200 dark:border-gray-700">
                                <dt class="text-lg font-bold text-blue-500 dark:text-white">Payment (BRI)</dt>
                                <dd class="text-lg font-bold text-blue-500 dark:text-white">1222555536666 (VA)</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 max-w-4xl mx-auto mt-6 space-y-6 lg:mt-0 lg:w-full">
                <div
                    class="p-4 space-y-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">Payment Proof</p>

                    <div class="space-y-4">
                        <div class="space-y-2">
                            <p
                                class="p-4 text-base font-medium text-red-600 bg-red-100 border-l-4 border-red-500 rounded-md dark:bg-red-200 dark:text-red-800">
                                Proof of payment not available yet <br> Please Upload your payment proof!
                            </p>
                        </div>
                    </div>

                    <button <button id="defaultModalButton" data-modal-target="defaultModal"
                        data-modal-toggle="defaultModal"
                        class="flex w-full items-center justify-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                        proof of payment</button>
                </div>
            </div>
        </div>


    </div>
    <div>

    </div>
</section>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-[500px] h-full max-w-2xl p-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative p-6 bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Input Bukti Pembayaran
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('user.order.payment')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="transaction_id" value="{{$transaction->id}}">
                <div class="mb-4">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" name="proof" type="file">
                </div>
                <button type="submit"
                    class="w-full text-white inline-flex items-center justify-center bg-greenTaskUp hover:bg-greenTaskUp-dark focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Upload
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script></script>
@endsection