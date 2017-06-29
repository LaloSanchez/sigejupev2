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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class InterpretesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertInterpretes($interpretesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblinterpretes(";
if($interpretesDto->getcveInterprete()!=""){
$sql.="cveInterprete";
if(($interpretesDto->getDesInterprete()!="") ||($interpretesDto->getActivo()!="") ){
$sql.=",";
}
}
if($interpretesDto->getdesInterprete()!=""){
$sql.="desInterprete";
if(($interpretesDto->getActivo()!="") ){
$sql.=",";
}
}
if($interpretesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($interpretesDto->getcveInterprete()!=""){
$sql.="'".$interpretesDto->getcveInterprete()."'";
if(($interpretesDto->getDesInterprete()!="") ||($interpretesDto->getActivo()!="") ){
$sql.=",";
}
}
if($interpretesDto->getdesInterprete()!=""){
$sql.="'".$interpretesDto->getdesInterprete()."'";
if(($interpretesDto->getActivo()!="") ){
$sql.=",";
}
}
if($interpretesDto->getactivo()!=""){
$sql.="'".$interpretesDto->getactivo()."'";
}
if($interpretesDto->getfechaRegistro()!=""){
}
if($interpretesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new InterpretesDTO();
$tmp->setcveInterprete($this->_proveedor->lastID());
$tmp = $this->selectInterpretes($tmp,"",$this->_proveedor);
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
public function updateInterpretes($interpretesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblinterpretes SET ";
if($interpretesDto->getcveInterprete()!=""){
$sql.="cveInterprete='".$interpretesDto->getcveInterprete()."'";
if(($interpretesDto->getDesInterprete()!="") ||($interpretesDto->getActivo()!="") ||($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($interpretesDto->getdesInterprete()!=""){
$sql.="desInterprete='".$interpretesDto->getdesInterprete()."'";
if(($interpretesDto->getActivo()!="") ||($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($interpretesDto->getactivo()!=""){
$sql.="activo='".$interpretesDto->getactivo()."'";
if(($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($interpretesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$interpretesDto->getfechaRegistro()."'";
if(($interpretesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($interpretesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$interpretesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveInterprete='".$interpretesDto->getcveInterprete()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new InterpretesDTO();
$tmp->setcveInterprete($interpretesDto->getcveInterprete());
$tmp = $this->selectInterpretes($tmp,"",$this->_proveedor);
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
public function deleteInterpretes($interpretesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblinterpretes  WHERE cveInterprete='".$interpretesDto->getcveInterprete()."'";
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
public function selectInterpretes($interpretesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveInterprete,desInterprete,activo,fechaRegistro,fechaActualizacion FROM tblinterpretes ";
if(($interpretesDto->getcveInterprete()!="") ||($interpretesDto->getdesInterprete()!="") ||($interpretesDto->getactivo()!="") ||($interpretesDto->getfechaRegistro()!="") ||($interpretesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($interpretesDto->getcveInterprete()!=""){
$sql.="cveInterprete='".$interpretesDto->getCveInterprete()."'";
if(($interpretesDto->getDesInterprete()!="") ||($interpretesDto->getActivo()!="") ||($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($interpretesDto->getdesInterprete()!=""){
$sql.="desInterprete='".$interpretesDto->getDesInterprete()."'";
if(($interpretesDto->getActivo()!="") ||($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($interpretesDto->getactivo()!=""){
$sql.="activo='".$interpretesDto->getActivo()."'";
if(($interpretesDto->getFechaRegistro()!="") ||($interpretesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($interpretesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$interpretesDto->getFechaRegistro()."'";
if(($interpretesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($interpretesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$interpretesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new InterpretesDTO();
$tmp[$contador]->setCveInterprete($row["cveInterprete"]);
$tmp[$contador]->setDesInterprete($row["desInterprete"]);
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