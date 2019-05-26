
<?php
    session_start();
 ?>

<?php ob_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>RULETA</title>
	<link rel="stylesheet" type="text/css" href="../web/css/estiloRuleta.css">
</head>
<body>
<h2>RULETA DE LA SUERTE</h2>
<div>
	<div id="fichas">Fichas: 500</div>
	<div class="vara"></div>
	<img src="../web/img/imagenesRuleta/imagen.png" id="ruleta">
</div>

<script src="../web/js/scriptRuleta.js"></script>

</body>
</html>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>