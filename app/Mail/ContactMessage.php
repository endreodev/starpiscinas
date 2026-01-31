<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nova Mensagem de Contato - Star Piscinas')
            ->html("
                        <h2>Nova Mensagem de Contato</h2>
                        <p><strong>Nome:</strong> {$this->data['name']}</p>
                        <p><strong>E-mail:</strong> {$this->data['email']}</p>
                        <p><strong>Telefone:</strong> {$this->data['phone']}</p>
                        <p><strong>Mensagem:</strong><br>{$this->data['message']}</p>
                    ");
    }
}
