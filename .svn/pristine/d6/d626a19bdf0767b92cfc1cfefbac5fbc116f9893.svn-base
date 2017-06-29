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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposnotificaciones/TiposnotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposnotificacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposnotificaciones($tiposnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposnotificaciones(";
if($tiposnotificacionesDto->getcveTipoNotificacion()!=""){
$sql.="cveTipoNotificacion";
if(($tiposnotificacionesDto->getDesTipoNotificacion()!="") ||($tiposnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getdesTipoNotificacion()!=""){
$sql.="desTipoNotificacion";
if(($tiposnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposnotificacionesDto->getcveTipoNotificacion()!=""){
$sql.="'".$tiposnotificacionesDto->getcveTipoNotificacion()."'";
if(($tiposnotificacionesDto->getDesTipoNotificacion()!="") ||($tiposnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getdesTipoNotificacion()!=""){
$sql.="'".$tiposnotificacionesDto->getdesTipoNotificacion()."'";
if(($tiposnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getactivo()!=""){
$sql.="'".$tiposnotificacionesDto->getactivo()."'";
}
if($tiposnotificacionesDto->getfechaRegistro()!=""){
}
if($tiposnotificacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposnotificacionesDTO();
$tmp->setcveTipoNotificacion($this->_proveedor->lastID());
$tmp = $this->selectTiposnotificaciones($tmp,"",$this->_proveedor);
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
public function updateTiposnotificaciones($tiposnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposnotificaciones SET ";
if($tiposnotificacionesDto->getcveTipoNotificacion()!=""){
$sql.="cveTipoNotificacion='".$tiposnotificacionesDto->getcveTipoNotificacion()."'";
if(($tiposnotificacionesDto->getDesTipoNotificacion()!="") ||($tiposnotificacionesDto->getActivo()!="") ||($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getdesTipoNotificacion()!=""){
$sql.="desTipoNotificacion='".$tiposnotificacionesDto->getdesTipoNotificacion()."'";
if(($tiposnotificacionesDto->getActivo()!="") ||($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getactivo()!=""){
$sql.="activo='".$tiposnotificacionesDto->getactivo()."'";
if(($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposnotificacionesDto->getfechaRegistro()."'";
if(($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposnotificacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposnotificacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoNotificacion='".$tiposnotificacionesDto->getcveTipoNotificacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposnotificacionesDTO();
$tmp->setcveTipoNotificacion($tiposnotificacionesDto->getcveTipoNotificacion());
$tmp = $this->selectTiposnotificaciones($tmp,"",$this->_proveedor);
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
public function deleteTiposnotificaciones($tiposnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposnotificaciones  WHERE cveTipoNotificacion='".$tiposnotificacionesDto->getcveTipoNotificacion()."'";
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
public function selectTiposnotificaciones($tiposnotificacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoNotificacion,desTipoNotificacion,activo,fechaRegistro,fechaActualizacion FROM tbltiposnotificaciones ";
if(($tiposnotificacionesDto->getcveTipoNotificacion()!="") ||($tiposnotificacionesDto->getdesTipoNotificacion()!="") ||($tiposnotificacionesDto->getactivo()!="") ||($tiposnotificacionesDto->getfechaRegistro()!="") ||($tiposnotificacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposnotificacionesDto->getcveTipoNotificacion()!=""){
$sql.="cveTipoNotificacion='".$tiposnotificacionesDto->getCveTipoNotificacion()."'";
if(($tiposnotificacionesDto->getDesTipoNotificacion()!="") ||($tiposnotificacionesDto->getActivo()!="") ||($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposnotificacionesDto->getdesTipoNotificacion()!=""){
$sql.="desTipoNotificacion='".$tiposnotificacionesDto->getDesTipoNotificacion()."'";
if(($tiposnotificacionesDto->getActivo()!="") ||($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposnotificacionesDto->getactivo()!=""){
$sql.="activo='".$tiposnotificacionesDto->getActivo()."'";
if(($tiposnotificacionesDto->getFechaRegistro()!="") ||($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposnotificacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposnotificacionesDto->getFechaRegistro()."'";
if(($tiposnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposnotificacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposnotificacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposnotificacionesDTO();
$tmp[$contador]->setCveTipoNotificacion($row["cveTipoNotificacion"]);
$tmp[$contador]->setDesTipoNotificacion($row["desTipoNotificacion"]);
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