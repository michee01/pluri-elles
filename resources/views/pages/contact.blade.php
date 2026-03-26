@extends('layouts.app')

@section('title', 'Contact - Pluri\'elles SAS')

@section('content')
    <section class="relative h-[350px] flex items-center justify-center bg-black overflow-hidden mt-6">
        <div class="absolute inset-0 opacity-20"
            style="background-image: radial-gradient(#D4AF37 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>
        <div class="relative z-10 text-center px-6">
            <h4 class="text-[#D4AF37] font-bold uppercase tracking-[6px] text-sm mb-4">Entrer en relation</h4>
            <h1 class="font-black text-5xl md:text-7xl text-white uppercase tracking-tighter leading-none">
                Contactez-<span class="text-[#D4AF37]">nous</span>
            </h1>
            <div class="w-24 h-1.5 bg-[#D4AF37] mx-auto mt-6"></div>
        </div>
    </section>

    <section class="py-20 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-16">

                <div class="lg:col-span-5 space-y-12">
                    <div>
                        <h2 class="text-3xl font-black text-black uppercase tracking-tight mb-6">Parlons de votre <span
                                class="text-[#D4AF37]">projet</span></h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Pour toute demande d’information ou de prise de contact, vous pouvez nous écrire ou nous joindre
                            aux coordonnées ci-dessous.
                        </p>
                    </div>

                    <div class="space-y-8">
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 bg-black flex items-center justify-center rounded-xl group-hover:bg-[#D4AF37] transition-colors duration-300">
                                <span
                                    class="material-symbols-outlined text-[#D4AF37] group-hover:text-black font-bold">mail</span>
                            </div>
                            <div>
                                <h5 class="font-bold uppercase text-xs tracking-widest text-gray-700 mb-1">E-mail</h5>
                                <a href="mailto:info@plurielles.cd"
                                    class="text-xl text-black hover:text-[#D4AF37] transition-colors italic">info@plurielles.cd</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 bg-black flex items-center justify-center rounded-xl group-hover:bg-[#D4AF37] transition-colors duration-300">
                                <span
                                    class="material-symbols-outlined text-[#D4AF37] group-hover:text-black font-bold">call</span>
                            </div>
                            <div>
                                <h5 class="font-bold uppercase text-xs tracking-widest text-gray-700 mb-1">Téléphone</h5>
                                <p class="text-xl  text-black">+243(0) 808663292</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 bg-black flex items-center justify-center rounded-xl group-hover:bg-[#D4AF37] transition-colors duration-300">
                                <span
                                    class="material-symbols-outlined text-[#D4AF37] group-hover:text-black font-bold">locatio</span>
                            </div>
                            <div>
                                <h5 class="font-bold uppercase text-md tracking-widest text-gray-700 mb-1">Adresse</h5>
                                <p class="text-xl  text-black">
                                    Silikin Village - Cotex
                                    64 Col. Mondjiba, Ngaliema, Kinshasa - RD Congo
                                    Kinshasa, Gombe<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-3xl border-l-8 border-[#D4AF37] shadow-sm">
                        <h5 class="font-black uppercase tracking-widest text-xs mb-4 text-gray-500">Horaires d'ouverture
                        </h5>
                        <div class="flex justify-between items-center text-gray-700">
                            <span class="font-bold text-black">Lundi — Vendredi</span>
                            <span class="text-black font-black">9h00 – 17h00</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div
                        class="bg-white p-8 md:p-12 rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.06)] border border-gray-100">
                        <form action="#" method="POST" class="grid md:grid-cols-2 gap-6">

                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Nom</label>
                                <input type="text" name="nom" required placeholder="Votre nom"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Prénom</label>
                                <input type="text" name="prenom" required placeholder="Votre prénom"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none">
                            </div>

                            <div class="flex flex-col gap-2 md:col-span-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Organisation /
                                    Entreprise</label>
                                <input type="text" name="organisation" placeholder="Nom de votre structure"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">E-mail</label>
                                <input type="email" name="email" required placeholder="adresse@mail.com"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label
                                    class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Téléphone</label>
                                <input type="tel" name="tel" placeholder="+243..."
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none">
                            </div>

                            <div class="flex flex-col gap-2 md:col-span-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Objet de la
                                    demande</label>
                                <select name="objet"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] outline-none cursor-pointer">
                                    <option>Demande d'information RSE</option>
                                    <option>Audit & Diagnostic</option>
                                    <option>Accompagnement Stratégique</option>
                                    <option>Sous-traitance de mission</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-2 md:col-span-2">
                                <label
                                    class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-1">Message</label>
                                <textarea name="message" rows="5" required placeholder="Comment pouvons-nous vous aider ?"
                                    class="bg-gray-50 border border-gray-100 rounded-xl p-4 focus:ring-2 focus:ring-[#D4AF37] focus:bg-white transition-all outline-none resize-none"></textarea>
                            </div>

                            <div class="md:col-span-2 pt-4">
                                <button type="submit"
                                    class="w-full bg-black text-[#D4AF37] font-black uppercase tracking-[3px] py-6 rounded-xl hover:bg-[#D4AF37] hover:text-black transition-all duration-500 shadow-xl flex items-center justify-center gap-3 group">
                                    Envoyer le message
                                    <span
                                        class="material-symbols-outlined group-hover:translate-x-2 transition-transform"></span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
