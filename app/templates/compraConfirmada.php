<?php ob_start()?>
<BR>  
<h1>COMPRA FINALIZADA</h1>
   
<?php echo '<div>' . $mensaje . '</div>'; ?>

<div>
	<p>¡Gracias, sus fichas aparecen en su cuenta en solo unos segundos.!</p>
</div>

<a href="index.php?ctl=inicio"><img src="../web/img/imagenesHome/sak.jpg" width="250px" /></a>

<br/>
<BR/>

<?php $contenido = ob_get_clean() ?>
<?php require_once __DIR__ . '.\layout.php' ?>