<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19">
</head>
<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .padre {
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .fecha {
        width: 100%;
        text-align: left;
    }

    .fecha_contenido {
        margin: 0;
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

    .text-left {
        text-align: left;
    }

    .paciente {
        display: flex;
        flex-direction: column;
    }

    .separador {
        width: 100%;
        height: 2px;
        background-color: gainsboro;
        border-radius: 100%;
        margin-left: 10px;
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
</style>

<body>
    <div class="padre">
        <h1 class="title">Ficha Médica</h1>
        <div class="fecha">
            <p class="fecha_contenido">{{ $formulario->created_at }}1</p>
        </div>
        <div class="paciente text-left flex-col">
            <div class="profesional flex-row w-50 mx-auto">
                <span class="titulo">Profesional</span>
                <span class="contenido"> {{ $formulario->nombre_profesional }}</span>
            </div>
            <div class="separador"></div>
            <div class="flex-row w-95 mx-auto">
                <span class="titulo">Nombre del Paciente</span>
                <span class="contenido"> {{ $formulario->nombre_paciente }}</span>
            </div>
            <div class="separador"></div>
            <div class="">
                <div class=" flex-row w-95 mx-auto">
                    <span class="titulo">Obra Social</span>
                    <span class="contenido">{{ $formulario->obra_social }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Nro Afiliado</span>
                    <span class="contenido"></span>
                </div>
            </div>
            <div class="separador"></div>
            <div class="">
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Domicilio</span>
                    <span class="contenido"> {{ $formulario->domicilio }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Localidad</span>
                    <span class="contenido"> {{ $formulario->localidad }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Código Postal</span>
                    <span class="contenido"></span>
                </div>
            </div>
            <div class="separador"></div>
            <div class="">
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Teléfono Particular</span>
                    <span class="contenido"> {{ $formulario->telefono_particular }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Teléfono Celular</span>
                    <span class="contenido"> {{ $formulario->telefono_celular }}</span>
                </div>
            </div>
            <div class="separador"></div>
            <div class="">
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Fecha de Nacimiento</span>
                    <span class="contenido"> {{ $formulario->fecha_nacimiento }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Edad</span>
                    <span class="contenido"> {{ $formulario->edad }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">DNI</span>
                    <span class="contenido"> {{ $formulario->dni }}</span>
                </div>
            </div>
            <div class="separador"></div>
            <div class="">
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Profesional Derivante</span>
                    <span class="contenido">{{ $formulario->profesional_derivantre }}</span>
                </div>
                <div class="flex-row w-95 mx-auto">
                    <span class="titulo">Matricula</span>
                    <span class="contenido">{{ $formulario->mat }}</span>
                </div>
            </div>
            <div class="separador"></div>
            <div class="flex-row w-95 mx-auto">
                <span class="titulo">Profesión/Ocupación</span>
                <span class="contenido">{{ $formulario->profesion_ocupacion }}</span>
            </div>
        </div>
        <div class="separador"></div>

        <div class="antecedentes text-left">
            <H2>Antecedentes Personales</H2>
            <div class="separador"></div>
            <div class="contenido"></div>
        </div>

        <div class="antecedentes text-left">
            <h2>Antecedentes Familiares</h2>
            <div class="separador"></div>
            <div class="contenido">
                @php
                    $antecedentes_familiares = json_decode($formulario->antecedentes_familiares, true);
                @endphp
                <p><strong>Tension Arterial:</strong> {{ $antecedentes_familiares['tension_arterial'] ? 'SI' : 'NO' }}</p>
                <p><strong>Diabetes:</strong>{{ $antecedentes_familiares['diabetes'] ? 'SI' : 'NO' }}</p>
                <p><strong>Fumador:</strong>{{ $antecedentes_familiares['fumador'] ? 'SI' : 'NO' }}</p>
                <p><strong>Cardiaco:</strong>{{ $antecedentes_familiares['cardiaco'] ? 'SI' : 'NO' }}</p>
                <p><strong>Cirrosis:</strong>{{ $antecedentes_familiares['cirrosis'] ? 'SI' : 'NO' }}</p>
                <p><strong>Artrosis:</strong>{{ $antecedentes_familiares['artrosis'] ? 'SI' : 'NO' }}</p>
                <p><strong>Artritis:</strong>{{ $antecedentes_familiares['artritis'] ? 'SI' : 'NO' }}</p>
                <p><strong>Reumatoidea:</strong>{{ $antecedentes_familiares['reumatoidea'] ? 'SI' : 'NO' }}</p>
                <p><strong>Hemiplejias:</strong>{{ $antecedentes_familiares['hemiplejias'] ? 'SI' : 'NO' }}</p>
                <p><strong>Asma:</strong>{{ $antecedentes_familiares['asma'] ? 'SI' : 'NO' }}</p>
                <p><strong>Chagas:</strong>{{ $antecedentes_familiares['chagas'] ? 'SI' : 'NO' }}</p>
                <p><strong>Marcapsos:</strong>{{ $antecedentes_familiares['marcapsos'] ? 'SI' : 'NO' }}</p>
                <p><strong>Reemplazo Cadera Derecha:</strong>{{ $antecedentes_familiares['reemplazo_cadera_derecha'] ? 'SI' : 'NO' }}</p>
                <p><strong>Usa protesis:</strong>{{ $antecedentes_familiares['usa_protesis'] ? 'SI' : 'NO' }}</p>
                <p><strong>Reemplazo cadera izquierda:</strong>{{ $antecedentes_familiares['reemplazo_cadera_izquierda'] ? 'SI' : 'NO' }}</p>
                
            </div>
        </div>
        <div class="antecedentes text-left">
            <h2>Diagnóstico del Ingreso</h2>
            <div class="separador"></div>
            <div class="contenido">{{ $formulario->diagnostico_ingreso }}</div>
        </div>
        <div class="antecedentes text-left">
            <H2>Evaluación Kinésica</H2>
            <div class="separador"></div>
            <div class="contenido"></div>
        </div>
        <div class="antecedentes text-left">
            <h2>Plan de Tratamiento</h2>
            <div class="separador"></div>
            <div class="contenido">{{ $formulario->plan_tratamiento }}</div>
        </div>

        <div class="antecedentes text-left">
            <h2>Objetivos del Tratamiento</h2>
            <div class="separador"></div>
            <div class="contenido"> {{ $formulario->objetivos_tratamiento }}</div>
        </div>
    </div>

</body>

</html>
