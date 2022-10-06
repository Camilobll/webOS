<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Teindas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
 <body background="images/fondo4.png">

   <!-- barra de navegación-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php">Mi Tiendita</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="adicionar.php">Registrate</a>
         </li>
         <li class="nav-item active">
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
   <br>
   <div class="container">
     <div class="row">
       <div class="col-15">
         <h1 class="display-2"> Nuestras Tiendas</h1>
       </div>
       <div class="col">
         <br>
         <div class="d-flex justify-content-end">
           <div class="badge badge-primary text-wrap" style="width: 7rem;"> Usuario actual:
             <?php
               INCLUDE 'config.php';
               $tienda1 = $pdo -> query ("SELECT nombre FROM cliente where id_cliente = (select max(id_cliente) from cliente)");
                 WHILE ($row =$tienda1 ->fetch())
                   {//<div class="text-center">
                     echo $row['nombre'];
                   }
             ?>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Mapa de google  -->
   <div class="container">
    <div class="row">
      <div class="col">
        <div id="mapa-tienda" class="list-group">
        <form action="tiendas.php" method="post">
          <label for="mapa1"></label>
            <input type="submit" value="<?php
              INCLUDE 'config.php';
                $tienda1 = $pdo -> query ("SELECT nombre FROM tienda
                                          where id_tienda = ('1')");
                  WHILE ($row =$tienda1 ->fetch())
                  {//<div class="text-center">
                    echo $row['nombre'];
                  }
                  ?>" class="btn btn-light btn-lg btn-block" name = "mapa1" id="mapa1">

          <label for="mapa2"></label>
            <input type="submit" value="<?php
                INCLUDE 'config.php';
                  $tienda1 = $pdo -> query ("SELECT nombre FROM tienda
                                            where id_tienda = ('2')");
                    WHILE ($row =$tienda1 ->fetch())
                    {//<div class="text-center">
                      echo $row['nombre'];
                    }
                    ?>" class="btn btn-light btn-lg btn-block" name = "mapa2" id="mapa2">

          <label for="mapa3"></label>
            <input type="submit" value="<?php
                INCLUDE 'config.php';
                $tienda1 = $pdo -> query ("SELECT nombre FROM tienda
                                          where id_tienda = ('3')");
                  WHILE ($row =$tienda1 ->fetch())
                    {//<div class="text-center">
                      echo $row['nombre'];
                    }
            ?>" class="btn btn-light btn-lg btn-block" name = "mapa3" id="mapa3">

            <label for="mapa4"></label>
              <input type="submit" value="<?php
                INCLUDE 'config.php';
                  $tienda1 = $pdo -> query ("SELECT nombre FROM tienda
                                            where id_tienda = ('4')");
                    WHILE ($row =$tienda1 ->fetch())
                    {//<div class="text-center">
                      echo $row['nombre'];
                    }
              ?>" class="btn btn-light btn-lg btn-block" name = "mapa4" id="mapa4">

              <label for="mapa5"></label>
                <input type="submit" value="<?php
                  INCLUDE 'config.php';
                    $tienda1 = $pdo -> query ("SELECT nombre FROM tienda
                                              where id_tienda = ('5')");
                      WHILE ($row =$tienda1 ->fetch())
                      {//<div class="text-center">
                        echo $row['nombre'];
                      }
                ?>" class="btn btn-light btn-lg btn-block" name = "mapa5" id="mapa5">
        </form>
        </div>
      </div>
      <div class="col">
        <div>
          <!-- Mapa de google  -->
          <?php
            if(isset($_POST['mapa1'])){
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.2409303572526!2d-74.14464180896238!3d4.631610007583991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d677538f229%3A0x643d541f3d73cdb5!2sCamino%20de%20las%20Am%C3%A9ricas!5e0!3m2!1ses-419!2sco!4v1605582526653!5m2!1ses-419!2sco"
             width="600"
             height="450"
             frameborder="0"
             style="border:0;"
             allowfullscreen=""
             aria-hidden="false"
             tabindex="0">
             </iframe>';
            }
            elseif(isset($_POST['mapa2'])){
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2194.64714088089!2d-74.04106589065321!3d4.687761251219244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aa2e45a24d3%3A0xae41878f15164f68!2sINOAR%20Bogot%C3%A1%20Santa%20Ana!5e0!3m2!1ses-419!2sco!4v1605631687770!5m2!1ses-419!2sco"
             width="600"
             height="450"
             frameborder="0"
             style="border:0;"
             allowfullscreen=""
             aria-hidden="false"
             tabindex="0">
             </iframe>';
            }
            elseif(isset($_POST['mapa3'])){
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4864.8949616386335!2d-74.06489298437191!3d4.645738568245032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a3838e9a5c7%3A0xd48647a667ed9eff!2sTheatron%20discoteca!5e0!3m2!1ses-419!2sco!4v1605632054435!5m2!1ses-419!2sco"
             width="600"
             height="450"
             frameborder="0"
             style="border:0;"
             allowfullscreen=""
             aria-hidden="false"
             tabindex="0">
             </iframe>';
            }
            elseif(isset($_POST['mapa4'])){
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.2409303572526!2d-74.14464180896238!3d4.631610007583991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d677538f229%3A0x643d541f3d73cdb5!2sCamino%20de%20las%20Am%C3%A9ricas!5e0!3m2!1ses-419!2sco!4v1605582526653!5m2!1ses-419!2sco"
             width="600"
             height="450"
             frameborder="0"
             style="border:0;"
             allowfullscreen=""
             aria-hidden="false"
             tabindex="0">
             </iframe>';
            }
            elseif(isset($_POST['mapa5'])){
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.2409303572526!2d-74.14464180896238!3d4.631610007583991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d677538f229%3A0x643d541f3d73cdb5!2sCamino%20de%20las%20Am%C3%A9ricas!5e0!3m2!1ses-419!2sco!4v1605582526653!5m2!1ses-419!2sco"
             width="600"
             height="450"
             frameborder="0"
             style="border:0;"
             allowfullscreen=""
             aria-hidden="false"
             tabindex="0">
             </iframe>';
            }
            else {
              echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51641057088!2d-74.24789120192894!3d4.64828371785667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1605631476421!5m2!1ses-419!2sco"
                width="600"
                height="450"
                frameborder="0"
                style="border:0;"
                allowfullscreen=""
                aria-hidden="false" t
                abindex="0">
                </iframe>';
            }
           ?>
            <div id="mapa1">

            </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>
