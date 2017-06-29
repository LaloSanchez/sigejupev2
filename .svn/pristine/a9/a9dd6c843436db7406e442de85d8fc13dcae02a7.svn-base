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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposbeneficioses/TiposbeneficiosesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposbeneficiosesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposbeneficioses($tiposbeneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposbeneficioses(";
if($tiposbeneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES";
if(($tiposbeneficiosesDto->getDesTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getDesTipoBeneficioES()!=""){
$sql.="desTipoBeneficioES";
if(($tiposbeneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposbeneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="'".$tiposbeneficiosesDto->getCveTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getDesTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getDesTipoBeneficioES()!=""){
$sql.="'".$tiposbeneficiosesDto->getDesTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getActivo()!=""){
$sql.="'".$tiposbeneficiosesDto->getActivo()."'";
}
if($tiposbeneficiosesDto->getFechaRegistro()!=""){
}
if($tiposbeneficiosesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposbeneficiosesDTO();
$tmp->setcveTipoBeneficioES($this->_proveedor->lastID());
$tmp = $this->selectTiposbeneficioses($tmp,"",$this->_proveedor);
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
public function updateTiposbeneficioses($tiposbeneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposbeneficioses SET ";
if($tiposbeneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES='".$tiposbeneficiosesDto->getCveTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getDesTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getActivo()!="") ||($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getDesTipoBeneficioES()!=""){
$sql.="desTipoBeneficioES='".$tiposbeneficiosesDto->getDesTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getActivo()!="") ||($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getActivo()!=""){
$sql.="activo='".$tiposbeneficiosesDto->getActivo()."'";
if(($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposbeneficiosesDto->getFechaRegistro()."'";
if(($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposbeneficiosesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposbeneficiosesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoBeneficioES='".$tiposbeneficiosesDto->getCveTipoBeneficioES()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposbeneficiosesDTO();
$tmp->setcveTipoBeneficioES($tiposbeneficiosesDto->getCveTipoBeneficioES());
$tmp = $this->selectTiposbeneficioses($tmp,"",$this->_proveedor);
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
public function deleteTiposbeneficioses($tiposbeneficiosesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposbeneficioses  WHERE cveTipoBeneficioES='".$tiposbeneficiosesDto->getCveTipoBeneficioES()."'";
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
public function selectTiposbeneficioses($tiposbeneficiosesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoBeneficioES,desTipoBeneficioES,activo,fechaRegistro,fechaActualizacion FROM tbltiposbeneficioses ";
if(($tiposbeneficiosesDto->getCveTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getDesTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getActivo()!="") ||($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposbeneficiosesDto->getCveTipoBeneficioES()!=""){
$sql.="cveTipoBeneficioES='".$tiposbeneficiosesDto->getCveTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getDesTipoBeneficioES()!="") ||($tiposbeneficiosesDto->getActivo()!="") ||($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposbeneficiosesDto->getDesTipoBeneficioES()!=""){
$sql.="desTipoBeneficioES='".$tiposbeneficiosesDto->getDesTipoBeneficioES()."'";
if(($tiposbeneficiosesDto->getActivo()!="") ||($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposbeneficiosesDto->getActivo()!=""){
$sql.="activo='".$tiposbeneficiosesDto->getActivo()."'";
if(($tiposbeneficiosesDto->getFechaRegistro()!="") ||($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposbeneficiosesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposbeneficiosesDto->getFechaRegistro()."'";
if(($tiposbeneficiosesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposbeneficiosesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposbeneficiosesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposbeneficiosesDTO();
$tmp[$contador]->setCveTipoBeneficioES($row["cveTipoBeneficioES"]);
$tmp[$contador]->setDesTipoBeneficioES($row["desTipoBeneficioES"]);
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