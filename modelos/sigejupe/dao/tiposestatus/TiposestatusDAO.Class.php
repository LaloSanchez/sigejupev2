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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposestatus/TiposestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposestatusDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposestatus($tiposestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposestatus(";
if($tiposestatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus";
if(($tiposestatusDto->getDescTipoEstatus()!="") ||($tiposestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getDescTipoEstatus()!=""){
$sql.="descTipoEstatus";
if(($tiposestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaActualizacion";
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($tiposestatusDto->getCveTipoEstatus()!=""){
$sql.="'".$tiposestatusDto->getCveTipoEstatus()."'";
if(($tiposestatusDto->getDescTipoEstatus()!="") ||($tiposestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getDescTipoEstatus()!=""){
$sql.="'".$tiposestatusDto->getDescTipoEstatus()."'";
if(($tiposestatusDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getActivo()!=""){
$sql.="'".$tiposestatusDto->getActivo()."'";
}
if($tiposestatusDto->getFechaActualizacion()!=""){
}
if($tiposestatusDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposestatusDTO();
$tmp->setcveTipoEstatus($this->_proveedor->lastID());
$tmp = $this->selectTiposestatus($tmp,"",$this->_proveedor);
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
public function updateTiposestatus($tiposestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposestatus SET ";
if($tiposestatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus='".$tiposestatusDto->getCveTipoEstatus()."'";
if(($tiposestatusDto->getDescTipoEstatus()!="") ||($tiposestatusDto->getActivo()!="") ||($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getDescTipoEstatus()!=""){
$sql.="descTipoEstatus='".$tiposestatusDto->getDescTipoEstatus()."'";
if(($tiposestatusDto->getActivo()!="") ||($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getActivo()!=""){
$sql.="activo='".$tiposestatusDto->getActivo()."'";
if(($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposestatusDto->getFechaActualizacion()."'";
if(($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($tiposestatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposestatusDto->getFechaRegistro()."'";
}
$sql.=" WHERE cveTipoEstatus='".$tiposestatusDto->getCveTipoEstatus()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposestatusDTO();
$tmp->setcveTipoEstatus($tiposestatusDto->getCveTipoEstatus());
$tmp = $this->selectTiposestatus($tmp,"",$this->_proveedor);
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
public function deleteTiposestatus($tiposestatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposestatus  WHERE cveTipoEstatus='".$tiposestatusDto->getCveTipoEstatus()."'";
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
public function selectTiposestatus($tiposestatusDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoEstatus,descTipoEstatus,activo,fechaActualizacion,fechaRegistro FROM tbltiposestatus ";
if(($tiposestatusDto->getCveTipoEstatus()!="") ||($tiposestatusDto->getDescTipoEstatus()!="") ||($tiposestatusDto->getActivo()!="") ||($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($tiposestatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus='".$tiposestatusDto->getCveTipoEstatus()."'";
if(($tiposestatusDto->getDescTipoEstatus()!="") ||($tiposestatusDto->getActivo()!="") ||($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($tiposestatusDto->getDescTipoEstatus()!=""){
$sql.="descTipoEstatus='".$tiposestatusDto->getDescTipoEstatus()."'";
if(($tiposestatusDto->getActivo()!="") ||($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($tiposestatusDto->getActivo()!=""){
$sql.="activo='".$tiposestatusDto->getActivo()."'";
if(($tiposestatusDto->getFechaActualizacion()!="") ||($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($tiposestatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposestatusDto->getFechaActualizacion()."'";
if(($tiposestatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($tiposestatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposestatusDto->getFechaRegistro()."'";
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
$tmp[$contador] = new TiposestatusDTO();
$tmp[$contador]->setCveTipoEstatus($row["cveTipoEstatus"]);
$tmp[$contador]->setDescTipoEstatus($row["descTipoEstatus"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
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