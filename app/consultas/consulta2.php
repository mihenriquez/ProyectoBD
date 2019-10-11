<?php include('../templates/header.html');   ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se construye la consulta como un string
 	$query = "SELECT *
FROM Proyectos , ComunasEnRegion, Vertedero
WHERE Proyectos.nombre_comuna = ComunasEnRegion.nombre_comuna
AND Proyectos.id_proyecto = Vertedero.id_proyecto
AND ComunasEnRegion.region = 'Metropolitana de Santiago'
;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$vertederos = $result -> fetchAll();
  ?>

  <div class="bgimg-5 w3-display-container w3-opacity-med" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">VERTEDEROS EN RM</span>
    </div>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Latitud</th>
      <th>longitud</th>
      <th>Comuna</th>
      <th>Fecha de Apertura</th>
      <th>Operativa</th>
    </tr>

    <?php
      foreach ($vertederos as $t) {
        echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td><td>$t[4]</td><td>$t[5]</td><td>$t[6]</td></tr>";
    }
    ?>


  </table>

<?php include('../templates/footer.html'); ?>
