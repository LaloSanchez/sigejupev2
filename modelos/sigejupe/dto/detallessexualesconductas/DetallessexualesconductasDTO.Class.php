<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DTOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

class DetallessexualesconductasDTO {
    private $idDetalleSexualConducta;
    private $cveDetalleConducta;
    private $idSexualConducta;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    public function getIdDetalleSexualConducta(){
        return $this->idDetalleSexualConducta;
    }
    public function setIdDetalleSexualConducta($idDetalleSexualConducta){
        $this->idDetalleSexualConducta=$idDetalleSexualConducta;
    }
    public function getCveDetalleConducta(){
        return $this->cveDetalleConducta;
    }
    public function setCveDetalleConducta($cveDetalleConducta){
        $this->cveDetalleConducta=$cveDetalleConducta;
    }
    public function getIdSexualConducta(){
        return $this->idSexualConducta;
    }
    public function setIdSexualConducta($idSexualConducta){
        $this->idSexualConducta=$idSexualConducta;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo=$activo;
    }
    public function getFechaRegistro(){
        return $this->fechaRegistro;
    }
    public function setFechaRegistro($fechaRegistro){
        $this->fechaRegistro=$fechaRegistro;
    }
    public function getFechaActualizacion(){
        return $this->fechaActualizacion;
    }
    public function setFechaActualizacion($fechaActualizacion){
        $this->fechaActualizacion=$fechaActualizacion;
    }
    public function toString(){
        return array("idDetalleSexualConducta"=>$this->idDetalleSexualConducta,
"cveDetalleConducta"=>$this->cveDetalleConducta,
"idSexualConducta"=>$this->idSexualConducta,
"activo"=>$this->activo,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion);
    }
}
?>