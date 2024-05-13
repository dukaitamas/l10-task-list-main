<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 10 Task List App </title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- cdn: content delivery network , distributed network of servers -reduces latency --}}
    {{-- blade formatter-disable --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- Alpine.js link to make the X close button to wrok --}}

    <style type="text/tailwindcss">
        body {
            background-color: #e0e7ff;
        }

        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-600 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }

        .link {
            @apply font-medium text-gray-700 underline decoration-pink-500
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }

        input,
        textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none bg-cyan-50
            /* small shadow, appearance-none removes all the default appearance from the element,
            w-full elemenet take the whole available width, leading tight : sets the line height a little tighter,
            focus:outline-none :sudo class removes the outline of theelement when it is focused. */
        }

        .error {
            @apply text-red-500 text-sm mt-1
        }
    </style>
    {{-- blade formatter extension disabled only for this style file --}}
    {{-- blade formatter-enable --}}

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    {{-- mx-auto is a horizontally centered element --}}
    {{-- mt-10 margin-top 10px, max-w-lg max width 32 rem or 512px --}}
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    {{-- ↓↓↓↓↓↓↓  alpine.js x-data and it works in this box only ↓↓↓↓↓↓ --}}
    <div x-data="{ flash: true }">
        @if (session()->has('success'))
        <div x-show="flash"
        {{-- ↑↑↑↑↑ alpine.js↑↑↑↑ --}}
        class=" relative mb-9 rounded border border-green-200
            bg-green-100 px-4 py-3 text-lg text-green-700"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <div>{{ session('success') }}</div>

            {{-- ↑↑↑ relative and absolute positioning to get that X close button inside the green box↓↓↓↓↓ --}}

            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    @click="flash = false" stroke="currentColor" class="h-6 w-6 cursor-pointer">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                {{-- the svg code for the X symbol to close the flash message notification --}}
            </span>
        </div>

        @endif
        @yield('content')



        {{-- one time created flash message in web.php 'Task created succesfully' --}}
    </div>

</body>


</html>
