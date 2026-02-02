@extends('layouts.app')

@section('title', 'Solicitar Orçamento - Star Piscinas')

@section('content')
    <section class="py-24 bg-gray-50 flex flex-col justify-center min-h-[70vh]">
        <div class="container mx-auto px-4">
            <div
                class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-gray-100">
                <!-- Info Sidebar -->
                <div class="md:w-1/3 bg-brand-blue p-12 text-white flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-6 italic">Orçamento Sem Compromisso</h2>
                    <p class="opacity-80 mb-8">Conte-nos um pouco sobre sua piscina e o que você precisa. Nossa equipe
                        entrará em contato com a melhor solução.</p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Resposta Rápida</h4>
                                <p class="text-xs opacity-70">Até 24h úteis</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Visita Técnica</h4>
                                <p class="text-xs opacity-70">Avaliação no local se necessário</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="md:w-2/3 p-12">
                    @if(session('success'))
                        <div
                            class="bg-green-50 border border-green-200 text-green-600 p-4 rounded-xl mb-8 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('quote.submit') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @csrf
                        <div class="sm:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nome Completo</label>
                            <input type="text" name="name" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">E-mail</label>
                            <input type="email" name="email" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Telefone / WhatsApp</label>
                            <input type="text" name="phone" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all"
                                placeholder="(65) 00000-0000">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Tipo de Piscina</label>
                            <select name="pool_type" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all bg-white">
                                <option value="Vinil">Vinil</option>
                                <option value="Fibra">Fibra</option>
                                <option value="Alvenaria/Azulejo">Alvenaria / Azulejo</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Serviço Desejado</label>
                            <select name="service" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all bg-white">
                                <option value="Limpeza Periódica">Limpeza Periódica</option>
                                <option value="Tratamento Avulso">Tratamento Avulso</option>
                                <option value="Manutenção de Equipamentos">Manutenção de Equipamentos</option>
                                <option value="Consultoria">Consultoria</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Mensagem / Observações</label>
                            <textarea name="description" rows="4" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 outline-none transition-all"
                                placeholder="Descreva brevemente o que você precisa..."></textarea>
                        </div>
                        <div class="sm:col-span-2 mt-4 text-center">
                            <button type="submit"
                                class="bg-brand-blue text-white px-12 py-4 rounded-full font-bold text-lg hover:shadow-xl hover:shadow-brand-blue/30 transition-all w-full sm:w-auto">
                                Enviar Solicitação
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@if(session('whatsapp_url'))
    @push('scripts')
        <script>
            window.onload = function () {
                // Pequeno delay para o usuário ver a mensagem de sucesso
                setTimeout(function () {
                    window.open("{{ session('whatsapp_url') }}", "_blank");
                }, 1000);
            };
        </script>
    @endpush
@endif