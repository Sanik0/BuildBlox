@include('partials.header')

<body class="bg-[#ffffff] text-[#1b1b18]">
    <!-- HEADER -->
    @include('partials.navigation')
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
                            <span class="bg-black border-black text-white text-base font-medium px-2 py-1">340 Builds</span>
                            <span class="bg-black border border-black text-white text-base font-medium px-2 py-1">578 Rated Builds</span>
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
                                        <button type="button" data-modal-hide="default-modal" class="text-white button-mc bg-red-600 hover:bg-red-800 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-3 focus:outline-none">
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
                                        <button data-modal-hide="default-modal" type="button" class="text-grey-800 button-mc bg-grey-100 hover:bg-gray-200 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-3 focus:outline-none">
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
                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>
                </div>

                <div class="grid hidden grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
                        </div>
                    </a>

                    <a href="#" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                        <div class="h-60 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{asset('images/4K Minecraft Nature.jpg')}}" alt="Victorian House" />
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
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

                                <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span>170</span>
                                </div>
                            </div>

                            <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">Victorian House</h5>
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
    @include('partials.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>