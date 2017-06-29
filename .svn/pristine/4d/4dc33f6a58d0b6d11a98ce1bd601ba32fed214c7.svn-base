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

if (!isset($_SESSION)) session_start();

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

class JuzgadoresController {

    private $proveedor;

    public function __construct()
    {

    }

    public function validarJuzgadores($JuzgadoresDto)
    {
        $JuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getidJuzgador()))));
        $JuzgadoresDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getcveUsuario()))));
        $JuzgadoresDto->setnumEmpleado(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getnumEmpleado()))));
        $JuzgadoresDto->settitulo(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->gettitulo()))));
        $JuzgadoresDto->setpaterno(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getpaterno()))));
        $JuzgadoresDto->setmaterno(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getmaterno()))));
        $JuzgadoresDto->setnombre(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getnombre()))));
        $JuzgadoresDto->setcveTipoJuzgador(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getcveTipoJuzgador()))));
        $JuzgadoresDto->setsorteo(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getsorteo()))));
        $JuzgadoresDto->setprogramable(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getprogramable()))));
        $JuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getactivo()))));
        $JuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getfechaRegistro()))));
        $JuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($JuzgadoresDto->getfechaActualizacion()))));

        return $JuzgadoresDto;
    }

    public function validaCampos($JuzgadoresDto)
    {
        $validacion = new Validacion();
        $num = $validacion->datoTipoRequerido($JuzgadoresDto->getnumEmpleado());
        $paterno = $validacion->datoTipoRequerido($JuzgadoresDto->getpaterno());
        $materno = $validacion->datoTipoRequerido($JuzgadoresDto->getmaterno());
        $nombre = $validacion->datoTipoRequerido($JuzgadoresDto->getnombre());
        $tipoJuzgador = $validacion->datoTipoRequerido($JuzgadoresDto->getcveTipoJuzgador());
        $sorteo = $validacion->datoTipoRequerido($JuzgadoresDto->getsorteo());
        $programable = $validacion->datoTipoRequerido($JuzgadoresDto->getprogramable());
        $activo = $validacion->datoTipoRequerido($JuzgadoresDto->getactivo());
        $juzgados = $validacion->datoTipoRequerido($JuzgadoresDto->getJuzgados());
        $estatus = true;
        $mensaje = [];
        if ($num == false) {
            $mensaje["mensaje"] = "El campo Numero Empleado esta vacio";
            $estatus = false;
        } else if ($paterno == false) {
            $mensaje["mensaje"] = "El campo Paterno esta vacio";
            $estatus = false;
        } else if ($materno == false) {
            $mensaje["mensaje"] = "El campo Materno esta vacio";
            $estatus = false;
        } else if ($nombre == false) {
            $mensaje["mensaje"] = "El campo Nombre esta vacio";
            $estatus = false;
        } else if ($tipoJuzgador == false) {
            $mensaje["mensaje"] = "El campo Tipo Juzgador esta vacio";
            $estatus = false;
        } else if ($sorteo == false) {
            $mensaje["mensaje"] = "El campo Sorteo esta vacio";
            $estatus = false;
        } else if ($programable == false) {
            $mensaje["mensaje"] = "El campo Programable esta vacio";
            $estatus = false;
            /* } else if ($activo == false) {
              $mensaje["mensaje"] = "El campo Activo esta vacio";
              $estatus = false; */
        } else if ($juzgados == false) {
            $mensaje["mensaje"] = "Debes elegir al menos un Juzgado";
            $estatus = false;
        }
        if ($estatus == true) {
            $estatus = array("status" => "OK", "totalCount" => "1");
        } else {
            $estatus = array("status" => "Error", "totalCount" => "0");
        }
        $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));

        return $respuesta;
    }

    public function selectJuzgadores($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, " ORDER BY nombre ASC", $proveedor);

        return $JuzgadoresDto;
    }

    public function selectJuzgados($JuzgadoresDto, $proveedor = null)
    {
        $idJuzgador = $JuzgadoresDto->getIdJuzgador();
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgados($JuzgadoresDto, $proveedor);
        $juzgados = array();
        $informacion = array();
        $mensaje = array("estatus" => "ok", "mensaje" => "SI EXISTEN DATOS");
        if ($JuzgadoresDto != "") {
            foreach ($JuzgadoresDto as $JuzgadorDto) {
                $juzgados[] = array(
                    "cveJuzgado" => $JuzgadorDto->getCveJuzgado()
                );
            }
        }

        $TelefonosJuzgadoresSelectDto = new TelefonosJuzgadoresDTO();
        $TelefonosJuzgadoresSelectDto->setidJuzgador($idJuzgador);
        $TelefonosJuzgadoresSelectDto->setActivo("S");
        $TelefonosJuzgadoresSelectDao = new TelefonosJuzgadoresDAO();
        $TelefonosJuzgadoresSelectDto = $TelefonosJuzgadoresSelectDao->selectTelefonosJuzgadores($TelefonosJuzgadoresSelectDto, $proveedor);

        if ($TelefonosJuzgadoresSelectDto != "") {
            foreach ($TelefonosJuzgadoresSelectDto as $TelefonoJuzgadorDto) {
                $informacion[] = array("telefono" => $this->validaNull($TelefonoJuzgadorDto->getTelefono()),
                                       "celular"  => $this->validaNull($TelefonoJuzgadorDto->getCelular()),
                                       "email"    => $this->validaNull($TelefonoJuzgadorDto->getEmail()));
            }
        }
        $resultado["datos"] = array(
            "juzgados"    => $juzgados,
            "informacion" => $informacion
        );
        $return = array_merge($mensaje, $resultado);

        return json_encode($return);
    }

    public function validaNull($dato)
    {
        if ($dato == "") {
            $dato = '';
        } else {
            $dato = utf8_encode($dato);
        }

        return $dato;
    }

    public function selectJuzgadoresGenerico($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadoresGenerico($JuzgadoresDto, "", $proveedor);

        return $JuzgadoresDto;
    }

    public function selectJuzgadoresGenericoJuzgado($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadoresGenericoJuzgado($JuzgadoresDto, "", $proveedor);

        return $JuzgadoresDto;
    }

    public function selectJuzgadoresLike($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadoresLike($JuzgadoresDto, $proveedor);

        return $JuzgadoresDto;
    }

    public function selectJuzgadoreCveUsario($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadoreCveUsario($JuzgadoresDto, $proveedor);

        return $JuzgadoresDto;
    }

    public function insertJuzgadores($JuzgadoresDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');
        $validaCampos = $this->validaCampos($JuzgadoresDto);
        if ($validaCampos['status'] != "OK") {
            exit(json_encode($validaCampos));
        }
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $telefonos = $JuzgadoresDto->getParam();
        $juzgados = $JuzgadoresDto->getJuzgados();

        $validacionJuzgador = $this->selectJuzgadoreCveUsario($JuzgadoresDto);
        if ($validacionJuzgador != "") {
            $dtoToJson = new DtoToJson($validacionJuzgador);
            $respuestaSelect = $dtoToJson->toJson("EL USUARIO YA EXISTE");

            return $respuestaSelect;
        } else {
            try {
                $JuzgadoresDao = new JuzgadoresDAO();
                $bitacora = new BitacoramovimientosController();
                $JuzgadoresDto = $JuzgadoresDao->insertJuzgadores($JuzgadoresDto, $proveedor);
                if ($telefonos != "") {
                    foreach ($telefonos as $value) {
                        $decode = json_decode($value, true);
                        $TelefonosJuzgadoresDto = new TelefonosJuzgadoresDTO();
                        $TelefonosJuzgadoresDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
                        $TelefonosJuzgadoresDto->setTelefono($decode["telefono"]);
                        $TelefonosJuzgadoresDto->setCelular($decode["celular"]);
                        $TelefonosJuzgadoresDto->setEmail($decode["email"]);
                        $TelefonosJuzgadoresDto->setActivo("S");
                        $TelefonosJuzgadoresDao = new TelefonosJuzgadoresDAO();
                        $TelefonosJuzgadoresDto = $TelefonosJuzgadoresDao->insertTelefonosJuzgadores($TelefonosJuzgadoresDto, $proveedor);
                    }
                }
                if ($juzgados != "") {
                    $juzgadosDecode = json_decode($juzgados, true);
                    foreach ($juzgadosDecode as $valueJuzgados) {
                        $JuzgadoresJuzgadosDto = new JuzgadoresJuzgadosDTO();
                        $JuzgadoresJuzgadosDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
                        $JuzgadoresJuzgadosDto->setCveJuzgado($valueJuzgados);
                        $JuzgadoresJuzgadosDto->setActivo("S");
                        $JuzgadoresJuzgadosDao = new JuzgadoresJuzgadosDAO();
                        $JuzgadoresJuzgadosDto = $JuzgadoresJuzgadosDao->insertJuzgadoresJuzgados($JuzgadoresJuzgadosDto, $proveedor);
                    }
                }
                $bitacoraDomicilio = $bitacora->agregar(72, 'INSERCION tbljuzgadores', 'txt', serialize($JuzgadoresDto[0]), '');
                $dtoToJson = new DtoToJson($JuzgadoresDto);
                $JuzgadoresDto = $dtoToJson->toJson("SE INSERTO EL REGISTRO");
                if (!count($bitacoraDomicilio))
                    throw new Exception('no se pudo guardar la accion alta juzgador en bitacora');
                $this->proveedor->execute('COMMIT');

                return $JuzgadoresDto;
            } catch (Exception $e) {
                $this->proveedor->execute('ROLLBACK');

                return false;
            }
        }
    }

    public function updateJuzgadores($JuzgadoresDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');
        try {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $telefonos = $JuzgadoresDto->getParam();
            $juzgados = $JuzgadoresDto->getJuzgados();
            $JuzgadoresDao = new JuzgadoresDAO();
            $bitacora = new BitacoramovimientosController();
            $JuzgadoresDto = $JuzgadoresDao->updateJuzgadores($JuzgadoresDto, $proveedor);

            $TelefonosJuzgadoresSelectDto = new TelefonosJuzgadoresDTO();
            $TelefonosJuzgadoresSelectDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
            $TelefonosJuzgadoresSelectDto->setActivo("S");
            $TelefonosJuzgadoresSelectDao = new TelefonosJuzgadoresDAO();
            $TelefonosJuzgadoresSelectDto = $TelefonosJuzgadoresSelectDao->selectTelefonosJuzgadores($TelefonosJuzgadoresSelectDto, $proveedor);

            if ($TelefonosJuzgadoresSelectDto != "") {
                foreach ($TelefonosJuzgadoresSelectDto as $TelefonoJuzgadorSelectDto) {
                    $TelefonosJuzgadoresUpdateDto = new TelefonosJuzgadoresDTO();
                    $TelefonosJuzgadoresUpdateDto->setidTelefonJuzgador($TelefonoJuzgadorSelectDto->getidTelefonJuzgador());
                    $TelefonosJuzgadoresUpdateDto->setActivo("N");
                    $TelefonosJuzgadoresUpdateDao = new TelefonosJuzgadoresDAO();
                    $TelefonosJuzgadoresUpdateDto = $TelefonosJuzgadoresUpdateDao->updateTelefonosJuzgadores($TelefonosJuzgadoresUpdateDto, $proveedor);
                }
            }

            $JuzgadoresJuzgadosSelectDto = new JuzgadoresJuzgadosDTO();
            $JuzgadoresJuzgadosSelectDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
            $JuzgadoresJuzgadosSelectDto->setActivo("S");
            $JuzgadoresJuzgadosSelectDao = new JuzgadoresJuzgadosDAO();
            $JuzgadoresJuzgadosSelectDto = $JuzgadoresJuzgadosSelectDao->selectJuzgadoresJuzgados($JuzgadoresJuzgadosSelectDto, $proveedor);
            if ($JuzgadoresJuzgadosSelectDto != "") {
                foreach ($JuzgadoresJuzgadosSelectDto as $JuzgadorJuzgadoSelectDto) {
                    $JuzgadoresJuzgadosUpdateDto = new JuzgadoresJuzgadosDTO();
                    $JuzgadoresJuzgadosUpdateDto->setidJuzgadorJuzgado($JuzgadorJuzgadoSelectDto->getIdJuzgadorJuzgado());
                    $JuzgadoresJuzgadosUpdateDto->setActivo("N");
                    $JuzgadoresJuzgadosUpdateDao = new JuzgadoresJuzgadosDAO();
                    $JuzgadoresJuzgadosUpdateDto = $JuzgadoresJuzgadosUpdateDao->updateJuzgadoresJuzgados($JuzgadoresJuzgadosUpdateDto, $proveedor);
                }
            }

            if ($telefonos != "") {
                foreach ($telefonos as $value) {
                    $decode = json_decode($value, true);
                    $TelefonosJuzgadoresDto = new TelefonosJuzgadoresDTO();
                    $TelefonosJuzgadoresDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
                    $TelefonosJuzgadoresDto->setTelefono($decode["telefono"]);
                    $TelefonosJuzgadoresDto->setCelular($decode["celular"]);
                    $TelefonosJuzgadoresDto->setEmail($decode["email"]);
                    $TelefonosJuzgadoresDto->setActivo("S");
                    $TelefonosJuzgadoresDao = new TelefonosJuzgadoresDAO();
                    $TelefonosJuzgadoresDto = $TelefonosJuzgadoresDao->insertTelefonosJuzgadores($TelefonosJuzgadoresDto, $proveedor);
                }
            }
            if ($juzgados != "") {
                $juzgadosDecode = json_decode($juzgados, true);
                foreach ($juzgadosDecode as $valueJuzgados) {
                    $JuzgadoresJuzgadosDto = new JuzgadoresJuzgadosDTO();
                    $JuzgadoresJuzgadosDto->setidJuzgador($JuzgadoresDto[0]->getIdJuzgador());
                    $JuzgadoresJuzgadosDto->setCveJuzgado($valueJuzgados);
                    $JuzgadoresJuzgadosDto->setActivo("S");
                    $JuzgadoresJuzgadosDao = new JuzgadoresJuzgadosDAO();
                    $JuzgadoresJuzgadosDto = $JuzgadoresJuzgadosDao->insertJuzgadoresJuzgados($JuzgadoresJuzgadosDto, $proveedor);
                }
            }
            $bitacoraDomicilio = $bitacora->agregar(73, 'ACTUALIZACION tbljuzgadores', 'txt', serialize($JuzgadoresDto[0]), '');
            if (!count($bitacoraDomicilio))
                throw new Exception('no se pudo guardar la accion actualizacion juzgador en bitacora');
            $this->proveedor->execute('COMMIT');

            return $JuzgadoresDto;
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return false;
        }
    }

    public function updateBaja($JuzgadoresDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');
        try {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresDao = new JuzgadoresDAO();
            $bitacora = new BitacoramovimientosController();
            $JuzgadoresDto = $JuzgadoresDao->updateBaja($JuzgadoresDto, $proveedor);
            $bitacoraDomicilio = $bitacora->agregar(74, 'BORRADO tbljuzgadores', 'txt', serialize($JuzgadoresDto[0]), '');
            if (!count($bitacoraDomicilio))
                throw new Exception('no se pudo guardar la accion baja juzgador en bitacora');

            return $JuzgadoresDto;
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return false;
        }
    }

    public function deleteJuzgadores($JuzgadoresDto, $proveedor = null)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = $JuzgadoresDao->deleteJuzgadores($JuzgadoresDto, $proveedor);

        return $JuzgadoresDto;
    }

    public function getJuzgadoresWebservice($criterio, $criterioCve)
    {
        $UsuarioCliente = new UsuarioCliente();
        $listaUsuarios = json_decode($UsuarioCliente->selectPersonal_Nombre($criterioCve, $criterio, ''), true);

        if (in_array("Empty", $listaUsuarios)) {
            $datos[] = ["status" => "ERROR"];
        } else {
            foreach ($listaUsuarios as $value) {
                $datosArray[] = ["clave"          => $value["cveUsuario"],
                                 "numeroEmpleado" => $value["numEmpleado"],
                                 "paterno"        => $value["paterno"],
                                 "materno"        => $value["materno"],
                                 "nombre"         => $value["nombre"]];
            }
            $datos = array();
            $datos = ["status" => "ok", "data" => $datosArray];
        }

        return json_encode($datos);
    }

    /**
     * seleccciona los juzgadores que esten en la tabla tbljuzgadores
     * y el cveJuzgado = al de la solicitud de la audiencia
     * @param $JuzgadoresDto
     * @param $idSolicitudAudiencia
     * @return array
     */
    public function getJuzgadoresByCveJuzgado($JuzgadoresDto, $idSolicitudAudiencia)
    {
        try {

            $SolicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $SolicitudAudienciaDao = new SolicitudesaudienciasDAO();

            $SolicitudAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $SolicitudAudienciaDto->setActivo('S');

            $selectSolicitud = $SolicitudAudienciaDao->selectSolicitudesaudiencias($SolicitudAudienciaDto);

            if ($selectSolicitud == '') throw new Exception('No existe una solicitud de audiencia con el id = ' . $idSolicitudAudiencia);

            $resultSolicitud = $selectSolicitud[0]->toString();

            $cveJuzdado = $resultSolicitud['cveJuzgado'];

            if (!isset($_SESSION['cveAdscripcion'])) throw new Exception('No se inicio sesion correctamente.');

            //$cveJuzdado = $_SESSION['cveAdscripcion'];

            /*
             * cambios solicitados el 27 mayo 2016, gaona pidio mostrar todos los juzgadores activos
             */

            //guardamos la cataudiencia de la solicitud

            $cveCatAudiencia = $resultSolicitud['cveCatAudiencia'];

            $catAudienciasDao = new CataudienciasDAO();
            $catAudienciasDto = new CataudienciasDTO();

            $catAudienciasDto->setCveCatAudiencia($cveCatAudiencia);
            $catAudienciasDto->setActivo('S');

            $selectCatAudiencia = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

            if ($selectCatAudiencia == '') throw new Exception('no se encontro la categoria de la audiencia solicitada');

            //obtenemos la etapa procesal de la categoria de la audiencia

            $etapaProcesalCatAudiencia = $selectCatAudiencia[0]->getCveEtapaProcesal();


            //TIPOS JUZGADORES
            //1	CONTROL	S	2015-09-11 12:18:52	2015-09-11 12:18:52
            //2	JUICIO	S	2015-09-11 12:18:52	2015-09-11 12:18:52
            //3	CONTROL Y JUICIO	S	2015-09-11 12:18:52	2015-09-11 12:18:52
            //4	MAGISTADO	S	2015-09-11 12:18:52	2015-09-11 12:18:52
            //5	EJECUCION 	S	2015-10-21 13:03:47	2015-10-21 13:03:47
            //6	SECRETARIO DE SALA	S	2016-05-17 13:27:30	2016-05-17 13:27:30

            //TIPOS DE ETAPAS PROCESALES DE LA CATEGORIA DE LA AUDIENCIA
            //1	ETAPA DE INVESTIGACION O PRELIMINAR	S	2015-09-11 11:25:56	2015-09-11 11:25:56
            //2	ETAPA INTERMEDIA O PREPARACION DE JUICIO	S	2015-09-11 11:25:56	2015-09-11 11:25:56
            //3	ETAPA DE JUICIO O DEBATE	S	2015-09-11 11:25:56	2015-09-11 11:25:56
            //4	ETAPA   DE EJECUCION DE SENTENCIA	S	2015-09-11 11:25:56	2015-09-11 11:25:56
            //5	PROCEDIMIENTOS ESPECIALES	S	2015-09-11 11:25:56	2015-09-11 11:25:56
            //6	ETAPA DE INPUGNACION	S	2015-09-11 11:25:56	2015-09-11 11:25:56

            /*$tiposJuzgadores = [
                '1' => [1, 3],
                '2' => [1, 3],
                '3' => [2, 3],
                '4' => [5],
                '5' => [4],
                '6' => [4]
            ];*/


            $tiposJuzgadores = [
                '1' => '(1,3)',
                '2' => '(1,3)',
                '3' => '(2,3)',
                '4' => '(5)',
                '5' => '(1,2,3)',
                '6' => '(4)'
            ];

            $juzgadores = [];

            $juzgadoresDao = new JuzgadoresDAO();
            $juzgadoresDto = new JuzgadoresDTO();

            $juzgadoresDto->setActivo('S');
            //$juzgadoresDto->setCveTipoJuzgador($tipoJuzgador);

            $selectJuzgadores = $juzgadoresDao->selectJuzgadores($juzgadoresDto, 'AND cveTipoJuzgador IN ' . $tiposJuzgadores[$etapaProcesalCatAudiencia] . ' ORDER BY NOMBRE ASC');

            if ($selectJuzgadores == '') {
                throw new Exception('No se encontraron juzgadores para el tipo de audiencia solicitada');
            }

            foreach ($selectJuzgadores as $index => $selectJuzgador) {

                $nombre = $selectJuzgador->getNombre() . ' ' . $selectJuzgador->getPaterno() . ' ' . $selectJuzgador->getMaterno();

                $tipo = $selectJuzgador->getCveTipoJuzgador();

                $tipos = [
                    '1' => 'CONTROL',
                    '2' => 'JUICIO',
                    '3' => 'CONTROL Y JUICIO',
                    '4' => 'MAGISTRADO',
                    '5' => 'EJECUCION',
                    '6' => 'SECRETARIO DE SALA'
                ];

                $juzgadores[$index]['id'] = $selectJuzgador->getIdJuzgador();
                $juzgadores[$index]['nombre'] = utf8_encode($nombre . ' ( ' . $tipos[$tipo] . ' ) ');


            }


            /*
             *
             */


            /*$jueces = [];

            $JuzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
            $JuzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();

            $JuzgadoresjuzgadosDto->setCveJuzgado($cveJuzdado);
            $JuzgadoresjuzgadosDto->setActivo('S');

            $selectJuzgadoresJuzgados = $JuzgadoresjuzgadosDao->selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto);

            if ($selectJuzgadoresJuzgados == '') throw new Exception('No se encontraron juzgadores para la audiencia solicitada, favor contactar al adminsitrador del sistema');

            foreach ($selectJuzgadoresJuzgados as $index => $juzgadorjuzgado) {

                $JuzgadoresDto = new JuzgadoresDTO();
                $JuzgadoresDao = new JuzgadoresDAO();
                $JuzgadosDto = new JuzgadosDTO();
                $JuzgadosDao = new JuzgadosDAO();

                $JuzgadoresDto->setIdJuzgador($juzgadorjuzgado->getIdJuzgador());
                $getJuzgador = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto);


                if ($getJuzgador[0]->getCveTipoJuzgador() == '') throw new Exception('uno de los juzgadores no tiene tipo de juzgado');

                $JuzgadosDto->setCveJuzgado($juzgadorjuzgado->getCveJuzgado());
                $getJuzgado = $JuzgadosDao->selectJuzgados($JuzgadosDto);

                $desJuzgado = '(-)';

                if ($getJuzgado != '') {
                    $desJuzgado = '( ' . $getJuzgado[0]->getDesJuzgado() . ' )';
                }

                if ($getJuzgador != '') {
                    $nombre = $getJuzgador[0]->getNombre() . ' ' . $getJuzgador[0]->getPaterno() . ' ' . $getJuzgador[0]->getMaterno();
                    $jueces[$index]['id'] = $getJuzgador[0]->getIdJuzgador();
                    $jueces[$index]['nombre'] = utf8_encode($nombre . ' ' . $desJuzgado);
                }

            }*/

            $response = [
                'estatus'    => 'ok',
                'totalCount' => count($juzgadores),
                'data'       => $juzgadores
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function guardaJuzgador($JuzgadoresDto)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresAuxDto = new JuzgadoresDTO();

        $JuzgadoresAuxDto->setCveUsuario($JuzgadoresDto->getCveUsuario());
        $JuzgadoresAuxDto->setNumEmpleado($JuzgadoresDto->getNumEmpleado());
        $JuzgadoresAuxDto->setActivo("S");

        $juzgadores = $JuzgadoresDao->selectJuzgadores($JuzgadoresAuxDto);
        $json = "";
        if ($juzgadores == "") {
            $x = 1;
            $i = 1;
            $rsJuzgadoresDto = $JuzgadoresDao->insertJuzgadores($JuzgadoresDto);
            if ($rsJuzgadoresDto != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"data":[';
                $json .= "{";
                $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getIdJuzgador())) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveUsuario())) . ",";
                $json .= '"numEmpleado":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getNumEmpleado())) . ",";
                $json .= '"titulo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getTitulo())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getMaterno())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getNombre())) . ",";
                $json .= '"cveTipoJuzgador":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveTipoJuzgador())) . ",";
                $json .= '"CveEspecialidad":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveEspecialidad())) . ",";
                $json .= '"sorteo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getSorteo())) . ",";
                $json .= '"programable":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getProgramable())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getActivo())) . "";
                $json .= "}";
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"status":"Error",';
                $json .= '"mnj":"Error al registrar los juzgadores."}';
            }
        } else {
            $json .= '{"status":"Error",';
            $json .= '"mnj":"El juzgador con esa clave de empleado ya existe."}';
        }

        return $json;
    }

    public function modificaJuzgadores($JuzgadoresDto)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();
