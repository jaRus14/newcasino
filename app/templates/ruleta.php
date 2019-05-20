<?php
    session_start();
 ?>

<?php ob_start() ?>

<head>
         <title>RULETA</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="<?php echo '../web/css/'.Config::$mvc_vis_css?>" />
         <link rel="stylesheet" type="text/css" href="../web/css/estiloRuleta.css">
     </head>
<br>
    <h1>RULETA</h1>
    <div id="conte">

            <div>
                <div id="dinero"><?php echo $params['ficha']['fichas']?> </div>
                <div class="vara"> </div>
                <!--<div class="bola"> </div>-->
                <img src="../web/img/imagenesRuleta/imagenruleta.png" id="ruleta" >
                
            </div>
            <div id="tablero">
                <img src="../web/img/imagenesRuleta/tablero.jpeg" width="35%" >  
                
                <div id="cantidadFichas">
             
                    <label>TU APUESTA</label><br>
                    <select>
                        <option value="">0 Fichas</option>
                        <option value="10">10 Fichas</option>
                        <option value="20">20 Fichas</option>
                        <option value="50">50 Fichas</option>
                        <option value="100">100 Fichas</option>
                        <option value="500">500 Fichas</option>
                    </select>
                </div>


                <div id="opciones">

                    <div>
                        <label>Numero:</label>
                        <input type="text" value="" name="numero"/>
                    </div>
                    <div>
                        <input type="checkbox" value="par" name="parimpar"/> Par
                        <input type="checkbox" value="impar" name="parimpar"/> Impar
                    </div>
                    <div>
                        <label>Color:</label>
                        <input type="checkbox" value="rojo" name="color"/> Rojo
                        <input type="checkbox" value="negro" name="color"/> Negro
                    </div>
                    <label>Docenas</label>
                    <div>
                        <input type="checkbox" value="primeros12" name="12"/> Primeros 12 <br>
                        <input type="checkbox" value="segundos12" name="12"/> Segundos 12 <br>
                        <input type="checkbox" value="terceros12" name="12"/> Terceros 12
                    </div>

                </div>
            </div>

                <div>
                    <div id="ficha10" class="fichas">10</div>
                    <div id="ficha20" class="fichas">20</div>
                    <div id="ficha50" class="fichas">50</div>
                    <div id="ficha100" class="fichas">100</div>
                    <div id="ficha200" class="fichas">200</div>
                </div> 
    </div>



    <script src="../web/js/scriptRuleta.js"></script>


    <?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>

