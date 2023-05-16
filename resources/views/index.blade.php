<x-layouts.app>
    <x-article-featured-card :article="$featuredArticle" single="articles" />
    
    <x-heading>Articles</x-heading>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 lg:gap-10 gap-y-10 lg:gap-y-0">
        @foreach ($articles as $article)
            <x-article-card :article="$article" single="articles" />
        @endforeach
    </div>

    <x-partials.btn-view-more url="{{ route('articles.index') }}">View more</x-partials.btn-view-more>

    <x-heading>Blog</x-heading>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 lg:gap-10 gap-y-10 lg:gap-y-0">
        @foreach ($blogs as $article)
            <x-article-card :article="$article" single="blog" />
        @endforeach
    </div>

    <x-partials.btn-view-more url="{{ route('blog.index') }}">View more</x-partials.btn-view-more>

    <x-heading>Reports</x-heading>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 lg:gap-10 gap-y-10 lg:gap-y-0">
        @foreach ($reports as $article)
            <x-article-card :article="$article" single="reports" />
        @endforeach
    </div>

    <x-partials.btn-view-more url="{{ route('reports.index') }}">View more</x-partials.btn-view-more>
</x-layouts.app>