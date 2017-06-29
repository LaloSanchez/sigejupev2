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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposprotecciones/TiposproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposproteccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposprotecciones($tiposproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposprotecciones(";
if($tiposproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion";
if(($tiposproteccionesDto->getDesTipoProteccion()!="") ||($tiposproteccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getdesTipoProteccion()!=""){
$sql.="desTipoProteccion";
if(($tiposproteccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposproteccionesDto->getcveTipoProteccion()!=""){
$sql.="'".$tiposproteccionesDto->getcveTipoProteccion()."'";
if(($tiposproteccionesDto->getDesTipoProteccion()!="") ||($tiposproteccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getdesTipoProteccion()!=""){
$sql.="'".$tiposproteccionesDto->getdesTipoProteccion()."'";
if(($tiposproteccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getactivo()!=""){
$sql.="'".$tiposproteccionesDto->getactivo()."'";
}
if($tiposproteccionesDto->getfechaRegistro()!=""){
}
if($tiposproteccionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposproteccionesDTO();
$tmp->setcveTipoProteccion($this->_proveedor->lastID());
$tmp = $this->selectTiposprotecciones($tmp,"",$this->_proveedor);
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
public function updateTiposprotecciones($tiposproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposprotecciones SET ";
if($tiposproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion='".$tiposproteccionesDto->getcveTipoProteccion()."'";
if(($tiposproteccionesDto->getDesTipoProteccion()!="") ||($tiposproteccionesDto->getActivo()!="") ||($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getdesTipoProteccion()!=""){
$sql.="desTipoProteccion='".$tiposproteccionesDto->getdesTipoProteccion()."'";
if(($tiposproteccionesDto->getActivo()!="") ||($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getactivo()!=""){
$sql.="activo='".$tiposproteccionesDto->getactivo()."'";
if(($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposproteccionesDto->getfechaRegistro()."'";
if(($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposproteccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposproteccionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoProteccion='".$tiposproteccionesDto->getcveTipoProteccion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposproteccionesDTO();
$tmp->setcveTipoProteccion($tiposproteccionesDto->getcveTipoProteccion());
$tmp = $this->selectTiposprotecciones($tmp,"",$this->_proveedor);
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
public function deleteTiposprotecciones($tiposproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposprotecciones  WHERE cveTipoProteccion='".$tiposproteccionesDto->getcveTipoProteccion()."'";
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
public function selectTiposprotecciones($tiposproteccionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoProteccion,desTipoProteccion,activo,fechaRegistro,fechaActualizacion FROM tbltiposprotecciones ";
if(($tiposproteccionesDto->getcveTipoProteccion()!="") ||($tiposproteccionesDto->getdesTipoProteccion()!="") ||($tiposproteccionesDto->getactivo()!="") ||($tiposproteccionesDto->getfechaRegistro()!="") ||($tiposproteccionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion='".$tiposproteccionesDto->getCveTipoProteccion()."'";
if(($tiposproteccionesDto->getDesTipoProteccion()!="") ||($tiposproteccionesDto->getActivo()!="") ||($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposproteccionesDto->getdesTipoProteccion()!=""){
$sql.="desTipoProteccion='".$tiposproteccionesDto->getDesTipoProteccion()."'";
if(($tiposproteccionesDto->getActivo()!="") ||($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposproteccionesDto->getactivo()!=""){
$sql.="activo='".$tiposproteccionesDto->getActivo()."'";
if(($tiposproteccionesDto->getFechaRegistro()!="") ||($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposproteccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposproteccionesDto->getFechaRegistro()."'";
if(($tiposproteccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposproteccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposproteccionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposproteccionesDTO();
$tmp[$contador]->setCveTipoProteccion($row["cveTipoProteccion"]);
$tmp[$contador]->setDesTipoProteccion($row["desTipoProteccion"]);
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