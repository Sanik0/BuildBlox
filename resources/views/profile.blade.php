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
                        @if($user->image)
                        <img class="object-cover object-center w-full h-full" src="{{ asset('storage/' . $user->image)}}" alt="">
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
                        @if(Auth::check())
                        @if(Auth::user()->user_id === $user->user_id)
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white w-fit whitespace-nowrap button-mc bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none" type="button">
                            Edit Profile
                        </button>

                        <!-- Main Modal -->
                        @if($isOwnProfile)
                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
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
                                        <!-- Success/Error Messages -->
                                        @if(session('success'))
                                        <div class="bg-green-100 border-2 border-green-600 text-green-700 px-4 py-3">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        <div class="bg-red-100 border-2 border-red-600 text-red-700 px-4 py-3">
                                            <ul class="list-disc list-inside">
                                                @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <!-- Profile Image -->
                                            <div class="mb-6">
                                                <label class="block text-sm font-bold text-gray-900 mb-2 uppercase">Profile Image</label>
                                                <div class="flex items-center gap-4">
                                                    <div class="w-24 h-24 border-4 border-black overflow-hidden bg-gray-100">
                                                        @if($user->image)
                                                        <img id="imagePreview" class="object-cover w-full h-full" src="{{ asset('storage/' . $user->image) }}" alt="Profile">
                                                        @else
                                                        <img id="imagePreview" class="object-cover w-full h-full" src="{{ asset('default_profile.png') }}" alt="Default">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <input type="file" name="image" id="imageInput" accept="image/*" class="hidden" onchange="previewImage(event)">
                                                        <label for="imageInput" class="cursor-pointer bg-gray-900 hover:bg-gray-700 text-white border-2 border-black px-4 py-2 font-bold uppercase text-sm inline-block shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                                            Choose Image
                                                        </label>
                                                        <p class="text-xs text-gray-600 mt-2 font-medium">JPG, PNG, GIF (Max 2MB)</p>
                                                    </div>
                                                </div>
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
                                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white border-2 border-black px-6 py-3 font-bold uppercase shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                                                    Save Changes
                                                </button>
                                                <button
                                                    type="button"
                                                    data-modal-hide="default-modal"
                                                    class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-900 border-2 border-black px-6 py-3 font-bold uppercase shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
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