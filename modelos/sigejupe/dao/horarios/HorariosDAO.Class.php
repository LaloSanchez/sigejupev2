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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/horarios/HorariosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class HorariosDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertHorarios($horariosDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblhorarios(";
        if($horariosDto->getcveHorario()!=""){
            $sql.="cveHorario";
            if(($horariosDto->getDesHorario()!="") ||($horariosDto->getActivo()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getdesHorario()!=""){
            $sql.="desHorario";
            if(($horariosDto->getActivo()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getactivo()!=""){
            $sql.="activo";
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioInicial()!=""){
            $sql.="horarioInicial";
            if(($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioFinal()!=""){
            $sql.="horarioFinal";
            if(($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getcveJuzgado()!=""){
            $sql.="cveJuzgado";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($horariosDto->getcveHorario()!=""){
            $sql.="'".$horariosDto->getcveHorario()."'";
            if(($horariosDto->getDesHorario()!="") ||($horariosDto->getActivo()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getdesHorario()!=""){
            $sql.="'" . addslashes(strtoupper($horariosDto->getdesHorario())) . "'";
            if(($horariosDto->getActivo()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getactivo()!=""){
            $sql.="'".$horariosDto->getactivo()."'";
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getfechaRegistro()!=""){
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getfechaActualizacion()!=""){
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioInicial()!=""){
            $sql.="'".$horariosDto->gethorarioInicial()."'";
            if(($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioFinal()!=""){
            $sql.="'".$horariosDto->gethorarioFinal()."'";
            if(($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getcveJuzgado()!=""){
            $sql.="'".$horariosDto->getcveJuzgado()."'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new HorariosDTO();
            $tmp->setcveHorario($this->_proveedor->lastID());
            $tmp = $this->selectHorarios($tmp,"",$this->_proveedor);
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
    public function updateHorarios($horariosDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblhorarios SET ";
        if($horariosDto->getcveHorario()!=""){
            $sql.="cveHorario='".$horariosDto->getcveHorario()."'";
            if(($horariosDto->getDesHorario()!="") ||($horariosDto->getActivo()!="") ||($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getdesHorario()!=""){
            $sql.="desHorario='".$horariosDto->getdesHorario()."'";
            if(($horariosDto->getActivo()!="") ||($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getactivo()!=""){
            $sql.="activo='".$horariosDto->getactivo()."'";
            if(($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getfechaRegistro()!=""){
            $sql.="fechaRegistro='".$horariosDto->getfechaRegistro()."'";
            if(($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getfechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$horariosDto->getfechaActualizacion()."'";
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioInicial()!=""){
            $sql.="horarioInicial='".$horariosDto->gethorarioInicial()."'";
            if(($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->gethorarioFinal()!=""){
            $sql.="horarioFinal='".$horariosDto->gethorarioFinal()."'";
            if(($horariosDto->getCveJuzgado()!="") ){
                $sql.=",";
            }
        }
        if($horariosDto->getcveJuzgado()!=""){
            $sql.="cveJuzgado='".$horariosDto->getcveJuzgado()."'";
        }
        $sql.=" WHERE cveHorario='".$horariosDto->getcveHorario()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new HorariosDTO();
            $tmp->setcveHorario($horariosDto->getcveHorario());
            $tmp = $this->selectHorarios($tmp,"",$this->_proveedor);
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
    public function deleteHorarios($horariosDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        //$sql="DELETE FROM tblhorarios  WHERE cveHorario='".$horariosDto->getcveHorario()."'";
        $sql="UPDATE tblhorarios SET activo='N' WHERE cveHorario='".$horariosDto->getcveHorario()."'";
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
    public function selectHorarios($horariosDto,$orden="ORDER BY h.horarioInicial",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT h.cveHorario,h.desHorario,h.activo,h.fechaRegistro,h.fechaActualizacion,h.horarioInicial,
                     h.horarioFinal,j.cveJuzgado,j.desJuzgado 
                FROM tblhorarios h
                INNER JOIN tbljuzgados j ON j.cveJuzgado=h.cveJuzgado AND h.activo='S'
            ";
        if(($horariosDto->getcveHorario()!="") ||($horariosDto->getdesHorario()!="") ||($horariosDto->getactivo()!="") ||($horariosDto->getfechaRegistro()!="") ||($horariosDto->getfechaActualizacion()!="") ||($horariosDto->gethorarioInicial()!="") ||($horariosDto->gethorarioFinal()!="") ||($horariosDto->getcveJuzgado()!="") ){
            $sql.=" WHERE ";
        }
        if($horariosDto->getcveHorario()!=""){
            $sql.="h.cveHorario='".$horariosDto->getCveHorario()."'";
            if(($horariosDto->getDesHorario()!="") ||($horariosDto->getActivo()!="") ||($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->getdesHorario()!=""){
            $sql.="h.desHorario='".$horariosDto->getDesHorario()."'";
            if(($horariosDto->getActivo()!="") ||($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->getactivo()!=""){
            $sql.="h.activo='".$horariosDto->getActivo()."'";
            if(($horariosDto->getFechaRegistro()!="") ||($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->getfechaRegistro()!=""){
            $sql.="h.fechaRegistro='".$horariosDto->getFechaRegistro()."'";
            if(($horariosDto->getFechaActualizacion()!="") ||($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->getfechaActualizacion()!=""){
            $sql.="h.fechaActualizacion='".$horariosDto->getFechaActualizacion()."'";
            if(($horariosDto->getHorarioInicial()!="") ||($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->gethorarioInicial()!=""){
            $sql.="h.horarioInicial='".$horariosDto->getHorarioInicial()."'";
            if(($horariosDto->getHorarioFinal()!="") ||($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->gethorarioFinal()!=""){
            $sql.="h.horarioFinal='".$horariosDto->getHorarioFinal()."'";
            if(($horariosDto->getCveJuzgado()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosDto->getcveJuzgado()!=""){
            $sql.="j.cveJuzgado='".$horariosDto->getCveJuzgado()."'";
        }
        if($orden!=""){
            $sql.=$orden;
        }else{
            $sql.="";
        }
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new HorariosDTO();
                    $tmp[$contador]->setCveHorario($row["cveHorario"]);
                    $tmp[$contador]->setDesHorario(utf8_encode($row["desHorario"]));
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setHorarioInicial($row["horarioInicial"]);
                    $tmp[$contador]->setHorarioFinal($row["horarioFinal"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
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
    
    public function selectSalasJuzgado($horariosDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT a.idAtencionSala,a.cveSala,a.cveJuzgado,cveCondicion, s.desSala
                FROM tblatencionsalas a 
                    INNER JOIN tblsalas s ON s.cveSala = a.cveSala AND s.activo='S'
                WHERE a.cveJuzgado=" . $horariosDto->getCveJuzgado() . $orden;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new SalasDTO();
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setDesSala(utf8_encode($row["desSala"]));
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