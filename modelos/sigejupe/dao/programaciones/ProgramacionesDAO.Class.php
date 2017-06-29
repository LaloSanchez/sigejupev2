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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ProgramacionesDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertProgramaciones($programacionesDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblprogramaciones(";
        if($programacionesDto->getIdProgramacion()!=""){
            $sql.="idProgramacion";
            if(($programacionesDto->getCveMes()!="") ||($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getCveMes()!=""){
            $sql.="cveMes";
            if(($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getAnio()!=""){
            $sql.="anio";
            if(($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaInicial()!=""){
            $sql.="fechaInicial";
            if(($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaFinal()!=""){
            $sql.="fechaFinal";
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getCveJuzgado()!=""){
            $sql.="cveJuzgado";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($programacionesDto->getIdProgramacion()!=""){
            $sql.="'".$programacionesDto->getIdProgramacion()."'";
            if(($programacionesDto->getCveMes()!="") ||($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getcveMes()!=""){
            $sql.="'".$programacionesDto->getCveMes()."'";
            if(($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getAnio()!=""){
            $sql.="'".$programacionesDto->getAnio()."'";
            if(($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaInicial()!=""){
            $sql.="'".$programacionesDto->getFechaInicial()."'";
            if(($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaFinal()!=""){
            $sql.="'".$programacionesDto->getFechaFinal()."'";
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaRegistro()!=""){
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaActualizacion()!=""){
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getCveJuzgado()!=""){
            $sql.="'".$programacionesDto->getCveJuzgado()."'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionesDTO();
            $tmp->setIdProgramacion($this->_proveedor->lastID());
            $tmp = $this->selectProgramaciones($tmp,"",$this->_proveedor);
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
    public function updateProgramaciones($programacionesDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblprogramaciones SET ";
        if($programacionesDto->getIdProgramacion()!=""){
            $sql.="idProgramacion='".$programacionesDto->getIdProgramacion()."'";
            if(($programacionesDto->getCveMes()!="") ||($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getCveMes()!=""){
            $sql.="cveMes='".$programacionesDto->getCveMes()."'";
            if(($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getAnio()!=""){
            $sql.="anio='".$programacionesDto->getAnio()."'";
            if(($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaInicial()!=""){
            $sql.="fechaInicial='".$programacionesDto->getFechaInicial()."'";
            if(($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaFinal()!=""){
            $sql.="fechaFinal='".$programacionesDto->getFechaFinal()."'";
            if(($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaRegistro()!=""){
            $sql.="fechaRegistro='".$programacionesDto->getFechaRegistro()."'";
            if(($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getFechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$programacionesDto->getFechaActualizacion()."'";
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($programacionesDto->getCveJuzgado()!=""){
            $sql.="cveJuzgado='".$programacionesDto->getCveJuzgado()."'";
        }
        $sql.=" WHERE idProgramacion='".$programacionesDto->getIdProgramacion()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionesDTO();
            $tmp->setIdProgramacion($programacionesDto->getIdProgramacion());
            $tmp = $this->selectProgramaciones($tmp,"",$this->_proveedor);
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
    public function deleteProgramaciones($programacionesDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramaciones  WHERE idProgramacion='".$programacionesDto->getIdProgramacion()."'";
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
    public function selectProgramaciones($programacionesDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT p.idProgramacion,p.cveMes,p.anio,p.fechaInicial,p.fechaFinal,p.fechaRegistro,p.fechaActualizacion,p.cveJuzgado,m.desMes,j.desJuzgado 
                FROM tblprogramaciones p
                    INNER JOIN tblmeses m ON m.cveMes=p.cveMes
                    INNER JOIN tbljuzgados j ON j.cveJuzgado=p.cveJuzgado";
        if(($programacionesDto->getIdProgramacion()!="") ||($programacionesDto->getCveMes()!="") ||($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
            $sql .= " WHERE ";
        }
        if($programacionesDto->getIdProgramacion()!=""){
            $sql .= "p.idProgramacion='".$programacionesDto->getIdProgramacion()."'";
            if(($programacionesDto->getCveMes()!="") ||($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getCveMes()!=""){
            $sql .= "p.cveMes='".$programacionesDto->getCveMes()."'";
            if(($programacionesDto->getAnio()!="") ||($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getAnio()!=""){
            $sql .= "p.anio='".$programacionesDto->getAnio()."'";
            if(($programacionesDto->getFechaInicial()!="") ||($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getFechaInicial()!=""){
            $sql .= "p.fechaInicial='".$programacionesDto->getFechaInicial()."'";
            if(($programacionesDto->getFechaFinal()!="") ||($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getFechaFinal()!=""){
            $sql .= "p.fechaFinal='".$programacionesDto->getFechaFinal()."'";
            if(($programacionesDto->getFechaRegistro()!="") ||($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getFechaRegistro()!=""){
            $sql .= "p.fechaRegistro='".$programacionesDto->getFechaRegistro()."'";
            if(($programacionesDto->getFechaActualizacion()!="") ||($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getFechaActualizacion()!=""){
            $sql .= "p.fechaActualizacion='".$programacionesDto->getFechaActualizacion()."'";
            if(($programacionesDto->getCveJuzgado()!="") ){
                $sql .= " AND ";
            }
        }
        if($programacionesDto->getCveJuzgado()!=""){
            $sql .= "p.cveJuzgado='".$programacionesDto->getCveJuzgado()."'";
        }
        if($orden!=""){
            $sql .= $orden;
        }else{
            $sql .= "";
        }
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ProgramacionesDTO();
                    $tmp[$contador]->setIdProgramacion($row["idProgramacion"]);
                    $tmp[$contador]->setCveMes($row["cveMes"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setFechaInicial($row["fechaInicial"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesMes($row["desMes"]);
                    $tmp[$contador]->setDesJuzgado($row["desJuzgado"]);
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