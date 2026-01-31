<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nova Solicitação de Orçamento - Star Piscinas')
            ->html("
                        <h2>Nova Solicitação de Orçamento</h2>
                        <p><strong>Nome:</strong> {$this->data['name']}</p>
                        <p><strong>E-mail:</strong> {$this->data['email']}</p>
                        <p><strong>Telefone:</strong> {$this->data['phone']}</p>
                        <p><strong>Tipo de Piscina:</strong> {$this->data['pool_type']}</p>
                        <p><strong>Serviço:</strong> {$this->data['service']}</p>
                        <p><strong>Descrição:</strong><br>{$this->data['description']}</p>
                    ");
    }
}
