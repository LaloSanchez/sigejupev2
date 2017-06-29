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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposapelantesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposapelantes($tiposapelantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposapelantes(";
if($tiposapelantesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante";
if(($tiposapelantesDto->getDesTipoApelante()!="") ||($tiposapelantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getDesTipoApelante()!=""){
$sql.="desTipoApelante";
if(($tiposapelantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposapelantesDto->getCveTipoApelante()!=""){
$sql.="'".$tiposapelantesDto->getCveTipoApelante()."'";
if(($tiposapelantesDto->getDesTipoApelante()!="") ||($tiposapelantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getDesTipoApelante()!=""){
$sql.="'".$tiposapelantesDto->getDesTipoApelante()."'";
if(($tiposapelantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getActivo()!=""){
$sql.="'".$tiposapelantesDto->getActivo()."'";
}
if($tiposapelantesDto->getFechaRegistro()!=""){
}
if($tiposapelantesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposapelantesDTO();
$tmp->setcveTipoApelante($this->_proveedor->lastID());
$tmp = $this->selectTiposapelantes($tmp,"",$this->_proveedor);
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
public function updateTiposapelantes($tiposapelantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposapelantes SET ";
if($tiposapelantesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante='".$tiposapelantesDto->getCveTipoApelante()."'";
if(($tiposapelantesDto->getDesTipoApelante()!="") ||($tiposapelantesDto->getActivo()!="") ||($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getDesTipoApelante()!=""){
$sql.="desTipoApelante='".$tiposapelantesDto->getDesTipoApelante()."'";
if(($tiposapelantesDto->getActivo()!="") ||($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getActivo()!=""){
$sql.="activo='".$tiposapelantesDto->getActivo()."'";
if(($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposapelantesDto->getFechaRegistro()."'";
if(($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposapelantesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposapelantesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoApelante='".$tiposapelantesDto->getCveTipoApelante()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposapelantesDTO();
$tmp->setcveTipoApelante($tiposapelantesDto->getCveTipoApelante());
$tmp = $this->selectTiposapelantes($tmp,"",$this->_proveedor);
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
public function deleteTiposapelantes($tiposapelantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposapelantes  WHERE cveTipoApelante='".$tiposapelantesDto->getCveTipoApelante()."'";
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
public function selectTiposapelantes($tiposapelantesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoApelante,desTipoApelante,activo,fechaRegistro,fechaActualizacion FROM tbltiposapelantes ";
if(($tiposapelantesDto->getCveTipoApelante()!="") ||($tiposapelantesDto->getDesTipoApelante()!="") ||($tiposapelantesDto->getActivo()!="") ||($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposapelantesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante='".$tiposapelantesDto->getCveTipoApelante()."'";
if(($tiposapelantesDto->getDesTipoApelante()!="") ||($tiposapelantesDto->getActivo()!="") ||($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposapelantesDto->getDesTipoApelante()!=""){
$sql.="desTipoApelante='".$tiposapelantesDto->getDesTipoApelante()."'";
if(($tiposapelantesDto->getActivo()!="") ||($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposapelantesDto->getActivo()!=""){
$sql.="activo='".$tiposapelantesDto->getActivo()."'";
if(($tiposapelantesDto->getFechaRegistro()!="") ||($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposapelantesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposapelantesDto->getFechaRegistro()."'";
if(($tiposapelantesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposapelantesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposapelantesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposapelantesDTO();
$tmp[$contador]->setCveTipoApelante($row["cveTipoApelante"]);
$tmp[$contador]->setDesTipoApelante($row["desTipoApelante"]);
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