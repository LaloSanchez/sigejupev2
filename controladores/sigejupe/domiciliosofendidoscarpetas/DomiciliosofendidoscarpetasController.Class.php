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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class DomiciliosofendidoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    
    public function validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto){
        $DomiciliosofendidoscarpetasDto->setidDomicilioOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getidDomicilioOfendidoCarpeta()))));
        $DomiciliosofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getidOfendidoCarpeta()))));
        $DomiciliosofendidoscarpetasDto->setDomicilioProcesal(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getDomicilioProcesal()))));
        $DomiciliosofendidoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcvePais()))));
        $DomiciliosofendidoscarpetasDto->setcveEstado(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcveEstado()))));
        $DomiciliosofendidoscarpetasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcveMunicipio()))));
        $DomiciliosofendidoscarpetasDto->setdireccion(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getdireccion()))));
        $DomiciliosofendidoscarpetasDto->setcolonia(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcolonia()))));
        $DomiciliosofendidoscarpetasDto->setnumInterior(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getnumInterior()))));
        $DomiciliosofendidoscarpetasDto->setnumExterior(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getnumExterior()))));
        $DomiciliosofendidoscarpetasDto->setcp(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcp()))));
        $DomiciliosofendidoscarpetasDto->setlatitud(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getlatitud()))));
        $DomiciliosofendidoscarpetasDto->setlongitud(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getlongitud()))));
        $DomiciliosofendidoscarpetasDto->setrecidenciaHabitual(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getrecidenciaHabitual()))));
        $DomiciliosofendidoscarpetasDto->setestado(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getestado()))));
        $DomiciliosofendidoscarpetasDto->setmunicipio(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getmunicipio()))));
        $DomiciliosofendidoscarpetasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcveConvivencia()))));
        $DomiciliosofendidoscarpetasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim($DomiciliosofendidoscarpetasDto->getcveTipoDeVivienda()))));
        return $DomiciliosofendidoscarpetasDto;
    }
    
    public function validaDomicilioOfendido($DomiciliosofendidoscarpetasDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, $DomiciliosofendidoscarpetasDto->getcvePais())) {
            $estatus = 'error';
            $msg[] = '* El país domicilio no es válido';
        }

        if ($DomiciliosofendidoscarpetasDto->getcvePais() == 119) {
            if (!$validacion->num(0, 5, $DomiciliosofendidoscarpetasDto->getCveEstado())) {
                $estatus = 'error';
                $msg[] = '* El estado no es válido';
            }

            if (!$validacion->num(0, 5, $DomiciliosofendidoscarpetasDto->getCveMunicipio())) {
                $estatus = 'error';
                $msg[] = '* El municipio no es válido';
            }
        } else {

            if (!$validacion->between(1, 200, $DomiciliosofendidoscarpetasDto->getEstado())) {
                $estatus = 'error';
                $msg[] = '* El estado debe contener entre 1 y 200 caracteres de longitud';
            }

            if (!$validacion->between(1, 200, $DomiciliosofendidoscarpetasDto->getMunicipio())) {
                $estatus = 'error';
                $msg[] = '* El municipio debe contener entre 1 y 200 caracteres de longitud';
            }

        }

        if (!$validacion->num(0, 2, $DomiciliosofendidoscarpetasDto->getCveConvivencia())) {
            $estatus = 'error';
            $msg[] = '* El campo convivencia no es válido';
        }


        if (!$validacion->between(1, 500, $DomiciliosofendidoscarpetasDto->getDireccion())) {
            $estatus = 'error';
            $msg[] = '* La calle debe contener entre 1 y 500 caracteres de longitud';
        }

        if (!$validacion->between(1, 200, $DomiciliosofendidoscarpetasDto->getColonia())) {
            $estatus = 'error';
            $msg[] = '* La colonia debe contener entre 1 y 200 caracteres de longitud';
        }

        if (!$validacion->between(1, 5, $DomiciliosofendidoscarpetasDto->getNumExterior())) {
            $estatus = 'error';
            $msg[] = '* El número exterior debe ser numérico y contener maximo 3 caracteres';
        }

        if ( $DomiciliosofendidoscarpetasDto->getCp() != "" ) {
            if (!$validacion->textNum(1, 6, $DomiciliosofendidoscarpetasDto->getCp())) {
                $estatus = 'error';
                $msg[] = '* El Código Postal debe se númerico y contener 5 caracteres';
            }
        }
        

        if (!$validacion->num(0, 2, $DomiciliosofendidoscarpetasDto->getCveTipoDeVivienda())) {
            $estatus = 'error';
            $msg[] = '* El campo tipo de vivienda no es válido';
        }

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }
    
    /*
     * Para actualizar carpetas judiciales
     */
    public function agregarDomicilioOfendido($DomiciliosofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $validacion = $this->validaDomicilioOfendido($DomiciliosofendidoscarpetasDto);

        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error") return $validacion;

        $this->proveedor->execute('BEGIN');

        try {
            if ($DomiciliosofendidoscarpetasDto->getCvePais() == "119") {
                $DomiciliosofendidoscarpetasDto->setEstado('');
                $DomiciliosofendidoscarpetasDto->setMunicipio('');
            } else {
                $DomiciliosofendidoscarpetasDto->setCveEstado('');
                $DomiciliosofendidoscarpetasDto->setCveMunicipio('');
            }

            if ($DomiciliosofendidoscarpetasDto->getRecidenciaHabitual() == "") {
                $DomiciliosofendidoscarpetasDto->setRecidenciaHabitual('N');
            }
            if ($DomiciliosofendidoscarpetasDto->getDomicilioProcesal() == "") {
                $DomiciliosofendidoscarpetasDto->setDomicilioProcesal('N');
            }
            $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

            $domicilioOfendidoResponse = $DomiciliosofendidoscarpetasDao->insertDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto, $this->proveedor);


            if (!count($domicilioOfendidoResponse)) throw new Exception('no se pudo guardar el domicilio.');

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(192, 'INSERCION tbldomiciliosofendidoscarpetas', 'txt', serialize($domicilioOfendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion agregar domicilio en bitacora');


            $this->proveedor->execute('COMMIT');

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Datos de domicilio guardados correctamente',
                'data'    => [
                    'idDomicilioOfendidoCarpeta' => $domicilioOfendidoResponse[0]->getIdDomicilioOfendidoCarpeta(),
                    'idOfendidoCarpeta'          => $domicilioOfendidoResponse[0]->getIdOfendidoCarpeta()
                ]
            ];

            return $response;


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo guardar los datos de domicilio']
            ];
        }


    }

    public function modificarDomicilioOfendido($DomiciliosofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $validacion = $this->validaDomicilioOfendido($DomiciliosofendidoscarpetasDto);

        //si el estatus es true es que tiene un error;
        if ($validacion['status'] == "error") return $validacion;

        $this->proveedor->execute('BEGIN');

        try {

            $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();

            if ($DomiciliosofendidoscarpetasDto->getCvePais() == "119") {
                $DomiciliosofendidoscarpetasDto->setEstado('');
                $DomiciliosofendidoscarpetasDto->setMunicipio('');
            } else {
                $DomiciliosofendidoscarpetasDto->setCveEstado('');
                $DomiciliosofendidoscarpetasDto->setCveMunicipio('');
            }

            if ($DomiciliosofendidoscarpetasDto->getRecidenciaHabitual() == "") {
                $DomiciliosofendidoscarpetasDto->setRecidenciaHabitual('N');
            }
            if ($DomiciliosofendidoscarpetasDto->getDomicilioProcesal() == "") {
                $DomiciliosofendidoscarpetasDto->setDomicilioProcesal('N');
            }

            $DomiciliosofendidoscarpetasDto->setFechaActualizacion('NOW');

            $domicilioOfendidoResponse = $DomiciliosofendidoscarpetasDao->modificarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto, $this->proveedor);

            if (!count($domicilioOfendidoResponse)) throw new Exception('no se pudo actualizar el domicilio.');

            $selectDomicilioDto = new DomiciliosofendidoscarpetasDTO();
            $selectDomicilioDto->setIdDomicilioOfendidoCarpeta($DomiciliosofendidoscarpetasDto->getIdDomicilioOfendidoCarpeta());
            $selectDomicilio = $DomiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($selectDomicilioDto, "", $this->proveedor);

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(193, 'MODIFICACION tbldomiciliosofendidoscarpetas', 'txt', 'DATOS ANTES DE ACTUALIZAR >>> ' . serialize($selectDomicilio[0]) . ' DATOS DESPUES DE ACTUALIZAR >>> ' . serialize($domicilioOfendidoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion actualizar domicilio en bitacora');

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Domicilio editado correctamente',
                'data'    => [
                    'idDomicilioOfendidoCarpeta' => $domicilioOfendidoResponse[0]->getIdDomicilioOfendidoCarpeta(),
                    'idOfendidoCarpeta'          => $domicilioOfendidoResponse[0]->getIdOfendidoCarpeta()
                ]
            ];


        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo editar el domicilio']
            ];
        }


    }

    public function eliminarDomicilioOfendido($DomiciliosofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $DomiciliosofendidoscarpetasDto = $this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);

        $this->proveedor->execute('BEGIN');

        try {
            $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
            $DomiciliosofendidoscarpetasDto->setActivo('N');
            $domicilioOfendidoResponse = $DomiciliosofendidoscarpetasDao->eliminarDomiciliosOfendidoByIdOfendido($DomiciliosofendidoscarpetasDto, $this->proveedor);

            if (!$domicilioOfendidoResponse) throw new Exception('no se pudo eliminar el domicilio.');

            $bitacora = new BitacoramovimientosController();
            $bitacoraDomicilio = $bitacora->agregar(194, 'ELIMINAR tbldomiciliosofendidoscarpetas', 'txt', serialize($DomiciliosofendidoscarpetasDto), '', $this->proveedor);

            if (!count($bitacoraDomicilio)) throw new Exception('no se pudo guardar la accion eliminar domicilio en bitacora');

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Domicilio eliminado correctamente',
                'data'    => []
            ];


        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar el domicilio'
            ];
        }


    }
    
    public function selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor=null){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor);
        return $DomiciliosofendidoscarpetasDto;
    }
    
    public function insertDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor=null){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasDao->insertDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor);
        return $DomiciliosofendidoscarpetasDto;
    }
    
    public function updateDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor=null){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
        //$tmpDto = new DomiciliosofendidoscarpetasDTO();
        //$tmpDto = $DomiciliosofendidoscarpetasDao->selectDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DomiciliosofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasDao->updateDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor);
        return $DomiciliosofendidoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor=null){
        $DomiciliosofendidoscarpetasDto=$this->validarDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto);
        $DomiciliosofendidoscarpetasDao = new DomiciliosofendidoscarpetasDAO();
        $DomiciliosofendidoscarpetasDto = $DomiciliosofendidoscarpetasDao->deleteDomiciliosofendidoscarpetas($DomiciliosofendidoscarpetasDto,$proveedor);
        return $DomiciliosofendidoscarpetasDto;
    }
    
    
    
}
?>