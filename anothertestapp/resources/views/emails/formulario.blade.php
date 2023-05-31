@component('mail::message')
# Nuevo formulario enviado

A continuación se muestran los datos del formulario:

@foreach($data as $key => $value)
- **{{ $key }}**: {{ $value }}
@endforeach

Gracias,
{{ config('app.name') }}
@endcomponent
