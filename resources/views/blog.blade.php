@extends('layouts.app')

@section('title', 'Dicas e Novidades - Star Piscinas')

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 italic">Dicas & Novidades</h1>
                <p class="text-gray-600 text-lg">Aprenda a cuidar melhor da sua piscina e fique por dentro das inovações do
                    setor.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                <!-- Blog 1 -->
                <article class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Dica 1"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-6 left-6 bg-brand-blue text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Cuidados</span>
                    </div>
                    <div class="p-10">
                        <span class="text-gray-400 text-xs mb-4 block">31 de Janeiro, 2026</span>
                        <h3
                            class="text-xl font-bold mb-4 italic leading-tight group-hover:text-brand-blue transition-colors">
                            Como manter o pH da água equilibrado no verão de Cuiabá?</h3>
                        <p class="text-gray-600 text-sm mb-8 leading-relaxed line-clamp-3">
                            O calor intenso pode desequilibrar rapidamente a química da água. Veja passos simples para
                            evitar que sua piscina fique verde...
                        </p>
                        <a href="#"
                            class="text-brand-blue font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Ler Post <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Blog 2 -->
                <article class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1558231015-46543b355280?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Dica 2"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-6 left-6 bg-brand-blue text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Segurança</span>
                    </div>
                    <div class="p-10">
                        <span class="text-gray-400 text-xs mb-4 block">15 de Janeiro, 2026</span>
                        <h3
                            class="text-xl font-bold mb-4 italic leading-tight group-hover:text-brand-blue transition-colors">
                            A importância da manutenção preventiva no sistema de filtragem</h3>
                        <p class="text-gray-600 text-sm mb-8 leading-relaxed line-clamp-3">
                            Um filtro sujo ou com areia saturada pode aumentar seu gasto com cloro em até 40%. Aprenda
                            quando trocar a areia do filtro...
                        </p>
                        <a href="#"
                            class="text-brand-blue font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Ler Post <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Blog 3 -->
                <article class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1473081556163-2a17281fe7df?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Dica 3"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-6 left-6 bg-brand-blue text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Inovação</span>
                    </div>
                    <div class="p-10">
                        <span class="text-gray-400 text-xs mb-4 block">01 de Janeiro, 2026</span>
                        <h3
                            class="text-xl font-bold mb-4 italic leading-tight group-hover:text-brand-blue transition-colors">
                            Novos sistemas de automação para controle de cloro</h3>
                        <p class="text-gray-600 text-sm mb-8 leading-relaxed line-clamp-3">
                            A tecnologia iPool chegou para facilitar sua vida. Controle tudo pelo smartphone e nunca mais se
                            preocupe em medir o pH manualmente...
                        </p>
                        <a href="#"
                            class="text-brand-blue font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                            Ler Post <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Newsletter -->
            <div class="mt-24 bg-brand-blue rounded-[3rem] p-16 text-center text-white relative overflow-hidden">
                <div class="absolute -top-20 -left-20 w-64 h-64 bg-white/10 rounded-full"></div>
                <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/10 rounded-full"></div>

                <h2 class="text-3xl font-bold mb-6 italic relative z-10">Receba dicas exclusivas no seu e-mail</h2>
                <p class="opacity-80 mb-10 max-w-xl mx-auto relative z-10">Assine nossa newsletter e mantenha sua piscina
                    sempre azul gastando menos.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto relative z-10">
                    <input type="email" placeholder="Seu melhor e-mail"
                        class="flex-grow px-8 py-4 rounded-full text-gray-900 outline-none focus:ring-4 focus:ring-white/20">
                    <button
                        class="bg-gray-900 text-white px-10 py-4 rounded-full font-bold hover:bg-gray-800 transition-all">Assinar</button>
                </form>
            </div>
        </div>
    </section>
@endsection