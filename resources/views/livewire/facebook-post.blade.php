<div class="max-w-screen-sm w-full">
    <div class="bg-white rounded-lg w-full shadow-sm border">
        {{-- START: PROFILE --}}
        <div class="flex justify-between p-4 pb-3">
            <div class="flex">
                <div class="size-10">
                    <img src="{{ asset('images/pfp.png') }}" class="w-full h-full rounded-full" />
                </div>
                <div class="flex flex-col ml-3">
                    <a href="javascript:void(0)" class="text-sm font-medium hover:underline">
                        Hatsu Shiroyuki
                    </a>
                    <div class="flex items-center text-slate-500 text-xs font-medium">
                        <a href="javascript:void(0)" class="hover:underline">
                            @if (now()->diff(\Carbon\Carbon::parse($datePosted))->days < 1)
                                {{ \Carbon\Carbon::parse($datePosted)->diffForHumans() }}
                            @else
                                {{ \Carbon\Carbon::parse($datePosted)->isoFormat('LL') }}
                            @endif
                        </a>
                        <span class="mx-1">
                            •
                        </span>
                        <span class="size-4">
                            {!! $postVisibility->icon() !!}
                        </span>
                    </div>
                </div>
            </div>

            <div class="flex">
                <button class="transition duration-300 ease-in-out size-8 hover:bg-gray-100 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="16"/><circle cx="60" cy="128" r="16"/><circle cx="196" cy="128" r="16"/></svg>
                </button>
                <button class="transition duration-300 ease-in-out size-8 hover:bg-gray-100 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="200" y1="56" x2="56" y2="200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="200" y1="200" x2="56" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                </button>
            </div>
        </div>
        {{-- END: PROFILE --}}

        {{-- START: POST --}}
        <div class="text-sm leading-snug">
            @if (count($media) > 0)
                {{-- START: POST WITH MEDIA --}}
                @if (strlen($caption) > 200)
                    <div class="p-4 pt-0 flex flex-col" x-data="{ show: false }">
                        <div x-bind:class="show ? '' : 'line-clamp-3'">
                            {!! nl2br($caption) !!}
                        </div>
                        <a
                            x-on:click="show = ! show"
                            href="javascript:void(0)"
                            class="font-bold mt-0.5 hover:underline"
                            x-html="show ? 'Show less' : 'See more'"
                        ></a>
                    </div>
                @else
                    <div class="p-4 pt-0">
                        {!! nl2br($caption) !!}
                    </div>
                @endif

                @switch(count($media))
                    @case(2)
                        <div class="grid grid-cols-12 grid-flow-row gap-0.5">
                            @foreach ($htmlMedias as $htmlMedia)
                                <div class="col-span-6">
                                    {!! $htmlMedia !!}
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(3)
                        <div class="grid grid-cols-12 grid-flow-row gap-0.5">
                            <div class="col-span-6">
                                {!! $htmlMedias[0] !!}
                            </div>
                            <div class="col-span-6">
                                {!! $htmlMedias[1] !!}
                            </div>
                            <div class="col-span-12">
                                <div class="aspect-w-3 aspect-h-1">
                                    {!! $htmlMedias[2] !!}
                                </div>
                            </div>
                        </div>
                        @break

                    @case(4)
                        <div class="grid grid-cols-12 grid-flow-row gap-0.5">
                            @foreach ($htmlMedias as $htmlMedia)
                                <div class="col-span-6">
                                    <div class="aspect-1">
                                        {!! $htmlMedia !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @break

                    @case(5)
                        <div class="aspect-w-4 aspect-h-3">
                            <div class="w-full h-full">
                                <div class="grid grid-cols-12 grid-rows-12 grid-flow-row gap-0.5 h-full">
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[0] !!}
                                    </div>
                                    <div class="col-span-6 row-span-6">
                                        {!! $htmlMedias[1] !!}
                                    </div>
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[2] !!}
                                    </div>
                                    <div class="col-span-6 row-span-6">
                                        {!! $htmlMedias[3] !!}
                                    </div>
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[4] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @break

                    @case(count($media) >= 5)
                        <div class="aspect-w-4 aspect-h-3">
                            <div class="w-full h-full">
                                <div class="grid grid-cols-12 grid-rows-12 grid-flow-row gap-0.5 h-full">
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[0] !!}
                                    </div>
                                    <div class="col-span-6 row-span-6">
                                        {!! $htmlMedias[1] !!}
                                    </div>
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[2] !!}
                                    </div>
                                    <div class="col-span-6 row-span-6">
                                        <div class="relative w-full h-full">
                                            {!! $htmlMedias[3] !!}

                                            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-gray-700/50">
                                                <h2 class="text-4xl font-semibold text-white">
                                                    {{ count($media) - 5 }}+
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-6 row-span-4">
                                        {!! $htmlMedias[4] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @break

                    @case(1)
                    @default
                        <div class="aspect-1">
                            {!! $htmlMedias[0] !!}
                        </div>
                        @break
                @endswitch
                {{-- END: POST WITH MEDIA --}}
            @else
                {{-- START: POST WITHOUT MEDIA --}}
                @if (strlen($caption) > 500)
                    <div class="p-4 pt-0 flex flex-col" x-data="{ show: false }">
                        <div x-bind:class="show ? '' : 'line-clamp-5'">
                            {!! nl2br($caption) !!}
                        </div>
                        <a
                            x-on:click="show = ! show"
                            href="javascript:void(0)"
                            class="font-bold mt-0.5 hover:underline"
                            x-html="show ? 'Show less' : 'See more'"
                        ></a>
                    </div>
                @else
                    <div class="p-4 pt-0">
                        {!! nl2br($caption) !!}
                    </div>
                @endif
                {{-- END: POST WITHTOUT MEDIA --}}
            @endif
        </div>
        {{-- END: POST --}}

        <div class="flex flex-col text-gray-500 text-sm px-4 py-2.5">
            {{-- START: COUNTERS --}}
            <div class="flex items-center justify-between border-b border-slate-300 pt-0.5 pb-3">
                @if (! empty($reactionsCount) || ! empty($commentsCount) || ! empty($sharesCount))
                    <div class="flex items-center">
                        <div class="flex -space-x-2 items-center">
                            @foreach ($reactions as $type => $reaction)
                                {!! \App\Enums\PostReaction::from($type)->badge() !!}
                            @endforeach
                        </div>

                        @if (! empty($reactionsCount))
                            <a href="javascript:void(0)" class="hover:underline ml-1">
                                <span>
                                    @if ($reactionsCount < 1000)
                                        {{ $reactionsCount }}
                                    @else
                                        {{ \Illuminate\Support\Number::abbreviate($reactionsCount, precision: 1) }}
                                    @endif
                                </span>
                            </a>
                        @endif
                    </div>

                    <div class="flex items-center">
                        @if (! empty($commentsCount))
                            <a href="javascript:void(0)" class="hover:underline">
                                <span>
                                    {{ $commentsCount }}
                                </span>
                                <span>
                                    Comments
                                </span>
                            </a>
                        @endif

                        @if (! empty($sharesCount))
                            <a href="javascript:void(0)" class="hover:underline">
                                <span class="ml-3">
                                    {{ $sharesCount }}
                                </span>
                                <span>
                                    Shares
                                </span>
                            </a>
                        @endif
                    </div>
                @endif
            </div>
            {{-- END: COUNTERS --}}

            {{-- START: BUTTONS --}}
            <div class="flex py-1 gap-x-1 border-b border-slate-300">
                <button class="transition duration-300 ease-in-out w-1/3 hover:bg-gray-200 py-2 rounded flex items-center justify-center">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M32,104H80a0,0,0,0,1,0,0V208a0,0,0,0,1,0,0H32a8,8,0,0,1-8-8V112A8,8,0,0,1,32,104Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M80,104l40-80a32,32,0,0,1,32,32V80h64a16,16,0,0,1,15.87,18l-12,96A16,16,0,0,1,204,208H80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    <span class="ml-2">
                        Like
                    </span>
                </button>
                <button class="transition duration-300 ease-in-out w-1/3 hover:bg-gray-200 py-2 rounded flex items-center justify-center">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M45.15,230.11A8,8,0,0,1,32,224V64a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V192a8,8,0,0,1-8,8H82.5a8,8,0,0,0-5.15,1.88Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    <span class="ml-2">
                        Comment
                    </span>
                </button>
                <button class="transition duration-300 ease-in-out w-1/3 hover:bg-gray-200 py-2 rounded flex items-center justify-center">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M30.93,198.72C47.39,181.19,90.6,144,152,144v48l80-80L152,32V80C99.2,80,31.51,130.45,24,195.54A4,4,0,0,0,30.93,198.72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    <span class="ml-2">
                        Share
                    </span>
                </button>
            </div>
            {{-- END: BUTTONS --}}

            {{-- START: COMMENTS --}}
            {{-- TODO: --}}
            {{-- END: COMMENTS --}}
        </div>
    </div>
</div>
