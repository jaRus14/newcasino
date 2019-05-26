<?php
	session_start();
?>

<?php ob_start() ?>

<br/><br>
<h1 class="centrar"><?php echo $params['nombre'] ?></h1>
<br>
<table>
    <tr>
        
        <?php echo $ficha['precio']. '€'?></td>
    
       
        <img src='<?php echo $ficha['imagen']?>' width="200px"/></td>
    
   
        
            
        <form id="anadirCesta" action="index.php?ctl=anadirCesta" method="POST" >
                <?php echo '<input type="hidden" name="idFicha" value="'.$params['id'].'">'?>
                <?php $add = true;
                if(isset($_SESSION['nombre'])){
	                foreach ($_SESSION['cesta'] as $value) {
	                    if($value["id"] == $params['id']){
	                        $add = false;
	                    }
	                }
	            }	
                if($add){
                    echo('<input class="inpu btn-primary but" type="submit" value="Añadir">');
               } else{
                    echo('<input class="inpu btn-primary" type="submit" value="Cesta">');
               }

               ?>
            </form>
        </td>
 </tr>
</table>
<br>

<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>