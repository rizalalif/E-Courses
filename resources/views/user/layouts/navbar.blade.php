<header class="sticky top-0 z-50 ">
    <nav class="antialiased bg-white border border-gray-200 px-4 lg:px-6 py-2.5  dark:bg-gray-800 drop-shadow-md">
        <div class="max-w-screen-xl px-4 py-4 mx-auto 2xl:px-0">
            <div class="flex items-center justify-between">

                <div class="flex items-center space-x-8">
                    <div class="shrink-0">
                        <a href="#" title="" class="">
                            <img class="block w-auto h-8 dark:hidden" src="{{ asset('assets/img/logo.png') }}"
                                alt="">
                            {{-- <img class="hidden w-auto h-8 dark:block"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg" alt=""> --}}
                        </a>
                    </div>

                    <ul class="items-center justify-start hidden gap-6 py-3 lg:flex md:gap-8 sm:justify-center">
                        <li>
                            <a href="{{ route('user.home') }}"
                                class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-greenTaskUp hover:text-white lg:border-0 lg:hover:text-greenTaskUp lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 md:text-gray-400 bg-greenTaskUp lg:bg-transparent lg:hover:bg-transparent lg:text-greenTaskUp">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('user.paket') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-greenTaskUp hover:text-white lg:border-0 lg:hover:text-greenTaskUp lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 md:text-gray-400 lg:bg-transparent lg:hover:bg-transparent">Paket</a>
                        </li>
                        <li>
                            <a href="{{ route('user.learning') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-greenTaskUp hover:text-white lg:border-0 lg:hover:text-greenTaskUp lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 md:text-gray-400 lg:bg-transparent lg:hover:bg-transparent">Learning</a>
                        </li>
                        <li>
                            <a href="{{ route('user.order') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-greenTaskUp hover:text-white lg:border-0 lg:hover:text-greenTaskUp lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 md:text-gray-400 lg:bg-transparent lg:hover:bg-transparent">
                                Orders</a>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center lg:space-x-2">

                    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button"
                        class="inline-flex items-center justify-center p-2 text-sm font-medium leading-none text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">
                        <span class="sr-only">
                            Cart
                        </span>
                        <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                        <span class="hidden sm:flex">My Cart</span>
                        <svg class="hidden w-4 h-4 text-gray-900 sm:flex dark:text-white ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="myCartDropdown1"
                        class="z-10 hidden max-w-sm p-4 mx-auto space-y-4 overflow-hidden antialiased bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple
                                    iPhone 15</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$599
                                </p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                </p>

                                <button data-tooltip-target="tooltipRemoveItem1a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem1a" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple
                                    iPad Air</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$499
                                </p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                </p>

                                <button data-tooltip-target="tooltipRemoveItem2a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem2a" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple
                                    Watch SE</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$598
                                </p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 2
                                </p>

                                <button data-tooltip-target="tooltipRemoveItem3b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem3b" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Sony
                                    Playstation 5</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                    $799
                                </p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1
                                </p>

                                <button data-tooltip-target="tooltipRemoveItem4b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem4b" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple
                                    iMac 20"</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                    $8,997
                                </p>
                            </div>

                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 3
                                </p>

                                <button data-tooltip-target="tooltipRemoveItem5b" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem5b" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('user.keranjang') }}" title=""
                            class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-greenTaskUp px-5 py-2.5 text-sm font-medium text-white hover:bg-greenTaskUp-dark focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button"> Proceed to Checkout </a>
                    </div>

                    <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                        class="inline-flex items-center justify-center p-2 text-sm font-medium leading-none text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Account
                        <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="userDropdown1"
                        class="z-10 hidden w-56 overflow-hidden overflow-y-auto antialiased bg-white divide-y divide-gray-100 rounded-lg shadow dark:divide-gray-600 dark:bg-gray-700">
                        <ul class="p-2 text-sm font-medium text-gray-900 text-start dark:text-white">
                            <li><a href="{{ route('user.order') }}" title=""
                                    class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Orders </a></li>
                            <li><a href="{{ route('user.profile') }}" title=""
                                    class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Settings </a></li>
                        </ul>

                        <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                            <a href="#" title=""
                                class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600">
                                Sign Out </a>
                        </div>
                    </div>

                    <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                        aria-controls="ecommerce-navbar-menu-1" aria-expanded="false"
                        class="inline-flex items-center justify-center p-2 text-gray-900 rounded-md lg:hidden hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">
                        <span class="sr-only">
                            Open Menu
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="ecommerce-navbar-menu-1"
                class="hidden px-4 py-3 mt-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <ul class="space-y-3 text-sm font-medium text-gray-900 dark:text-white">
                    <li>
                        <a href="{{ route('user.home') }}"
                            class="hover:text-greenTaskUp dark:hover:text-greenTaskUp-dark">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('user.paket') }}"
                            class="hover:text-greenTaskUp dark:hover:text-greenTaskUp-dark">Paket</a>
                    </li>
                    <li>
                        <a href="{{ route('user.learning') }}"
                            class="hover:text-greenTaskUp dark:hover:text-greenTaskUp-dark">Learning</a>
                    </li>
                    <li>
                        <a href="{{ route('user.order') }}"
                            class="hover:text-greenTaskUp dark:hover:text-greenTaskUp-dark">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>