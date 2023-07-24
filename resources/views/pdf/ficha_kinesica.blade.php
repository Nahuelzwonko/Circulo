<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #ffffff;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        display: flex;
        justify-content: center;
    }

    .padre {
        width: 210mm;
        height: 297mm;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .profesional,
    .paciente {
        text-align: left;
    }

    .titulo {
        font-size: large;
        font-weight: bold;
        margin: 1rem 0;
    }

    .flex-row {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: baseline;
        justify-content: space-between;
    }

    .flex-col {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .paciente {
        display: flex;
        flex-direction: column;
    }

    .separador {
        width: 100%;
        height: 20px;
    }

    .contenido {
        margin-left: 2rem;
        margin: 1rem 0;
        font-size: medium;
        text-transform: uppercase;
    }

    .w-50 {
        width: 50%;
    }

    .w-95 {
        width: 95%;
    }

    .mx-auto {
        margin: 1rem auto;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 10px;
        grid-row-gap: 0px;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .color {
        width: 100%;
        background-color: red;
    }

    .text-with-dots {
        position: relative;
    }

    .text-with-dots::after {
        content: "";
        position: absolute;
        bottom: -2px;
        /* Ajusta la posición vertical de la línea de puntos */
        left: 2px;
        right: 0;
        border-bottom: 1.5px dotted #000000;
    }

    .content {
        width: 100%;
        height: auto;
        position: relative;
        text-align: left;
    }

    .content span {
        content: "";
        position: absolute;
        bottom: -2px;
        /* Ajusta la posición vertical de la línea de puntos */
        left: 2px;
        right: 0;
        border-bottom: 1.5px dotted #000000;
    }
</style>

<body>

    <body>
         <div class="parent">
            <span class="titulo">Fecha y hora</span>
            <p class="div1">{{ $formulario->created_at }}</p>
         </div>
        <div class="padre">
            <h1 class="title">Ficha Médica</h1>
            <div class="fecha">
                <p class="fecha_contenido"></p>
            </div>
            <div class="paciente text-left flex-col">
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Profesional:</span>
                        <span class="text-with-dots">{{ $formulario->nombre_profesional }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Nombre del Paciente:</span>
                        <span class="text-with-dots">{{ $formulario->nombre_paciente }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Obra Social</span>
                        <span class="text-with-dots">{{ $formulario->obra_social }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Nro Afiliado</span>
                        <span class="text-with-dots">--</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Domicilio</span>
                        <span class="text-with-dots">{{ $formulario->domicilio }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Localidad</span>
                        <span class="text-with-dots">{{ $formulario->localidad }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Código Postal</span>
                        <span class="text-with-dots">--</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Teléfono Particular</span>
                        <span class="text-with-dots">{{ $formulario->telefono_particular }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Teléfono Celular</span>
                        <span class="text-with-dots">{{ $formulario->telefono_celular }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Fecha de Nacimiento</span>
                        <span class="text-with-dots">{{ $formulario->fecha_nacimiento }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Edad</span>
                        <span class="text-with-dots">{{ $formulario->edad }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">DNI</span>
                        <span class="text-with-dots">{{ $formulario->dni }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Profesional Derivante</span>
                        <span class="text-with-dots">{{ $formulario->profesional_derivantre }}</span>
                    </div>
                    <div class="div2">
                        <span class="titulo">Matricula</span>
                        <span class="text-with-dots">{{ $formulario->mat }}</span>
                    </div>
                </div>
                <div class="separador"></div>
                <div class="parent">
                    <div class="div1">
                        <span class="titulo">Profesión/Ocupación</span>
                        <span class="text-with-dots">{{ $formulario->profesion_ocupacion }}</span>
                    </div>
                </div>
            </div>
            <div class="separador"></div>

            <div class="antecedentes">
                <h2>Antecedentes Personales</h2>
                <div class="separador"></div>
                <div class="content">
                    <span> asdfbasdfasd </span>
                </div>
            </div>

            <div class="antecedentes">
                <h2>Antecedentes Familiares</h2>
                <div class="separador"></div>
                <div class="contenido">
                    <table>
                        @php
                            $antecedentes_familiares = json_decode($formulario->antecedentes_familiares, true);
                        @endphp
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>SI</th>
                                <th>NO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Tension Arterial:</strong></td>
                                <td>{{ $antecedentes_familiares['tension_arterial'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['tension_arterial'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Diabetes:</strong></td>
                                <td>{{ $antecedentes_familiares['diabetes'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['diabetes'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Fumador:</strong></td>
                                <td>{{ $antecedentes_familiares['fumador'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['fumador'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Cardiaco:</strong></td>
                                <td>{{ $antecedentes_familiares['cardiaco'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['cardiaco'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Cirrosis:</strong></td>
                                <td>{{ $antecedentes_familiares['cirrosis'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['cirrosis'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Artrosis:</strong></td>
                                <td>{{ $antecedentes_familiares['artrosis'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['artrosis'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Artritis:</strong></td>
                                <td>{{ $antecedentes_familiares['artritis'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['artritis'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Reumatoidea:</strong></td>
                                <td>{{ $antecedentes_familiares['reumatoidea'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['reumatoidea'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Hemiplejias:</strong></td>
                                <td>{{ $antecedentes_familiares['hemiplejias'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['hemiplejias'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Asma:</strong></td>
                                <td>{{ $antecedentes_familiares['asma'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['asma'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Chagas:</strong></td>
                                <td>{{ $antecedentes_familiares['chagas'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['chagas'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Marcapsos:</strong></td>
                                <td>{{ $antecedentes_familiares['marcapsos'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['marcapsos'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Reemplazo Cadera Derecha:</strong></td>
                                <td>{{ $antecedentes_familiares['reemplazo_cadera_derecha'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['reemplazo_cadera_derecha'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Usa protesis:</strong></td>
                                <td>{{ $antecedentes_familiares['usa_protesis'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['usa_protesis'] ? '' : 'NO' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Reemplazo cadera izquierda:</strong></td>
                                <td>{{ $antecedentes_familiares['reemplazo_cadera_izquierda'] ? 'SI' : '' }}</td>
                                <td>{{ $antecedentes_familiares['reemplazo_cadera_izquierda'] ? '' : 'NO' }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" ">
                <h2>Diagnóstico del Ingreso</h2>
                <div class="separador"></div>
                <div class="content">
                    <span> asdfbasdfasd </span>
                </div>
            </div>
            <div class=" ">
                <h2>Evaluación Kinésica</h2>
                <div class="separador"></div>
                <div class="content">
                    <span> asdfbasdfasd </span>
                </div>
            </div>
            <div class=" ">
                <h2>Plan de Tratamiento</h2>
                <div class="separador"></div>
                <div class="content">
                    <span> asdfbasdfasd </span>
                </div>
            </div>

            <div class=" ">
                <h2>Objetivos del Tratamiento</h2>
                <div class="separador"></div>
                <div class="content">
                    <span> asdfbasdfasd </span>
                </div>
            </div>
        </div>
    </body>
</body>
</html>
