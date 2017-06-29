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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/consignacionesacciones/ConsignacionesaccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConsignacionesaccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConsignacionesacciones($consignacionesaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconsignacionesacciones(";
if($consignacionesaccionesDto->getCveConsignacionA()!=""){
$sql.="cveConsignacionA";
if(($consignacionesaccionesDto->getDesConsignacionA()!="") ||($consignacionesaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getDesConsignacionA()!=""){
$sql.="desConsignacionA";
if(($consignacionesaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($consignacionesaccionesDto->getCveConsignacionA()!=""){
$sql.="'".$consignacionesaccionesDto->getCveConsignacionA()."'";
if(($consignacionesaccionesDto->getDesConsignacionA()!="") ||($consignacionesaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getDesConsignacionA()!=""){
$sql.="'".$consignacionesaccionesDto->getDesConsignacionA()."'";
if(($consignacionesaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getActivo()!=""){
$sql.="'".$consignacionesaccionesDto->getActivo()."'";
}
if($consignacionesaccionesDto->getFechaRegistro()!=""){
}
if($consignacionesaccionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsignacionesaccionesDTO();
$tmp->setcveConsignacionA($this->_proveedor->lastID());
$tmp = $this->selectConsignacionesacciones($tmp,"",$this->_proveedor);
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
public function updateConsignacionesacciones($consignacionesaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconsignacionesacciones SET ";
if($consignacionesaccionesDto->getCveConsignacionA()!=""){
$sql.="cveConsignacionA='".$consignacionesaccionesDto->getCveConsignacionA()."'";
if(($consignacionesaccionesDto->getDesConsignacionA()!="") ||($consignacionesaccionesDto->getActivo()!="") ||($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getDesConsignacionA()!=""){
$sql.="desConsignacionA='".$consignacionesaccionesDto->getDesConsignacionA()."'";
if(($consignacionesaccionesDto->getActivo()!="") ||($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getActivo()!=""){
$sql.="activo='".$consignacionesaccionesDto->getActivo()."'";
if(($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$consignacionesaccionesDto->getFechaRegistro()."'";
if(($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($consignacionesaccionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consignacionesaccionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveConsignacionA='".$consignacionesaccionesDto->getCveConsignacionA()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConsignacionesaccionesDTO();
$tmp->setcveConsignacionA($consignacionesaccionesDto->getCveConsignacionA());
$tmp = $this->selectConsignacionesacciones($tmp,"",$this->_proveedor);
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
public function deleteConsignacionesacciones($consignacionesaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconsignacionesacciones  WHERE cveConsignacionA='".$consignacionesaccionesDto->getCveConsignacionA()."'";
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
public function selectConsignacionesacciones($consignacionesaccionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConsignacionA,desConsignacionA,activo,fechaRegistro,fechaActualizacion FROM tblconsignacionesacciones ";
if(($consignacionesaccionesDto->getCveConsignacionA()!="") ||($consignacionesaccionesDto->getDesConsignacionA()!="") ||($consignacionesaccionesDto->getActivo()!="") ||($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($consignacionesaccionesDto->getCveConsignacionA()!=""){
$sql.="cveConsignacionA='".$consignacionesaccionesDto->getCveConsignacionA()."'";
if(($consignacionesaccionesDto->getDesConsignacionA()!="") ||($consignacionesaccionesDto->getActivo()!="") ||($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesaccionesDto->getDesConsignacionA()!=""){
$sql.="desConsignacionA='".$consignacionesaccionesDto->getDesConsignacionA()."'";
if(($consignacionesaccionesDto->getActivo()!="") ||($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesaccionesDto->getActivo()!=""){
$sql.="activo='".$consignacionesaccionesDto->getActivo()."'";
if(($consignacionesaccionesDto->getFechaRegistro()!="") ||($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesaccionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$consignacionesaccionesDto->getFechaRegistro()."'";
if(($consignacionesaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($consignacionesaccionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$consignacionesaccionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConsignacionesaccionesDTO();
$tmp[$contador]->setCveConsignacionA($row["cveConsignacionA"]);
$tmp[$contador]->setDesConsignacionA($row["desConsignacionA"]);
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