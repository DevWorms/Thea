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
                    <a href="#">
                        THEA
                    </a>
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
        </div>






    <div id="map"></div>
    <script>
      // This example adds an animated symbol to a polyline.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 19.382446, lng: -99.018252},
          zoom: 14,
          styles: [{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}]
        });

        // Define the symbol, using one of the predefined paths ('CIRCLE')
        // supplied by the Google Maps JavaScript API.
        var lineSymbol = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line = new google.maps.Polyline({
          path: [{lat: 19.409493, lng: -98.991687}, 
                  {lat: 19.378231, lng: -99.009201}, 
                  {lat: 19.372878, lng: -99.015092}, 
                  {lat: 19.378627, lng: -99.024038}, 
                  {lat: 19.416889, lng: -99.089838}],
          icons: [{
            icon: lineSymbol,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle(line);

        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol2 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line2 = new google.maps.Polyline({
          path: [{lat: 19.409493, lng: -98.991687}, 
                  {lat: 19.378231, lng: -99.009201}, 
                  {lat: 19.372878, lng: -99.015092}, 
                  {lat: 19.378627, lng: -99.024038}, 
                  {lat: 19.416889, lng: -99.089838}],
          icons: [{
            icon: lineSymbol2,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line2);

        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol3 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line3 = new google.maps.Polyline({
          path: [{lat: 19.393573, lng: -99.000730}, 
                  {lat: 19.378231, lng: -99.009201}, 
                  {lat: 19.372878, lng: -99.015092}, 
                  {lat: 19.378627, lng: -99.024038}, 
                  {lat: 19.416889, lng: -99.089838}],
          icons: [{
            icon: lineSymbol2,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line3);


        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol4 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line4 = new google.maps.Polyline({
          path: [ {lat: 19.372878, lng: -99.015092}, 
                  {lat: 19.378627, lng: -99.024038}, 
                  {lat: 19.416889, lng: -99.089838}],
          icons: [{
            icon: lineSymbol2,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle(line4);


        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol5 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line5 = new google.maps.Polyline({
          path: [
                  {lat: 19.378627, lng: -99.024038}, 
                  {lat: 19.416889, lng: -99.089838}],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line5);


        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol6 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line6 = new google.maps.Polyline({
          path: [
                  {lat: 19.416889, lng: -99.089838},
                  {lat: 19.378627, lng: -99.024038}],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line6);


        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol7 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line7 = new google.maps.Polyline({
          path: [
                  {lat: 19.398678, lng: -99.058579},
                  {lat: 19.378627, lng: -99.024038}],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line7);

        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol8 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line8 = new google.maps.Polyline({
          path: [
                  {lat: 19.404480, lng: -99.079873},
                  {lat: 19.379793, lng: -99.096004}],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle(line8);

        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol9 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line9 = new google.maps.Polyline({
          path: [
                  {lat: 19.393629, lng: -99.086951},
                  {lat: 19.379793, lng: -99.096004}],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle(line9);



        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol10 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line10 = new google.maps.Polyline({
          path: [{lat: 19.379793, lng: -99.096004},
                  {lat: 19.393629, lng: -99.086951}
                  ],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line10);



        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol11 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line11 = new google.maps.Polyline({
          path: [{lat: 19.358061, lng: -99.143719},
                  {lat: 19.367525, lng: -99.142009}
                  ],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line11);



        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol12 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line12 = new google.maps.Polyline({
          path: [{lat: 19.367525, lng: -99.142009},
                  {lat: 19.380967, lng: -99.138857}
                  ],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line12);



        //++++++++++++++++++++++++++++++++++++++++++++++

        var lineSymbol13 = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 4,
          strokeColor: '#393'
        };

        // Create the polyline and add the symbol to it via the 'icons' property.
        var line13 = new google.maps.Polyline({
          path: [{lat: 19.380967, lng: -99.138857},
                  {lat: 19.398171, lng: -99.137335}
                  ],
          icons: [{
            icon: lineSymbol5,
            offset: '10%'
          }],
          strokeColor: '#FF0000',
          map: map
        });

        animateCircle2(line13);



      }

      // Use the DOM setInterval() function to change the offset of the symbol
      // at fixed intervals.
      function animateCircle(line) {
          var count = 0;
          window.setInterval(function() {
            count = (count + 1) % 200;

            var icons = line.get('icons');
            icons[0].offset = (count / 2) + '%';
            line.set('icons', icons);
        }, 8000);
      }

      function animateCircle2(line) {
          var count = 0;
          window.setInterval(function() {
            count = (count + 1) % 200;

            var icons = line.get('icons');
            icons[0].offset = (count / 2) + '%';
            line.set('icons', icons);
        }, 8500);
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuFoiWmY9hbgVbhR0kboLuUQIVK85Y8U&callback=initMap"
        async defer></script>
  </body>
</html>