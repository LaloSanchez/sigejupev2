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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/acciones/AccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAcciones($accionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblacciones(";
if($accionesDto->getcveAccion()!=""){
$sql.="cveAccion";
if(($accionesDto->getDesAccion()!="") ||($accionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($accionesDto->getdesAccion()!=""){
$sql.="desAccion";
if(($accionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($accionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($accionesDto->getcveAccion()!=""){
$sql.="'".$accionesDto->getcveAccion()."'";
if(($accionesDto->getDesAccion()!="") ||($accionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($accionesDto->getdesAccion()!=""){
$sql.="'".$accionesDto->getdesAccion()."'";
if(($accionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($accionesDto->getactivo()!=""){
$sql.="'".$accionesDto->getactivo()."'";
}
if($accionesDto->getfechaRegistro()!=""){
}
if($accionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AccionesDTO();
$tmp->setcveAccion($this->_proveedor->lastID());
$tmp = $this->selectAcciones($tmp,"",$this->_proveedor);
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
public function updateAcciones($accionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblacciones SET ";
if($accionesDto->getcveAccion()!=""){
$sql.="cveAccion='".$accionesDto->getcveAccion()."'";
if(($accionesDto->getDesAccion()!="") ||($accionesDto->getActivo()!="") ||($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($accionesDto->getdesAccion()!=""){
$sql.="desAccion='".$accionesDto->getdesAccion()."'";
if(($accionesDto->getActivo()!="") ||($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($accionesDto->getactivo()!=""){
$sql.="activo='".$accionesDto->getactivo()."'";
if(($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($accionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$accionesDto->getfechaRegistro()."'";
if(($accionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($accionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$accionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveAccion='".$accionesDto->getcveAccion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AccionesDTO();
$tmp->setcveAccion($accionesDto->getcveAccion());
$tmp = $this->selectAcciones($tmp,"",$this->_proveedor);
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
public function deleteAcciones($accionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblacciones  WHERE cveAccion='".$accionesDto->getcveAccion()."'";
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
public function selectAcciones($accionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveAccion,desAccion,activo,fechaRegistro,fechaActualizacion FROM tblacciones ";
if(($accionesDto->getcveAccion()!="") ||($accionesDto->getdesAccion()!="") ||($accionesDto->getactivo()!="") ||($accionesDto->getfechaRegistro()!="") ||($accionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($accionesDto->getcveAccion()!=""){
$sql.="cveAccion='".$accionesDto->getCveAccion()."'";
if(($accionesDto->getDesAccion()!="") ||($accionesDto->getActivo()!="") ||($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($accionesDto->getdesAccion()!=""){
$sql.="desAccion='".$accionesDto->getDesAccion()."'";
if(($accionesDto->getActivo()!="") ||($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($accionesDto->getactivo()!=""){
$sql.="activo='".$accionesDto->getActivo()."'";
if(($accionesDto->getFechaRegistro()!="") ||($accionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($accionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$accionesDto->getFechaRegistro()."'";
if(($accionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($accionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$accionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AccionesDTO();
$tmp[$contador]->setCveAccion($row["cveAccion"]);
$tmp[$contador]->setDesAccion($row["desAccion"]);
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