@extends('layouts.app')

@section('title', 'Qui sommes-nous - Pluri\'elles SAS')

@section('content')

    <section class="relative px-8 py-10 max-w-7xl mx-auto overflow-hidden mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-center">
            <div class="lg:col-span-7 z-10">
                <!--Notre Vision-->
                <h1 class="font-headline text-[3.5rem] leading-[1.1] font-extrabold text-primary tracking-tight mb-6">
                    Notre <span class="w-12 h-1 text-[#D4AF37]">Vision</span></span>
                </h1>
                <p class="text-body text-on-surface-variant text-lg leading-relaxed max-w-xl text-justify">
                    Contribuer à l’émergence d’un modèle de développement industriel en Afrique
                    où la performance économique, la responsabilité sociale et la protection de
                    l’environnement avancent de manière indissociable.
                </p>
                <p class="text-body text-on-surface-variant text-lg leading-relaxed max-w-xl text-justify mt-3">
                    Nous aspirons à devenir un partenaire de référence des institutions, des investisseurs et des
                    entreprises engagés dans
                    une industrialisation responsable et durable du continent.
                </p>
                <!--Notre Mission-->
                <h1
                    class="font-headline text-[3.5rem] leading-[1.1] font-extrabold text-primary tracking-tight mb-6 text-justify mt-10">
                    Notre <span class="w-12 h-1 text-[#D4AF37]">Mision</span></span>
                </h1>
                <p class="text-body text-on-surface-variant text-lg leading-relaxed max-w-xl text-justify ">
                    Accompagner les grandes entreprises dans la structuration, la mise en œuvre et le pilotage de stratégies
                    RSE performantes,
                    alignées avec les standards internationaux et les réalités locales, tout en favorisant un développement
                    économique responsable,
                    inclusif et durable des territoires.
                </p>
            </div>
            <div class="lg:col-span-5 relative">
                <div class="aspect-[4/5] bg-surface-container-high rounded-lg overflow-hidden relative">
                    <img alt="Modern architectural office space"
                        class="w-full h-full object-cover hover:grayscale-0 hover:scale-105 transition-all duration-70"
                        src="images/kaozi.jpg" />
                </div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary-container rounded-lg -z-10"></div>
            </div>
        </div>
    </section>

    <!--Notre Approche-->
    <section class="py-5 bg-white px-6 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-4xl md:text-5xl font-black text-black uppercase tracking-tighter">
                    Notre <span class="text-[#D4AF37]">Approche</span>
                </h2>
                <div class="w-24 h-1.5 bg-black mx-auto mt-4"></div>
                <p class="mt-4 text-gray-600 text-lg max-w-2xl mx-auto italic">
                    Notre approche repose sur quatre piliers fondamentaux pour garantir l'excellence opérationnelle.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="group p-4 bg-gray-50 rounded-2xl hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <span
                        class="text-5xl font-black text-[#D4AF37]/20 group-hover:text-[#D4AF37] transition-colors duration-500 hover:pl-12 transition-all duration-900">01</span>
                    <h5
                        class="text-xl font-bold mt-4 mb-4 group-hover:text-white transition-colors uppercase tracking-tight  hover:pl-3 transition-all duration-900">
                        Rigueur stratégique
                    </h5>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md leading-relaxed transition-colors">
                        Nous concevons des stratégies RSE fondées sur l’analyse des risques, la matérialité ESG et
                        l’alignement réglementaire.
                    </p>
                </div>

                <div
                    class="group p-4 bg-gray-50 rounded-2xl hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <span
                        class="text-5xl font-black text-[#D4AF37]/20 group-hover:text-[#D4AF37] transition-colors duration-500 hover:pl-12 transition-all duration-900">02</span>
                    <h5
                        class="text-xl font-bold mt-4 mb-4 group-hover:text-white transition-colors uppercase tracking-tight hover:pl-3 transition-all duration-900">
                        Ancrage local</h5>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md leading-relaxed transition-colors">
                        Proximité terrain avec les communautés et autorités pour des solutions réalistes, acceptées et
                        durables.
                    </p>
                </div>

                <div
                    class="group p-4 bg-gray-50 rounded-2xl hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <span
                        class="text-5xl font-black text-[#D4AF37]/20 group-hover:text-[#D4AF37] transition-colors duration-500 hover:pl-12 transition-all duration-900">03</span>
                    <h5
                        class="text-xl font-bold mt-4 mb-4 group-hover:text-white transition-colors uppercase tracking-tight hover:pl-3 transition-all duration-900">
                        Opérationnel</h5>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md leading-relaxed transition-colors">
                        Nous assurons la conception, le pilotage et le suivi de projets RSE concrets à fort impact.
                    </p>
                </div>

                <div
                    class="group p-4 bg-gray-50 rounded-2xl hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <span
                        class="text-5xl font-black text-[#D4AF37]/20 group-hover:text-[#D4AF37] transition-colors duration-500 hover:pl-12 transition-all duration-900">04</span>
                    <h5
                        class="text-xl font-bold mt-4 mb-4 group-hover:text-white transition-colors uppercase tracking-tight hover:pl-3 transition-all duration-900">
                        Transparence</h5>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md leading-relaxed transition-colors">
                        Indicateurs clairs, reporting structuré et amélioration continue des performances ESG.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-18 bg-black text-white px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16">
            <!-- Secteurs Accompagnés-->
            <div class="bg-[#111] p-10 rounded-3xl border border-white/5 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4AF37]/10 blur-3xl rounded-full"></div>
                <h4 class="text-white text-3xl font-black uppercase mb-10">Secteurs <span
                        class="text-[#D4AF37]">Accompagnés</span></h4>

                <div class="space-y-8">
                    <div class="flex flex-col border-b border-white/10 pb-4 group hover:pl-5 transition-all duration-700">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-[#D4AF37] uppercase tracking-widest">Secteur 01</span>
                            <span
                                class="material-symbols-outlined text-[#D4AF37] opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        </div>
                        <p class="text-2xl font-bold mt-2">Mines et industries extractives</p>
                    </div>

                    <div class="flex flex-col border-b border-white/10 pb-4 group hover:pl-5 transition-all duration-700">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-[#D4AF37] uppercase tracking-widest">Secteur 02</span>
                            <span
                                class="material-symbols-outlined text-[#D4AF37] opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        </div>
                        <p class="text-2xl font-bold mt-2">Industries lourdes</p>
                    </div>

                    <div class="flex flex-col group hover:pl-5 transition-all duration-700">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-[#D4AF37] uppercase tracking-widest">Secteur 03</span>
                            <span
                                class="material-symbols-outlined text-[#D4AF37] opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        </div>
                        <p class="text-2xl font-bold mt-2">Énergie et infrastructures</p>
                    </div>
                </div>
            </div>
            <!--Domaines d'intervention-->
            <div>
                <h4 class="text-[#D4AF37] text-3xl font-black uppercase mb-10 flex items-center gap-4">
                    <span class="w-12 h-1 bg-[#D4AF37]"></span> Domaines d'intervention
                </h4>
                <ul class="space-y-6">
                    <li class="flex items-center gap-6 group">
                        <span
                            class="text-[#D4AF37] border border-[#D4AF37]/30 px-3 py-1 text-xs font-bold rounded group-hover:bg-[#D4AF37] group-hover:text-black transition-all">01</span>
                        <p class="text-xl font-light tracking-wide group-hover:translate-x-2 transition-transform">Stratégie
                            et gouvernance RSE</p>
                    </li>
                    <li class="flex items-center gap-6 group">
                        <span
                            class="text-[#D4AF37] border border-[#D4AF37]/30 px-3 py-1 text-xs font-bold rounded group-hover:bg-[#D4AF37] group-hover:text-black transition-all">02</span>
                        <p class="text-xl font-light tracking-wide group-hover:translate-x-2 transition-transform">Mise en
                            œuvre de projets à impact</p>
                    </li>
                    <li class="flex items-center gap-6 group">
                        <span
                            class="text-[#D4AF37] border border-[#D4AF37]/30 px-3 py-1 text-xs font-bold rounded group-hover:bg-[#D4AF37] group-hover:text-black transition-all">03</span>
                        <p class="text-xl font-light tracking-wide group-hover:translate-x-2 transition-transform">Relations
                            communautaires et sociales</p>
                    </li>
                    <li class="flex items-center gap-6 group">
                        <span
                            class="text-[#D4AF37] border border-[#D4AF37]/30 px-3 py-1 text-xs font-bold rounded group-hover:bg-[#D4AF37] group-hover:text-black transition-all">04</span>
                        <p class="text-xl font-light tracking-wide group-hover:translate-x-2 transition-transform">Reporting
                            ESG et conformité bailleurs</p>
                    </li>
                </ul>
                <!-- Découvrir nos services-->
                <div class="mt-20 ">
                    <a href="{{ route('services') }}"
                        class="sm:w-auto bg-[#D4AF37] text-black px-5 py-5 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-white transition-all duration-300 shadow-2xl ">
                        Découvrir nos services
                        <span class="material-symbols-outlined"></span>
                    </a>
                </div>
            </div>


        </div>
    </section>

    <!-- Section Team: Leadership -->
    <section class="py-24 px-8 max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="font-headline text-4xl font-extrabold text-primary">Les visages de l'expertise</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-x-8 gap-y-16">
            <!-- Team Member 1 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Portrait of Sophie Lambert"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/MARCELINE.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

            </div>
            <!-- Team Member 2 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Portrait of Marc Durand"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/TIM.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

            </div>
            <!-- Team Member 3 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Portrait of Elena Rossi"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/joel.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

            </div>
            <!-- Team Member 4 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Henry Dubier"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/HENRY.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

            </div>
            <!-- Team Member 5 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Docteur Willy Kabeya"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/Docteur willy kabeya.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
            <!-- Team Member 6 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Elie McNay"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/elie mcnay.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

            </div>
            <!-- Team Member 7 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Professeure Marie Hortense Manyonga"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="images/equipes/prof marie.jpeg" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
