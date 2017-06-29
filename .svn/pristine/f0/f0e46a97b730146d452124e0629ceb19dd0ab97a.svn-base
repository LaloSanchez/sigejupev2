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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposordenes/TiposordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposordenes($tiposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposordenes(";
if($tiposordenesDto->getcveTipoOrden()!=""){
$sql.="cveTipoOrden";
if(($tiposordenesDto->getDesTipoOrden()!="") ||($tiposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getdesTipoOrden()!=""){
$sql.="desTipoOrden";
if(($tiposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposordenesDto->getcveTipoOrden()!=""){
$sql.="'".$tiposordenesDto->getcveTipoOrden()."'";
if(($tiposordenesDto->getDesTipoOrden()!="") ||($tiposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getdesTipoOrden()!=""){
$sql.="'".$tiposordenesDto->getdesTipoOrden()."'";
if(($tiposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getactivo()!=""){
$sql.="'".$tiposordenesDto->getactivo()."'";
}
if($tiposordenesDto->getfechaRegistro()!=""){
}
if($tiposordenesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposordenesDTO();
$tmp->setcveTipoOrden($this->_proveedor->lastID());
$tmp = $this->selectTiposordenes($tmp,"",$this->_proveedor);
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
public function updateTiposordenes($tiposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposordenes SET ";
if($tiposordenesDto->getcveTipoOrden()!=""){
$sql.="cveTipoOrden='".$tiposordenesDto->getcveTipoOrden()."'";
if(($tiposordenesDto->getDesTipoOrden()!="") ||($tiposordenesDto->getActivo()!="") ||($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getdesTipoOrden()!=""){
$sql.="desTipoOrden='".$tiposordenesDto->getdesTipoOrden()."'";
if(($tiposordenesDto->getActivo()!="") ||($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getactivo()!=""){
$sql.="activo='".$tiposordenesDto->getactivo()."'";
if(($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposordenesDto->getfechaRegistro()."'";
if(($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposordenesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposordenesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoOrden='".$tiposordenesDto->getcveTipoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposordenesDTO();
$tmp->setcveTipoOrden($tiposordenesDto->getcveTipoOrden());
$tmp = $this->selectTiposordenes($tmp,"",$this->_proveedor);
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
public function deleteTiposordenes($tiposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposordenes  WHERE cveTipoOrden='".$tiposordenesDto->getcveTipoOrden()."'";
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
public function selectTiposordenes($tiposordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoOrden,desTipoOrden,activo,fechaRegistro,fechaActualizacion FROM tbltiposordenes ";
if(($tiposordenesDto->getcveTipoOrden()!="") ||($tiposordenesDto->getdesTipoOrden()!="") ||($tiposordenesDto->getactivo()!="") ||($tiposordenesDto->getfechaRegistro()!="") ||($tiposordenesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposordenesDto->getcveTipoOrden()!=""){
$sql.="cveTipoOrden='".$tiposordenesDto->getCveTipoOrden()."'";
if(($tiposordenesDto->getDesTipoOrden()!="") ||($tiposordenesDto->getActivo()!="") ||($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposordenesDto->getdesTipoOrden()!=""){
$sql.="desTipoOrden='".$tiposordenesDto->getDesTipoOrden()."'";
if(($tiposordenesDto->getActivo()!="") ||($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposordenesDto->getactivo()!=""){
$sql.="activo='".$tiposordenesDto->getActivo()."'";
if(($tiposordenesDto->getFechaRegistro()!="") ||($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposordenesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposordenesDto->getFechaRegistro()."'";
if(($tiposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposordenesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposordenesDTO();
$tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
$tmp[$contador]->setDesTipoOrden($row["desTipoOrden"]);
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