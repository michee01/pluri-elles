@extends('layouts.app')

@section('title', 'Accueil - Pluri\'elles SAS')
@section('content')
    <section class="max-w-7xl mx-auto px-8 mb-15 mt-24">
        <div class="max-w-3xl">
            <h1 class="font-headline text-5xl md:text-[3.5rem] leading-tight font-black text-primary tracking-tight mb-6">
                Ressources <span class="text-[#D4AF37]">&</span> Actualités
            </h1>
            <p class="text-gray-600 text-lg leading-relaxed max-w-2xl">
                Plongez dans nos analyses sur la RSE, la gestion de projet agile et l'entrepreneuriat durable.
                Des insights actionnables pour les décideurs engagés.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 mb-12">
        <div class="flex flex-wrap gap-3 items-center">
            <a href="#" class="bg-[#D4AF37] text-white px-6 py-2 rounded-full text-sm font-bold shadow-sm">Tous les
                articles</a>
            <a href="#"
                class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition-colors">RSE</a>
            <a href="#"
                class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition-colors">Projets</a>
            <a href="#"
                class="bg-gray-100 text-gray-700 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition-colors">Entrepreneuriat</a>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-8 group relative overflow-hidden rounded-3xl bg-gray-900 shadow-2xl">
                <div class="aspect-[16/9] w-full relative">
                    <img class="w-full h-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-105"
                        src="images/Auto_femmes.jpg" alt="Bureaux durables">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 md:p-12 text-white">
                        <span
                            class="inline-block bg-[#D4AF37] text-black px-3 py-1 rounded-md text-[0.7rem] font-black uppercase tracking-widest mb-4">
                            À la une • RSE
                        </span>
                        <h2 class="font-headline text-3xl md:text-4xl font-black mb-4 max-w-2xl leading-tight">
                            Autonomisation des femmes
                        </h2>
                        <p class="text-gray-300 line-clamp-2 mb-6 max-w-lg">
                            Découvrez comment les entreprises transforment leurs modèles d'affaires pour un impact positif
                            net.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 font-bold text-[#D4AF37] hover:gap-4 transition-all">
                            Lire l'article <span class="material-symbols-outlined"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div
                    class="bg-black p-8 rounded-3xl text-white flex flex-col justify-between h-full border-t-8 border-[#D4AF37] shadow-xl">
                    <div>
                        <span
                            class="text-[#D4AF37] text-xs font-black uppercase tracking-widest mb-4 block italic underline decoration-1 underline-offset-4">Newsletter</span>
                        <h3 class="font-headline text-2xl font-black mb-4 uppercase">Inscrivez-vous à la newletter</h3>
                        <p class="text-gray-400 mb-8 text-sm leading-relaxed">
                            Recevez chaque mois une sélection exclusive de ressources stratégiques.
                        </p>
                    </div>
                    <form class="space-y-4">
                        <input
                            class="w-full bg-white/10 border-none rounded-xl px-4 py-4 text-white placeholder:text-gray-500 focus:ring-2 focus:ring-[#D4AF37] outline-none"
                            placeholder="Votre email" type="email" />
                        <button
                            class="w-full bg-[#D4AF37] text-black font-black py-4 rounded-xl hover:bg-white transition-colors uppercase tracking-widest text-xs">
                            S'abonner
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 mb-24">
        <h3
            class="font-headline text-2xl font-black text-black uppercase tracking-tighter mb-10 pb-4 border-b-4 border-black inline-block">
            Dernières publications
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-16">
            <article class="flex flex-col group cursor-pointer">
                <div
                    class="aspect-[4/3] rounded-2xl overflow-hidden mb-6 shadow-sm group-hover:shadow-xl transition-all duration-300">
                    <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105"
                        src="images/04.jpg" alt="Agilité">
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-black uppercase tracking-widest text-[#D4AF37]">Projets</span>
                    <span class="text-gray-300">•</span>
                    <time class="text-[0.75rem] font-bold text-gray-400 uppercase">12 Mars 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-black text-black mb-4 leading-tight group-hover:text-[#D4AF37] transition-colors uppercase">
                    Agilité : Au-delà des outils, une culture
                </h4>
                <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3">
                    L'agilité n'est pas qu'une question de Scrum. C'est avant tout un état d'esprit pour naviguer dans
                    l'incertitude.
                </p>
                <a href="#"
                    class="mt-auto text-black font-black text-[0.7rem] uppercase tracking-widest flex items-center gap-2 group-hover:gap-4 transition-all italic underline underline-offset-4 decoration-[#D4AF37]">
                    Lire la suite <span class="material-symbols-outlined text-sm"></span>
                </a>
            </article>

            <article class="flex flex-col group cursor-pointer">
                <div
                    class="aspect-[4/3] rounded-2xl overflow-hidden mb-6 shadow-sm group-hover:shadow-xl transition-all duration-300">
                    <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105"
                        src="images/02.jpg" alt="Femme entrepreneure">
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-black uppercase tracking-widest text-[#D4AF37]">Entrepreneuriat</span>
                    <span class="text-gray-300">•</span>
                    <time class="text-[0.75rem] font-bold text-gray-400 uppercase">05 Mars 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-black text-black mb-4 leading-tight group-hover:text-[#D4AF37] transition-colors uppercase">
                    Entrepreneuriat Féminin : Lever les freins
                </h4>
                <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3">
                    Analyse des disparités d'investissement et conseils pratiques pour pitcher son projet avec impact.
                </p>
                <a href="#"
                    class="mt-auto text-black font-black text-[0.7rem] uppercase tracking-widest flex items-center gap-2 group-hover:gap-4 transition-all italic underline underline-offset-4 decoration-[#D4AF37]">
                    Lire la suite <span class="material-symbols-outlined text-sm"></span>
                </a>
            </article>

            <article class="flex flex-col group cursor-pointer">
                <div
                    class="aspect-[4/3] rounded-2xl overflow-hidden mb-6 shadow-sm group-hover:shadow-xl transition-all duration-300">
                    <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105"
                        src="images/07.jpg" alt="Globe">
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-[0.7rem] font-black uppercase tracking-widest text-[#D4AF37]">RSE</span>
                    <span class="text-gray-300">•</span>
                    <time class="text-[0.75rem] font-bold text-gray-400 uppercase">28 Fév 2024</time>
                </div>
                <h4
                    class="font-headline text-xl font-black text-black mb-4 leading-tight group-hover:text-[#D4AF37] transition-colors uppercase">
                    Bilan Carbone : Atout compétitif
                </h4>
                <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3">
                    Réaliser son bilan carbone n'est plus une contrainte, mais un levier stratégique pour optimiser ses
                    coûts.
                </p>
                <a href="#"
                    class="mt-auto text-black font-black text-[0.7rem] uppercase tracking-widest flex items-center gap-2 group-hover:gap-4 transition-all italic underline underline-offset-4 decoration-[#D4AF37]">
                    Lire la suite <span class="material-symbols-outlined text-sm"></span>
                </a>
            </article>
        </div>

        <div class="mt-20 flex justify-center items-center gap-3">
            <button
                class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center text-black hover:bg-black hover:text-white transition-all">
                <span class="material-symbols-outlined">
                    << </span>
            </button>
            <button
                class="w-12 h-12 rounded-full bg-black text-white flex items-center justify-center font-black">1</button>
            <button
                class="w-12 h-12 rounded-full border-2 border-gray-100 flex items-center justify-center text-gray-400 hover:border-black hover:text-black transition-all font-bold">2</button>
            <button
                class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center text-black hover:bg-black hover:text-white transition-all">
                <span class="material-symbols-outlined">>></span>
            </button>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 mb-24">
        <div class="relative bg-gray-100 rounded-[3rem] overflow-hidden py-16 px-8 md:px-20 border border-gray-200">
            <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-headline text-3xl md:text-4xl font-black text-black uppercase tracking-tighter mb-6">
                        Ne manquez aucun <span class="text-[#D4AF37]">insight</span> stratégique
                    </h2>
                    <p class="text-gray-600 text-lg mb-0">
                        Inscrivez-vous à notre newsletter mensuelle "L'Impact Pluriel".
                    </p>
                </div>
                <div>
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input
                            class="flex-grow px-6 py-4 rounded-2xl border-none bg-white shadow-inner text-black focus:ring-2 focus:ring-[#D4AF37] outline-none"
                            placeholder="votre@email.com" type="email" />
                        <button
                            class="bg-black text-[#D4AF37] px-8 py-4 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-[#D4AF37] hover:text-black transition-all shadow-lg">
                            S'inscrire
                        </button>
                    </form>
                    <p class="mt-4 text-[0.6rem] text-gray-400 uppercase tracking-widest font-bold">
                        Respect de la confidentialité • Désinscription en 1 clic
                    </p>
                </div>
            </div>
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-[#D4AF37]/10 rounded-full blur-3xl"></div>
        </div>
    </section>
@endsection
