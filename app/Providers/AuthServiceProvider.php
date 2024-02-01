<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /*
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new \Illuminate\Notifications\Messages\MailMessage)
                ->subject('Bem-vindo ao Nosso Site - Verificação de Conta de E-mail')
                ->greeting('Seja bem-vindo, ' . $notifiable->name . '!')
                ->line('Estamos alegre por ter você aqui conosco! Antes de mergulharmos nas  informações, gostaríamos de fazer uma pequena verificação no seu endereço de e-mail. Afinal, queremos garantir que nossa conexão seja tão sólida. Então, por favor, confirme o seu endereço de e-mail para podermos iniciar essa jornada.')
                ->action('Verificar Conta', $url,)
                ->line('Este link de verificação tem validade programada para expirar em um curto intervalo de tempo.')
                ->line('Caso não tenha procedido à criação da conta, solicitamos encarecidamente que desconsidere este comunicado eletrônico.')
                ->salutation('Agradecemos profundamente pela confiança depositada em nossos serviços e nos sentimos honrados por recebê-lo(a) em nossa plataforma.')
                ->line(''); // Adiciona uma linha vazia para separar o botão
        });

    }
}
