<!DOCTYPE html>
<html lang="es">

<head>
  <title>Agenda</title>
  <?php
    include("./meta-tags.html");
    include("./meta-links.html");
  ?>
</head>

<body>
  <?php
    include("./navbar.html");
  ?>

  <div class="text-center content" id="miercoles">
    <h1 class="pre">
      Agenda
    </h1>
    <div>
      <div class="container py-2">
        <div class="column">
          <div class="mx-auto mt-2 card" >

            <div class="card-header fecha-evento" style="width: 100%;" >
              Miercoles, 24 de abril de 2024
            </div>

            <div class="card-body" style="width: 100%;">
              <center><b style="color: #172d3b;">8:00 - 8:30</center></b>
                
              <b>Adriana Patricia Villegas Quiceno</b><br>
              Universidad Cooperativa de Colombia Medellín. Decana Facultad de Ingeniería Medellín <br>
              <b><i>Palabras de bienvenida</i></b>
              <br>
              <br>
              <b>Msc. Eder Alonso Acevedo Marin</b><br>
              Universidad Cooperativa de Colombia Medellín. Coodinador Ingeniería de Software Facultad de Ingeniería <br>
              <b><i>Instalación del evento</i></b>
            </div>
          </div>

          <div class="mx-auto mt-2">
            <div class="card" style="width: 100%">
              <div class="card-body">
                <span class="conf"><b>CONFERENCIA</b></span><br>
                8:30 a 9:30<br>
                <b>Jose Castro</b><br>
                Soluciones de Software INDTECH SAS<br>
                <b><i>Ciberseguridad En casa, en la U y en la Oficina</i></b><br>            
              </div>
            </div>
          </div>

          <div class="mx-auto mt-2">
            <div class="card" style="width: 100%">
              <div class="card-body">
                <span class="conf"><b>CONFERENCIA</b></span><br>
                9:30 a 10:30<br>
                <b>Sara</b><br>
                México<br>
                <b><i>Por Definir</i></b><br>
              </div>
            </div>
          </div>

          <div class="alert mx-auto mt-2 descanso" role="alert">
            10:30 a 11:30 RECESO  (Coffee break)
          </div>

          <div class="mx-auto mt-n2" id="jueves">
            <div class="card" style="width: 100%">
              <div class="card-body">
                <span class="conf"><b>CONFERENCIA </b></span><br>
                11:30 a 12:30 <br>
                <b>Pedro Alberti</b><br>
                Chile<br>
                <b><i>Por Definir</i></b><br>            
              </div>
            </div>
          </div>

          <div class="mx-auto mt-2 card" >
            <div class="card-header fecha-evento" style="width: 100%;">
                Jueves, 25 de abril de 2024
            </div>

            <div class="card-body">
              <span class="conf"><b>CONFERENCIA </b></span><br>
              8:30 a 9:30 <br>
              <b>Ronald Romani</b><br>
              Perú<br>
              <b><i>Por Definir</i></b><br>            
            </div>
          </div>

          <div class="mx-auto mt-2">
            <div class="card" style="width: 100%">
              <div class="card-body">
                <span class="conf"><b>CONFERENCIA</b></span><br>
                9:30 a 10:30 <br>
                <b>Sebastian Correa</b><br>
                Colombia<br>
                <b><i>Por Definir</i></b><br>            
              </div>
            </div>
          </div>

          <div class="alert mx-auto mt-2 descanso" role="alert">
            10:30 a 11:30 RECESO  (Coffee break)
          </div>
          
          <div class="mx-auto mt-n2">
            <div class="card" style="width: 100%">
              <div class="card-body">
                <span class="conf"><b>CONFERENCIA </b></span><br>
                11:30 a 12:30 <br>
                <b>Por definir</b><br>
                N/A<br>
                <b><i>Por definir</i></b><br>            
              </div>
              <div class="card-header fecha-evento" style="width: 100%;"></div>
            </div>
          </div>
          
          <!-- <div class="mx-auto mt-2">
            <div class="card" style="width: 100%">
              <div class="card-body">
                17:00 a 17:15<br>
                <b>PhD. Gina Paola Maestre</b><br>
                Universidad Cooperativa de Colombia<br>
                <b><i>Cierre del Evento</i></b><br>            
              </div>
              <div class="card-header descanso" style="width: 100%;"></div>
            </div>
          </div> -->
          
        </div>
      </div>
    </div>
  </div>
  <div class="position-fixed container-navigator-dates">
    <a href="#miercoles">
      <button type="button" class="btn btn-info btn-navigator">24</button>
    </a>
    <a href="#jueves">
      <button type="button" class="btn btn-info btn-navigator">25</button>
    </a>
  </div>
  <?php
    include("./footer.html");
  ?>
</body>

</html>
