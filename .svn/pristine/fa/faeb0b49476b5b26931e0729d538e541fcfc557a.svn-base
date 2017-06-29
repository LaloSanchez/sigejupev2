<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class TutoresofendidoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        $TutoresofendidoscarpetasDto->setidTutorOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getidTutorOfendidoCarpeta()))));
        $TutoresofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getidOfendidoCarpeta()))));
        $TutoresofendidoscarpetasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getcveTipoTutor()))));
        $TutoresofendidoscarpetasDto->setProvDef(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getProvDef()))));
        $TutoresofendidoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getnombre()))));
        $TutoresofendidoscarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getpaterno()))));
        $TutoresofendidoscarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getmaterno()))));
        $TutoresofendidoscarpetasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getfechaNacimiento()))));
        $TutoresofendidoscarpetasDto->setedad(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getedad()))));
        $TutoresofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getactivo()))));
        $TutoresofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getfechaRegistro()))));
        $TutoresofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getfechaActualizacion()))));
        $TutoresofendidoscarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TutoresofendidoscarpetasDto->getcveGenero()))));
        return $TutoresofendidoscarpetasDto;
    }
    
    public function validarTutor($TutoresofendidoscarpetasDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];
        //print_r($TutoresofendidoscarpetasDto);
        if ($TutoresofendidoscarpetasDto->getIdOfendidoCarpeta() == "" || $TutoresofendidoscarpetasDto->getIdOfendidoCarpeta() == 0) {
            $estatus = "error";
            $msg[] = '* El id del ofendido es requerido';
        }

        if (!$validacion->between(1, 50, (string) $TutoresofendidoscarpetasDto->getNombre())) {
            $estatus = "error";
            $msg[] = "* El nombre debe contener entre 1 y 50 caracteres de longitud";
        }
        if (!$validacion->between(1, 5, (string) $TutoresofendidoscarpetasDto->getProvDef())) {
            $estatus = "error";
            $msg[] = "* Debe indicar si el tutor es provicional o definitivo";
        }
        if (!$validacion->between(1, 50, (string) $TutoresofendidoscarpetasDto->getPaterno())) {
            $estatus = "error";
            $msg[] = '* El apellido paterno debe contener entre 1 y 50 caracteres de longitud';
        }

        if (!$validacion->between(1, 50, (string) $TutoresofendidoscarpetasDto->getMaterno())) {
            $estatus = "error";
            $msg[] = '* El apellido materno debe contener entre 1 y 50 caracteres de longitud';
        }

        if (!$validacion->num(1, 2, (int) $TutoresofendidoscarpetasDto->getCveGenero())) {
            if ($TutoresofendidoscarpetasDto->getCveGenero() <= 0) {
                $estatus = "error";
                $msg[] = '* El genero seleccionado no es válido';
            }
        }

