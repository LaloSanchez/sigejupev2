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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actuacionespermisos/ActuacionespermisosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActuacionespermisosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActuacionespermisos($actuacionespermisosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactuacionespermisos(";
if($actuacionespermisosDto->getIdResolucionPermiso()!=""){
$sql.="idResolucionPermiso";
if(($actuacionespermisosDto->getIdActuacion()!="") ||($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getCveUsuario()!=""){
$sql.="cveUsuario";
if(($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaactualizacion";
$sql.=") VALUES(";
if($actuacionespermisosDto->getIdResolucionPermiso()!=""){
$sql.="'".$actuacionespermisosDto->getIdResolucionPermiso()."'";
if(($actuacionespermisosDto->getIdActuacion()!="") ||($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getIdActuacion()!=""){
$sql.="'".$actuacionespermisosDto->getIdActuacion()."'";
if(($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getCveUsuario()!=""){
$sql.="'".$actuacionespermisosDto->getCveUsuario()."'";
if(($actuacionespermisosDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getActivo()!=""){
$sql.="'".$actuacionespermisosDto->getActivo()."'";
}
if($actuacionespermisosDto->getFechaRegistro()!=""){
}
if($actuacionespermisosDto->getFechaactualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionespermisosDTO();
$tmp->setidResolucionPermiso($this->_proveedor->lastID());
$tmp = $this->selectActuacionespermisos($tmp,"",$this->_proveedor);
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
public function updateActuacionespermisos($actuacionespermisosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactuacionespermisos SET ";
if($actuacionespermisosDto->getIdResolucionPermiso()!=""){
$sql.="idResolucionPermiso='".$actuacionespermisosDto->getIdResolucionPermiso()."'";
if(($actuacionespermisosDto->getIdActuacion()!="") ||($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getIdActuacion()!=""){
$sql.="idActuacion='".$actuacionespermisosDto->getIdActuacion()."'";
if(($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getCveUsuario()!=""){
$sql.="cveUsuario='".$actuacionespermisosDto->getCveUsuario()."'";
if(($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getActivo()!=""){
$sql.="activo='".$actuacionespermisosDto->getActivo()."'";
if(($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionespermisosDto->getFechaRegistro()."'";
if(($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($actuacionespermisosDto->getFechaactualizacion()!=""){
$sql.="fechaactualizacion='".$actuacionespermisosDto->getFechaactualizacion()."'";
}
$sql.=" WHERE idResolucionPermiso='".$actuacionespermisosDto->getIdResolucionPermiso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionespermisosDTO();
$tmp->setidResolucionPermiso($actuacionespermisosDto->getIdResolucionPermiso());
$tmp = $this->selectActuacionespermisos($tmp,"",$this->_proveedor);
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
public function deleteActuacionespermisos($actuacionespermisosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactuacionespermisos  WHERE idResolucionPermiso='".$actuacionespermisosDto->getIdResolucionPermiso()."'";
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
public function selectActuacionespermisos($actuacionespermisosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idResolucionPermiso,idActuacion,cveUsuario,activo,fechaRegistro,fechaactualizacion FROM tblactuacionespermisos ";
if(($actuacionespermisosDto->getIdResolucionPermiso()!="") ||($actuacionespermisosDto->getIdActuacion()!="") ||($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" WHERE ";
}
if($actuacionespermisosDto->getIdResolucionPermiso()!=""){
$sql.="idResolucionPermiso='".$actuacionespermisosDto->getIdResolucionPermiso()."'";
if(($actuacionespermisosDto->getIdActuacion()!="") ||($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($actuacionespermisosDto->getIdActuacion()!=""){
$sql.="idActuacion='".$actuacionespermisosDto->getIdActuacion()."'";
if(($actuacionespermisosDto->getCveUsuario()!="") ||($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($actuacionespermisosDto->getCveUsuario()!=""){
$sql.="cveUsuario='".$actuacionespermisosDto->getCveUsuario()."'";
if(($actuacionespermisosDto->getActivo()!="") ||($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($actuacionespermisosDto->getActivo()!=""){
$sql.="activo='".$actuacionespermisosDto->getActivo()."'";
if(($actuacionespermisosDto->getFechaRegistro()!="") ||($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($actuacionespermisosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionespermisosDto->getFechaRegistro()."'";
if(($actuacionespermisosDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($actuacionespermisosDto->getFechaactualizacion()!=""){
$sql.="fechaactualizacion='".$actuacionespermisosDto->getFechaactualizacion()."'";
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
$tmp[$contador] = new ActuacionespermisosDTO();
$tmp[$contador]->setIdResolucionPermiso($row["idResolucionPermiso"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveUsuario($row["cveUsuario"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaactualizacion($row["fechaactualizacion"]);
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