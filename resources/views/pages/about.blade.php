@extends('layouts.app')

@section('title', 'Qui sommes-nous - Pluri\'elles SAS')

@section('content')
    <section class="relative px-8 py-20 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 z-10">
                <span class="font-label text-on-surface-variant uppercase tracking-widest text-[0.75rem] mb-4 block">Notre
                    Identité</span>
                <h1 class="font-headline text-[3.5rem] leading-[1.1] font-extrabold text-primary tracking-tight mb-8">
                    L’architecture d’un futur responsable.</span>
                </h1>
                <p class="text-body text-on-surface-variant text-lg leading-relaxed max-w-xl">
                    Pluri’elles SAS est un cabinet de conseil spécialisé en RSE et gestion de projet. Nous accompagnons
                    les organisations dans leur transformation durable avec une rigueur méthodologique et une vision
                    humaine.
                </p>
            </div>
            <div class="lg:col-span-5 relative">
                <div class="aspect-[4/5] bg-surface-container-high rounded-lg overflow-hidden relative">
                    <img alt="Modern architectural office space"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_F7vTIUqeus1mRVXpWkclfuXyTBOP2c_XmBWFo9HORiW9SraMaP1q7tMsEvbd7Q0gRxPfHGv9DqUnfBGxtzmD35F3SbSkdADISbP0K4jZkUL8goZtKXcGfCcLJr5Fc-N7dZ5Lp1dyLsQ1O2NHGwXqYCc48oHyASuIXOf48E_Qt8sBu9Oy-AyQshHheGvd78TXRDhjFR_shJbsKQc3XMVu4EMuD0UagdWjdhaE0sPKBm93XMaxwD5xqVfg6TuuwuzPChSf3ZyFrxQ" />
                </div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary-container rounded-lg -z-10"></div>
            </div>
        </div>
    </section>
    <!-- Section Cabinet: Vision & Mission -->
    <section class="bg-surface-container-low py-24 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-start">
                <div class="space-y-12">
                    <div>
                        <h2 class="font-headline text-3xl font-bold text-primary mb-6">Notre Vision</h2>
                        <p class="text-on-surface-variant leading-relaxed text-lg">
                            Nous croyons que la performance économique de demain est indissociable de l'impact social et
                            environnemental d'aujourd'hui. Notre ambition est de devenir le partenaire de confiance des
                            leaders qui osent transformer leurs modèles.
                        </p>
                    </div>
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm border-l-4 border-secondary">
                        <h3 class="font-headline text-xl font-bold text-primary mb-4">Notre Engagement</h3>
                        <p class="text-on-surface-variant">
                            Chaque projet est abordé avec une approche personnalisée, alliant expertise technique et
                            écoute active pour des solutions pérennes et mesurables.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="h-64 bg-surface-container-highest rounded-lg flex items-end p-6">
                            <span class="text-secondary font-headline text-5xl font-black">15+</span>
                        </div>
                        <p class="font-label text-on-surface-variant uppercase text-xs tracking-tighter">Années
                            d'expertise cumulée</p>
                    </div>
                    <div class="space-y-4 mt-12">
                        <div class="h-64 bg-primary rounded-lg flex items-end p-6">
                            <span class="text-secondary-fixed font-headline text-5xl font-black">120</span>
                        </div>
                        <p class="font-label text-on-surface-variant uppercase text-xs tracking-tighter">Projets RSE
                            déployés</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Team: Leadership -->
    <section class="py-24 px-8 max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <span
                class="font-label text-on-surface-variant uppercase tracking-widest text-[0.75rem] mb-4 block">Gouvernance</span>
            <h2 class="font-headline text-4xl font-extrabold text-primary">Les visages de l'expertise</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-x-8 gap-y-16">
            <!-- Team Member 1 -->
            <div class="group flex flex-col">
                <div class="">
                    <img alt="Portrait of Sophie Lambert"
                        class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
                        src="{{ asset('images/MARCELINE.jpeg') }}" />
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
                        src="{{ asset('images/TIM.jpeg') }}" />
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
                        src="{{ asset('images/joel.jpeg') }}" />
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
                        src="{{ asset('images/HENRY.jpeg') }}" />
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
                        src="{{ asset('images/Docteur willy kabeya.jpeg') }}" />
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
                        src="{{ asset('images/elie mcnay.jpeg') }}" />
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
                        src="{{ asset('images/prof marie.jpeg') }}" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
