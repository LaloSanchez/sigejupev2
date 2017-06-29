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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitoscarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitoscarpetas($delitoscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldelitoscarpetas(";
if($delitoscarpetasDto->getidDelitoCarpeta()!=""){
$sql.="idDelitoCarpeta";
if(($delitoscarpetasDto->getCveDelito()!="") ||($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getcveDelito()!=""){
$sql.="cveDelito";
if(($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getactivo()!=""){
$sql.="activo";
if(($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitoscarpetasDto->getidDelitoCarpeta()!=""){
$sql.="'".$delitoscarpetasDto->getidDelitoCarpeta()."'";
if(($delitoscarpetasDto->getCveDelito()!="") ||($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getcveDelito()!=""){
$sql.="'".$delitoscarpetasDto->getcveDelito()."'";
if(($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getactivo()!=""){
$sql.="'".$delitoscarpetasDto->getactivo()."'";
if(($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getidCarpetaJudicial()!=""){
$sql.="'".$delitoscarpetasDto->getidCarpetaJudicial()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoscarpetasDTO();
$tmp->setidDelitoCarpeta($this->_proveedor->lastID());
$tmp = $this->selectDelitoscarpetas($tmp,"",$this->_proveedor);
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
public function updateDelitoscarpetas($delitoscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldelitoscarpetas SET ";
if($delitoscarpetasDto->getidDelitoCarpeta()!=""){
$sql.="idDelitoCarpeta='".$delitoscarpetasDto->getidDelitoCarpeta()."'";
if(($delitoscarpetasDto->getCveDelito()!="") ||($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getcveDelito()!=""){
$sql.="cveDelito='".$delitoscarpetasDto->getcveDelito()."'";
if(($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getactivo()!=""){
$sql.="activo='".$delitoscarpetasDto->getactivo()."'";
if(($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoscarpetasDto->getfechaRegistro()."'";
if(($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoscarpetasDto->getfechaActualizacion()."'";
if(($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=",";
}
}
if($delitoscarpetasDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$delitoscarpetasDto->getidCarpetaJudicial()."'";
}
$sql.=" WHERE idDelitoCarpeta='".$delitoscarpetasDto->getidDelitoCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoscarpetasDTO();
$tmp->setidDelitoCarpeta($delitoscarpetasDto->getidDelitoCarpeta());
$tmp = $this->selectDelitoscarpetas($tmp,"",$this->_proveedor);
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
public function deleteDelitoscarpetas($delitoscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldelitoscarpetas  WHERE idDelitoCarpeta='".$delitoscarpetasDto->getidDelitoCarpeta()."'";
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
public function selectDelitoscarpetas($delitoscarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoCarpeta,cveDelito,activo,fechaRegistro,fechaActualizacion,idCarpetaJudicial FROM tbldelitoscarpetas ";
if(($delitoscarpetasDto->getidDelitoCarpeta()!="") ||($delitoscarpetasDto->getcveDelito()!="") ||($delitoscarpetasDto->getactivo()!="") ||($delitoscarpetasDto->getfechaRegistro()!="") ||($delitoscarpetasDto->getfechaActualizacion()!="") ||($delitoscarpetasDto->getidCarpetaJudicial()!="") ){
$sql.=" WHERE ";
}
if($delitoscarpetasDto->getidDelitoCarpeta()!=""){
$sql.="idDelitoCarpeta='".$delitoscarpetasDto->getIdDelitoCarpeta()."'";
if(($delitoscarpetasDto->getCveDelito()!="") ||($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=" AND ";
}
}
if($delitoscarpetasDto->getcveDelito()!=""){
$sql.="cveDelito='".$delitoscarpetasDto->getCveDelito()."'";
if(($delitoscarpetasDto->getActivo()!="") ||($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=" AND ";
}
}
if($delitoscarpetasDto->getactivo()!=""){
$sql.="activo='".$delitoscarpetasDto->getActivo()."'";
if(($delitoscarpetasDto->getFechaRegistro()!="") ||($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=" AND ";
}
}
if($delitoscarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoscarpetasDto->getFechaRegistro()."'";
if(($delitoscarpetasDto->getFechaActualizacion()!="") ||($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=" AND ";
}
}
if($delitoscarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoscarpetasDto->getFechaActualizacion()."'";
if(($delitoscarpetasDto->getIdCarpetaJudicial()!="") ){
$sql.=" AND ";
}
}
if($delitoscarpetasDto->getidCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$delitoscarpetasDto->getIdCarpetaJudicial()."'";
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
$tmp[$contador] = new DelitoscarpetasDTO();
$tmp[$contador]->setIdDelitoCarpeta($row["idDelitoCarpeta"]);
$tmp[$contador]->setCveDelito($row["cveDelito"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
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
public function selectDelitosInner($delitoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
}
        $sql = "SELECT s.idDelitoCarpeta as idDelitoCarpeta, s.cveDelito as cveDelito, d.desDelito as desDelito, s.activo, s.fechaRegistro, s.fechaActualizacion, s.idCarpetaJudicial FROM tbldelitosCarpetas s INNER JOIN tbldelitos d ON s.cveDelito = d.cveDelito
					WHERE s.idCarpetaJudicial=" . $delitoscarpetasDto->getIdCarpetaJudicial() . " AND s.activo = 'S' ORDER BY s.idDelitoCarpeta";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DelitosCarpetasDTO();
                    $tmp[$contador]->setIdDelitoCarpeta($row["idDelitoCarpeta"]);
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setDesDelito($row["desDelito"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
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