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
            return back()->with('success', 'Solicitação de orçamento enviada! Nossa equipe entrará em contato em breve.');
        } catch (\Exception $e) {
            return back()->with('success', 'Solicitação enviada! (E-mail não configurado, nossa equipe verá pelo sistema).');
        }
    }
}
