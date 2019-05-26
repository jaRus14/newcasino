<?php
	session_start();
?>

<?php ob_start() ?>
<h2>COMPRAR FICHAS</h2>
    <?php foreach ($params['fichas'] as $ficha) :?>
     
        <td><a class="but" href="index.php?ctl=ver&id=<?php echo $ficha['id']?>"><?php echo $ficha['nombre'] ?></a></td>
        <td><?php echo $ficha['precio']. '€'?></td>
        <td><img src='<?php echo $ficha['imagen']?>' width="300px"/></td>

    <?php endforeach; ?>
    
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>


 
