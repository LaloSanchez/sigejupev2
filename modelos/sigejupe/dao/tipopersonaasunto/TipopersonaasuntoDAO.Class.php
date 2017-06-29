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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipopersonaasunto/TipopersonaasuntoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipopersonaasuntoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipopersonaasunto($tipopersonaasuntoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipopersonaasunto(";
if($tipopersonaasuntoDto->getCveTipoPersonaAsunto()!=""){
$sql.="cveTipoPersonaAsunto";
if(($tipopersonaasuntoDto->getDescripcion()!="") ||($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getDescripcion()!=""){
$sql.="Descripcion";
if(($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getActivo()!=""){
$sql.="Activo";
}
$sql.=") VALUES(";
if($tipopersonaasuntoDto->getCveTipoPersonaAsunto()!=""){
$sql.="'".$tipopersonaasuntoDto->getCveTipoPersonaAsunto()."'";
if(($tipopersonaasuntoDto->getDescripcion()!="") ||($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getDescripcion()!=""){
$sql.="'".$tipopersonaasuntoDto->getDescripcion()."'";
if(($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getActivo()!=""){
$sql.="'".$tipopersonaasuntoDto->getActivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipopersonaasuntoDTO();
$tmp->setcveTipoPersonaAsunto($this->_proveedor->lastID());
$tmp = $this->selectTipopersonaasunto($tmp,"",$this->_proveedor);
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
public function updateTipopersonaasunto($tipopersonaasuntoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipopersonaasunto SET ";
if($tipopersonaasuntoDto->getCveTipoPersonaAsunto()!=""){
$sql.="cveTipoPersonaAsunto='".$tipopersonaasuntoDto->getCveTipoPersonaAsunto()."'";
if(($tipopersonaasuntoDto->getDescripcion()!="") ||($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getDescripcion()!=""){
$sql.="Descripcion='".$tipopersonaasuntoDto->getDescripcion()."'";
if(($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipopersonaasuntoDto->getActivo()!=""){
$sql.="Activo='".$tipopersonaasuntoDto->getActivo()."'";
}
$sql.=" WHERE cveTipoPersonaAsunto='".$tipopersonaasuntoDto->getCveTipoPersonaAsunto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipopersonaasuntoDTO();
$tmp->setcveTipoPersonaAsunto($tipopersonaasuntoDto->getCveTipoPersonaAsunto());
$tmp = $this->selectTipopersonaasunto($tmp,"",$this->_proveedor);
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
public function deleteTipopersonaasunto($tipopersonaasuntoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipopersonaasunto  WHERE cveTipoPersonaAsunto='".$tipopersonaasuntoDto->getCveTipoPersonaAsunto()."'";
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
public function selectTipopersonaasunto($tipopersonaasuntoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoPersonaAsunto,Descripcion,Activo FROM tbltipopersonaasunto ";
if(($tipopersonaasuntoDto->getCveTipoPersonaAsunto()!="") ||($tipopersonaasuntoDto->getDescripcion()!="") ||($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($tipopersonaasuntoDto->getCveTipoPersonaAsunto()!=""){
$sql.="cveTipoPersonaAsunto='".$tipopersonaasuntoDto->getCveTipoPersonaAsunto()."'";
if(($tipopersonaasuntoDto->getDescripcion()!="") ||($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tipopersonaasuntoDto->getDescripcion()!=""){
$sql.="Descripcion='".$tipopersonaasuntoDto->getDescripcion()."'";
if(($tipopersonaasuntoDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($tipopersonaasuntoDto->getActivo()!=""){
$sql.="Activo='".$tipopersonaasuntoDto->getActivo()."'";
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
$tmp[$contador] = new TipopersonaasuntoDTO();
$tmp[$contador]->setCveTipoPersonaAsunto($row["cveTipoPersonaAsunto"]);
$tmp[$contador]->setDescripcion($row["Descripcion"]);
$tmp[$contador]->setActivo($row["Activo"]);
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