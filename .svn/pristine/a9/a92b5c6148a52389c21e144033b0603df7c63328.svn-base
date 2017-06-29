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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposdetenciones/TiposdetencionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposdetencionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposdetenciones($tiposdetencionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposdetenciones(";
if($tiposdetencionesDto->getcveTipoDetencion()!=""){
$sql.="cveTipoDetencion";
if(($tiposdetencionesDto->getDesTipoDetencion()!="") ||($tiposdetencionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getdesTipoDetencion()!=""){
$sql.="desTipoDetencion";
if(($tiposdetencionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposdetencionesDto->getcveTipoDetencion()!=""){
$sql.="'".$tiposdetencionesDto->getcveTipoDetencion()."'";
if(($tiposdetencionesDto->getDesTipoDetencion()!="") ||($tiposdetencionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getdesTipoDetencion()!=""){
$sql.="'".$tiposdetencionesDto->getdesTipoDetencion()."'";
if(($tiposdetencionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getactivo()!=""){
$sql.="'".$tiposdetencionesDto->getactivo()."'";
}
if($tiposdetencionesDto->getfechaRegistro()!=""){
}
if($tiposdetencionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposdetencionesDTO();
$tmp->setcveTipoDetencion($this->_proveedor->lastID());
$tmp = $this->selectTiposdetenciones($tmp,"",$this->_proveedor);
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
public function updateTiposdetenciones($tiposdetencionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposdetenciones SET ";
if($tiposdetencionesDto->getcveTipoDetencion()!=""){
$sql.="cveTipoDetencion='".$tiposdetencionesDto->getcveTipoDetencion()."'";
if(($tiposdetencionesDto->getDesTipoDetencion()!="") ||($tiposdetencionesDto->getActivo()!="") ||($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getdesTipoDetencion()!=""){
$sql.="desTipoDetencion='".$tiposdetencionesDto->getdesTipoDetencion()."'";
if(($tiposdetencionesDto->getActivo()!="") ||($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getactivo()!=""){
$sql.="activo='".$tiposdetencionesDto->getactivo()."'";
if(($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposdetencionesDto->getfechaRegistro()."'";
if(($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposdetencionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposdetencionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoDetencion='".$tiposdetencionesDto->getcveTipoDetencion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposdetencionesDTO();
$tmp->setcveTipoDetencion($tiposdetencionesDto->getcveTipoDetencion());
$tmp = $this->selectTiposdetenciones($tmp,"",$this->_proveedor);
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
public function deleteTiposdetenciones($tiposdetencionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposdetenciones  WHERE cveTipoDetencion='".$tiposdetencionesDto->getcveTipoDetencion()."'";
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
public function selectTiposdetenciones($tiposdetencionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoDetencion,desTipoDetencion,activo,fechaRegistro,fechaActualizacion FROM tbltiposdetenciones ";
if(($tiposdetencionesDto->getcveTipoDetencion()!="") ||($tiposdetencionesDto->getdesTipoDetencion()!="") ||($tiposdetencionesDto->getactivo()!="") ||($tiposdetencionesDto->getfechaRegistro()!="") ||($tiposdetencionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposdetencionesDto->getcveTipoDetencion()!=""){
$sql.="cveTipoDetencion='".$tiposdetencionesDto->getCveTipoDetencion()."'";
if(($tiposdetencionesDto->getDesTipoDetencion()!="") ||($tiposdetencionesDto->getActivo()!="") ||($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposdetencionesDto->getdesTipoDetencion()!=""){
$sql.="desTipoDetencion='".$tiposdetencionesDto->getDesTipoDetencion()."'";
if(($tiposdetencionesDto->getActivo()!="") ||($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposdetencionesDto->getactivo()!=""){
$sql.="activo='".$tiposdetencionesDto->getActivo()."'";
if(($tiposdetencionesDto->getFechaRegistro()!="") ||($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposdetencionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposdetencionesDto->getFechaRegistro()."'";
if(($tiposdetencionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposdetencionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposdetencionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposdetencionesDTO();
$tmp[$contador]->setCveTipoDetencion($row["cveTipoDetencion"]);
$tmp[$contador]->setDesTipoDetencion($row["desTipoDetencion"]);
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