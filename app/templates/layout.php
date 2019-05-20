<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo '../web/css/'.Config::$mvc_vis_css?>" />
    
    <title>NEW CASINO</title>
  </head>

  <body>

<div class="container">
  <!-- Content here -->
  <img src="../web/img/imagenesHome/casin.jpg" class="img-fluid" alt="Responsive image">

    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:100%">
  <a class="navbar-brand" href="index.php?ctl=inicio">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?ctl=ruleta">Ruleta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ctl=tragaperras">Tragaperras</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?ctl=contacto">Contacto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link bg-danger rounded-pill" href="index.php?ctl=listarFichas">COMPRAR FICHAS <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  <li class="nav-item">
    <?php
            
            if(isset($_SESSION['nombre'])) {

                echo (' <div id="sesionIniciada" class="mueve"> 
                            <div class="linea">
                           
                                <a href="index.php?ctl=logout">
                                    <img class="linea" id="icon_logout" src="../web/img/imagenesHome/adios.jpg" width="30" heigth=30"/>
                                </a>
                    
                                <div class="linea">
                                <a id="bot_perfil" class="linea" href="index.php?ctl=usuario&id='. $_SESSION['id'] .'">
                                    <div class="linea cucu text-white">'.$_SESSION['nombre'].'</div>
                          
                                </a>
                    </div>
                  </div>'
            );

            } else {
              echo ('
              <div class="mueve">
                <div>
                  <form action="index.php?ctl=login" method="POST">
                    <div class="form-row align-items-center">
                      <div class="col-auto">
                          <input type="text" class="form-control mb-2" placeholder="Email" name="correo">	
                      </div>
                      <div class="col-auto">
                          <input class="form-control mb-2" type="password" placeholder="Contraseña" name="contrasenna">
                      </div>
                      <div class="col-auto">
                          <input class="btn btn-primary mb-2" type="submit" id="but_login" value="Login"/>
                    </div>
                  </form>
                </div>
              </div>'
            );
            }
        ?>
</li>

        <a class="nav-link" href="index.php?ctl=carrito"><img class="car" src="../web/img/imagenesHome/carrito.png" width="50" heigth="50"></a>
  </div>
</nav>


<!-- INICIO CONTENIDO -->
  <div id="contenido">
        <?php echo $contenido ?>
  </div>






<!-- Footer -->
  <br><br>
  <hr>
  <br>
  <div class="footer-copyright text-center py-3">
              <a href="https://www.facebook.com"><img src="img/imagenesHome/facebook.png" width="50px"/></a>                 
              <a href="https://twitter.com/?lang=es"><img src="img/imagenesHome/twiter.png" width="50px"/></a>      
              <a href="https://www.instagram.com/?hl=es"><img src="img/imagenesHome/instagram.png" width="50px"/></a>
        
            <br>
            <a href="https://mdbootstrap.com/education/bootstrap/" style="color:black"> casinosEspaña.com</a>
            <br>
            <br>
            <a class="copy text-center py-3">Derechos reservados por copyrigth - 2019 © </a> <br>
            <a class="bg-danger text-white" href="index.php?ctl=listarFichas">COMPRAR FICHAS</a>
  </div>
  <br><br>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



