<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Star Piscinas - Limpeza e Tratamento')</title>
    <meta name="description" content="@yield('description', 'Especialista em limpeza e tratamento de piscinas em Cuiabá e Várzea Grande. Qualidade e confiança para sua piscina.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title', 'Star Piscinas - Limpeza e Tratamento')" />
    <meta property="og:description" content="@yield('description', 'Especialista em limpeza e tratamento de piscinas em Cuiabá e Várzea Grande. Qualidade e confiança para sua piscina.')" />
    <meta property="og:image" content="{{ asset('images/social-share.jpg') }}" />
    <meta property="og:site_name" content="Star Piscinas" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="@yield('title', 'Star Piscinas - Limpeza e Tratamento')" />
    <meta property="twitter:description" content="@yield('description', 'Especialista em limpeza e tratamento de piscinas em Cuiabá e Várzea Grande. Qualidade e confiança para sua piscina.')" />
    <meta property="twitter:image" content="{{ asset('images/social-share.jpg') }}" />

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Star Piscinas",
      "image": "{{ asset('images/logo.png') }}",
      "telephone": "5565981719837",
      "email": "contato@starpiscinas.com.br",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Cuiabá",
        "addressRegion": "MT",
        "addressCountry": "BR"
      },
      "url": "{{ route('home') }}",
      "priceRange": "$$",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      }
    }
    </script>
    @vite(['resources/css/app.css'])
</head>

<body class="font-inter bg-white text-gray-900 antialiased flex flex-col min-h-screen">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-transparent backdrop-blur-sm shadow-lg">
        <div class="container mx-auto px-4 h-20 md:h-32 flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('images/logo-lateral.png') }}" alt="Star Piscinas Logo" class="h-16 md:h-32">
                <!-- <span class="text-xl font-bold text-brand-blue hidden sm:inline">Star Piscinas</span> -->
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-brand-blue transition-colors">Início</a>
                <a href="{{ route('about') }}" class="hover:text-brand-blue transition-colors">Sobre</a>
                <a href="{{ route('services') }}" class="hover:text-brand-blue transition-colors">Serviços</a>
                <a href="{{ route('blog') }}" class="hover:text-brand-blue transition-colors">Dicas</a>
                <a href="{{ route('contact') }}" class="hover:text-brand-blue transition-colors">Contato</a>
                <a href="{{ route('quote') }}"
                    class="bg-brand-blue text-white px-5 py-2.5 rounded-full hover:bg-brand-blue/90 transition-all shadow-md shadow-brand-blue/20 animate-attention">Solicitar
                    Orçamento</a>
            </nav>

            <!-- Mobile Toggle -->
            <!-- Mobile Toggle -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none">
                <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Nav -->
        <!-- Mobile Nav -->
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-white border-b border-gray-100 px-4 py-8 flex flex-col gap-6 text-center shadow-2xl md:hidden h-[calc(100vh-5rem)] overflow-y-auto pb-40">
            <a href="{{ route('home') }}" class="text-lg font-medium">Início</a>
            <a href="{{ route('about') }}" class="text-lg font-medium">Sobre</a>
            <a href="{{ route('services') }}" class="text-lg font-medium">Serviços</a>
            <a href="{{ route('blog') }}" class="text-lg font-medium">Dicas</a>
            <a href="{{ route('contact') }}" class="text-lg font-medium">Contato</a>
            <a href="{{ route('quote') }}"
                class="bg-brand-blue text-white px-5 py-3 rounded-lg font-bold animate-attention">Solicitar
                Orçamento</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <img src="{{ asset('images/logo.png') }}" alt="Star Piscinas Logo" class="h-10 w-auto">
                        <span class="text-xl font-bold">Star Piscinas</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Especialistas em manter sua piscina impecável. Atendemos Cuiabá e Várzea Grande com
                        profissionalismo e dedicação.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Links Rápidos</h4>
                    <ul class="space-y-4 text-gray-400 text-sm font-medium">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Início</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Nossos
                                Serviços</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog e Dicas</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Serviços</h4>
                    <ul class="space-y-4 text-gray-400 text-sm font-medium">
                        <li>Limpeza Residencial</li>
                        <li>Piscinas Comerciais</li>
                        <li>Tratamento de Água</li>
                        <li>Manutenção Preventiva</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Contato</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-center gap-3">
                            <span class="text-brand-blue font-bold">WhatsApp:</span> (65) 98171-9837
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-brand-blue font-bold">E-mail:</span> contato@starpiscinas.com.br
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-brand-blue font-bold">Localização:</span> Cuiabá e Várzea Grande - MT
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-16 pt-8 border-t border-gray-800 text-center text-gray-500 text-xs">
                &copy; {{ date('Y') }} Star Piscinas. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/5565981719837" target="_blank"
        class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform flex items-center justify-center animate-attention">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.891 11.891-11.891 3.181 0 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.481 8.403 0 6.556-5.332 11.891-11.891 11.891-2.01 0-3.991-.51-5.747-1.474l-6.246 1.691zm6.204-4.277l.446.264c1.51.897 3.248 1.371 5.031 1.371 5.405 0 9.805-4.4 9.805-9.804 0-2.618-1.02-5.079-2.872-6.932-1.851-1.852-4.311-2.872-6.933-2.872-5.405 0-9.804 4.4-9.804 9.804 0 2.128.569 4.195 1.647 6.002l.289.486-1.077 3.931 4.068-1.101zm11.367-7.275c-.32-.16-1.89-.933-2.185-1.041-.295-.108-.51-.16-.724.16-.214.32-.83 1.041-1.017 1.256-.187.215-.373.241-.693.08-.32-.16-1.352-.498-2.577-1.59-.952-.849-1.592-1.898-1.779-2.218-.186-.32-.02-.493.14-.653.145-.144.32-.373.48-.56.16-.186.213-.32.32-.533.107-.213.053-.4-.026-.56-.08-.16-.724-1.746-.993-2.399-.26-.628-.526-.543-.724-.553-.186-.008-.4-.01-.613-.01s-.56.08-.853.4c-.293.32-1.12 1.093-1.12 2.666 0 1.573 1.146 3.093 1.306 3.306.16.213 2.257 3.447 5.467 4.834.763.33 1.359.528 1.825.676.766.244 1.464.21 2.015.127.614-.093 1.89-.773 2.157-1.48.267-.707.267-1.313.187-1.44-.08-.126-.293-.206-.613-.366z" />
        </svg>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-icon-open');
            const closeIcon = document.getElementById('menu-icon-close');

            if (!btn || !menu) return;

            function toggleMenu() {
                menu.classList.toggle('hidden');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            }

            function closeMenu() {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }

            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                toggleMenu();
            });

            // Fechar ao clicar fora
            document.addEventListener('click', function (event) {
                if (!menu.contains(event.target) && !btn.contains(event.target)) {
                    closeMenu();
                }
            });

            // Fechar ao clicar em link
            menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', closeMenu);
            });
        });
    </script>
</body>

</html>