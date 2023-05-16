@props(['article', 'single' => false])

@php
    $link = !$single ? Request::segment(1) : $single;
@endphp

<div {{ $attributes->merge(['class' => 'relative flex flex-col lg:flex-row p-4 col-span-6 bg-neutral-100 shadow-2xl']) }}>
    {{-- Image --}}
    <div class="w-full h-96">
        <img
            src="{{ $article['image_url'] }}"
            alt="{{ $article['title'] }}"
            class="w-full h-full object-cover"
        >
    </div>

    <div class="flex flex-col py-6 lg:p-10 lg:py-10">
        {{-- Title --}}
        <div class="mb-6 space-y-2">
            <div class="text-sm text-neutral-500">{{ $article['news_site'] }}</div>
            <h2 class="font-serif font-black text-2xl uppercase">
                <a
                    href="{{ route($link . '.show', $article['id']) }}"
                    class="after:absolute after:inset-0"    
                >{{ $article['title'] }}</a>
            </h2>
        </div>

        {{-- Content --}}
        <div class="flex-1 mb-6">
            <p class="lg:pr-20 text-neutral-600 leading-relaxed">
                {{ \Str::limit($article['summary'], 200) }}
            </p>
        </div>

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
</div>