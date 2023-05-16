<nav class="flex space-x-8 font-serif font-black text-base xl:text-xl text-neutral-700 order-2">
    <a
        href="{{ route('articles.index') }}"
        class="hover:text-orange-600 {{ request()->routeIs('articles.*') ? 'text-orange-600' : '' }}"
    >Articles</a>

    <a
        href="{{ route('blog.index') }}"
        class="hover:text-orange-600 {{ request()->routeIs('blog.*') ? 'text-orange-600' : '' }}"
    >Blog</a>

    <a
        href="{{ route('reports.index')}}"
        class="hover:text-orange-600 {{ request()->routeIs('reports.*') ? 'text-orange-600' : '' }}"
    >Reports</a>
</nav>