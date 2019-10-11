<?php include('templates/header.html');   ?>

<body>
  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-med" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">YO FISCALIZO: <span class="w3-hide-small">PROYECTOS</span> Y RECURSOS AMBIENTALES</span>
    </div>
  </div>


  <div class="w3-row w3-center w3-black w3-padding-16">
    <div class="w3-third w3-section">
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px" >Log in Socios</button>
    </div>
    <div class="w3-third w3-section">
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px" >Log in ONG</button>
    </div>
  </div>

  <div class="bgimg-3 w3-display-container w3-opacity-med" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">PROYECTOS</button>
    </div>
  </div>
  <div class="bgimg-3 w3-display-container w3-opacity-med" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">ONGs</button>
    </div>
  </div>
  <!-- Second Parallax Image with Portfolio Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide">CONSULTAS</span>
    </div>
  </div>


  <!-- Container (About Section) -->
  <div class="w3-row w3-center w3-withe w3-padding-16" id="about">
    <div class="w3-row w3-center w3-withe w3-padding-16">
      <div class="w3-third w3-section">
        <p><b>Centrales termoelectricas</b></p><br>
        <form align="center" action="consultas/consulta1.php" method="post">
          <input type="submit" value="Buscar">
        </form>
      </div>
      <div class="w3-third w3-section">
        <p><b>Vertederos RM</b></p><br>
        <form align="center" action="consultas/consulta2.php" method="post">
          <input type="submit" value="Buscar">
        </form>
      </div>
      <div class="w3-third w3-section">
        <p><b>Fechas</b></p><br>
        <form align="center" action="consultas/consulta3.php" method="post">
          Fecha Inicial:
          <input type="text" name="fecha_inferior">
          <br/>
          Fecha Final:
          <input type="text" name="fecha_superior">
          <br/><br/>
          <input type="submit" value="Buscar">
        </form>
      </div>
    </div>
  </div>

      <div class="w3-row w3-center w3-withe w3-padding-16" id="about">
        <div class="w3-row w3-center w3-withe w3-padding-16">
          <div class="w3-third w3-section">
            <p><b>Regiones con recursos vigentes</b></p><br>
            <form align="center" action="consultas/consulta4.php" method="post">
              <input type="submit" value="Buscar">
            </form>
          </div>
          <div class="w3-third w3-section">
            <p><b>Socios</b></p><br>
            <form align="center" action="consultas/consulta5.php" method="post">
              Nombre y Apellido Socio:
              <input type="text" name="nombre_socio">
              <br/><br/>
              <input type="submit" value="Buscar">
            </form>
          </div>
          <div class="w3-third w3-section">
            <p><b>Proyectos que mantienen operaciones</b></p><br>
            <form align="center" action="consultas/consulta6.php" method="post">
              <input type="submit" value="Buscar">
            </form>
          </div>
        </div>
      </div>


      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'"
      class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" action="/action_page.php">

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>



</body>
</html>
