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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/catresolucionescombatidas/CatresolucionescombatidasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CatresolucionescombatidasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCatresolucionescombatidas($catresolucionescombatidasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcatresolucionescombatidas(";
if($catresolucionescombatidasDto->getCveCatResolucionCombatida()!=""){
$sql.="cveCatResolucionCombatida";
if(($catresolucionescombatidasDto->getDesResolucionCombatida()!="") ||($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getDesResolucionCombatida()!=""){
$sql.="desResolucionCombatida";
if(($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion";
if(($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($catresolucionescombatidasDto->getCveCatResolucionCombatida()!=""){
$sql.="'".$catresolucionescombatidasDto->getCveCatResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getDesResolucionCombatida()!="") ||($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getDesResolucionCombatida()!=""){
$sql.="'".$catresolucionescombatidasDto->getDesResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getCveTipoActuacion()!=""){
$sql.="'".$catresolucionescombatidasDto->getCveTipoActuacion()."'";
if(($catresolucionescombatidasDto->getActivo()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getActivo()!=""){
$sql.="'".$catresolucionescombatidasDto->getActivo()."'";
}
if($catresolucionescombatidasDto->getFechaRegistro()!=""){
}
if($catresolucionescombatidasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CatresolucionescombatidasDTO();
$tmp->setcveCatResolucionCombatida($this->_proveedor->lastID());
$tmp = $this->selectCatresolucionescombatidas($tmp,"",$this->_proveedor);
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
public function updateCatresolucionescombatidas($catresolucionescombatidasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcatresolucionescombatidas SET ";
if($catresolucionescombatidasDto->getCveCatResolucionCombatida()!=""){
$sql.="cveCatResolucionCombatida='".$catresolucionescombatidasDto->getCveCatResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getDesResolucionCombatida()!="") ||($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getDesResolucionCombatida()!=""){
$sql.="desResolucionCombatida='".$catresolucionescombatidasDto->getDesResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$catresolucionescombatidasDto->getCveTipoActuacion()."'";
if(($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getActivo()!=""){
$sql.="activo='".$catresolucionescombatidasDto->getActivo()."'";
if(($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$catresolucionescombatidasDto->getFechaRegistro()."'";
if(($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($catresolucionescombatidasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$catresolucionescombatidasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveCatResolucionCombatida='".$catresolucionescombatidasDto->getCveCatResolucionCombatida()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CatresolucionescombatidasDTO();
$tmp->setcveCatResolucionCombatida($catresolucionescombatidasDto->getCveCatResolucionCombatida());
$tmp = $this->selectCatresolucionescombatidas($tmp,"",$this->_proveedor);
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
public function deleteCatresolucionescombatidas($catresolucionescombatidasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcatresolucionescombatidas  WHERE cveCatResolucionCombatida='".$catresolucionescombatidasDto->getCveCatResolucionCombatida()."'";
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
public function selectCatresolucionescombatidas($catresolucionescombatidasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveCatResolucionCombatida,desResolucionCombatida,cveTipoActuacion,activo,fechaRegistro,fechaActualizacion FROM tblcatresolucionescombatidas ";
if(($catresolucionescombatidasDto->getCveCatResolucionCombatida()!="") ||($catresolucionescombatidasDto->getDesResolucionCombatida()!="") ||($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($catresolucionescombatidasDto->getCveCatResolucionCombatida()!=""){
$sql.="cveCatResolucionCombatida='".$catresolucionescombatidasDto->getCveCatResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getDesResolucionCombatida()!="") ||($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($catresolucionescombatidasDto->getDesResolucionCombatida()!=""){
$sql.="desResolucionCombatida='".$catresolucionescombatidasDto->getDesResolucionCombatida()."'";
if(($catresolucionescombatidasDto->getCveTipoActuacion()!="") ||($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($catresolucionescombatidasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$catresolucionescombatidasDto->getCveTipoActuacion()."'";
if(($catresolucionescombatidasDto->getActivo()!="") ||($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($catresolucionescombatidasDto->getActivo()!=""){
$sql.="activo='".$catresolucionescombatidasDto->getActivo()."'";
if(($catresolucionescombatidasDto->getFechaRegistro()!="") ||($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($catresolucionescombatidasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$catresolucionescombatidasDto->getFechaRegistro()."'";
if(($catresolucionescombatidasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($catresolucionescombatidasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$catresolucionescombatidasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new CatresolucionescombatidasDTO();
$tmp[$contador]->setCveCatResolucionCombatida($row["cveCatResolucionCombatida"]);
$tmp[$contador]->setDesResolucionCombatida(utf8_encode($row["desResolucionCombatida"]));
$tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
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