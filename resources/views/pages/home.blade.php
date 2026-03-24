@extends('layouts.app')

@section('title', 'Accueil - Pluri\'elles SAS')

@section('content')
    <section class="relative h-[500px] w-full overflow-hidden flex items-center justify-center ">
        <img alt="Conseil RSE et Gestion de projet" class="absolute inset-0 w-full h-full object-cover"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD471efxFjxxWUhCARb8uwBBl2HbLKDqC5NB8DFQkSA64-WKrR-LJPwpuHXo0MRm1eSnpNCDFE2maEKSxB_puUJxZPHuHYG8Sf92TblwK4O0B_HHYK9QsfYEkUcN8Um3XDkCzfMX9JDjXGIRhj8u_SooJdeOLmyNPiur392RFjh9d40uOhUbaNGyiekEujJwl6Fg8FDJ3xg2saPlf34PajkUTmzubs6pe5Y5BsjJw9TNaBIpGPIOFGXYU6hoZni7Mnn82l5Wlm0cwk" />
        <div class="absolute inset-0 bg-[#1B2A4E]/60 backdrop-blur-[2px]"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-white text-5xl md:text-7xl font-headline font-black tracking-tight drop-shadow-2xl">
                Pluri’elles SAS
            </h1>
            <div class="mt-4 h-1 w-24 bg-[#006d36] mx-auto rounded-full shadow-lg"></div>
        </div>
    </section>
    <main class="pt-12">
        <!-- Hero Section -->
        <section class="relative min-h-[751px] flex items-center px-8 max-w-7xl mx-auto overflow-hidden">
            <div class="grid md:grid-cols-2 gap-12 items-center z-10">
                <div class="space-y-8">
                    <span
                        class="inline-block px-4 py-1.5 bg-secondary-container text-on-secondary-container font-label text-xs font-bold tracking-widest uppercase rounded-full">Partenaire
                        de Transition</span>
                    <h1 class="text-5xl md:text-7xl font-extrabold font-headline leading-[1.1] tracking-tight text-primary">
                        Pluri’elles SAS
                    </h1>
                    <p class="text-xl md:text-2xl font-medium text-on-surface-variant max-w-xl leading-relaxed">
                        Votre accélérateur de projets et partenaire de votre engagement responsable. Conseil et
                        accompagnement RSE pour les entreprises et les organisations.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <button
                            class="architectural-gradient text-on-primary px-8 py-4 rounded-md font-bold text-lg flex items-center gap-2 hover:scale-95 transition-all">
                            Découvrir nos services
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <button
                            class="bg-surface-container-high text-on-surface px-8 py-4 rounded-md font-bold text-lg hover:bg-surface-container-highest transition-all">
                            Nous contacter
                        </button>
                    </div>
                </div>
                <div class="relative hidden md:block">
                    <div class="absolute -top-12 -right-12 w-64 h-64 bg-secondary/10 rounded-full blur-3xl"></div>
                    <div class="bg-surface-container-low rounded-xl p-4 transform rotate-2 shadow-sm">
                        <img alt="Bureau moderne collaboratif" class="rounded-lg w-full h-[500px] object-cover"
                            data-alt="Modern high-end architectural office interior"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD471efxFjxxWUhCARb8uwBBl2HbLKDqC5NB8DFQkSA64-WKrR-LJPwpuHXo0MRm1eSnpNCDFE2maEKSxB_puUJxZPHuHYG8Sf92TblwK4O0B_HHYK9QsfYEkUcN8Um3XDkCzfMX9JDjXGIRhj8u_SooJdeOLmyNPiur392RFjh9d40uOhUbaNGyiekEujJwl6Fg8FDJ3xg2saPlf34PajkUTmzubs6pe5Y5BsjJw9TNaBIpGPIOFGXYU6hoZni7Mnn82l5Wlm0cwk" />
                    </div>
                    <div
                        class="absolute -bottom-8 -left-8 bg-white p-6 rounded-lg shadow-xl shadow-primary/5 max-w-[240px]">
                        <p class="text-secondary font-headline text-4xl font-black">100%</p>
                        <p class="text-on-surface-variant text-sm font-label uppercase tracking-tighter">Engagement Durable
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-surface-container-low py-24 px-8">
            <div class="max-w-4xl mx-auto text-center space-y-10">
                <h2 class="text-3xl md:text-4xl font-headline font-bold text-primary leading-tight">
                    "Nous transformons vos ambitions en réalités concrètes..."
                </h2>
                <div class="h-1 w-24 bg-secondary mx-auto"></div>
                <p class="text-lg md:text-xl text-on-surface-variant leading-relaxed font-body italic">
                    L'expertise de Pluri’elles SAS réside dans notre capacité à aligner la performance économique avec les
                    impératifs environnementaux et sociaux de demain.
                </p>
            </div>
        </section>
        <section class="py-32 px-8 max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-24 items-center mb-32">
                <div class="order-2 md:order-1 relative">
                    <img alt="Réunion stratégique" class="rounded-xl shadow-2xl"
                        data-alt="Group of professionals in a strategic meeting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2BAKiEwUs2wyZr4AOiCE9_gYaYqomSs9KM3sEvL7APSP-oVXpvXUdaUrGvyFhWQG5TgIs3SSOMr5sXefslDjmjwpgEvlM1mVV3NknPO57y0aDQdER-HK4RDyFyxxOSIvu-tQKgNVPXBPZflrE-RkD1BkQ2H_gGymtLIefZ2sM1zWUHtR9Ig9hWZd3DGSr1Xb5en8MXt2bJclGzVyxI_kigsp3wiL7SSKF3Z_qKg5L4LrifglyL0EFql-5yO4VaFf4aG6zqMT8Rpw" />
                    <div
                        class="absolute top-0 right-0 w-full h-full bg-primary/5 -z-10 translate-x-4 translate-y-4 rounded-xl">
                    </div>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <span class="text-secondary font-label text-sm font-bold tracking-[0.2em] uppercase">Impact &amp;
                        Lisibilité</span>
                    <h3 class="text-4xl font-headline font-extrabold text-primary">Structurer une démarche RSE lisible...
                    </h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        Nous aidons les organisations à clarifier leur vision. Une stratégie RSE n'est efficace que si elle
                        est comprise par toutes les parties prenantes et mesurable dans le temps.
                    </p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-24 items-center">
                <div class="space-y-6">
                    <span class="text-secondary font-label text-sm font-bold tracking-[0.2em] uppercase">Expertise
                        Sectorielle</span>
                    <h3 class="text-4xl font-headline font-extrabold text-primary">Une approche fondée sur la compréhension
                        de votre activité</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        Chaque secteur a ses propres défis. Notre méthodologie commence par une immersion totale dans vos
                        processus métiers pour proposer des solutions qui font sens opérationnellement.
                    </p>
                </div>
                <div class="relative">
                    <img alt="Analyse de données" class="rounded-xl shadow-2xl"
                        data-alt="Close up of hands analyzing financial data"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuACcAdlNtPvzkj3TdMS0DWRaNpCJQfU2N1_V0u2Xet-6FKDF27PNnLLi42MVz31ffcTYVzqHKc8hM8QJ0QyN8C8O1Mav2KM8JvM12Py2Zy6wlPv_g9RY-xuYVTFCHZVVsMOEdR0HymONsJ4F6SCjgqXIfXkYywxNZirPhod1Qru18MTm30hKTIDhLM9RYi6KT2yx_6W511jhk4uUHJaXpu3wcF-BDKysDW3Izl9rI8Vn17-8trMTzyfe2zoc1mYXaUiKZxsO0wJbTo" />
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-secondary/5 -z-10 -translate-x-4 -translate-y-4 rounded-xl">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary py-32 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="mb-16">
                    <h2 class="text-4xl md:text-5xl font-headline font-bold text-white mb-6">Nos domaines d’intervention
                    </h2>
                    <p class="text-on-primary-container text-xl max-w-2xl">
                        Un accompagnement sur-mesure pour chaque étape de votre maturité RSE.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="md:col-span-2 bg-surface-container-low/10 backdrop-blur border border-white/10 p-10 rounded-xl group hover:bg-secondary transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-5xl mb-6 group-hover:text-white transition-colors">analytics</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Audit RSE</h4>
                        <p class="text-slate-300 group-hover:text-white/90">Diagnostic complet de vos pratiques actuelles,
                            identification des risques et des leviers d'opportunités de croissance durable.</p>
                    </div>
                    <div
                        class="bg-surface-container-low/5 border border-white/5 p-10 rounded-xl group hover:bg-secondary transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-5xl mb-6 group-hover:text-white transition-colors">tactic</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Stratégie</h4>
                        <p class="text-slate-300 group-hover:text-white/90">Co-construction de votre feuille de route
                            stratégique alignée sur vos objectifs business.</p>
                    </div>
                    <div
                        class="bg-surface-container-low/5 border border-white/5 p-10 rounded-xl group hover:bg-secondary transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-5xl mb-6 group-hover:text-white transition-colors">gavel</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Conformité</h4>
                        <p class="text-slate-300 group-hover:text-white/90">Veille réglementaire et mise en conformité avec
                            les directives européennes (CSRD, etc.).</p>
                    </div>
                    <div
                        class="bg-surface-container-low/5 border border-white/5 p-10 rounded-xl group hover:bg-secondary transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-5xl mb-6 group-hover:text-white transition-colors">support_agent</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Assistance</h4>
                        <p class="text-slate-300 group-hover:text-white/90">Support technique et opérationnel pour le
                            déploiement de vos projets RSE au quotidien.</p>
                    </div>
                    <div
                        class="bg-surface-container-low/5 border border-white/5 p-10 rounded-xl group hover:bg-secondary transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-5xl mb-6 group-hover:text-white transition-colors">settings_applications</span>
                        <h4 class="text-2xl font-bold text-white mb-4">Gestion externalisée</h4>
                        <p class="text-slate-300 group-hover:text-white/90">Externalisez votre fonction RSE ou gestion de
                            projet pour une expertise pointue sans le coût fixe.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-32 px-8 max-w-7xl mx-auto text-center">
            <span class="text-secondary font-label text-sm font-bold tracking-[0.2em] uppercase mb-8 block">Notre Valeur
                Ajoutée</span>
            <h2 class="text-5xl font-headline font-black text-primary mb-12">Engagement</h2>
            <div class="flex flex-col md:flex-row justify-center gap-16 items-center">
                <div class="space-y-2">
                    <p class="text-6xl font-headline font-black text-secondary">01</p>
                    <p class="font-bold text-xl text-primary">Proximité</p>
                </div>
                <div class="hidden md:block w-24 h-px bg-outline-variant"></div>
                <div class="space-y-2">
                    <p class="text-6xl font-headline font-black text-secondary">02</p>
                    <p class="font-bold text-xl text-primary">Rigueur</p>
                </div>
                <div class="hidden md:block w-24 h-px bg-outline-variant"></div>
                <div class="space-y-2">
                    <p class="text-6xl font-headline font-black text-secondary">03</p>
                    <p class="font-bold text-xl text-primary">Innovation</p>
                </div>
            </div>
        </section>
        <section class="px-8 pb-32">
            <div
                class="max-w-7xl mx-auto architectural-gradient rounded-3xl p-12 md:p-24 text-center text-white relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-secondary/20 blur-[100px] rounded-full -translate-y-1/2 translate-x-1/2">
                </div>
                <div class="relative z-10 space-y-8">
                    <h2 class="text-3xl md:text-5xl font-headline font-extrabold max-w-4xl mx-auto">
                        Vous souhaitez structurer votre démarche RSE ou booster vos projets ?
                    </h2>
                    <p class="text-on-primary-container text-xl max-w-2xl mx-auto">
                        Prenons rendez-vous pour échanger sur vos ambitions et définir ensemble les premières étapes de
                        votre succès durable.
                    </p>
                    <button
                        class="bg-secondary-container text-on-secondary-container px-10 py-5 rounded-md font-black text-xl hover:scale-105 transition-transform">
                        Parlons de votre projet
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection
