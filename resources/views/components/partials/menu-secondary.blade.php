<a
  class="font-serif font-black text-base xl:text-xl text-neutral-700 hover:text-orange-600 order-3 {{ request()->routeIs('index.about') ? 'text-orange-600' : '' }}"
  href="{{ route('index.about') }}"
>About</a>