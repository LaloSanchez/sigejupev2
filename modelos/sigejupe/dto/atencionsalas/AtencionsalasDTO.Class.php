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

class AtencionsalasDTO {
    private $idAtencionSala;
    private $cveSala;
    private $cveJuzgado;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveCondicion;
    public function getIdAtencionSala(){
        return $this->idAtencionSala;
    }
    public function setIdAtencionSala($idAtencionSala){
        $this->idAtencionSala=$idAtencionSala;
    }
    public function getCveSala(){
        return $this->cveSala;
    }
    public function setCveSala($cveSala){
        $this->cveSala=$cveSala;
    }
    public function getCveJuzgado(){
        return $this->cveJuzgado;
    }
    public function setCveJuzgado($cveJuzgado){
        $this->cveJuzgado=$cveJuzgado;
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
    public function getCveCondicion(){
        return $this->cveCondicion;
    }
    public function setCveCondicion($cveCondicion){
        $this->cveCondicion=$cveCondicion;
    }
    public function toString(){
        return array("idAtencionSala"=>$this->idAtencionSala,
"cveSala"=>$this->cveSala,
"cveJuzgado"=>$this->cveJuzgado,
"fechaRegistro"=>$this->fechaRegistro,
"fechaActualizacion"=>$this->fechaActualizacion,
"cveCondicion"=>$this->cveCondicion);
    }
}
?>