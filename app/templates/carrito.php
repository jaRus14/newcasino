


<?php ob_start()?>
	

	<br>
	<h1 class="centrar">CESTA</h1>

	<div id="cont">
	
	<?php
		if(!isset($_SESSION['id'])) {
			echo(' <div class="centrar">Para visualizar el carrito inicia sesion o  <a class="but" href="index.php?ctl=registro"> REGISTRATE </a></div>');
		} else {
			$total = 0;

			foreach ($_SESSION["cesta"] as $producto) :
				$total = $total + $producto["precio"]; 
			endforeach; 

			$cantidad = count($_SESSION["cesta"]);
			//totalCesta?¿
			echo('<div>CANTIDAD: ' . $cantidad . '</sup></div><br/>
					<table>
						<tr>
							<th>Ficha</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Eliminar de la cesta</th>
						</tr>');
				foreach ($_SESSION["cesta"] as $producto) :

					echo('<tr>
							<td>
								<a href="index.php?ctl=ver&id='. $producto['id'] .'"><img src="'.$producto['imagen'].'" width="200px"/></a>
							</td>
							<td>'.$producto["nombre"] . '</td>
							<td>'.$producto["precio"].' € </td>	
							<td><a class="eliminarDeCesta but" href="index.php?ctl=quitarCesta&pos='.$producto["id"].'">ELIMINAR</a></td>			
						</tr>');
				 endforeach;
				 echo '</table>';
	     		echo('<br/><div>TOTAL: '.$total.' €</div><br/>');

	     		if(count($_SESSION["cesta"]) > 0){
					 echo('
					 
						
					 <br/>
					 <a class="but" href="index.php?ctl=compraConfirmada"><div>COMPRAR</div></a>
					 <a class="but" href="index.php?ctl=quitarCesta"><div>VACIAR CARRITO</div></a>');
	     		}
		}
	?>
<br/>
<br/>
	</div>

<?php $contenido = ob_get_clean() ?>
<?php require_once __DIR__ . '\layout.php' ?>