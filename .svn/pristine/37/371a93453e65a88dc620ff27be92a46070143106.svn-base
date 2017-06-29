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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/horariosjuzgadores/HorariosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class HorariosjuzgadoresDAO{
    protected $_proveedor;
    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }
    public function _conexion(){
        $this->_proveedor->connect();
    }
    public function insertHorariosjuzgadores($horariosjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="INSERT INTO tblhorariosjuzgadores(";
        if($horariosjuzgadoresDto->getidHorarioJuzgador()!=""){
            $sql.="idHorarioJuzgador";
            if(($horariosjuzgadoresDto->getDesHorario()!="") ||($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getdesHorario()!=""){
            $sql.="desHorario";
            if(($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioInicial()!=""){
            $sql.="horarioInicial";
            if(($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioFinal()!=""){
            $sql.="horarioFinal";
            if(($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveJuzgado()!=""){
            $sql.="cveJuzgado";
            if(($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveTipoJuzgador()!=""){
            $sql.="cveTipoJuzgador";
            if(($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getactivo()!=""){
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if($horariosjuzgadoresDto->getidHorarioJuzgador()!=""){
            $sql.="'".$horariosjuzgadoresDto->getidHorarioJuzgador()."'";
            if(($horariosjuzgadoresDto->getDesHorario()!="") ||($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getdesHorario()!=""){
            $sql.="'".$horariosjuzgadoresDto->getdesHorario()."'";
            if(($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioInicial()!=""){
            $sql.="'".$horariosjuzgadoresDto->gethorarioInicial()."'";
            if(($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioFinal()!=""){
            $sql.="'".$horariosjuzgadoresDto->gethorarioFinal()."'";
            if(($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveJuzgado()!=""){
            $sql.="'".$horariosjuzgadoresDto->getcveJuzgado()."'";
            if(($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveTipoJuzgador()!=""){
            $sql.="'".$horariosjuzgadoresDto->getcveTipoJuzgador()."'";
            if(($horariosjuzgadoresDto->getActivo()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getactivo()!=""){
            $sql.="'".$horariosjuzgadoresDto->getactivo()."'";
        }
        if($horariosjuzgadoresDto->getfechaRegistro()!=""){
        }
        if($horariosjuzgadoresDto->getfechaActualizacion()!=""){
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new HorariosjuzgadoresDTO();
            $tmp->setidHorarioJuzgador($this->_proveedor->lastID());
            $tmp = $this->selectHorariosjuzgadores($tmp,"",$this->_proveedor);
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
    public function updateHorariosjuzgadores($horariosjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblhorariosjuzgadores SET ";
            if($horariosjuzgadoresDto->getidHorarioJuzgador()!=""){
            $sql.="idHorarioJuzgador='".$horariosjuzgadoresDto->getidHorarioJuzgador()."'";
            if(($horariosjuzgadoresDto->getDesHorario()!="") ||($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getdesHorario()!=""){
            $sql.="desHorario='".$horariosjuzgadoresDto->getdesHorario()."'";
            if(($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioInicial()!=""){
            $sql.="horarioInicial='".$horariosjuzgadoresDto->gethorarioInicial()."'";
            if(($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->gethorarioFinal()!=""){
            $sql.="horarioFinal='".$horariosjuzgadoresDto->gethorarioFinal()."'";
            if(($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveJuzgado()!=""){
            $sql.="cveJuzgado='".$horariosjuzgadoresDto->getcveJuzgado()."'";
            if(($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getcveTipoJuzgador()!=""){
            $sql.="cveTipoJuzgador='".$horariosjuzgadoresDto->getcveTipoJuzgador()."'";
            if(($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getactivo()!=""){
            $sql.="activo='".$horariosjuzgadoresDto->getactivo()."'";
            if(($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getfechaRegistro()!=""){
            $sql.="fechaRegistro='".$horariosjuzgadoresDto->getfechaRegistro()."'";
            if(($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=",";
            }
        }
        if($horariosjuzgadoresDto->getfechaActualizacion()!=""){
            $sql.="fechaActualizacion='".$horariosjuzgadoresDto->getfechaActualizacion()."'";
        }
        $sql.=" WHERE idHorarioJuzgador='".$horariosjuzgadoresDto->getidHorarioJuzgador()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new HorariosjuzgadoresDTO();
            $tmp->setidHorarioJuzgador($horariosjuzgadoresDto->getidHorarioJuzgador());
            $tmp = $this->selectHorariosjuzgadores($tmp,"",$this->_proveedor);
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
    public function deleteHorariosjuzgadores($horariosjuzgadoresDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tblhorariosjuzgadores SET activo='N'  WHERE idHorarioJuzgador='".$horariosjuzgadoresDto->getidHorarioJuzgador()."'";
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
    public function selectHorariosjuzgadores($horariosjuzgadoresDto,$orden="ORDER BY h.horarioInicial",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="SELECT h.idHorarioJuzgador,h.desHorario,h.horarioInicial,h.horarioFinal,h.cveJuzgado,h.cveTipoJuzgador,h.activo,h.fechaRegistro,h.fechaActualizacion, j.desJuzgado, t.desTipoJuzgador
              FROM tblhorariosjuzgadores h
                  INNER JOIN tbljuzgados j ON j.cveJuzgado = h.cveJuzgado 
                  INNER JOIN tbltiposjuzgadores t ON t.cveTipoJuzgador = h.cveTipoJuzgador
              ";
        if(($horariosjuzgadoresDto->getidHorarioJuzgador()!="") ||($horariosjuzgadoresDto->getdesHorario()!="") ||($horariosjuzgadoresDto->gethorarioInicial()!="") ||($horariosjuzgadoresDto->gethorarioFinal()!="") ||($horariosjuzgadoresDto->getcveJuzgado()!="") ||($horariosjuzgadoresDto->getcveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getactivo()!="") ||($horariosjuzgadoresDto->getfechaRegistro()!="") ||($horariosjuzgadoresDto->getfechaActualizacion()!="") ){
            $sql.=" WHERE ";
        }
        if($horariosjuzgadoresDto->getidHorarioJuzgador()!=""){
            $sql.="h.idHorarioJuzgador='".$horariosjuzgadoresDto->getIdHorarioJuzgador()."'";
            if(($horariosjuzgadoresDto->getDesHorario()!="") ||($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getdesHorario()!=""){
            $sql.="h.desHorario='".$horariosjuzgadoresDto->getDesHorario()."'";
            if(($horariosjuzgadoresDto->getHorarioInicial()!="") ||($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->gethorarioInicial()!=""){
            $sql.="h.horarioInicial='".$horariosjuzgadoresDto->getHorarioInicial()."'";
            if(($horariosjuzgadoresDto->getHorarioFinal()!="") ||($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->gethorarioFinal()!=""){
            $sql.="h.horarioFinal='".$horariosjuzgadoresDto->getHorarioFinal()."'";
            if(($horariosjuzgadoresDto->getCveJuzgado()!="") ||($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getcveJuzgado()!=""){
            $sql.="h.cveJuzgado='".$horariosjuzgadoresDto->getCveJuzgado()."'";
            if(($horariosjuzgadoresDto->getCveTipoJuzgador()!="") ||($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getcveTipoJuzgador()!=""){
            $sql.="h.cveTipoJuzgador='".$horariosjuzgadoresDto->getCveTipoJuzgador()."'";
            if(($horariosjuzgadoresDto->getActivo()!="") ||($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getactivo()!=""){
            $sql.="h.activo='".$horariosjuzgadoresDto->getActivo()."'";
            if(($horariosjuzgadoresDto->getFechaRegistro()!="") ||($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getfechaRegistro()!=""){
            $sql.="h.fechaRegistro='".$horariosjuzgadoresDto->getFechaRegistro()."'";
            if(($horariosjuzgadoresDto->getFechaActualizacion()!="") ){
                $sql.=" AND ";
            }
        }
        if($horariosjuzgadoresDto->getfechaActualizacion()!=""){
            $sql.="h.fechaActualizacion='".$horariosjuzgadoresDto->getFechaActualizacion()."'";
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
                    $tmp[$contador] = new HorariosjuzgadoresDTO();
                    $tmp[$contador]->setIdHorarioJuzgador($row["idHorarioJuzgador"]);
                    $tmp[$contador]->setDesHorario(utf8_encode($row["desHorario"]));
                    $tmp[$contador]->setHorarioInicial($row["horarioInicial"]);
                    $tmp[$contador]->setHorarioFinal($row["horarioFinal"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setDesJuzgado(utf8_decode($row["desJuzgado"]));
                    $tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
                    $tmp[$contador]->setDesTipoJuzgador($row["desTipoJuzgador"]);
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
    
    public function selectJuzgadores($horariosjuzgadoresDto,$orden="",$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT j.idJuzgador,
                       j.titulo, 
                       j.paterno,
                       j.materno,
                       j.nombre
                FROM tbljuzgadores j
                   INNER JOIN tbljuzgadoresjuzgados jj ON jj.idJuzgador = j.idJuzgador AND (jj.activo='S' OR jj.activo=1)
                   INNER JOIN tbljuzgados ju ON ju.cveJuzgado = jj.cveJuzgado AND ju.activo='S'
                WHERE j.activo='S'
                AND ju.cveJuzgado=" . $horariosjuzgadoresDto->getCveJuzgado() . "
                ORDER BY j.nombre, j.paterno, j.materno";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new JuzgadoresDTO();
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setTitulo(utf8_encode($row["titulo"]));
                    $tmp[$contador]->setPaterno(utf8_encode($row["paterno"]));
                    $tmp[$contador]->setMaterno(utf8_encode($row["materno"]));
                    $tmp[$contador]->setNombre(utf8_encode($row["nombre"]));
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