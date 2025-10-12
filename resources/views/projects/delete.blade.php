<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          1 of 3
        </div>
        <div class="col-6">
          2 of 3 (wider)
        </div>
        <div class="col">
          3 of 3
        </div>
      </div>
      <div class="row">
        <div class="col">
          1 of 3
        </div>
        <div class="col-5">
          <h3>¿Seguro que deseas eliminar este proyecto?</h3>
          <form action="{{ route('proyectos.destroy', $proyectos->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="mb-3">
              <label class="form-label">Nombre del proyecto</label>
              <input type="text" class="form-control" value="{{ $proyectos->nombre }}" disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Descripción del proyecto</label>
              <textarea class="form-control" rows="3" disabled>{{ $proyectos->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
          </form>
        </div>
        <div class="col">
          3 of 3
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>