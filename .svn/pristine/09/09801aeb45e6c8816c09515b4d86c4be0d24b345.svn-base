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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ProgramacionsalasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertProgramacionsalas($programacionsalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblprogramacionsalas(";
        if($programacionsalasDto->getIdDisponibilidadSala()!=""){
            $sql.="idDisponibilidadSala";
            if(($programacionsalasDto->getFechaInicio()!="") ||($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
            $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaInicio()!=""){
            $sql.="fechaInicio";
            if(($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaTermino()!=""){
            $sql.="fechaTermino";
            if(($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getCveSala()!=""){
            $sql.="cveSala";
            if(($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getIdProgramacion()!=""){
            $sql.="idProgramacion";
            if($programacionsalasDto->getCveCondicion()!=""){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getCveCondicion()!=""){
            $sql.="CveCondicion";
            if($programacionsalasDto->getCveHorario()!=""){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getCveHorario()!=""){
            $sql.="CveHorario";
        }
        $sql.=") VALUES(";
        if($programacionsalasDto->getIdDisponibilidadSala()!=""){
            $sql.="'".$programacionsalasDto->getIdDisponibilidadSala()."'";
            if(($programacionsalasDto->getFechaInicio()!="") ||($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ||($programacionsalasDto->getCveCondicion()!="") ||($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaInicio()!=""){
            $sql.="'".$programacionsalasDto->getFechaInicio()."'";
            if(($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ||($programacionsalasDto->getCveCondicion()!="") ||($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaTermino()!=""){
            $sql.="'".$programacionsalasDto->getFechaTermino()."'";
            if(($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ||($programacionsalasDto->getCveCondicion()!="") ||($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getCveSala()!=""){
            $sql.="'".$programacionsalasDto->getCveSala()."'";
            if(($programacionsalasDto->getIdProgramacion()!="") ||($programacionsalasDto->getCveCondicion()!="") ||($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getIdProgramacion()!=""){
            $sql.="'".$programacionsalasDto->getIdProgramacion()."'";
            if( ($programacionsalasDto->getCveCondicion()!="") ||($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if(($programacionsalasDto->getCveCondicion()!="")){
            $sql.="'".$programacionsalasDto->getCveCondicion()."'";
            if( ($programacionsalasDto->getCveHorario()!="") ){
                $sql.=",";
            }
        }
        if(($programacionsalasDto->getCveHorario()!="")){
            $sql.="'".$programacionsalasDto->getCveHorario()."'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionsalasDTO();
            $tmp->setIdDisponibilidadSala($this->_proveedor->lastID());
            $tmp = $this->selectProgramacionsalas($tmp,"",$this->_proveedor);
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
    public function updateProgramacionsalas($programacionsalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblprogramacionsalas SET ";
            if($programacionsalasDto->getIdDisponibilidadSala()!=""){
            $sql.="idDisponibilidadSala='".$programacionsalasDto->getIdDisponibilidadSala()."'";
            if(($programacionsalasDto->getFechaInicio()!="") ||($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaInicio()!=""){
            $sql.="fechaInicio='".$programacionsalasDto->getFechaInicio()."'";
            if(($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getFechaTermino()!=""){
            $sql.="fechaTermino='".$programacionsalasDto->getFechaTermino()."'";
            if(($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getCveSala()!=""){
            $sql.="cveSala='".$programacionsalasDto->getCveSala()."'";
            if(($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=",";
            }
        }
        if($programacionsalasDto->getIdProgramacion()!=""){
            $sql.="idProgramacion='".$programacionsalasDto->getIdProgramacion()."'";
        }
        $sql.=" WHERE idDisponibilidadSala='".$programacionsalasDto->getIdDisponibilidadSala()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionsalasDTO();
            $tmp->setIdDisponibilidadSala($programacionsalasDto->getIdDisponibilidadSala());
            $tmp = $this->selectProgramacionsalas($tmp,"",$this->_proveedor);
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
    public function deleteProgramacionsalas($programacionsalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblprogramacionsalas  WHERE idDisponibilidadSala='".$programacionsalasDto->getIdDisponibilidadSala()."'";
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
    public function selectProgramacionsalas($programacionsalasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT idDisponibilidadSala,fechaInicio,fechaTermino,cveSala,idProgramacion, CveCondicion, CveHorario FROM tblprogramacionsalas ";
        if(($programacionsalasDto->getIdDisponibilidadSala()!="") ||($programacionsalasDto->getFechaInicio()!="") ||($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
            $sql.=" WHERE ";
        }
        if($programacionsalasDto->getIdDisponibilidadSala()!=""){
            $sql.="idDisponibilidadSala='".$programacionsalasDto->getIdDisponibilidadSala()."'";
            if(($programacionsalasDto->getFechaInicio()!="") ||($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($programacionsalasDto->getFechaInicio()!=""){
            $sql.="fechaInicio LIKE'%".$programacionsalasDto->getFechaInicio()."%'";
            if(($programacionsalasDto->getFechaTermino()!="") ||($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($programacionsalasDto->getFechaTermino()!=""){
            $sql.="fechaTermino LIKE'%".$programacionsalasDto->getFechaTermino()."%'";
            if(($programacionsalasDto->getCveSala()!="") ||($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($programacionsalasDto->getCveSala()!=""){
            $sql.="cveSala='".$programacionsalasDto->getCveSala()."'";
            if(($programacionsalasDto->getIdProgramacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($programacionsalasDto->getIdProgramacion()!=""){
            $sql.="idProgramacion='".$programacionsalasDto->getIdProgramacion()."'";
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
                    $tmp[$contador] = new ProgramacionsalasDTO();
                    $tmp[$contador]->setIdDisponibilidadSala($row["idDisponibilidadSala"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setFechaTermino($row["fechaTermino"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setIdProgramacion($row["idProgramacion"]);
                    $tmp[$contador]->setCveCondicion($row["CveCondicion"]);
                    $tmp[$contador]->setCveHorario($row["CveHorario"]);
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
   
    public function selectAtencionsalas($programacionsalasDto,$salas = "",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT a.idAtencionSala,
                       s.cveSala,
                       s.desSala,
                       a.cveJuzgado,
                       c.cveCondicion,
                       c.desCondicion,
                       h.cveHorario,
                       h.horarioInicial,
                       h.horarioFinal
                FROM tblatencionsalas a
                    INNER JOIN tblsalas s ON s.cveSala=a.cveSala AND s.activo='S'
                    INNER JOIN tbljuzgados j ON j.cveJuzgado=a.cveJuzgado AND j.activo='S'
                    INNER JOIN tblcondiciones c ON c.cveCondicion=a.cveCondicion
                    INNER JOIN tblconfiguracionessalas r ON r.cveSala=s.cveSala AND r.activo='S'
                    INNER JOIN tblhorarios h ON h.cveHorario=r.cveHorario AND h.activo='S' AND h.cveJuzgado=j.cveJuzgado
                WHERE a.cveJuzgado=" . $programacionsalasDto->getCveJuzgado() . "";
        if($salas != "" || strlen($salas)> 0 ){
            $sql .= " 
                    AND a.cveSala IN(" . $salas . ")";
        }
        $sql .= " 
                ORDER BY s.desSala, h.horarioInicial, h.horarioFinal";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ProgramacionsalasDTO();
                    $tmp[$contador]->setIdAtencionSala($row["idAtencionSala"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setDesSala($row["desSala"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveCondicion($row["cveCondicion"]);
                    $tmp[$contador]->setDesCondicion($row["desCondicion"]);
                    $tmp[$contador]->setCveHorario($row["cveHorario"]);
                    $tmp[$contador]->setHorarioInicial($row["horarioInicial"]);
                    $tmp[$contador]->setHorarioFinal($row["horarioFinal"]);
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
        //print_r($tmp);
        unset($contador);
        unset($sql);
        return $tmp;
    }
}
?>