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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConsignacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConsignaciones($consignacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconsignaciones(";
if($consignacionesDto->getcveConsignacion()!=""){
$sql.="cveConsignacion";
if(($consignacionesDto->getDesConsignacion()!="") ||($consignacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getdesConsignacion()!=""){
$sql.="desConsignacion";
if(($consignacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($consignacionesDto->getcveConsignacion()!=""){
$sql.="'".$consignacionesDto->getcveConsignacion()."'";
if(($consignacionesDto->getDesConsignacion()!="") ||($consignacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getdesConsignacion()!=""){
$sql.="'".$consignacionesDto->getdesConsignacion()."'";
if(($consignacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getactivo()!=""){
$sql.="'".$consignacionesDto->getactivo()."'";
}
if($consignacionesDto->getfechaRegistro()!=""){
}
if($consignacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsignacionesDTO();
$tmp->setcveConsignacion($this->_proveedor->lastID());
$tmp = $this->selectConsignaciones($tmp,"",$this->_proveedor);
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
public function updateConsignaciones($consignacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconsignaciones SET ";
if($consignacionesDto->getcveConsignacion()!=""){
$sql.="cveConsignacion='".$consignacionesDto->getcveConsignacion()."'";
if(($consignacionesDto->getDesConsignacion()!="") ||($consignacionesDto->getActivo()!="") ||($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getdesConsignacion()!=""){
$sql.="desConsignacion='".$consignacionesDto->getdesConsignacion()."'";
if(($consignacionesDto->getActivo()!="") ||($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getactivo()!=""){
$sql.="activo='".$consignacionesDto->getactivo()."'";
if(($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$consignacionesDto->getfechaRegistro()."'";
if(($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consignacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveConsignacion='".$consignacionesDto->getcveConsignacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsignacionesDTO();
$tmp->setcveConsignacion($consignacionesDto->getcveConsignacion());
$tmp = $this->selectConsignaciones($tmp,"",$this->_proveedor);
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
public function deleteConsignaciones($consignacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconsignaciones  WHERE cveConsignacion='".$consignacionesDto->getcveConsignacion()."'";
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
public function selectConsignaciones($consignacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConsignacion,desConsignacion,activo,fechaRegistro,fechaActualizacion FROM tblconsignaciones ";
if(($consignacionesDto->getcveConsignacion()!="") ||($consignacionesDto->getdesConsignacion()!="") ||($consignacionesDto->getactivo()!="") ||($consignacionesDto->getfechaRegistro()!="") ||($consignacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($consignacionesDto->getcveConsignacion()!=""){
$sql.="cveConsignacion='".$consignacionesDto->getCveConsignacion()."'";
if(($consignacionesDto->getDesConsignacion()!="") ||($consignacionesDto->getActivo()!="") ||($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesDto->getdesConsignacion()!=""){
$sql.="desConsignacion='".$consignacionesDto->getDesConsignacion()."'";
if(($consignacionesDto->getActivo()!="") ||($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesDto->getactivo()!=""){
$sql.="activo='".$consignacionesDto->getActivo()."'";
if(($consignacionesDto->getFechaRegistro()!="") ||($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$consignacionesDto->getFechaRegistro()."'";
if(($consignacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consignacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConsignacionesDTO();
$tmp[$contador]->setCveConsignacion($row["cveConsignacion"]);
$tmp[$contador]->setDesConsignacion($row["desConsignacion"]);
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