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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/calendario/CalendarioDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CalendarioDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCalendario($calendarioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcalendario(";
if($calendarioDto->getIdCalendario()!=""){
$sql.="idCalendario";
if(($calendarioDto->getTipo()!="") ||($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getTipo()!=""){
$sql.="tipo";
if(($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getFecha()!=""){
$sql.="fecha";
if(($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getDescripcion()!=""){
$sql.="descripcion";
if(($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($calendarioDto->getIdCalendario()!=""){
$sql.="'".$calendarioDto->getIdCalendario()."'";
if(($calendarioDto->getTipo()!="") ||($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getTipo()!=""){
$sql.="'".$calendarioDto->getTipo()."'";
if(($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getFecha()!=""){
$sql.="'".$calendarioDto->getFecha()."'";
if(($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getDescripcion()!=""){
$sql.="'".$calendarioDto->getDescripcion()."'";
if(($calendarioDto->getActivo()!="") ){
$sql.=",";
}
}
if($calendarioDto->getActivo()!=""){
$sql.="'".$calendarioDto->getActivo()."'";
}
if($calendarioDto->getFechaRegistro()!=""){
}
if($calendarioDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CalendarioDTO();
$tmp->setidCalendario($this->_proveedor->lastID());
$tmp = $this->selectCalendario($tmp,"",$this->_proveedor);
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
public function updateCalendario($calendarioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcalendario SET ";
if($calendarioDto->getIdCalendario()!=""){
$sql.="idCalendario='".$calendarioDto->getIdCalendario()."'";
if(($calendarioDto->getTipo()!="") ||($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getTipo()!=""){
$sql.="tipo='".$calendarioDto->getTipo()."'";
if(($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getFecha()!=""){
$sql.="fecha='".$calendarioDto->getFecha()."'";
if(($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getDescripcion()!=""){
$sql.="descripcion='".$calendarioDto->getDescripcion()."'";
if(($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getActivo()!=""){
$sql.="activo='".$calendarioDto->getActivo()."'";
if(($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$calendarioDto->getFechaRegistro()."'";
if(($calendarioDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($calendarioDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$calendarioDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idCalendario='".$calendarioDto->getIdCalendario()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CalendarioDTO();
$tmp->setidCalendario($calendarioDto->getIdCalendario());
$tmp = $this->selectCalendario($tmp,"",$this->_proveedor);
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
public function deleteCalendario($calendarioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcalendario  WHERE idCalendario='".$calendarioDto->getIdCalendario()."'";
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
public function selectCalendario($calendarioDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idCalendario,tipo,fecha,descripcion,activo,fechaRegistro,fechaActualizacion FROM tblcalendario ";
if(($calendarioDto->getIdCalendario()!="") ||($calendarioDto->getTipo()!="") ||($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($calendarioDto->getIdCalendario()!=""){
$sql.="idCalendario='".$calendarioDto->getIdCalendario()."'";
if(($calendarioDto->getTipo()!="") ||($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getTipo()!=""){
$sql.="tipo='".$calendarioDto->getTipo()."'";
if(($calendarioDto->getFecha()!="") ||($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getFecha()!=""){
$sql.="fecha='".$calendarioDto->getFecha()."'";
if(($calendarioDto->getDescripcion()!="") ||($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getDescripcion()!=""){
$sql.="descripcion='".$calendarioDto->getDescripcion()."'";
if(($calendarioDto->getActivo()!="") ||($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getActivo()!=""){
$sql.="activo='".$calendarioDto->getActivo()."'";
if(($calendarioDto->getFechaRegistro()!="") ||($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$calendarioDto->getFechaRegistro()."'";
if(($calendarioDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($calendarioDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$calendarioDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new CalendarioDTO();
$tmp[$contador]->setIdCalendario($row["idCalendario"]);
$tmp[$contador]->setTipo($row["tipo"]);
$tmp[$contador]->setFecha($row["fecha"]);
$tmp[$contador]->setDescripcion($row["descripcion"]);
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