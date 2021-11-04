<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodytech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{url('css/estilos.css')}}" rel="stylesheet" />

</head>
<body>

<div class="container text-center">
  <h1 class="mt-5 text-white fw-light">Vista de Productos</h1>
  <p class="lead text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corrupti facere deserunt sit minima repellat dignissimos, optio illo nulla excepturi, repellendus quos voluptatem tenetur adipisci, vero tempora dolor doloribus. In.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="d-grid col-2">
        </div>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{$producto->id}}</th>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>${{$producto->precio}}</td>
                    <td>{{$producto->created_at}}</td>
                    <td>{{$producto->updated_at}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="d-grid col-4 d-flex ml-2 botones">
    <a href="{{ route('productosView.index')}}" class="btn btn-dark btn-outline-danger">Cancelar</a>
</div>

</body>
</html>