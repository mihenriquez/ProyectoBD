<?php include('../templates/header.html');   ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


  #Se construye la consulta como un string
 	$query = "SELECT * FROM Proyectos , Central WHERE Proyectos.id_proyecto = Central.id_proyecto  AND Central.tipo_generacion = 'termoelectrica';";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$termoelectricas = $result -> fetchAll();
  ?>

  <div class="bgimg-4 w3-display-container w3-opacity-med" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">TERMOELÉCTRICAS</span>
    </div>
  </div>



  <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
      <th>ID</th>
      <th>Nombre</th>
      <th>Latitud</th>
      <th>longitud</th>
      <th>Comuna</th>
      <th>Fecha de Apertura</th>
      <th>Operativa</th>
      </tr>
    <thead>

      <?php
        foreach ($termoelectricas as $t) {
          echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td><td>$t[4]</td><td>$t[5]</td><td>$t[6]</td></tr>";
      }
      ?>

  </table>

<?php include('../templates/footer.html'); ?>
