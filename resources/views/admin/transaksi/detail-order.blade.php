@extends('admin.layout.master')
@section('title', 'Paket')
@section('content')

<main class="pt-16 h-[100vh] md:ml-64">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-4xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="flex-col gap-8">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="large_size">Payment Proof</label>
                    <img id="preview" srcset="{{asset('assets/img/proof/'.$transaction->payment_proof)}}" class="w-full h-44 max-w-xl rounded-lg" alt="{{$transaction->payment_proof}}">
                </div>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$transaction->code}}" placeholder="Type product name" required="">
                    </div>

                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buyer</label>
                        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$transaction->buyer_name}}" placeholder="Product brand" required="">
                    </div>
                    <div class="w-full">
                        <label for="diskon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buyer phone</label>
                        <input type="number" name="discount" id="diskon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$transaction->buyer_phone_number}}" placeholder="$299" required="">
                    </div>
                    <div class="w-full">
                        <label for="active" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">{{$transaction->status}}</span>
                    </div>
                    <div class="w-full">
                        <label for="active" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="number" name="active" id="active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{$transaction->status}}" placeholder="Product brand" required="">
                    </div>

                </div>

            </div>

            <ul class="max-w-full divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($transaction->transaction_detail as $paket )

                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{$paket->paket->name}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp. {{$paket->paket->price}}

                        </div>
                    </div>
                </li>
                @endforeach
                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Total
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@flowbite.com
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp. {{$total}}

                        </div>
                    </div>
                </li>
            </ul>

            <div class="flex flex-row justify-end gap-4">
                <form action="{{route('transaction.update',$transaction->id)}}" method="post">
                    @csrf
                    @METHOD('PUT')

                    <button type="submit" name='submit' value='reject' class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                        Reject
                    </button>
                    <button type="submit" name='submit' value='approve' class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-800">
                        Approve
                    </button>
                </form>
            </div>

        </div>
    </section>
</main>

@endsection