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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DialectoindigenaDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDialectoindigena($dialectoindigenaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldialectoindigena(";
if($dialectoindigenaDto->getcveDialectoIndigena()!=""){
$sql.="cveDialectoIndigena";
if(($dialectoindigenaDto->getDesDialectoIndigena()!="") ||($dialectoindigenaDto->getActivo()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getdesDialectoIndigena()!=""){
$sql.="desDialectoIndigena";
if(($dialectoindigenaDto->getActivo()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($dialectoindigenaDto->getcveDialectoIndigena()!=""){
$sql.="'".$dialectoindigenaDto->getcveDialectoIndigena()."'";
if(($dialectoindigenaDto->getDesDialectoIndigena()!="") ||($dialectoindigenaDto->getActivo()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getdesDialectoIndigena()!=""){
$sql.="'".$dialectoindigenaDto->getdesDialectoIndigena()."'";
if(($dialectoindigenaDto->getActivo()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getactivo()!=""){
$sql.="'".$dialectoindigenaDto->getactivo()."'";
}
if($dialectoindigenaDto->getfechaRegistro()!=""){
}
if($dialectoindigenaDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DialectoindigenaDTO();
$tmp->setcveDialectoIndigena($this->_proveedor->lastID());
$tmp = $this->selectDialectoindigena($tmp,"",$this->_proveedor);
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
public function updateDialectoindigena($dialectoindigenaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldialectoindigena SET ";
if($dialectoindigenaDto->getcveDialectoIndigena()!=""){
$sql.="cveDialectoIndigena='".$dialectoindigenaDto->getcveDialectoIndigena()."'";
if(($dialectoindigenaDto->getDesDialectoIndigena()!="") ||($dialectoindigenaDto->getActivo()!="") ||($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getdesDialectoIndigena()!=""){
$sql.="desDialectoIndigena='".$dialectoindigenaDto->getdesDialectoIndigena()."'";
if(($dialectoindigenaDto->getActivo()!="") ||($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getactivo()!=""){
$sql.="activo='".$dialectoindigenaDto->getactivo()."'";
if(($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$dialectoindigenaDto->getfechaRegistro()."'";
if(($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($dialectoindigenaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$dialectoindigenaDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveDialectoIndigena='".$dialectoindigenaDto->getcveDialectoIndigena()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DialectoindigenaDTO();
$tmp->setcveDialectoIndigena($dialectoindigenaDto->getcveDialectoIndigena());
$tmp = $this->selectDialectoindigena($tmp,"",$this->_proveedor);
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
public function deleteDialectoindigena($dialectoindigenaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldialectoindigena  WHERE cveDialectoIndigena='".$dialectoindigenaDto->getcveDialectoIndigena()."'";
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
public function selectDialectoindigena($dialectoindigenaDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveDialectoIndigena,desDialectoIndigena,activo,fechaRegistro,fechaActualizacion FROM tbldialectoindigena ";
if(($dialectoindigenaDto->getcveDialectoIndigena()!="") ||($dialectoindigenaDto->getdesDialectoIndigena()!="") ||($dialectoindigenaDto->getactivo()!="") ||($dialectoindigenaDto->getfechaRegistro()!="") ||($dialectoindigenaDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($dialectoindigenaDto->getcveDialectoIndigena()!=""){
$sql.="cveDialectoIndigena='".$dialectoindigenaDto->getCveDialectoIndigena()."'";
if(($dialectoindigenaDto->getDesDialectoIndigena()!="") ||($dialectoindigenaDto->getActivo()!="") ||($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($dialectoindigenaDto->getdesDialectoIndigena()!=""){
$sql.="desDialectoIndigena='".$dialectoindigenaDto->getDesDialectoIndigena()."'";
if(($dialectoindigenaDto->getActivo()!="") ||($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($dialectoindigenaDto->getactivo()!=""){
$sql.="activo='".$dialectoindigenaDto->getActivo()."'";
if(($dialectoindigenaDto->getFechaRegistro()!="") ||($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($dialectoindigenaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$dialectoindigenaDto->getFechaRegistro()."'";
if(($dialectoindigenaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($dialectoindigenaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$dialectoindigenaDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DialectoindigenaDTO();
$tmp[$contador]->setCveDialectoIndigena($row["cveDialectoIndigena"]);
$tmp[$contador]->setDesDialectoIndigena($row["desDialectoIndigena"]);
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