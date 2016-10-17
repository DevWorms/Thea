<!DOCTYPE html>
<html>
  
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

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
                    <a href="ubicar.php">Ubicar Conductor</a>
                </li>
                <li>
                    <a href="#">Conversaciones</a>
                </li>
                <li>
                    <a href="#">Ayuda</a>
                </li>
            </ul>
        </div>
    </div>






    <div id="map"></div>
    <script>
      // This example adds an animated symbol to a polyline.


      function initMap() {

        var myLatLng = {lat: <?php echo $_GET["lat"]; ?>, lng: <?php echo $_GET["long"]; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 16,
          styles: [{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}]
        });

        var marker = new google.maps.Marker({
                                              position: myLatLng,
                                              map: map
                                            });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuFoiWmY9hbgVbhR0kboLuUQIVK85Y8U&callback=initMap"
        async defer></script>
  </body>
</html>