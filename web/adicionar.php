<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registro</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   </head>
    <body background="images/fondo4.png">
      <!--barra de arriba-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php#">Mi Tiendita</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="adicionar.php">Registrate <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tiendas.php">Nuestras Tiendas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrito.php">Carrito</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href="https://www.instagram.com/camilobll/">
            <svg width="40" height="40" viewBox="0 0 46 50" class="bi bi-camera-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M23 3c11.028 0 20 8.972 20 20s-8.972 20-20 20S3 34.028 3 23 11.972 3 23 3m0-2C10.85 1 1 10.85 1 23s9.85 22 22 22 22-9.85 22-22S35.15 1 23 1z"/>
              <path fill="#5E6C89" d="M29.76 29.03v-7.373h-1.537c.152.48.23.975.23 1.49 0 .958-.243 1.838-.73 2.647-.485.807-1.146 1.447-1.98 1.918-.834.47-1.744.705-2.73.705-1.495 0-2.773-.514-3.835-1.543-1.062-1.027-1.593-2.27-1.593-3.726 0-.517.076-1.013.228-1.49H16.21v7.373c0 .2.065.37.2.5.13.14.296.2.494.2H29.07c.188 0 .352-.06.488-.2s.202-.3.202-.49zm-3.233-6.064c0-.94-.343-1.743-1.03-2.406-.686-.664-1.515-.996-2.486-.996-.96 0-1.78.332-2.47.996-.68.663-1.03 1.466-1.03 2.406 0 .942.35 1.743 1.03 2.407s1.51.996 2.48.996c.975 0 1.8-.34 2.49-1s1.03-1.47 1.03-2.41zm3.233-4.097v-1.88c0-.22-.076-.4-.23-.56-.15-.158-.336-.235-.556-.235h-1.98c-.22 0-.406.08-.558.233-.15.155-.228.34-.228.552v1.876c0 .22.076.404.228.556s.337.23.558.23h1.98c.22 0 .406-.078.557-.23.16-.15.23-.338.23-.558zm1.98-2.37v12.99c0 .61-.22 1.14-.66 1.58-.44.44-.967.66-1.582.66H16.502c-.614 0-1.142-.22-1.582-.66-.44-.44-.66-.97-.66-1.586V16.5c0-.614.22-1.142.66-1.582.44-.44.967-.66 1.582-.66h12.996c.615 0 1.14.22 1.582.66.44.44.66.967.66 1.58z"/>
            </svg>
          </a>
          </span>
        </div>
      </nav>
     <div class="container">
       <h1> Registrate</h1>

       <br>

    <!--Cuadros de ingreso-->
    <form action="adicionar.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name = "nombre" id="nombre" class="form-control" >
        </div>
        <div class="form-group col-md-6">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name = "apellido" id="apellido">
        </div>
      </div>
      <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" name = "telefono" id="telefono" placeholder="1234">
      </div>
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="text" class="form-control" name = "correo" id="correo" placeholder="Example@yahoo.com">
      </div>
      <input type="submit" class="btn btn-primary" value="Guardar" name="bguardar">
    </form>
    <br>
    <!--codigo para alertar o confirmar registro-->
    <?php
      $nombre   = "";
      $apellido = "";
      $telefono = "";
      $correo   = "";
      if(isset($_POST['bguardar'])){
        $nombre =$_POST ['nombre'];
        $apellido =$_POST ['apellido'];
        $telefono =$_POST ['telefono'];
        $correo =$_POST ['correo'];

        if ($nombre=="" || $apellido=="") {
          echo '<div class="alert alert-danger">Debes ingresar nombre y apellido</div>';
        }
        else {
          INCLUDE 'config.php';
          // escoger el id del ultimo cliente
          $valor_cliente = "SELECT id_cliente FROM cliente where id_cliente = (select max(id_cliente) from cliente)";
          foreach($pdo -> query($valor_cliente) as $row){ }
          $numero = $row['id_cliente']+1;
          //escoger un vendedor random
          $vendedor =rand(1, 30);
          if (!empty ($_POST)){
           //agregar datos de la persona
           $sql = "INSERT INTO cliente ( nombre, apellido, telefono,correo)
                   VALUES(:nombre,:apellido,:telefono,:correo)";
                $query = $pdo -> prepare($sql);
                $result = $query -> execute([
                  'nombre'=> $nombre,
                  'apellido'=>$apellido,
                  'telefono'=>$telefono,
                  'correo'=>$correo
                ]);
                //agregar datos de la factura
                if (!empty ($_POST))
                {
                  $factura = "INSERT INTO factura ( id_cliente, id_vendedor)
                              VALUES('$numero','$vendedor')";
                  $query = $pdo -> prepare($factura);
                  $result = $query -> execute([]);
                }
          }
          echo '<div class= "alert alert-success">Te has registrado</div>';
        }
      }
    ?>
    </div>
   </body>
 </html>
