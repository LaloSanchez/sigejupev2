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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actuacionesestatusrad/ActuacionesestatusradDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesestatusradDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActuacionesestatusrad($actuacionesestatusradDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactuacionesestatusrad(";
if($actuacionesestatusradDto->getIdActuacionesEstatusRad()!=""){
$sql.="idActuacionesEstatusRad";
if(($actuacionesestatusradDto->getIdActuacion()!="") ||($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!=""){
$sql.="cveTipoEstatusRadicacion";
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($actuacionesestatusradDto->getIdActuacionesEstatusRad()!=""){
$sql.="'".$actuacionesestatusradDto->getIdActuacionesEstatusRad()."'";
if(($actuacionesestatusradDto->getIdActuacion()!="") ||($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getIdActuacion()!=""){
$sql.="'".$actuacionesestatusradDto->getIdActuacion()."'";
if(($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!=""){
$sql.="'".$actuacionesestatusradDto->getCveTipoEstatusRadicacion()."'";
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getFechaRegistro()!=""){
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getFechaActualizacion()!=""){
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getActivo()!=""){
$sql.="'".$actuacionesestatusradDto->getActivo()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesestatusradDTO();
$tmp->setidActuacionesEstatusRad($this->_proveedor->lastID());
$tmp = $this->selectActuacionesestatusrad($tmp,"",$this->_proveedor);
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
public function updateActuacionesestatusrad($actuacionesestatusradDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactuacionesestatusrad SET ";
if($actuacionesestatusradDto->getIdActuacionesEstatusRad()!=""){
$sql.="idActuacionesEstatusRad='".$actuacionesestatusradDto->getIdActuacionesEstatusRad()."'";
if(($actuacionesestatusradDto->getIdActuacion()!="") ||($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getIdActuacion()!=""){
$sql.="idActuacion='".$actuacionesestatusradDto->getIdActuacion()."'";
if(($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!=""){
$sql.="cveTipoEstatusRadicacion='".$actuacionesestatusradDto->getCveTipoEstatusRadicacion()."'";
if(($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesestatusradDto->getFechaRegistro()."'";
if(($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesestatusradDto->getFechaActualizacion()."'";
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusradDto->getActivo()!=""){
$sql.="activo='".$actuacionesestatusradDto->getActivo()."'";
}
$sql.=" WHERE idActuacionesEstatusRad='".$actuacionesestatusradDto->getIdActuacionesEstatusRad()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesestatusradDTO();
$tmp->setidActuacionesEstatusRad($actuacionesestatusradDto->getIdActuacionesEstatusRad());
$tmp = $this->selectActuacionesestatusrad($tmp,"",$this->_proveedor);
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
public function deleteActuacionesestatusrad($actuacionesestatusradDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactuacionesestatusrad  WHERE idActuacionesEstatusRad='".$actuacionesestatusradDto->getIdActuacionesEstatusRad()."'";
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
public function selectActuacionesestatusrad($actuacionesestatusradDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idActuacionesEstatusRad,idActuacion,cveTipoEstatusRadicacion,fechaRegistro,fechaActualizacion,activo FROM tblactuacionesestatusrad ";
if(($actuacionesestatusradDto->getIdActuacionesEstatusRad()!="") ||($actuacionesestatusradDto->getIdActuacion()!="") ||($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($actuacionesestatusradDto->getIdActuacionesEstatusRad()!=""){
$sql.="idActuacionesEstatusRad='".$actuacionesestatusradDto->getIdActuacionesEstatusRad()."'";
if(($actuacionesestatusradDto->getIdActuacion()!="") ||($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusradDto->getIdActuacion()!=""){
$sql.="idActuacion='".$actuacionesestatusradDto->getIdActuacion()."'";
if(($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!="") ||($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusradDto->getCveTipoEstatusRadicacion()!=""){
$sql.="cveTipoEstatusRadicacion='".$actuacionesestatusradDto->getCveTipoEstatusRadicacion()."'";
if(($actuacionesestatusradDto->getFechaRegistro()!="") ||($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusradDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesestatusradDto->getFechaRegistro()."'";
if(($actuacionesestatusradDto->getFechaActualizacion()!="") ||($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusradDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesestatusradDto->getFechaActualizacion()."'";
if(($actuacionesestatusradDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusradDto->getActivo()!=""){
$sql.="activo='".$actuacionesestatusradDto->getActivo()."'";
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
$tmp[$contador] = new ActuacionesestatusradDTO();
$tmp[$contador]->setIdActuacionesEstatusRad($row["idActuacionesEstatusRad"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveTipoEstatusRadicacion($row["cveTipoEstatusRadicacion"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setActivo($row["activo"]);
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