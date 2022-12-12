<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendedores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/prueba.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">LOGO</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./vendedores.php">Vendedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./cuenta.html">Tu cuenta</a>
            </li>
          </ul>
          <div class="row">
            <div class="col">
              <button class="btn"><i class="fas fa-user-circle"></i></button>
            </div>
            <div id="cart" class="col cart position-relative" data-totalitems="0">
              <i class="fas fa-shopping-cart"></i>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container contenedor-vendedores justify-content-center align-items-center">
      <div class="card">
        <h5 class="card-header">Crear una nueva venta</h5>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="column">
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <Label>Nombre producto:</Label>
                  <input type="text" class="form-control" id="nombreProducto" required>
                </div>
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <Label>Descripción producto:</Label>
                  <input type="text" class="form-control" id="descProducto" required>
                </div>
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <Label>Categoria producto:</Label>
                  <input type="text" class="form-control" id="categoriaProducto">
                </div>
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <Label>Precio producto:</Label>
                  <input type="text" class="form-control" id="precioProducto" required>
                </div>
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <label>Imagen: </label>
                  <form>
                    <input class="form-control" type="file" name="photograph" id="photo" required="true" />
                  </form>
                </div>
                <div class="col-12 col-md-6 col-sm-1 mt-4">
                  <label>URL IMAGEN</label>
                  <input type="text" class="form-control" id="urlImagen">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="column">
                <div class="col">
                  <h2>Preview de tu producto</h2>
                </div>
                <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 holder">
                        <img id="imgPreview" src="#" alt="Escoge una imagen" class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body h-100" style="background-color: #3c6e71;">
                          <h5 class="card-title" id="nombrePreview"></h5>
                          <p class="card-text" id="descPreview"></p>
                          <div class="page-wrapper">
                            <div class="row justify-content-around py-2 text-start">
                              <div class="col"><i class="far fa-eye"></i></div>
                              <div class="col text-start">
                                <p class="h5" id="precioPreview">$</p>
                              </div>
                              <div class="col text-end"><button id="addtocart">
                                  <i class="fas fa-cart-plus"></i>
                                  <span class="cart-item"></span>
                                </button></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col m-5 text-center">
                  <label>Enviar datos</label>
                  <button class="btn btn-success w-100" id="crearProducto">CREAR PRODUCTO</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./js/preview.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>