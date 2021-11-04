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
    <div class="container">
      <div class="container text-center">
        <h1 class="mt-5 text-white fw-light">Catalogo de productos</h1>
      </div>
        <table class="table table-dark table-striped mt-4">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Acción</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody id="items"></tbody>
          <tfoot>
            <tr id="footer">
              <th scope="row" colspan="5">Carrito</th>
            </tr>
          </tfoot>
        </table>
        <div class="row" id="cards"> </div>
    </div>


    <template id="template-card">
        <div class="col-12 mb-4 col-md-4">
          <div class="card">
            <div class="card-body">
              <h5>Titulo</h5>
              <p>Descripcion</p>
              <h6>Precio</h6>
              <button class="btn btn-warning">Comprar</button>
            </div>
          </div>
        </div>
      </template>
    
      <template id="template-carrito">
        <tr>
          <th scope="row">id</th>
          <td>Café</td>
          <td>1</td>
          <td>
              <button class="btn btn-success btn-sm">
                  +
              </button>
              <button class="btn btn-danger btn-sm">
                  -
              </button>
          </td>
          <td>$ <span>500</span></td>
        </tr>
      </template>
      
      <template id="template-footer">
        <th scope="row" colspan="2">Total productos</th>
        <td>10</td>
        <td>
            <button class="btn btn-danger btn-sm" id="vaciar-carrito">
                vaciar todo
            </button>
        </td>
        <td class="font-weight-bold">$ <span>5000</span></td>
      </template>

    <script src="{{url('js/carrito.js')}}"></script>
</body>
</html>