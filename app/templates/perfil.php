<?php
	session_start();
?>
		
 <?php ob_start() ?>

    <h2>PERFIL</h2>

<div id="menuVenta">
	<h3 style="margin-left: 20px;"><?php echo $params['perfil']['nombre']?> </h3>

	<div id="datos_perfil">
		<div>
			Nombre: <?php echo $params['perfil']['nombre']?> <br/>
			Apellido: <?php echo $params['perfil']['apellido']?> <br/>
			Email: <?php echo $params['perfil']['correo']?> <br/>
			Fichas: <?php echo $params['perfil']['fichas']?> <br/>
		</div>
		
<br/><br/><br/>
		<div id="editarPerfil" class="btn btn-primary">EDITAR</div>
		<br/><br/>
	</div>

	<div id="editar_perfil" style="display:none">
		<form action="index.php?ctl=editarUsuario" method="POST" enctype="multipart/form-data">
		<div class="form-row align-items-center">
		<div class="col-auto">
			<?php echo '<input class="form-control mb-3" type="hidden" name="id" value="'.$params['perfil']['id'].'">'?>
			<label>Nombre:</label> <?php echo "<input class='form-control mb-3'type='text' name='nombre' value='".$params['perfil']['nombre']."'/>" ?> 
			<label>Apellido:</label> <?php echo "<input class='form-control mb-3' type='text' name='apellido' value='".$params['perfil']['apellido']."'/>"?> 
			<label>Email:</label> <?php echo "<input class='form-control mb-3' type='text' name='correo' value='".$params['perfil']['correo']."'/>"?> 
			
			<label>Contraseña:</label> <input class='form-control mb-3' type='password' name='contrasenna' />
			
			
			
			</div>
				</div>

			<input class="inpu cbtn btn-primary" type="submit" id="but_guardar_per" value="Guardar" /><br><br>

			<input class="cbtn btn-primary bg-warning border border-warning" type="submit" id="volverPerfil" value="VOLVER"/>
		</form>
	</div>

</div>

    <script type="text/javascript">

         document.getElementById("editarPerfil").addEventListener("click", function(){
            document.getElementById("datos_perfil").style.display = "none";
            document.getElementById("editar_perfil").style.display = "block";
         });

         document.getElementById("volverPerfil").addEventListener("click", function(){
            document.getElementById("datos_perfil").style.display = "block";
            document.getElementById("editar_perfil").style.display = "none";
         });


    </script>


 <?php $contenido = ob_get_clean() ?>

 <?php require_once __DIR__ . '.\layout.php' ?>