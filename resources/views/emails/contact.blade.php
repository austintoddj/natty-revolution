@component('mail::message')
# Hey {{ env('MAIL_TO_NAME') }},

We're sending you this message because someone messaged you through the {{ config('app.name') }} contact form.

----

## Name:
{{ $request->name }}

## Email:
<{{ $request->email }}>

## Message:
{{ $request->message }}

----

Believe and achieve,<br>
{{ config('app.name') }}
@endcomponent
