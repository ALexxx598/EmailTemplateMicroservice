@component('mail::message')
    Hi {{$email}},

    It is your access code {{$code}}

    Thanks, for choose our site<br>
    {{ config('app.name') }}
@endcomponent
