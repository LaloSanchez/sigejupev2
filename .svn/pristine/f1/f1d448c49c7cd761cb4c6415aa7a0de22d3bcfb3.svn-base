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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposaudienciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposaudiencias($tiposaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposaudiencias(";
if($tiposaudienciasDto->getcveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia";
if(($tiposaudienciasDto->getDesTipoAudiencia()!="") ||($tiposaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getdesTipoAudiencia()!=""){
$sql.="desTipoAudiencia";
if(($tiposaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposaudienciasDto->getcveTipoAudiencia()!=""){
$sql.="'".$tiposaudienciasDto->getcveTipoAudiencia()."'";
if(($tiposaudienciasDto->getDesTipoAudiencia()!="") ||($tiposaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getdesTipoAudiencia()!=""){
$sql.="'".$tiposaudienciasDto->getdesTipoAudiencia()."'";
if(($tiposaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getactivo()!=""){
$sql.="'".$tiposaudienciasDto->getactivo()."'";
}
if($tiposaudienciasDto->getfechaRegistro()!=""){
}
if($tiposaudienciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposaudienciasDTO();
$tmp->setcveTipoAudiencia($this->_proveedor->lastID());
$tmp = $this->selectTiposaudiencias($tmp,"",$this->_proveedor);
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
public function updateTiposaudiencias($tiposaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposaudiencias SET ";
if($tiposaudienciasDto->getcveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia='".$tiposaudienciasDto->getcveTipoAudiencia()."'";
if(($tiposaudienciasDto->getDesTipoAudiencia()!="") ||($tiposaudienciasDto->getActivo()!="") ||($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getdesTipoAudiencia()!=""){
$sql.="desTipoAudiencia='".$tiposaudienciasDto->getdesTipoAudiencia()."'";
if(($tiposaudienciasDto->getActivo()!="") ||($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getactivo()!=""){
$sql.="activo='".$tiposaudienciasDto->getactivo()."'";
if(($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposaudienciasDto->getfechaRegistro()."'";
if(($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposaudienciasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoAudiencia='".$tiposaudienciasDto->getcveTipoAudiencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposaudienciasDTO();
$tmp->setcveTipoAudiencia($tiposaudienciasDto->getcveTipoAudiencia());
$tmp = $this->selectTiposaudiencias($tmp,"",$this->_proveedor);
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
public function deleteTiposaudiencias($tiposaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposaudiencias  WHERE cveTipoAudiencia='".$tiposaudienciasDto->getcveTipoAudiencia()."'";
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
public function selectTiposaudiencias($tiposaudienciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoAudiencia,desTipoAudiencia,activo,fechaRegistro,fechaActualizacion FROM tbltiposaudiencias ";
if(($tiposaudienciasDto->getcveTipoAudiencia()!="") ||($tiposaudienciasDto->getdesTipoAudiencia()!="") ||($tiposaudienciasDto->getactivo()!="") ||($tiposaudienciasDto->getfechaRegistro()!="") ||($tiposaudienciasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposaudienciasDto->getcveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia='".$tiposaudienciasDto->getCveTipoAudiencia()."'";
if(($tiposaudienciasDto->getDesTipoAudiencia()!="") ||($tiposaudienciasDto->getActivo()!="") ||($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposaudienciasDto->getdesTipoAudiencia()!=""){
$sql.="desTipoAudiencia='".$tiposaudienciasDto->getDesTipoAudiencia()."'";
if(($tiposaudienciasDto->getActivo()!="") ||($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposaudienciasDto->getactivo()!=""){
$sql.="activo='".$tiposaudienciasDto->getActivo()."'";
if(($tiposaudienciasDto->getFechaRegistro()!="") ||($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposaudienciasDto->getFechaRegistro()."'";
if(($tiposaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposaudienciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposaudienciasDTO();
$tmp[$contador]->setCveTipoAudiencia($row["cveTipoAudiencia"]);
$tmp[$contador]->setDesTipoAudiencia($row["desTipoAudiencia"]);
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