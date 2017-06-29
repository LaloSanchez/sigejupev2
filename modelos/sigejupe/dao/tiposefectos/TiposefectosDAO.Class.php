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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposefectos/TiposefectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposefectosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposefectos($tiposefectosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposefectos(";
if($tiposefectosDto->getCveEfecto()!=""){
$sql.="cveEfecto";
if(($tiposefectosDto->getDesEfecto()!="") ||($tiposefectosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getDesEfecto()!=""){
$sql.="desEfecto";
if(($tiposefectosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposefectosDto->getCveEfecto()!=""){
$sql.="'".$tiposefectosDto->getCveEfecto()."'";
if(($tiposefectosDto->getDesEfecto()!="") ||($tiposefectosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getDesEfecto()!=""){
$sql.="'".$tiposefectosDto->getDesEfecto()."'";
if(($tiposefectosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getActivo()!=""){
$sql.="'".$tiposefectosDto->getActivo()."'";
}
if($tiposefectosDto->getFechaRegistro()!=""){
}
if($tiposefectosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposefectosDTO();
$tmp->setcveEfecto($this->_proveedor->lastID());
$tmp = $this->selectTiposefectos($tmp,"",$this->_proveedor);
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
public function updateTiposefectos($tiposefectosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposefectos SET ";
if($tiposefectosDto->getCveEfecto()!=""){
$sql.="cveEfecto='".$tiposefectosDto->getCveEfecto()."'";
if(($tiposefectosDto->getDesEfecto()!="") ||($tiposefectosDto->getActivo()!="") ||($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getDesEfecto()!=""){
$sql.="desEfecto='".$tiposefectosDto->getDesEfecto()."'";
if(($tiposefectosDto->getActivo()!="") ||($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getActivo()!=""){
$sql.="activo='".$tiposefectosDto->getActivo()."'";
if(($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposefectosDto->getFechaRegistro()."'";
if(($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposefectosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposefectosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveEfecto='".$tiposefectosDto->getCveEfecto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposefectosDTO();
$tmp->setcveEfecto($tiposefectosDto->getCveEfecto());
$tmp = $this->selectTiposefectos($tmp,"",$this->_proveedor);
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
public function deleteTiposefectos($tiposefectosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposefectos  WHERE cveEfecto='".$tiposefectosDto->getCveEfecto()."'";
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
public function selectTiposefectos($tiposefectosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEfecto,desEfecto,activo,fechaRegistro,fechaActualizacion FROM tbltiposefectos ";
if(($tiposefectosDto->getCveEfecto()!="") ||($tiposefectosDto->getDesEfecto()!="") ||($tiposefectosDto->getActivo()!="") ||($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposefectosDto->getCveEfecto()!=""){
$sql.="cveEfecto='".$tiposefectosDto->getCveEfecto()."'";
if(($tiposefectosDto->getDesEfecto()!="") ||($tiposefectosDto->getActivo()!="") ||($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposefectosDto->getDesEfecto()!=""){
$sql.="desEfecto='".$tiposefectosDto->getDesEfecto()."'";
if(($tiposefectosDto->getActivo()!="") ||($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposefectosDto->getActivo()!=""){
$sql.="activo='".$tiposefectosDto->getActivo()."'";
if(($tiposefectosDto->getFechaRegistro()!="") ||($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposefectosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposefectosDto->getFechaRegistro()."'";
if(($tiposefectosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposefectosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposefectosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposefectosDTO();
$tmp[$contador]->setCveEfecto($row["cveEfecto"]);
$tmp[$contador]->setDesEfecto($row["desEfecto"]);
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