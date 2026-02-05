<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = url('/');

        $urls = [
            // Static Pages
            ['loc' => $baseUrl, 'priority' => '1.0', 'freq' => 'daily'],
            ['loc' => $baseUrl . '/sobre', 'priority' => '0.8', 'freq' => 'monthly'],
            ['loc' => $baseUrl . '/servicos', 'priority' => '0.9', 'freq' => 'weekly'],
            ['loc' => $baseUrl . '/blog', 'priority' => '0.8', 'freq' => 'weekly'],
            ['loc' => $baseUrl . '/contato', 'priority' => '0.7', 'freq' => 'monthly'],
            ['loc' => $baseUrl . '/orcamento', 'priority' => '0.9', 'freq' => 'monthly'],
        ];

        // Blog Posts (Mirrored from PageController)
        $posts = [
            'ph-verao-cuiaba',
            'manutencao-preventiva-filtragem',
            'automacao-controle-cloro'
        ];

        foreach ($posts as $slug) {
            $urls[] = [
                'loc' => $baseUrl . '/blog/' . $slug,
                'priority' => '0.7',
                'freq' => 'monthly'
            ];
        }

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
