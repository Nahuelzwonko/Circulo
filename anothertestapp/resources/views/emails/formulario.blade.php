@component('mail::message')
    <h1 style="color: #000000; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Nuevo formulario enviado</h1>
    <p>A continuación se muestran los archivos adjuntos:</p>
    
    @if ($rutaArchivoPDF)
        <a class="hidden" href="{{ Storage::disk('public')->url($rutaArchivoPDF) }}" ></a>
    @endif

    @if ($rutaArchivoImagen)
        <a href="{{ Storage::disk('public')->url($rutaArchivoImagen) }}" class="hidden"></a>
    @endif
    
    <p style="margin-top: 20px;">Gracias,</p>
    <p style="margin-bottom: 0;">{{ config('app.name') }}</p>
@endcomponent
    @push('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

