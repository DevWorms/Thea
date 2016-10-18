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
                                              title: "' . $fila["placas_usuario"] . "\nNumero de pasajeros: \n ".($counter*3)."\nVelocidad: 20km/h\nConsumo de gasolina: 14 km por litro". '"
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
                                              <div >
                                                <h4><b>' . $fila["nombre_usuario"] . '</b></h4>
                                                <p>Placas: ' . $fila["placas_usuario"] . '</p>
                                                <p>

                                                    Latitud: ' . $fila["latitud_usuario"] . '<br>
                                                    Longitud: ' . $fila["longitud_usuario"] . '<br>
                                                    Numero de pasajeros: ' . ($counter*3) . ' <br>
                                                    Velocidad: ' . "20km/h" . '
                                                     <br>
                                                    Consumo de gasolina: ' . "14 km por litro" . '
                                                    <br>
                                                    
                                                    Calificación: <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                                </p>
                                                <a href="mapa.php?lat=' . $fila["latitud_usuario"] . '&long=' . $fila["longitud_usuario"] . '" target=_blank>Mostrar en mapa</a>
                                              </div>
                                            </div><br>';

                        }

                    } 
        }

        function Panico() {
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


                            if($fila["panico_usuario"] == 1)    {                             
                            
                                echo  '
                                        <div class="card">
                                          <img src="img_avatar.png" alt="Avatar" style="width:100%">
                                          <div class="container">
                                            <h4><b>' . $fila["nombre_usuario"] . '</b></h4>
                                            <p>Placas: ' . $fila["placas_usuario"] . '</p>
                                            <p>
                                                Calificación: <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            </p>
                                            <a href="mapa.php?lat=' . $fila["latitud_usuario"] . '&long=' . $fila["longitud_usuario"] . '" target=_blank>Mostrar en mapa</a>
                                          </div>
                                        </div><br>';
                            }
                        }

                    } 
        }


?>
