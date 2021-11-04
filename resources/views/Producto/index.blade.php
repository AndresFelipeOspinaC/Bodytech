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
  <p class="lead text-white-50 ">Listado - Crud productos</p>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="d-grid col-2">
                <a href="{{ route('productosView.create')}}" class="btn btn-dark btn-outline-warning">Crear nuevo</a>
            </div>
            <table class="table table-dark table-striped mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th>{{$producto->id}}</th>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>${{$producto->precio}}</td>

                        <td>
                        <form action="{{route('productosView.destroy', $producto->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('productosView.show',$producto->id)}}" class="btn btn-outline-primary btn-sm">Detalles</a>
                            <a href="{{route('productosView.edit',$producto->id)}}" class="btn btn-outline-success btn-sm">Editar</a>
                            <button  class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>