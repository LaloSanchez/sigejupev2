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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/codigos/CodigosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CodigosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCodigos($codigosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcodigos(";
if($codigosDto->getcveCodigo()!=""){
$sql.="cveCodigo";
if(($codigosDto->getDesCodigo()!="") ||($codigosDto->getActivo()!="") ){
$sql.=",";
}
}
if($codigosDto->getdesCodigo()!=""){
$sql.="desCodigo";
if(($codigosDto->getActivo()!="") ){
$sql.=",";
}
}
if($codigosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($codigosDto->getcveCodigo()!=""){
$sql.="'".$codigosDto->getcveCodigo()."'";
if(($codigosDto->getDesCodigo()!="") ||($codigosDto->getActivo()!="") ){
$sql.=",";
}
}
if($codigosDto->getdesCodigo()!=""){
$sql.="'".$codigosDto->getdesCodigo()."'";
if(($codigosDto->getActivo()!="") ){
$sql.=",";
}
}
if($codigosDto->getactivo()!=""){
$sql.="'".$codigosDto->getactivo()."'";
}
if($codigosDto->getfechaRegistro()!=""){
}
if($codigosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CodigosDTO();
$tmp->setcveCodigo($this->_proveedor->lastID());
$tmp = $this->selectCodigos($tmp,"",$this->_proveedor);
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
public function updateCodigos($codigosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcodigos SET ";
if($codigosDto->getcveCodigo()!=""){
$sql.="cveCodigo='".$codigosDto->getcveCodigo()."'";
if(($codigosDto->getDesCodigo()!="") ||($codigosDto->getActivo()!="") ||($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($codigosDto->getdesCodigo()!=""){
$sql.="desCodigo='".$codigosDto->getdesCodigo()."'";
if(($codigosDto->getActivo()!="") ||($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($codigosDto->getactivo()!=""){
$sql.="activo='".$codigosDto->getactivo()."'";
if(($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($codigosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$codigosDto->getfechaRegistro()."'";
if(($codigosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($codigosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$codigosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveCodigo='".$codigosDto->getcveCodigo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CodigosDTO();
$tmp->setcveCodigo($codigosDto->getcveCodigo());
$tmp = $this->selectCodigos($tmp,"",$this->_proveedor);
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
public function deleteCodigos($codigosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcodigos  WHERE cveCodigo='".$codigosDto->getcveCodigo()."'";
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
public function selectCodigos($codigosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveCodigo,desCodigo,activo,fechaRegistro,fechaActualizacion FROM tblcodigos ";
if(($codigosDto->getcveCodigo()!="") ||($codigosDto->getdesCodigo()!="") ||($codigosDto->getactivo()!="") ||($codigosDto->getfechaRegistro()!="") ||($codigosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($codigosDto->getcveCodigo()!=""){
$sql.="cveCodigo='".$codigosDto->getCveCodigo()."'";
if(($codigosDto->getDesCodigo()!="") ||($codigosDto->getActivo()!="") ||($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($codigosDto->getdesCodigo()!=""){
$sql.="desCodigo='".$codigosDto->getDesCodigo()."'";
if(($codigosDto->getActivo()!="") ||($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($codigosDto->getactivo()!=""){
$sql.="activo='".$codigosDto->getActivo()."'";
if(($codigosDto->getFechaRegistro()!="") ||($codigosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($codigosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$codigosDto->getFechaRegistro()."'";
if(($codigosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($codigosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$codigosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new CodigosDTO();
$tmp[$contador]->setCveCodigo($row["cveCodigo"]);
$tmp[$contador]->setDesCodigo($row["desCodigo"]);
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