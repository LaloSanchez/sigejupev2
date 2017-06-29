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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatusDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatus($estatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatus(";
if($estatusDto->getCveEstatus()!=""){
$sql.="cveEstatus";
if(($estatusDto->getDescEstatus()!="") ||($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getDescEstatus()!=""){
$sql.="descEstatus";
if(($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getActivo()!=""){
$sql.="activo";
if(($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus";
}
$sql.=",fechaActualizacion";
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($estatusDto->getCveEstatus()!=""){
$sql.="'".$estatusDto->getCveEstatus()."'";
if(($estatusDto->getDescEstatus()!="") ||($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getDescEstatus()!=""){
$sql.="'".$estatusDto->getDescEstatus()."'";
if(($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getActivo()!=""){
$sql.="'".$estatusDto->getActivo()."'";
if(($estatusDto->getCveTipoEstatus()!="") ){
$sql.=",";
}
}
if($estatusDto->getCveTipoEstatus()!=""){
$sql.="'".$estatusDto->getCveTipoEstatus()."'";
}
if($estatusDto->getFechaActualizacion()!=""){
}
if($estatusDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusDTO();
$tmp->setcveEstatus($this->_proveedor->lastID());
$tmp = $this->selectEstatus($tmp,"",$this->_proveedor);
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
public function updateEstatus($estatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatus SET ";
if($estatusDto->getCveEstatus()!=""){
$sql.="cveEstatus='".$estatusDto->getCveEstatus()."'";
if(($estatusDto->getDescEstatus()!="") ||($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($estatusDto->getDescEstatus()!=""){
$sql.="descEstatus='".$estatusDto->getDescEstatus()."'";
if(($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($estatusDto->getActivo()!=""){
$sql.="activo='".$estatusDto->getActivo()."'";
if(($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($estatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus='".$estatusDto->getCveTipoEstatus()."'";
if(($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($estatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusDto->getFechaActualizacion()."'";
if(($estatusDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($estatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusDto->getFechaRegistro()."'";
}
$sql.=" WHERE cveEstatus='".$estatusDto->getCveEstatus()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusDTO();
$tmp->setcveEstatus($estatusDto->getCveEstatus());
$tmp = $this->selectEstatus($tmp,"",$this->_proveedor);
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
public function deleteEstatus($estatusDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatus  WHERE cveEstatus='".$estatusDto->getCveEstatus()."'";
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
public function selectEstatus($estatusDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatus,descEstatus,activo,cveTipoEstatus,fechaActualizacion,fechaRegistro FROM tblestatus ";
if(($estatusDto->getCveEstatus()!="") ||($estatusDto->getDescEstatus()!="") ||($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($estatusDto->getCveEstatus()!=""){
$sql.="cveEstatus='".$estatusDto->getCveEstatus()."'";
if(($estatusDto->getDescEstatus()!="") ||($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($estatusDto->getDescEstatus()!=""){
$sql.="descEstatus='".$estatusDto->getDescEstatus()."'";
if(($estatusDto->getActivo()!="") ||($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($estatusDto->getActivo()!=""){
$sql.="activo='".$estatusDto->getActivo()."'";
if(($estatusDto->getCveTipoEstatus()!="") ||($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($estatusDto->getCveTipoEstatus()!=""){
$sql.="cveTipoEstatus='".$estatusDto->getCveTipoEstatus()."'";
if(($estatusDto->getFechaActualizacion()!="") ||($estatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($estatusDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusDto->getFechaActualizacion()."'";
if(($estatusDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($estatusDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusDto->getFechaRegistro()."'";
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
$tmp[$contador] = new EstatusDTO();
$tmp[$contador]->setCveEstatus($row["cveEstatus"]);
$tmp[$contador]->setDescEstatus($row["descEstatus"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setCveTipoEstatus($row["cveTipoEstatus"]);
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