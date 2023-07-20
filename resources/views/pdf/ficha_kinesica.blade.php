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

    .titulo {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        text-align: center;
    }

    .titulo_h {
        font-size: 20px;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .flex-container {
        display: inline-flex;
        flex-direction: row;
        flex-wrap: wrap-reverse;
        justify-content: flex-start;
        align-items: center;
        align-content: normal;
    }

    .flex-items:nth-child(1) {
        border: 1px solid black;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
    }

    .flex-items:nth-child(2) {
        border: 1px solid black;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
    }

    .flex-items:nth-child(3) {
        border: 1px solid black;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
    }

    .flex-items:nth-child(4) {
        border: 1px solid black;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
    }
</style>

<body class="bg-gray-100">
    <div class="titulo">
        <h1 class="titulo_h">Historia clinica</h1>
    </div>
    <div class="parent">
        <div class="div1"> {{ $formulario->created_at }} </div>
        <div class="div2">
            <div class="flex-container">
                <div class="flex-items"></div>
                <div class="flex-items"></div>
                <div class="flex-items"></div>
                <div class="flex-items"></div>
            </div>

        </div>
    </div>

    <p><strong>Nombre del profesional:</strong> {{ $formulario->nombre_profesional }}</p>
    <p><strong>Nombre del paciente:</strong> {{ $formulario->nombre_paciente }}</p>
    <p><strong>Edad:</strong> {{ $formulario->edad }}</p>
    <p><strong>Obra social:</strong> {{ $formulario->obra_social }}</p>
    <p><strong>Nro Carnet:</strong></p>
    <p><strong>Domicilio:</strong> {{ $formulario->domicilio }}</p>
    <p><strong></strong> {{ $formulario->localidad }}</p>
    <p><strong>Teléfono particular:</strong> {{ $formulario->telefono_particular }}</p>
    <p><strong>Teléfono celular:</strong> {{ $formulario->telefono_celular }}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{ $formulario->fecha_nacimiento }} , </p>
    <p><strong>Edad</strong> {{ $formulario->edad }}</p>
    <p><strong>DNI:</strong> {{ $formulario->dni }}</p>
    <p><strong>Profesional Derivante:</strong> {{ $formulario->profesional_derivantre }}</p>
    <p><strong>Matricula:</strong> {{ $formulario->mat }}</p>
    <p><strong>Profesión:</strong> {{ $formulario->profesion_ocupacion }}</p>

    <p><strong>Antecedentes Familiares:</strong> {{ $formulario->antecedentes_familiares }}</p>
    <p><strong>Diagnóstico de Ingreso:</strong> {{ $formulario->diagnostico_ingreso }}</p>
    <p><strong>Evaluación Kinesica</strong></p>
    <p><strong>Plan de Tratamiento:</strong> {{ $formulario->plan_tratamiento }}</p>
    <p><strong>Objetivos del Tratamiento:</strong> {{ $formulario->objetivos_tratamiento }}</p>
    <div class="firmas">
        <p><strong>Firma del paciente:</strong> {{ $formulario->fecha_nacimiento }}</p>
        <p><strong>Fecha del profesional :</strong> {{ $formulario->fecha_nacimiento }}</p>

    </div>

</body>

</html>
