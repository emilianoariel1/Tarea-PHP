<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h3> Tarea PHP Unidad 2 </h3> 

    <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>Apellido</th>
      <th scope='col'>Edad</th>
      <th scope='col'>Hobbie</th>
      <th scope='col'>Editor Codigo</th>
      <th scope='col'>SO</th>
    </tr>
  </thead>
  

    <?php

    $datos[0][0] = "Emiliano";
    $datos[0][1] = "Gurgone";
    $datos[0][2] = "24";
    $datos[0][3] = "Videojuegos";
    $datos[0][4] = "VS Code";
    $datos[0][5] = "Windows 10";
    $datos[1][0] = "Agustina";
    $datos[1][1] = "Tejeda";
    $datos[1][2] = "27";
    $datos[1][3] = "Motociclismo";
    $datos[1][4] = "VS Code";
    $datos[1][5] = "Windows 10";

    $longFilas = count($datos);
    $longColumnas = count($datos[0]);

    echo "<tbody>";
    
    
   for ($i=0; $i < $longFilas ; $i++) {
    echo "<tr>"; 
       for ($j=0; $j < $longColumnas ; $j++) { 
        echo "<td>";
        echo $datos[$i][$j];
        echo "</td>";
       }
       echo "</tr>";
   }
   
   
   echo "</tbody>";
   echo "</table>";
  






    ?>
</body>
</html>