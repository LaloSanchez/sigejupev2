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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidos/TutoresofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudOfendido.php");

class TutoresofendidosController extends ValidaSolicitudOfendido {

    private $proveedor;

    /**
     * @param $TutoresofendidosDto
     * @return mixed
     */
    public function validarTutoresofendidos($TutoresofendidosDto) {
        $TutoresofendidosDto->setidTutorOfendido(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getidTutorOfendido()))));
        $TutoresofendidosDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getidOfendidoSolicitud()))));
        $TutoresofendidosDto->setcveTipoTutor(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getcveTipoTutor()))));
        $TutoresofendidosDto->setProvDef(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getProvDef()))));
        $TutoresofendidosDto->setnombre(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getnombre()))));
        $TutoresofendidosDto->setpaterno(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getpaterno()))));
        $TutoresofendidosDto->setmaterno(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getmaterno()))));
        $TutoresofendidosDto->setfechaNacimiento(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaNacimiento()))));
        $TutoresofendidosDto->setedad(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getedad()))));
        $TutoresofendidosDto->setactivo(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getactivo()))));
        $TutoresofendidosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaRegistro()))));
        $TutoresofendidosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getfechaActualizacion()))));
        $TutoresofendidosDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($TutoresofendidosDto->getcveGenero()))));

        return $TutoresofendidosDto;
    }

    /**
     * @param $TutoresofendidosDto
     * @return array
     */
    public function validarTutor($TutoresofendidosDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if ($TutoresofendidosDto->getIdOfendidoSolicitud() == "" || $TutoresofendidosDto->getIdOfendidoSolicitud() == 0) {
            $estatus = "error";
            $msg[] = '* El id del ofendido es requerido';
        }

        if ($TutoresofendidosDto->getProvDef() == '') {
            $estatus = "error";
            $msg[] = "* Tienes que seleccionar si el tutor es provisional o definitivo";
        } else {

            if ($TutoresofendidosDto->getProvDef() != 'P' && $TutoresofendidosDto->getProvDef() != 'D') {
                $estatus = "error";
                $msg[] = "* Valor invalido para provisional o definitivo";
            }
        }

        if (!$validacion->between(1, 50, (string) $TutoresofendidosDto->getNombre())) {
            $estatus = "error";
            $msg[] = "* El nombre debe contener entre 1 y 50 caracteres de longitud";
        }

        if (!$validacion->between(1, 50, (string) $TutoresofendidosDto->getPaterno())) {
            $estatus = "error";
            $msg[] = '* El apellido paterno debe contener entre 1 y 50 caracteres de longitud';
        }

        if (!$validacion->between(1, 50, (string) $TutoresofendidosDto->getMaterno())) {
            $estatus = "error";
            $msg[] = '* El apellido materno debe contener entre 1 y 50 caracteres de longitud';
        }

        if (!$validacion->num(1, 2, (int) $TutoresofendidosDto->getCveGenero())) {
            if ($TutoresofendidosDto->getCveGenero() <= 0) {
                $estatus = "error";
                $msg[] = '* El genero seleccionado no es válido';
            }
        }
        if ($TutoresofendidosDto->getFechaNacimiento() != "") {
            if (!$validacion->dateMysql($TutoresofendidosDto->getFechaNacimiento())) {
                $estatus = "error";
                $msg[] = '* la fecha de nacimiento no tiene un formato valido (dd/mm/aa)';
            }
        if (!$validacion->num(1, 2, (int) $TutoresofendidosDto->getEdad())) {
                $estatus = "error";
                $msg[] = '* la edad no es valida';
            }
        }


        if ($estatus == 'ok' && $TutoresofendidosDto->getIdTutorOfendido() == "") {
            $tutorValidateDto = new TutoresofendidosDTO();
            $tutorValidateDto->setIdOfendidoSolicitud($TutoresofendidosDto->getIdOfendidoSolicitud());
            $tutorValidateDto->setNombre($TutoresofendidosDto->getNombre());
            $tutorValidateDto->setPaterno($TutoresofendidosDto->getPaterno());
            $tutorValidateDto->setMaterno($TutoresofendidosDto->getMaterno());
            $tutorValidateDto->setActivo('S');

            $selectTutores = $this->selectTutoresofendidos($tutorValidateDto);

            if (count($selectTutores)) {
                $estatus = "error";
                $msg[] = '* El nombre del tutor ya esta registrado para el Ofendido';
            }
        }

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    /**
     * @param $TutoresofendidosDto
     * @param string $proveedor
     * @param bool $usaBitacora
     * @return array
     */
    public function agregarTutorOfendido($TutoresofendidosDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede agregar tutor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TutoresofendidosDto->getIdOfendidoSolicitud(), 'agregar', 'tutor', $this->proveedor);
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $validate = $this->validarTutor($TutoresofendidosDto);

        if ($validate['status'] == 'error')
            return $validate;


        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $TutoresofendidosDao = new TutoresofendidosDAO();
            $tutorResponse = $TutoresofendidosDao->insertTutoresofendidos($TutoresofendidosDto, $this->proveedor);


            if (!count($tutorResponse))
                throw new Exception('no se pudo guardar los datos del tutor');


            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraTutor = $bitacora->agregar(67, 'INSERCION tbltutoresofendidos', 'txt', serialize($tutorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraTutor))
                    throw new Exception('no se pudo guardar la accion agregar tutor en vitacora');
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status' => 'ok',
                'mensaje' => 'Tutor del Ofendido guardado correctamente!',
                'data' => [
                    'idTutorOfendido' => $tutorResponse[0]->getIdTutorOfendido(),
                    'idOfendidoSolicitud' => $tutorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoTutor' => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef' => $tutorResponse[0]->getProvDef(),
                    'desTipoTutor' => $tutorResponse[0]->getDesTipoTutor(),
                    'nombre' => $tutorResponse[0]->getNombre(),
                    'paterno' => $tutorResponse[0]->getPaterno(),
                    'materno' => $tutorResponse[0]->getMaterno(),
                    'fechaNacimiento' => $tutorResponse[0]->getFechaNacimiento(),
                    'edad' => $tutorResponse[0]->getEdad(),
                    'activo' => $tutorResponse[0]->getActivo(),
                    'fechaRegistro' => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero' => $tutorResponse[0]->getCveGenero(),
                    'desGenero' => $tutorResponse[0]->getDesGenero()
                ]
            ];

            return $response;
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            return [
                'status' => 'error',
                'mensaje' => 'No se pudo guardar el Tutor del Ofendido.'
            ];
        }
    }

    /**
     * @param $TutoresofendidosDto
     * @param string $proveedor
     * @param bool $usaBitacora
     * @return array
     */
    public function modificarTutorOfendido($TutoresofendidosDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede modificar tutor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TutoresofendidosDto->getIdOfendidoSolicitud(), 'modificar', 'tutor');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $validate = $this->validarTutor($TutoresofendidosDto);

        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }

        try {

            $TutoresofendidosDao = new TutoresofendidosDAO();
            $selectTutorDto = new TutoresofendidosDTO();
            $selectTutorDto->setIdTutorOfendido($TutoresofendidosDto->getIdTutorOfendido());

            $selectTutor = $TutoresofendidosDao->selectTutoresofendidos($selectTutorDto, '', $this->proveedor);


            $tutorResponse = $TutoresofendidosDao->updateTutoresofendidos($TutoresofendidosDto, $this->proveedor);

            if (!count($tutorResponse)) {

                throw new Exception('no se pudo modificar el tutor');
            }

            if ($usaBitacora) {
                $bitacora = new BitacoramovimientosController();
                $bitacoraTutor = $bitacora->agregar(68, 'ACTUALIZACION tbltutoresofendidos', 'txt', "Datos antes de editar >>>" . serialize($selectTutor[0]) . " Datos despues de editar >>>" . serialize($tutorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraTutor)) {

                    throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');
                }
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status' => 'ok',
                'mensaje' => 'Tutor del Ofendido editado correctamente!',
                'data' => [
                    'idTutorOfendido' => $tutorResponse[0]->getIdTutorOfendido(),
                    'idOfendidoSolicitud' => $tutorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoTutor' => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef' => $tutorResponse[0]->getProvDef(),
                    'desTipoTutor' => $tutorResponse[0]->getDesTipoTutor(),
                    'nombre' => $tutorResponse[0]->getNombre(),
                    'paterno' => $tutorResponse[0]->getPaterno(),
                    'materno' => $tutorResponse[0]->getMaterno(),
                    'fechaNacimiento' => $tutorResponse[0]->getFechaNacimiento(),
                    'edad' => $tutorResponse[0]->getEdad(),
                    'activo' => $tutorResponse[0]->getActivo(),
                    'fechaRegistro' => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero' => $tutorResponse[0]->getCveGenero(),
                    'desGenero' => $tutorResponse[0]->getDesGenero()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            $response = [
                'status' => 'error',
                'mensaje' => 'No se pudo editar el Tutor del Ofendido.'
            ];
        }

        return $response;
    }

    /**
     * @param $TutoresofendidosDto
     * @param string $proveedor
     * @return array
     */
    public function eliminarTutorOfendido($TutoresofendidosDto, $proveedor = '') {


        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede agregar tutor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TutoresofendidosDto->getIdOfendidoSolicitud(), 'eliminar', 'tutor');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }

        $this->proveedor->execute('BEGIN');

        try {

            $TutoresofendidosDao = new TutoresofendidosDAO();
            $TutoresofendidosDto->setActivo('N');
            $tutorResponse = $TutoresofendidosDao->updateTutoresofendidos($TutoresofendidosDto, $this->proveedor);

            if (!count($tutorResponse)) {

                throw new Exception('no se pudo la accion eliminar tutor en bitacora');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraTutor = $bitacora->agregar(69, 'BORRADO LOGICO tbltutoresofendidos', 'txt', serialize($tutorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTutor)) {

                throw new Exception('no se pudo agregar la accion eliminar tutor ofendido en la bitacora');
            }

            $this->proveedor->execute('COMMIT');

            return [
                'status' => 'ok',
                'mensaje' => 'Tutor del Ofendido eliminado correctamente!',
                'data' => [
                    'idTutorOfendido' => $tutorResponse[0]->getIdTutorOfendido(),
                    'idOfendidoSolicitud' => $tutorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoTutor' => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef' => $tutorResponse[0]->getProvDef(),
                    'desTipoTutor' => $tutorResponse[0]->getDesTipoTutor(),
                    'nombre' => $tutorResponse[0]->getNombre(),
                    'paterno' => $tutorResponse[0]->getPaterno(),
                    'materno' => $tutorResponse[0]->getMaterno(),
                    'fechaNacimiento' => $tutorResponse[0]->getFechaNacimiento(),
                    'edad' => $tutorResponse[0]->getEdad(),
                    'activo' => $tutorResponse[0]->getActivo(),
                    'fechaRegistro' => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero' => $tutorResponse[0]->getCveGenero(),
                    'desGenero' => $tutorResponse[0]->getDesGenero()
                ]
            ];
        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => 'No se pudo eliminar el Tutor del Ofendido.'
            ];
        }
    }

    /**
     * @param $TutoresofendidosDto
     * @param null $proveedor
     * @return array|mixed
     */
    public function selectTutoresofendidos($TutoresofendidosDto, $proveedor = null) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosDao = new TutoresofendidosDAO();
        $TutoresofendidosDto = $TutoresofendidosDao->selectTutoresofendidos($TutoresofendidosDto, $proveedor);

        return $TutoresofendidosDto;
    }

    /**
     * @param $TutoresofendidosDto
     * @param null $proveedor
     * @return array|mixed|TutoresofendidosDTO
     */
    public function insertTutoresofendidos($TutoresofendidosDto, $proveedor = null) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosDao = new TutoresofendidosDAO();
        $TutoresofendidosDto = $TutoresofendidosDao->insertTutoresofendidos($TutoresofendidosDto, $proveedor);

        return $TutoresofendidosDto;
    }

    /**
     * @param $TutoresofendidosDto
     * @param null $proveedor
     * @return array|mixed|TutoresofendidosDTO
     */
    public function updateTutoresofendidos($TutoresofendidosDto, $proveedor = null) {
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosDao = new TutoresofendidosDAO();
        $TutoresofendidosDto = $TutoresofendidosDao->updateTutoresofendidos($TutoresofendidosDto, $proveedor);

        return $TutoresofendidosDto;
    }

    /**
     * @param $TutoresofendidosDto
     * @param null $proveedor
     * @return bool|mixed|string
     */
    public function deleteTutoresofendidos($TutoresofendidosDto, $proveedor = null) {
        print_r($TutoresofendidosDto);
        die;
        $TutoresofendidosDto = $this->validarTutoresofendidos($TutoresofendidosDto);
        $TutoresofendidosDao = new TutoresofendidosDAO();
        $TutoresofendidosDto = $TutoresofendidosDao->deleteTutoresofendidos($TutoresofendidosDto, $proveedor);

        return $TutoresofendidosDto;
    }

}
