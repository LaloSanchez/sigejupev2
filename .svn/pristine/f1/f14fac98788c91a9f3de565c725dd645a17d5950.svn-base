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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposrelimpofe/TiposrelimpofeDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposrelimpofeDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposrelimpofe($tiposrelimpofeDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposrelimpofe(";
if($tiposrelimpofeDto->getcveRelacionImpOfe()!=""){
$sql.="cveRelacionImpOfe";
if(($tiposrelimpofeDto->getDesRelacionImpOfe()!="") ||($tiposrelimpofeDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getdesRelacionImpOfe()!=""){
$sql.="desRelacionImpOfe";
if(($tiposrelimpofeDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposrelimpofeDto->getcveRelacionImpOfe()!=""){
$sql.="'".$tiposrelimpofeDto->getcveRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getDesRelacionImpOfe()!="") ||($tiposrelimpofeDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getdesRelacionImpOfe()!=""){
$sql.="'".$tiposrelimpofeDto->getdesRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getactivo()!=""){
$sql.="'".$tiposrelimpofeDto->getactivo()."'";
}
if($tiposrelimpofeDto->getfechaRegistro()!=""){
}
if($tiposrelimpofeDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposrelimpofeDTO();
$tmp->setcveRelacionImpOfe($this->_proveedor->lastID());
$tmp = $this->selectTiposrelimpofe($tmp,"",$this->_proveedor);
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
public function updateTiposrelimpofe($tiposrelimpofeDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposrelimpofe SET ";
if($tiposrelimpofeDto->getcveRelacionImpOfe()!=""){
$sql.="cveRelacionImpOfe='".$tiposrelimpofeDto->getcveRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getDesRelacionImpOfe()!="") ||($tiposrelimpofeDto->getActivo()!="") ||($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getdesRelacionImpOfe()!=""){
$sql.="desRelacionImpOfe='".$tiposrelimpofeDto->getdesRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getActivo()!="") ||($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getactivo()!=""){
$sql.="activo='".$tiposrelimpofeDto->getactivo()."'";
if(($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposrelimpofeDto->getfechaRegistro()."'";
if(($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrelimpofeDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposrelimpofeDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveRelacionImpOfe='".$tiposrelimpofeDto->getcveRelacionImpOfe()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposrelimpofeDTO();
$tmp->setcveRelacionImpOfe($tiposrelimpofeDto->getcveRelacionImpOfe());
$tmp = $this->selectTiposrelimpofe($tmp,"",$this->_proveedor);
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
public function deleteTiposrelimpofe($tiposrelimpofeDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposrelimpofe  WHERE cveRelacionImpOfe='".$tiposrelimpofeDto->getcveRelacionImpOfe()."'";
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
public function selectTiposrelimpofe($tiposrelimpofeDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRelacionImpOfe,desRelacionImpOfe,activo,fechaRegistro,fechaActualizacion FROM tbltiposrelimpofe ";
if(($tiposrelimpofeDto->getcveRelacionImpOfe()!="") ||($tiposrelimpofeDto->getdesRelacionImpOfe()!="") ||($tiposrelimpofeDto->getactivo()!="") ||($tiposrelimpofeDto->getfechaRegistro()!="") ||($tiposrelimpofeDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposrelimpofeDto->getcveRelacionImpOfe()!=""){
$sql.="cveRelacionImpOfe='".$tiposrelimpofeDto->getCveRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getDesRelacionImpOfe()!="") ||($tiposrelimpofeDto->getActivo()!="") ||($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrelimpofeDto->getdesRelacionImpOfe()!=""){
$sql.="desRelacionImpOfe='".$tiposrelimpofeDto->getDesRelacionImpOfe()."'";
if(($tiposrelimpofeDto->getActivo()!="") ||($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrelimpofeDto->getactivo()!=""){
$sql.="activo='".$tiposrelimpofeDto->getActivo()."'";
if(($tiposrelimpofeDto->getFechaRegistro()!="") ||($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrelimpofeDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposrelimpofeDto->getFechaRegistro()."'";
if(($tiposrelimpofeDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrelimpofeDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposrelimpofeDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposrelimpofeDTO();
$tmp[$contador]->setCveRelacionImpOfe($row["cveRelacionImpOfe"]);
$tmp[$contador]->setDesRelacionImpOfe($row["desRelacionImpOfe"]);
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