//        if (!$validacion->dateMysql($TutoresofendidoscarpetasDto->getFechaNacimiento())) {
//            $estatus = "error";
//            $msg[] = '* la fecha de nacimiento no tiene un formato valido (dd/mm/aa)';
//        }
//
//        if (!$validacion->num(1, 2, (int) $TutoresofendidoscarpetasDto->getEdad())) {
//            $estatus = "error";
//            $msg[] = '* la edad no es valida';
//        }

        if ($estatus == 'ok' && $TutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() == "") {
            $tutorValidateDto = new TutoresofendidoscarpetasDTO();
            $tutorValidateDto->setIdOfendidoCarpeta($TutoresofendidoscarpetasDto->getIdOfendidoCarpeta());
            $tutorValidateDto->setNombre($TutoresofendidoscarpetasDto->getNombre());
            $tutorValidateDto->setPaterno($TutoresofendidoscarpetasDto->getPaterno());
            $tutorValidateDto->setMaterno($TutoresofendidoscarpetasDto->getMaterno());
            $tutorValidateDto->setActivo('S');
            $tutorValidateDao = new TutoresofendidoscarpetasDAO();
            //$selectTutores = null;
            $tutorValidateDto = $tutorValidateDao->selectTutoresofendidoscarpetas($tutorValidateDto, "", null);
            //var_dump($tutorValidateDto);
            if (count($tutorValidateDto)) {
                $estatus = "error";
                $msg[] = '* El nombre del tutor ya esta registrado';
            }
        }

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }
    
    public function selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor=null){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        //var_dump($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor);
        return $TutoresofendidoscarpetasDto;
    }
    
    public function agregarTutorOfendido($TutoresofendidoscarpetasDto, $proveedor = '')
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $TutoresofendidoscarpetasDto = $this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $validate = $this->validarTutor($TutoresofendidoscarpetasDto);
        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');

        try {

            $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
            $tutorResponse = $TutoresofendidoscarpetasDao->insertTutoresofendidoscarpetas($TutoresofendidoscarpetasDto, $this->proveedor);


            if (!count($tutorResponse)) throw new Exception('no se pudo guardar los datos del tutor');


            $bitacora = new BitacoramovimientosController();
            $bitacoraTutor = $bitacora->agregar(201, 'INSERCION tbltutoresofendidos', 'txt', serialize($tutorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTutor)) throw new Exception('no se pudo guardar la accion agregar tutor en bitacora');


            $this->proveedor->execute('COMMIT');

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Tutor guardado correctamente!',
                'data'    => [
                    'idTutorOfendidoCarpeta' => $tutorResponse[0]->getIdTutorOfendidoCarpeta(),
                    'idOfendidoCarpeta'      => $tutorResponse[0]->getIdOfendidoCarpeta(),
                    'cveTipoTutor'           => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef'                => utf8_encode($tutorResponse[0]->getProvDef()),
                    'nombre'                 => utf8_encode($tutorResponse[0]->getNombre()),
                    'paterno'                => utf8_encode($tutorResponse[0]->getPaterno()),
                    'materno'                => utf8_encode($tutorResponse[0]->getMaterno()),
                    'fechaNacimiento'        => $tutorResponse[0]->getFechaNacimiento(),
                    'edad'                   => $tutorResponse[0]->getEdad(),
                    'activo'                 => $tutorResponse[0]->getActivo(),
                    'fechaRegistro'          => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'     => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero'              => $tutorResponse[0]->getCveGenero()
                ]
            ];

            return $response;


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo guardar el Tutor.'
            ];

        }


    }

    /**
     * @param $TutoresofendidoscarpetasDto
     * @param string $proveedor
     * @return array
     */
    public function modificarTutorOfendido($TutoresofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $TutoresofendidoscarpetasDto = $this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $validate = $this->validarTutor($TutoresofendidoscarpetasDto);
        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');
        try {

            $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
            $selectTutorDto = new TutoresofendidoscarpetasDTO();
            $selectTutorDto->setIdTutorOfendidoCarpeta($TutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta());

            $selectTutor = $TutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($selectTutorDto, "", $this->proveedor);
            $tutorResponse = $TutoresofendidoscarpetasDao->modificarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto, $this->proveedor);
            //var_dump($tutorResponse);
            //echo "<br>" . count($tutorResponse) . "<br>";
            if (!count($tutorResponse)) {
                throw new Exception('no se pudo guardar al tutor');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraTutor = $bitacora->agregar(202, 'ACTUALIZACION tbltutoresofendidos', 'txt', "Datos antes de editar >>>" . serialize($selectTutor[0]) . " Datos despues de editar >>>" . serialize($tutorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTutor)) {
                throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');
            }
            $this->proveedor->execute('COMMIT');
            return [
                'status'  => 'ok',
                'mensaje' => 'Tutor editado correctamente!',
                'data'    => [
                    'idTutorOfendidoCarpeta' => $tutorResponse[0]->getIdTutorOfendidoCarpeta(),
                    'idOfendidoCarpeta'      => $tutorResponse[0]->getIdOfendidoCarpeta(),
                    'cveTipoTutor'           => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef'                => utf8_encode($tutorResponse[0]->getProvDef()),
                    'nombre'                 => utf8_encode($tutorResponse[0]->getNombre()),
                    'paterno'                => utf8_encode($tutorResponse[0]->getPaterno()),
                    'materno'                => utf8_encode($tutorResponse[0]->getMaterno()),
                    'fechaNacimiento'        => $tutorResponse[0]->getFechaNacimiento(),
                    'edad'                   => $tutorResponse[0]->getEdad(),
                    'activo'                 => $tutorResponse[0]->getActivo(),
                    'fechaRegistro'          => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'     => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero'              => $tutorResponse[0]->getCveGenero()
                ]
            ];

        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo editar el Tutor.'
            ];

        }
    }

    /**
     * @param $TutoresofendidoscarpetasDto
     * @param string $proveedor
     * @return array
     */
    public function eliminarTutorOfendido($TutoresofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        try {

            $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
            $TutoresofendidoscarpetasDto->setActivo('N');
            $tutorResponse = $TutoresofendidoscarpetasDao->eliminarTutoresofendidoscarpetasByIdOfendido($TutoresofendidoscarpetasDto, $this->proveedor);

            if (!count($tutorResponse)) {

                throw new Exception('no se pudo la accion eliminar tutor en bitacora');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraTutor = $bitacora->agregar(203, 'BORRADO LOGICO tbltutoresofendidos', 'txt', serialize($tutorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTutor)) {

                throw new Exception('no se pudo agregar la accion eliminar tutor en la bitacora');
            }

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Tutor eliminado correctamente!',
                'data'    => [
                    'idTutorOfendidoCarpeta' => $tutorResponse[0]->getIdTutorOfendidoCarpeta(),
                    'idOfendidoCarpeta'      => $tutorResponse[0]->getIdOfendidoCarpeta(),
                    'cveTipoTutor'           => $tutorResponse[0]->getCveTipoTutor(),
                    'ProvDef'                => utf8_encode($tutorResponse[0]->getProvDef()),
                    'nombre'                 => utf8_encode($tutorResponse[0]->getNombre()),
                    'paterno'                => utf8_encode($tutorResponse[0]->getPaterno()),
                    'materno'                => utf8_encode($tutorResponse[0]->getMaterno()),
                    'fechaNacimiento'        => $tutorResponse[0]->getFechaNacimiento(),
                    'edad'                   => $tutorResponse[0]->getEdad(),
                    'activo'                 => $tutorResponse[0]->getActivo(),
                    'fechaRegistro'          => $tutorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'     => $tutorResponse[0]->getFechaActualizacion(),
                    'cveGenero'              => $tutorResponse[0]->getCveGenero()
                ]
            ];


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar el Tutor.'
            ];
        }


    }
    
    public function insertTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor=null){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasDao->insertTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor);
        return $TutoresofendidoscarpetasDto;
    }
    
    public function updateTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor=null){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
        //$tmpDto = new TutoresofendidoscarpetasDTO();
        //$tmpDto = $TutoresofendidoscarpetasDao->selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$TutoresofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasDao->updateTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor);
        return $TutoresofendidoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor=null){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasDao = new TutoresofendidoscarpetasDAO();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasDao->deleteTutoresofendidoscarpetas($TutoresofendidoscarpetasDto,$proveedor);
        return $TutoresofendidoscarpetasDto;
    }
}
?>