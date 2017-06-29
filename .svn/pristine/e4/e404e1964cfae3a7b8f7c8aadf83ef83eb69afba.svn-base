<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

//inclusiones para la peticion del defensor
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/drogas/DrogasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");

class DefensoresimputadoscarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto) {
        $DefensoresimputadoscarpetasDto->setidDefensorImputadoCarpeta(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta()))));
        $DefensoresimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getidImputadoCarpeta()))));
        $DefensoresimputadoscarpetasDto->setcveTipoDefensor(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getcveTipoDefensor()))));
        $DefensoresimputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getnombre()))));
        $DefensoresimputadoscarpetasDto->settelefono(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->gettelefono()))));
        $DefensoresimputadoscarpetasDto->setcelular(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getcelular()))));
        $DefensoresimputadoscarpetasDto->setemail(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getemail()))));
        $DefensoresimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getactivo()))));
        $DefensoresimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getfechaRegistro()))));
        $DefensoresimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DefensoresimputadoscarpetasDto->getfechaActualizacion()))));
        return $DefensoresimputadoscarpetasDto;
    }

    public function selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);
        return $DefensoresimputadoscarpetasDto;
    }

    public function insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);
        return $DefensoresimputadoscarpetasDto;
    }

    /*
     * Agregar defensroes imputados carpteas
     */

    public function agregarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if (!$validacion->text(1, 2, (int) $DefensoresimputadoscarpetasDto->getCveTipoDefensor())) {
            if ($DefensoresimputadoscarpetasDto->getCveTipoDefensor() <= 0) {
                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 500, (string) $DefensoresimputadoscarpetasDto->getNombre())) {
            if ($DefensoresimputadoscarpetasDto->getNombre() == "") {
                $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                $error = true;
            }
        }
        if ($DefensoresimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($DefensoresimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        /* if ($DefensoresimputadoscarpetasDto->getEmail() != "") {
          if (!$validacion->email((string) $DefensoresimputadoscarpetasDto->getEmail())) {
          $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
          $error = true;
          }
          } */
        if ((!$error)) {
            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
            $DefensoresimputadoscarpetasDto->setActivo('S');
            $DefensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);

            if ($DefensoresimputadoscarpetasDto != "") {
                $resultado = array(
                    "idDefensorImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta(),
                    "idImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveTipoDefensor" => $DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre()),
                    "telefono" => $DefensoresimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $DefensoresimputadoscarpetasDto[0]->getCelular(),
                    "email" => $DefensoresimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(177, 'Insercion tbldefensoresimputadoscarpetas', 'txt', serialize($DefensoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion insertar defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }

    public function updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        //$tmpDto = new DefensoresimputadoscarpetasDTO();
        //$tmpDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DefensoresimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);
        return $DefensoresimputadoscarpetasDto;
        //}
        //return "";
    }

    /*
     * M�todo para editar campos no requeridos en defensoresimputadoscarpetas
     */

    public function modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if (!$validacion->text(1, 2, (int) $DefensoresimputadoscarpetasDto->getCveTipoDefensor())) {
            if ($DefensoresimputadoscarpetasDto->getCveTipoDefensor() <= 0) {
                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 500, (string) $DefensoresimputadoscarpetasDto->getNombre())) {
            if ($DefensoresimputadoscarpetasDto->getNombre() == "") {
                $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                $error = true;
            }
        }
        if ($DefensoresimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($DefensoresimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ((!$error)) {
            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
            $DefensoresimputadoscarpetasDto->setActivo('S');
            $DefensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);

            if ($DefensoresimputadoscarpetasDto != "") {
                $resultado = array(
                    "idDefensorImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta(),
                    "idImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveTipoDefensor" => $DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre()),
                    "telefono" => $DefensoresimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $DefensoresimputadoscarpetasDto[0]->getCelular(),
                    "email" => $DefensoresimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(178, 'Modificacion tbldefensoresimputadoscarpetas', 'txt', serialize($DefensoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion modificar defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }

    public function deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);
        return $DefensoresimputadoscarpetasDto;
    }

    /*
     * Borrado logico de defensores imputados carpetas
     */

    public function eliminarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor = null) {
        /**/
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $dto = new DefensoresimputadoscarpetasDTO();
        $dto->setIdDefensorImputadoCarpeta($DefensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta());
        $dto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($dto);
        $DefensoresimputadoscarpetasDto->setActivo('N');
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->eliminarDefensoresimputadoscarpetasByIdImputado($DefensoresimputadoscarpetasDto, $proveedor);
        if ($DefensoresimputadoscarpetasDto != "") {
            $result = array(
                "status" => "Ok",
                "totalCount" => "El defensor de elimino de forma correcta"
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(179, 'Borrado logico tbldefensoresimputadoscarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido))
                throw new Exception('no se pudo guardar la accion borrado logico defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se puedo eliminar el defensor");
            $result = ($result);
        }
        echo json_encode($result);
    }

    public function AsignacionWebService($json) {

        $param = "";

        $defensoresDto = new DefensoresimputadoscarpetasDTO();
        $defensoresAuxDto = new DefensoresimputadoscarpetasDTO();
        $defensoresDao = new DefensoresimputadoscarpetasDAO();
        $data = json_decode($json, true);

        $defensoresDto->setIdDefensorImputadoCarpeta($data["idReferencia"]);
        $defensoresDto = $defensoresDao->selectDefensoresimputadoscarpetas($defensoresDto);
        if ($defensoresDto != "") {
            $defensoresAuxDto->setIdDefensorImputadoCarpeta($defensoresDto[0]->getIdDefensorImputadoCarpeta());
            $defensoresAuxDto->setCveTipoDefensor(1);
            $defensoresAuxDto->setNombre(utf8_decode($data["nombreDefensor"] . " " . $data["paternoDefensor"] . " " . $data["maternoDefensor"]));
            $defensoresAuxDto->setEmail($data["emailDefensor"]);
            $defensoresAuxDto->setCelular($data["celularDefensor"]);
            $defensoresAuxDto->setTelefono(utf8_decode($defensoresDto[0]->getTelefono() . " |DATOS RESPUESTA|" . $data["folioSolicitud"] . "|" . $data["estatus"]));
            $defensoresAuxDto->setActivo("S");

//            $juzgadosDto = new JuzgadosDTO();
//            $$juzgadosDtojuzgadosDao = new JuzgadosDAO();

            $carpetasJudicialesDto = new CarpetasjudicialesDTO();
            $carpetasJudicialesDao = new CarpetasjudicialesDAO();

            $telefonosDto = new TelefonosimputadoscarpetasDTO();
            $telefonosDao = new TelefonosimputadoscarpetasDAO();

            $domicilioDto = new DomiciliosimputadoscarpetasDTO;
            $domicilioDao = new DomiciliosimputadoscarpetasDAO;

            $delitoscarpetasDto = new DelitoscarpetasDTO();
            $delitoscarpetasDao = new DelitoscarpetasDAO();

            $generosDto = new GenerosDTO();
            $generosDao = new GenerosDAO();

            $estadoCivilDto = new EstadoscivilesDTO();
            $estadoCivilDao = new EstadoscivilesDAO();

            $nivelInstruccionDto = new NivelesinstruccionesDTO();
            $nivelInstruccionDao = new NivelesinstruccionesDAO();

            $ocupacionDto = new OcupacionesDTO();
            $ocupacionDao = new OcupacionesDAO();

            $paisesDto = new PaisesDTO();
            $paisesDao = new PaisesDAO();

            $estadosDto = new EstadosDTO();
            $estadosDao = new EstadosDAO();

            $municipiosDto = new MunicipiosDTO();
            $municipiosDao = new MunicipiosDAO();

            $drogasDto = new ImputadosdrogascarpetasDTO();
            $drogasDao = new ImputadosdrogascarpetasDAO();

            $desDrogasDto = new DrogasDTO();
            $desDrogasDao = new DrogasDAO();

            $interpreteDto = new InterpretesDTO();
            $interpreteDao = new InterpretesDAO();

            $imputadosCarpetasDto = new ImputadoscarpetasDTO;
            $imputadosCarpetasDao = new ImputadoscarpetasDAO;
            $impofedelCarpetasDto = new ImpofedelcarpetasDTO;
            $impofedelCarpetasDao = new ImpofedelcarpetasDAO;

            $imputadosCarpetasDto->setIdImputadoCarpeta($defensoresDto[0]->getIdImputadoCarpeta());
            $imputadosCarpetasDto = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto);
            if ($imputadosCarpetasDto != "") {
                $carpetasJudicialesDto->setIdCarpetaJudicial($imputadosCarpetasDto[0]->getIdCarpetaJudicial());
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                if ($carpetasJudicialesDto != "") {
                    $DefensoresimputadoscarpetasDto = $defensoresDao->updateDefensoresimputadoscarpetas($defensoresAuxDto);
                    if ($DefensoresimputadoscarpetasDto != "") {
                        $param .= "{";
                        list($fecha, $hora) = explode(" ", $DefensoresimputadoscarpetasDto[0]->getFechaActualizacion());
                        $param .= '"estatus":"Correcto",';
                        $param .= '"idReferencia":' . json_encode(utf8_encode($DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta())) . ",";

                        $result = ($DefensoresimputadoscarpetasDto[0]->getTelefono());
                        $parte = explode("|", $result);
                        $param .= '"folioSolicitud":' . json_encode(utf8_encode($parte[1])) . ",";
                        $param .= '"fechaRecepcion":' . json_encode(utf8_encode($this->fechaNormal($fecha))) . ",";
                        $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                        $param .= '"tipoAudiencia": "",'; // verificar si el tipo de audiencia se manda vacio
                        // Traer los datos desde carpeta judicial  en vez de solicitud de audiencia//
                        $param .= '"NUC":' . json_encode(utf8_encode($carpetasJudicialesDto[0]->getNuc())) . ",";
                        $param .= '"carpetaInvestigacion":' . json_encode(utf8_encode($carpetasJudicialesDto[0]->getCarpetaInv())) . ",";
                        $param .= '"observaciones":' . json_encode(utf8_encode($carpetasJudicialesDto[0]->getObservaciones())) . ",";
                        $param .= '"curp":' . json_encode(utf8_encode($imputadosCarpetasDto[0]->getCurp())) . ",";
                        $param .= '"alias":' . json_encode(utf8_encode($imputadosCarpetasDto[0]->getAlias())) . ",";
                        $param .= '"edad":' . json_encode(utf8_encode($imputadosCarpetasDto[0]->getEdad())) . ",";

                        if ($imputadosCarpetasDto[0]->getCveGenero() != "" && $imputadosCarpetasDto[0]->getCveGenero() != 0) {
                            $generosDto->setCveGenero($imputadosCarpetasDto[0]->getCveGenero());
                            $generosDto = $generosDao->selectGeneros($generosDto);
                            if ($generosDto != "") {
                                $param .= '"sexo":' . json_encode(utf8_encode($generosDto[0]->getDesGenero())) . ",";
                            } else {
                                $param .= '"sexo": "",';
                            }
                        } else {
                            $param .= '"sexo": "",';
                        }
                        if ($imputadosCarpetasDto[0]->getCveEstadoCivil() != "" && $imputadosCarpetasDto[0]->getCveEstadoCivil() != 0) {
                            $estadoCivilDto->setCveEstadoCivil($imputadosCarpetasDto[0]->getCveEstadoCivil());
                            $estadoCivilDto = $estadoCivilDao->selectEstadosciviles($estadoCivilDto);
                            if ($estadoCivilDto != "") {
                                $param .= '"edoCivil":' . json_encode(utf8_encode($estadoCivilDto[0]->getDesEstadoCivil())) . ",";
                            } else {
                                $param .= '"edoCivil": "",';
                            }
                        } else {
                            $param .= '"edoCivil": "",';
                        }
                        if ($imputadosCarpetasDto[0]->getCveNivelInstruccion() != "" && $imputadosCarpetasDto[0]->getCveNivelInstruccion() != 0) {
                            $nivelInstruccionDto->setCveNivelInstruccion($imputadosCarpetasDto[0]->getCveNivelInstruccion());
                            $nivelInstruccionDto = $nivelInstruccionDao->selectNivelesinstrucciones($nivelInstruccionDto);
                            if ($nivelInstruccionDto != "") {
                                $param .= '"nivelEstudios":' . json_encode(utf8_encode($nivelInstruccionDto[0]->getDesNivelInstruccion())) . ",";
                            } else {
                                $param .= '"nivelEstudios": "",';
                            }
                        } else {
                            $param .= '"nivelEstudios": "",';
                        }
                        if ($imputadosCarpetasDto[0]->getCveOcupacion() != "" && $imputadosCarpetasDto[0]->getCveOcupacion() != 0) {
                            $ocupacionDto->setCveOcupacion($imputadosCarpetasDto[0]->getCveOcupacion());
                            $ocupacionDto = $ocupacionDao->selectOcupaciones($ocupacionDto);
                            if ($ocupacionDto != "") {
                                $param .= '"ocupacion":' . json_encode(utf8_encode($ocupacionDto[0]->getDesOcupacion())) . ",";
                            } else {
                                $param .= '"ocupacion": "",';
                            }
                        } else {
                            $param .= '"ocupacion": "",';
                        }
                        if ($imputadosCarpetasDto[0]->getCveInterprete() != "" && $imputadosCarpetasDto[0]->getCveInterprete() != 0) {
                            $interpreteDto->setCveInterprete($imputadosCarpetasDto[0]->getCveInterprete());
                            $interpreteDto = $interpreteDao->selectInterpretes($interpreteDto);
                            if ($interpreteDto != "") {
                                $param .= '"requiereTraductor":' . json_encode(utf8_encode($interpreteDto[0]->getDesInterprete())) . ",";
                            } else {
                                $param .= '"requiereTraductor": "",';
                            }
                        } else {
                            $param .= '"requiereTraductor": "",';
                        }
                        #############################DOMICILIOS#################################################################
                        $domicilioDto->setIdImputadoCarpeta($imputadosCarpetasDto[0]->getIdImputadoCarpeta());
                        $domicilioDto->setActivo("S");
                        $domicilioDto = $domicilioDao->selectDomiciliosimputadosCarpetas($domicilioDto, " order by DomicilioProcesal desc, recidenciaHabitual desc ");
                        if ($domicilioDto != "") {
                            $param .= '"calle":' . json_encode(utf8_encode($domicilioDto[0]->getDireccion())) . ",";
                            $param .= '"numInt":' . json_encode(utf8_encode($domicilioDto[0]->getNumInterior())) . ",";
                            $param .= '"numExt":' . json_encode(utf8_encode($domicilioDto[0]->getNumExterior())) . ",";
                            $param .= '"colonia":' . json_encode(utf8_encode($domicilioDto[0]->getColonia())) . ",";
                            $param .= '"cp":' . json_encode(utf8_encode($domicilioDto[0]->getCp())) . ",";
                            if ($domicilioDto[0]->getCvePais() != "" && $domicilioDto[0]->getCvePais() != 0) {
                                $paisesDto->setCvePais($domicilioDto[0]->getCvePais());
                                $paisesDto = $paisesDao->selectPaises($paisesDto);
                                if ($paisesDto != "") {
                                    $param .= '"pais":' . json_encode(utf8_encode($paisesDto[0]->getDesPais())) . ",";
                                } else {
                                    $param .= '"pais": "",';
                                }
                            } else {
                                $param .= '"pais": "",';
                            }
                            if ($domicilioDto[0]->getCvePais() == 119) {
                                if ($domicilioDto[0]->getCveEstado() != "" && $domicilioDto[0]->getCveEstado() != 0) {
                                    $estadosDto->setCveEstado($domicilioDto[0]->getCveEstado());
                                    $estadosDto = $estadosDao->selectEstados($estadosDto);
                                    if ($estadosDto != "") {
                                        $param .= '"estado":' . json_encode(utf8_encode($estadosDto[0]->getDesEstado())) . ",";
                                    } else {
                                        $param .= '"estado": "",';
                                    }
                                } else {
                                    $param .= '"estado":' . json_encode(utf8_encode($domicilioDto[0]->getEstado())) . ",";
                                }
                                if ($domicilioDto[0]->getCveMunicipio() != "" && $domicilioDto[0]->getCveMunicipio() != 0) {
                                    $municipiosDto->setCveMunicipio($domicilioDto[0]->getCveMunicipio());
                                    $municipiosDto = $municipiosDao->selectMunicipios($municipiosDto);
                                    if ($municipiosDto != "") {
                                        $param .= '"municipio":' . json_encode(utf8_encode($municipiosDto[0]->getDesMunicipio())) . ",";
                                    } else {
                                        $param .= '"municipio": "",';
                                    }
                                } else {
                                    $param .= '"municipio":' . json_encode(utf8_encode($domicilioDto[0]->getMunicipio())) . ",";
                                }
                            } else {
                                $param .= '"estado":' . json_encode(utf8_encode($domicilioDto[0]->getEstado())) . ",";
                                $param .= '"municipio":' . json_encode(utf8_encode($domicilioDto[0]->getMunicipio())) . ",";
                            }
                        } else {
                            $param .= '"calle": "",';
                            $param .= '"numInt": "",';
                            $param .= '"numExt": "",';
                            $param .= '"colonia": "",';
                            $param .= '"cp": "",';
                            $param .= '"pais": "",';
                            $param .= '"ciudad": "",';
                            $param .= '"estado": "",';
                            $param .= '"municipio": "",';
                        }
                        #############################TELEFONO#################################################################s
                        $telefonosDto->setIdImputadoCarpeta($imputadosCarpetasDto[0]->getIdImputadoCarpeta());
                        $telefonosDto->setActivo("S");
                        $telefonosDto = $telefonosDao->selectTelefonosimputadosCarpetas($telefonosDto);
                        if ($telefonosDto != "") {
                            $param .= '"cel":' . json_encode(utf8_encode($telefonosDto[0]->getCelular())) . ",";
                            $param .= '"email":' . json_encode(utf8_encode($telefonosDto[0]->getEmail())) . ",";
                        } else {
                            $param .= '"cel": "",';
                            $param .= '"email": "",';
                        }
                        ###############################Drogas######################################################################
                        $drogasDto->setIdImputadoCarpeta($imputadosCarpetasDto[0]->getIdImputadoCarpeta());
                        $drogasDto->setActivo("S");

                        $drogasDto = $drogasDao->selectImputadosdrogascarpetas($drogasDto);
                        if ($drogasDto != "") {
                            $param .= '"adicciones": "Si",';

                            $cualesDrogas = "";
                            foreach ($drogasDto as $droga) {
                                $desDrogasDto->setCveDroga($droga->getCveDroga());
                                $resDrogasDto = $desDrogasDao->selectDrogas($desDrogasDto);
                                $cualesDrogas = $cualesDrogas . "," . $resDrogasDto[0]->getDesDroga();
                            }
//                            $cualesDrogas = substr($cualesDrogas, 0, -1);s
                            $substr = substr($cualesDrogas, 1);
                            $param .= '"cualesAdicciones":' . json_encode(utf8_encode($substr)) . ",";
                        } else {
                            $param .= '"adicciones": "No",';
                            $param .= '"cualesAdicciones": "",';
                        }
                        ###############################Delitos######################################################################
                        $impofedelCarpetasDto->setIdImputadoCarpeta($imputadosCarpetasDto[0]->getIdImputadoCarpeta());
                        $impofedelCarpetasDto->setActivo("S");
                        $impofedelCarpetasDto = $impofedelCarpetasDao->selectImpofedelCarpetas($impofedelCarpetasDto);
                        if ($impofedelCarpetasDto != "") {
                            $delitosId = "";
                            foreach ($impofedelCarpetasDto as $impofedel) {
                                $delitoscarpetasDto->setIdDelitoCarpeta($impofedel->getIdDelitoCarpeta());
                                $rsDelitosCarpetasDto = $delitoscarpetasDao->selectDelitosCarpetas($delitoscarpetasDto);
                                $delitosId = $delitosId . "," . $rsDelitosCarpetasDto[0]->getCveDelito();
                            }


//                            $delitosId = substr($delitosId, -1, 0);
                            $substr1 = substr($delitosId, 1);
                            $param .= '"delitoid":' . json_encode(utf8_encode($substr1)) . "";
                        } else {
                            $param .= '"delitoid": ""';
                        }
                        $param .= "}";
                    } else {
                        $fecha = date("d/m/Y");
                        $hora = date("H:i:s");
                        $param .= "{";
                        $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                        $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                        $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                        $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                        $param .= '"mensaje":' . json_encode(utf8_encode("No se puedo conectar con el servidor.")) . ",";
                        $param .= '"NUC":' . json_encode("") . "";
                        $param .= "}";
                    }
                } else {
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");
                    $param .= "{";
                    $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                    $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                    $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                    $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                    $param .= '"mensaje":' . json_encode(utf8_encode("La Carpeta no existe.")) . ",";
                    $param .= '"NUC":' . json_encode("") . "";
                    $param .= "}";
                }
            } else {
                $fecha = date("d/m/Y");
                $hora = date("H:i:s");
                $param .= "{";
                $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
                $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
                $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
                $param .= '"mensaje":' . json_encode(utf8_encode("El imputado no existe.")) . ",";
                $param .= '"NUC":' . json_encode("") . "";
                $param .= "}";
            }
        } else {
            $fecha = date("d/m/Y");
            $hora = date("H:i:s");
            $param .= "{";
            $param .= '"idReferencia":' . json_encode(utf8_encode($data["idReferencia"])) . ",";
            $param .= '"fechaRecepcion":' . json_encode(utf8_encode($fecha)) . ",";
            $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
            $param .= '"estatus":' . json_encode(utf8_encode("Incorrecto")) . ",";
            $param .= '"mensaje":' . json_encode(utf8_encode("El idReferencia no existe.")) . ",";
            $param .= '"NUC":' . json_encode("") . "";
            $param .= "}";
        }

        return $param;
    }

    private function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);

        return $dia . "/" . $mes . "/" . $year;
    }

}

?>