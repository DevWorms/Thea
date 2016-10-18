<?php

require '../controladores/datos/ConexionBD.php';

    class usuarios  {

            const ESTADO_CREACION_EXITOSA = 1;
            const ESTADO_CREACION_FALLIDA = 2;
            const ESTADO_ERROR_BD = 3;
            const ESTADO_AUSENCIA_CLAVE_API = 4;
            const ESTADO_CLAVE_NO_AUTORIZADA = 5;
            const ESTADO_URL_INCORRECTA = 6;
            const ESTADO_FALLA_DESCONOCIDA = 7;
            const ESTADO_PARAMETROS_INCORRECTOS = 8;
           

            //  SELECCIONAR PETICIÓN POST
             public static function post($peticion)        {
                if ($peticion[0] == 'trackup') {
                    return self::trackear();
                } else if ($peticion[0] == 'panico') {
                    return self::panico();
                } else {
                    throw new ExcepcionApi(self::ESTADO_URL_INCORRECTA, "Url mal formada", 400);
                }
            }


            //  MÓDULO API PARA REGISTRAR USUARIO
            private function trackear()    {
                $cuerpo = file_get_contents('php://input'); //  Obtener fichero de la petición a cadena
                $usuario = json_decode($cuerpo); // Decodificar a JSON el fichero
                $resultado = self::track($usuario); // Llamar función "crear()" con parámetro JSON

                if ($resultado) {

                    if($resultado["Exito"] = self::ESTADO_CREACION_EXITOSA )    {
                        http_response_code(200);
                     }

                    else if($resultado["Exito"] = self::ESTADO_CREACION_FALLIDA) {
                        throw new ExcepcionApi(self::ESTADO_CREACION_FALLIDA, "Se perdio la conexion");
                    }

                    else
                        throw new ExcepcionApi(self::ESTADO_FALLA_DESCONOCIDA, "Falla desconocida", 400);
                }
            }


            // FUNCION "crear()" PARA REGISTRAR NUEVO USUARIO EN LA BD
            private function track($datosUsuario)    {

                //  Obtener datos del JSON y encriptar en B64
                $id = $datosUsuario->id;
                $lon = $datosUsuario->lon;
                $lat = $datosUsuario->lat;

                try {

                    $pdo = ConexionBD::obtenerInstancia()->obtenerBD();

                    // Sentencia INSERT
                    $comando = "UPDATE usuarios SET latitud_usuario = ?, longitud_usuario = ? WHERE id_usuario = ? ";

                    $sentencia = $pdo->prepare($comando);

                        $sentencia->bindParam(1, $lat);
                        $sentencia->bindParam(2, $lon);
                        $sentencia->bindParam(3, $id);

                    $resultado = $sentencia->execute();

                    if ($resultado) {
                         // DevolverArray
                         return $arrayRetorno = [
                                                        "Exito" => self::ESTADO_CREACION_EXITOSA
                                                    ];
                    } else {
                        return self::ESTADO_CREACION_FALLIDA;
                    }
                } catch (PDOException $e) {
                    throw new ExcepcionApi(self::ESTADO_ERROR_BD, $e->getMessage());
                }
            }



            //  MÓDULO API PARA REGISTRAR USUARIO
            private function panico()    {
                $cuerpo = file_get_contents('php://input'); //  Obtener fichero de la petición a cadena
                $usuario = json_decode($cuerpo); // Decodificar a JSON el fichero
                $resultado = self::panic($usuario); // Llamar función "crear()" con parámetro JSON

                if ($resultado) {

                    if($resultado["Exito"] = self::ESTADO_CREACION_EXITOSA )    {
                        http_response_code(200);
                     }

                    else if($resultado["Exito"] = self::ESTADO_CREACION_FALLIDA) {
                        throw new ExcepcionApi(self::ESTADO_CREACION_FALLIDA, "Se perdio la conexion");
                    }

                    else
                        throw new ExcepcionApi(self::ESTADO_FALLA_DESCONOCIDA, "Falla desconocida", 400);
                }
            }


            // FUNCION "crear()" PARA REGISTRAR NUEVO USUARIO EN LA BD
            private function panic($datosUsuario)    {

                //  Obtener datos del JSON y encriptar en B64
                $id = $datosUsuario->id;
                $panico = $datosUsuario->panico;

                try {

                    $pdo = ConexionBD::obtenerInstancia()->obtenerBD();

                    // Sentencia INSERT
                    $comando = "UPDATE usuarios SET panico_usuario = ? WHERE id_usuario = ? ";

                    $sentencia = $pdo->prepare($comando);

                        $sentencia->bindParam(1, $panico);
                        $sentencia->bindParam(2, $id);

                    $resultado = $sentencia->execute();

                    if ($resultado) {
                         // DevolverArray
                         return $arrayRetorno = [
                                                        "Exito" => self::ESTADO_CREACION_EXITOSA
                                                    ];
                    } else {
                        return self::ESTADO_CREACION_FALLIDA;
                    }
                } catch (PDOException $e) {
                    throw new ExcepcionApi(self::ESTADO_ERROR_BD, $e->getMessage());
                }
            }
    }
?>