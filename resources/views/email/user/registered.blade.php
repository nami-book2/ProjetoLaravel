@component('mail::message')
# Olá {{$user->name}}

Sua conta foi criada com sucesso.

@component('mail::button', ['url' => ''])
Clique aqui para ativar a sua conta
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
