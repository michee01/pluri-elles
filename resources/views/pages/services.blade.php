@extends('layouts.app')

@section('title', 'Services - Pluri\'elles SAS')

@section('content')
    <section class="relative h-[450px] flex items-center justify-center mt-6">
        <div class="absolute inset-0 overflow-hidden">
            <img alt="Expertise RSE Pluri'elles" class="w-full h-full object-cover scale-105"
                src="{{ asset('images/banierre/crew.jpg') }}" />

            <div class="absolute inset-0 bg-slate-900/60"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-transparent to-primary/90"></div>

            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size: 24px 24px;">
            </div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class=" font-black text-3xl md:text-7xl text-white mb-4">
                Nos <span class="text-[#D4AF37]">Services</span>
            </h1>

            <p class="mt-6 text-white/80 font-body text-xl max-w-2xl mx-auto leading-relaxed">
                Des prestations RSE adaptées aux besoins des entreprises et des organisations de divers secteurs
            </p>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-16 bg-surface clip-path-banner"></div>

    </section>

    <style>
        .clip-path-banner {
            clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 100%);
        }
    </style>

    <!--Notre Approche-->
    <section class="py-5 bg-white px-6 pl-10 mb-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-left mb-10">
                <h2 class="text-4xl md:text-4xl font-black text-black uppercase tracking-tighter">
                    Notre <span class="">Approche</span>
                </h2>
                <p class="mt-4 text-gray-600 text-xl max-w-2xl ml-5 italic">
                    Pluri’elles propose des prestations de conseil, d’accompagnement et d’appui
                    opérationnel pour aider les entreprises, les organisations ainsi que les acteurs
                    publics ou privés à structurer, déployer et suivre leur démarche RSE.
                </p>
            </div>
        </div>
    </section>

    <!--Notre Accompagnement-->
    <section class="py-3 bg-white px-6 mb-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class=" text-4xl md:text-5xl font-black text-black uppercase tracking-tighter">
                    Un accompagnement modulable, en fonction de <span class="text-[#D4AF37]">vos enjeux</span>
                </h2>
                <div class="w-full h-1.5 bg-black mx-auto mt-4"></div>
                <p class="mt-4 text-gray-800 text-xl max-w-5xl mx-auto">
                    Chaque organisation aborde la RSE à partir d’une situation particulière, liée à son activité, à son
                    niveau d’avancement,
                    à ses ressources internes et aux attentes auxquelles elle doit répondre.
                </p>
                <p class="mt-4 text-gray-800 text-xl max-w-5xl mx-auto">
                    Pluri’elles accompagne ses clients aux différentes étapes de leur démarche RSE, qu’il s’agisse d’initier
                    une réflexion,
                    de structurer un cadre d’action, de consolider des pratiques existantes ou d’assurer un suivi plus
                    régulier.
                </p>
                <p class="mt-4 text-gray-800 text-xl max-w-5xl mx-auto">
                    Notre intervention a pour objet d’apporter des repères clairs, une méthode de travail adaptée et un
                    appui opérationnel,
                    afin de permettre à nos clients d’inscrire leur démarche dans un cadre cohérent, lisible et durable.
                </p>
            </div>
        </div>
    </section>

    <!--Nos Prestations-->
    <section class="py-15 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-10 border-l-8 border-[#D4AF37] pl-8">
                <h2 class="text-4xl md:text-5xl font-black text-black uppercase tracking-tighter">Nos <span
                        class="text-[#D4AF37]">Prestations</span></h2>
                <p class="text-gray-600 mt-4 max-w-2xl text-lg leading-relaxed">
                    Nous accompagnons nos clients sur les principaux volets d’une démarche RSE, depuis l’analyse de
                    l’existant jusqu’au suivi des actions engagées.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">Audit
                        RSE</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous assistons nos clients dans l’évaluation de leur situation au regard des enjeux RSE, en vue de
                        leur permettre de disposer d’un état des lieux structuré
                        et exploitable.
                    </p>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow mt-2">
                        Cette prestation vise à analyser les pratiques existantes, à identifier les enjeux prioritaires et à
                        mettre en évidence les points d’appui ainsi que les axes
                        de progression. Elle permet de disposer d’une base claire pour orienter la suite de la démarche et
                        définir les premières priorités de travail.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Sous-traitance RSE</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Avec Plurielles SAS, libérez votre potentiel en nous confiant la gestion opérationnelle de votre
                        stratégie RSE. De l'audit de conformité à la mise en œuvre
                        de vos engagements sociaux et environnementaux, nous agissons comme votre département RSE
                        externalisé. Nous garantissons une traçabilité rigoureuse et un
                        impact mesurable pour renforcer votre image de marque.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Structuration de la stratégie RSE</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous accompagnons nos clients dans la définition des orientations de leur démarche RSE, afin de leur
                        permettre de formaliser un cadre d’action cohérent avec leur activité, leur organisation et
                        leurs responsabilités.
                    </p>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow mt-2">
                        Notre intervention peut porter sur l’identification des enjeux structurants, la hiérarchisation des
                        priorités, la formalisation des axes de travail et l’élaboration d’une feuille de route.
                        L’objectif est de permettre à l’organisation de disposer d’une stratégie claire, progressive et
                        adaptée à sa réalité.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Agence d'Exécution de Projets</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous ne nous contentons pas de conseiller : nous exécutons. Que ce soit pour des projets de
                        développement, des infrastructures ou des initiatives de terrain, Plurielles prend en charge
                        le pilotage intégral, la logistique et le suivi technique. Nous transformons vos cahiers des charges
                        en résultats tangibles, dans le respect de vos délais et budgets.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Accompagnement & Booster (Entrepreneuriat)</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Plurielles SAS booste votre croissance, que vous soyez une start-up en création ou une société
                        établie. Notre pôle offre un mentorat stratégique pour les
                        porteurs de projets et des solutions d'optimisation de services pour les entreprises existantes.
                        Nous auditons vos processus et injectons l'innovation
                        nécessaire pour propulser vos performances vers de nouveaux sommets.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Accompagnement à la conformité</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous accompagnons nos clients dans la prise en compte de leurs obligations légales, réglementaires
                        et contractuelles en matière de RSE, en vue de leur
                        permettre de mieux comprendre les exigences applicables et d’y répondre de manière structurée.
                    </p>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow mt-2">
                        Cet accompagnement a vocation à sécuriser certains volets de la démarche, à faciliter la
                        formalisation des réponses attendues et à renforcer la cohérence
                        entre les engagements affichés, les pratiques existantes et les attentes externes.
                    </p>
                </div>
                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Assistance opérationnelle</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous assistons nos clients dans la mise en œuvre de leur démarche RSE, afin de leur permettre
                        d’assurer un suivi plus régulier des actions engagées et
                        de mieux organiser leur déploiement.
                    </p>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow mt-2">
                        Cette modalité d’intervention permet d’assurer une continuité dans le suivi, de renforcer
                        l’organisation de la démarche et de soutenir les travaux
                        engagés dans la durée, selon un cadre souple et adapté aux besoins de la structure.
                    </p>
                </div>
                <div
                    class="group bg-gray-50 p-8 rounded-3xl border border-gray-100 hover:bg-black transition-all duration-500 shadow-sm hover:shadow-2xl flex flex-col h-full">
                    <h3 class="font-black text-xl mb-4 text-black group-hover:text-[#D4AF37] uppercase tracking-tight">
                        Gestion externalisée de missions RSE</h3>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow">
                        Nous accompagnons nos clients en assurant, de manière externalisée, tout ou partie de certaines
                        missions RSE, en vue de leur permettre de bénéficier
                        d’un appui structuré sans mobiliser immédiatement une ressource dédiée en interne.
                    </p>
                    <p class="text-gray-600 group-hover:text-gray-400 text-md text-justify leading-relaxed flex-grow mt-2">
                        Cette modalité d’intervention permet d’assurer une continuité dans le suivi, de renforcer
                        l’organisation de la démarche et de soutenir les travaux
                        engagés dans la durée, selon un cadre souple et adapté aux besoins de la structure.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 bg-gray-50 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-6 items-center">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-black text-black uppercase tracking-tighter leading-tight">
                            Des modalités d’accompagnement <span class="text-[#D4AF37]">adaptées</span> à votre réalité
                        </h2>
                    </div>

                    <div class="space-y-6 text-gray-600 text-lg leading-relaxed text-justify">
                        <p>
                            Nos prestations peuvent prendre la forme d’un appui ponctuel sur un besoin identifié, d’un
                            accompagnement plus structurant
                            sur plusieurs étapes de la démarche ou d’une intervention suivie dans le temps.
                        </p>
                        <p>
                            Nous adaptons notre niveau d’intervention à chaque contexte, qu’il s’agisse d’initier une
                            démarche RSE, de la consolider,
                            de répondre à des exigences externes, d’en renforcer le pilotage ou d’en soutenir la mise en
                            œuvre opérationnelle.
                        </p>
                        <p class="border-l-4 border-[#D4AF37] pl-6 italic bg-white p-6 shadow-sm rounded-r-xl">
                            Cette souplesse d’intervention permet de proposer un accompagnement ajusté, proportionné et
                            cohérent avec les besoins réels
                            de l’organisation.
                        </p>
                    </div>
                </div>

                <div class="grid gap-6">
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border-r-8 border-black group hover:ml-3 hover:bg-black transition-all duration-300">
                        <h5 class="font-bold text-[#D4AF37] uppercase mb-2">01. Appui Ponctuel</h5>
                        <p class="group-hover:text-gray-400">Expertise ciblée sur une mission ou un audit spécifique.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border-r-8 border-[#D4AF37] translate-x-4 group hover:mr-3  hover:bg-[#D4AF37] transition-all duration-300">
                        <h5 class="font-bold text-black uppercase mb-2">02. Accompagnement Suivi</h5>
                        <p class="group-hover:text-black/80">Présence régulière pour piloter vos projets dans la durée.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm border-r-8 border-black group hover:ml-3  hover:bg-black transition-all duration-300">
                        <h5 class="font-bold text-[#D4AF37] uppercase mb-2">03. Mise en œuvre</h5>
                        <p class="group-hover:text-gray-400">Exécution opérationnelle totale de vos engagements RSE.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white px-6">
        <div class="max-w-5xl mx-auto relative">
            <div class="absolute inset-0 bg-gray-100 rounded-[4rem] -rotate-0 scale-105 hover:rotate-0"></div>

            <div class="relative z-10 p-12 md:p-20 text-center space-y-10">
                <h2 class="font-black text-4xl md:text-6xl text-black uppercase tracking-tighter leading-none">
                    Besoin d’un accompagnement <br class="hidden md:block">
                    <span class="text-[#D4AF37]">sur-mesure</span> ?
                </h2>

                <p class="text-gray-600 text-xl max-w-2xl mx-auto leading-relaxed">
                    Pluri’elles vous accompagne dans la structuration, le déploiement et le suivi de votre démarche
                    RSE, selon vos enjeux et votre niveau d’avancement.
                </p>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <a href="{{ route('contact') }}"
                        class="group relative inline-flex items-center justify-center bg-black text-[#D4AF37] px-12 py-6 rounded-full font-black text-lg uppercase tracking-widest overflow-hidden hover:bg-white hover:text-[#D4AF37] transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_20px_40px_rgba(0,0,0,0.2)]">
                        <span class="relative z-10 flex items-center gap-3">
                            Parlons de votre projet
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform"></span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
