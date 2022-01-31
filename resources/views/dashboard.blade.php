<x-app-layout>
    <div class="container px-6 mx-auto grid m-2">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        {{-- <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        6389
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Account balance
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        $ 46,760.89
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        New sales
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        376
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Pending contacts
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        35
                    </p>
                </div>
            </div>
        </div>

        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            10x Developer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Jolina Angelie</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Unemployed
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 369.95
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                    Pending
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Sarah Curry</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Designer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 86.00
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                    Denied
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Rulia Joberts</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Actress
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 1276.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Wenzel Dashington</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Actor
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                    Expired
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Dave Li</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Influencer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Maria Ramovic</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Runner
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hitney Wouston</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Singer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy">
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            10x Developer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                6/10/2020
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div> --}}
        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Orders</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            <form class="table-search-form row gx-1 align-items-center">
                                <div class="col-auto">
                                    <input type="text" id="search-orders" name="searchorders"
                                        class="form-control search-orders" placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn app-btn-secondary">Search</button>
                                </div>
                            </form>

                        </div>
                        <!--//col-->
                        <div class="col-auto">

                            <select class="form-select w-auto">
                                <option selected value="option-1">All</option>
                                <option value="option-2">This week</option>
                                <option value="option-3">This month</option>
                                <option value="option-4">Last 3 months</option>

                            </select>
                        </div>
                        <div class="col-auto">
                            <a class="btn app-btn-secondary" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                Download CSV
                            </a>
                        </div>
                    </div>
                    <!--//row-->
                </div>
                <!--//table-utilities-->
            </div>
            <!--//col-auto-->
        </div>
        <!--//row-->

        <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Rec. Duct</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
        </nav>

        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Order</th>
                                        <th class="cell">Product</th>
                                        <th class="cell">Customer</th>
                                        <th class="cell">Date</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Total</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15346</td>
                                        <td class="cell"><span class="truncate">Lorem ipsum dolor sit
                                                amet eget volutpat erat</span></td>
                                        <td class="cell">John Sanders</td>
                                        <td class="cell"><span>17 Oct</span><span class="note">2:16
                                                PM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$259.35</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cell">#15345</td>
                                        <td class="cell"><span class="truncate">Consectetur adipiscing
                                                elit</span></td>
                                        <td class="cell">Dylan Ambrose</td>
                                        <td class="cell"><span class="cell-data">16 Oct</span><span
                                                class="note">03:16 AM</span></td>
                                        <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                        <td class="cell">$96.20</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cell">#15344</td>
                                        <td class="cell"><span class="truncate">Pellentesque diam
                                                imperdiet</span></td>
                                        <td class="cell">Teresa Holland</td>
                                        <td class="cell"><span class="cell-data">16 Oct</span><span
                                                class="note">01:16 AM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$123.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="cell">#15343</td>
                                        <td class="cell"><span class="truncate">Vestibulum a accumsan
                                                lectus sed mollis ipsum</span></td>
                                        <td class="cell">Jayden Massey</td>
                                        <td class="cell"><span class="cell-data">15 Oct</span><span
                                                class="note">8:07 PM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$199.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="cell">#15342</td>
                                        <td class="cell"><span class="truncate">Justo feugiat
                                                neque</span></td>
                                        <td class="cell">Reina Brooks</td>
                                        <td class="cell"><span class="cell-data">12 Oct</span><span
                                                class="note">04:23 PM</span></td>
                                        <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                        <td class="cell">$59.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="cell">#15341</td>
                                        <td class="cell"><span class="truncate">Morbi vulputate lacinia
                                                neque et sollicitudin</span></td>
                                        <td class="cell">Raymond Atkins</td>
                                        <td class="cell"><span class="cell-data">11 Oct</span><span
                                                class="note">11:18 AM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$678.26</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--//table-responsive-->

                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!--//app-pagination-->

            </div>
            <!--//tab-pane-->

            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">

                            <table class="table mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Order</th>
                                        <th class="cell">Product</th>
                                        <th class="cell">Customer</th>
                                        <th class="cell">Date</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Total</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15346</td>
                                        <td class="cell"><span class="truncate">Lorem ipsum dolor sit
                                                amet eget volutpat erat</span></td>
                                        <td class="cell">John Sanders</td>
                                        <td class="cell"><span>17 Oct</span><span
                                                class="note">2:16 PM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$259.35</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>

                                    <tr>
                                        <td class="cell">#15344</td>
                                        <td class="cell"><span class="truncate">Pellentesque diam
                                                imperdiet</span></td>
                                        <td class="cell">Teresa Holland</td>
                                        <td class="cell"><span class="cell-data">16 Oct</span><span
                                                class="note">01:16 AM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$123.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>

                                    <tr>
                                        <td class="cell">#15343</td>
                                        <td class="cell"><span class="truncate">Vestibulum a accumsan
                                                lectus sed mollis ipsum</span></td>
                                        <td class="cell">Jayden Massey</td>
                                        <td class="cell"><span class="cell-data">15 Oct</span><span
                                                class="note">8:07 PM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$199.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>


                                    <tr>
                                        <td class="cell">#15341</td>
                                        <td class="cell"><span class="truncate">Morbi vulputate
                                                lacinia neque et sollicitudin</span></td>
                                        <td class="cell">Raymond Atkins</td>
                                        <td class="cell"><span class="cell-data">11 Oct</span><span
                                                class="note">11:18 AM</span></td>
                                        <td class="cell"><span class="badge bg-success">Paid</span></td>
                                        <td class="cell">$678.26</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
            <!--//tab-pane-->

            <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Order</th>
                                        <th class="cell">Product</th>
                                        <th class="cell">Customer</th>
                                        <th class="cell">Date</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Total</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cell">#15345</td>
                                        <td class="cell"><span class="truncate">Consectetur adipiscing
                                                elit</span></td>
                                        <td class="cell">Dylan Ambrose</td>
                                        <td class="cell"><span class="cell-data">16 Oct</span><span
                                                class="note">03:16 AM</span></td>
                                        <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                        <td class="cell">$96.20</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
            <!--//tab-pane-->
            <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Order</th>
                                        <th class="cell">Product</th>
                                        <th class="cell">Customer</th>
                                        <th class="cell">Date</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Total</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="cell">#15342</td>
                                        <td class="cell"><span class="truncate">Justo feugiat
                                                neque</span></td>
                                        <td class="cell">Reina Brooks</td>
                                        <td class="cell"><span class="cell-data">12 Oct</span><span
                                                class="note">04:23 PM</span></td>
                                        <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                        <td class="cell">$59.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary"
                                                href="#">View</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
            <!--//tab-pane-->
        </div>
        <!--//tab-content-->
    </div>
</x-app-layout>
