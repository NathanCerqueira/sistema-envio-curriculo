@component('mail::message')
## Olá {{ $candidate->name }} ,

Enviamos este e-mail para agradecer sua vontade de fazer parte do nosso time,
e também desejar boa sorte neste processo seletivo.

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
