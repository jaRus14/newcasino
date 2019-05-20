<?php
	session_start();
?>
		
<?php ob_start() ?>

<br/>
		<div class="centrar form-row align-items-center">

		<h1>REGISTRO NUEVO USUARIO</h1>

		<a href="index.php?ctl=inicio"><img src="../web/img/imagenesHome/sak.jpg" width="250px" /></a>


			<form action="index.php?ctl=insertarUsuario" method="POST" enctype="multipart/form-data">
				<div class="form-row align-items-center">
					<div class="col-auto">
						<label for="exampleInputEmail1">Nombre</label>
						<input type="text" name='nombre' value='' class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Apellido</label>
					<input type="text" name='apellido' value='' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" name='correo' value='' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					<small id="emailHelp" class="form-text text-muted">Introduzca un correo electronico valido</small>
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1">Contraseña</label>
					<input type="password" name='contrasenna' value='' class="form-control" id="exampleInputPassword1" placeholder="">
					<small id="emailHelp" class="form-text text-muted">Mínimo 5 caracteres</small>
				</div>

				<input type="hidden" name="fichas" value="1000"/>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	<br/>

 <?php $contenido = ob_get_clean() ?>

 <?php require_once __DIR__ . '.\layout.php' ?>



