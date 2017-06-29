<?php

ini_set("error_log", dirname(__FILE__) . "/../../logs/Gestorcuadernos.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

//include_once(dirname(__FILE__) . "/../../model/dao/bitacoras/BitacorasDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/bitacoras/BitacorasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/audiencias/AudienciasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/audiencias/AudienciasDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/tiposnumerosrelaciones/TiposNumerosRelacionesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/tiposnumerosrelaciones/TiposNumerosRelacionesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/antecedesactuaciones/AntecedesActuacionesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/antecedesactuaciones/AntecedesActuacionesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/tiposactuacionesmaterias/TiposActuacionesMateriasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/tiposactuacionesmaterias/TiposActuacionesMateriasDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/arbol/ArbolDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/arbol/ArbolDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/antecedes/AntecedesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/antecedes/AntecedesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/actuaciones/ActuacionesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/actuaciones/ActuacionesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/carpetasjudiciales/CarpetasJudicialesDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dao/carpetasjudiciales/CarpetasJudicialesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../tribunal/dtotojson/DtoToJson.Class.php");
//include_once(dirname(__FILE__) . "/../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

    class GestorCarpetas {

        public function __construct() {
            
        }

        public function cambiaDatos($datosRegistros = null) {
            $repuesta = array();
            $repuesta["status"] = false;
            $repuesta["mensaje"] = "";
            $repuesta["movimiento"] = "";
            $accionBitacora = 0;
            $juzgadoOrigen = 0;
            $juzgadoDestino = 0;

            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");


            $carpetasJudicialesDao = new CarpetasJudicialesDAO();
            $actuacionesDao = new ActuacionesDAO();

            if ($datosRegistros["tipoOrigen"] == "1") {
                $origenCarpetasJudicialesDto = new CarpetasJudicialesDTO();
                $origenCarpetasJudicialesDto->setIdCarpetaJudicial($datosRegistros["idOrigen"]);
                $origenCarpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasJudiciales($origenCarpetasJudicialesDto, "", $proveedor);
            } else if ($datosRegistros["tipoOrigen"] == "2") {
                $origenActuacionesDto = new ActuacionesDTO();
                $origenActuacionesDto->setIdActuacion($datosRegistros["idOrigen"]);
                $origenActuacionesDto = $actuacionesDao->selectActuaciones($origenActuacionesDto, $proveedor);
            }

            if ($datosRegistros["tipoDestino"] == "1") {
                $destinoCarpetasJudicialesDto = new CarpetasJudicialesDTO();
                $destinoCarpetasJudicialesDto->setIdCarpetaJudicial($datosRegistros["idDestino"]);
                $destinoCarpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasJudiciales($destinoCarpetasJudicialesDto, "", $proveedor);
            } else if ($datosRegistros["tipoDestino"] == "2") {
                $destinoActuacionesDto = new ActuacionesDTO();
                $destinoActuacionesDto->setIdActuacion($datosRegistros["idDestino"]);
                $destinoActuacionesDto = $actuacionesDao->selectActuaciones($destinoActuacionesDto, $proveedor);
            }

            #CUADERNO - CUADERNO
            if (($datosRegistros["tipoOrigen"] == "1") && ($datosRegistros["tipoDestino"] == "1")) {
                $origenCveTipoCarpeta = $origenCarpetasJudicialesDto[0]->getCveTipoCarpeta();
                $destinoCveTipoCarpeta = $destinoCarpetasJudicialesDto[0]->getCveTipoCarpeta();
                #CARPETAS JUDICIALES PERMITIDAS PARA MOVERSE
                #NUMERO AUXILIAR = 1
                #CAUSA DE CONTROL = 2
                #CAUSA DE JUICIO = 3
                #CAUSA DE TRIBUNAL = 4
                #EXPEDIENTE = 5
                if ($origenCveTipoCarpeta == 1 || $origenCveTipoCarpeta == 2 || $origenCveTipoCarpeta == 3 ||
                        $origenCveTipoCarpeta == 4 || $origenCveTipoCarpeta == 5) {
                    $accionBitacora = 299;
                    switch ($origenCveTipoCarpeta) {
                        case ("1")://NUMERO AUXILIAR
                            if ($destinoCveTipoCarpeta == "2") {
                                $repuesta = $this->actualizaCarpetaCarpeta($origenCarpetasJudicialesDto, $destinoCarpetasJudicialesDto, $proveedor);
                                if ($repuesta["status"] == true) {
                                    $respuesta = array("type" => "OK", "text" => "");
                                } else {
                                    $respuesta = array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"]);
                                }
                            } else {
                                $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO: NUMERO AUXILIAR SOLO PUEDE MOVERSE A CAUSA DE CONTROL");
                            }
                            break;

                        case ("2")://CAUSA DE CONTROL
                            if ($destinoCveTipoCarpeta == "3" || $destinoCveTipoCarpeta == "4" || $destinoCveTipoCarpeta == "5") {
//                            $repuesta = $this->actualizaCarpetaCarpeta($origenCarpetasJudicialesDto, $destinoCarpetasJudicialesDto, $proveedor);
                                if ($repuesta["status"] == true) {
                                    $respuesta = array("type" => "OK", "text" => "");
                                } else {
                                    $respuesta = array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"]);
                                }
                            } else {
                                $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO: CAUSA DE CONTROL SOLO PUEDE MOVERSE A CAUSA DE JUICIO, CAUSA DE TRIBUNAL O EXPEDIENTE");
                            }
                            break;

                        case ("3")://CAUSA DE JUICIO
                            if ($destinoCveTipoCarpeta == "5") {
//                            $repuesta = $this->actualizaCarpetaCarpeta($origenCarpetasJudicialesDto, $destinoCarpetasJudicialesDto, $proveedor);
                                if ($repuesta["status"] == true) {
                                    $respuesta = array("type" => "OK", "text" => "");
                                } else {
                                    $respuesta = array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"]);
                                }
                            } else {
                                $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO: CAUSA DE JUICIO SOLO PUEDE MOVERSE A EXPEDIENTE");
                            }
                            break;

                        case ("4")://CAUSA DE TRIBUNAL
                            if ($destinoCveTipoCarpeta == "5") {
//                            $repuesta = $this->actualizaCarpetaCarpeta($origenCarpetasJudicialesDto, $destinoCarpetasJudicialesDto, $proveedor);
                                if ($repuesta["status"] == true) {
                                    $respuesta = array("type" => "OK", "text" => "");
                                } else {
                                    $respuesta = array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"]);
                                }
                            } else {
                                $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO: CAUSA DE TRIBUNAL SOLO PUEDE MOVERSE A EXPEDIENTE");
                            }
                            break;

                        default:
                            $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO");
                            break;
                    }
                } else {
                    $respuesta = array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO");
                }
            }

            /*
              //HOJA - CUADERNO
              if (($datosRegistros["tipoOrigen"] == "2") && ($datosRegistros["tipoDestino"] == "1")) {
              error_log("HOJA - CUADERNO");
              $tiposActuacionesMateriasDao = new TiposActuacionesMateriasDAO();
              if ($datosRegistros["tipoAudienciaOrigen"] != "-1") {
              $mensaje = "";
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $accionBitacora = 63;
              $repuesta = $this->actualizaAudienciaCuaderno($origenAudienciasDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              } else {
              $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
              $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($origenActuacionesDto[0]->getIdTipoActuacionMateria());
              $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto);
              $origenCveTipoActuacion = $tiposActuacionesMateriasDto[0]->getCveTipoActuacion();
              if ($origenCveTipoActuacion == 1 || $origenCveTipoActuacion == 2 || $origenCveTipoActuacion == 3 ||
              $origenCveTipoActuacion == 4 || $origenCveTipoActuacion == 7 || $origenCveTipoActuacion == 8 ||
              $origenCveTipoActuacion == 9 || $origenCveTipoActuacion == 12 || $origenCveTipoActuacion == 14) {

              $accionBitacora = 63;
              $status = false;
              $mensaje = "";
              switch ($origenCveTipoActuacion) {
              case ("1")://PROMOCION
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("2")://ACUERDO
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("3")://SENTENCIAS
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("4")://CERTIFICACIONES
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("7")://DILIGENCIAS
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("8")://PROMOCIONES INICIALES
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("9")://PROMOCION TERMINO
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("12")://EDICTOS
              if ($destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "1" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "3" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "4" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "5" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "6" ||
              $destinoCarpetasJudicialesDto[0]->getCveTipoNumero() == "10") {
              $repuesta = $this->actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              }
              }

              //HOJA - HOJA
              if (($datosRegistros["tipoOrigen"] == "2") && ($datosRegistros["tipoDestino"] == "2")) {
              error_log("HOJA - HOJA");
              if ($datosRegistros["tipoAudienciaOrigen"] != "-1") {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              } else {
              $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
              $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($origenActuacionesDto[0]->getIdTipoActuacionMateria());
              $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto);
              $origenCveTipoActuacion = $tiposActuacionesMateriasDto[0]->getCveTipoActuacion();

              $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
              $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($destinoActuacionesDto[0]->getIdTipoActuacionMateria());
              $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto);
              $destinoCveTipoActuacion = $tiposActuacionesMateriasDto[0]->getCveTipoActuacion();


              if ($origenCveTipoActuacion == 2 || $origenCveTipoActuacion == 5 || $origenCveTipoActuacion == 15) {
              $status = false;
              $mensaje = "";
              $accionBitacora = 64;
              switch ($origenCveTipoActuacion) {
              case ("2")://ACUERDO
              if ($destinoCveTipoActuacion == "1") {
              if ($this->validaExisteMasUnRegistroActuaciones($origenCveTipoActuacion, $destinoActuacionesDto, $proveedor) < 1) {
              $repuesta = $this->actualizaActuacionActuacion($origenActuacionesDto, $destinoActuacionesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "NO PUEDE EXISTIR MAS DE UN AMPARO EN UNA PROMOCION")));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("5")://OFICIO
              if ($destinoCveTipoActuacion == "2") {
              $repuesta = $this->actualizaActuacionActuacion($origenActuacionesDto, $destinoActuacionesDto, $proveedor);
              if ($repuesta["status"] == true) {
              echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $repuesta["mensaje"])));
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              case ("15")://EXHORTOS
              if ($destinoCveTipoActuacion == "5") {
              //if ($this->validaExisteMasUnRegistroActuaciones($origenCveTipoActuacion, $destinoActuacionesDto, $proveedor) < 1) {
              //                                $mensaje = $this->actualizaActuacionActuacion($origenActuacionesDto, $destinoActuacionesDto, $proveedor);
              //                                if ($mensaje == "") {
              //                                    echo utf8_encode($json->convert(array("type" => "OK", "text" => "")));
              //                                } else {
              //                                    echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "SE PRODUJO UN ERROR AL:" . $mensaje)));
              //                                }
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "EN DESARROLLO")));
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              break;

              default:
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              break;
              }
              } else {
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
              }
              }

              //CUADERNO - HOJA
              if (($datosRegistros["tipoOrigen"] == "1") && ($datosRegistros["tipoDestino"] == "2")) {
              error_log("CUADERNO - CUADERNO");
              echo utf8_encode($json->convert(array("type" => "ERROR", "text" => "MOVIMIENTO NO PERMITIDO")));
              }
             */

            /*
              if ($repuesta["status"] == true) {
              $bitacorasDto = new BitacorasDTO();
              $bitacorasDao = new BitacorasDAO();
              $bitacorasDto->setCveAccion($accionBitacora);
              $bitacorasDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
              $bitacorasDto->setCvePerfil($_SESSION["cvePerfil"]);
              $bitacorasDto->setFechaMovimiento($bitacorasDao->getFecha());
              $bitacorasDto->setMovimiento(strtoupper($repuesta["movimiento"]));
              $bitacorasDto->setCveSistema($_SESSION['cveSistema']);
              $bitacorasDto->setCveAdscripcion($_SESSION["cveAdscripcion"]);
              $bitacorasDto = $bitacorasDao->insertBitacora($bitacorasDto, $proveedor);
              //            print_r($bitacorasDto);
              $proveedor->execute("COMMIT");
              } else {
              $proveedor->execute("ROLLBACK");
              }
             */

            $proveedor->close();
            return json_encode($respuesta);
        }

        public function actualizaCarpetaCarpeta($origenCarpetasJudicialesDto, $destinoCarpetasJudicialesDto, $proveedor) {
            $repuesta = array();
            $repuesta["status"] = true;
            $repuesta["mensaje"] = "";
            $repuesta["movimiento"] = "";

            $status = true;
            $mensaje = "";
            $movimiento = "";

            $dtoToJson = new DtoToJson($origenCarpetasJudicialesDto);
            $movimiento .= "DATOS CARPETA ORIGEN: " . $dtoToJson->toJson();
            $dtoToJson = new DtoToJson($destinoCarpetasJudicialesDto);
            $movimiento .= "---DATOS CARPETA DESTINO: " . $dtoToJson->toJson();

            $origenCarpetasJudicialesDto = $origenCarpetasJudicialesDto[0];
            $destinoCarpetasJudicialesDto = $destinoCarpetasJudicialesDto[0];

            //ACTUALIZA DATOS DE LA CARPETA (JUZGADO) - SOLO SI EL JUZGADO ORIGEN Y DESTINO SON DIFERENTES
            if ($origenCarpetasJudicialesDto->getCveJuzgado() != $destinoCarpetasJudicialesDto->getCveJuzgado()) {
                $carpetasJudicialesDao = new CarpetasJudicialesDAO();
                $carpetasJudicialesDto = new CarpetasJudicialesDTO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($origenCarpetasJudicialesDto->getIdCarpetaJudicial());
                $carpetasJudicialesDto->setCveJuzgado($destinoCarpetasJudicialesDto->getCveJuzgado());
                $carpetasJudicialesDto = $carpetasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto, $proveedor);
                if ($carpetasJudicialesDto != "" && count($carpetasJudicialesDto) > 0) {
                    $status = true;
                    $dtoToJson = new DtoToJson($carpetasJudicialesDto);
                    $movimiento .= "DATOS MODIFICADOS (JUZGADO) DE LA CARPETA ORIGEN: " . $dtoToJson->toJson();
                } else {
                    $status = false;
                    $mensaje .= " ACTUALIZAR LA CARPETA SELECCIONADA ";
                    $movimiento .= $mensaje;
                }
            } else {
                $movimiento .= "---LOS JUZGADOS ENTRE LAS CARPETAS SON IGUALES POR LO QUE NO SE MODIFICAN";
            }

            //ACTUALIZA DATOS DE LAS ACTUACIONES DE LA CARPETA (JUZGADO) - SOLO SI EL JUZGADO ORIGEN Y DESTINO SON DIFERENTES
            if ($status) {
                if ($origenCarpetasJudicialesDto->getCveJuzgado() != $destinoCarpetasJudicialesDto->getCveJuzgado()) {
                    $actuacionesDao = new ActuacionesDAO();
                    $actuacionesDto = new ActuacionesDTO();
                    $actuacionesDto->setIdReferencia($carpetasJudicialesDto[0]->getIdCarpetaJudicial());
                    $actuacionesDto->setCveTipoCarpeta($carpetasJudicialesDto[0]->getCveTipoCarpeta());
                    $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
                    if ($actuacionesDto != "" && count($actuacionesDto) > 0) {
                        foreach ($actuacionesDto as $arrayActuacion) {
                            $movimiento .= "---ACTUACION DE LA CARPETA ORIGEN: " . json_encode(array_map('utf8_decode', $arrayActuacion));
                            $actuacionesDto = new ActuacionesDTO();
                            $actuacionesDto->setIdActuacion($arrayActuacion["idActuacion"]);
                            $actuacionesDto->setCveJuzgado($destinoCarpetasJudicialesDto->getCveJuzgado());
                            $actuacionesDto = $actuacionesDao->updateActuaciones($actuacionesDto, $proveedor);
                            $dtoToJson = new DtoToJson($actuacionesDto);
                            $movimiento .= "----DATOS MODIFICADOS (JUZGADO) DE ACTUACION: " . $dtoToJson->toJson();
                            if ($actuacionesDto != "" && count($actuacionesDto) >= 0) {
                                $status = true;
                            } else {
                                $status = false;
                                $mensaje .= "ACTUALIZAR ACTUACIONES HIJAS ";
                            }
                        }
                    }
                } else {
                    $movimiento .= "---LOS JUZGADOS ENTRE LAS CARPETAS SON IGUALES POR LO QUE NO SE MODIFICAN LAS ACTUACIONES";
                }
            }

            $antecedesDao = new AntecedesDAO();
            $antecedesDto = new AntecedesDTO();
            $antecedesDto->setIdCarpetaHija($origenCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
            $antecedesDto->setIdCarpetaPadre($destinoCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
            //ACTUALIZA CUADRENO PADRE EN ANTECEDES
            if ($status) {
                $antecedesAuxDto = new AntecedesDTO();
                $antecedesAuxDto->setIdCarpetaHija($origenCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
                $antecedesAuxDto = $antecedesDao->selectAntecedes($antecedesAuxDto, $proveedor);
                if ($antecedesAuxDto != "" && count($antecedesAuxDto) >= 0) {
                    $dtoToJson = new DtoToJson($antecedesAuxDto);
                    $movimiento .= "DATOS ANTECEDES ORIGINALES: " . $dtoToJson->toJson();
                    $array = array();
                    $array [0] = $antecedesDto;
                    $dtoToJson = new DtoToJson($array);
                    $movimiento .= "DATOS ANTECEDES MODIFICADOS: " . $dtoToJson->toJson();
                    $antecedesDto = $antecedesDao->updateAntecedesPadre($antecedesDto, $proveedor);
                    if ($antecedesDto != "" && count($antecedesDto) >= 0) {
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "ACTUALIZAR CUADERNOS ";
                    }
                } else {
                    $antecedesDto->setFechaRegistro(date("Y-m-d h:i:s"));
                    $antecedesDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                    $antecedesDto->setActivo("S");
                    $antecedesDto = $antecedesDao->insertAntecedes($antecedesDto, $proveedor);
                    if ($antecedesDto != "" && count($antecedesDto) >= 0) {
                        $dtoToJson = new DtoToJson($antecedesDto);
                        $movimiento .= "DATOS ANTECEDES ORIGINALES: " . $dtoToJson->toJson();
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "ACTUALIZAR CUADERNOS ";
                    }
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdPadre($origenCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $movimiento .= "---DATOS ARBOL PADRE ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                    $movimiento .= "---DATOS ARBOL PADRE ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdPadre($destinoCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $movimiento .= "---DATOS ARBOL PADRE DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                        $movimiento .= "---DATOS ARBOL PADRE DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdHijo($origenCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $movimiento .= "---DATOS ARBOL HIJO ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                    $movimiento .= "---DATOS ARBOL HIJO ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdHijo($destinoCarpetasJudicialesDto[0]->getIdCarpetaJudicial());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $movimiento .= "---DATOS ARBOL HIJO DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                        $movimiento .= "---DATOS ARBOL HIJO DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $repuesta["status"] = true;
                $repuesta["mensaje"] = "";
                $repuesta["movimiento"] = $movimiento;
            } else {
                $repuesta["status"] = false;
                $repuesta["mensaje"] = $mensaje;
                $repuesta["movimiento"] = $movimiento . " ERRORES:" . $mensaje;
            }
            return $repuesta;
        }

        public function actualizaActuacionCuaderno($origenActuacionesDto, $destinoCarpetasJudicialesDto, $proveedor) {
            $repuesta = array();
            $repuesta["status"] = true;
            $repuesta["mensaje"] = "";
            $repuesta["movimiento"] = "";
            $status = true;

            $mensaje = "";
            $arbolDao = new ArbolDAO();
            $antecedesActuacionesDao = new AntecedesActuacionesDAO();
            $antecedesActuacionesDto = new AntecedesActuacionesDTO();
            $tiposActuacionesMateriasDao = new TiposActuacionesMateriasDAO();

            $dtoToJson = new DtoToJson($origenActuacionesDto);
            $repuesta["movimiento"] .= "DATOS ACTUACION ORIGEN: " . $dtoToJson->toJson();
            $dtoToJson = new DtoToJson($destinoCarpetasJudicialesDto);
            $repuesta["movimiento"] .= "DATOS CARPETA DESTINO: " . $dtoToJson->toJson();

            $origenActuacionesDto = $origenActuacionesDto[0];
            $destinoCarpetasJudicialesDto = $destinoCarpetasJudicialesDto[0];

            //obtiene cvetiposnumerosrelaciones            
            $tiposNumerosRelacionesDto = new TiposNumerosRelacionesDTO();
            $tiposNumerosRelacionesDao = new TiposNumerosRelacionesDAO();
            $tiposNumerosRelacionesDto->setCveTipoNumero($destinoCarpetasJudicialesDto->getCveTipoNumero());
            $tiposNumerosRelacionesDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
            $tiposNumerosRelacionesDto = $tiposNumerosRelacionesDao->selectTiposNumerosRelaciones($tiposNumerosRelacionesDto, $proveedor);
            if ($tiposNumerosRelacionesDto != "" && count($tiposNumerosRelacionesDto) > 0) {
                $status = true;
            } else {
                $status = false;
                $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE NUMERO CON LA MATERIA ";
            }

            //ACTUALIZA DATOS DE LA ACTUACION
            if ($status) {
                //obtiene cvetiposnumerosrelaciones            
                $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
                $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($origenActuacionesDto->getIdTipoActuacionMateria());
                $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto, $proveedor);
                $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDto[0];

                //obtiene el cvetiposnumerosrelaciones destino
                $tiposActuacionesMateriasDestinoDto = new TiposActuacionesMateriasDTO();
                $tiposActuacionesMateriasDestinoDto->setCveTipoActuacion($tiposActuacionesMateriasDto->getCveTipoActuacion());
                $tiposActuacionesMateriasDestinoDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDestinoDto, $proveedor);

                if ($tiposActuacionesMateriasDestinoDto != "" && count($tiposActuacionesMateriasDestinoDto) > 0) {
                    if ($tiposActuacionesMateriasDto->getCveTipoActuacion() == 2 && $origenActuacionesDto->getCveMateria() != $destinoCarpetasJudicialesDto->getCveMateria()) {
                        $status = false;
                        $mensaje .= " REALIZAR EL MOVIMIENTO POR QUE EXISTE UN ACUERDO CON MATERIA DISTINTA A LA MATERIA DESTINO";
                    } else {
                        $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDestinoDto[0];
                        $tiposNumerosRelacionesDto = $tiposNumerosRelacionesDto[0];
                        $origenActuacionesAuxDto = new ActuacionesDTO();
                        $origenActuacionesAuxDto->setIdActuacion($origenActuacionesDto->getIdActuacion());
                        $origenActuacionesAuxDto->setIdCarpetaJudicial($destinoCarpetasJudicialesDto->getIdCarpetaJudicial());
                        $origenActuacionesAuxDto->setNumCarpetaJudicial($destinoCarpetasJudicialesDto->getNumero());
                        $origenActuacionesAuxDto->setAniCarpetaJudicial($destinoCarpetasJudicialesDto->getAnio());
                        $origenActuacionesAuxDto->setIdTiposNumerosRelacion($tiposNumerosRelacionesDto->getIdTiposNumerosRelacion());
                        $origenActuacionesAuxDto->setIdTipoActuacionMateria($tiposActuacionesMateriasDestinoDto->getIdTipoActuacionMateria());
                        $origenActuacionesAuxDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                        $origenActuacionesAuxDto->setCveInstancia($destinoCarpetasJudicialesDto->getNvaInstancia());
                        $origenActuacionesAuxDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                        $origenActuacionesAuxDto->setCveAdscripcion($destinoCarpetasJudicialesDto->getCveAdscripcion());

                        $array = array();
                        $array [0] = $origenActuacionesAuxDto;
                        $dtoToJson = new DtoToJson($array);
                        $repuesta["movimiento"] .= "DATOS A MODIFICAR DE LA ACTUACION: " . $dtoToJson->toJson();
                        $actuacionesDao = new ActuacionesDAO();
                        $origenActuacionesAuxDto = $actuacionesDao->updateActuaciones($origenActuacionesAuxDto, $proveedor);

                        if ($origenActuacionesAuxDto != "" && count($origenActuacionesAuxDto) >= 0) {
                            $dtoToJson = new DtoToJson($origenActuacionesAuxDto);
                            $repuesta["movimiento"] .= "DATOS A MODIFICADOS DE LA ACTUACION: " . $dtoToJson->toJson();
                            $status = true;
                        } else {
                            $status = false;
                            $mensaje .= "ACTUALIZAR ACTUACION ";
                        }
                    }
                } else {
                    $status = false;
                    $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE LA ACTUACION CON LA MATERIA DESTINO ";
                }
            }

            //ACTUALIZA HIJOS DE LA ACTUACION
            if ($status) {
                $antecedesActuacionesDto->setIdActuacionPadre($origenActuacionesDto->getIdActuacion());
                $antecedesActuacionesDto = $antecedesActuacionesDao->selectAntecedesActuaciones($antecedesActuacionesDto, $proveedor);
                if ($antecedesActuacionesDto != "" && count($antecedesActuacionesDto) > 0) {
                    foreach ($antecedesActuacionesDto as $antecedeActuacionDto) {
                        $actuacionesDto = new ActuacionesDTO();
                        $actuacionesDto->setIdActuacion($antecedeActuacionDto->getIdActuacionHija());
                        $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
                        if ($actuacionesDto != "" && count($actuacionesDto) > 0) {
                            //obtiene cvetiposnumerosrelaciones            
                            $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
                            $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($actuacionesDto[0]->getIdTipoActuacionMateria());
                            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto, $proveedor);
                            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDto[0];

                            //obtiene el cvetiposnumerosrelaciones destino
                            $tiposActuacionesMateriasDestinoDto = new TiposActuacionesMateriasDTO();
                            $tiposActuacionesMateriasDestinoDto->setCveTipoActuacion($tiposActuacionesMateriasDto->getCveTipoActuacion());
                            $tiposActuacionesMateriasDestinoDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                            $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDestinoDto, $proveedor);

                            if ($tiposActuacionesMateriasDestinoDto != "" && count($tiposActuacionesMateriasDestinoDto) > 0) {
                                if ($tiposActuacionesMateriasDto->getCveTipoActuacion() == 2 && $actuacionesDto[0]->getCveMateria() != $destinoCarpetasJudicialesDto->getCveMateria()) {
                                    $status = false;
                                    $mensaje .= " REALIZAR EL MOVIMIENTO POR QUE EXISTE UN ACUERDO CON MATERIA DISTINTA A LA MATERIA DESTINO";
                                } else {
                                    $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDestinoDto[0];
                                    $antecedeActuacionAuxDto = new ActuacionesDTO();
                                    $antecedeActuacionAuxDto->setIdActuacion($antecedeActuacionDto->getIdActuacionHija());
                                    $antecedeActuacionAuxDto->setIdCarpetaJudicial($destinoCarpetasJudicialesDto->getIdCarpetaJudicial());
                                    $antecedeActuacionAuxDto->setNumCarpetaJudicial($destinoCarpetasJudicialesDto->getNumero());
                                    $antecedeActuacionAuxDto->setAniCarpetaJudicial($destinoCarpetasJudicialesDto->getAnio());
                                    $antecedeActuacionAuxDto->setIdTiposNumerosRelacion($tiposNumerosRelacionesDto->getIdTiposNumerosRelacion());
                                    $antecedeActuacionAuxDto->setIdTipoActuacionMateria($tiposActuacionesMateriasDestinoDto->getIdTipoActuacionMateria());
                                    $antecedeActuacionAuxDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                                    $antecedeActuacionAuxDto->setCveInstancia($destinoCarpetasJudicialesDto->getNvaInstancia());
                                    $antecedeActuacionAuxDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                                    $antecedeActuacionAuxDto->setCveAdscripcion($destinoCarpetasJudicialesDto->getCveAdscripcion());
                                    $array = array();
                                    $array [0] = $antecedeActuacionAuxDto;
                                    $dtoToJson = new DtoToJson($array);
                                    $repuesta["movimiento"] .= "DATOS A MODIFICAR DE LA ACTUACION HIJA: " . $dtoToJson->toJson();
                                    $actuacionesDao = new ActuacionesDAO();
                                    $antecedeActuacionAuxDto = $actuacionesDao->updateActuaciones($antecedeActuacionAuxDto, $proveedor);
                                    if ($antecedeActuacionAuxDto != "" && count($antecedeActuacionAuxDto) >= 0) {
                                        $dtoToJson = new DtoToJson($antecedeActuacionAuxDto);
                                        $repuesta["movimiento"] .= "DATOS A MODIFICADOS DE LA ACTUACION HIJA: " . $dtoToJson->toJson();
                                        $antecedesActuacionesHijoDto = new AntecedesActuacionesDTO();
                                        $antecedesActuacionesHijoDto->setIdActuacionPadre($antecedeActuacionAuxDto[0]->getIdActuacion());
                                        $antecedesActuacionesHijoDto = $antecedesActuacionesDao->selectAntecedesActuaciones($antecedesActuacionesHijoDto, $proveedor);
                                        if ($antecedesActuacionesHijoDto != "" && count($antecedesActuacionesHijoDto) >= 0) {
                                            foreach ($antecedesActuacionesHijoDto as $antecedeActuacionHijoDto) {
                                                $actuacionesDto = new ActuacionesDTO();
                                                $actuacionesDto->setIdActuacion($antecedeActuacionHijoDto->getIdActuacionHija());
                                                $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
                                                if ($actuacionesDto != "" && count($actuacionesDto) > 0) {
                                                    //obtiene cvetiposnumerosrelaciones            
                                                    $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
                                                    $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($actuacionesDto[0]->getIdTipoActuacionMateria());
                                                    $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto, $proveedor);
                                                    $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDto[0];

                                                    //obtiene el cvetiposnumerosrelaciones destino
                                                    $tiposActuacionesMateriasDestinoDto = new TiposActuacionesMateriasDTO();
                                                    $tiposActuacionesMateriasDestinoDto->setCveTipoActuacion($tiposActuacionesMateriasDto->getCveTipoActuacion());
                                                    $tiposActuacionesMateriasDestinoDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                                                    $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDestinoDto, $proveedor);

                                                    if ($tiposActuacionesMateriasDestinoDto != "" && count($tiposActuacionesMateriasDestinoDto) > 0) {
                                                        $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDestinoDto[0];
                                                        $antecedeActuacionAuxHijoDto = new ActuacionesDTO();
                                                        $antecedeActuacionAuxHijoDto->setIdActuacion($antecedeActuacionHijoDto->getIdActuacionHija());
                                                        $antecedeActuacionAuxHijoDto->setIdCarpetaJudicial($destinoCarpetasJudicialesDto->getIdCarpetaJudicial());
                                                        $antecedeActuacionAuxHijoDto->setNumCarpetaJudicial($destinoCarpetasJudicialesDto->getNumero());
                                                        $antecedeActuacionAuxHijoDto->setAniCarpetaJudicial($destinoCarpetasJudicialesDto->getAnio());
                                                        $antecedeActuacionAuxHijoDto->setIdTiposNumerosRelacion($tiposNumerosRelacionesDto->getIdTiposNumerosRelacion());
                                                        $antecedeActuacionAuxHijoDto->setIdTipoActuacionMateria($tiposActuacionesMateriasDestinoDto->getIdTipoActuacionMateria());
                                                        $antecedeActuacionAuxHijoDto->setCveMateria($destinoCarpetasJudicialesDto->getCveMateria());
                                                        $antecedeActuacionAuxHijoDto->setCveInstancia($destinoCarpetasJudicialesDto->getNvaInstancia());
                                                        $antecedeActuacionAuxHijoDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                                                        $antecedeActuacionAuxHijoDto->setCveAdscripcion($destinoCarpetasJudicialesDto->getCveAdscripcion());
                                                        $array = array();
                                                        $array [0] = $antecedeActuacionAuxHijoDto;
                                                        $dtoToJson = new DtoToJson($array);
                                                        $repuesta["movimiento"] .= "DATOS A MODIFICAR DE LA ACTUACION HIJA - HIJA: " . $dtoToJson->toJson();
                                                        $antecedeActuacionAuxHijoDto = $actuacionesDao->updateActuaciones($antecedeActuacionAuxHijoDto, $proveedor);
                                                        if ($antecedeActuacionAuxHijoDto != "" && count($antecedeActuacionAuxHijoDto) >= 0) {
                                                            $dtoToJson = new DtoToJson($antecedeActuacionAuxHijoDto);
                                                            $repuesta["movimiento"] .= "DATOS A MODIFICADOS DE LA ACTUACION HIJA - HIJA: " . $dtoToJson->toJson();
                                                            $status = true;
                                                        } else {
                                                            $status = false;
                                                            $mensaje .= "ACTUALIZAR ACTUACION HIJO - HIJO ";
                                                        }
                                                    } else {
                                                        $status = false;
                                                        $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE LA ACTUACION(" . $tiposActuacionesMateriasDto->getCveTipoActuacion() . ") HIJO-HIJO CON LA MATERIA DESTINO(" . $destinoCarpetasJudicialesDto->getCveMateria() . ") ";
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                    } else {
                                        $status = false;
                                        $mensaje .= "ACTUALIZAR ACTUACION HIJO ";
                                    }
                                }
                            } else {
                                $status = false;
                                $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE LA ACTUACION HIJO CON LA MATERIA DESTINO ";
                                break;
                            }
                        }
                    }
                }
            }

            //ELIMINA ANTECEDE DE LA ACTUACION
            if ($status) {
                $antecedesActuacionesDto = new AntecedesActuacionesDTO();
                $antecedesActuacionesDto->setIdActuacionHija($origenActuacionesDto->getIdActuacion());
                $antecedesActuacionesDtoAux = $antecedesActuacionesDao->selectAntecedesActuaciones($antecedesActuacionesDto, $proveedor);
                if ($antecedesActuacionesDtoAux != "") {
                    $dtoToJson = new DtoToJson($antecedesActuacionesDtoAux);
                    $repuesta["movimiento"] .= "---DATOS ANTECEDES ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($antecedesActuacionesDao->deleteAntecedeActuaciones($antecedesActuacionesDto, $proveedor)) {
                    $repuesta["movimiento"] .= "---DATOS ANTECEDES ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $status = true;
                } else {
                    $status = false;
                    $mensaje .= "ELIMINA ANTECEDE DE LA ACTUACION ";
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdPadre($origenActuacionesDto->getIdCarpetaJudicial());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $repuesta["movimiento"] .= "---DATOS ARBOL PADRE ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                    $repuesta["movimiento"] .= "---DATOS ARBOL PADRE ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdPadre($destinoCarpetasJudicialesDto->getIdCarpetaJudicial());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $repuesta["movimiento"] .= "---DATOS ARBOL PADRE DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                        $repuesta["movimiento"] .= "---DATOS ARBOL PADRE DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdHijo($origenActuacionesDto->getIdActuacion());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $repuesta["movimiento"] .= "---DATOS ARBOL HIJO ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                    $repuesta["movimiento"] .= "---DATOS ARBOL HIJO ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdHijo($destinoCarpetasJudicialesDto->getIdCarpetaJudicial());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $repuesta["movimiento"] .= "---DATOS ARBOL HIJO DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                        $repuesta["movimiento"] .= "---DATOS ARBOL HIJO DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $repuesta["status"] = true;
                $repuesta["mensaje"] = "";
                $repuesta["movimiento"] = $repuesta["movimiento"];
            } else {
                $repuesta["status"] = false;
                $repuesta["mensaje"] = $mensaje;
                $repuesta["movimiento"] = $repuesta["movimiento"] . " ERRORES:" . $mensaje;
            }
            return $repuesta;
        }

        public function actualizaActuacionActuacion($origenActuacionesDto, $destinoActuacionesDto, $proveedor) {
            $repuesta = array();
            $repuesta["status"] = true;
            $repuesta["mensaje"] = "";
            $repuesta["movimiento"] = "";

            $mensaje = "";
            $arbolDao = new ArbolDAO();
            $antecedesActuacionesDao = new AntecedesActuacionesDAO();
            $antecedesActuacionesDto = new AntecedesActuacionesDTO();

            $tiposActuacionesMateriasDao = new TiposActuacionesMateriasDAO();

            $dtoToJson = new DtoToJson($origenActuacionesDto);
            $repuesta["movimiento"] .= "DATOS ACTUACION ORIGEN: " . $dtoToJson->toJson();
            $dtoToJson = new DtoToJson($destinoActuacionesDto);
            $repuesta["movimiento"] .= "DATOS ACTUACION DESTINO: " . $dtoToJson->toJson();

            $origenActuacionesDto = $origenActuacionesDto[0];
            $destinoActuacionesDto = $destinoActuacionesDto[0];


            //obtiene cvetiposnumerosrelaciones         
            $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
            $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($origenActuacionesDto->getIdTipoActuacionMateria());
            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto, $proveedor);
            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDto[0];

            //obtiene el cvetiposnumerosrelaciones destino
            $tiposActuacionesMateriasDestinoDto = new TiposActuacionesMateriasDTO();
            $tiposActuacionesMateriasDestinoDto->setCveTipoActuacion($tiposActuacionesMateriasDto->getCveTipoActuacion());
            $tiposActuacionesMateriasDestinoDto->setCveMateria($destinoActuacionesDto->getCveMateria());
            $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDestinoDto, $proveedor);

            if ($tiposActuacionesMateriasDestinoDto != "" && count($tiposActuacionesMateriasDestinoDto) > 0) {
                $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDestinoDto[0];
                $origenActuacionesAuxDto = new ActuacionesDTO();
                $origenActuacionesAuxDto->setIdActuacion($origenActuacionesDto->getIdActuacion());
                $origenActuacionesAuxDto->setIdCarpetaJudicial($destinoActuacionesDto->getIdCarpetaJudicial());
                $origenActuacionesAuxDto->setNumCarpetaJudicial($destinoActuacionesDto->getNumCarpetaJudicial());
                $origenActuacionesAuxDto->setAniCarpetaJudicial($destinoActuacionesDto->getAniCarpetaJudicial());
                $origenActuacionesAuxDto->setIdTiposNumerosRelacion($destinoActuacionesDto->getIdTiposNumerosRelacion());
                $origenActuacionesAuxDto->setCveMateria($destinoActuacionesDto->getCveMateria());
                $origenActuacionesAuxDto->setCveInstancia($destinoActuacionesDto->getCveInstancia());
                $origenActuacionesAuxDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                $origenActuacionesAuxDto->setIdTipoActuacionMateria($tiposActuacionesMateriasDestinoDto->getIdTipoActuacionMateria());
                $origenActuacionesAuxDto->setCveAdscripcion($destinoActuacionesDto->getCveAdscripcion());
                $array = array();
                $array [0] = $origenActuacionesAuxDto;
                $dtoToJson = new DtoToJson($array);
                $repuesta["movimiento"] .= "DATOS A MODIFICAR DE LA ACTUACION: " . $dtoToJson->toJson();
                $actuacionesDao = new ActuacionesDAO();

                $origenActuacionesAuxDto = $actuacionesDao->updateActuaciones($origenActuacionesAuxDto, $proveedor);

                if ($origenActuacionesAuxDto != "" && count($origenActuacionesAuxDto) >= 0) {
                    $dtoToJson = new DtoToJson($origenActuacionesAuxDto);
                    $repuesta["movimiento"] .= "DATOS A MODIFICADOS DE LA ACTUACION: " . $dtoToJson->toJson();
                    $status = true;
                } else {
                    $status = false;
                    $mensaje .= "ACTUALIZAR ACTUACION ";
                }
            } else {
                $status = false;
                $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE LA ACTUACION CON LA MATERIA DESTINO ";
            }


            //ACTUALIZA ANTECEDE DE LA ACTUACION
            if ($status) {
                $antecedesActuacionesDto = new AntecedesActuacionesDTO();
                $antecedesActuacionesDto->setIdActuacionHija($origenActuacionesDto->getIdActuacion());
                $antecedesActuacionesDto = $antecedesActuacionesDao->selectAntecedesActuaciones($antecedesActuacionesDto, $proveedor);
                if ($antecedesActuacionesDto != "" && count($antecedesActuacionesDto) > 0) {
                    $dtoToJson = new DtoToJson($antecedesActuacionesDto);
                    $repuesta["movimiento"] .= "DATOS DE ANTECEDES: " . $dtoToJson->toJson();
                    $antecedesActuacionesDto = new AntecedesActuacionesDTO();
                    $antecedesActuacionesDto->setIdActuacionHija($origenActuacionesDto->getIdActuacion());
                    $antecedesActuacionesDto->setIdActuacionPadre($destinoActuacionesDto->getIdActuacion());
                    if ($antecedesActuacionesDao->updateAntecedesPadre($antecedesActuacionesDto, $proveedor)) {
                        $array = array();
                        $array [0] = $antecedesActuacionesDto;
                        $dtoToJson = new DtoToJson($array);
                        $repuesta["movimiento"] .= "DATOS A MODIFICADOS DE ANTECEDES: " . $dtoToJson->toJson();
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "ACTUALIZAR ANTECEDE DE LA ACTUACION ";
                    }
                } else {
                    $fechaActual = date("Y-m-d h:i:s");
                    $antecedesActuacionesDto = new AntecedesActuacionesDTO();
                    $antecedesActuacionesDto->setIdActuacionHija($origenActuacionesDto->getIdActuacion());
                    $antecedesActuacionesDto->setIdActuacionPadre($destinoActuacionesDto->getIdActuacion());
                    $antecedesActuacionesDto->setFechaActualizacion($fechaActual);
                    $antecedesActuacionesDto->setFechaRegistro($fechaActual);
                    $antecedesActuacionesDto->setActivo("S");
                    if ($antecedesActuacionesDao->insertAntecedesActuacion($antecedesActuacionesDto, $proveedor)) {
                        $array = array();
                        $array [0] = $antecedesActuacionesDto;
                        $dtoToJson = new DtoToJson($array);
                        $repuesta["movimiento"] .= "DATOS A INSERTADOS DE ANTECEDES: " . $dtoToJson->toJson();
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "ACTUALIZAR ANTECEDE DE LA ACTUACION ";
                    }
                }
            }

            //ACTUALIZA HIJOS DE LA ACTUACION
            if ($status) {
                $antecedesActuacionesDto = new AntecedesActuacionesDTO();
                $antecedesActuacionesDto->setIdActuacionPadre($origenActuacionesDto->getIdActuacion());
                $antecedesActuacionesDto = $antecedesActuacionesDao->selectAntecedesActuaciones($antecedesActuacionesDto, $proveedor);
//            print_r($antecedesActuacionesDto);
                if ($antecedesActuacionesDto != "" && count($antecedesActuacionesDto) > 0) {
                    foreach ($antecedesActuacionesDto as $antecedeActuacionDto) {
                        $actuacionesDto = new ActuacionesDTO();
                        $actuacionesDto->setIdActuacion($antecedeActuacionDto->getIdActuacionHija());
                        $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
                        if ($actuacionesDto != "" && count($actuacionesDto) > 0) {
                            //obtiene cvetiposnumerosrelaciones            
                            $tiposActuacionesMateriasDto = new TiposActuacionesMateriasDTO();
                            $tiposActuacionesMateriasDto->setIdTipoActuacionMateria($actuacionesDto[0]->getIdTipoActuacionMateria());
                            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDto, $proveedor);
                            $tiposActuacionesMateriasDto = $tiposActuacionesMateriasDto[0];

                            //obtiene el cvetiposnumerosrelaciones destino
                            $tiposActuacionesMateriasDestinoDto = new TiposActuacionesMateriasDTO();
                            $tiposActuacionesMateriasDestinoDto->setCveTipoActuacion($tiposActuacionesMateriasDto->getCveTipoActuacion());
                            $tiposActuacionesMateriasDestinoDto->setCveMateria($destinoActuacionesDto->getCveMateria());
                            $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDao->selectTiposActuacionesMaterias($tiposActuacionesMateriasDestinoDto, $proveedor);

                            if ($tiposActuacionesMateriasDestinoDto != "" && count($tiposActuacionesMateriasDestinoDto) > 0) {
                                $tiposActuacionesMateriasDestinoDto = $tiposActuacionesMateriasDestinoDto[0];

                                $array = array();
                                $array [0] = $antecedeActuacionDto;
                                $dtoToJson = new DtoToJson($array);
                                $repuesta["movimiento"] .= "DATOS DE LA ACTUACION HIJA: " . $dtoToJson->toJson();

                                $antecedeActuacionAuxDto = new ActuacionesDTO();
                                $antecedeActuacionAuxDto->setIdActuacion($antecedeActuacionDto->getIdActuacionHija());
                                $antecedeActuacionAuxDto->setIdCarpetaJudicial($destinoActuacionesDto->getIdCarpetaJudicial());
                                $antecedeActuacionAuxDto->setNumCarpetaJudicial($destinoActuacionesDto->getNumCarpetaJudicial());
                                $antecedeActuacionAuxDto->setAniCarpetaJudicial($destinoActuacionesDto->getAniCarpetaJudicial());
                                $antecedeActuacionAuxDto->setIdTiposNumerosRelacion($destinoActuacionesDto->getIdTiposNumerosRelacion());
                                $antecedeActuacionAuxDto->setIdTipoActuacionMateria($tiposActuacionesMateriasDestinoDto->getIdTipoActuacionMateria());
                                $antecedeActuacionAuxDto->setCveMateria($destinoActuacionesDto->getCveMateria());
                                $antecedeActuacionAuxDto->setCveInstancia($destinoActuacionesDto->getCveInstancia());
                                $antecedeActuacionAuxDto->setFechaActualizacion(date("Y-m-d h:i:s"));
                                $antecedeActuacionAuxDto->setCveAdscripcion($destinoActuacionesDto->getCveAdscripcion());
                                $antecedeActuacionAuxDto = $actuacionesDao->updateActuaciones($antecedeActuacionAuxDto, $proveedor);
                                if ($antecedeActuacionAuxDto != "" && count($antecedeActuacionAuxDto) >= 0) {
                                    $dtoToJson = new DtoToJson($antecedeActuacionAuxDto);
                                    $repuesta["movimiento"] .= "DATOS MODIFICADOS DE LA ACTUACION HIJA: " . $dtoToJson->toJson();
                                    $status = true;
                                } else {
                                    $status = false;
                                    $mensaje .= "ACTUALIZAR ACTUACION HIJO ";
                                }
                            } else {
                                $status = false;
                                $mensaje .= " NO ENCONTRAR RELACION ENTRE EL TIPO DE LA ACTUACION HIJO CON LA MATERIA DESTINO ";
                            }
                        }
                    }
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdPadre($origenActuacionesDto->getIdCarpetaJudicial());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $repuesta["movimiento"] .= "---DATOS ARBOL PADRE ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                    $repuesta["movimiento"] .= "---DATOS ARBOL PADRE ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdPadre($destinoActuacionesDto->getIdCarpetaJudicial());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $repuesta["movimiento"] .= "---DATOS ARBOL PADRE DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolPadre($arbolDto, $proveedor)) {
                        $repuesta["movimiento"] .= "---DATOS ARBOL PADRE DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $arbolDto = new ArbolDTO();
                $arbolDto->setIdHijo($origenActuacionesDto->getIdActuacion());
                $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                if ($arbolDtoAux != "") {
                    $dtoToJson = new DtoToJson($arbolDtoAux);
                    $repuesta["movimiento"] .= "---DATOS ARBOL HIJO ORIGEN A ELIMINAR: " . $dtoToJson->toJson();
                }
                if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                    $repuesta["movimiento"] .= "---DATOS ARBOL HIJO ORIGEN ELIMINADOS CORRECTAMENTE ";
                    $arbolDto = new ArbolDTO();
                    $arbolDto->setIdHijo($destinoActuacionesDto->getIdActuacion());
                    $arbolDtoAux = $arbolDao->selectArbol($arbolDto, $proveedor);
                    if ($arbolDtoAux != "") {
                        $dtoToJson = new DtoToJson($arbolDtoAux);
                        $repuesta["movimiento"] .= "---DATOS ARBOL HIJO DESTINO A ELIMINAR: " . $dtoToJson->toJson();
                    }
                    if ($arbolDao->deleteArbolHijo($arbolDto, $proveedor)) {
                        $repuesta["movimiento"] .= "---DATOS ARBOL HIJO DESTINO ELIMINADOS CORRECTAMENTE ";
                        $status = true;
                    } else {
                        $status = false;
                        $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                    }
                } else {
                    $status = false;
                    $mensaje .= "BORRAR DATOS DE LOS PADRES ";
                }
            }

            if ($status) {
                $repuesta["status"] = true;
                $repuesta["mensaje"] = "";
            } else {
                $repuesta["status"] = false;
                $repuesta["mensaje"] = $mensaje;
            }
            return $repuesta;
        }

        public function validaExisteMasUnRegistroActuaciones($origenCveTipoActuacion, $destinoActuacionesDto, $proveedor) {
            $destinoActuacionesDto = $destinoActuacionesDto[0];
            $actuacionesDao = new ActuacionesDAO();
            return $actuacionesDao->ExisteActuacionesTipoActuacion($origenCveTipoActuacion, $destinoActuacionesDto, $proveedor);
        }

    }

    @$action = $_POST['action'];

    $datosRegistros = array();
    @$datosRegistros["idOrigen"] = $_POST['idOrigen'];
    @$datosRegistros["idPadreOrigen"] = $_POST['idPadreOrigen'];
    @$datosRegistros["tipoOrigen"] = $_POST['tipoOrigen'];
    @$datosRegistros["idDestino"] = $_POST['idDestino'];
    @$datosRegistros["idPadreDestino"] = $_POST['idPadreDestino'];
    @$datosRegistros["tipoDestino"] = $_POST['tipoDestino'];

    $gestorCarpetas = new GestorCarpetas();
    if ($action == "cambiaDatos") {
        $datosRegistros = array();
        @$datosRegistros["idOrigen"] = "2";
        @$datosRegistros["idPadreOrigen"] = "2";
        @$datosRegistros["tipoOrigen"] = "1";
        @$datosRegistros["idDestino"] = "1";
        @$datosRegistros["idPadreDestino"] = "1";
        @$datosRegistros["tipoDestino"] = "1";
        print_r($datosRegistros);
        echo $gestorCarpetas->cambiaDatos($datosRegistros);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
