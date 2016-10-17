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

    function notificacion($msj) {
        echo 
        "<script>
            alert('" . $msj . "');
        </script>";
    }    


    if (isset($_POST['btn_acceder'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        if ($correo == null || $contrasena == null) {
            notificacion($msj = "Por favor complete todos los campos");
            header("Location: ../..");
        } else {
            
                $pdo = ConexionBD::obtenerInstancia()->obtenerBD();

                $consultaSesion = "SELECT * FROM clientes WHERE correo = ? AND contrasena = ? AND master = 1";

                $sentenciaSesion = $pdo->prepare($consultaSesion);
                    $sentenciaSesion->bindParam(1,$correo);
                    $sentenciaSesion->bindParam(2,$contrasena);
                    $sentenciaSesion->execute();
                $resultado = $sentenciaSesion->fetch();

                if ($resultado) {

                    session_start();
                        $_SESSION["Nombre"] = $resultado['nombre'];
                        $_SESSION["Id"] = $resultado['id_cliente'];
                    session_write_close();
                    header("Location: ../../admin/master.php");

                } else {
                    notificacion($msj = "El usuario o contraseña son incorrectos, vuelve a intentar.");
                    header("Location: ../../admin");
                }

            }
    }
?>