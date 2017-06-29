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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudOfendido.php");

date_default_timezone_set("America/Mexico_City");

class DefensoresofendidossolicitudesController extends ValidaSolicitudOfendido {

    private $proveedor;

    public function validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto->setidDefensorOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setcveTipoAsesor(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcveTipoAsesor()))));
        $DefensoresofendidossolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getnombre()))));
        $DefensoresofendidossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->gettelefono()))));
        $DefensoresofendidossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcelular()))));
        $DefensoresofendidossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getemail()))));
        $DefensoresofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getactivo()))));
        $DefensoresofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaRegistro()))));
        $DefensoresofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaActualizacion()))));

        return $DefensoresofendidossolicitudesDto;
    }

    public function validarDefensor($DefensoresofendidossolicitudesDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, $DefensoresofendidossolicitudesDto->getCveTipoAsesor())) {
            if ($DefensoresofendidossolicitudesDto->getCveTipoAsesor() <= 0) {
                $estatus = 'error';
                $msg[] = '* El tipo de defensor no es válido';
            }
        }

        if (!$validacion->between(1, 500, $DefensoresofendidossolicitudesDto->getNombre())) {
            $estatus = 'error';
            $msg[] = '* El nombre debe contener entre 1 y 500 caracteres y ser un texto';
        }

        if ($DefensoresofendidossolicitudesDto->getTelefono() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidossolicitudesDto->getTelefono())) {
                $estatus = 'error';
                $msg[] = '* El teléfono debe ser numerico y contener 10 digitos';
            }
        }

        if ($DefensoresofendidossolicitudesDto->getCelular() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidossolicitudesDto->getCelular())) {
                $estatus = 'error';
                $msg[] = '* El celular debe ser numerico y contener 10 digitos';
            }
        }


        //validaciones a la base de datos
        if ($estatus == "ok" && $DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud() == "") {
            $defensorValidateDto = new DefensoresofendidossolicitudesDTO();
            $defensorValidateDto->setIdOfendidoSolicitud($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud());
            $defensorValidateDto->setNombre($DefensoresofendidossolicitudesDto->getNombre());
            $defensorValidateDto->setActivo('S');

            $selectDefensores = $this->selectDefensoresofendidossolicitudes($defensorValidateDto);

            if (count($selectDefensores)) {
                $estatus = "error";
                $msg[] = '* El nombre del defensor ya esta registrado para el Ofendido';
            }
        }

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function peticionDefensorWebService($resultWebSerice) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "9010",
            CURLOPT_URL => "http://mini.evomatik.net:9010/ws/solicitud/save",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $resultWebSerice,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic cmVjZXB0b3JTb2xpY2l0dWQxOnNlY3JldA==",
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function agregarDefensorOfendido($DefensoresofendidossolicitudesDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede agregar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'agregar', 'representante', $this->proveedor);
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $validate = $this->validarDefensor($DefensoresofendidossolicitudesDto);
        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
            $defensorResponse = $DefensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $this->proveedor);

            if (!count($defensorResponse)) {

                throw new Exception('no se pudo guardar el defensor del ofendido');
            }

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraDefensor = $bitacora->agregar(64, 'INSERCION tbldefensoresofendidossolicitudes', 'txt', serialize($defensorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraDefensor)) {

                    throw new Exception('no se pudo guardar la accion agregar defensor en bitacora');
                }
            }


            $OfendidosSolicitudesDao = new OfendidossolicitudesDAO();
            $OfendidosSolicitudesDto = new OfendidossolicitudesDTO();
            $DefensoresAuxDto = new DefensoresofendidossolicitudesDTO();

            $rsSolicitudAudienciasDto = new SolicitudesaudienciasDTO();
            $rsSolicitudAudienciasDao = new SolicitudesaudienciasDAO();

            $OfendidosSolicitudesDto->setIdOfendidoSolicitud($defensorResponse[0]->getIdOfendidoSolicitud());
            $OfendidosSolicitudesDto = $OfendidosSolicitudesDao->selectOfendidossolicitudes($OfendidosSolicitudesDto, '', $this->proveedor);

            if ($OfendidosSolicitudesDto != "") {

                $rsSolicitudAudienciasDto->setIdSolicitudAudiencia($OfendidosSolicitudesDto[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudienciasDto = $rsSolicitudAudienciasDao->selectSolicitudesaudiencias($rsSolicitudAudienciasDto, '', '', $this->proveedor);

                if ($defensorResponse[0]->getCveTipoAsesor() == 6 || $defensorResponse[0]->getCveTipoAsesor() == 1) {
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");
                    if ($OfendidosSolicitudesDto[0]->getCveTipoPersona() == 1) {
                        $nombre = $OfendidosSolicitudesDto[0]->getNombre();
                        $paterno = $OfendidosSolicitudesDto[0]->getPaterno();
                        $materno = $OfendidosSolicitudesDto[0]->getMaterno();
                    } else {
                        $nombre = $OfendidosSolicitudesDto[0]->getNombreMoral();
                        $paterno = "";
                        $materno = "";
                    }


                    if ($rsSolicitudAudienciasDto[0]->getCveUsuario() == "7137") {
                        $resultWebSerice = "idReferencia=" . $OfendidosSolicitudesDto[0]->getIdOfendidoSolicitud() .
                                "&nombreRemite=" . "pj" .
                                "&procedencia=" . "PJE" .
                                "&cargo=" . 28 .
                                "&fechaSolicitud=" . $fecha .
                                "&horaLlegada=" . $hora .
                                "&nombre=" . $nombre .
                                "&paterno=" . $paterno .
                                "&materno=" . $materno .
                                "&NUC=" . $rsSolicitudAudienciasDto[0]->getNuc() .
                                "&distritoJudicial=" . "Toluca" .
                                "&curp=" . "" .
                                "&sexo=" . "";
                    } else {
                        $resultWebSerice = "idReferencia=" . $OfendidosSolicitudesDto[0]->getIdOfendidoSolicitud() .
                                "&nombreRemite=" . $_SESSION["Nombre"] .
                                "&procedencia=" . "PJE" .
                                "&cargo=" . $_SESSION["cveGrupo"] .
                                "&fechaSolicitud=" . $fecha .
                                "&horaLlegada=" . $hora .
                                "&nombre=" . $nombre .
                                "&paterno=" . $paterno .
                                "&materno=" . $materno .
                                "&NUC=" . $rsSolicitudAudienciasDto[0]->getNuc() .
                                "&distritoJudicial=" . "Toluca" .
                                "&curp=" . "" .
                                "&sexo=" . "";
                    }
                    $respuestaWebService = json_decode($this->peticionDefensorWebService($resultWebSerice));
                    if (json_last_error() == JSON_ERROR_NONE) {
                        if ($respuestaWebService != "{error:Los parametros no son correctos}") {
                            $respuesta = "|";
                            foreach ($respuestaWebService as $respuestaWeb) {
                                $respuesta .= $respuestaWeb . "|";
                            }

                            $respuesta = substr($respuesta, 0, - 1);
                            $DefensoresAuxDto->setIdDefensorOfendidoSolicitud($defensorResponse[0]->getIdDefensorOfendidoSolicitud());
                            $DefensoresAuxDto->setTelefono(utf8_decode($respuesta));
//                        $DefensoresAuxDto->setCelular(0);
                            $DefensoresAuxDto->setActivo("S");
                            $rsDefensor = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresAuxDto, $this->proveedor);
                            if ($rsDefensor == '')
                                throw new Exception('no se pudo editar el defensor, comunicate con el administrador');
                        }
                    }
                }
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }

            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido guardado correctamente!',
                'data' => [
                    'idDefensorOfendidoSolicitud' => $defensorResponse[0]->getIdDefensorOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $defensorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoAsesor' => $defensorResponse[0]->getCveTipoAsesor(),
                    'nombre' => $defensorResponse[0]->getNombre(),
                    'telefono' => $defensorResponse[0]->getTelefono(),
                    'celular' => $defensorResponse[0]->getCelular(),
                    'email' => $defensorResponse[0]->getEmail(),
                    'activo' => $defensorResponse[0]->getActivo(),
                    'fechaRegistro' => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status' => 'error',
                'mensaje' => 'No se pudo guardar el Defensor del Ofendido.'
            ];
        }
    }

    public function modificarDefensorOfendido($DefensoresofendidossolicitudesDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede modificar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'modificar', 'representante');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);

        $validate = $this->validarDefensor($DefensoresofendidossolicitudesDto);

        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();

            $defensorResponse = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $this->proveedor);

            if (!count($defensorResponse))
                throw new Exception('no se pudo modificar el defensor del ofendido');

            $selectDefensorDto = new DefensoresofendidossolicitudesDTO();

            $selectDefensorDto->setIdDefensorOfendidoSolicitud($DefensoresofendidossolicitudesDto->getIdDefensorOfendidoSolicitud());

            $selectDefensor = $DefensoresofendidossolicitudesDao->selectDefensoresofendidossolicitudes($selectDefensorDto, '', $this->proveedor);

            if ($usaBitacora) {
                $bitacora = new BitacoramovimientosController();

                $bitacoraDefensor = $bitacora->agregar(65, 'ACTUALIZACION tbldefensoresofendidossolicitudes', 'txt', 'Datos antes de editar >>> ' . serialize($selectDefensor[0]) . '    Datos despues de editar>>>' . serialize($defensorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraDefensor))
                    throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $OfendidosSolicitudesDao = new OfendidossolicitudesDAO();
            $OfendidosSolicitudesDto = new OfendidossolicitudesDTO();
            $DefensoresAuxDto = new DefensoresofendidossolicitudesDTO();

            $rsSolicitudAudienciasDto = new SolicitudesaudienciasDTO();
            $rsSolicitudAudienciasDao = new SolicitudesaudienciasDAO();

            $OfendidosSolicitudesDto->setIdOfendidoSolicitud($defensorResponse[0]->getIdOfendidoSolicitud());
            $OfendidosSolicitudesDto = $OfendidosSolicitudesDao->selectOfendidossolicitudes($OfendidosSolicitudesDto);

            if ($OfendidosSolicitudesDto != "") {
                $rsSolicitudAudienciasDto->setIdSolicitudAudiencia($OfendidosSolicitudesDto[0]->getIdSolicitudAudiencia());
                $rsSolicitudAudienciasDto = $rsSolicitudAudienciasDao->selectSolicitudesaudiencias($rsSolicitudAudienciasDto);

                if ($defensorResponse[0]->getCveTipoAsesor() == 6 || $defensorResponse[0]->getCveTipoAsesor() == 1) {
                    $fecha = date("d/m/Y");
                    $hora = date("H:i:s");
                    if ($OfendidosSolicitudesDto[0]->getCveTipoPersona() == 1) {
                        $nombre = $OfendidosSolicitudesDto[0]->getNombre();
                        $paterno = $OfendidosSolicitudesDto[0]->getPaterno();
                        $materno = $OfendidosSolicitudesDto[0]->getMaterno();
                    } else {
                        $nombre = $OfendidosSolicitudesDto[0]->getNombreMoral();
                        $paterno = "";
                        $materno = "";
                    }

                    $resultWebSerice = "idDefensor=" . $OfendidosSolicitudesDto[0]->getIdOfendidoSolicitud() .
                            "&nombreRemite=" . $_SESSION["Nombre"] .
                            "&procedencia=" . $_SESSION["desAdscripcion"] .
                            "&cargo=" . $_SESSION["cveGrupo"] .
                            "&fechaSolicitud=" . $fecha .
                            "&horaLlegada=" . $hora .
                            "&nombreImputado=" . $nombre .
                            "&paternoImputado=" . $paterno .
                            "&maternoImputado=" . $materno .
                            "&distrito=" . $_SESSION["desAdscripcion"] .
                            "&nuc=" . $rsSolicitudAudienciasDto[0]->getNuc();


                    $respuestaWebService = json_decode($this->peticionDefensorWebService($resultWebSerice));
                    if (json_last_error() == JSON_ERROR_NONE) {
                        $respuesta = "|";
                        foreach ($respuestaWebService as $respuestaWeb) {
                            $respuesta .= $respuestaWeb . "|";
                        }

                        $respuesta = substr($respuesta, 0, - 1);
                        $DefensoresAuxDto->setIdDefensorOfendidoSolicitud($defensorResponse[0]->getIdDefensorOfendidoSolicitud());
                        $DefensoresAuxDto->setTelefono(utf8_decode($respuesta));
                        $DefensoresAuxDto->setCelular(0);
                        $DefensoresAuxDto->setActivo("S");
                        $rsDefensor = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresAuxDto);
                        if ($rsDefensor != "") {
//                            echo "Se envio la solicitud";
                        } else {
//                            echo "No se envio la solictud";
                        }
                    } else {
//                        echo "estructura no correcta";
                    }
                }
            }

            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido editado correctamente!',
                'data' => [
                    'idDefensorOfendidoSolicitud' => $defensorResponse[0]->getIdDefensorOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $defensorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoAsesor' => $defensorResponse[0]->getCveTipoAsesor(),
                    'nombre' => $defensorResponse[0]->getNombre(),
                    'telefono' => $defensorResponse[0]->getTelefono(),
                    'celular' => $defensorResponse[0]->getCelular(),
                    'email' => $defensorResponse[0]->getEmail(),
                    'activo' => $defensorResponse[0]->getActivo(),
                    'fechaRegistro' => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status' => 'error',
                'mensaje' => ['No se pudo editar el Defensor del Ofendido, intenta nuevamente.']
            ];
        }
    }

    public function eliminarDefensor($DefensoresofendidossolicitudesDto, $proveedor = '') {
        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }


        //valida si puede eliminar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'eliminar', 'representante');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }

        $this->proveedor->execute('BEGIN');

        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
            $defensorResponse = $DefensoresofendidossolicitudesDao->eliminarDefensoresOfendido($DefensoresofendidossolicitudesDto, '', 'idDefensorOfendidoSolicitud');

            if (!$defensorResponse)
                throw new Exception('no se pudo eliminar el defensor');

            $bitacora = new BitacoramovimientosController();

            $bitacoraDefensor = $bitacora->agregar(66, 'ELIMINACION tbldefensoresofendidossolicitudes', 'txt', serialize($DefensoresofendidossolicitudesDto), '', $this->proveedor);

            if (!count($bitacoraDefensor))
                throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido eliminado correctamente!',
                'data' => []
            ];
        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => 'No se pudo eliminar el Defensor del Ofendido.'
            ];
        }
    }

    public function selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    ##-------------------------------------------------------------------------##

    public function consultaDefensorWebSerivces($service) {
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresimputadossolicitudesDto = $DefensoresofendidossolicitudesDao->consultaDefensorWebSerivces($service);

        return $DefensoresimputadossolicitudesDto;
    }

    public function AsignacionWebService($json) {
        $param = "";

        $defensoresDto = new DefensoresofendidossolicitudesDTO();
        $defensoresAuxDto = new DefensoresofendidossolicitudesDTO();
        $defensoresDao = new DefensoresofendidossolicitudesDAO();
        $data = json_decode($json, true);

        $defensoresDto->setIdDefensorOfendidoSolicitud($data["idReferencia"]);
        $defensoresDto = $defensoresDao->selectDefensoresofendidossolicitudes($defensoresDto);
        if ($defensoresDto != "") {
            $defensoresAuxDto->setIdDefensorOfendidoSolicitud($defensoresDto[0]->getIdDefensorOfendidoSolicitud());
            $defensoresAuxDto->setNombre(utf8_decode($data["nombreDefensor"] . " " . $data["paternoDefensor"] . " " . $data["maternoDefensor"]));
            $defensoresAuxDto->setEmail($data["emailDefensor"]);
            $defensoresAuxDto->setCelular($data["celularDefensor"]);
            $defensoresAuxDto->setTelefono(utf8_decode($defensoresDto[0]->getTelefono() . " |DATOS RESPUESTA|" . $data["folioSolicitud"] . "|" . $data["estatus"]));
            $defensoresAuxDto->setActivo("S");

            $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();
            $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();

            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

            $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();
            $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();

            $telefonosDto = new TelefonosofendidossolicitudesDTO();
            $telefonosDao = new TelefonosofendidossolicitudesDAO();

            $domicilioDto = new DomiciliosofendidossolicitudesDTO;
            $domicilioDao = new DomiciliosofendidossolicitudesDAO;

            $delitosSolicitudesDto = new DelitossolicitudesDTO();
            $delitosSolicitudesDao = new DelitossolicitudesDAO();

            $catAudienciasDto = new CataudienciasDTO();
            $catAudienciasDao = new CataudienciasDAO();

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

            $interpreteDto = new InterpretesDTO();
            $interpreteDao = new InterpretesDAO();

            $ofendidosSolicitudesDto->setIdOfendidoSolicitud($defensoresDto[0]->getIdOfendidoSolicitud());
            $ofendidosSolicitudesDto = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto);
            if ($ofendidosSolicitudesDto != "") {
                $solicitudesAudienciasDto->setIdSolicitudAudiencia($ofendidosSolicitudesDto[0]->getIdSolicitudAudiencia());
                $solicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                if ($solicitudesAudienciasDto != "") {
                    $DefensoresofendidossolicitudesDto = $defensoresDao->updateDefensoresofendidossolicitudes($defensoresAuxDto);
                    if ($DefensoresofendidossolicitudesDto != "") {
                        $param .= "{";
                        list($fecha, $hora) = explode(" ", $DefensoresofendidossolicitudesDto[0]->getFechaActualizacion());

                        $param .= '"idReferencia":' . json_encode(utf8_encode($DefensoresofendidossolicitudesDto[0]->getIdDefensorOfendidoSolicitud())) . ",";

                        $result = ($DefensoresofendidossolicitudesDto[0]->getTelefono());
                        $parte = explode("|", $result);
                        $param .= '"folioSolicitud":' . json_encode(utf8_encode($parte[1])) . ",";
                        $param .= '"fechaRecepcion":' . json_encode(utf8_encode($this->fechaNormal($fecha))) . ",";
                        $param .= '"horaRecepcion":' . json_encode(utf8_encode($hora)) . ",";
                        $param .= '"estatus":' . json_encode(utf8_encode("Correcto")) . ",";
                        if ($solicitudesAudienciasDto[0]->getCveCatAudiencia() != "" && $solicitudesAudienciasDto[0]->getCveCatAudiencia() != 0) {
                            $catAudienciasDto->setCveCatAudiencia($solicitudesAudienciasDto[0]->getCveCatAudiencia());
                            $catAudienciasDto = $catAudienciasDao->selectCataudiencias($catAudienciasDto);
                            if ($catAudienciasDto != "") {
                                $param .= '"tipoAudiencia":' . json_encode(utf8_encode($catAudienciasDto[0]->getDesCatAudiencia())) . ",";
                            } else {
                                $param .= '"tipoAudiencia": "",';
                            }
                        } else {
                            $param .= '"tipoAudiencia": "",';
                        }

                        $param .= '"NUC":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getNuc())) . ",";
                        $param .= '"carpetaInvestigacion":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getCarpetaInv())) . ",";
                        $param .= '"observaciones":' . json_encode(utf8_encode($solicitudesAudienciasDto[0]->getObservaciones())) . ",";
                        $param .= '"curp":' . json_encode(utf8_encode($ofendidosSolicitudesDto[0]->getCurp())) . ",";
                        $param .= '"edad":' . json_encode(utf8_encode($ofendidosSolicitudesDto[0]->getEdad())) . ",";
                        if ($ofendidosSolicitudesDto[0]->getCveGenero() != "" && $ofendidosSolicitudesDto[0]->getCveGenero() != 0) {
                            $generosDto->setCveGenero($ofendidosSolicitudesDto[0]->getCveGenero());
                            $generosDto = $generosDao->selectGeneros($generosDto);
                            if ($generosDto != "") {
                                $param .= '"sexo":' . json_encode(utf8_encode($generosDto[0]->getDesGenero())) . ",";
                            } else {
                                $param .= '"sexo": "",';
                            }
                        } else {
                            $param .= '"sexo": "",';
                        }
                        if ($ofendidosSolicitudesDto[0]->getCveEstadoCivil() != "" && $ofendidosSolicitudesDto[0]->getCveEstadoCivil() != 0) {
                            $estadoCivilDto->setCveEstadoCivil($ofendidosSolicitudesDto[0]->getCveEstadoCivil());
                            $estadoCivilDto = $estadoCivilDao->selectEstadosciviles($estadoCivilDto);
                            if ($estadoCivilDto != "") {
                                $param .= '"edoCivil":' . json_encode(utf8_encode($estadoCivilDto[0]->getDesEstadoCivil())) . ",";
                            } else {
                                $param .= '"edoCivil": "",';
                            }
                        } else {
                            $param .= '"edoCivil": "",';
                        }
                        if ($ofendidosSolicitudesDto[0]->getCveNivelInstruccion() != "" && $ofendidosSolicitudesDto[0]->getCveNivelInstruccion() != 0) {
                            $nivelInstruccionDto->setCveNivelInstruccion($ofendidosSolicitudesDto[0]->getCveNivelInstruccion());
                            $nivelInstruccionDto = $nivelInstruccionDao->selectNivelesinstrucciones($nivelInstruccionDto);
                            if ($nivelInstruccionDto != "") {
                                $param .= '"nivelEstudios":' . json_encode(utf8_encode($nivelInstruccionDto[0]->getDesNivelInstruccion())) . ",";
                            } else {
                                $param .= '"nivelEstudios": "",';
                            }
                        } else {
                            $param .= '"nivelEstudios": "",';
                        }
                        if ($ofendidosSolicitudesDto[0]->getCveOcupacion() != "" && $ofendidosSolicitudesDto[0]->getCveOcupacion() != 0) {
                            $ocupacionDto->setCveOcupacion($ofendidosSolicitudesDto[0]->getCveOcupacion());
                            $ocupacionDto = $ocupacionDao->selectOcupaciones($ocupacionDto);
                            if ($ocupacionDto != "") {
                                $param .= '"ocupacion":' . json_encode(utf8_encode($ocupacionDto[0]->getDesOcupacion())) . ",";
                            } else {
                                $param .= '"ocupacion": "",';
                            }
                        } else {
                            $param .= '"ocupacion": "",';
                        }
                        if ($ofendidosSolicitudesDto[0]->getCveInterprete() != "" && $ofendidosSolicitudesDto[0]->getCveInterprete() != 0) {
                            $interpreteDto->setCveInterprete($ofendidosSolicitudesDto[0]->getCveInterprete());
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
                        $domicilioDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[0]->getIdOfendidoSolicitud());
                        $domicilioDto->setActivo("S");
                        $domicilioDto = $domicilioDao->selectDomiciliosofendidossolicitudes($domicilioDto, " order by DomicilioProcesal desc, recidenciaHabitual desc ");
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
                        $telefonosDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[0]->getIdOfendidoSolicitud());
                        $telefonosDto->setActivo("S");
                        $telefonosDto = $telefonosDao->selectTelefonosofendidossolicitudes($telefonosDto);
                        if ($telefonosDto != "") {
                            $param .= '"cel":' . json_encode(utf8_encode($telefonosDto[0]->getCelular())) . ",";
                            $param .= '"email":' . json_encode(utf8_encode($telefonosDto[0]->getEmail())) . ",";
                        } else {
                            $param .= '"cel": "",';
                            $param .= '"email": "",';
                        }

                        ###############################Delitos######################################################################
                        $impofedelSolicitudesDto->setIdOfendidoSolicitud($ofendidosSolicitudesDto[0]->getIdOfendidoSolicitud());
                        $impofedelSolicitudesDto->setActivo("S");
                        $impofedelSolicitudesDto = $impofedelSolicitudesDao->selectImpofedelsolicitudes($impofedelSolicitudesDto);
                        if ($impofedelSolicitudesDto != "") {
                            $delitosId = "";
                            foreach ($impofedelSolicitudesDto as $impofedel) {
                                $delitosSolicitudesDto->setIdDelitoSolicitud($impofedel->getIdDelitoSolicitud());
                                $rsDelitosSolicitudesDto = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto);
                                $delitosId = $delitosId . "," . $rsDelitosSolicitudesDto[0]->getCveDelito();
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
                    $param .= '"mensaje":' . json_encode(utf8_encode("La solicitud no existe.")) . ",";
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
