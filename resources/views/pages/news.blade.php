@extends('layouts.app')

@section('title', 'Accueil - Pluri\'elles SAS')

@section('content')
    <section class="max-w-7xl mx-auto px-8 mb-20 mt-24">
        <div class="max-w-3xl">
            <p class="font-label text-on-surface-variant text-[0.75rem] uppercase tracking-[0.05em] mb-4">Veille &amp;
                Expertise</p>
            <h1 class="font-headline text-[3.5rem] leading-tight font-extrabold text-primary tracking-[-0.02em] mb-8">
                Ressources <span class="text-secondary">&amp;</span> Actualités
            </h1>
            <p class="text-on-surface-variant text-lg leading-[1.6] max-w-2xl">
                Plongez dans nos analyses sur la RSE, la gestion de projet agile et l'entrepreneuriat durable. Des insights
                actionnables pour les décideurs engagés.
            </p>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-8 mb-12">
        <div class="flex flex-wrap gap-4 items-center">
            <button class="bg-secondary text-on-primary px-6 py-2 rounded-full text-sm font-medium">Tous les
                articles</button>
            <button
                class="bg-surface-container-high text-on-surface px-6 py-2 rounded-full text-sm font-medium hover:bg-surface-container-highest transition-colors">RSE</button>
            <button
                class="bg-surface-container-high text-on-surface px-6 py-2 rounded-full text-sm font-medium hover:bg-surface-container-highest transition-colors">Projets</button>
            <button
                class="bg-surface-container-high text-on-surface px-6 py-2 rounded-full text-sm font-medium hover:bg-surface-container-highest transition-colors">Entrepreneuriat</button>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-8 mb-24">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <div class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-low">
                <div class="aspect-[16/9] w-full relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Modern sustainable office building interior with plants"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA85LQsDKENFisAUAs7vULko7E4epd07aDj5Vx-3XVh78d0_gnehKUzkYsn8wlddphcVtXl2OZjqOhCN4-PJbK2DAfxIFV1EMmD_D2DuQUAQLP0vhe2tS3zM5GspRVvj4YYsBA_H_IClVgorzIa3WeSpoJTxw_Spn82vdVHvBN4keXvL2DQZK4csidN7zXIXIuC8AUNRc5EY5iv0dEbosx5ph_BnC5aDoTkAvMLb5pTbdhXW11Bj69FjKBl-mEr5brgtT97eQK-TIM" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-10 text-white">
                        <span
                            class="inline-block bg-secondary-container text-on-secondary-container px-3 py-1 rounded-sm text-xs font-bold uppercase tracking-wider mb-4">À
                            la une • RSE</span>
                        <h2 class="font-headline text-3xl font-bold mb-4 max-w-xl">L'avenir de la RSE : Vers une économie de
                            la régénération en 2025</h2>
                        <p class="text-white/80 line-clamp-2 mb-6 max-w-lg font-body">Découvrez comment les entreprises
                            transforment leurs modèles d'affaires pour avoir un impact positif net sur l'environnement.</p>
                        <button
                            class="flex items-center gap-2 font-semibold text-secondary-fixed hover:gap-4 transition-all duration-300">
                            Lire plus <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 flex flex-col gap-8">
                <div class="bg-primary p-8 rounded-xl text-white flex flex-col justify-between h-full">
                    <div>
                        <span
                            class="text-secondary-fixed text-xs font-bold uppercase tracking-widest mb-4 block">Newsletter</span>
                        <h3 class="font-headline text-2xl font-bold mb-4">Restez informé de nos derniers rapports</h3>
                        <p class="text-white/70 mb-8 text-sm leading-relaxed">Recevez chaque mois une sélection exclusive de
                            ressources stratégiques directement dans votre boîte mail.</p>
                    </div>
                    <div class="space-y-4">
                        <input
                            class="w-full bg-white/10 border-none rounded-md px-4 py-3 text-white placeholder:text-white/40 focus:ring-2 focus:ring-secondary-fixed"
                            placeholder="Votre email" type="email" />
                        <button
                            class="w-full bg-secondary-fixed text-on-secondary-fixed font-bold py-3 rounded-md hover:bg-white transition-colors">S'abonner</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-8">
        <h3 class="font-headline text-2xl font-bold text-primary mb-10 pb-4 border-b border-outline-variant/20">Dernières
            publications</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-16">
            <article class="flex flex-col">
                <div
                    class="aspect-[4/3] rounded-lg overflow-hidden mb-6 bg-surface-container-low shadow-sm hover:shadow-md transition-shadow">
                    <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Team brainstorming session with sticky notes"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDh7K0dEFlLG--hy9RD5jkYS404PVRKs-3NZ_1tA3FpEYzLg3c494P9San889E9w3gbRfmo5-JQlHPJnb7CRTuhzMXw0Vv0kyb85PlKMI3S8J6dCQve9eO9Snd_51q8H4eCA-qsc64CBDYsWozK7aQVqfMaqWp2aXrLa11-smvI3AWGgIlO2TSRpPIGgJnnUyUSxBatkyiLqbrab-POJCi8TbRSD_Fz2UfL1Sl8F9ksBWuyI88e77KFqLlT0jLrRYvuQFvMcg9861c" />
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-bold uppercase tracking-widest text-secondary">Projets</span>
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <time class="text-[0.75rem] text-on-surface-variant">12 Mars 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-bold text-primary mb-4 leading-snug hover:text-secondary cursor-pointer transition-colors">
                    Agilité en entreprise : Au-delà des outils, une culture de l'adaptation
                </h4>
                <p class="text-on-surface-variant text-sm leading-[1.6] mb-6 line-clamp-3">
                    L'agilité n'est pas qu'une question de Scrum ou de Kanban. C'est avant tout un état d'esprit qui permet
                    aux équipes de naviguer dans l'incertitude avec confiance et efficacité.
                </p>
                <button
                    class="mt-auto text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2 hover:text-secondary transition-colors group">
                    Lire plus <span
                        class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                </button>
            </article>
            <article class="flex flex-col">
                <div
                    class="aspect-[4/3] rounded-lg overflow-hidden mb-6 bg-surface-container-low shadow-sm hover:shadow-md transition-shadow">
                    <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Professional woman working on a laptop in a bright studio"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6qFdLwbW-JKmTnA5CTCvVzbIy2kBZOgTH6S1dQ5Q4BGvRupdmKV_fN142FeuhOSdkK2T_pQkPFcMrJRYchJoF-rGYeigDVajTfickR5k3-tU0IaoUevicCPR9K7Dt4OsW3cYzzpz7cxpd2Cmp2irZC7oO_h9ryr7e-RimWB9bWUg8J5Xzqi29V1oEIMRfzoLt6am4lpUvv_6uPuz-0FTxSKLog0HeUw4EW2AnFKYtjOPfXsr-oLaWPYp98j-uHeleCcBye3v_z_I" />
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-bold uppercase tracking-widest text-secondary">Entrepreneuriat</span>
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <time class="text-[0.75rem] text-on-surface-variant">05 Mars 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-bold text-primary mb-4 leading-snug hover:text-secondary cursor-pointer transition-colors">
                    Entrepreneuriat Féminin : Lever les freins au financement
                </h4>
                <p class="text-on-surface-variant text-sm leading-[1.6] mb-6 line-clamp-3">
                    Analyse des disparités d'investissement et conseils pratiques pour pitcher son projet avec impact devant
                    des business angels et fonds d'investissement.
                </p>
                <button
                    class="mt-auto text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2 hover:text-secondary transition-colors group">
                    Lire plus <span
                        class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                </button>
            </article>
            <article class="flex flex-col">
                <div
                    class="aspect-[4/3] rounded-lg overflow-hidden mb-6 bg-surface-container-low shadow-sm hover:shadow-md transition-shadow">
                    <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Hands holding a globe with green leaf overlay"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBabRXOLvf0nUmvwmydne9vtzs3vwdVw4FtD2JdRJ6wr7jd5UWHq9YVyxpKCQNdaYdRCK4JrIXGTFEqszpCtkW_9jqykrWmHNLeNz3pIwFqOVkwzxnoAdxwsNWgur4Jo677QQt_SXIcDcRtJQ-NkpI9-nLrO02j6fhRu50are0HEQcfS837y_BnSbUymKOdaw0dsWoQH-RfFdVi2bE80j88Rd4fJe6BYYeUIOs9MXK5BnQY4zp-aVYmONmLegQPVP6RJZwPQG5YAoQ" />
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-bold uppercase tracking-widest text-secondary">RSE</span>
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <time class="text-[0.75rem] text-on-surface-variant">28 Fév 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-bold text-primary mb-4 leading-snug hover:text-secondary cursor-pointer transition-colors">
                    Bilan Carbone : Pourquoi c'est l'atout compétitif de demain
                </h4>
                <p class="text-on-surface-variant text-sm leading-[1.6] mb-6 line-clamp-3">
                    Réaliser son bilan carbone n'est plus seulement une contrainte légale, mais un levier stratégique pour
                    optimiser ses coûts et attirer les talents.
                </p>
                <button
                    class="mt-auto text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2 hover:text-secondary transition-colors group">
                    Lire plus <span
                        class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                </button>
            </article>
            <article class="flex flex-col">
                <div
                    class="aspect-[4/3] rounded-lg overflow-hidden mb-6 bg-surface-container-low shadow-sm hover:shadow-md transition-shadow">
                    <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Two colleagues discussing a project plan in office"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRAye-FtDIj7OdO4PDfgQfAGNNyvW7nv6SNpIrZyt1cOgwwTNvFGnsqy7H2b6EuwvRWIIV2WHRuKkXr3e54AyeB32dc4CYqKu4vdiG7vbrrWOD9Tz_5m4jtxmUzPapsMhInoV9P6DWAC3WESm0LoJgXFVvrnyQn9pOXFgl5ncbIzfGTMo_6Cb0b3Cqmm3lO31qMd9i4SccqVX74yn0iMxGri0owZ4D4tuPBTRinydgMf40S1EkrH9i6UloFTF5hARjC_Zyhi-aJ0w" />
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-bold uppercase tracking-widest text-secondary">Projets</span>
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <time class="text-[0.75rem] text-on-surface-variant">15 Fév 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-bold text-primary mb-4 leading-snug hover:text-secondary cursor-pointer transition-colors">
                    Gestion de projet hybride : Réconcilier prévisibilité et agilité
                </h4>
                <p class="text-on-surface-variant text-sm leading-[1.6] mb-6 line-clamp-3">
                    Comment mixer les approches Waterfall et Agile pour sécuriser les grands projets tout en conservant la
                    flexibilité nécessaire.
                </p>
                <button
                    class="mt-auto text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2 hover:text-secondary transition-colors group">
                    Lire plus <span
                        class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                </button>
            </article>
            <article class="flex flex-col">
                <div
                    class="aspect-[4/3] rounded-lg overflow-hidden mb-6 bg-surface-container-low shadow-sm hover:shadow-md transition-shadow">
                    <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                        data-alt="Digital marketing strategy data on computer screen"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5NHjlPDWORn91DMqaVVzPlptSlAzzo9Qt7WmpAs-G1CQteTKLuoezMTs-Bu6Y0lRNN3Cggxk9yG-bUueXQ79-gPC--enr6t5piLc4mp2pAVlBzNq0J8pWYYyuVlOi0r7jxkwOEFwShmYnXI0KVDZJJ99RLVegN3v-z-zTZkdJjSx6K_PpQZtnZhKj3r8qdjSjqpHi88UmCKmQHMWPLJSjAudmyC19igulvQsrisLimD4KetVMcN5xK6QTUhRxqJJ20EAwigd716E" />
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-bold uppercase tracking-widest text-secondary">Entrepreneuriat</span>
                    <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                    <time class="text-[0.75rem] text-on-surface-variant">02 Fév 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-bold text-primary mb-4 leading-snug hover:text-secondary cursor-pointer transition-colors">
                    Digitalisation responsable : Un enjeu pour les TPE/PME
                </h4>
                <p class="text-on-surface-variant text-sm leading-[1.6] mb-6 line-clamp-3">
                    Guide pratique pour réussir sa transition numérique sans sacrifier ses engagements environnementaux et
                    sociaux.
                </p>
                <button
                    class="mt-auto text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-2 hover:text-secondary transition-colors group">
                    Lire plus <span
                        class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                </button>
            </article>

        </div>
        <div class="mt-20 flex justify-center items-center gap-4">
            <button
                class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button
                class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</button>
            <button
                class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all">2</button>
            <button
                class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all">3</button>
            <button
                class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </section>
    <section class="mt-32 max-w-7xl mx-auto px-8">
        <div class="relative bg-surface-container-high rounded-2xl overflow-hidden py-16 px-12 md:px-24">
            <div class="relative z-10 max-w-2xl">
                <h2 class="font-headline text-3xl font-bold text-primary mb-6">Ne manquez aucun insight stratégique</h2>
                <p class="text-on-surface-variant mb-8 text-lg">Inscrivez-vous à notre newsletter mensuelle "L'Impact
                    Pluriel" pour recevoir nos analyses directement.</p>
                <form class="flex flex-col md:flex-row gap-4">
                    <input
                        class="flex-grow px-6 py-4 rounded-md border-none bg-surface text-on-surface shadow-sm focus:ring-2 focus:ring-secondary"
                        placeholder="votre@email.com" type="email" />
                    <button
                        class="bg-primary text-on-primary px-10 py-4 rounded-md font-bold hover:bg-primary-container transition-all"
                        type="submit">S'inscrire</button>
                </form>
                <p class="mt-4 text-[0.7rem] text-on-surface-variant uppercase tracking-widest">Désinscription possible à
                    tout moment. Respect de la RGPD.</p>
            </div>
            <div
                class="absolute top-0 right-0 w-1/3 h-full bg-secondary-container opacity-20 transform skew-x-12 translate-x-20 hidden md:block">
            </div>
        </div>
    </section>
@endsection
