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

class SentenciaspublicasDTO {
    private $IdSentenciaP;
    private $IdActuacion;
    private $definiciones;
    private $estado;
    public function getIdSentenciaP(){
        return $this->IdSentenciaP;
    }
    public function setIdSentenciaP($IdSentenciaP){
        $this->IdSentenciaP=$IdSentenciaP;
    }
    public function getIdActuacion(){
        return $this->IdActuacion;
    }
    public function setIdActuacion($IdActuacion){
        $this->IdActuacion=$IdActuacion;
    }
    public function getDefiniciones(){
        return $this->definiciones;
    }
    public function setDefiniciones($definiciones){
        $this->definiciones=$definiciones;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function toString(){
        return array("IdSentenciaP"=>$this->IdSentenciaP,
"IdActuacion"=>$this->IdActuacion,
"definiciones"=>$this->definiciones,
"estado"=>$this->estado);
    }
}
?>