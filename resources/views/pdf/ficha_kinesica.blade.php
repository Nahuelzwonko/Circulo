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
</style>

<body class="bg-gray-100">
    <h1>Ficha Médica</h1>

    <p><strong>Nombre del profesional:</strong> {{ $formulario->nombre_profesional }}</p>
    <p><strong>Nombre del paciente:</strong> {{ $formulario->nombre_paciente }}</p>
    <p><strong>Edad:</strong> {{ $formulario->edad }}</p>
    <p><strong>Obra social:</strong> {{ $formulario->obra_social }}</p>



</body>

</html>
