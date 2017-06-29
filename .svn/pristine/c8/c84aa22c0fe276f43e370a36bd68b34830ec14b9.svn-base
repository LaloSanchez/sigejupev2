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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposlada/TiposladaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposladaDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposlada($tiposladaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposlada(";
if($tiposladaDto->getcveTipoLada()!=""){
$sql.="cveTipoLada";
if(($tiposladaDto->getDesTipoLada()!="") ||($tiposladaDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getdesTipoLada()!=""){
$sql.="desTipoLada";
if(($tiposladaDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposladaDto->getcveTipoLada()!=""){
$sql.="'".$tiposladaDto->getcveTipoLada()."'";
if(($tiposladaDto->getDesTipoLada()!="") ||($tiposladaDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getdesTipoLada()!=""){
$sql.="'".$tiposladaDto->getdesTipoLada()."'";
if(($tiposladaDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getactivo()!=""){
$sql.="'".$tiposladaDto->getactivo()."'";
}
if($tiposladaDto->getfechaRegistro()!=""){
}
if($tiposladaDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposladaDTO();
$tmp->setcveTipoLada($this->_proveedor->lastID());
$tmp = $this->selectTiposlada($tmp,"",$this->_proveedor);
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
public function updateTiposlada($tiposladaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposlada SET ";
if($tiposladaDto->getcveTipoLada()!=""){
$sql.="cveTipoLada='".$tiposladaDto->getcveTipoLada()."'";
if(($tiposladaDto->getDesTipoLada()!="") ||($tiposladaDto->getActivo()!="") ||($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getdesTipoLada()!=""){
$sql.="desTipoLada='".$tiposladaDto->getdesTipoLada()."'";
if(($tiposladaDto->getActivo()!="") ||($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getactivo()!=""){
$sql.="activo='".$tiposladaDto->getactivo()."'";
if(($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposladaDto->getfechaRegistro()."'";
if(($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposladaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposladaDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoLada='".$tiposladaDto->getcveTipoLada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposladaDTO();
$tmp->setcveTipoLada($tiposladaDto->getcveTipoLada());
$tmp = $this->selectTiposlada($tmp,"",$this->_proveedor);
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
public function deleteTiposlada($tiposladaDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposlada  WHERE cveTipoLada='".$tiposladaDto->getcveTipoLada()."'";
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
public function selectTiposlada($tiposladaDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoLada,desTipoLada,activo,fechaRegistro,fechaActualizacion FROM tbltiposlada ";
if(($tiposladaDto->getcveTipoLada()!="") ||($tiposladaDto->getdesTipoLada()!="") ||($tiposladaDto->getactivo()!="") ||($tiposladaDto->getfechaRegistro()!="") ||($tiposladaDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposladaDto->getcveTipoLada()!=""){
$sql.="cveTipoLada='".$tiposladaDto->getCveTipoLada()."'";
if(($tiposladaDto->getDesTipoLada()!="") ||($tiposladaDto->getActivo()!="") ||($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposladaDto->getdesTipoLada()!=""){
$sql.="desTipoLada='".$tiposladaDto->getDesTipoLada()."'";
if(($tiposladaDto->getActivo()!="") ||($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposladaDto->getactivo()!=""){
$sql.="activo='".$tiposladaDto->getActivo()."'";
if(($tiposladaDto->getFechaRegistro()!="") ||($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposladaDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposladaDto->getFechaRegistro()."'";
if(($tiposladaDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposladaDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposladaDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposladaDTO();
$tmp[$contador]->setCveTipoLada($row["cveTipoLada"]);
$tmp[$contador]->setDesTipoLada($row["desTipoLada"]);
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