<?php
	@session_start();
?>
		
<?php ob_start() ?>

<br/>
<h1 class="centrar">CONTACTA CON NOSOTROS</h1>

<div class="centrar">

</div>
<br/>
<?php if (empty($_SESSION['id'])): ?>

<div>	

	<div class="centrar form-row align-items-center">
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Nombre</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Apellido</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Tu mensaje</label>
				<textarea type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""></textarea>
			</div>
			
			
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</div>

<?php else: ?>

<div>	

	<div class="centrar form-row align-items-center">
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Tu mensaje</label>
				<textarea type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""></textarea>
			</div>
			
			
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</div>

<?php endif; ?>
<br/>



 <?php $contenido = ob_get_clean() ?>

 <?php require_once __DIR__ . '.\layout.php' ?>



