@include('partials.header')

<body class="bg-[#ffffff] text-[#1b1b18]">
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
    <!-- BUILD INFORMATION -->
    <section class="w-full mt-20 flex p-4 py-6 lg:py-8 items-center justify-center py-13">
        <div class="w-full max-w-screen-xl flex flex-col gap-13">
            <div class="w-full flex flex-col items-start lg:flex-row gap-8">
                <div class="w-full flex justify-space-between gap-8 md:flex-row flex-col">
                    <div class="w-full md:max-w-75 md:min-w-75 max-w-full h-75 border-2">
                        <img class="object-cover object-center w-full h-full" src="{{asset('storage/' . $build->cover_image)}}" alt="">
                    </div>

                    <div class="w-full flex flex-col gap-3">
                        <h1 class="text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">{{ $build->title}}</h1>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">{{ $build->description}}</p>
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center gap-1.5 bg-black text-white border-1 border-black text-fg-brand-strong text-md font-semibold px-1.5 py-.5">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="white" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="white" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span>{{ $viewCount }}</span>
                            </div>
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-7 h-7 {{ $i <= round($averageRating ?? 0) ? 'text-fg-yellow' : 'text-gray-400' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                    </svg>
                                    @endfor
                                    <span class="text-body text-sm">({{ round($averageRating ?? 0, 1) }})</span>
                            </div>
                        </div>
                        <p class="w-full text-base font-normal max-w-xl text-body md:text-xl">Category: Medieval</p>
                        <a href="{{ route('profile.show',  $author->username)}}" class="flex w-fit gap-3">
                            <div class="h-8 w-8 min-w-8 border-2">
                                <img class="object-cover object-center w-full h-full" src="{{asset('images/' . $author->image)}}" alt="">
                            </div>
                            <p class="w-full text-xl font-normal max-w-xl text-body md:text-2xl">{{ $author->username}}</p>
                        </a>
                    </div>
                </div>

                <div class="flex h-full align-self-start flex-col gap-2">
                    <h1 class="text-xl font-bold tracking-tighter text-heading md:text-2xl lg:text-xl">Rate This Build</h1>
                    <form action="{{ route('creation.rate', $build->build_id) }}" method="POST">
                        @csrf
                        <div class="flex items-center gap-1" id="star-container">
                            @for ($i = 1; $i <= 5; $i++)
                                <button type="submit" name="rating" value="{{ $i }}"
                                class="star focus:outline-none {{ $i <= ($userRating ?? 0) ? 'text-yellow-400' : 'text-gray-400' }}"
                                onmouseover="highlightStars({{ $i }})"
                                onmouseout="resetStars()">
                                <svg class="lg:w-7 lg:h-7 h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                </button>
                                @endfor
                        </div>
                    </form>
                </div>

                <script>
                    const stars = document.querySelectorAll('.star');
                    const userRating = {
                        {
                            $userRating ?? 0
                        }
                    };

                    function highlightStars(n) {
                        stars.forEach((s, i) => {
                            s.classList.toggle('text-yellow-400', i < n);
                            s.classList.toggle('text-gray-400', i >= n);
                        });
                    }

                    function resetStars() {
                        stars.forEach((s, i) => {
                            s.classList.toggle('text-yellow-400', i < userRating);
                            s.classList.toggle('text-gray-400', i >= userRating);
                        });
                    }
                </script>
            </div>



            <div class="mb-4 border-b border-default">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple hover:text-purple border-purple" data-tabs-inactive-classes="dark:border-transparent text-body hover:text-fg-brand border-default hover:border-brand" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base" id="steps-styled-tab" data-tabs-target="#styled-steps" type="button" role="tab" aria-controls="steps" aria-selected="false">Steps</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Materials</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Comments</button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <!-- Steps content -->
                <div class=" hidden w-full flex flex-col gap-12" id="styled-steps" role="tabpanel" aria-labelledby="steps-tab">
                    <!-- STEPS -->
                    <div class="rounded-base grid grid-cols-1 md:grid-cols-2 gap-5">
                        @foreach($steps as $step)
                        <div class="w-full relative aspect-square max-w-160 border-2 border-black">
                            <div class="w-full h-full inline-block text-end text-4xl md:text-5xl lg:text=7xl p-5 text-white absolute top-0 right-0 font-bold  [text-shadow:1px_1px_0_#000,-1px_1px_0_#000,1px_-1px_0_#000,-1px_-1px_0_#000]">{{ $step->step_number}}</div>
                            <img class="object-center object-cover h-full w-full" src="{{asset('storage/' . $step->step_image)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <!-- PAGINATION -->
                    {{ $steps->links() }}
                </div>

                <!-- MATERIALS -->
                <div class="hidden p-4 border-2 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                    <div class="p-3">
                        <p class="font-semibold">Wood (Main Details)</p>
                        <p>{!! $build->materials !!}</p>
                    </div>

                </div>

                <!-- COMMENTS -->
                <div class="hidden p-4 md:p-6 rounded-base bg-neutral-secondary-soft" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">

                    <!-- Comment Input -->
                    <div class="mb-8">
                        @auth
                        <form action="{{ route('comment.store', $build->build_id) }}" method="POST">
                            @csrf
                            <div class="flex gap-2 sm:gap-3 items-start">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 bg-black border-2 border-black flex-shrink-0 flex items-center justify-center">
                                    <span class="text-white font-bold text-xs sm:text-sm">{{ strtoupper(substr(Auth::user()->username, 0, 2)) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <input type="text" name="content" placeholder="Add a comment..." class="w-full px-0 pb-2 bg-transparent border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 text-xs sm:text-sm placeholder-gray-500 transition-colors">
                                    <div class="mt-3 flex gap-2 justify-end">
                                        <button type="submit" class="px-3 sm:px-4 py-1.5 sm:py-2 text-xs sm:text-sm font-bold bg-black text-white border-2 border-black shadow-[3px_3px_0_0_rgba(0,0,0,1)] hover:shadow-[1px_1px_0_0_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                                            Comment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <p class="text-sm text-body">Please <a href="{{ route('login') }}" class="text-fg-brand underline">log in</a> to comment.</p>
                        @endauth
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-6">
                        @forelse($comments as $comment)
                        <div class="comment-wrapper">
                            <div class="flex gap-2 sm:gap-3 items-start">
                                <div class="w-8 h-8 sm:w-10 sm:h-10 border-2 border-black flex-shrink-0 flex items-center justify-center">
                                    <img class="h-full w-full object-cover object-center" src="{{ asset('images/' . $comment->user->image)}}" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-2 mb-1 flex-wrap">
                                        <span class="font-bold text-xs sm:text-sm">{{ '@' . $comment->user->username }}</span>
                                        <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-body mb-2 break-words">{{ $comment->content }}</p>
                                    <div class="flex items-center gap-3 sm:gap-4 mb-4">
                                        {{-- Reply button --}}
                                        @auth
                                        <button onclick="document.getElementById('reply-form-{{ $comment->comment_id }}').classList.toggle('hidden')"
                                            class="reply-btn text-xs sm:text-sm font-bold hover:bg-black hover:text-white px-2 sm:px-3 py-1 border-2 border-transparent hover:border-black transition-all">
                                            Reply
                                        </button>
                                        @endauth

                                        {{-- Delete button --}}
                                        @if(Auth::check() && Auth::id() == $comment->user_id)
                                        <form action="{{ route('comment.destroy', $comment->comment_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-xs sm:text-sm font-bold text-red-500 hover:underline">Delete</button>
                                        </form>
                                        @endif
                                    </div>

                                    {{-- Reply form --}}
                                    @auth
                                    <div id="reply-form-{{ $comment->comment_id }}" class="hidden mb-4">
                                        <form action="{{ route('comment.store', $build->build_id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="parent_id" value="{{ $comment->comment_id }}">
                                            <input type="text" name="content" placeholder="Write a reply..." class="w-full px-0 pb-2 bg-transparent border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 text-xs sm:text-sm placeholder-gray-500 transition-colors">
                                            <div class="mt-2 flex gap-2 justify-end">
                                                <button type="submit" class="px-3 py-1.5 text-xs font-bold bg-black text-white border-2 border-black transition-all">
                                                    Reply
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    @endauth

                                    {{-- Replies --}}
                                    @foreach($comment->replies as $reply)
                                    <div class="ml-6 sm:ml-8 pl-3 sm:pl-4 border-l-2 border-black mb-4">
                                        <div class="flex gap-2 sm:gap-3 items-start">
                                            <div class="w-8 h-8 sm:w-10 sm:h-10 border-2 border-black flex-shrink-0 flex items-center justify-center">
                                                <img class="h-full w-full object-cover object-center" src="{{ asset('images/' . $reply->user->image)}}" alt="">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1 flex-wrap">
                                                    <span class="font-bold text-xs sm:text-sm">{{ '@' . $reply->user->username }}</span>
                                                    <span class="text-xs text-gray-500">{{ $reply->created_at->diffForHumans() }}</span>
                                                </div>
                                                <p class="text-xs sm:text-sm text-body mb-2 break-words">{{ $reply->content }}</p>
                                                <div class="flex items-center gap-3 sm:gap-4 mt-2">
                                                    @auth
                                                    <button onclick="document.getElementById('reply-form-{{ $reply->comment_id }}').classList.toggle('hidden')"
                                                        class="reply-btn text-xs sm:text-sm font-bold hover:bg-black hover:text-white px-2 sm:px-3 py-1 border-2 border-transparent hover:border-black transition-all">
                                                        Reply
                                                    </button>
                                                    @endauth

                                                    @if(Auth::check() && Auth::id() == $reply->user_id)
                                                    <form action="{{ route('comment.destroy', $reply->comment_id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-xs font-bold text-red-500 hover:underline">Delete</button>
                                                    </form>
                                                    @endif
                                                </div>

                                                {{-- Reply form --}}
                                                @auth
                                                <div id="reply-form-{{ $reply->comment_id }}" class="hidden mt-2">
                                                    <form action="{{ route('comment.store', $build->build_id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="parent_id" value="{{ $comment->comment_id }}">
                                                        <input type="text" name="content" placeholder="Write a reply..." class="w-full px-0 pb-2 bg-transparent border-0 border-b-2 border-gray-300 focus:border-black focus:ring-0 text-xs sm:text-sm placeholder-gray-500 transition-colors">
                                                        <div class="mt-2 flex gap-2 justify-end">
                                                            <button type="submit" class="px-3 py-1.5 text-xs font-bold bg-black text-white border-2 border-black transition-all">
                                                                Reply
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-sm text-body">No comments yet. Be the first to comment!</p>
                        @endforelse
                    </div>
                </div>

                <!-- SIMILAR BUILDS -->
                <section class="w-full flex items-center justify-center flex-col py-10">
                    <div class="w-full max-w-screen-xl py-5 flex gap-4">
                        <h4 class=" text-3xl font-bold tracking-tighter text-heading md:text-3xl lg:text-4xl">More Like This</h4>
                    </div>
                    <div class="w-full max-w-screen-xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-9">
                            @foreach($categoryBuilds as $build)
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
                                            <span>{{ $build->views_count }}</span>
                                        </div>
                                    </div>

                                    <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">{{ $build->title}}</h5>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </section>

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