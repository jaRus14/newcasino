<?php
    session_start();
 ?>

<?php ob_start() ?>


<table>

   <tr>

       <th>Nombre</th>

       <th>Apell</th>

       <th>Correo</th>

       <th>Fichas</th>

   </tr>    
   
   <?php foreach ($params['usuarios'] as $usuario) :?>    
   
   <tr>

       <td><a class="but" href="index.php?ctl=ver&id=<?php echo $usuario['id']?>"><?php echo $usuario['nombre'] ?></a></td>

       <td><?php echo $usuario['apellido']?></td>

       <td><?php echo $usuario['correo']?></td>

       <td><?php echo $usuario['fichas']?></td>

   </tr>
   
   <?php

    if($_SESSION['nombre'] == $usuario['nombre']) {

    echo "Vamos a jugar con estas fichas: " . $usuario['fichas'];

} ?>    

<?php endforeach; ?>

</table>

<?php echo $_SESSION['id']; ?>
<h3> Fecha: <?php echo $prueba['fecha'] ?> </h3>

<?php echo $prueba['mensaje'] ?>





<head>
         <title>TRAGAPERRAS</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="<?php echo '../web/css/'.Config::$mvc_vis_css?>" />
         <link rel="stylesheet" type="text/css" href="../web/css/estiloTraga.css">
</head>
	 
<!--Contenido-->

<h2>TRAGAPERRAS</h2>

<?php if(isset($_SESSION['id'])) : ?>

<?php foreach ($params['usuarios'] as $usuario) :?> 

<!--<div id="disponible"> 5000 </div>-->
	
<?php
if($_SESSION['nombre'] == $usuario['nombre']) {

echo "<div id='disponible'>" . $usuario['fichas'] . "</div>";

} ?> 
<?php endforeach; ?>

<?php else : ?>

<div id="disponible"> 5000 </div>

<?php endif; ?>

		<div id="contenedor">
			
			<img id="caballo" src="../web/img/imagenesTragaperras/caballo.jpg"/>

			<section id="mensaje">
				BIENVENIDO 
			</section>
			
			<section id="cajas">
			
				<div id="caja1" class="a1"></div>
				<div id="caja2" class="a1"></div>
				<div id="caja3" class="a1"></div>

			</section>

			<div id="divApuesta">
				<div id="apuesta">
					<P>TU APUESTA</P>
					<input class="fichas" type="text" min="0" max="20" value="0"> 
					
				</div>

				<section class="bg-danger rounded-pill" id="gira" onclick="juego()">JUGAR</section>
			</div>
				
		</div>

</div>


	<script type="text/javascript" src="../web/js/scriptTraga.js"></script>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>