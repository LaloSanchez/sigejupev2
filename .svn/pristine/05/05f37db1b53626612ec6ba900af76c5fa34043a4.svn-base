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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/secuencias/SecuenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

class SecuenciasController {
	private $proveedor;
	public function __construct() {
	}
	public function validarSecuencias($SecuenciasDto){
		$SecuenciasDto->setidSecuencia(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getidSecuencia()))));
		$SecuenciasDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getcveRolJuzgador()))));
		$SecuenciasDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getcveJuzgado()))));
		$SecuenciasDto->setaparicion(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getaparicion()))));
		$SecuenciasDto->setorden(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getorden()))));
		$SecuenciasDto->setdescansaFinSemana(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getdescansaFinSemana()))));
		$SecuenciasDto->setactivo(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getactivo()))));
		$SecuenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getfechaRegistro()))));
		$SecuenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SecuenciasDto->getfechaActualizacion()))));
		return $SecuenciasDto;
	}
	public function selectSecuencias($SecuenciasDto,$proveedor=null){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasDao = new SecuenciasDAO();
		$SecuenciasDto = $SecuenciasDao->selectSecuencias($SecuenciasDto,$proveedor);
		return $SecuenciasDto;
	}
	public function selectSecuenciasGenerico($SecuenciasDto,$proveedor=null){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasDao = new SecuenciasDAO();
		$SecuenciasDto = $SecuenciasDao->selectSecuenciasGenerico($SecuenciasDto,$proveedor);
		return $SecuenciasDto;
	}
	public function insertSecuencias($SecuenciasDto,$proveedor=null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute('BEGIN');
        try{
			$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
			$SecuenciasDao = new SecuenciasDAO();
			$bitacora = new BitacoramovimientosController();
			$SecuenciasDto = $SecuenciasDao->insertSecuencias($SecuenciasDto,$proveedor);
			$bitacoraDomicilio = $bitacora->agregar(76, 'INSERCION tblsecuencias', 'txt', serialize($SecuenciasDto[0]), '');
			$this->proveedor->execute('COMMIT');
			return $SecuenciasDto;
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return false;
        }
	}
	public function updateSecuencias($SecuenciasDto,$proveedor=null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $this->proveedor->execute('BEGIN');
        try{
			$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
			$SecuenciasDao = new SecuenciasDAO();
			$bitacora = new BitacoramovimientosController();
			$SecuenciasDto = $SecuenciasDao->updateSecuencias($SecuenciasDto,$proveedor);
			$bitacoraDomicilio = $bitacora->agregar(77, 'ACTUALIZACION tblsecuencias', 'txt', serialize($SecuenciasDto[0]), '');
			$this->proveedor->execute('COMMIT');
			return $SecuenciasDto;
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return false;
        }
	}

	public function deleteSecuencias($SecuenciasDto,$proveedor=null){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasDao = new SecuenciasDAO();
		$SecuenciasDto = $SecuenciasDao->deleteSecuencias($SecuenciasDto,$proveedor);
		return $SecuenciasDto;
	}
}
?>