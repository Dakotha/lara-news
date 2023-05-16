<x-layouts.app>
    <div class="grid grid-cols-6 gap-10 mb-20">
        @foreach ($allArticles['results'] as $article)
            @if ($loop->iteration == 1)
                <x-article-featured-card class="mb-8 lg:mb-16" :article="$article" />
            @elseif ($loop->iteration == 2 || $loop->iteration == 3)
                <x-article-card class="col-span-6 lg:col-span-3" :article="$article" />
            @else
                <x-article-card class="col-span-6 lg:col-span-3 xl:col-span-2" :article="$article" />
            @endif
        @endforeach
    </div>
</x-layouts.app>