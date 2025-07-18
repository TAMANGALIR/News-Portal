<header class="sticky top-0 z-10 bg-white">
    <div class="container py-2 flex justify-between items-center">
        <div>
            <img class="h-[50px] md:h-[100px]" src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
        </div>
        <div>
            <p class="text-sm md:text-lg">
                {{ $date }}

                {{-- {{  toFormattedNepaliBSDate(\Carbon\Carbon::now()) }} --}}
            </p>
            <img class="h-[10px] md:h-[20px]" src="https://jawaaf.com/frontend/images/redline.png" alt="">
        </div>
    </div>

    <nav class="bg-[var(--primary)] text-white py-2">
        <div class="container hidden lg:flex justify-between items-center">
            <div class="flex gap-8">
                <a href="{{ route('home') }}">गृहपृष्ठ</a>
                @foreach ($categories as $category)
                    <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
                @endforeach
            </div>
            <div class="text-[var(--text-color)]">
                <form action="{{ route('search') }}" method="get">
                    <input type="text" name="q" id="q" placeholder="Search">
                    <button type="submit">search</button>
                </form>
            </div>
        </div>



        <!-- drawer init and toggle -->
        <div class="container text-right lg:hidden">
            <button type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                aria-controls="drawer-example">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>



    </nav>


</header>

<!-- drawer component -->
<div id="drawer-example"
    class="fixed top-0 left-0 z-40 text-white h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-[var(--primary)] w-80"
    tabindex="-1" aria-labelledby="drawer-label">
    <h5 class="text-lg">
        Menu
    </h5>
    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="mt-8">
        <div>
            <input type="text" name="q" id="q" placeholder="Search">
        </div>
        <div class="flex flex-col gap-8 mt-5">
            <a href="{{ route('home') }}">गृहपृष्ठ</a>
            @foreach ($categories as $category)
                <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
            @endforeach
        </div>
    </div>
</div>
