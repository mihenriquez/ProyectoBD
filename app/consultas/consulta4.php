<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");



  #Se construye la consulta como un string
 	$query = "SELECT ComunasEnRegion.region
FROM RecursosAmbientales , ComunasEnRegion, Tramite
WHERE RecursosAmbientales.comuna = ComunasEnRegion.nombre_comuna
AND RecursosAmbientales.id_recurso_ambiental = Tramite.id_recurso_ambiental
UNION
SELECT ComunasEnRegion.region
FROM RecursosAmbientales , ComunasEnRegion, Determinado
WHERE RecursosAmbientales.comuna = ComunasEnRegion.nombre_comuna
AND RecursosAmbientales.id_recurso_ambiental = Determinado.id_recurso_ambiental
AND Determinado.estado = 'aprobado'

;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$vertederos = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Regiones</th>
    </tr>

    <?php
      foreach ($vertederos as $t) {
        echo "<tr><td>$t[0]</td></tr>";
    }
    ?>


  </table>

<?php include('../templates/footer.html'); ?>
