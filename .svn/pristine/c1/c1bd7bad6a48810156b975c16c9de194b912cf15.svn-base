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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipossuspensioncondicionales/TipossuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipossuspensioncondicionalesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipossuspensioncondicionales($tipossuspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipossuspensioncondicionales(";
if($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional";
if(($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!=""){
$sql.="desTipoSuspensionCondicional";
if(($tipossuspensioncondicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="'".$tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!=""){
$sql.="'".$tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getActivo()!=""){
$sql.="'".$tipossuspensioncondicionalesDto->getActivo()."'";
}
if($tipossuspensioncondicionalesDto->getFechaRegistro()!=""){
}
if($tipossuspensioncondicionalesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossuspensioncondicionalesDTO();
$tmp->setcveTipoSuspensionCondicional($this->_proveedor->lastID());
$tmp = $this->selectTipossuspensioncondicionales($tmp,"",$this->_proveedor);
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
public function updateTipossuspensioncondicionales($tipossuspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipossuspensioncondicionales SET ";
if($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getActivo()!="") ||($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!=""){
$sql.="desTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getActivo()!="") ||($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getActivo()!=""){
$sql.="activo='".$tipossuspensioncondicionalesDto->getActivo()."'";
if(($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossuspensioncondicionalesDto->getFechaRegistro()."'";
if(($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossuspensioncondicionalesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossuspensioncondicionalesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossuspensioncondicionalesDTO();
$tmp->setcveTipoSuspensionCondicional($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional());
$tmp = $this->selectTipossuspensioncondicionales($tmp,"",$this->_proveedor);
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
public function deleteTipossuspensioncondicionales($tipossuspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipossuspensioncondicionales  WHERE cveTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
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
public function selectTipossuspensioncondicionales($tipossuspensioncondicionalesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoSuspensionCondicional,desTipoSuspensionCondicional,activo,fechaRegistro,fechaActualizacion FROM tbltipossuspensioncondicionales ";
if(($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getActivo()!="") ||($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!="") ||($tipossuspensioncondicionalesDto->getActivo()!="") ||($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()!=""){
$sql.="desTipoSuspensionCondicional='".$tipossuspensioncondicionalesDto->getDesTipoSuspensionCondicional()."'";
if(($tipossuspensioncondicionalesDto->getActivo()!="") ||($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossuspensioncondicionalesDto->getActivo()!=""){
$sql.="activo='".$tipossuspensioncondicionalesDto->getActivo()."'";
if(($tipossuspensioncondicionalesDto->getFechaRegistro()!="") ||($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossuspensioncondicionalesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossuspensioncondicionalesDto->getFechaRegistro()."'";
if(($tipossuspensioncondicionalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossuspensioncondicionalesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossuspensioncondicionalesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipossuspensioncondicionalesDTO();
$tmp[$contador]->setCveTipoSuspensionCondicional($row["cveTipoSuspensionCondicional"]);
$tmp[$contador]->setDesTipoSuspensionCondicional($row["desTipoSuspensionCondicional"]);
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