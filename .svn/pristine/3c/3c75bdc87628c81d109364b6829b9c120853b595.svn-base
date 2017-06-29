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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatusnotificaciones/EstatusnotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatusnotificacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatusnotificaciones($estatusnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatusnotificaciones(";
if($estatusnotificacionesDto->getcveEstatusNotificacion()!=""){
$sql.="cveEstatusNotificacion";
if(($estatusnotificacionesDto->getDesEstatusNotificacion()!="") ||($estatusnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getdesEstatusNotificacion()!=""){
$sql.="desEstatusNotificacion";
if(($estatusnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatusnotificacionesDto->getcveEstatusNotificacion()!=""){
$sql.="'".$estatusnotificacionesDto->getcveEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getDesEstatusNotificacion()!="") ||($estatusnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getdesEstatusNotificacion()!=""){
$sql.="'".$estatusnotificacionesDto->getdesEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getactivo()!=""){
$sql.="'".$estatusnotificacionesDto->getactivo()."'";
}
if($estatusnotificacionesDto->getfechaRegistro()!=""){
}
if($estatusnotificacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusnotificacionesDTO();
$tmp->setcveEstatusNotificacion($this->_proveedor->lastID());
$tmp = $this->selectEstatusnotificaciones($tmp,"",$this->_proveedor);
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
public function updateEstatusnotificaciones($estatusnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatusnotificaciones SET ";
if($estatusnotificacionesDto->getcveEstatusNotificacion()!=""){
$sql.="cveEstatusNotificacion='".$estatusnotificacionesDto->getcveEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getDesEstatusNotificacion()!="") ||($estatusnotificacionesDto->getActivo()!="") ||($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getdesEstatusNotificacion()!=""){
$sql.="desEstatusNotificacion='".$estatusnotificacionesDto->getdesEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getActivo()!="") ||($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getactivo()!=""){
$sql.="activo='".$estatusnotificacionesDto->getactivo()."'";
if(($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusnotificacionesDto->getfechaRegistro()."'";
if(($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusnotificacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusnotificacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusNotificacion='".$estatusnotificacionesDto->getcveEstatusNotificacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusnotificacionesDTO();
$tmp->setcveEstatusNotificacion($estatusnotificacionesDto->getcveEstatusNotificacion());
$tmp = $this->selectEstatusnotificaciones($tmp,"",$this->_proveedor);
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
public function deleteEstatusnotificaciones($estatusnotificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatusnotificaciones  WHERE cveEstatusNotificacion='".$estatusnotificacionesDto->getcveEstatusNotificacion()."'";
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
public function selectEstatusnotificaciones($estatusnotificacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusNotificacion,desEstatusNotificacion,activo,fechaRegistro,fechaActualizacion FROM tblestatusnotificaciones ";
if(($estatusnotificacionesDto->getcveEstatusNotificacion()!="") ||($estatusnotificacionesDto->getdesEstatusNotificacion()!="") ||($estatusnotificacionesDto->getactivo()!="") ||($estatusnotificacionesDto->getfechaRegistro()!="") ||($estatusnotificacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatusnotificacionesDto->getcveEstatusNotificacion()!=""){
$sql.="cveEstatusNotificacion='".$estatusnotificacionesDto->getCveEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getDesEstatusNotificacion()!="") ||($estatusnotificacionesDto->getActivo()!="") ||($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusnotificacionesDto->getdesEstatusNotificacion()!=""){
$sql.="desEstatusNotificacion='".$estatusnotificacionesDto->getDesEstatusNotificacion()."'";
if(($estatusnotificacionesDto->getActivo()!="") ||($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusnotificacionesDto->getactivo()!=""){
$sql.="activo='".$estatusnotificacionesDto->getActivo()."'";
if(($estatusnotificacionesDto->getFechaRegistro()!="") ||($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusnotificacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusnotificacionesDto->getFechaRegistro()."'";
if(($estatusnotificacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusnotificacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusnotificacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatusnotificacionesDTO();
$tmp[$contador]->setCveEstatusNotificacion($row["cveEstatusNotificacion"]);
$tmp[$contador]->setDesEstatusNotificacion($row["desEstatusNotificacion"]);
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