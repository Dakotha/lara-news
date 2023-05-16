<x-layouts.app>
    {{-- Image --}}
    <div class="w-full h-[500px]">
        <img
            src="{{ $article['image_url'] }}"
            alt="{{ $article['title'] }}"
            class="w-full h-full object-cover"
        >
    </div>

    <div class="relative -top-32 max-w-4xl mx-auto p-20 space-y-10 bg-neutral-200">

        <div class="flex space-x-4">
            <div class="text-sm text-neutral-500">{{ $article['news_site'] }}</div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
            
            {{-- Meta --}}
            <div class="space-x-6 text-sm text-neutral-500">            
                {{-- Date --}}
                <div class="flex items-center space-x-1">
                    <svg class="w-4 h-4 stroke-neutral-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($article['published_at'])->format('d/m/Y') }}</span>
                </div>

                {{-- Launches --}}
                {{-- <span>{{ $article['launches'] }}</span> --}}

                {{-- Events --}}
                {{-- <span>{{ $article['events'] }}</span> --}}
            </div>
        </div>
        

        <h1 class="font-serif font-black text-6xl">{{ $article['title'] }}</h1>

        <p>{{ $article['summary'] }}</p>

        <div>
            <a
                class="text-orange-600"
                href="{{ $article['url'] }}"
                target="_blank"
            >Read all article on <span>{{ $article['news_site'] }}</span></a>
        </div>
    </div>
</x-layouts.app>