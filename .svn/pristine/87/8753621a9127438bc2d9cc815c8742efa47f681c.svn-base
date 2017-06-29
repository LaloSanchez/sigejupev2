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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudOfendido.php");

class DomiciliosofendidossolicitudesController extends ValidaSolicitudOfendido {

    private $proveedor;


    public function validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto)
    {
        $DomiciliosofendidossolicitudesDto->setidDomicilioOfendidoSolicitud(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud()))));
        $DomiciliosofendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getIdOfendidoSolicitud()))));
        $DomiciliosofendidossolicitudesDto->setDomicilioProcesal(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getDomicilioProcesal()))));
        $DomiciliosofendidossolicitudesDto->setcvePais(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcvePais()))));
        $DomiciliosofendidossolicitudesDto->setcveEstado(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveEstado()))));
        $DomiciliosofendidossolicitudesDto->setcveMunicipio(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveMunicipio()))));
        $DomiciliosofendidossolicitudesDto->setdireccion(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getDireccion()))));
        $DomiciliosofendidossolicitudesDto->setcolonia(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcolonia()))));
        $DomiciliosofendidossolicitudesDto->setnumInterior(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getnumInterior()))));
        $DomiciliosofendidossolicitudesDto->setnumExterior(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getnumExterior()))));
        $DomiciliosofendidossolicitudesDto->setcp(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcp()))));
        $DomiciliosofendidossolicitudesDto->setlatitud(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getlatitud()))));
        $DomiciliosofendidossolicitudesDto->setlongitud(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getlongitud()))));
        $DomiciliosofendidossolicitudesDto->setrecidenciaHabitual(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getrecidenciaHabitual()))));
        $DomiciliosofendidossolicitudesDto->setestado(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getEstado()))));
        $DomiciliosofendidossolicitudesDto->setmunicipio(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getmunicipio()))));
        $DomiciliosofendidossolicitudesDto->setcveConvivencia(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveConvivencia()))));
        $DomiciliosofendidossolicitudesDto->setcveTipoDeVivienda(trim(mb_strtoupper(str_replace("'", "", $DomiciliosofendidossolicitudesDto->getcveTipoDeVivienda()))));

        return $DomiciliosofendidossolicitudesDto;
    }

    /**
     * @param $DomiciliosofendidossolicitudesDto
     * @return array
     */
    public function validaDomicilioOfendido($DomiciliosofendidossolicitudesDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(0, 3, $DomiciliosofendidossolicitudesDto->getcvePais())) {
            $estatus = 'error';
            $msg[] = '* El país del domicilio no es válido';
        }

        if ($DomiciliosofendidossolicitudesDto->getcvePais() == 119) {
            if (!$validacion->num(0, 5, $DomiciliosofendidossolicitudesDto->getCveEstado())) {
                $estatus = 'error';
                $msg[] = '* El estado no es válido';
            }

            if (!$validacion->num(0, 5, $DomiciliosofendidossolicitudesDto->getCveMunicipio())) {
                $estatus = 'error';
                $msg[] = '* El municipio no es válido';
            }
        } else {

            if (!$validacion->between(1, 200, $DomiciliosofendidossolicitudesDto->getEstado())) {
                $estatus = 'error';
                $msg[] = '* El estado debe contener entre 1 y 200 caracteres de longitud';
            }

            if (!$validacion->between(1, 200, $DomiciliosofendidossolicitudesDto->getMunicipio())) {
                $estatus = 'error';
                $msg[] = '* El municipio debe contener entre 1 y 200 caracteres de longitud';
            }

        }

        if (!$validacion->num(0, 2, $DomiciliosofendidossolicitudesDto->getCveConvivencia())) {
            $estatus = 'error';
            $msg[] = '* El campo convivencia no es válido';
        }


        if (!$validacion->between(1, 500, $DomiciliosofendidossolicitudesDto->getDireccion())) {
            $estatus = 'error';
            $msg[] = '* La calle debe contener entre 1 y 500 caracteres de longitud';
        }

        if (!$validacion->between(1, 200, $DomiciliosofendidossolicitudesDto->getColonia())) {
            $estatus = 'error';
            $msg[] = '* La colonia debe contener entre 1 y 200 caracteres de longitud';
        }

        if ($DomiciliosofendidossolicitudesDto->getNumInterior() != "") {
            if (!$validacion->between(1, 5, $DomiciliosofendidossolicitudesDto->getNumInterior())) {
                $estatus = 'error';
                $msg[] = '* El n&uacute;mero interior debe contener entre 1 y 5 caracteres de longitud';
            }
        }


        if (!$validacion->between(1, 5, $DomiciliosofendidossolicitudesDto->getNumExterior())) {
            $estatus = 'error';
            $msg[] = '* El n&uacute;mero exterior debe contener entre 1 y 5 caracteres de longitud';
        }

        if($DomiciliosofendidossolicitudesDto->getCp() != ''){

            if(!is_numeric($DomiciliosofendidossolicitudesDto->getCp())){
                $estatus = 'error';
                $msg[] = '* El C&oacute;digo Postal debe ser valor numérico';
            }

            if (!$validacion->between(5, 5, $DomiciliosofendidossolicitudesDto->getCp())) {
                $estatus = 'error';
                $msg[] = '* El C&oacute;digo Postal debe contener 5 caracteres de longitud';
            }

        }

        if (!$validacion->num(0, 2, $DomiciliosofendidossolicitudesDto->getCveTipoDeVivienda())) {
            $estatus = 'error';
            $msg[] = '* El campo tipo de domicilio no es válido';
        }

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function selectDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesDao->selectDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor);

        return $DomiciliosofendidossolicitudesDto;
    }

    public function agregarDomicilioOfendido($DomiciliosofendidossolicitudesDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        //valida si puede agregar domicilio
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DomiciliosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'agregar', 'domicilio');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status'  => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }


        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $validacion = $this->validaDomicilioOfendido($DomiciliosofendidossolicitudesDto);

        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error") return $validacion;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }

        try {
            if ($DomiciliosofendidossolicitudesDto->getCvePais() == "119") {
                $DomiciliosofendidossolicitudesDto->setEstado('');
                $DomiciliosofendidossolicitudesDto->setMunicipio('');
            } else {
                $DomiciliosofendidossolicitudesDto->setCveEstado('');
                $DomiciliosofendidossolicitudesDto->setCveMunicipio('');
            }

            if ($DomiciliosofendidossolicitudesDto->getRecidenciaHabitual() == "") {
                $DomiciliosofendidossolicitudesDto->setRecidenciaHabitual('N');
            }

            if ($DomiciliosofendidossolicitudesDto->getDomicilioProcesal() == "") {
                $DomiciliosofendidossolicitudesDto->setDomicilioProcesal('N');
            }

            $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();

            $domicilioOfendidoResponse = $DomiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $this->proveedor);


            if (!count($domicilioOfendidoResponse)) throw new Exception('no se pudo guardar el domicilio del ofendido.');

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(58, 'INSERCION tbldomiciliosofendidossolicitudes', 'txt', serialize($domicilioOfendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion agregar domicilio en bitacora');


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status'  => 'ok',
                'mensaje' => 'Datos de domicilio de ofendido guardados correctamente',
                'data'    => [
                    'idDomicilioOfendidoSolicitud' => $domicilioOfendidoResponse[0]->getIdDomicilioOfendidoSolicitud(),
                    'idOfendidoSolicitud'          => $domicilioOfendidoResponse[0]->getIdOfendidoSolicitud()
                ]
            ];

            return $response;


        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo guardar los datos de domicilio del ofendido']
            ];
        }


    }

    public function modificarDomicilioOfendido($DomiciliosofendidossolicitudesDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        //valida si puede agregar domicilio
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DomiciliosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'modificar', 'domicilio');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status'  => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $validacion = $this->validaDomicilioOfendido($DomiciliosofendidossolicitudesDto);

        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error") return $validacion;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();

            if ($DomiciliosofendidossolicitudesDto->getCvePais() == "119") {
                $DomiciliosofendidossolicitudesDto->setEstado('');
                $DomiciliosofendidossolicitudesDto->setMunicipio('');
            } else {
                $DomiciliosofendidossolicitudesDto->setCveEstado('');
                $DomiciliosofendidossolicitudesDto->setCveMunicipio('');
            }

            if ($DomiciliosofendidossolicitudesDto->getRecidenciaHabitual() == "") {
                $DomiciliosofendidossolicitudesDto->setRecidenciaHabitual('N');
            }

            if ($DomiciliosofendidossolicitudesDto->getDomicilioProcesal() == "") {
                $DomiciliosofendidossolicitudesDto->setDomicilioProcesal('N');
            }

            $DomiciliosofendidossolicitudesDto->setFechaActualizacion('NOW');

            $domicilioOfendidoResponse = $DomiciliosofendidossolicitudesDao->updateDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $this->proveedor);

            if (!count($domicilioOfendidoResponse)) throw new Exception('no se pudo actualizar el domicilio del ofendido.');

            $selectDomicilioDto = new DomiciliosofendidossolicitudesDTO();
            $selectDomicilioDto->setIdDomicilioOfendidoSolicitud($DomiciliosofendidossolicitudesDto->getIdDomicilioOfendidoSolicitud());
            $selectDomicilio = $DomiciliosofendidossolicitudesDao->selectDomiciliosofendidossolicitudes($selectDomicilioDto, '', $this->proveedor);

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(59, 'INSERCION tbldomiciliosofendidossolicitudes', 'txt', 'DATOS ANTES DE ACTUALIZAR >>> ' . serialize($selectDomicilio[0]) . ' DATOS DESPUES DE ACTUALIZAR >>> ' . serialize($domicilioOfendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion actualizar domicilio en bitacora');


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            return [
                'status'  => 'ok',
                'mensaje' => 'Domicilio del ofendido editado correctamente',
                'data'    => [
                    'idDomicilioOfendidoSolicitud' => $domicilioOfendidoResponse[0]->getIdDomicilioOfendidoSolicitud(),
                    'idOfendidoSolicitud'          => $domicilioOfendidoResponse[0]->getIdOfendidoSolicitud()
                ]
            ];


        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo editar el domicilio del ofendido']
            ];
        }


    }

    public function eliminarDomicilioOfendido($DomiciliosofendidossolicitudesDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }


        //valida si puede eliminar domicilio

        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DomiciliosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'eliminar', 'domicilio');

        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status'  => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }

        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);

        $this->proveedor->execute('BEGIN');

        try {
            $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
            $domicilioOfendidoResponse = $DomiciliosofendidossolicitudesDao->eliminarDomicilioOfendido($DomiciliosofendidossolicitudesDto, $this->proveedor, 'idDomicilioOfendidoSolicitud');

            if (!$domicilioOfendidoResponse) throw new Exception('no se pudo eliminar el domicilio en bitacora.');

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(60, 'ELIMINAR tbldomiciliosofendidossolicitudes', 'txt', serialize($DomiciliosofendidossolicitudesDto), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion eliminar domicilio en bitacora');

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Domicilio del ofendido eliminado correctamente',
                'data'    => []
            ];


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar el domicilio del ofendido'
            ];
        }


    }

    public function insertDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesDao->insertDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor);

        return $DomiciliosofendidossolicitudesDto;
    }

    public function updateDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesDao->updateDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor);

        return $DomiciliosofendidossolicitudesDto;
    }

    public function deleteDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor = null)
    {
        $DomiciliosofendidossolicitudesDto = $this->validarDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto);
        $DomiciliosofendidossolicitudesDao = new DomiciliosofendidossolicitudesDAO();
        $DomiciliosofendidossolicitudesDto = $DomiciliosofendidossolicitudesDao->deleteDomiciliosofendidossolicitudes($DomiciliosofendidossolicitudesDto, $proveedor);

        return $DomiciliosofendidossolicitudesDto;
    }
}
