@extends('layouts.app')

@section('title', 'Serviços - Star Piscinas')

@section('content')
    <!-- Header Page -->
    <section class="bg-brand-blue py-20 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-blue to-brand-turquesa opacity-90"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nossos Serviços</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Soluções completas e profissionais para manter sua piscina
                limpa, segura e valorizada.</p>
        </div>
    </section>

    <!-- Detailed Services -->
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="space-y-32">
                <!-- Service 1: Limpeza Residencial -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="flex-1">
                        <span class="text-brand-blue font-bold tracking-widest uppercase text-sm mb-4 block">Para sua
                            Casa</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-8 italic">Limpeza de Piscinas Residenciais</h2>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Mantenha o lazer da sua família sempre em dia. Realizamos a limpeza completa da sua piscina,
                            garantindo que a água esteja cristalina e livre de bactérias.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Aspiração e escovação completa
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Medição e ajuste de pH e Cloro
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Limpeza de bordas e pré-filtro
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Retirada de folhas e detritos superficiais
                            </li>
                        </ul>
                        <a href="{{ route('quote') }}"
                            class="inline-block bg-brand-blue text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brand-blue/20">Solicitar
                            Orçamento</a>
                    </div>
                    <div class="flex-1">
                        <img src="https://images.unsplash.com/photo-1579848520847-f49553f195d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Limpeza residencial" class="rounded-3xl shadow-2xl">
                    </div>
                </div>

                <!-- Service 2: Piscinas Comerciais -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="flex-1">
                        <span class="text-brand-blue font-bold tracking-widest uppercase text-sm mb-4 block">Para
                            Empresas</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-8 italic">Piscinas Comerciais e Condomínios</h2>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Atendimento especializado para grandes demandas. Garantimos que a piscina do seu condomínio ou
                            academia esteja sempre em conformidade com as normas de saúde.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Relatórios técnicos periódicos
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Cronograma de visitas personalizado
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Supervisão técnica constante
                            </li>
                        </ul>
                        <a href="{{ route('quote') }}"
                            class="inline-block bg-brand-blue text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brand-blue/20">Solicitar
                            Orçamento</a>
                    </div>
                    <div class="flex-1">
                        <img src="https://images.unsplash.com/photo-1558231015-46543b355280?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Piscina comercial" class="rounded-3xl shadow-2xl">
                    </div>
                </div>

                <!-- Service 3: Tratamento de Água -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="flex-1">
                        <span class="text-brand-blue font-bold tracking-widest uppercase text-sm mb-4 block">Saúde e
                            Segurança</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-8 italic">Tratamento de Água e Química</h2>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Uma água bonita não é necessariamente uma água saudável. Utilizamos tecnologia e produtos de
                            ponta para garantir o equilíbrio químico perfeito.
                        </p>
                        <p class="text-gray-600 mb-8 italic text-sm">Cuidamos da alcalinidade, dureza cálcica e
                            estabilização do cloro.</p>
                        <a href="{{ route('quote') }}"
                            class="inline-block bg-brand-blue text-white px-8 py-4 rounded-full font-bold shadow-lg shadow-brand-blue/20">Solicitar
                            Orçamento</a>
                    </div>
                    <div class="flex-1">
                        <img src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Tratamento químico" class="rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection