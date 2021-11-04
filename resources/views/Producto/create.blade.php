<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodytech-Crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{url('css/estilos.css')}}" rel="stylesheet" />
</head>
<body>


<div class="container text-center">
  <h1 class="mt-5 text-white fw-light">Vista crear producto</h1>
  <p class="lead text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corrupti facere deserunt sit minima repellat dignissimos, optio illo nulla excepturi, repellendus quos voluptatem tenetur adipisci, vero tempora dolor doloribus. In.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">

        <form action="{{ route('productosView.store')}}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="floatingInput">
                <label for="floatingInput">Nombre del producto</label>
            </div>
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="descripcion" class="form-control" id="floatingInput">
                <label for="floatingInput">Descripcion</label>
            </div>
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="precio" class="form-control" id="floatingInput">
                <label for="floatingInput">Precio</label>
            </div>

            <div class="d-grid col-4 d-flex ml-2 botones">
                <input type="submit" class="btn btn-dark btn-outline-warning" value="Guardar">
                <a href="{{ route('productosView.index')}}" class="btn btn-dark btn-outline-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>