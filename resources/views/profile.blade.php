@include('partials.header')

<body class="bg-[#ffffff] relative text-[#1b1b18]">
    <!-- HEADER -->
    @include('partials.navigation')
    <!-- ALERT -->
    @if(session('success'))
    <div id="alert-5" class="flex mt-10 bg-black fixed bottom-5 inset-x-5 md:inset-x-10 md:left-auto z-999 sm:items-center w-fit max-w-md p-4 text-sm border-2" role="alert">
        <svg class="w-4 h-4 fill-white shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-2 text-sm text-white overflow-hidden">
            {{ session('success')}}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-neutral-tertiary p-1.5 hover:bg-gray-800 inline-flex items-center justify-center h-8 w-8 shrink-0 shrink-0" data-dismiss-target="#alert-5" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
        </button>
    </div>
    @endif
    @if(session('error'))
    <div id="alert-5" class="flex mt-10 bg-black fixed bottom-5 inset-x-5 md:inset-x-10 md:left-auto z-999 sm:items-center w-fit max-w-md p-4 text-sm border-2" role="alert">
        <svg class="w-4 h-4 fill-white shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-2 text-sm text-white overflow-hidden">
            {{ session('error')}}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-neutral-tertiary p-1.5 hover:bg-gray-800 inline-flex items-center justify-center h-8 w-8 shrink-0 shrink-0" data-dismiss-target="#alert-5" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
        </button>
    </div>
    @endif
    <!-- PROFILE INFORMATION -->
    <section class="w-full mt-20 flex p-4 py-6 lg:py-8 items-center justify-center py-13">
        <div class="w-full max-w-screen-xl flex flex-col gap-13">
            <div class="w-full flex flex-col items-start lg:flex-row gap-8">
                <div class="w-full flex justify-space-between gap-8 md:flex-row flex-col">
                    <div class="w-full md:max-w-75 md:min-w-75 max-w-full h-75 border-2">
                        @if($user->image)
                        <img class="object-cover object-center w-full h-full" src="{{ asset('images/' . $user->image)}}" alt="">
                        @else
                        <img class="object-cover object-center w-full h-full" src="{{ asset('images/default_profile.png')}}" alt="">
                        @endif
                    </div>

                    <div class="w-full flex flex-col gap-3">
                        <h1 class="text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">{{ $user->username}}</h1>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">
                            @if($user->biography)
                            {{ $user->biography}}
                            @else
                            Too cool to write a bio. or too lazy. <br> Probably just lazy.
                            @endif
                        </p>
                        <div class="flex items-center space-x-3">
                            <span class="bg-black border-black text-white text-base font-medium px-2 py-1">340 Builds</span>
                            <span class="bg-black border border-black text-white text-base font-medium px-2 py-1">578 Rated Builds</span>
                        </div>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">Joined: {{ $user->created_at->format('F d, Y')}}</p>
                        <!-- Modal toggle -->
                        @if($isOwnProfile)
                        <div class="">
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white w-fit whitespace-nowrap button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" type="button">
                                Edit Profile
                            </button>
                            @if(Auth::check() && Auth::user()->role === 2)
                            <a href="{{ route('create.show')}}" class="text-white w-fit ml-4 whitespace-nowrap button-mc bg-red-600 hover:bg-red-700 box-border border border-transparent focus:ring-4 focus:ring-red-100 shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" type="button">
                                Create Build
                            </a>
                            @endif
                        </div>

                        <!-- Main Modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white border-4">
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
                                    <div class="p-4 md:p-6 space-y-4">
                                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="mb-4">
                                                <label for="first_name" class="block text-sm font-bold text-gray-900 mb-2 uppercase">Profile Avatar</label>
                                                <ul class="select-none md:w-fit md:gap-4 grid gap-2 grid-cols-4 sm:grid-cols-5">
                                                    <li>
                                                        <input type="radio" id="react-option" value="profile/profile_1.png" name="image" class="hidden peer" required="" {{ $user->image === 'profile/profile_1.png' ? 'checked' : '' }}>
                                                        <label for="react-option" class="inline-flex h-15 w-15 border-2 border-black items-center justify-between text-body bg-neutral-primary-soft cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand">
                                                            <img src="{{ asset('/images/profile/profile_1.png')}}" class="h-full w-full" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="vue-option" value="profile/profile_2.png" name="image" class="hidden peer" required="" {{ $user->image === 'profile/profile_2.png' ? 'checked' : '' }}>
                                                        <label for="vue-option" class="inline-flex h-15 w-15 border-2 border-black items-center justify-between text-body bg-neutral-primary-soft cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand">
                                                            <img src="{{ asset('/images/profile/profile_2.png')}}" class="h-full w-full" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="bruh-option" value="profile/profile_3.png" name="image" class="hidden peer" required="" {{ $user->image === 'profile/profile_3.png' ? 'checked' : '' }}>
                                                        <label for="bruh-option" class="inline-flex h-15 w-15 border-2 border-black items-center justify-between text-body bg-neutral-primary-soft cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand">
                                                            <img src="{{ asset('/images/profile/profile_3.png')}}" class="h-full w-full" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="p4-option" value="profile/profile_4.png" name="image" class="hidden peer" required="" {{ $user->image === 'profile/profile_4.png' ? 'checked' : ''}}>
                                                        <label for="p4-option" class="inline-flex h-15 w-15 border-2 border-black items-center justify-between text-body bg-neutral-primary-soft cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand">
                                                            <img src="{{ asset('/images/profile/profile_4.png')}}" class="h-full w-full" alt="">
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="p5-option" value="profile/profile_5.png" name="image" class="hidden peer" required="" {{ $user->image === 'profile/profile_5.png' ? 'checked' : '' }}>
                                                        <label for="p5-option" class="inline-flex h-15 w-15 border-2 border-black items-center justify-between text-body bg-neutral-primary-soft cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand">
                                                            <img src="{{ asset('/images/profile/profile_5.png')}}" class="h-full w-full" alt="">
                                                        </label>
                                                    </li>
                                                </ul>

                                            </div>

                                            <!-- First Name -->
                                            <div class="mb-4">
                                                <label for="first_name" class="block text-sm font-bold text-gray-900 mb-2 uppercase">First Name</label>
                                                <input
                                                    type="text"
                                                    name="first_name"
                                                    id="first_name"
                                                    value="{{ old('first_name', $user->first_name) }}"
                                                    class="w-full px-4 py-3 border-2 border-black focus:ring-2 focus:ring-blue-600 focus:border-blue-600 font-medium"
                                                    required>
                                            </div>

                                            <!-- Last Name -->
                                            <div class="mb-4">
                                                <label for="last_name" class="block text-sm font-bold text-gray-900 mb-2 uppercase">Last Name</label>
                                                <input
                                                    type="text"
                                                    name="last_name"
                                                    id="last_name"
                                                    value="{{ old('last_name', $user->last_name) }}"
                                                    class="w-full px-4 py-3 border-2 border-black focus:ring-2 focus:ring-blue-600 focus:border-blue-600 font-medium"
                                                    required>
                                            </div>

                                            <!-- Username -->
                                            <div class="mb-4">
                                                <label for="username" class="block text-sm font-bold text-gray-900 mb-2 uppercase">Username</label>
                                                <input
                                                    type="text"
                                                    name="username"
                                                    id="username"
                                                    value="{{ old('username', $user->username) }}"
                                                    class="w-full px-4 py-3 border-2 border-black focus:ring-2 focus:ring-blue-600 focus:border-blue-600 font-medium"
                                                    required>
                                                <p class="text-xs text-gray-600 mt-2 font-medium">Your profile URL: /profile/<span id="usernamePreview" class="font-bold">{{ $user->username }}</span></p>
                                            </div>

                                            <!-- Biography -->
                                            <div class="mb-6">
                                                <label for="biography" class="block text-sm font-bold text-gray-900 mb-2 uppercase">Biography</label>
                                                <textarea
                                                    name="biography"
                                                    id="biography"
                                                    rows="4"
                                                    maxlength="500"
                                                    class="w-full px-4 py-3 border-2 border-black focus:ring-2 focus:ring-blue-600 focus:border-blue-600 font-medium resize-none"
                                                    placeholder="Tell us about yourself...">{{ old('biography', $user->biography) }}</textarea>
                                                <p class="text-xs text-gray-600 mt-2 font-medium"><span id="bioCount">{{ strlen($user->biography ?? '') }}</span>/500 characters</p>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="flex flex-col sm:flex-row gap-3">
                                                <button
                                                    type="submit"
                                                    class="text-white flex-1 button-mc bg-green-600 hover:bg-green-900 box-border  px-6 py-3 border border-transparent uppercase focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm focus:outline-none">
                                                    Save Changes
                                                </button>
                                                <button
                                                    type="button"
                                                    data-modal-hide="default-modal"
                                                    class="text-gray-600 flex-1 button-mc bg-gray-100 hover:bg-gray-300 box-border  px-6 py-3 border border-transparent uppercase focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm focus:outline-none">
                                                    cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

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
                <div class="hidden" id="styled-steps" role="tabpanel" aria-labelledby="steps-tab">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-9">
                        @foreach($builds as $build)
                        <a href="{{ route('build.show', $build->build_id) }}" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                            <div class="h-60 w-full overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/'. $build->cover_image )}}" alt="Victorian House" />
                            </div>

                            <div class="p-6">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-7 h-7 {{ $i <= round($build->ratings_avg_rating ?? 0) ? 'text-fg-yellow' : 'text-gray-400' }}"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                            </svg>
                                            @endfor
                                    </div>

                                    <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-xs font-semibold px-1.5 py-1">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span>170</span>
                                    </div>
                                </div>

                                <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">{{ $build->title}}</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    @if($builds->isEmpty())
                    <section class="bg-white">
                        <div class="py-8 px-4 w-full flex items-center justify-center gap-7 flex-col mx-auto max-w-screen-md text-center lg:py-16 lg:px-12">
                            <svg class="w-40 h-40 text-gray-800 dark:text-white" aria-hidden="true" width="433" height="559" viewBox="0 0 433 559" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M278 411H376.905H394C394 399.367 373.853 396.918 365.305 392.633C356.758 388.347 351.874 381 340.884 381C329.895 381 317.074 395.694 302.421 396.918C290.699 397.898 281.256 406.714 278 411Z" fill="#374151" fill-opacity="0.6" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M168.026 452.826L184.979 389.558L186.91 390.076L169.958 453.344L168.026 452.826Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M168.026 452.826L184.979 389.558L186.91 390.076L169.958 453.344L168.026 452.826Z" fill="url(#paint0_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M214.386 396.738L215.461 398.425L178.779 421.802L198.858 460.388L197.084 461.311L176.159 421.1L214.386 396.738Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M214.386 396.738L215.461 398.425L178.779 421.802L198.858 460.388L197.084 461.311L176.159 421.1L214.386 396.738Z" fill="url(#paint1_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M157.854 381.591L156.08 382.514L176.159 421.1L139.477 444.477L140.552 446.164L178.779 421.802L157.854 381.591Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M157.854 381.591L156.08 382.514L176.159 421.1L139.477 444.477L140.552 446.164L178.779 421.802L157.854 381.591Z" fill="url(#paint2_linear_275_1403)" />
                                <rect x="175.033" y="411.222" width="10" height="19" rx="2" transform="rotate(15 175.033 411.222)" fill="#2563eb" />
                                <rect x="175.033" y="411.222" width="10" height="19" rx="2" transform="rotate(15 175.033 411.222)" fill="url(#paint3_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M185.135 362.165L149.568 352.635L149.381 352.585L149.277 352.422C137.811 334.549 121.305 303.062 108.321 266.461C95.3383 229.866 86.0941 188.176 89.6654 150.043C94.1353 102.315 121.144 69.4602 157.326 51.3142C193.491 33.1765 238.817 29.7315 279.991 40.764C321.165 51.7965 358.695 77.4428 380.946 111.233C403.208 145.039 410.171 186.996 390.178 230.565C374.204 265.375 345.354 296.857 315.813 322.058C286.268 347.263 256.354 366.313 237.489 376.058L237.317 376.147L237.13 376.097L195.765 365.013L185.135 362.165Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M221.781 34.7273C198.647 51.2191 176.941 80.4991 170.262 129.77C158.362 217.555 174.998 318.453 185.658 361.788L191.023 363.225C194.116 329.503 199.299 278.136 205.173 229.587C211.231 179.508 218.035 132.331 224.05 110.658C234.827 71.8267 247.187 49.0496 258.421 36.3452C246.256 34.5991 233.936 34.058 221.781 34.7273ZM218.075 34.9692C195.499 52.0571 174.798 81.4221 168.28 129.502C156.431 216.912 172.753 317.152 183.455 361.197L175.132 358.967C161.057 317.988 134.229 225.304 133.545 164.301C132.781 96.1295 164.506 55.5421 185.949 40.419C196.34 37.6117 207.127 35.7964 218.075 34.9692ZM180.607 41.9606C158.92 59.5359 130.822 99.831 131.545 164.323C132.226 225.043 158.61 316.716 172.805 358.344L162.56 355.598C153.368 338.076 140.639 305.164 129.849 269.65C118.723 233.031 109.701 193.782 108.722 165.908C107.174 121.867 116.648 89.043 137.907 63.0852C143.993 58.6151 150.496 54.6701 157.326 51.2493C164.739 47.5364 172.538 44.4408 180.607 41.9606ZM131.559 68.0687C108.815 87.1461 93.0377 114.373 89.7244 149.819C86.1651 187.898 95.4162 229.53 108.402 266.077C121.39 302.629 138.131 334.14 149.595 351.99L149.7 352.153L149.887 352.203L159.946 354.898C150.745 336.855 138.414 304.721 127.935 270.232C116.798 233.575 107.712 194.122 106.723 165.978C105.282 124.965 113.333 93.4253 131.559 68.0687ZM260.792 36.7011C249.656 48.834 237.021 71.3989 225.977 111.193C220.01 132.691 213.222 179.705 207.158 229.827C201.268 278.518 196.071 330.049 192.983 363.75L193.419 363.867C207.595 333.137 228.86 285.911 248.104 240.799C267.914 194.359 285.542 150.25 291.124 128.649C301.465 88.6318 301.798 62.7635 298.21 46.6907C292.225 44.3942 286.118 42.4057 279.928 40.7473C273.631 39.0598 267.236 37.7109 260.792 36.7011ZM300.442 47.5635C303.828 64.1807 303.151 90.0976 293.06 129.149C287.433 150.926 269.736 195.185 249.944 241.584C230.756 286.565 209.561 333.642 195.379 364.392L195.831 364.513L200.743 365.83C231.643 333.631 296.499 254.568 330.086 172.595C348.978 126.487 344.762 90.2199 332.915 64.3596C322.738 57.7482 311.821 52.0983 300.442 47.5635ZM336.004 66.4116C347.071 92.513 350.373 128.355 331.936 173.353C298.493 254.977 234.237 333.626 202.947 366.42L211.269 368.65C243.948 340.199 313.524 273.346 344.618 220.858C379.57 161.856 372.098 110.588 360.981 86.9526C353.409 79.4152 345.017 72.531 336.004 66.4116ZM364.87 90.959C374.979 116.915 379.387 166.088 346.339 221.877C315.389 274.122 246.704 340.321 213.596 369.274L222.394 371.631C239.115 361.052 266.595 338.913 293.696 313.553C321.641 287.403 349.078 257.923 363.864 234.273C388.499 194.869 396.282 160.139 388.99 125.217C386.574 120.389 383.853 115.692 380.854 111.144C376.167 104.035 370.803 97.2863 364.87 90.959ZM392.291 132.347C397.152 165.323 388.663 198.378 365.56 235.333C350.631 259.212 323.036 288.836 295.063 315.013C268.743 339.643 241.997 361.305 225.007 372.331L236.82 375.496L237.007 375.546L237.178 375.458C256.032 365.731 286.285 346.813 315.809 321.652C345.329 296.494 374.157 265.065 390.113 230.308C406.087 195.516 404.825 161.747 392.291 132.347Z" fill="url(#paint4_linear_275_1403)" />
                                <path d="M149.338 352.573C179.997 353.968 209.988 362.004 237.237 376.125L234.866 378.144C227.675 384.265 222.516 392.428 220.072 401.549L151.491 383.173C153.935 374.052 153.548 364.403 150.382 355.506L149.338 352.573Z" fill="#c8d8fa" />
                                <path d="M149.338 352.573C179.997 353.968 209.988 362.004 237.237 376.125L234.866 378.144C227.675 384.265 222.516 392.428 220.072 401.549L151.491 383.173C153.935 374.052 153.548 364.403 150.382 355.506L149.338 352.573Z" fill="url(#paint5_linear_275_1403)" />
                                <rect width="44" height="69" transform="matrix(-0.965926 -0.258819 -0.258819 0.965926 232.295 467.976)" fill="#2563eb" />
                                <rect width="44" height="69" transform="matrix(-0.965926 -0.258819 -0.258819 0.965926 232.295 467.976)" fill="url(#paint6_linear_275_1403)" />
                                <rect x="112.52" y="435.883" width="80" height="69" transform="rotate(15 112.52 435.883)" fill="#2563eb" />
                                <rect x="111.826" y="477.108" width="29" height="19" rx="2" transform="rotate(15 111.826 477.108)" fill="#d6e2fb" />
                                <rect x="112.395" y="486.578" width="16" height="2" rx="1" transform="rotate(15 112.395 486.578)" fill="#2563eb" />
                                <path d="M204.283 460.471L216.84 463.835L213.734 475.426C213.449 476.493 212.352 477.127 211.285 476.841L202.592 474.511C201.525 474.225 200.891 473.129 201.177 472.062L204.283 460.471Z" fill="#c8d8fa" fill-opacity="0.2" />
                                <rect x="111.359" y="490.441" width="12" height="2" rx="1" transform="rotate(15 111.359 490.441)" fill="#2563eb" />
                                <path d="M116.5 39.5H35.5H21.5C21.5 30 38 28 45 24.5C52 21 56 15 65 15C74 15 84.5 27 96.5 28C106.1 28.8 113.833 36 116.5 39.5Z" fill="#374151" />
                                <defs>
                                    <linearGradient id="paint0_linear_275_1403" x1="185.944" y1="389.817" x2="168.992" y2="453.085" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_275_1403" x1="200.311" y1="392.967" x2="183.008" y2="457.54" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_275_1403" x1="171.93" y1="385.362" x2="154.627" y2="449.935" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_275_1403" x1="180.033" y1="403.222" x2="180.033" y2="430.222" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#111928" />
                                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_275_1403" x1="258.705" y1="119.953" x2="193.353" y2="363.849" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#d6e2fb" />
                                        <stop offset="1" stop-color="#d6e2fb" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_275_1403" x1="211.663" y1="295.768" x2="185.781" y2="392.361" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2563eb" />
                                        <stop offset="1" stop-color="#2563eb" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_275_1403" x1="22" y1="-28.5" x2="22" y2="69" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#111928" />
                                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="flex flex-col gap-2">
                                <h1 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-600 lg:mb-6 md:text-4xl xl:text-5xl">Nothing here...yet</h1>
                                <p class="font-light text-gray-500 md:text-lg xl:text-xl dark:text-gray-400">Looks like you haven’t built anything yet.</p>
                            </div>
                        </div>
                    </section>
                    @endif
                </div>

                <div class="grid hidden grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <section class="bg-white">
                        <div class="py-8 px-4 w-full flex items-center justify-center gap-7 flex-col mx-auto max-w-screen-md text-center lg:py-16 lg:px-12">
                            <svg class="w-40 h-40 text-gray-800 dark:text-white" aria-hidden="true" width="433" height="559" viewBox="0 0 433 559" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M278 411H376.905H394C394 399.367 373.853 396.918 365.305 392.633C356.758 388.347 351.874 381 340.884 381C329.895 381 317.074 395.694 302.421 396.918C290.699 397.898 281.256 406.714 278 411Z" fill="#374151" fill-opacity="0.6" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M168.026 452.826L184.979 389.558L186.91 390.076L169.958 453.344L168.026 452.826Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M168.026 452.826L184.979 389.558L186.91 390.076L169.958 453.344L168.026 452.826Z" fill="url(#paint0_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M214.386 396.738L215.461 398.425L178.779 421.802L198.858 460.388L197.084 461.311L176.159 421.1L214.386 396.738Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M214.386 396.738L215.461 398.425L178.779 421.802L198.858 460.388L197.084 461.311L176.159 421.1L214.386 396.738Z" fill="url(#paint1_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M157.854 381.591L156.08 382.514L176.159 421.1L139.477 444.477L140.552 446.164L178.779 421.802L157.854 381.591Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M157.854 381.591L156.08 382.514L176.159 421.1L139.477 444.477L140.552 446.164L178.779 421.802L157.854 381.591Z" fill="url(#paint2_linear_275_1403)" />
                                <rect x="175.033" y="411.222" width="10" height="19" rx="2" transform="rotate(15 175.033 411.222)" fill="#2563eb" />
                                <rect x="175.033" y="411.222" width="10" height="19" rx="2" transform="rotate(15 175.033 411.222)" fill="url(#paint3_linear_275_1403)" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M185.135 362.165L149.568 352.635L149.381 352.585L149.277 352.422C137.811 334.549 121.305 303.062 108.321 266.461C95.3383 229.866 86.0941 188.176 89.6654 150.043C94.1353 102.315 121.144 69.4602 157.326 51.3142C193.491 33.1765 238.817 29.7315 279.991 40.764C321.165 51.7965 358.695 77.4428 380.946 111.233C403.208 145.039 410.171 186.996 390.178 230.565C374.204 265.375 345.354 296.857 315.813 322.058C286.268 347.263 256.354 366.313 237.489 376.058L237.317 376.147L237.13 376.097L195.765 365.013L185.135 362.165Z" fill="#c8d8fa" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M221.781 34.7273C198.647 51.2191 176.941 80.4991 170.262 129.77C158.362 217.555 174.998 318.453 185.658 361.788L191.023 363.225C194.116 329.503 199.299 278.136 205.173 229.587C211.231 179.508 218.035 132.331 224.05 110.658C234.827 71.8267 247.187 49.0496 258.421 36.3452C246.256 34.5991 233.936 34.058 221.781 34.7273ZM218.075 34.9692C195.499 52.0571 174.798 81.4221 168.28 129.502C156.431 216.912 172.753 317.152 183.455 361.197L175.132 358.967C161.057 317.988 134.229 225.304 133.545 164.301C132.781 96.1295 164.506 55.5421 185.949 40.419C196.34 37.6117 207.127 35.7964 218.075 34.9692ZM180.607 41.9606C158.92 59.5359 130.822 99.831 131.545 164.323C132.226 225.043 158.61 316.716 172.805 358.344L162.56 355.598C153.368 338.076 140.639 305.164 129.849 269.65C118.723 233.031 109.701 193.782 108.722 165.908C107.174 121.867 116.648 89.043 137.907 63.0852C143.993 58.6151 150.496 54.6701 157.326 51.2493C164.739 47.5364 172.538 44.4408 180.607 41.9606ZM131.559 68.0687C108.815 87.1461 93.0377 114.373 89.7244 149.819C86.1651 187.898 95.4162 229.53 108.402 266.077C121.39 302.629 138.131 334.14 149.595 351.99L149.7 352.153L149.887 352.203L159.946 354.898C150.745 336.855 138.414 304.721 127.935 270.232C116.798 233.575 107.712 194.122 106.723 165.978C105.282 124.965 113.333 93.4253 131.559 68.0687ZM260.792 36.7011C249.656 48.834 237.021 71.3989 225.977 111.193C220.01 132.691 213.222 179.705 207.158 229.827C201.268 278.518 196.071 330.049 192.983 363.75L193.419 363.867C207.595 333.137 228.86 285.911 248.104 240.799C267.914 194.359 285.542 150.25 291.124 128.649C301.465 88.6318 301.798 62.7635 298.21 46.6907C292.225 44.3942 286.118 42.4057 279.928 40.7473C273.631 39.0598 267.236 37.7109 260.792 36.7011ZM300.442 47.5635C303.828 64.1807 303.151 90.0976 293.06 129.149C287.433 150.926 269.736 195.185 249.944 241.584C230.756 286.565 209.561 333.642 195.379 364.392L195.831 364.513L200.743 365.83C231.643 333.631 296.499 254.568 330.086 172.595C348.978 126.487 344.762 90.2199 332.915 64.3596C322.738 57.7482 311.821 52.0983 300.442 47.5635ZM336.004 66.4116C347.071 92.513 350.373 128.355 331.936 173.353C298.493 254.977 234.237 333.626 202.947 366.42L211.269 368.65C243.948 340.199 313.524 273.346 344.618 220.858C379.57 161.856 372.098 110.588 360.981 86.9526C353.409 79.4152 345.017 72.531 336.004 66.4116ZM364.87 90.959C374.979 116.915 379.387 166.088 346.339 221.877C315.389 274.122 246.704 340.321 213.596 369.274L222.394 371.631C239.115 361.052 266.595 338.913 293.696 313.553C321.641 287.403 349.078 257.923 363.864 234.273C388.499 194.869 396.282 160.139 388.99 125.217C386.574 120.389 383.853 115.692 380.854 111.144C376.167 104.035 370.803 97.2863 364.87 90.959ZM392.291 132.347C397.152 165.323 388.663 198.378 365.56 235.333C350.631 259.212 323.036 288.836 295.063 315.013C268.743 339.643 241.997 361.305 225.007 372.331L236.82 375.496L237.007 375.546L237.178 375.458C256.032 365.731 286.285 346.813 315.809 321.652C345.329 296.494 374.157 265.065 390.113 230.308C406.087 195.516 404.825 161.747 392.291 132.347Z" fill="url(#paint4_linear_275_1403)" />
                                <path d="M149.338 352.573C179.997 353.968 209.988 362.004 237.237 376.125L234.866 378.144C227.675 384.265 222.516 392.428 220.072 401.549L151.491 383.173C153.935 374.052 153.548 364.403 150.382 355.506L149.338 352.573Z" fill="#c8d8fa" />
                                <path d="M149.338 352.573C179.997 353.968 209.988 362.004 237.237 376.125L234.866 378.144C227.675 384.265 222.516 392.428 220.072 401.549L151.491 383.173C153.935 374.052 153.548 364.403 150.382 355.506L149.338 352.573Z" fill="url(#paint5_linear_275_1403)" />
                                <rect width="44" height="69" transform="matrix(-0.965926 -0.258819 -0.258819 0.965926 232.295 467.976)" fill="#2563eb" />
                                <rect width="44" height="69" transform="matrix(-0.965926 -0.258819 -0.258819 0.965926 232.295 467.976)" fill="url(#paint6_linear_275_1403)" />
                                <rect x="112.52" y="435.883" width="80" height="69" transform="rotate(15 112.52 435.883)" fill="#2563eb" />
                                <rect x="111.826" y="477.108" width="29" height="19" rx="2" transform="rotate(15 111.826 477.108)" fill="#d6e2fb" />
                                <rect x="112.395" y="486.578" width="16" height="2" rx="1" transform="rotate(15 112.395 486.578)" fill="#2563eb" />
                                <path d="M204.283 460.471L216.84 463.835L213.734 475.426C213.449 476.493 212.352 477.127 211.285 476.841L202.592 474.511C201.525 474.225 200.891 473.129 201.177 472.062L204.283 460.471Z" fill="#c8d8fa" fill-opacity="0.2" />
                                <rect x="111.359" y="490.441" width="12" height="2" rx="1" transform="rotate(15 111.359 490.441)" fill="#2563eb" />
                                <path d="M116.5 39.5H35.5H21.5C21.5 30 38 28 45 24.5C52 21 56 15 65 15C74 15 84.5 27 96.5 28C106.1 28.8 113.833 36 116.5 39.5Z" fill="#374151" />
                                <defs>
                                    <linearGradient id="paint0_linear_275_1403" x1="185.944" y1="389.817" x2="168.992" y2="453.085" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_275_1403" x1="200.311" y1="392.967" x2="183.008" y2="457.54" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_275_1403" x1="171.93" y1="385.362" x2="154.627" y2="449.935" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9ab7f6" />
                                        <stop offset="1" stop-color="#9ab7f6" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_275_1403" x1="180.033" y1="403.222" x2="180.033" y2="430.222" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#111928" />
                                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_275_1403" x1="258.705" y1="119.953" x2="193.353" y2="363.849" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#d6e2fb" />
                                        <stop offset="1" stop-color="#d6e2fb" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_275_1403" x1="211.663" y1="295.768" x2="185.781" y2="392.361" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2563eb" />
                                        <stop offset="1" stop-color="#2563eb" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_275_1403" x1="22" y1="-28.5" x2="22" y2="69" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#111928" />
                                        <stop offset="1" stop-color="#111928" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="flex flex-col gap-2">
                                <h1 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-600 lg:mb-6 md:text-4xl xl:text-5xl">Nothing here...yet</h1>
                                <p class="font-light text-gray-500 md:text-lg xl:text-xl dark:text-gray-400">Looks like you haven’t built anything yet.</p>
                            </div>
                        </div>
                    </section>
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