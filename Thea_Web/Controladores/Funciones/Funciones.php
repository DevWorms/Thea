    <?php
      require_once 'Controladores/datos/ConexionBD.php';
      $pdo = ConexionBD::obtenerInstancia()->obtenerBD();


//++++++++++++++++++++++++++++++++++++++++++       MASTER      +++++++++++++++++++++++++++++++++++++++++++++
        
        function MostrarAutos() {
            global $pdo;

            $operacion = "SELECT * FROM  usuarios";

            $sentencia = $pdo->prepare($operacion);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();

            $filas = $sentencia->rowCount();

                if ($filas == 0) {
                    echo "No hay sucursales registradas.";
                } else {

                        $counter = 0;
                        foreach ($resultado as $fila )  {
                            $counter++;

                                    echo  '
                                            var marker' . $counter . ' = new google.maps.Marker({
                                              position: {lat: ' . $fila["latitud_usuario"] . ', lng: ' . $fila["longitud_usuario"] . '},
                                              map: map,
                                              title: "' . $fila["placas_usuario"] . '"
                                            });

                                           ';

                        }

                    } 
        }

        function Trackear() {
            global $pdo;

            $operacion = "SELECT * FROM  usuarios";

            $sentencia = $pdo->prepare($operacion);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();

            $filas = $sentencia->rowCount();

                if ($filas == 0) {
                    echo "No hay sucursales registradas.";
                } else {

                        $counter = 0;
                        foreach ($resultado as $fila )  {
                            $counter++;
                                  
                                    echo  '
                                            <div class="card">
                                              <img src="img_avatar.png" alt="Avatar" style="width:100%">
                                              <div class="container">
                                                <h4><b>' . $fila["nombre_usuario"] . '</b></h4>
                                                <p>Placas: ' . $fila["placas_usuario"] . '</p>
                                                <p>
                                                    Latitud: ' . $fila["latitud_usuario"] . '<br>
                                                    Longitud ' . $fila["longitud_usuario"] . '
                                                </p>
                                                <a href="mapa.php?lat=' . $fila["latitud_usuario"] . '&long=' . $fila["longitud_usuario"] . '" target=_blank>Mostrar en mapa</a>
                                              </div>
                                            </div><br>';

                        }

                    } 
        }

?>