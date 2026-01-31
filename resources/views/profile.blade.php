<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#ffffff] text-[#1b1b18]">
    <!-- HEADER -->
    <header class="w-full">
        <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-black border-solid">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo">
                    <span class="self-center text-xl text-heading font-pixelify font-semibold whitespace-nowrap">BuildBlox</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="#" class="text-white button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">Sign In</a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="button-mc inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">
                        <li>
                            <a href="#" class="block py-2 px-3 text-white bg-brand rounded-sm md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-heading border-b border-light md:w-auto hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">
                                Categories
                                <svg class="w-4 h-4 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">All Builds</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="mega-menu-full-dropdown" class="mt-1 hidden bg-neutral-primary-soft border-default shadow-xs border-y">
                <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-heading sm:grid-cols-2 md:grid-cols-3 md:px-6">
                    <ul aria-labelledby="mega-menu-full-dropdown-button">
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Online Stores</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Segmentation</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Marketing CRM</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Online Stores</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Segmentation</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Marketing CRM</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="hidden md:block">
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Audience Management</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Creative Tools</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-neutral-secondary-medium">
                                <div class="font-semibold">Marketing Automation</div>
                                <span class="text-sm text-body">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- BUILD INFORMATION -->
    <section class="w-full mt-20 flex p-4 py-6 lg:py-8 items-center justify-center py-13">
        <div class="w-full max-w-screen-xl flex flex-col gap-13">
            <div class="w-full flex flex-col items-start lg:flex-row gap-8">
                <div class="w-full flex justify-space-between gap-8 md:flex-row flex-col">
                    <div class="w-full md:max-w-75 md:min-w-75 max-w-full h-75 border-2">
                        <img class="object-cover object-center w-full h-full" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="">
                    </div>

                    <div class="w-full flex flex-col gap-3">
                        <h1 class="text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Alex_12</h1>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">Here at flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                        <div class="flex items-center space-x-3">
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-base font-medium px-2 py-1">340 Builds</span>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-base font-medium px-2 py-1">578 Rated Builds</span>
                        </div>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">Joined: January 15, 2026</p>
                        <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white w-fit whitespace-nowrap button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" type="button">
                            Edit Profile
                        </button>

                        <!-- Main Modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white border-2 border-black shadow-[4px_4px_0_0_rgba(0,0,0,0.3)]">

                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between bg-blue-600 border-b-2 border-black p-4 md:p-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-blue-700 border-2 border-black flex items-center justify-center">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <h3 class="text-sm sm:text-base font-bold text-white leading-tight uppercase">
                                                EDIT USER<br />PROFILE
                                            </h3>
                                        </div>
                                        <button type="button" data-modal-hide="default-modal" class="text-white button-mc bg-red-600 hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-3 focus:outline-none">
                                            <span class="text-xl leading-none">×</span>
                                        </button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="p-4 md:p-6 space-y-4 max-h-[60vh] overflow-y-auto">

                                        <!-- Username Field -->
                                        <div>
                                            <label class="block text-gray-800 text-xs font-bold mb-2 uppercase">
                                                USERNAME
                                            </label>
                                            <input
                                                type="text"
                                                value="Steve_Miner"
                                                class="w-full px-3 py-2.5 bg-gray-100 text-gray-900 border-2 border-gray-400 text-sm focus:outline-none focus:border-blue-600 transition-colors placeholder-gray-500"
                                                placeholder="Enter username" />
                                        </div>

                                        <!-- Email Field -->
                                        <div>
                                            <label class="block text-gray-800 text-xs font-bold mb-2 uppercase">
                                                EMAIL
                                            </label>
                                            <input
                                                type="email"
                                                value="steve@minecraft.net"
                                                class="w-full px-3 py-2.5 bg-gray-100 text-gray-900 border-2 border-gray-400 text-sm focus:outline-none focus:border-blue-600 transition-colors placeholder-gray-500"
                                                placeholder="your@email.com" />
                                        </div>

                                        <!-- Display Name Field -->
                                        <div>
                                            <label class="block text-gray-800 text-xs font-bold mb-2 uppercase">
                                                DISPLAY NAME
                                            </label>
                                            <input
                                                type="text"
                                                value="Steve the Builder"
                                                class="w-full px-3 py-2.5 bg-gray-100 text-gray-900 border-2 border-gray-400 text-sm focus:outline-none focus:border-blue-600 transition-colors placeholder-gray-500"
                                                placeholder="Display name" />
                                        </div>

                                        <!-- Role Selector -->
                                        <div>
                                            <label class="block text-gray-800 text-xs font-bold mb-2 uppercase">
                                                ROLE
                                            </label>
                                            <select class="w-full px-3 py-2.5 bg-gray-100 text-gray-900 border-2 border-gray-400 text-sm focus:outline-none focus:border-blue-600 transition-colors cursor-pointer uppercase">
                                                <option>PLAYER</option>
                                                <option>MODERATOR</option>
                                                <option selected>BUILDER</option>
                                                <option>ADMIN</option>
                                            </select>
                                        </div>

                                        <!-- Bio Field -->
                                        <div>
                                            <label class="block text-gray-800 text-xs font-bold mb-2 uppercase">
                                                BIO
                                            </label>
                                            <textarea
                                                rows="4"
                                                class="w-full px-3 py-2.5 bg-gray-100 text-gray-900 border-2 border-gray-400 text-sm focus:outline-none focus:border-blue-600 transition-colors resize-none placeholder-gray-500"
                                                placeholder="Tell us about yourself...">Love building medieval castles and redstone contraptions!</textarea>
                                        </div>

                                        <!-- Checkboxes -->
                                        <div class="space-y-3">
                                            <label class="flex items-start gap-3 cursor-pointer group">
                                                <div class="relative mt-0.5">
                                                    <input type="checkbox" checked class="peer appearance-none w-5 h-5 border-2 border-black bg-white checked:bg-blue-600 cursor-pointer transition-colors" />
                                                    <svg class="absolute top-0 left-0 w-5 h-5 text-white pointer-events-none hidden peer-checked:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <span class="text-gray-800 text-sm leading-relaxed group-hover:text-gray-600 uppercase font-semibold">
                                                    SEND EMAIL NOTIFICATIONS
                                                </span>
                                            </label>

                                            <label class="flex items-start gap-3 cursor-pointer group">
                                                <div class="relative mt-0.5">
                                                    <input type="checkbox" class="peer appearance-none w-5 h-5 border-2 border-black bg-white checked:bg-blue-600 cursor-pointer transition-colors" />
                                                    <svg class="absolute top-0 left-0 w-5 h-5 text-white pointer-events-none hidden peer-checked:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <span class="text-gray-800 text-sm leading-relaxed group-hover:text-gray-600 uppercase font-semibold">
                                                    SHOW PROFILE PUBLICLY
                                                </span>
                                            </label>

                                            <label class="flex items-start gap-3 cursor-pointer group">
                                                <div class="relative mt-0.5">
                                                    <input type="checkbox" checked class="peer appearance-none w-5 h-5 border-2 border-black bg-white checked:bg-blue-600 cursor-pointer transition-colors" />
                                                    <svg class="absolute top-0 left-0 w-5 h-5 text-white pointer-events-none hidden peer-checked:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <span class="text-gray-800 text-sm leading-relaxed group-hover:text-gray-600 uppercase font-semibold">
                                                    ALLOW FRIEND REQUESTS
                                                </span>
                                            </label>
                                        </div>

                                    </div>

                                    <!-- Modal footer -->
                                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 bg-gray-100 border-t-2 border-black p-4 md:p-6">
                                        <button type="button" class="text-white button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-3 focus:outline-none">
                                            SAVE CHANGES
                                        </button>
                                        <button data-modal-hide="default-modal" type="button" class="text-grey-800 button-mc bg-white hover:bg-gray-200 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-3 focus:outline-none">
                                            CANCEL
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mb-4 border-b border-default">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple hover:text-purple border-purple" data-tabs-inactive-classes="dark:border-transparent text-body hover:text-fg-brand border-default hover:border-brand" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base" id="steps-styled-tab" data-tabs-target="#styled-steps" type="button" role="tab" aria-controls="steps" aria-selected="false">My Builds</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Rated Builds</button>
                    </li>
                    <li class="me-2" role="presentation">
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <!-- Steps content -->
                <div class="grid hidden grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9" id="styled-steps" role="tabpanel" aria-labelledby="steps-tab">
                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>
                </div>

                <div class="grid hidden grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border border-black border-2 shadow-[0_3px_0_0_black]">
                        <div class="h-60 w-full">
                            <img class="w-full h-full object-cover" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>
                        <div class="flex p-6 pb-0 mb-3 items-center space-x-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-5 h-5 text-fg-yellow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                            </div>
                            <span class="bg-brand-softer border border-black text-fg-brand-strong text-xs font-medium px-1.5 py-0.5">170 Views</span>
                        </div>
                        <div>
                            <h5 class="p-6 pt-0 text-2xl font-semibold tracking-tight text-heading">Victorian House</h5>
                        </div>
                    </a>
                </div>

                <script>
                    // Show comment actions when input is focused
                    document.getElementById('comment-input').addEventListener('focus', function() {
                        document.getElementById('comment-actions').classList.remove('hidden');
                    });

                    // Hide comment actions on cancel
                    document.querySelector('#comment-actions button:first-child').addEventListener('click', function() {
                        document.getElementById('comment-input').value = '';
                        document.getElementById('comment-input').blur();
                        document.getElementById('comment-actions').classList.add('hidden');
                    });

                    // Handle reply button clicks - YouTube style
                    document.querySelectorAll('.reply-btn').forEach(button => {
                        button.addEventListener('click', function(e) {
                            // Remove any existing reply forms first
                            document.querySelectorAll('.reply-form').forEach(form => form.remove());

                            // Find the comment wrapper (closest parent with comment-wrapper class)
                            const commentWrapper = this.closest('.comment-wrapper');

                            // Check if reply form already exists for this comment
                            const existingReplyForm = commentWrapper.querySelector('.reply-form');
                            if (existingReplyForm) {
                                existingReplyForm.remove();
                                return;
                            }

                            // Create reply input form
                            const replyForm = document.createElement('div');
                            replyForm.className = 'reply-form mt-4 flex gap-2 sm:gap-3 items-start';
                            replyForm.innerHTML = `
                                <div class="w-6 h-6 sm:w-8 sm:h-8 bg-black border-2 border-black flex-shrink-0 flex items-center justify-center">
                                    <span class="text-white font-bold text-xs">U</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <input type="text" placeholder="Write a reply..." class="w-full px-0 pb-2 bg-transparent border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 text-xs sm:text-sm placeholder-gray-500 transition-colors">
                                    <div class="mt-3 flex gap-2 justify-end">
                                        <button type="button" class="cancel-reply px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-bold bg-white border-2 border-black hover:bg-gray-100 transition-colors">
                                            Cancel
                                        </button>
                                        <button type="button" class="submit-reply px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-bold bg-black text-white border-2 border-black shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[1px_1px_0_0_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                                            Reply
                                        </button>
                                    </div>
                                </div>
                            `;

                            // Insert the reply form at the end of the comment wrapper (YouTube style)
                            commentWrapper.appendChild(replyForm);

                            // Focus the input
                            replyForm.querySelector('input').focus();

                            // Handle cancel button
                            replyForm.querySelector('.cancel-reply').addEventListener('click', function() {
                                replyForm.remove();
                            });

                            // Handle submit button
                            replyForm.querySelector('.submit-reply').addEventListener('click', function() {
                                const input = replyForm.querySelector('input');
                                if (input.value.trim()) {
                                    console.log('Reply submitted:', input.value);
                                    replyForm.remove();
                                }
                            });
                        });
                    });
                </script>
            </div>

        </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="bg-brand">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 flex flex-col gap-5 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-7 me-3" alt="FlowBite Logo" />
                        <span class="text-white self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
                    </a>
                    <a href="/create-account" class="text-gray-600 w-fit button-mc shadow-[-4px_-4px_0_0_black] bg-gray-100 hover:bg-gray-200 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">Create Account</a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Resources</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Follow us</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                        <ul class="text-gray-300 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-default sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-white hover:text-heading">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-white hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-white hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-white hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-white hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>