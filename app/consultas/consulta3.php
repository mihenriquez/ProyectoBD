<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario

  $inferior = date('YYYY-MM-DD', strtotime["fecha_inferior"]);
  echo $inferior;

  $superior = date('YYYY-MM-DD', strtotime["fecha_superior"]);
  echo $superior;

  #Se construye la consulta como un string
 	$query = "SELECT RecursosAmbientales.id_recurso_ambiental,  RecursosAmbientales.nombre_recurso, RecursosAmbientales.causa_contaminante,  RecursosAmbientales.area_influencia, RecursosAmbientales.descripcion, RecursosAmbientales.fecha_realizacion, RecursosAmbientales.id_proyecto
FROM RecursosAmbientales, Mina
WHERE RecursosAmbientales.id_proyecto = Mina.id_proyecto
AND RecursosAmbientales.fecha_realizacion < $superior
AND RecursosAmbientales.fecha_realizacion > $inferior

;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$vertederos = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>ID Recurso</th>
      <th>Nombre</th>
      <th>Causa Contaminante</th>
      <th>Area de Influencia</th>
      <th>Descripcion</th>
      <th>Fecha Realizacion</th>
      <th>ID Proyecto</th>
    </tr>

    <?php
      foreach ($vertederos as $t) {
        echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td><td>$t[4]</td><td>$t[5]</td><td>$t[6]</td></tr>";
    }
    ?>


  </table>

<?php include('../templates/footer.html'); ?>
