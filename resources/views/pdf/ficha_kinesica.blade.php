<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        margin: 0;
        padding: 20px;
    }

    p {
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
    .firmas{
        display:flex;
        flex-direction:row;
    }
</style>

<body class="bg-gray-100">
    <h1>Ficha Médica</h1>
    <p><strong>Fecha y Hora de Ingreso: </strong>{{$formulario->created_at}}</p>
    <p><strong>Nombre del profesional:</strong> {{ $formulario->nombre_profesional }}</p>
    <p><strong>Nombre del paciente:</strong> {{ $formulario->nombre_paciente }}</p>
    <p><strong>Edad:</strong> {{ $formulario->edad }}</p>
    <p><strong>Obra social:</strong> {{ $formulario->obra_social }}</p>
    <p><strong>Nro Carnet:</strong></p>
    <p><strong>Domicilio:</strong> {{$formulario->domicilio}}</p><p><strong></strong> {{$formulario->localidad}}</p>
    <p><strong>Teléfono particular:</strong> {{$formulario->telefono_particular}}</p>
    <p><strong>Teléfono celular:</strong> {{$formulario->telefono_celular}}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{$formulario->fecha_nacimiento}} , </p><p><strong>Edad</strong> {{$formulario->edad}}</p>
    <p><strong>DNI:</strong> {{$formulario->dni}}</p>
    <p><strong>Profesional Derivante:</strong> {{$formulario->profesional_derivantre}}</p><p><strong>Matricula:</strong> {{$formulario->mat}}</p>
    <p><strong>Profesión:</strong> {{$formulario->profesion_ocupacion}}</p>

    <p><strong>Antecedentes Familiares:</strong> {{$formulario->antecedentes_familiares}}</p>
    <p><strong>Diagnóstico de Ingreso:</strong> {{$formulario->diagnostico_ingreso}}</p>
    <p><strong>Evaluación Kinesica</strong></p>
    <p><strong>Plan de Tratamiento:</strong> {{$formulario->plan_tratamiento}}</p>
    <p><strong>Objetivos del Tratamiento:</strong> {{$formulario->objetivos_tratamiento}}</p>
    <div class="firmas">
        <p><strong>Firma del paciente:</strong> {{$formulario->fecha_nacimiento}}</p>
        <p><strong>Fecha del profesional :</strong> {{$formulario->fecha_nacimiento}}</p>

    </div>
    
</body>

</html>
