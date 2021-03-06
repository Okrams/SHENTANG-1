<?php
        $adentro=false;
        $ne=false;
        session_start();
        if(!isset($_SESSION["user"])){
          $adentro=false;
        }else{
          $adentro=true;
        }
        require("conexiondb.php");
        $sql="select * from servicios";
          /* preparar los metodos */
          $resultado=$base->prepare($sql);
          $resultado->execute();
          $ban=true;
      ?>
<!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      <nav class="green">
        <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu normal-->
          <ul class="right hide-on-med-and-down">
            
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li class="active"><a href="#">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit">
                    <span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Servicios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>
          </ul>
          <!-- Menu movil-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg" alt="">
                </div>
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
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li class="active"><a href="#">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit2">
                    <span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Servicios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop2">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>
            <!--opcion 2--><!--
            <li><a href="#">Enlace1</a></li>
            <li><a href="#">Enlace2</a></li>
            <li><a href="#">Enlace3</a></li>
          </ul>-->
          <!--Menu del dropdown-->
          
        </div>
      </nav>
      <!-- din de la barra de navegacion -->
      <!-- iniciar con las consultas -->
      <div class="section container ">
      <div class="divider"></div>
        <div class="row">
                <?php require("formularios.php");  
                while($ban==true){
                  if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
                    $nombre=$registro->nombre;
                    $info=$registro->contenido;
              ?>
          <div class="col s4 ">         
          <div class="card">
            <div class="card-image  waves-block waves-light">
              <img class="activator" src="Imagenes/SERVDISP/<?php echo $nombre;?>.jpg">
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              
            </div>
            <div class="card-action center-align">
              <a class="modal-trigger black-text" href="#<?php echo $nombre;?>">VER</a>
            </div>
          </div>
          </div>

          <div id="<?php echo $nombre;?>" class="modal">
            <div class="modal-content">
              <h4><?php echo $nombre;?></h4>
              <div class="section container col s6" >
                
              </div>
              
              <p><?php echo $info;?></p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat green">CERRAR</a>
            </div>
          </div>
              <?php
              }else{
                $ban=false;
              }
              }

                $base=NULL;
            ?>

        </div>
        <div class="divider"></div>
        
        

              <!-- <img class="responsive-img" src="Imagenes/SERVICIOS/SERVICIOS.jpg" alt=""> -->
      </div>
      
      
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
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.slider');
          var instances = M.Slider.init(elems,{
            interval:3000
          });
        });
        
      </script>
    </body>
  </html>