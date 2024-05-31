<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>


<body>
    





<?php


    try {
        $conexion = new PDO('mysql:host=localhost;dbname=foro-et20.','root', '');
        


        $busca = $conexion->query("SELECT * FROM `temas`");
        


        foreach ($busca as $imagen)
        {  
            $archivo = $imagen['temas'].".php";
            echo '<li><a class="texto" href=" ' .  $archivo  .  '">'  .  $imagen['temas']  .  "</a></li>";
        }
    } 
    catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }




?>

</body>
</html>