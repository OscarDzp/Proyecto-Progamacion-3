<div class="col col-12 mt-3">
    <label for="idUsuario">ID Usuario</label>
    <input  required value="{{ old('idUsuario', $usuario->idUsuario) }}" type="text" name="idUsuario" class="form-control" maxlength="10">
    <small>Maximo de 10 Digitos.</small>
</div>

<div class="col col-12 mt-3">
    <label for="nombre">Nombre</label>
    <input   required value="{{ old('nombre', $usuario->nombre) }}" type="text" name="nombre" class="form-control" maxlength="50">
    <small>Maximo de letras 50.</small>
</div>

<div class="col col-12 mt-3">
    <label for="apellido">Apellido</label>
    <input   required value="{{ old('apellido', $usuario->apellido) }}" type="text" name="apellido" class="form-control" maxlength="50">
    <small>Maximo de letras 50.</small>
</div>

<div class="col col-12 mt-3">
    <label for="imagen">Foto de perfil</label>
    <input  required value="{{ old('imagen', $usuario->imagen) }}" type="text" name="imagen" class="form-control">
</div>

<div class="col col-12 mt-3">
    <label for="puesto">Puesto</label>
    <input  required value="{{ old('puesto', $usuario->puesto) }}" type="text" name="puesto" class="form-control" maxlength="80">
    <small>Maximo de letras 80.</small>
</div>

<div class="col col-12 mt-3">
    <label for="correo">Correo electrónico</label>
    <input  required value="{{ old('correo', $usuario->correo) }}" type="text" name="correo" class="form-control" maxlength="50">
    <small>Maximo de letras 50.</small>
    <small>El Correo electrónico debe de ser unico.</small>
</div>

<div class="col col-12 mt-3">
    <label for="telefono">Número telefónico</label>
    <input  required value="{{ old('telefono', $usuario->telefono) }}" type="text" name="telefono" class="form-control"  maxlength="8">
    <small>Maximo de 8 Digitos.</small>
</div>

<div class="col col-12 mt-3">
    <label for="genero">Género</label>
    <input required value="{{ old('genero', $usuario->genero) }}" type="text" name="genero" class="form-control" maxlength="10">
    <small>Maximo de letras 10.</small>
</div>

<div class="col col-12 mt-3">
    <label for="fecha">Fecha de nacimiento</label>
    <input  required value="{{ old('fecha', $usuario->fecha) }}" type="date" name="fecha" class="form-control">
</div>

<div class="col col-12 mt-3">
    <label for="cedula">Cédula</label>
    <input  required value="{{ old('cedula', $usuario->cedula) }}" type="text" name="cedula" class="form-control" maxlength="10">
    <small>Maximo de 10 Digitos.</small>
</div>

<div class="col col-12 mt-3">
    <label for="biografia">Biografía</label>
    <input  required value="{{ old('biografia', $usuario->biografia) }}" type="text" name="biografia" class="form-control">
</div>

<div class="col col-12 mt-3 acciones">
    <div class="boton">
        <input type="submit" class="btn btn-success" value="Guardar">
    </div>
    <div class="boton">
        <a href="{{route('usuarios.index')}}" class="btn btn-danger"> Regresar</a>
    </div>
</div>
