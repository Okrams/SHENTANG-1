<?php
        $adentro=false;
        $ne=false;
        session_start();
        if(!isset($_SESSION["user"])){
          $adentro=false;
        }else{
          $adentro=true;
        }
        
      ?>
<!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      
      <!-- Menú de navegación-->
      <nav class="green">
        <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
        <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
          <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li class="active"><a href="#">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit">
                    <span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>

          </ul>
          <!-- Menu para dispositivos pequeños-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg" alt="">
                </div>
                <!--En caso de usuarios inscritos (Muestra datos del usuario)-->
                <!--<a href="#" >
                  <img src="Imagenes/2.jpg" class="circle">
                </a>
                <a href="">
                  <span class="name white-text">Eduardo</span>
                </a>-->
                <a href="">
                <a href="index.php" class="col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
                </a>
              </div>
            </li>
            <!-- Contenido del menu movil-->
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li class="active"><a href="#">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit2">
                    <span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>

          </ul>
        </div>
      </nav>
      <!--Termino del menú de navegacion-->
      <?php require("formularios.php"); ?>
      <!--Seccion 1-->
      <div class="section">
        <h3 class="center">Nuestros Espacios</h3>
        <div class="row">
          <div class="col l7 s10 offset-l3 offset-s1">
            <div class="nav-wrapper">
              <!-- <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>
      <!--Fin de seccion 1-->
      <div class="section container">
        <div>
          <img class="responsive-img" src="Imagenes/SERVICIOS/RENTA DE ESPACIOS.jpg" alt="">
          <img class="responsive-img" src="Imagenes/SERVICIOS/ESPACIOS EN RENTA.jpg" alt="">
          <img class="responsive-img" src="Imagenes/SERVICIOS/CONSULTORIO RENTA.jpg" alt="">
        </div>
        
      </div>
      <!--Seccion 2-->
      
      <!--Finaliza Seccion1-->


      <!--Bola flotante
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>-->


      <footer class="page-footer green">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contacto</h5>
                <ul>
                  <li>
                    <a>
                      <i class="material-icons black-text">call</i>
                    </a>
                    <span>(222) 2490429 o 2222177728</span>
                  </li>
                  <li>
                    <a>
                      <i class="material-icons black-text">email</i>
                    </a>
                    <span>centro.shentang.puebla@gmail.com</span>
                  </li>
                  <li>
                    <a href="#" >
                      <i class="material-icons black-text">add_location</i>
                    </a>
                    <span>TEPEYAHUALCO NO.37-1, COL. LA PAZ, PUEBLA PUE. CP.72160</span>
                  </li>
                </ul>
              </div>
              <!--<div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>-->
            </div>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2020 Shen Tang
            
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });

      </script>
      <script >

      </script>
    </body>
  </html>