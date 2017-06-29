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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class FormasaccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertFormasacciones($formasaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblformasacciones(";
if($formasaccionesDto->getcveFormaAccion()!=""){
$sql.="cveFormaAccion";
if(($formasaccionesDto->getDesFormaAccion()!="") ||($formasaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getdesFormaAccion()!=""){
$sql.="desFormaAccion";
if(($formasaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($formasaccionesDto->getcveFormaAccion()!=""){
$sql.="'".$formasaccionesDto->getcveFormaAccion()."'";
if(($formasaccionesDto->getDesFormaAccion()!="") ||($formasaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getdesFormaAccion()!=""){
$sql.="'".$formasaccionesDto->getdesFormaAccion()."'";
if(($formasaccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getactivo()!=""){
$sql.="'".$formasaccionesDto->getactivo()."'";
}
if($formasaccionesDto->getfechaRegistro()!=""){
}
if($formasaccionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new FormasaccionesDTO();
$tmp->setcveFormaAccion($this->_proveedor->lastID());
$tmp = $this->selectFormasacciones($tmp,"",$this->_proveedor);
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
public function updateFormasacciones($formasaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblformasacciones SET ";
if($formasaccionesDto->getcveFormaAccion()!=""){
$sql.="cveFormaAccion='".$formasaccionesDto->getcveFormaAccion()."'";
if(($formasaccionesDto->getDesFormaAccion()!="") ||($formasaccionesDto->getActivo()!="") ||($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getdesFormaAccion()!=""){
$sql.="desFormaAccion='".$formasaccionesDto->getdesFormaAccion()."'";
if(($formasaccionesDto->getActivo()!="") ||($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getactivo()!=""){
$sql.="activo='".$formasaccionesDto->getactivo()."'";
if(($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$formasaccionesDto->getfechaRegistro()."'";
if(($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($formasaccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$formasaccionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveFormaAccion='".$formasaccionesDto->getcveFormaAccion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new FormasaccionesDTO();
$tmp->setcveFormaAccion($formasaccionesDto->getcveFormaAccion());
$tmp = $this->selectFormasacciones($tmp,"",$this->_proveedor);
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
public function deleteFormasacciones($formasaccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblformasacciones  WHERE cveFormaAccion='".$formasaccionesDto->getcveFormaAccion()."'";
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
public function selectFormasacciones($formasaccionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveFormaAccion,desFormaAccion,activo,fechaRegistro,fechaActualizacion FROM tblformasacciones ";
if(($formasaccionesDto->getcveFormaAccion()!="") ||($formasaccionesDto->getdesFormaAccion()!="") ||($formasaccionesDto->getactivo()!="") ||($formasaccionesDto->getfechaRegistro()!="") ||($formasaccionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($formasaccionesDto->getcveFormaAccion()!=""){
$sql.="cveFormaAccion='".$formasaccionesDto->getCveFormaAccion()."'";
if(($formasaccionesDto->getDesFormaAccion()!="") ||($formasaccionesDto->getActivo()!="") ||($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($formasaccionesDto->getdesFormaAccion()!=""){
$sql.="desFormaAccion='".$formasaccionesDto->getDesFormaAccion()."'";
if(($formasaccionesDto->getActivo()!="") ||($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($formasaccionesDto->getactivo()!=""){
$sql.="activo='".$formasaccionesDto->getActivo()."'";
if(($formasaccionesDto->getFechaRegistro()!="") ||($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($formasaccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$formasaccionesDto->getFechaRegistro()."'";
if(($formasaccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($formasaccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$formasaccionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new FormasaccionesDTO();
$tmp[$contador]->setCveFormaAccion($row["cveFormaAccion"]);
$tmp[$contador]->setDesFormaAccion($row["desFormaAccion"]);
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