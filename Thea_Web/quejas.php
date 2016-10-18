<?php 
  require_once 'Controladores/Funciones/Funciones.php';
?>
<!DOCTYPE html>
<html>
  
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }

      .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 15%;
      }

      .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .container {
          padding: 2px 16px;
      }
    </style>
  </head>
  <body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                 <li class="sidebar-brand">
                    <img src="logo.png">
                </li>
                <li>
                    <a href="index.php">Mapa</a>
                </li>
                <li>
                     <a href="quejas.php">Comentarios y quejas</a>
                </li>
                <li>
                    <a href="ubicar.php">Operadores</a>
                </li>
                <li>
                    <a href="#">Estadisticas</a>
                </li>
                <li>
                    <a href="#">Camaras</a>
                </li>
               <li>
                    <a href="botonpanico.php">Botones de panico</a>
                </li>
                <li>
                    <a href="#">Ayuda</a>
                </li>
            </ul>
        </div>
    
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <H1>Quejas y sugerencias de los usuarios</H1>
                    <div id="div1">
                      <table class="table table-inverse">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Chofer</th>
					    
					      <th>Placas</th>
					      <th>Queja o sugerencia</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>User 1</td>
					      
					      <td>297AEN</td>
					      <td>Este camión va a exceso de velocidad</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>User 1</td>
					     
					      <td>297AEN</td>
					      <td>El chofer insulto a la gente</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>User 2</td>
					     
					      <td>108GTR</td>
					      <td>Este camión esta en muy mal estado</td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td>User 3</td>
					     
					      <td>RVR9745</td>
					      <td>Muy buen servicio</td>
					    </tr>
					  </tbody>
					</table>
                    </div>

                    </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>


   
  </body>
</html>