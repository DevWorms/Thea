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

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="lib/morris.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
    <script src="lib/example.js"></script>
    <link rel="stylesheet" href="lib/example.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
    <link rel="stylesheet" href="lib/morris.css">

  </head>
  <body>

    <div id="wrapper" style="padding-left: 0px;">

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
                      
                      <h1>Panel de Control</h1>
                      <div id="graph"></div><br>
                      <div id="graph2"></div>
                      <div id="graph3"></div>
                      <div id="graph4"></div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <script type="text/javascript">
      
      Morris.Donut({
                element: 'graph',
                data: [
                  {value: 70, label: 'Asaltos', formatted: 'Cerca del 70%' },
                  {value: 15, label: 'Accidentes', formatted: 'Cerca del 15%' },
                  {value: 10, label: 'Fallas', formatted: 'Cerca del 10%' },
                  {value: 5, label: 'Botón de Pánico', formatted: 'Cerca del 5%' }
                ],
                formatter: function (x, data) { return data.formatted; }
              });

      Morris.Donut({
                element: 'graph2',
                data: [
                  {value: 40, label: 'Hombres', formatted: 'Cerca de 400,000' },
                  {value: 35, label: 'Mujeres', formatted: 'Cerca de 350,000' },
                  {value: 25, label: 'Niños', formatted: 'Cerca de 250,000' }
                ],
                formatter: function (x, data) { return data.formatted; }
              });
      Morris.Donut({
                element: 'graph3',
                data: [
                  {value: 29, label: 'Alumbrado Público', formatted: '29%' },
                  {value: 17, label: 'Baches', formatted: '17%' },
                  {value: 13, label: 'Contaminación Visual', formatted: '13%' },
                  {value: 41, label: 'Recolección de Basura', formatted: '41%' }
                ],
                formatter: function (x, data) { return data.formatted; }
              });

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuFoiWmY9hbgVbhR0kboLuUQIVK85Y8U&callback=initMap"
        async defer></script>
  </body>
</html>