<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
    </div>
    <div class="col">
    </div>
  </div>
  <div class="row">
    
    <div class="col">
    </div>
    <div class="col-9">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Fecha creacion</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
@foreach ($proyectos as $proyecto)
    <tr>
        <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <th scope="row">{{ $proyecto->id }}</th>
            <td>
                <input type="text" name="nombre" value="{{ $proyecto->nombre }}" class="form-control" disabled />
            </td>
            <td>
                <input type="text" name="descripcion" value="{{ $proyecto->descripcion }}" class="form-control" disabled />
            </td>
            <td>{{ $proyecto->created_at }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="activarEdicion(this)">Editar</button>
                <button type="submit" class="btn btn-warning btn-sm" style="display:none;">Guardar</button>
            </td>
        </form>
        <td>
            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este proyecto?')">Eliminar</button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>
    </div>
    <div class="col">
    </div>
  </div>
</div>
<script>
function activarEdicion(btn) {
    const tr = btn.closest('tr');
    const inputs = tr.querySelectorAll('input');
    const guardarBtn = tr.querySelector('button[type="submit"]');
    btn.style.display = 'none';
    guardarBtn.style.display = '';
    inputs.forEach(input => input.disabled = false);
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
  <div class="text-center mb-3">
  <a href="{{ route('proyectos.create') }}" class="btn btn-success mb-3">Nuevo Proyecto</a>
  </div>
  <table class="table">