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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConsumacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConsumaciones($consumacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconsumaciones(";
if($consumacionesDto->getcveConsumacion()!=""){
$sql.="cveConsumacion";
if(($consumacionesDto->getDesConsumacion()!="") ||($consumacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getdesConsumacion()!=""){
$sql.="desConsumacion";
if(($consumacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($consumacionesDto->getcveConsumacion()!=""){
$sql.="'".$consumacionesDto->getcveConsumacion()."'";
if(($consumacionesDto->getDesConsumacion()!="") ||($consumacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getdesConsumacion()!=""){
$sql.="'".$consumacionesDto->getdesConsumacion()."'";
if(($consumacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getactivo()!=""){
$sql.="'".$consumacionesDto->getactivo()."'";
}
if($consumacionesDto->getfechaRegistro()!=""){
}
if($consumacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsumacionesDTO();
$tmp->setcveConsumacion($this->_proveedor->lastID());
$tmp = $this->selectConsumaciones($tmp,"",$this->_proveedor);
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
public function updateConsumaciones($consumacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconsumaciones SET ";
if($consumacionesDto->getcveConsumacion()!=""){
$sql.="cveConsumacion='".$consumacionesDto->getcveConsumacion()."'";
if(($consumacionesDto->getDesConsumacion()!="") ||($consumacionesDto->getActivo()!="") ||($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getdesConsumacion()!=""){
$sql.="desConsumacion='".$consumacionesDto->getdesConsumacion()."'";
if(($consumacionesDto->getActivo()!="") ||($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getactivo()!=""){
$sql.="activo='".$consumacionesDto->getactivo()."'";
if(($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$consumacionesDto->getfechaRegistro()."'";
if(($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consumacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consumacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveConsumacion='".$consumacionesDto->getcveConsumacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsumacionesDTO();
$tmp->setcveConsumacion($consumacionesDto->getcveConsumacion());
$tmp = $this->selectConsumaciones($tmp,"",$this->_proveedor);
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
public function deleteConsumaciones($consumacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconsumaciones  WHERE cveConsumacion='".$consumacionesDto->getcveConsumacion()."'";
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
public function selectConsumaciones($consumacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConsumacion,desConsumacion,activo,fechaRegistro,fechaActualizacion FROM tblconsumaciones ";
if(($consumacionesDto->getcveConsumacion()!="") ||($consumacionesDto->getdesConsumacion()!="") ||($consumacionesDto->getactivo()!="") ||($consumacionesDto->getfechaRegistro()!="") ||($consumacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($consumacionesDto->getcveConsumacion()!=""){
$sql.="cveConsumacion='".$consumacionesDto->getCveConsumacion()."'";
if(($consumacionesDto->getDesConsumacion()!="") ||($consumacionesDto->getActivo()!="") ||($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consumacionesDto->getdesConsumacion()!=""){
$sql.="desConsumacion='".$consumacionesDto->getDesConsumacion()."'";
if(($consumacionesDto->getActivo()!="") ||($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consumacionesDto->getactivo()!=""){
$sql.="activo='".$consumacionesDto->getActivo()."'";
if(($consumacionesDto->getFechaRegistro()!="") ||($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consumacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$consumacionesDto->getFechaRegistro()."'";
if(($consumacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consumacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consumacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConsumacionesDTO();
$tmp[$contador]->setCveConsumacion($row["cveConsumacion"]);
$tmp[$contador]->setDesConsumacion($row["desConsumacion"]);
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