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
                  <a class="nav-link" href="descprod.html"> Nuestros productos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contactanos.php">contactanos</a>
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
    
    if(isset($_SESSION['datos'])){
        $documento= ($_SESSION['datos']->documento);
        $fristname = ($_SESSION['datos'])->fristname;
        $lastname = ($_SESSION['datos'])->lastname;
        $city = ($_SESSION['datos'])->city;
        $celular = ($_SESSION['datos'])->celular;
        $email = ($_SESSION['datos'])->email;
        $comentario = ($_SESSION['datos'])->comentario;

    }
}
?>
  </div>

  <div class="container">
  <h3>Lista de clientes</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Ciudad</th>
                <th>celular</th>
                <th>email</th>
                <th>documento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'conexion.php';
            $res=$con->query("SELECT * FROM `registro`");  
            while ($info=$res->fetch_object()) {
                          
            ?>
            <tr>
                <td scope="row"><?php echo $info->fristname; ?></td>
                <td><?php echo $info->lastname; ?></td>
                <td><?php echo $info->city; ?></td>
                <td><?php echo $info->celular; ?></td>
                <td><?php echo $info->email; ?></td>
                <td><?php echo $info->documento; ?></td>
                <td><?php echo $info->comentario; ?></td>
                <td><a name="" id="" class="btn btn-danger" href="eliminar.php?documento=<?php echo $info->documento; ?>" role="button">eliminar</a></td>
            </tr>
            <?php
            };
            ?>
        </tbody>
    </table>
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
                <input type="number" name="documento" id="documento" placeholder="dejanos tu documento" class="form-control" value="<?php echo@$documento;?>" >
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input type="textarea" name="comentario" id="comentario" placeholder="comentario" class="form-control" value="<?php echo@$comentario;?>">
            </div>
        </div>

        <div>
            <button name="accion" value="guardar" type="submit" class="btn btn-success"> registrar </button>
            <button name="accion" value="consultar" type="submit" class="btn btn-warning">Consultar</button>
            <button name="accion" value="actualizar" type="submit" class="btn btn-info">Actualizar</button>
        </div>
    </form>
    
</div>
</body>
</html>