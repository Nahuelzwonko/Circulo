<form action="{{ route('people.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
    </div>
    <div>
        <label for="domicilio">Domicilio</label>
        <input type="text" name="domicilio" id="domicilio">
    </div>
    <div>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono">
    </div>
    <div>
        <label for="especialidad">Especialidad</label>
        <input type="text" name="especialidad" id="especialidad">
    </div>
    <button type="submit">Guardar</button>
</form>
