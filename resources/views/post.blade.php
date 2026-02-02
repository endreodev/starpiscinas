@extends('layouts.app')

@section('title', $post['title'] . ' - Star Piscinas')

@section('content')
    <article class="py-24">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Header Post -->
            <div class="mb-12 text-center">
                <span
                    class="bg-brand-blue text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">
                    {{ $post['category'] }}
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 italic leading-tight">{{ $post['title'] }}</h1>
                <p class="text-gray-400 text-sm">{{ $post['date'] }}</p>
            </div>

            <!-- Main Image -->
            <div class="mb-16 rounded-[3rem] overflow-hidden shadow-2xl h-[500px]">
                <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
            </div>

            <!-- Content -->
            <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                {!! $post['content'] !!}
            </div>

            <!-- Footer Post -->
            <div class="mt-20 pt-10 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-brand-blue rounded-full flex items-center justify-center text-white font-bold text-xl">
                        S
                    </div>
                    <div>
                        <p class="font-bold text-gray-900">Star Piscinas</p>
                        <p class="text-sm text-gray-400">Especialistas em Cuidados</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('blog') }}"
                        class="text-brand-blue font-bold flex items-center gap-2 hover:gap-4 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rotate-180" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        Voltar para Blog
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- CTAs -->
    <section class="py-24 bg-gray-50 overflow-hidden relative">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 italic">Gostou da dica? <span class="text-brand-blue">Fale
                    conosco</span>!</h2>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="https://wa.me/5565981719837" target="_blank"
                    class="bg-[#25D366] hover:bg-[#20bd5a] text-white px-10 py-4 rounded-full font-bold text-lg transition-all flex items-center justify-center gap-2 animate-attention">
                    Falar no WhatsApp
                </a>
                <a href="{{ route('quote') }}"
                    class="bg-brand-blue hover:bg-brand-blue/90 text-white px-10 py-4 rounded-full font-bold text-lg transition-all text-center animate-attention">
                    Solicitar Orçamento
                </a>
            </div>
        </div>
    </section>
@endsection