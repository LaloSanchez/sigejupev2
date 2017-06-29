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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposformulaciones/TiposformulacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposformulacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposformulaciones($tiposformulacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposformulaciones(";
if($tiposformulacionesDto->getCveTipoFormulacion()!=""){
$sql.="cveTipoFormulacion";
if(($tiposformulacionesDto->getDesTipoFormulacion()!="") ||($tiposformulacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getDesTipoFormulacion()!=""){
$sql.="desTipoFormulacion";
if(($tiposformulacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposformulacionesDto->getCveTipoFormulacion()!=""){
$sql.="'".$tiposformulacionesDto->getCveTipoFormulacion()."'";
if(($tiposformulacionesDto->getDesTipoFormulacion()!="") ||($tiposformulacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getDesTipoFormulacion()!=""){
$sql.="'".$tiposformulacionesDto->getDesTipoFormulacion()."'";
if(($tiposformulacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getActivo()!=""){
$sql.="'".$tiposformulacionesDto->getActivo()."'";
}
if($tiposformulacionesDto->getFechaRegistro()!=""){
}
if($tiposformulacionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposformulacionesDTO();
$tmp->setcveTipoFormulacion($this->_proveedor->lastID());
$tmp = $this->selectTiposformulaciones($tmp,"",$this->_proveedor);
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
public function updateTiposformulaciones($tiposformulacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposformulaciones SET ";
if($tiposformulacionesDto->getCveTipoFormulacion()!=""){
$sql.="cveTipoFormulacion='".$tiposformulacionesDto->getCveTipoFormulacion()."'";
if(($tiposformulacionesDto->getDesTipoFormulacion()!="") ||($tiposformulacionesDto->getActivo()!="") ||($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getDesTipoFormulacion()!=""){
$sql.="desTipoFormulacion='".$tiposformulacionesDto->getDesTipoFormulacion()."'";
if(($tiposformulacionesDto->getActivo()!="") ||($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getActivo()!=""){
$sql.="activo='".$tiposformulacionesDto->getActivo()."'";
if(($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposformulacionesDto->getFechaRegistro()."'";
if(($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposformulacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposformulacionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoFormulacion='".$tiposformulacionesDto->getCveTipoFormulacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposformulacionesDTO();
$tmp->setcveTipoFormulacion($tiposformulacionesDto->getCveTipoFormulacion());
$tmp = $this->selectTiposformulaciones($tmp,"",$this->_proveedor);
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
public function deleteTiposformulaciones($tiposformulacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposformulaciones  WHERE cveTipoFormulacion='".$tiposformulacionesDto->getCveTipoFormulacion()."'";
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
public function selectTiposformulaciones($tiposformulacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoFormulacion,desTipoFormulacion,activo,fechaRegistro,fechaActualizacion FROM tbltiposformulaciones ";
if(($tiposformulacionesDto->getCveTipoFormulacion()!="") ||($tiposformulacionesDto->getDesTipoFormulacion()!="") ||($tiposformulacionesDto->getActivo()!="") ||($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposformulacionesDto->getCveTipoFormulacion()!=""){
$sql.="cveTipoFormulacion='".$tiposformulacionesDto->getCveTipoFormulacion()."'";
if(($tiposformulacionesDto->getDesTipoFormulacion()!="") ||($tiposformulacionesDto->getActivo()!="") ||($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposformulacionesDto->getDesTipoFormulacion()!=""){
$sql.="desTipoFormulacion='".$tiposformulacionesDto->getDesTipoFormulacion()."'";
if(($tiposformulacionesDto->getActivo()!="") ||($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposformulacionesDto->getActivo()!=""){
$sql.="activo='".$tiposformulacionesDto->getActivo()."'";
if(($tiposformulacionesDto->getFechaRegistro()!="") ||($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposformulacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposformulacionesDto->getFechaRegistro()."'";
if(($tiposformulacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposformulacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposformulacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposformulacionesDTO();
$tmp[$contador]->setCveTipoFormulacion($row["cveTipoFormulacion"]);
$tmp[$contador]->setDesTipoFormulacion($row["desTipoFormulacion"]);
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