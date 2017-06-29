<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadorescarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertJuzgadorescarpetas($juzgadorescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tbljuzgadorescarpetas(";
        if($juzgadorescarpetasDto->getIdJuzgadorCarpeta()!=""){
            $sql.="idJuzgadorCarpeta";
            if(($juzgadorescarpetasDto->getIdJuzgador()!="") ||($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdJuzgador()!=""){
            $sql.="idJuzgador";
            if(($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdCarpetaJudicial()!=""){
            $sql.="idCarpetaJudicial";
            if(($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($juzgadorescarpetasDto->getIdJuzgadorCarpeta()!=""){
            $sql.="'".$juzgadorescarpetasDto->getIdJuzgadorCarpeta()."'";
            if(($juzgadorescarpetasDto->getIdJuzgador()!="") ||($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdJuzgador()!=""){
            $sql.="'".$juzgadorescarpetasDto->getIdJuzgador()."'";
            if(($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdCarpetaJudicial()!=""){
            $sql.="'".$juzgadorescarpetasDto->getIdCarpetaJudicial()."'";
            if(($juzgadorescarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getActivo()!=""){
            $sql.="'".$juzgadorescarpetasDto->getActivo()."'";
        }
        if($juzgadorescarpetasDto->getFechaRegistro()!=""){
        }
        if($juzgadorescarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadorescarpetasDTO();
            $tmp->setIdJuzgadorCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectJuzgadorescarpetas($tmp,"",$this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }
    public function updateJuzgadorescarpetas($juzgadorescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbljuzgadorescarpetas SET ";
        if($juzgadorescarpetasDto->getIdJuzgadorCarpeta()!=""){
            $sql.="idJuzgadorCarpeta='".$juzgadorescarpetasDto->getIdJuzgadorCarpeta()."'";
            if(($juzgadorescarpetasDto->getIdJuzgador()!="") ||($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdJuzgador()!=""){
            $sql.="idJuzgador='".$juzgadorescarpetasDto->getIdJuzgador()."'";
            if(($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getIdCarpetaJudicial()!=""){
            $sql.="idCarpetaJudicial='".$juzgadorescarpetasDto->getIdCarpetaJudicial()."'";
            if(($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getActivo()!=""){
            $sql.="activo='".$juzgadorescarpetasDto->getActivo()."'";
            if(($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$juzgadorescarpetasDto->getFechaRegistro()."'";
            if(($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($juzgadorescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$juzgadorescarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idJuzgadorCarpeta='".$juzgadorescarpetasDto->getIdJuzgadorCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new JuzgadorescarpetasDTO();
            $tmp->setIdJuzgadorCarpeta($juzgadorescarpetasDto->getIdJuzgadorCarpeta());
            $tmp = $this->selectJuzgadorescarpetas($tmp,"",$this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }
    public function deleteJuzgadorescarpetas($juzgadorescarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tbljuzgadorescarpetas  WHERE idJuzgadorCarpeta='".$juzgadorescarpetasDto->getIdJuzgadorCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }
    public function selectJuzgadorescarpetas($juzgadorescarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idJuzgadorCarpeta,idJuzgador,idCarpetaJudicial,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadorescarpetas ";
        if(($juzgadorescarpetasDto->getIdJuzgadorCarpeta()!="") ||($juzgadorescarpetasDto->getIdJuzgador()!="") ||($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($juzgadorescarpetasDto->getIdJuzgadorCarpeta()!=""){
            $sql.="idJuzgadorCarpeta='".$juzgadorescarpetasDto->getIdJuzgadorCarpeta()."'";
            if(($juzgadorescarpetasDto->getIdJuzgador()!="") ||($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($juzgadorescarpetasDto->getIdJuzgador()!=""){
            $sql.="idJuzgador='".$juzgadorescarpetasDto->getIdJuzgador()."'";
            if(($juzgadorescarpetasDto->getIdCarpetaJudicial()!="") ||($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($juzgadorescarpetasDto->getIdCarpetaJudicial()!=""){
            $sql.="idCarpetaJudicial='".$juzgadorescarpetasDto->getIdCarpetaJudicial()."'";
            if(($juzgadorescarpetasDto->getActivo()!="") ||($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($juzgadorescarpetasDto->getActivo()!=""){
            $sql.="activo='".$juzgadorescarpetasDto->getActivo()."'";
            if(($juzgadorescarpetasDto->getFechaRegistro()!="") ||($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($juzgadorescarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$juzgadorescarpetasDto->getFechaRegistro()."'";
            if(($juzgadorescarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($juzgadorescarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$juzgadorescarpetasDto->getFechaActualizacion()."'";
        }
        if($orden!=""){
            $sql.=$orden;
        }else{
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadorescarpetasDTO();
                    $tmp[$contador]->setIdJuzgadorCarpeta($row["idJuzgadorCarpeta"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $contador++;
                }
            } else {
            $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }
}
?>