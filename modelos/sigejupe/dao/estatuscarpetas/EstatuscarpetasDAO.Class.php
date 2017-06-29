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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatuscarpetas/EstatuscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatuscarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatuscarpetas($estatuscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatuscarpetas(";
if($estatuscarpetasDto->getcveEstatusCarpeta()!=""){
$sql.="cveEstatusCarpeta";
if(($estatuscarpetasDto->getDesEstatusCarpeta()!="") ||($estatuscarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getdesEstatusCarpeta()!=""){
$sql.="desEstatusCarpeta";
if(($estatuscarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatuscarpetasDto->getcveEstatusCarpeta()!=""){
$sql.="'".$estatuscarpetasDto->getcveEstatusCarpeta()."'";
if(($estatuscarpetasDto->getDesEstatusCarpeta()!="") ||($estatuscarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getdesEstatusCarpeta()!=""){
$sql.="'".$estatuscarpetasDto->getdesEstatusCarpeta()."'";
if(($estatuscarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getactivo()!=""){
$sql.="'".$estatuscarpetasDto->getactivo()."'";
}
if($estatuscarpetasDto->getfechaRegistro()!=""){
}
if($estatuscarpetasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatuscarpetasDTO();
$tmp->setcveEstatusCarpeta($this->_proveedor->lastID());
$tmp = $this->selectEstatuscarpetas($tmp,"",$this->_proveedor);
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
public function updateEstatuscarpetas($estatuscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatuscarpetas SET ";
if($estatuscarpetasDto->getcveEstatusCarpeta()!=""){
$sql.="cveEstatusCarpeta='".$estatuscarpetasDto->getcveEstatusCarpeta()."'";
if(($estatuscarpetasDto->getDesEstatusCarpeta()!="") ||($estatuscarpetasDto->getActivo()!="") ||($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getdesEstatusCarpeta()!=""){
$sql.="desEstatusCarpeta='".$estatuscarpetasDto->getdesEstatusCarpeta()."'";
if(($estatuscarpetasDto->getActivo()!="") ||($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getactivo()!=""){
$sql.="activo='".$estatuscarpetasDto->getactivo()."'";
if(($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatuscarpetasDto->getfechaRegistro()."'";
if(($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatuscarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatuscarpetasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusCarpeta='".$estatuscarpetasDto->getcveEstatusCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatuscarpetasDTO();
$tmp->setcveEstatusCarpeta($estatuscarpetasDto->getcveEstatusCarpeta());
$tmp = $this->selectEstatuscarpetas($tmp,"",$this->_proveedor);
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
public function deleteEstatuscarpetas($estatuscarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatuscarpetas  WHERE cveEstatusCarpeta='".$estatuscarpetasDto->getcveEstatusCarpeta()."'";
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
public function selectEstatuscarpetas($estatuscarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusCarpeta,desEstatusCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblestatuscarpetas ";
if(($estatuscarpetasDto->getcveEstatusCarpeta()!="") ||($estatuscarpetasDto->getdesEstatusCarpeta()!="") ||($estatuscarpetasDto->getactivo()!="") ||($estatuscarpetasDto->getfechaRegistro()!="") ||($estatuscarpetasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatuscarpetasDto->getcveEstatusCarpeta()!=""){
$sql.="cveEstatusCarpeta='".$estatuscarpetasDto->getCveEstatusCarpeta()."'";
if(($estatuscarpetasDto->getDesEstatusCarpeta()!="") ||($estatuscarpetasDto->getActivo()!="") ||($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatuscarpetasDto->getdesEstatusCarpeta()!=""){
$sql.="desEstatusCarpeta='".$estatuscarpetasDto->getDesEstatusCarpeta()."'";
if(($estatuscarpetasDto->getActivo()!="") ||($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatuscarpetasDto->getactivo()!=""){
$sql.="activo='".$estatuscarpetasDto->getActivo()."'";
if(($estatuscarpetasDto->getFechaRegistro()!="") ||($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatuscarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatuscarpetasDto->getFechaRegistro()."'";
if(($estatuscarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatuscarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatuscarpetasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatuscarpetasDTO();
$tmp[$contador]->setCveEstatusCarpeta($row["cveEstatusCarpeta"]);
$tmp[$contador]->setDesEstatusCarpeta($row["desEstatusCarpeta"]);
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