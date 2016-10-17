<?php
    require_once '../datos/ConexionBD.php';

      echo '
            <body style="background-color: #F8CE5E">
              <div style="text-align: center;">
                <br><br>
                  <img src = "../../img/estados/validate.png">
              </div>
            </body>
      ';

    $crypt = 11111111;

    function notificacion($msj) {
        echo 
        "<script>
            alert('" . $msj . "');
        </script>";
    }

    function regresar() {
        echo 
        "<script>
            window.history.back();
        </script>";
    }


    if (isset($_POST['btn_acceder'])) {
        $telefono = $_POST['telefono'];
        $contrasena = $_POST['contrasena'];
        $telefono += $crypt;

        if ($telefono == null || $contrasena == null) {
            notificacion($msj = "Por favor complete todos los campos");
            header("Location: ../");
        } else {

                $pdo = ConexionBD::obtenerInstancia()->obtenerBD();
                $consultaSesion = "SELECT * FROM usuario WHERE telefono = ? ";

                $sentenciaSesion = $pdo->prepare($consultaSesion);
                $sentenciaSesion->bindParam(1,$telefono);
                $sentenciaSesion->execute();                
                $resultado = $sentenciaSesion->fetch();
                
                if(password_verify($contrasena, $resultado["contrasena"]))   {

                    session_start();
                        $_SESSION["Id"] = $resultado['id_usuario'];
                        $_SESSION["Nombre"] = base64_decode($resultado['nombre']);
                        $_SESSION["Correo"] = base64_decode($resultado['correo']);
                        $_SESSION["Llave"] = $resultado['claveApi'];
                        $_SESSION["Telefono"] = ($telefono - $crypt);
                    session_write_close();
                    header("Location: ../../user");
                    
                } else {
                    notificacion($msj = "El usuario o contraseña son incorrectos, vuelve a intentar.");
                    regresar();
                }
            }
    }
?>