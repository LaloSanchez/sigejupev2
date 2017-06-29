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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatussolicitudes($estatussolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatussolicitudes(";
if($estatussolicitudesDto->getcveEstatusSolicitud()!=""){
$sql.="cveEstatusSolicitud";
if(($estatussolicitudesDto->getDesEstatusSolicitud()!="") ||($estatussolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getdesEstatusSolicitud()!=""){
$sql.="desEstatusSolicitud";
if(($estatussolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatussolicitudesDto->getcveEstatusSolicitud()!=""){
$sql.="'".$estatussolicitudesDto->getcveEstatusSolicitud()."'";
if(($estatussolicitudesDto->getDesEstatusSolicitud()!="") ||($estatussolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getdesEstatusSolicitud()!=""){
$sql.="'".$estatussolicitudesDto->getdesEstatusSolicitud()."'";
if(($estatussolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getactivo()!=""){
$sql.="'".$estatussolicitudesDto->getactivo()."'";
}
if($estatussolicitudesDto->getfechaRegistro()!=""){
}
if($estatussolicitudesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesDTO();
$tmp->setcveEstatusSolicitud($this->_proveedor->lastID());
$tmp = $this->selectEstatussolicitudes($tmp,"",$this->_proveedor);
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
public function updateEstatussolicitudes($estatussolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatussolicitudes SET ";
if($estatussolicitudesDto->getcveEstatusSolicitud()!=""){
$sql.="cveEstatusSolicitud='".$estatussolicitudesDto->getcveEstatusSolicitud()."'";
if(($estatussolicitudesDto->getDesEstatusSolicitud()!="") ||($estatussolicitudesDto->getActivo()!="") ||($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getdesEstatusSolicitud()!=""){
$sql.="desEstatusSolicitud='".$estatussolicitudesDto->getdesEstatusSolicitud()."'";
if(($estatussolicitudesDto->getActivo()!="") ||($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getactivo()!=""){
$sql.="activo='".$estatussolicitudesDto->getactivo()."'";
if(($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesDto->getfechaRegistro()."'";
if(($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusSolicitud='".$estatussolicitudesDto->getcveEstatusSolicitud()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesDTO();
$tmp->setcveEstatusSolicitud($estatussolicitudesDto->getcveEstatusSolicitud());
$tmp = $this->selectEstatussolicitudes($tmp,"",$this->_proveedor);
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
public function deleteEstatussolicitudes($estatussolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatussolicitudes  WHERE cveEstatusSolicitud='".$estatussolicitudesDto->getcveEstatusSolicitud()."'";
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
public function selectEstatussolicitudes($estatussolicitudesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusSolicitud,desEstatusSolicitud,activo,fechaRegistro,fechaActualizacion FROM tblestatussolicitudes ";
if(($estatussolicitudesDto->getcveEstatusSolicitud()!="") ||($estatussolicitudesDto->getdesEstatusSolicitud()!="") ||($estatussolicitudesDto->getactivo()!="") ||($estatussolicitudesDto->getfechaRegistro()!="") ||($estatussolicitudesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatussolicitudesDto->getcveEstatusSolicitud()!=""){
$sql.="cveEstatusSolicitud='".$estatussolicitudesDto->getCveEstatusSolicitud()."'";
if(($estatussolicitudesDto->getDesEstatusSolicitud()!="") ||($estatussolicitudesDto->getActivo()!="") ||($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesDto->getdesEstatusSolicitud()!=""){
$sql.="desEstatusSolicitud='".$estatussolicitudesDto->getDesEstatusSolicitud()."'";
if(($estatussolicitudesDto->getActivo()!="") ||($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesDto->getactivo()!=""){
$sql.="activo='".$estatussolicitudesDto->getActivo()."'";
if(($estatussolicitudesDto->getFechaRegistro()!="") ||($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesDto->getFechaRegistro()."'";
if(($estatussolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatussolicitudesDTO();
$tmp[$contador]->setCveEstatusSolicitud($row["cveEstatusSolicitud"]);
$tmp[$contador]->setDesEstatusSolicitud($row["desEstatusSolicitud"]);
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