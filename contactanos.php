<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Contactanos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" data-wow-delay="0.1s">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apple" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <circle cx="12" cy="14" r="7" />
          <path d="M12 11v-6a2 2 0 0 1 2 -2h2v1a2 2 0 0 1 -2 2h-2" />
          <path d="M10 10.5c1.333 .667 2.667 .667 4 0" />
          </svg>
        Plaza en casa
      </a>
    <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                     <a class="nav-link" href="productos.html"> Tienda</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="descprod.html"> Nuestros productos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contactanos.php">contactanos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="crud.php">crud</a>
              </li>
          </ul>
    </div>
  </div>
  </nav> 
    <div class="container">
    <?php
if(isset($_SESSION['mensaje'])){
    echo ($_SESSION['mensaje']);
    unset($_SESSION['mensaje']);
    
}



?>
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="about-img position-relative overflow-hidden p-5 pe-0">
                  <img class="img-fluid w-100" src="img/frutas.jpg">
              </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              <h1 class="display-5 mb-4">Regalanos tus datos</h1>
              <p class="mb-4">Con la finalidad de que estemos mas cerca, te invitamos a llenar este formulario y asi tener un contacto directo contigo, solo dejanos: </p>
              <p><i class="fa fa-check text-primary me-3"></i>Tus datos</p>
              <p><i class="fa fa-check text-primary me-3"></i>Lo que te gustaria tener</p>
              <p><i class="fa fa-check text-primary me-3"></i>Numero de contacto</p>
          </div>
      </div>
  </div>
</div>
<div class="container">
    <form class="mb-2" method="POST" action="guardar.php">
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="firstname" id="firstname" placeholder="Nombre" class="form-control" value="<?php echo@$fristname;?>">
            </div>
            <div class="col">
                <input type="text" name="lastname" id="lastname" placeholder="Apellidos" class="form-control" value="<?php echo@$lastname;?>">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="city" id="city" placeholder="Ciudad" class="form-control" value="<?php echo@$city;?>">
            </div>
            <div class="col">
                <input type="text" name="celular" id="celular" placeholder="Celular" class="form-control" value="<?php echo@$celular;?>">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo@$email;?>">
            </div>
            <div class="col">
                <input type="textarea" name="documento" id="documento" placeholder="dejanos tu documento" class="form-control" value="<?php echo@$documento;?>" >
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input type="textarea" name="comentario" id="comentario" placeholder="comentario" class="form-control" value="<?php echo@$comentario;?>">
            </div>
        </div>
        <div>
            <button name="accion" value="guardar" type="submit" class="btn btn-success"> registrar </button>
        </div>
    </form>
</div>
</div>

<div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
              <a class="navbar-brand" href="index.html">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-apple" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="14" r="7" />
                <path d="M12 11v-6a2 2 0 0 1 2 -2h2v1a2 2 0 0 1 -2 2h-2" />
                <path d="M10 10.5c1.333 .667 2.667 .667 4 0" />
                </svg>Plaza en casa
            </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-dark mb-4">Encuentranos</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i>Bogot??, Colombia</p>
                <p><i class="fa fa-phone-alt me-3"></i>+57  320 886 1324</p>
                <p><i class="fa fa-envelope me-3"></i>lgamboa2@ibero.edu.co</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-dark mb-4">Mapa del sitio</h4>
                <a class="btn btn-link" href="index.html">Nosotros</a>
                <a class="btn btn-link" href="descprod.html">Nuestros productos</a>
                <a class="btn btn-link" href="">registrese</a> 
            </div>
            
        </div>
    </div>
</div>
</body>
</html>

