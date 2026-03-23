<header
    class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-xl border-b border-outline-variant/30 transition-all duration-300">
    <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">

        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div
                class="w-10 h-10 bg-primary flex items-center justify-center rounded-lg rotate-3 group-hover:rotate-0 transition-transform duration-300">
                <span class="text-white font-black text-xl italic">P</span>
            </div>
            <span class="text-xl font-black tracking-tighter text-primary font-headline uppercase">
                Pluri’elles <span class="text-secondary font-light">SAS</span>
            </span>
        </a>

        <nav class="hidden md:flex items-center gap-1">
            @php
                $links = [
                    ['route' => 'home', 'label' => 'Accueil'],
                    ['route' => 'about', 'label' => 'Le Cabinet'],
                    ['route' => 'services', 'label' => 'Services'],
                    ['route' => 'news', 'label' => 'Actualités'],
                    ['route' => 'contact', 'label' => 'Contact'],
                ];
            @endphp

            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                    class="relative px-4 py-2 text-xs font-bold tracking-[0.15em] uppercase font-label transition-colors duration-300
                          {{ request()->routeIs($link['route']) ? 'text-secondary' : 'text-on-surface-variant hover:text-primary' }}">
                    {{ $link['label'] }}
                    @if (request()->routeIs($link['route']))
                        <span class="absolute bottom-0 left-4 right-4 h-0.5 bg-secondary rounded-full"></span>
                    @endif
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-4">
            <a href="{{ route('contact') }}"
                class="hidden sm:inline-flex bg-primary text-on-primary px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 transition-all">
                Nous contacter
            </a>

            <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden p-2 text-primary">
                <span class="material-symbols-outlined text-3xl">menu_open</span>
            </button>
        </div>
    </div>

    <div class="hidden md:hidden bg-white border-t border-outline-variant/20" id="mobile-menu">
        <div class="px-6 py-8 space-y-4">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                    class="block text-lg font-headline font-bold {{ request()->routeIs($link['route']) ? 'text-secondary' : 'text-primary' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
