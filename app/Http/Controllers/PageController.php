<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Mail\QuoteRequest as QuoteRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function quote()
    {
        return view('quote');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('contato@starpiscinas.com.br')->send(new ContactMessage($validated));
            return back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente ou use o WhatsApp.');
        }
    }

    public function submitQuote(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'pool_type' => 'required|string',
            'service' => 'required|string',
            'description' => 'required|string',
        ]);

        try {
            Mail::to('contato@starpiscinas.com.br')->send(new QuoteRequestMail($validated));

            // Gerar link do WhatsApp
            $whatsappNumber = '5565981719837';
            $message = "*Novo Orçamento - Star Piscinas*\n\n"
                . "*Nome:* " . $validated['name'] . "\n"
                . "*E-mail:* " . $validated['email'] . "\n"
                . "*Telefone:* " . $validated['phone'] . "\n"
                . "*Tipo de Piscina:* " . $validated['pool_type'] . "\n"
                . "*Serviço:* " . $validated['service'] . "\n"
                . "*Descrição:* " . $validated['description'];

            $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);

            return back()->with([
                'success' => 'Solicitação de orçamento enviada! Abrindo WhatsApp para finalizar...',
                'whatsapp_url' => $whatsappUrl
            ]);
        } catch (\Exception $e) {
            // Em caso de erro de mail, ainda geramos o link do WhatsApp para não perder o lead
            $whatsappNumber = '5565981719837';
            $message = "*Novo Orçamento - Star Piscinas*\n\n"
                . "*Nome:* " . $validated['name'] . "\n"
                . "*Telefone:* " . $validated['phone'] . "\n"
                . "*Serviço:* " . $validated['service'] . "\n"
                . "*Descrição:* " . $validated['description'];
            $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);

            return back()->with([
                'success' => 'Solicitação enviada via sistema! Redirecionando para WhatsApp...',
                'whatsapp_url' => $whatsappUrl
            ]);
        }
    }

    public function post($slug)
    {
        $posts = $this->getBlogPosts();

        if (!isset($posts[$slug])) {
            abort(404);
        }

        return view('post', ['post' => $posts[$slug]]);
    }

    private function getBlogPosts()
    {
        return [
            'ph-verao-cuiaba' => [
                'title' => 'Como manter o pH da água equilibrado no verão de Cuiabá?',
                'category' => 'Cuidados',
                'date' => '31 de Janeiro, 2026',
                'image' => 'images/tip1.png',
                'content' => '<p>O verão em Cuiabá é conhecido por suas temperaturas extremas, muitas vezes ultrapassando os 40°C. Para quem tem piscina, esse calor intenso traz um desafio adicional: a evaporação rápida e o desequilíbrio químico acelerado.</p>
                             <p>Quando a temperatura da água sobe, o consumo de cloro aumenta drasticamente, e o pH tende a variar com mais frequência. Se o pH estiver fora da faixa ideal (7.2 a 7.6), o cloro perde sua eficácia, permitindo que a água fique verde em poucas horas.</p>
                             <h3>Dicas Práticas:</h3>
                             <ul>
                                <li><strong>Teste Diário:</strong> No auge do verão, meça o pH e o cloro todos os dias se a utilização for alta.</li>
                                <li><strong>Cloração Noturna:</strong> Adicione o cloro ao final do dia para evitar que os raios UV degradem o produto antes que ele possa agir.</li>
                                <li><strong>Nível da Água:</strong> Fique atento à evaporação; repor água da rede também altera o equilíbrio químico.</li>
                             </ul>'
            ],
            'manutencao-preventiva-filtragem' => [
                'title' => 'A importância da manutenção preventiva no sistema de filtragem',
                'category' => 'Segurança',
                'date' => '15 de Janeiro, 2026',
                'image' => 'images/tip2.png',
                'content' => '<p>O sistema de filtragem é o "coração" da sua piscina. Sem uma filtragem eficiente, nenhum produto químico fará milagres. A manutenção preventiva deste sistema é essencial para economizar dinheiro e garantir água cristalina.</p>
                             <p>A areia do filtro tem uma vida útil. Com o tempo, os grãos de areia ficam arredondados e perdem a capacidade de reter as impurezas mais finas, resultando em uma água que parece sempre "opaca" ou "turva".</p>
                             <h3>Quando trocar a areia?</h3>
                             <p>Em média, a troca deve ocorrer a cada 1 ou 2 anos em áreas com muito uso. Sinais de que está na hora incluem a necessidade de filtrar por muito mais tempo para obter o mesmo resultado ou a pressão do filtro subindo muito rápido.</p>'
            ],
            'automacao-controle-cloro' => [
                'title' => 'Novos sistemas de automação para controle de cloro',
                'category' => 'Inovação',
                'date' => '01 de Janeiro, 2026',
                'image' => 'images/tip3.png',
                'content' => '<p>A tecnologia iPool e os geradores de cloro por sal transformaram a rotina de quem possui piscina. A automação não é mais um luxo, mas uma forma inteligente de gerenciar recursos e garantir segurança total.</p>
                             <p>Sistemas automatizados medem em tempo real a necessidade de desinfecção e dosam o produto exato. Isso evita o excesso de produtos químicos, que pode causar irritações na pele e olhos, e também evita a falta, que compromete a saúde dos usuários.</p>
                             <p>Imagine controlar a cascata, a iluminação LED e o nível de cloro diretamente pelo seu smartphone. É o futuro da manutenção chegando à sua casa.</p>'
            ]
        ];
    }
}
