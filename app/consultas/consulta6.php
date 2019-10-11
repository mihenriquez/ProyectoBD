<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


  #Se construye la consulta como un string
 	$query = "SELECT *
FROM Proyectos, RecursosAmbientales, Determinado
WHERE Proyectos.id_proyecto = RecursosAmbientales.id_proyecto
AND RecursosAmbientales.id_recurso_ambiental =  Determinado.id_recurso_ambiental
AND Determinado.estado = 'aprobado'
AND Proyectos.operativa = 'si'
;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$termoelectricas = $result -> fetchAll();
  ?>



  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Latitud</th>
      <th>longitud</th>
      <th>Comuna</th>
      <th>Fecha de Apertura</th>
      <th>Operativa</th>
      <th></th>
    </tr>

      <?php
        foreach ($termoelectricas as $t) {
          echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td><td>$t[4]</td><td>$t[5]</td><td>$t[6]</td></tr>";
      }
      ?>

  </table>

<?php include('../templates/footer.html'); ?>
