
<h1>NEW CASINO, NEW WORLD!</h1>

<?php
    @session_start();
 ?>
<br>
<?php ob_start() ?>

<!--galeria imagenes-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../web/img/imagenesHome/sa.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../web/img/imagenesHome/casino2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../web/img/imagenesHome/bingo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--tabla winners-->
<BR>
<h2 class="text-center bg-black">LIDER</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Posicion</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fichas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>111500</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>25200</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird - COGE 2 COLUMNAS</td>
      <td>2545</td>
    </tr>
  </body>
</table>
<!--Tarjetas juegos-->
<div class="card-deck">
    <div class="card">
      <img src="../web/img/imagenesHome/ruleta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RULETA</h5>
        <p class="card-text">La ruleta es un juego de azar típico de los casinos, cuyo nombre viene del término francés roulette,
           que significa "ruedita" o "rueda pequeña". Su uso como elemento de juego de azar, aún en configuraciones distintas de la actual,
            no está documentado hasta bien entrada la Edad Media. Es de suponer que su referencia más antigua es la llamada Rueda de la Fortuna,
             de la que hay noticias a lo largo de toda la historia, prácticamente en todos los campos del saber humano. </p>
      </div>
    </div>
    <div class="card">
      <img src="../web/img/imagenesHome/traga.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TRAGAPERRAS</h5>
        <p class="card-text">Las máquinas tragamonedas, también denominadas máquinas tragaperras en España, son máquinas que a cambio de una 
          cantidad de dinero apostado dan un tiempo de juego y eventualmente un premio en efectivo.
          Las Programadas: en estas máquinas el premio depende de un programa interno en la máquina, de tal forma que al cabo de una secuencia 
          de jugadas la máquina ha de devolver una cantidad determinada de lo que se ha metido en ella. Este tipo de máquinas son habituales de
           los salones de juego y en algunos países también en bares o cafeterías.</p>
      </div>
    </div>
    <div class="card">
      <img src="../web/img/imagenesHome/juegos.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">MAS JUEGOS</h5>
        <p class="card-text">Los juegos de apuestas implican arriesgar una determinada cantidad de dinero o bienes materiales en la creencia 
          de que algo, como un juego, una contienda deportiva, etc., tendrá un resultado predecible. La cantidad apostada, en caso de acierto 
          se recupera aumentada a expensas de la pérdida de quienes no acertaron o se pasaron. </p>
       
      </div>
    </div>
  </div>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>
 