//        $JuzgadoresAuxDto = new JuzgadoresDTO();
//
//        $JuzgadoresAuxDto->setCveUsuario($JuzgadoresDto->getCveUsuario());
//        $JuzgadoresAuxDto->setNumEmpleado($JuzgadoresDto->getNumEmpleado());
//        $JuzgadoresAuxDto->setActivo("S");
//
//        $juzgadores = $JuzgadoresDao->selectJuzgadores($JuzgadoresAuxDto);
//        if ($juzgadores == "") {
        $json = "";
        $x = 1;
        $i = 1;
        $rsJuzgadoresDto = $JuzgadoresDao->updateJuzgadores($JuzgadoresDto);
        if ($rsJuzgadoresDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"data":[';
            $json .= "{";
            $json .= '"idJuzgador":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getIdJuzgador())) . ",";
            $json .= '"cveUsuario":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveUsuario())) . ",";
            $json .= '"numEmpleado":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getNumEmpleado())) . ",";
            $json .= '"titulo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getTitulo())) . ",";
            $json .= '"paterno":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getPaterno())) . ",";
            $json .= '"materno":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getMaterno())) . ",";
            $json .= '"nombre":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getNombre())) . ",";
            $json .= '"cveTipoJuzgador":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveTipoJuzgador())) . ",";
            $json .= '"CveEspecialidad":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getCveEspecialidad())) . ",";
            $json .= '"sorteo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getSorteo())) . ",";
            $json .= '"programable":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getProgramable())) . ",";
            $json .= '"activo":' . json_encode(utf8_encode($rsJuzgadoresDto[0]->getActivo())) . "";
            $json .= "}";
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Error",';
            $json .= '"mnj":"Error al registrar los juzgadores."}';
        }
//        } else {
//            $json .= '{"status":"Error",';
//            $json .= '"mnj":"El juzgador con esa clave de empleado ya existe."}';
//        }
        return $json;
    }

    public function consultarJuzgadores($JuzgadoresDto)
    {
        $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
        $JuzgadoresDao = new JuzgadoresDAO();

        $json = "";
        $x = 1;
        $i = 1;
        $JuzgadoresDto->setActivo("S");
        $rsJuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, " order by nombre ASC, paterno ASC, materno ASC");
        if ($rsJuzgadoresDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"data":[';
            foreach ($rsJuzgadoresDto as $juzgador) {
                $json .= "{";
                $json .= '"idJuzgador":' . json_encode(($juzgador->getIdJuzgador())) . ",";
                $json .= '"cveUsuario":' . json_encode(($juzgador->getCveUsuario())) . ",";
                $json .= '"numEmpleado":' . json_encode(($juzgador->getNumEmpleado())) . ",";
                $json .= '"titulo":' . json_encode(($juzgador->getTitulo())) . ",";
                $json .= '"paterno":' . json_encode(($juzgador->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(($juzgador->getMaterno())) . ",";
                $json .= '"nombre":' . json_encode(($juzgador->getNombre())) . ",";
                $json .= '"cveTipoJuzgador":' . json_encode(($juzgador->getCveTipoJuzgador())) . ",";
                $json .= '"CveEspecialidad":' . json_encode(($juzgador->getCveEspecialidad())) . ",";
                $json .= '"sorteo":' . json_encode(($juzgador->getSorteo())) . ",";
                $json .= '"programable":' . json_encode(($juzgador->getProgramable())) . ",";
                $json .= '"activo":' . json_encode(($juzgador->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($rsJuzgadoresDto)) {
                    $json .= ",";
                }
            }

            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Error",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }

        return $json;
    }

}
