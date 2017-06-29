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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesestatusDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActuacionesestatus($actuacionesestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactuacionesestatus(";
if($actuacionesestatusDto->getIdActuacionesEstatus()!=""){
$sql.="idActuacionesEstatus";
if(($actuacionesestatusDto->getIdActuacion()!="") ||($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getCveEstatus()!=""){
$sql.="cveEstatus";
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($actuacionesestatusDto->getIdActuacionesEstatus()!=""){
$sql.="'".$actuacionesestatusDto->getIdActuacionesEstatus()."'";
if(($actuacionesestatusDto->getIdActuacion()!="") ||($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getIdActuacion()!=""){
$sql.="'".$actuacionesestatusDto->getIdActuacion()."'";
if(($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getCveEstatus()!=""){
$sql.="'".$actuacionesestatusDto->getCveEstatus()."'";
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getFechaRegistro()!=""){
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getFechaActualizacion()!=""){
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getActivo()!=""){
$sql.="'".$actuacionesestatusDto->getActivo()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesestatusDTO();
$tmp->setidActuacionesEstatus($this->_proveedor->lastID());
$tmp = $this->selectActuacionesestatus($tmp,"",$this->_proveedor);
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
public function updateActuacionesestatus($actuacionesestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactuacionesestatus SET ";
if($actuacionesestatusDto->getIdActuacionesEstatus()!=""){
$sql.="idActuacionesEstatus='".$actuacionesestatusDto->getIdActuacionesEstatus()."'";
if(($actuacionesestatusDto->getIdActuacion()!="") ||($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getIdActuacion()!=""){
$sql.="idActuacion='".$actuacionesestatusDto->getIdActuacion()."'";
if(($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getCveEstatus()!=""){
$sql.="cveEstatus='".$actuacionesestatusDto->getCveEstatus()."'";
if(($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesestatusDto->getFechaRegistro()."'";
if(($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesestatusDto->getFechaActualizacion()."'";
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesestatusDto->getActivo()!=""){
$sql.="activo='".$actuacionesestatusDto->getActivo()."'";
}
$sql.=" WHERE idActuacionesEstatus='".$actuacionesestatusDto->getIdActuacionesEstatus()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesestatusDTO();
$tmp->setidActuacionesEstatus($actuacionesestatusDto->getIdActuacionesEstatus());
$tmp = $this->selectActuacionesestatus($tmp,"",$this->_proveedor);
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
public function deleteActuacionesestatus($actuacionesestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactuacionesestatus  WHERE idActuacionesEstatus='".$actuacionesestatusDto->getIdActuacionesEstatus()."'";
//echo $sql;
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
public function selectActuacionesestatus($actuacionesestatusDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idActuacionesEstatus,idActuacion,cveEstatus,fechaRegistro,fechaActualizacion,activo FROM tblactuacionesestatus ";
if(($actuacionesestatusDto->getIdActuacionesEstatus()!="") ||($actuacionesestatusDto->getIdActuacion()!="") ||($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($actuacionesestatusDto->getIdActuacionesEstatus()!=""){
$sql.="idActuacionesEstatus='".$actuacionesestatusDto->getIdActuacionesEstatus()."'";
if(($actuacionesestatusDto->getIdActuacion()!="") ||($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusDto->getIdActuacion()!=""){
$sql.="idActuacion in (".$actuacionesestatusDto->getIdActuacion().")";
if(($actuacionesestatusDto->getCveEstatus()!="") ||($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusDto->getCveEstatus()!=""){
$sql.="cveEstatus='".$actuacionesestatusDto->getCveEstatus()."'";
if(($actuacionesestatusDto->getFechaRegistro()!="") ||($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesestatusDto->getFechaRegistro()."'";
if(($actuacionesestatusDto->getFechaActualizacion()!="") ||($actuacionesestatusDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesestatusDto->getFechaActualizacion()."'";
if(($actuacionesestatusDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actuacionesestatusDto->getActivo()!=""){
$sql.="activo='".$actuacionesestatusDto->getActivo()."'";
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
$tmp[$contador] = new ActuacionesestatusDTO();
$tmp[$contador]->setIdActuacionesEstatus($row["idActuacionesEstatus"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveEstatus($row["cveEstatus"]);
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