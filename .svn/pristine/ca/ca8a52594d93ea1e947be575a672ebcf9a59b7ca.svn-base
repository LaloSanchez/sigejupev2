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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DetallessexualesconductascarpetasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    /*
     * Se agrega el campo activo
     */
    public function insertDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tbldetallessexualesconductascarpetas(";
        if($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()!=""){
            $sql.="idDetalleSexualConductaCarpeta";
            if(($detallessexualesconductascarpetasDto->getCveDetalleConducta()!="") ||($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getCveDetalleConducta()!=""){
            $sql.="cveDetalleConducta";
            if(($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta";
            if(($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()!=""){
            $sql.="'".$detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getCveDetalleConducta()!="") ||($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getCveDetalleConducta()!=""){
            $sql.="'".$detallessexualesconductascarpetasDto->getCveDetalleConducta()."'";
            if(($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="'".$detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getActivo()!=""){
            $sql.="'".$detallessexualesconductascarpetasDto->getActivo()."'";
        }
        if($detallessexualesconductascarpetasDto->getFechaRegistro()!=""){
        }
        if($detallessexualesconductascarpetasDto->getFechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DetallessexualesconductascarpetasDTO();
            $tmp->setIdDetalleSexualConductaCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectDetallessexualesconductascarpetas($tmp,"",$this->_proveedor);
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
    public function updateDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbldetallessexualesconductascarpetas SET ";
        if($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()!=""){
            $sql.="idDetalleSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getCveDetalleConducta()!="") ||($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getCveDetalleConducta()!=""){
            $sql.="cveDetalleConducta='".$detallessexualesconductascarpetasDto->getCveDetalleConducta()."'";
            if(($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo='".$detallessexualesconductascarpetasDto->getActivo()."'";
            if(($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$detallessexualesconductascarpetasDto->getFechaRegistro()."'";
            if(($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($detallessexualesconductascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$detallessexualesconductascarpetasDto->getFechaActualizacion()."'";
        }
        $sql.=" WHERE idDetalleSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
        $tmp = new DetallessexualesconductascarpetasDTO();
        $tmp->setIdDetalleSexualConductaCarpeta($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta());
        $tmp = $this->selectDetallessexualesconductascarpetas($tmp,"",$this->_proveedor);
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
    public function deleteDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tbldetallessexualesconductascarpetas  WHERE idDetalleSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()."'";
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
    public function selectDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idDetalleSexualConductaCarpeta,cveDetalleConducta,idSexualConductaCarpeta,activo,fechaRegistro,fechaActualizacion FROM tbldetallessexualesconductascarpetas ";
        if(($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getCveDetalleConducta()!="") ||($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
            $sql.=" WHERE ";
        }
        if($detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()!=""){
            $sql.="idDetalleSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdDetalleSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getCveDetalleConducta()!="") ||($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($detallessexualesconductascarpetasDto->getCveDetalleConducta()!=""){
            $sql.="cveDetalleConducta='".$detallessexualesconductascarpetasDto->getCveDetalleConducta()."'";
            if(($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!="") ||($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()!=""){
            $sql.="idSexualConductaCarpeta='".$detallessexualesconductascarpetasDto->getIdSexualConductaCarpeta()."'";
            if(($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") || ($detallessexualesconductascarpetasDto->getActivo()!="") ){
                $sql.=" AND ";
            }
        }
        if($detallessexualesconductascarpetasDto->getActivo()!=""){
            $sql.="activo='".$detallessexualesconductascarpetasDto->getActivo()."'";
            if(($detallessexualesconductascarpetasDto->getFechaRegistro()!="") ||($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($detallessexualesconductascarpetasDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$detallessexualesconductascarpetasDto->getFechaRegistro()."'";
            if(($detallessexualesconductascarpetasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($detallessexualesconductascarpetasDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$detallessexualesconductascarpetasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new DetallessexualesconductascarpetasDTO();
                    $tmp[$contador]->setIdDetalleSexualConductaCarpeta($row["idDetalleSexualConductaCarpeta"]);
                    $tmp[$contador]->setCveDetalleConducta($row["cveDetalleConducta"]);
                    $tmp[$contador]->setIdSexualConductaCarpeta($row["idSexualConductaCarpeta"]);
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