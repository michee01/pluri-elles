@extends('layouts.app')

@section('title', 'Accueil - Pluri\'elles SAS')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="relative h-[600px] md:h-[800px] w-full bg-black overflow-hidden">

        <div class="swiper heroSlider absolute inset-0 w-full h-full z-0">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/hero/hero.jpg" class="w-full h-full object-cover opacity-50" alt="Pluri'elles 1">
                </div>
                <div class="swiper-slide">
                    <img src="images/hero/partners.jpg" class="w-full h-full object-cover opacity-50" alt="Pluri'elles 2">
                </div>
                <div class="swiper-slide">
                    <img src="images/hero/Agrobusiness.jpg" class="w-full h-full object-cover opacity-50"
                        alt="Pluri'elles 3">
                </div>
                <div class="swiper-slide">
                    <img src="videos/0130.mp4" class="w-full h-full object-cover opacity-50" alt="Pluri'elles 4">
                </div>
            </div>
        </div>

        <div class="absolute inset-0 bg-black/40 z-10 pointer-events-none"></div>

        <div class="absolute inset-0 z-20 flex items-center justify-center px-6">
            <div class="text-center max-w-4xl">

                <div class="w-20 h-1.5 bg-[#D4AF37] mx-auto mb-8 rounded-full shadow-[0_0_15px_rgba(212,175,55,0.6)]"></div>

                <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight mb-6"
                    style="text-shadow: 0 4px 15px rgba(0,0,0,0.6);">
                    Pluri’elles <span class="text-[#D4AF37] italic">SAS</span>
                </h1>

                <p class="text-white text-lg md:text-2xl font-light max-w-3xl mx-auto leading-relaxed mb-10"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.6);">
                    Votre accélérateur de projets et partenaire de votre engagement responsable.
                    <span class="block text-gray-200 mt-2">Conseil et accompagnement RSE pour les entreprises et les
                        organisations.</span>
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="{{ route('services') }}"
                        class="w-full sm:w-auto bg-[#D4AF37] text-black px-12 py-5 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-white transition-all duration-300 shadow-2xl flex items-center justify-center gap-2">
                        Découvrir nos services
                        <span class="material-symbols-outlined"></span>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="w-full sm:w-auto border-2 border-white text-white px-12 py-5 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-all duration-300">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-pagination !bottom-10 !z-30"></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.heroSlider', {
                loop: true,
                effect: 'fade',
                speed: 1500,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>

    <style>
        .swiper-pagination-bullet {
            background: white !important;
            opacity: 0.5;
        }

        .swiper-pagination-bullet-active {
            background: #D4AF37 !important;
            opacity: 1 !important;
            width: 35px !important;
            border-radius: 10px !important;
        }
    </style>
    <!--Main-->
    <main class="pt-10 bg-white">

        <!--Bannierre-->
        <section class="relative min-h-[80vh] flex items-center px-4 max-w-7xl mx-auto overflow-hidden pt-20 md:pt-0">
            <div class="grid md:grid-cols-2 gap-12 items-center z-10 w-full">
                <div class="space-y-8 animate-fade-in-left">
                    <h1 class="text-5xl md:text-7xl font-black leading-[1.1] tracking-tighter text-black">
                        Pluri’elles <span class="text-[#D4AF37]">SAS</span>
                    </h1>
                    <div class="space-y-4">
                        <p class="text-lg md:text-xl font-medium text-gray-700 max-w-xl leading-relaxed text-justify">
                            Nous transformons vos ambitions en réalités concrètes à travers une expertise unique combinant
                            gestion de terrain,
                            conformité RSE et accompagnement entrepreneurial. Ensemble, donnons une nouvelle dimension à
                            votre impact.
                        </p>
                        <p
                            class="text-lg text-gray-500 max-w-xl leading-relaxed text-justify italic border-l-4 border-[#D4AF37] pl-4">
                            Fondée sur la conviction que la performance économique est indissociable de l'impact social,
                            nous déployons des
                            solutions agiles pour répondre aux défis opérationnels des entreprises d'aujourd'hui et de
                            demain.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="{{ route('services') }}"
                            class="w-full sm:w-auto bg-black text-[#D4AF37] border-2 border-black px-10 py-4 rounded-full font-bold text-sm uppercase tracking-widest hover:bg-[#D4AF37] hover:text-black transition-all duration-300 shadow-xl flex items-center justify-center gap-2 group">
                            Découvrir nos services
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform"></span>
                        </a>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -top-12 -right-12 w-64 h-64 bg-[#D4AF37]/10 rounded-full blur-3xl"></div>
                    <div
                        class="bg-gray-100 rounded-2xl p-2 transform rotate-10 shadow-2xl transition-transform hover:scale-105 group-hover:rotate-0 duration-500">
                        <img alt="Marceline Kaozi - Pluri'elles SAS"
                            class="rounded-xl w-full h-[600px] md:h-[650px] object-cover shadow-inner"
                            src="images/kaozi.jpg" />
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 md:-left-8 bg-white p-6 rounded-xl shadow-2xl border-b-4 border-[#D4AF37] min-w-[260px]">
                        <p class="text-[#D4AF37] text-2xl font-black tracking-tight">Marceline Kaozi</p>
                        <p class="text-gray-600 text-xs font-bold uppercase tracking-[3px] mt-1">Présidente & Fondatrice</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Introduction-->
        <section class="py-15 px-6 max-w-7xl mx-auto space-y-32">

            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div
                    class="relative order-2 md:order-1 transform rotate-10 shadow-2xl transition-transform  hover:scale-105 hover:rotate-0 duration-500">
                    <img alt="Réunion stratégique" class="rounded-2xl shadow-2xl relative z-10 border border-gray-200"
                        src="images/48192262.jpg" />
                    <div class="absolute -top-4 -left-4 w-full h-full border-2 border-[#D4AF37] rounded-2xl z-0"></div>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <h3 class="text-3xl md:text-4xl font-black text-black leading-tight">
                        Structurer une démarche RSE <span class="text-[#D4AF37]">lisible</span> et adaptée à vos enjeux
                    </h3>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Pluri’elles accompagne les entreprises et les organisations publiques ou privées dans la
                        structuration d’une démarche RSE en phase
                        avec leurs enjeux, leur fonctionnement et leurs responsabilités.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Dans un contexte où les attentes en matière de responsabilité sociétale se renforcent, il devient
                        nécessaire de disposer d’une
                        démarche lisible, organisée et effectivement déclinée dans l’activité de l’organisation.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h3 class="text-3xl md:text-4xl font-black text-black leading-tight">
                        Une approche fondée sur la <span class="text-[#D4AF37]">compréhension</span> de votre activité
                    </h3>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Notre accompagnement repose sur une analyse de l’activité de nos clients, de leurs enjeux métiers,
                        de leur environnement et des attentes de leurs parties prenantes.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Cette approche nous permet de proposer des solutions adaptées, utiles et directement mobilisables,
                        tenant compte à la fois des ambitions de l’organisation et de ses contraintes opérationnelles.
                    </p>
                    <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-black italic">
                        "Nous privilégions ainsi une démarche structurée, progressive et pragmatique, afin d’aider chaque
                        client à avancer avec méthode, à clarifier ses priorités et à construire une stratégie RSE en
                        cohérence avec sa réalité."
                    </div>
                </div>
                <div
                    class="relative transform rotate-10 shadow-2xl transition-transform  hover:scale-105 hover:rotate-0 duration-500">
                    <img alt="Analyse stratégique" class="rounded-2xl shadow-2xl w-[90%] relative z-10"
                        src="images/06.jpg" />
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#D4AF37] rounded-full z-0 opacity-20"></div>
                </div>
            </div>
        </section>
        <!--Domaines d'intervention-->
        <section class="py-15 bg-black text-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-10">
                    <h3 class="text-4xl md:text-5xl font-black mb-6">
                        Nos domaines d’<span class="text-[#D4AF37]">intervention</span>
                    </h3>
                    <p class="text-gray-400 max-w-4xl text-lg leading-relaxed text-justify">
                        Notre intervention peut prendre la forme d’un appui ponctuel, d’un accompagnement structurant
                        ou d’une assistance plus régulière dans le temps, selon les besoins du client. <br>
                    </p>
                    <p class="text-gray-400 max-w-4xl text-lg leading-relaxed text-justify mt-3">
                        Nous adaptons notre niveau d’intervention à chaque situation, qu’il s’agisse d’initier une démarche,
                        de la consolider, de répondre à des exigences externes ou d’en renforcer le suivi.
                    </p>
                    <p class="text-gray-400 max-w-4xl text-lg leading-relaxed text-justify mt-5">
                        Nos accompagnements peuvent notamment porter sur les dimensions suivantes :
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-[#D4AF37]/50 transition-all duration-300 group">
                        <div class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-4xl">Audit RSE</span>
                        </div>
                        <!--<h4 class="text-xl font-bold mb-4 uppercase tracking-tighter">Audit RSE</h4>-->
                        <p class="text-gray-400 leading-relaxed text-sm text-justify">
                            Évaluation de l’existant, analyse des pratiques en place, identification des enjeux
                            prioritaires et mise en évidence des axes d’amélioration, afin de disposer d’une base claire
                            pour structurer la démarche.
                        </p>
                    </div>
                    <div
                        class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-[#D4AF37]/50 transition-all duration-300 group">
                        <div class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-4xl">Structuration de la stratégie RSE</span>
                        </div>
                        <!--<h4 class="text-xl font-bold mb-4 uppercase tracking-tighter">Stratégie RSE</h4>-->
                        <p class="text-gray-400 leading-relaxed text-sm text-justify">
                            Définition des axes de travail, hiérarchisation des priorités, formalisation des engagements et
                            élaboration d’une
                            feuille de route cohérente avec l’activité, l’organisation et les objectifs de la structure.
                        </p>
                    </div>
                    <div
                        class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-[#D4AF37]/50 transition-all duration-300 group">
                        <div class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-4xl">Accompagnement à la conformité</span>
                        </div>
                        <!--<h4 class="text-xl font-bold mb-4 uppercase tracking-tighter">Conformité</h4> -->
                        <p class="text-gray-400 leading-relaxed text-sm text-justify">
                            Appui à la prise en compte des obligations légales, réglementaires et contractuelles en matière
                            de RSE, en vue
                            de mieux comprendre les exigences applicables et d’y répondre de manière structurée.
                        </p>
                    </div>
                    <div
                        class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-[#D4AF37]/50 transition-all duration-300 group">
                        <div class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-4xl">Assistance opérationnelle</span>
                        </div>
                        <!--<h4 class="text-xl font-bold mb-4 uppercase tracking-tighter">Assistance Opérationnelle</h4>-->
                        <p class="text-gray-400 leading-relaxed text-sm text-justify">
                            Appui au suivi des actions engagées, à la formalisation des outils et documents utiles, ainsi
                            qu’à la mise en œuvre
                            concrète de la démarche dans le fonctionnement de l’organisation.
                        </p>
                    </div>
                    <div
                        class="bg-[#111] p-8 rounded-2xl border border-white/10 hover:border-[#D4AF37]/50 transition-all duration-300 group lg:col-span-1">
                        <div class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-4xl">Gestion externalisée</span>
                        </div>
                        <!--<h4 class="text-xl font-bold mb-4 uppercase tracking-tighter">Gestion Externalisée</h4>-->
                        <p class="text-gray-400 leading-relaxed text-sm text-justify">
                            Prise en charge de tout ou partie de certaines missions RSE, afin d’assurer une continuité dans
                            le pilotage,
                            le suivi de la démarche et l’avancement des travaux engagés.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-15 px-6 max-w-4xl mx-auto text-center">
            <h2
                class="text-4xl md:text-5xl font-black text-black mb-8 uppercase tracking-tighter italic underline decoration-[#D4AF37] decoration-8">
                Engagement
            </h2>
            <div class="space-y-6">
                <p class="text-3xl font-bold text-gray-900">
                    Faire de la RSE un cadre d’action utile et structurant
                </p>
                <p class="text-gray-800 text-lg text-4xl leading-relaxed">
                    Notre ambition est d'aider nos clientsà faire de la
                    RSE un véritable cadre d’action, au service de leur
                    développement et de leur responsabilité.
                    Au-delà de la définition d’une stratégie,
                    nous accompagnons la mise en cohérence des intentions, des priorités et des actions, afin de rendre la
                    démarche plus structurée, plus
                    <span class="text-black font-bold">crédible et durable</span>.
                </p>
            </div>
        </section>

        <section class="px-6 pb-24">
            <div
                class="max-w-7xl mx-auto bg-black rounded-[3rem] p-12 md:p-24 text-center text-white relative overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.3)] border-b-8 border-[#D4AF37]">
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-[#D4AF37]/20 blur-[100px] rounded-full -translate-y-1/2 translate-x-1/2">
                </div>

                <div class="relative z-10 space-y-10">
                    <h2 class="text-3xl md:text-5xl font-black max-w-4xl mx-auto leading-tight">
                        Vous souhaitez structurer votre démarche RSE ou <span class="text-[#D4AF37]">renforcer vos
                            engagements ?</span> ?
                    </h2>
                    <p class="text-gray-300 text-xl max-w-2xl mx-auto font-light">
                        Pluri’elles vous accompagne avec une approche rigoureuse, adaptée à votre activité et à vos enjeux.
                    </p>
                    <div class="pt-6">
                        <a href="contact.php"
                            class="inline-block bg-[#D4AF37] text-black px-12 py-5 rounded-full font-black text-lg uppercase tracking-widest hover:bg-white hover:scale-105 transition-all duration-300">
                            Parlons de votre projet
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
