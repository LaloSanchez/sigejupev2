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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposautos/TiposautosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposautosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposautos($tiposautosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposautos(";
if($tiposautosDto->getcveTipoAuto()!=""){
$sql.="cveTipoAuto";
if(($tiposautosDto->getDesTipoAuto()!="") ||($tiposautosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getdesTipoAuto()!=""){
$sql.="desTipoAuto";
if(($tiposautosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposautosDto->getcveTipoAuto()!=""){
$sql.="'".$tiposautosDto->getcveTipoAuto()."'";
if(($tiposautosDto->getDesTipoAuto()!="") ||($tiposautosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getdesTipoAuto()!=""){
$sql.="'".$tiposautosDto->getdesTipoAuto()."'";
if(($tiposautosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getactivo()!=""){
$sql.="'".$tiposautosDto->getactivo()."'";
}
if($tiposautosDto->getfechaRegistro()!=""){
}
if($tiposautosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposautosDTO();
$tmp->setcveTipoAuto($this->_proveedor->lastID());
$tmp = $this->selectTiposautos($tmp,"",$this->_proveedor);
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
public function updateTiposautos($tiposautosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposautos SET ";
if($tiposautosDto->getcveTipoAuto()!=""){
$sql.="cveTipoAuto='".$tiposautosDto->getcveTipoAuto()."'";
if(($tiposautosDto->getDesTipoAuto()!="") ||($tiposautosDto->getActivo()!="") ||($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getdesTipoAuto()!=""){
$sql.="desTipoAuto='".$tiposautosDto->getdesTipoAuto()."'";
if(($tiposautosDto->getActivo()!="") ||($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getactivo()!=""){
$sql.="activo='".$tiposautosDto->getactivo()."'";
if(($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposautosDto->getfechaRegistro()."'";
if(($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposautosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposautosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoAuto='".$tiposautosDto->getcveTipoAuto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposautosDTO();
$tmp->setcveTipoAuto($tiposautosDto->getcveTipoAuto());
$tmp = $this->selectTiposautos($tmp,"",$this->_proveedor);
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
public function deleteTiposautos($tiposautosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposautos  WHERE cveTipoAuto='".$tiposautosDto->getcveTipoAuto()."'";
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
public function selectTiposautos($tiposautosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoAuto,desTipoAuto,activo,fechaRegistro,fechaActualizacion FROM tbltiposautos ";
if(($tiposautosDto->getcveTipoAuto()!="") ||($tiposautosDto->getdesTipoAuto()!="") ||($tiposautosDto->getactivo()!="") ||($tiposautosDto->getfechaRegistro()!="") ||($tiposautosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposautosDto->getcveTipoAuto()!=""){
$sql.="cveTipoAuto='".$tiposautosDto->getCveTipoAuto()."'";
if(($tiposautosDto->getDesTipoAuto()!="") ||($tiposautosDto->getActivo()!="") ||($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposautosDto->getdesTipoAuto()!=""){
$sql.="desTipoAuto='".$tiposautosDto->getDesTipoAuto()."'";
if(($tiposautosDto->getActivo()!="") ||($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposautosDto->getactivo()!=""){
$sql.="activo='".$tiposautosDto->getActivo()."'";
if(($tiposautosDto->getFechaRegistro()!="") ||($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposautosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposautosDto->getFechaRegistro()."'";
if(($tiposautosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposautosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposautosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposautosDTO();
$tmp[$contador]->setCveTipoAuto($row["cveTipoAuto"]);
$tmp[$contador]->setDesTipoAuto($row["desTipoAuto"]);
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