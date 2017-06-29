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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipostratas/TipostratasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipostratasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipostratas($tipostratasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipostratas(";
if($tipostratasDto->getcveTipoTrata()!=""){
$sql.="cveTipoTrata";
if(($tipostratasDto->getDesTipoTrata()!="") ||($tipostratasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getdesTipoTrata()!=""){
$sql.="desTipoTrata";
if(($tipostratasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipostratasDto->getcveTipoTrata()!=""){
$sql.="'".$tipostratasDto->getcveTipoTrata()."'";
if(($tipostratasDto->getDesTipoTrata()!="") ||($tipostratasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getdesTipoTrata()!=""){
$sql.="'".$tipostratasDto->getdesTipoTrata()."'";
if(($tipostratasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getactivo()!=""){
$sql.="'".$tipostratasDto->getactivo()."'";
}
if($tipostratasDto->getfechaRegistro()!=""){
}
if($tipostratasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipostratasDTO();
$tmp->setcveTipoTrata($this->_proveedor->lastID());
$tmp = $this->selectTipostratas($tmp,"",$this->_proveedor);
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
public function updateTipostratas($tipostratasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipostratas SET ";
if($tipostratasDto->getcveTipoTrata()!=""){
$sql.="cveTipoTrata='".$tipostratasDto->getcveTipoTrata()."'";
if(($tipostratasDto->getDesTipoTrata()!="") ||($tipostratasDto->getActivo()!="") ||($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getdesTipoTrata()!=""){
$sql.="desTipoTrata='".$tipostratasDto->getdesTipoTrata()."'";
if(($tipostratasDto->getActivo()!="") ||($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getactivo()!=""){
$sql.="activo='".$tipostratasDto->getactivo()."'";
if(($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipostratasDto->getfechaRegistro()."'";
if(($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipostratasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipostratasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoTrata='".$tipostratasDto->getcveTipoTrata()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipostratasDTO();
$tmp->setcveTipoTrata($tipostratasDto->getcveTipoTrata());
$tmp = $this->selectTipostratas($tmp,"",$this->_proveedor);
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
public function deleteTipostratas($tipostratasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipostratas  WHERE cveTipoTrata='".$tipostratasDto->getcveTipoTrata()."'";
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
public function selectTipostratas($tipostratasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoTrata,desTipoTrata,activo,fechaRegistro,fechaActualizacion FROM tbltipostratas ";
if(($tipostratasDto->getcveTipoTrata()!="") ||($tipostratasDto->getdesTipoTrata()!="") ||($tipostratasDto->getactivo()!="") ||($tipostratasDto->getfechaRegistro()!="") ||($tipostratasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tipostratasDto->getcveTipoTrata()!=""){
$sql.="cveTipoTrata='".$tipostratasDto->getCveTipoTrata()."'";
if(($tipostratasDto->getDesTipoTrata()!="") ||($tipostratasDto->getActivo()!="") ||($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostratasDto->getdesTipoTrata()!=""){
$sql.="desTipoTrata='".$tipostratasDto->getDesTipoTrata()."'";
if(($tipostratasDto->getActivo()!="") ||($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostratasDto->getactivo()!=""){
$sql.="activo='".$tipostratasDto->getActivo()."'";
if(($tipostratasDto->getFechaRegistro()!="") ||($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostratasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipostratasDto->getFechaRegistro()."'";
if(($tipostratasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipostratasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipostratasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipostratasDTO();
$tmp[$contador]->setCveTipoTrata($row["cveTipoTrata"]);
$tmp[$contador]->setDesTipoTrata($row["desTipoTrata"]);
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