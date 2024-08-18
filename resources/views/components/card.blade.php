<div
    class="p-6 transition-colors duration-300 bg-white border rounded-lg shadow-sm hover:shadow-md border-l-greenTaskUp-light dark:border-gray-700 dark:bg-gray-800 hover:border-green-500 ">
    <div class="w-full h-56">
        <a href="{{ route('user.detailPaket') }}">
            <img class="object-cover w-full h-full mx-auto" src="{{ $image }}"" alt="" />
        </a>
    </div>

    <div class="pt-6">
        <div class="flex items-center justify-start gap-1 mb-4">
            <span
                class=" rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-400 dark:bg-primary-900 dark:text-primary-300">
                {{ $discount }} OFF</span>
        </div>

        <p class="text-lg font-semibold leading-tight text-gray-900 dark:text-white">
            {{ $name }}</p>
        <ul class="flex items-center gap-4 mt-2">
            <li class="flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v11z" />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $category }}</p>
            </li>

            <li class="flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $type }}</p>
            </li>
        </ul>

        <div class="flex items-center justify-between gap-4 mt-4">
            <p class="text-lg font-extrabold leading-tight text-gray-900 dark:text-white lg:text-sm">
                Rp. {{ number_format($price) }}
            </p>

            <form action="">
                @csrf
                <button type="submit"
                    class="inline-flex items-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm lg:text-xs font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 transition-colors duration-300">
                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                    </svg>
                    Add to cart
                </button>
            </form>
        </div>
    </div>
</div>
