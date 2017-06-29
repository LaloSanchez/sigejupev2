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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/naturalezas/NaturalezasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NaturalezasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNaturalezas($naturalezasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnaturalezas(";
if($naturalezasDto->getcveNaturaleza()!=""){
$sql.="cveNaturaleza";
if(($naturalezasDto->getDesNaturaleza()!="") ||($naturalezasDto->getActivo()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getdesNaturaleza()!=""){
$sql.="desNaturaleza";
if(($naturalezasDto->getActivo()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($naturalezasDto->getcveNaturaleza()!=""){
$sql.="'".$naturalezasDto->getcveNaturaleza()."'";
if(($naturalezasDto->getDesNaturaleza()!="") ||($naturalezasDto->getActivo()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getdesNaturaleza()!=""){
$sql.="'".$naturalezasDto->getdesNaturaleza()."'";
if(($naturalezasDto->getActivo()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getactivo()!=""){
$sql.="'".$naturalezasDto->getactivo()."'";
}
if($naturalezasDto->getfechaRegistro()!=""){
}
if($naturalezasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NaturalezasDTO();
$tmp->setcveNaturaleza($this->_proveedor->lastID());
$tmp = $this->selectNaturalezas($tmp,"",$this->_proveedor);
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
public function updateNaturalezas($naturalezasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnaturalezas SET ";
if($naturalezasDto->getcveNaturaleza()!=""){
$sql.="cveNaturaleza='".$naturalezasDto->getcveNaturaleza()."'";
if(($naturalezasDto->getDesNaturaleza()!="") ||($naturalezasDto->getActivo()!="") ||($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getdesNaturaleza()!=""){
$sql.="desNaturaleza='".$naturalezasDto->getdesNaturaleza()."'";
if(($naturalezasDto->getActivo()!="") ||($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getactivo()!=""){
$sql.="activo='".$naturalezasDto->getactivo()."'";
if(($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$naturalezasDto->getfechaRegistro()."'";
if(($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($naturalezasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$naturalezasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveNaturaleza='".$naturalezasDto->getcveNaturaleza()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NaturalezasDTO();
$tmp->setcveNaturaleza($naturalezasDto->getcveNaturaleza());
$tmp = $this->selectNaturalezas($tmp,"",$this->_proveedor);
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
public function deleteNaturalezas($naturalezasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnaturalezas  WHERE cveNaturaleza='".$naturalezasDto->getcveNaturaleza()."'";
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
public function selectNaturalezas($naturalezasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveNaturaleza,desNaturaleza,activo,fechaRegistro,fechaActualizacion FROM tblnaturalezas ";
if(($naturalezasDto->getcveNaturaleza()!="") ||($naturalezasDto->getdesNaturaleza()!="") ||($naturalezasDto->getactivo()!="") ||($naturalezasDto->getfechaRegistro()!="") ||($naturalezasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($naturalezasDto->getcveNaturaleza()!=""){
$sql.="cveNaturaleza='".$naturalezasDto->getCveNaturaleza()."'";
if(($naturalezasDto->getDesNaturaleza()!="") ||($naturalezasDto->getActivo()!="") ||($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($naturalezasDto->getdesNaturaleza()!=""){
$sql.="desNaturaleza='".$naturalezasDto->getDesNaturaleza()."'";
if(($naturalezasDto->getActivo()!="") ||($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($naturalezasDto->getactivo()!=""){
$sql.="activo='".$naturalezasDto->getActivo()."'";
if(($naturalezasDto->getFechaRegistro()!="") ||($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($naturalezasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$naturalezasDto->getFechaRegistro()."'";
if(($naturalezasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($naturalezasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$naturalezasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new NaturalezasDTO();
$tmp[$contador]->setCveNaturaleza($row["cveNaturaleza"]);
$tmp[$contador]->setDesNaturaleza($row["desNaturaleza"]);
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