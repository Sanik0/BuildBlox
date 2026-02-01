@include('partials.header')
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
                    <button type="button" class="text-white button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">Sign In</button>
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
    <!-- JUMBOTRON -->
    <section class="w-full relative pt-20 lg:py-0">
        <div class="w-full h-full absolute top-0 left-0 flex opacity-[0.5] items-center justify-center">
            <img class="w-full object-cover object-center h-full" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white"></div>
        <section class="w-full bg-neutral-primary">
            <div class="py-8 px-4 flex flex-col items-center justify-center mx-auto max-w-screen-xl text-center lg:py-30 z-10 relative">
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Search for the category of your build</h1>
                <p class="mb-8 w-full text-base font-normal max-w-xl text-body md:text-xl">Here at flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>
            <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
        </section>
    </section>
    <!-- MEDIEVAL BUILDS -->
    <section class="w-full flex items-center justify-center px-4 flex-col py-10 ">
        <div class="w-full max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9">

                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>

                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>

                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>

                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>

                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
                <div class="border-black flex items-end relative border-2 w-full h-40 lg:h-48">
                    <div class="w-full absolute inset-0 h-full">
                        <img class="w-full h-full object-center object-cover" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="Medieval">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
                    <div class="w-full relative flex flex-col p-3 md:p-5">
                        <p class="w-full text-base font-bold text-white md:text-xl lg:text-2xl">Medieval</p>
                        <small class="w-full text-xs font-bold text-gray-300 md:text-xs lg:text-base">230 Builds</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    @include('partials.footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>