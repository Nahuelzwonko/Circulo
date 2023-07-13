<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $evaluacion->id }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        margin: 0;
        padding: 20px;
    }
    p{
        font-size: 14px;
    }
    h1 {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .section {
        margin-bottom: 30px;
    }

    .section-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .section-content {
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #f9f9f9;
    }

    .field-group {
        display: flex;
        margin-bottom: 15px;
    }

    .field-label {
        flex: 1;
        font-weight: bold;
    }

    .field-value {
        flex: 2;
    }
</style>

<body class="bg-gray-100">
    <h1>Ficha Médica</h1>

    <div class="section">
        <div class="section-title">Información Personal</div>
        <div class="section-content">
            <div class="field-group">
                <p class="field-label">Nombre:</p>
                <p class="field-value">{{ $evaluacion->nombre }}</p>
            </div>
            <div class="field-group">
                <p class="field-label">Edad:</p>
                <p class="field-value">{{ $evaluacion->edad }}</p>
            </div>
            <div class="field-group">
                <p class="field-label">Género:</p>
                <p class="field-value">{{ $evaluacion->genero }}</p>
            </div>
            <div class="field-group">
                <p class="field-label">Dirección:</p>
                <p class="field-value"> {{ $evaluacion->direccion }}</p>
            </div>
            <div class="field-group">
                <p class="field-label">Teléfono:</p>
                <p class="field-value">{{ $evaluacion->telefono }}</p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Datos de contacto:</div>
        <div class="section-content">
            <p>{{ $evaluacion->contacto }}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Motivo de consulta:</div>
        <div class="section-content">
            <p>{{ $evaluacion->motivo }}</p>

        </div>
    </div>

    <div class="section">
        <div class="section-title">Historia clínica:</div>
        <div class="section-content">
            <p>{{ $evaluacion->historia }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Evaluación inicial:</div>
        <div class="section-content">
            <p>{{ $evaluacion->evaluacion }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Examen físico:</div>
        <div class="section-content">
            <p>{{ $evaluacion->examen }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Diagnóstico:</div>
        <div class="section-content">
            <p>{{ $evaluacion->diagnostico }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Objetivos de tratamiento:</div>
        <div class="section-content">
            <p>{{ $evaluacion->objetivos }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Plan de tratamiento:</div>
        <div class="section-content">
            <p>{{ $evaluacion->plan }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Seguimiento y evolución:</div>
        <div class="section-content">
            <p>{{ $evaluacion->seguimiento }}</p>
        </div>
    </div>
    <div class="section">
        <div class="section-title">Conclusiones:</div>
        <div class="section-content">
            <p>{{ $evaluacion->conclusiones }}</p>
        </div>
    </div>


</body>

</html>
