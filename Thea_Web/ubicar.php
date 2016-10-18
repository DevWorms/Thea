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
                    <a href="index.php"><img src="logo.png"></a>
                </li>
                <li>
                    <a href="index.php">Mapa</a>
                </li>
                <li>
                     <a href="quejas.php">Comentarios y quejas</a>
               
                </li>
                <li>
                    <a href="ubicar.php">Ubicar Conductor</a>
                </li>
                <li>
                    <a href="#">Camaras</a>
                </li>
                <li>
                    <a href="panel.php">Estadisticas</a>
                </li>            
                <li>
                    <a href="panico.php">Alerta de Pánico</a>
                </li>
                <li>
                    <a href="#">Ayuda</a>
                </li>
            </ul>
        </div>
    
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
                    <div id="div1">
                      CARGANDO...
                    </div>

                    </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>


    
    <script type="text/javascript">


      function initMap()  {

        var myLatLng = {lat: 19.2961467, lng: -99.0525917};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng,
          styles: [{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}]
        });


        <?php
          echo MostrarAutos();
        ?>
      }
    
    </script>
    
    
    <script type="text/javascript">

      function markers()  {
        $(document).ready(function(){
              $("#div1").load("demo_test.php");
        });      
      }

      setInterval( "markers()", 1500 );

    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuFoiWmY9hbgVbhR0kboLuUQIVK85Y8U&callback=initMap"
        async defer></script>
  </body>
</html>