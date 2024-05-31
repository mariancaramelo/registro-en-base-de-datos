<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet"href="estilo.css">
    
   </head>
  <body>
    <h1>manualidades</h1>
   <form  method="post"  action="manualidades.php">
  <input type="text" name="nombre" class="r"><br>
  <input type="text" name="comentario" class="b"> <br><input type="submit" class="c">
   </form>

  <?php
 
 
 try {
     $conexion = new PDO('mysql:host=localhost;dbname=foro-et20.','root', '');
     
    
   
      if(!empty($_POST)){
        $nombre=$_POST['nombre'];
        $comentario=$_POST['comentario'];
        $fecha=date("d");
        echo "<p>",$nombre,"<br>",$comentario,"<br>",$fecha,"<br>","</p>";

        $conexion->query("INSERT INTO `manualidades` (`id`, `nickname`, `comentario`, `fecha`) VALUES (NULL, '$nombre', '$comentario',  '$fecha');");
        // esta condicion pregunta si $_POST esta definida, si esta definida quiere decir que el formulario se ha completado por lo 
        // tanto podemos usar los datos para realizar el insert.
        // aquí iría todo el código relacionado al insert.
        
        }
        $busca = $conexion->query("SELECT * FROM `manualidades`");
        


        foreach ($busca as $imagen)
        {  
            echo "<p>",$imagen['nickname'],"<br>",$imagen['comentario'],"<br>",$imagen['fecha'],"<br>","</p>";
        }
   
     //INSERT INTO `musica` (`id`, `nickname`, `comentario`, `fecha`) VALUES (NULL, 'ok', 'ddddddd', '');


    
     } 
    catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
      }




  ?>
  </body>
</html>