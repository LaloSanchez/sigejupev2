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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/accionesws/AccioneswsDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AccioneswsDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAccionesws($accioneswsDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblaccionesws(";
if($accioneswsDto->getIdAccionwa()!=""){
$sql.="idAccionwa";
if(($accioneswsDto->getDescAccionws()!="") ||($accioneswsDto->getActivo()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getDescAccionws()!=""){
$sql.="descAccionws";
if(($accioneswsDto->getActivo()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($accioneswsDto->getIdAccionwa()!=""){
$sql.="'".$accioneswsDto->getIdAccionwa()."'";
if(($accioneswsDto->getDescAccionws()!="") ||($accioneswsDto->getActivo()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getDescAccionws()!=""){
$sql.="'".$accioneswsDto->getDescAccionws()."'";
if(($accioneswsDto->getActivo()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getActivo()!=""){
$sql.="'".$accioneswsDto->getActivo()."'";
}
if($accioneswsDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AccioneswsDTO();
$tmp->setidAccionwa($this->_proveedor->lastID());
$tmp = $this->selectAccionesws($tmp,"",$this->_proveedor);
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
public function updateAccionesws($accioneswsDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblaccionesws SET ";
if($accioneswsDto->getIdAccionwa()!=""){
$sql.="idAccionwa='".$accioneswsDto->getIdAccionwa()."'";
if(($accioneswsDto->getDescAccionws()!="") ||($accioneswsDto->getActivo()!="") ||($accioneswsDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getDescAccionws()!=""){
$sql.="descAccionws='".$accioneswsDto->getDescAccionws()."'";
if(($accioneswsDto->getActivo()!="") ||($accioneswsDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getActivo()!=""){
$sql.="activo='".$accioneswsDto->getActivo()."'";
if(($accioneswsDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($accioneswsDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$accioneswsDto->getFechaRegistro()."'";
}
$sql.=" WHERE idAccionwa='".$accioneswsDto->getIdAccionwa()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AccioneswsDTO();
$tmp->setidAccionwa($accioneswsDto->getIdAccionwa());
$tmp = $this->selectAccionesws($tmp,"",$this->_proveedor);
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
public function deleteAccionesws($accioneswsDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblaccionesws  WHERE idAccionwa='".$accioneswsDto->getIdAccionwa()."'";
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
public function selectAccionesws($accioneswsDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAccionwa,descAccionws,activo,fechaRegistro FROM tblaccionesws ";
if(($accioneswsDto->getIdAccionwa()!="") ||($accioneswsDto->getDescAccionws()!="") ||($accioneswsDto->getActivo()!="") ||($accioneswsDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($accioneswsDto->getIdAccionwa()!=""){
$sql.="idAccionwa='".$accioneswsDto->getIdAccionwa()."'";
if(($accioneswsDto->getDescAccionws()!="") ||($accioneswsDto->getActivo()!="") ||($accioneswsDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($accioneswsDto->getDescAccionws()!=""){
$sql.="descAccionws='".$accioneswsDto->getDescAccionws()."'";
if(($accioneswsDto->getActivo()!="") ||($accioneswsDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($accioneswsDto->getActivo()!=""){
$sql.="activo='".$accioneswsDto->getActivo()."'";
if(($accioneswsDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($accioneswsDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$accioneswsDto->getFechaRegistro()."'";
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
$tmp[$contador] = new AccioneswsDTO();
$tmp[$contador]->setIdAccionwa($row["idAccionwa"]);
$tmp[$contador]->setDescAccionws($row["descAccionws"]);
$tmp[$contador]->setActivo($row["activo"]);
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