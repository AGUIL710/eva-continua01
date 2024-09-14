<?php
$producto1 = [
    'img' => 'recursos/img/card01.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' =>'last update 3 mains ago'
];

$producto2 = [
    'img' => 'recursos/img/card02.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' =>'last update 3 mains ago'
];

$producto3 = [
    'img' => 'recursos/img/card03.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' =>'last update 3 mains ago'

];

$producto4 = [
    'img' => 'recursos/img/card04.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' =>'last update 3 mains ago'
];

$producto5 = [
    'img' => 'recursos/img/card05.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' =>'last update 3 mains ago'
];

$producto6 = [
    'img' => 'recursos/img/card06.jpg',
    'nombre' => 'cart title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'mes' => 'last updated 3 mains ago'
];

$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-8">
  <a class="navbar-brand" href="#">
    <img src="recursos/img/logo.png" alt="" style="width: 45px;">
    Tiendas MAS
  </a>
  <section class="ml-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex">
          <!-- Ícono de Facebook y texto alineados horizontalmente -->
          <p class="mr-3 mb-0 d-flex align-items-center">
            <i class="fab fa-facebook mr-2"></i> Facebook
          </p>
          <!-- Ícono de WhatsApp y texto alineados horizontalmente -->
          <p class="mb-0 d-flex align-items-center">
            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
          </p>
        </div>
      </div>
    </div>
</section>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 1520px;" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="recursos/img/slide01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="recursos/img/slide02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="recursos/img/slide03.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>


<section class="border mt-1" style="height: 150px;">
    <h1 class="text-center mt-4">Nuestros Productos</h1>
</section>

<section ">
    <div class="container">
        <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-md-6 col-sm-12">
                    <div class="row no-gutters border mt-1 m-3" style="height: 180px;">
                        <div class="col-md-4 ">
                            <img src="<?php echo $producto['img'] ?> "class="card-img-top"  style="width: 180px;"  alt="...">
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['nombre'] ?> </h5>
                                <p class="card-text"><?php echo $producto['descripcion'] ?> </p>
                                <p class="card-text text-secondary"><?php echo $producto['mes'] ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
</section>

<footer>
    <section class="border mt-1 m-3 mx-auto bg-light" style="height: 120px; width: 1350px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <p><i class="fas fa-map-marker-alt"></i>Jr. Amazonas 120</p>
                  <p><i class="fas fa-phone"></i>Teléfono:123456789</p>
                </div>
                <div class="col-md-6 mx-auto">
                    <br>
                    <br>
                    <br>
                    <h5>Todos los derechos reservados 2014</h5>
                </div>
            </div>
        </div>
    </section>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>