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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/condiciones/CondicionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CondicionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCondiciones($condicionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcondiciones(";
if($condicionesDto->getcveCondicion()!=""){
$sql.="cveCondicion";
if(($condicionesDto->getDesCondicion()!="") ){
$sql.=",";
}
}
if($condicionesDto->getdesCondicion()!=""){
$sql.="desCondicion";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($condicionesDto->getcveCondicion()!=""){
$sql.="'".$condicionesDto->getcveCondicion()."'";
if(($condicionesDto->getDesCondicion()!="") ){
$sql.=",";
}
}
if($condicionesDto->getdesCondicion()!=""){
$sql.="'".$condicionesDto->getdesCondicion()."'";
}
if($condicionesDto->getfechaRegistro()!=""){
}
if($condicionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CondicionesDTO();
$tmp->setcveCondicion($this->_proveedor->lastID());
$tmp = $this->selectCondiciones($tmp,"",$this->_proveedor);
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
public function updateCondiciones($condicionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcondiciones SET ";
if($condicionesDto->getcveCondicion()!=""){
$sql.="cveCondicion='".$condicionesDto->getcveCondicion()."'";
if(($condicionesDto->getDesCondicion()!="") ||($condicionesDto->getFechaRegistro()!="") ||($condicionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($condicionesDto->getdesCondicion()!=""){
$sql.="desCondicion='".$condicionesDto->getdesCondicion()."'";
if(($condicionesDto->getFechaRegistro()!="") ||($condicionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($condicionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$condicionesDto->getfechaRegistro()."'";
if(($condicionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($condicionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$condicionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveCondicion='".$condicionesDto->getcveCondicion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CondicionesDTO();
$tmp->setcveCondicion($condicionesDto->getcveCondicion());
$tmp = $this->selectCondiciones($tmp,"",$this->_proveedor);
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
public function deleteCondiciones($condicionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcondiciones  WHERE cveCondicion='".$condicionesDto->getcveCondicion()."'";
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
public function selectCondiciones($condicionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveCondicion,desCondicion,fechaRegistro,fechaActualizacion FROM tblcondiciones ";
if(($condicionesDto->getcveCondicion()!="") ||($condicionesDto->getdesCondicion()!="") ||($condicionesDto->getfechaRegistro()!="") ||($condicionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($condicionesDto->getcveCondicion()!=""){
$sql.="cveCondicion='".$condicionesDto->getCveCondicion()."'";
if(($condicionesDto->getDesCondicion()!="") ||($condicionesDto->getFechaRegistro()!="") ||($condicionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($condicionesDto->getdesCondicion()!=""){
$sql.="desCondicion='".$condicionesDto->getDesCondicion()."'";
if(($condicionesDto->getFechaRegistro()!="") ||($condicionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($condicionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$condicionesDto->getFechaRegistro()."'";
if(($condicionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($condicionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$condicionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new CondicionesDTO();
$tmp[$contador]->setCveCondicion($row["cveCondicion"]);
$tmp[$contador]->setDesCondicion($row["desCondicion"]);
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