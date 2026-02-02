@extends('layouts.app')

@section('title', 'Sobre Nós - Star Piscinas')

@section('content')
    <section class="py-24 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-20">
                <div class="flex-1">
                    <span class="text-brand-blue font-bold tracking-widest uppercase text-sm mb-6 block">Nossa
                        História</span>
                    <h1 class="text-4xl md:text-5xl font-bold mb-8 italic">Compromisso com a <span
                            class="text-brand-blue">Pureza</span> e sua <span class="text-brand-blue">Tranquilidade</span>.
                    </h1>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        A Star Piscinas nasceu em Cuiabá com a missão de elevar o padrão de cuidado com piscinas na região.
                        Entendemos que uma piscina não é apenas um item de luxo, mas um lugar de memórias, diversão e
                        relaxamento.
                    </p>
                    <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                        Ao longo dos anos, nos especializamos em oferecer não apenas uma limpeza, mas um tratamento técnico
                        completo que preserva o revestimento da sua piscina e a saúde de quem a utiliza. Atendemos hoje
                        centenas de clientes residenciais e comerciais em Cuiabá e Várzea Grande.
                    </p>

                    <div class="grid grid-cols-2 gap-8 py-8 border-y border-gray-100">
                        <div>
                            <h4 class="text-3xl font-bold text-brand-blue italic mb-2">5+</h4>
                            <p class="text-gray-400 text-sm">Anos de Experiência</p>
                        </div>
                        <div>
                            <h4 class="text-3xl font-bold text-brand-blue italic mb-2">500+</h4>
                            <p class="text-gray-400 text-sm">Piscinas Atendidas</p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 relative">
                    <img src="{{ asset('images/team.png') }}" alt="Nossa equipe"
                        class="rounded-[2rem] shadow-2xl relative z-10 w-full h-[600px] object-cover">
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-brand-blue/10 rounded-full z-0 blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Water Safety Parameters Section -->
    <section class="py-24 overflow-hidden bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1 order-2 lg:order-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-8 rounded-3xl border border-blue-100">
                            <h4 class="text-brand-blue font-bold mb-3 italic">Controle de pH</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Mantemos rigorosamente entre 7.2 e 7.6. Isso
                                garante o conforto dos olhos e pele, além de maximizar a eficiência do cloro.</p>
                        </div>
                        <div class="bg-blue-50 p-8 rounded-3xl border border-blue-100">
                            <h4 class="text-brand-blue font-bold mb-3 italic">Alcalinidade Total</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Monitoramos para manter entre 80 e 120 ppm,
                                evitando variações bruscas de pH e protegendo os equipamentos.</p>
                        </div>
                        <div class="bg-blue-50 p-8 rounded-3xl border border-blue-100">
                            <h4 class="text-brand-blue font-bold mb-3 italic">Desinfecção (Cloro)</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Níveis de Cloro Livre entre 1 e 3 ppm garantem
                                a eliminação de 99.9% de germes e bactérias nocivas.</p>
                        </div>
                        <div class="bg-blue-50 p-8 rounded-3xl border border-blue-100">
                            <h4 class="text-brand-blue font-bold mb-3 italic">Equilíbrio Químico</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Análise técnica periódica de dureza cálcica e
                                ácido cianúrico para uma água cristalina e saudável.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 order-1 lg:order-2">
                    <span class="text-brand-blue font-bold tracking-widest uppercase text-sm mb-6 block">Saúde em Primeiro
                        Lugar</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-8 italic">Ciência Aplicada ao seu <span
                            class="text-brand-blue">Bem-Estar</span>.</h2>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Para a Star Piscinas, limpeza vai muito além da estética. Nosso foco central é a **saúde biológica**
                        da água. Uma piscina mal tratada pode ser transmissora de doenças e irritações.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Utilizamos equipamentos de medição de precisão para controlar cada parâmetro químico. Nosso processo
                        garante que a água não seja apenas "azul", mas **perfeitamente segura e habitável** para seres
                        humanos de todas as idades.
                    </p>
                    <div class="flex items-center gap-4 text-brand-blue font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Água 100% Habitável e Segura
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission vision values -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="bg-white p-12 rounded-3xl shadow-sm hover:shadow-xl transition-all h-full">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">Missão</h3>
                    <p class="text-gray-600">Proporcionar lazer e saúde através de um tratamento de água impecável e
                        manutenção preventiva eficiente.</p>
                </div>
                <div class="bg-white p-12 rounded-3xl shadow-sm hover:shadow-xl transition-all h-full">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">Visão</h3>
                    <p class="text-gray-600">Ser a empresa referência em limpeza e tratamento de piscinas em todo o Mato
                        Grosso, reconhecida pela excelência técnica.</p>
                </div>
                <div class="bg-white p-12 rounded-3xl shadow-sm hover:shadow-xl transition-all h-full">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">Valores</h3>
                    <p class="text-gray-600">Ética, Compromisso, Sustentabilidade no uso de químicos e foco total na
                        qualidade da água.</p>
                </div>
            </div>
        </div>
    </section>
@endsection