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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConfiguracionessalasDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertConfiguracionessalas($configuracionessalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblconfiguracionessalas(";
        if($configuracionessalasDto->getidConfiguracionSala()!=""){
            $sql.="idConfiguracionSala";
            if(($configuracionessalasDto->getCveHorario()!="") ||($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveHorario()!=""){
            $sql.="cveHorario";
            if(($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveSala()!=""){
            $sql.="cveSala";
            if(($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getactivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($configuracionessalasDto->getidConfiguracionSala()!=""){
            $sql.="'".$configuracionessalasDto->getidConfiguracionSala()."'";
            if(($configuracionessalasDto->getCveHorario()!="") ||($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveHorario()!=""){
            $sql.="'".$configuracionessalasDto->getcveHorario()."'";
            if(($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveSala()!=""){
            $sql.="'".$configuracionessalasDto->getcveSala()."'";
            if(($configuracionessalasDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getactivo()!=""){
            $sql.="'".$configuracionessalasDto->getactivo()."'";
        }
        if($configuracionessalasDto->getfechaRegistro()!=""){
        }
        if($configuracionessalasDto->getfechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionessalasDTO();
            $tmp->setidConfiguracionSala($this->_proveedor->lastID());
            $tmp = $this->selectConfiguracionessalas($tmp,"",$this->_proveedor);
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
    public function updateConfiguracionessalas($configuracionessalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblconfiguracionessalas SET ";
        if($configuracionessalasDto->getidConfiguracionSala()!=""){
            $sql.="idConfiguracionSala='".$configuracionessalasDto->getidConfiguracionSala()."'";
            if(($configuracionessalasDto->getCveHorario()!="") ||($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveHorario()!=""){
            $sql.="cveHorario='".$configuracionessalasDto->getcveHorario()."'";
            if(($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getcveSala()!=""){
            $sql.="cveSala='".$configuracionessalasDto->getcveSala()."'";
            if(($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getactivo()!=""){
            $sql.="activo='".$configuracionessalasDto->getactivo()."'";
            if(($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getfechaRegistro()!=""){
            $sql.="fechaRegistro='".$configuracionessalasDto->getfechaRegistro()."'";
            if(($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($configuracionessalasDto->getfechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$configuracionessalasDto->getfechaActualizacion()."'";
        }
        $sql.=" WHERE idConfiguracionSala='".$configuracionessalasDto->getidConfiguracionSala()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ConfiguracionessalasDTO();
            $tmp->setidConfiguracionSala($configuracionessalasDto->getidConfiguracionSala());
            $tmp = $this->selectConfiguracionessalas($tmp,"",$this->_proveedor);
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
    public function deleteConfiguracionessalas($configuracionessalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="DELETE FROM tblconfiguracionessalas  WHERE idConfiguracionSala='".$configuracionessalasDto->getidConfiguracionSala()."'";
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
    //borrado logico por cveHorario
    public function deleteLogicConfiguracionessalas($configuracionessalasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblconfiguracionessalas SET activo='N' WHERE cveHorario='".$configuracionessalasDto->getCveHorario()."'";
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
    public function selectConfiguracionessalas($configuracionessalasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT c.idConfiguracionSala,c.cveHorario,c.cveSala,c.activo,c.fechaRegistro,c.fechaActualizacion,s.desSala 
              FROM tblconfiguracionessalas c
                INNER JOIN tblsalas s ON s.cveSala=c.cveSala";
        if(($configuracionessalasDto->getidConfiguracionSala()!="") ||($configuracionessalasDto->getcveHorario()!="") ||($configuracionessalasDto->getcveSala()!="") ||($configuracionessalasDto->getactivo()!="") ||($configuracionessalasDto->getfechaRegistro()!="") ||($configuracionessalasDto->getfechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($configuracionessalasDto->getidConfiguracionSala()!=""){
            $sql.="c.idConfiguracionSala='".$configuracionessalasDto->getIdConfiguracionSala()."'";
            if(($configuracionessalasDto->getCveHorario()!="") ||($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionessalasDto->getcveHorario()!=""){
            $sql.="c.cveHorario='".$configuracionessalasDto->getCveHorario()."'";
            if(($configuracionessalasDto->getCveSala()!="") ||($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionessalasDto->getcveSala()!=""){
            $sql.="c.cveSala='".$configuracionessalasDto->getCveSala()."'";
            if(($configuracionessalasDto->getActivo()!="") ||($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionessalasDto->getactivo()!=""){
            $sql.="c.activo='".$configuracionessalasDto->getActivo()."'";
            if(($configuracionessalasDto->getFechaRegistro()!="") ||($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionessalasDto->getfechaRegistro()!=""){
            $sql.="c.fechaRegistro='".$configuracionessalasDto->getFechaRegistro()."'";
            if(($configuracionessalasDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($configuracionessalasDto->getfechaActualizacion()!=""){
            $sql.="c.fechaActualizacion='".$configuracionessalasDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new ConfiguracionessalasDTO();
                    $tmp[$contador]->setIdConfiguracionSala($row["idConfiguracionSala"]);
                    $tmp[$contador]->setCveHorario($row["cveHorario"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setDesSala($row["desSala"]);
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
    /*
     * Listado de salas activas consultadas por cveHorario (configuracion de salas)
     */
    public function selectSalasByHorario($configuracionessalasDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT c.idConfiguracionSala,c.cveHorario,s.cveSala
                FROM tblhorarios h
                  INNER JOIN tblconfiguracionessalas c ON c.cveHorario = h.cveHorario AND c.activo='S'
                  INNER JOIN tbljuzgados j ON j.cveJuzgado=h.cveJuzgado AND j.activo='S'
                  INNER JOIN tblatencionsalas a ON a.cveJuzgado=j.cveJuzgado
                  INNER JOIN tblsalas s ON s.cveSala = a.cveSala AND s.activo='S'
                  INNER JOIN tblprogramacionsalas p ON p.cveSala=s.cveSala AND p.CveHorario=h.cveHorario
                WHERE h.cveHorario=" . $configuracionessalasDto->getCveHorario();
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ConfiguracionessalasDTO();
                    $tmp[$contador]->setIdConfiguracionSala($row["idConfiguracionSala"]);
                    $tmp[$contador]->setCveHorario($row["cveHorario"]);
                    $tmp[$contador]->setCveSala($row["cveSala"]);
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