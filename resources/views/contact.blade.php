@extends('layouts.app')

@section('title', 'Contato - Star Piscinas')

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 italic">Fale Conosco</h1>
                <p class="text-gray-600 text-lg">Estamos prontos para tirar suas dúvidas e agendar sua limpeza. Escolha o
                    canal de sua preferência.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                <!-- Info 1 -->
                <div
                    class="bg-gray-50 p-10 rounded-3xl border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div
                        class="w-16 h-16 bg-brand-blue/10 text-brand-blue rounded-2xl flex items-center justify-center mx-auto mb-8 group-hover:bg-brand-blue group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">Telefone & WhatsApp</h3>
                    <p class="text-gray-600 mb-6 font-medium">(65) 98171-9837</p>
                    <a href="https://wa.me/5565981719837" target="_blank"
                        class="text-brand-blue font-bold flex items-center justify-center gap-2">
                        Chamar Agora <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Info 2 -->
                <div
                    class="bg-gray-50 p-10 rounded-3xl border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div
                        class="w-16 h-16 bg-brand-blue/10 text-brand-blue rounded-2xl flex items-center justify-center mx-auto mb-8 group-hover:bg-brand-blue group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">E-mail</h3>
                    <p class="text-gray-600 mb-6 font-medium">contato@starpiscinas.com.br</p>
                    <p class="text-xs text-gray-400">Respondemos em até 24h</p>
                </div>

                <!-- Info 3 -->
                <div
                    class="bg-gray-50 p-10 rounded-3xl border border-gray-100 text-center hover:bg-white hover:shadow-xl transition-all group">
                    <div
                        class="w-16 h-16 bg-brand-blue/10 text-brand-blue rounded-2xl flex items-center justify-center mx-auto mb-8 group-hover:bg-brand-blue group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 italic">Área de Atuação</h3>
                    <p class="text-gray-600 mb-6 font-medium">Cuiabá e Várzea Grande - MT</p>
                    <p class="text-xs text-gray-400">Atendimento domiciliar</p>
                </div>
            </div>

            <!-- Simple Contact Form Section -->
            <div class="mt-24 max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl border border-gray-100 p-12 shadow-sm">
                    <h2 class="text-2xl font-bold mb-8 italic text-center">Mande uma mensagem</h2>
                    <form action="{{ route('contact.submit') }}" method="POST"
                        class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Nome</label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">E-mail</label>
                                <input type="email" name="email" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Assunto</label>
                                <select name="subject"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all bg-white">
                                    <option>Dúvidas</option>
                                    <option>Sugestões</option>
                                    <option>Reclamações</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Sua Mensagem</label>
                                <textarea name="message" rows="7" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all"></textarea>
                            </div>
                            <button type="submit"
                                class="bg-brand-blue text-white w-full py-4 rounded-xl font-bold hover:shadow-lg transition-all">
                                Enviar Mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection