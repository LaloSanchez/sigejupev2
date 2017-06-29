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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipostutoresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipostutores($tipostutoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipostutores(";
if($tipostutoresDto->getcveTipoTutor()!=""){
$sql.="cveTipoTutor";
if(($tipostutoresDto->getDesTipoTutor()!="") ||($tipostutoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getdesTipoTutor()!=""){
$sql.="desTipoTutor";
if(($tipostutoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipostutoresDto->getcveTipoTutor()!=""){
$sql.="'".$tipostutoresDto->getcveTipoTutor()."'";
if(($tipostutoresDto->getDesTipoTutor()!="") ||($tipostutoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getdesTipoTutor()!=""){
$sql.="'".$tipostutoresDto->getdesTipoTutor()."'";
if(($tipostutoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getactivo()!=""){
$sql.="'".$tipostutoresDto->getactivo()."'";
}
if($tipostutoresDto->getfechaRegistro()!=""){
}
if($tipostutoresDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipostutoresDTO();
$tmp->setcveTipoTutor($this->_proveedor->lastID());
$tmp = $this->selectTipostutores($tmp,"",$this->_proveedor);
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
public function updateTipostutores($tipostutoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipostutores SET ";
if($tipostutoresDto->getcveTipoTutor()!=""){
$sql.="cveTipoTutor='".$tipostutoresDto->getcveTipoTutor()."'";
if(($tipostutoresDto->getDesTipoTutor()!="") ||($tipostutoresDto->getActivo()!="") ||($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getdesTipoTutor()!=""){
$sql.="desTipoTutor='".$tipostutoresDto->getdesTipoTutor()."'";
if(($tipostutoresDto->getActivo()!="") ||($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getactivo()!=""){
$sql.="activo='".$tipostutoresDto->getactivo()."'";
if(($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipostutoresDto->getfechaRegistro()."'";
if(($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostutoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipostutoresDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoTutor='".$tipostutoresDto->getcveTipoTutor()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipostutoresDTO();
$tmp->setcveTipoTutor($tipostutoresDto->getcveTipoTutor());
$tmp = $this->selectTipostutores($tmp,"",$this->_proveedor);
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
public function deleteTipostutores($tipostutoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipostutores  WHERE cveTipoTutor='".$tipostutoresDto->getcveTipoTutor()."'";
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
public function selectTipostutores($tipostutoresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoTutor,desTipoTutor,activo,fechaRegistro,fechaActualizacion FROM tbltipostutores ";
if(($tipostutoresDto->getcveTipoTutor()!="") ||($tipostutoresDto->getdesTipoTutor()!="") ||($tipostutoresDto->getactivo()!="") ||($tipostutoresDto->getfechaRegistro()!="") ||($tipostutoresDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tipostutoresDto->getcveTipoTutor()!=""){
$sql.="cveTipoTutor='".$tipostutoresDto->getCveTipoTutor()."'";
if(($tipostutoresDto->getDesTipoTutor()!="") ||($tipostutoresDto->getActivo()!="") ||($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostutoresDto->getdesTipoTutor()!=""){
$sql.="desTipoTutor='".$tipostutoresDto->getDesTipoTutor()."'";
if(($tipostutoresDto->getActivo()!="") ||($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostutoresDto->getactivo()!=""){
$sql.="activo='".$tipostutoresDto->getActivo()."'";
if(($tipostutoresDto->getFechaRegistro()!="") ||($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostutoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipostutoresDto->getFechaRegistro()."'";
if(($tipostutoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostutoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipostutoresDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipostutoresDTO();
$tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
$tmp[$contador]->setDesTipoTutor($row["desTipoTutor"]);
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