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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposactuacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposactuaciones($tiposactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposactuaciones(";
if($tiposactuacionesDto->getcveTipoActuacion()!=""){
$sql.="cveTipoActuacion";
if(($tiposactuacionesDto->getDesTipoActuacion()!="") ||($tiposactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getdesTipoActuacion()!=""){
$sql.="desTipoActuacion";
if(($tiposactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposactuacionesDto->getcveTipoActuacion()!=""){
$sql.="'".$tiposactuacionesDto->getcveTipoActuacion()."'";
if(($tiposactuacionesDto->getDesTipoActuacion()!="") ||($tiposactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getdesTipoActuacion()!=""){
$sql.="'".$tiposactuacionesDto->getdesTipoActuacion()."'";
if(($tiposactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getactivo()!=""){
$sql.="'".$tiposactuacionesDto->getactivo()."'";
}
if($tiposactuacionesDto->getfechaRegistro()!=""){
}
if($tiposactuacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposactuacionesDTO();
$tmp->setcveTipoActuacion($this->_proveedor->lastID());
$tmp = $this->selectTiposactuaciones($tmp,"",$this->_proveedor);
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
public function updateTiposactuaciones($tiposactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposactuaciones SET ";
if($tiposactuacionesDto->getcveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$tiposactuacionesDto->getcveTipoActuacion()."'";
if(($tiposactuacionesDto->getDesTipoActuacion()!="") ||($tiposactuacionesDto->getActivo()!="") ||($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getdesTipoActuacion()!=""){
$sql.="desTipoActuacion='".$tiposactuacionesDto->getdesTipoActuacion()."'";
if(($tiposactuacionesDto->getActivo()!="") ||($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getactivo()!=""){
$sql.="activo='".$tiposactuacionesDto->getactivo()."'";
if(($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposactuacionesDto->getfechaRegistro()."'";
if(($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposactuacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposactuacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoActuacion='".$tiposactuacionesDto->getcveTipoActuacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposactuacionesDTO();
$tmp->setcveTipoActuacion($tiposactuacionesDto->getcveTipoActuacion());
$tmp = $this->selectTiposactuaciones($tmp,"",$this->_proveedor);
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
public function deleteTiposactuaciones($tiposactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposactuaciones  WHERE cveTipoActuacion='".$tiposactuacionesDto->getcveTipoActuacion()."'";
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
public function selectTiposactuaciones($tiposactuacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoActuacion,desTipoActuacion,activo,fechaRegistro,fechaActualizacion FROM tbltiposactuaciones ";
if(($tiposactuacionesDto->getcveTipoActuacion()!="") ||($tiposactuacionesDto->getdesTipoActuacion()!="") ||($tiposactuacionesDto->getactivo()!="") ||($tiposactuacionesDto->getfechaRegistro()!="") ||($tiposactuacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposactuacionesDto->getcveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$tiposactuacionesDto->getCveTipoActuacion()."'";
if(($tiposactuacionesDto->getDesTipoActuacion()!="") ||($tiposactuacionesDto->getActivo()!="") ||($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposactuacionesDto->getdesTipoActuacion()!=""){
$sql.="desTipoActuacion='".$tiposactuacionesDto->getDesTipoActuacion()."'";
if(($tiposactuacionesDto->getActivo()!="") ||($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposactuacionesDto->getactivo()!=""){
$sql.="activo='".$tiposactuacionesDto->getActivo()."'";
if(($tiposactuacionesDto->getFechaRegistro()!="") ||($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposactuacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposactuacionesDto->getFechaRegistro()."'";
if(($tiposactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposactuacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposactuacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposactuacionesDTO();
$tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
$tmp[$contador]->setDesTipoActuacion($row["desTipoActuacion"]);
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