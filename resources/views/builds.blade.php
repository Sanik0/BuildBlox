@include('partials.header')

<body class="bg-[#ffffff] text-[#1b1b18]">
    <!-- HEADER -->
    @include('partials.navigation')
    <!-- JUMBOTRON -->
    <section class="w-full relative pt-20 lg:py-0">
        <div class="w-full h-full absolute top-0 left-0 flex opacity-[0.5] items-center justify-center">
            <img class="w-full object-cover object-center h-full" src="{{asset('images/4k Minecraft Nature.jpg')}}" alt="">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white"></div>
        <section class="w-full bg-neutral-primary">
            <div class="py-8 px-4 flex flex-col items-center justify-center mx-auto max-w-screen-xl text-center lg:py-30 z-10 relative">
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Search the build for your world</h1>
                <p class="mb-8 w-full text-base font-normal max-w-xl text-body md:text-xl">Here at flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                <form class="max-w-md w-full mx-auto" action="{{ route('builds.search') }}" method="GET">
                    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search" name="query" value="{{ request('query') }}" class="block w-full p-3 ps-9 bg-neutral-secondary-medium border border-black text-heading text-sm shadow-[0_3px_0_0_black] focus:ring-brand focus:border-brand placeholder:text-body" placeholder="Search" />
                        <button type="submit" class="button-mc absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Search</button>
                    </div>
                </form>
            </div>
            <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
        </section>
    </section>
    <!-- BUILDS -->
    <section class="w-full flex items-center justify-center px-4 flex-col py-10 ">
        <div class="w-full max-w-screen-xl">
            @if(request('query'))
            <p class="text-body text-sm mb-6">Showing results for <span class="font-bold text-heading">"{{ request('query') }}"</span> — {{ $builds->total() }} results</p>
            @endif
            @if(isset($category))
            <h4 class="text-3xl font-bold mb-3 tracking-tighter text-heading">{{ $category->title }} Builds</h4>
            @else
            <h4 class="text-3xl font-bold mb-3 tracking-tighter text-heading">All Builds</h4>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9">
                @forelse($builds as $build)
                <a href="{{ route('build.show', $build->build_id) }}" class="bg-neutral-primary-soft w-full border-2 border-black shadow-[0_3px_0_0_black] transition-all duration-200 hover:translate-y-[2px] hover:shadow-[0_1px_0_0_black] hover:border-blue-500 hover:shadow-[0_1px_0_0_rgb(59,130,246)] block group">
                    <div class="h-60 w-full overflow-hidden">
                        <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" src="{{ asset('storage/' . $build->cover_image) }}" alt="{{ $build->title }}" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= round($build->ratings_avg_rating ?? 0) ? 'text-fg-yellow' : 'text-gray-400' }}"
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
                        <h5 class="text-2xl font-bold tracking-tight text-heading line-clamp-2">{{ $build->title }}</h5>
                    </div>
                </a>
                @empty
                <p class="text-body col-span-4">No builds yet.</p>
                @endforelse
            </div>

            {{ $builds->links() }}
        </div>
    </section>
    <!-- FOOTER -->
    @include('partials.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>