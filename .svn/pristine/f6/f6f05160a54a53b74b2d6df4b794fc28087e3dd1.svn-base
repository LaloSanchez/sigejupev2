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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class FuncionesjuzgadoresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertFuncionesjuzgadores($funcionesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblfuncionesjuzgadores(";
if($funcionesjuzgadoresDto->getcveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador";
if(($funcionesjuzgadoresDto->getDesFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getdesFuncionJuzgador()!=""){
$sql.="desFuncionJuzgador";
if(($funcionesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($funcionesjuzgadoresDto->getcveFuncionJuzgador()!=""){
$sql.="'".$funcionesjuzgadoresDto->getcveFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getDesFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getdesFuncionJuzgador()!=""){
$sql.="'".$funcionesjuzgadoresDto->getdesFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getactivo()!=""){
$sql.="'".$funcionesjuzgadoresDto->getactivo()."'";
}
if($funcionesjuzgadoresDto->getfechaRegistro()!=""){
}
if($funcionesjuzgadoresDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new FuncionesjuzgadoresDTO();
$tmp->setcveFuncionJuzgador($this->_proveedor->lastID());
$tmp = $this->selectFuncionesjuzgadores($tmp,"",$this->_proveedor);
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
public function updateFuncionesjuzgadores($funcionesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblfuncionesjuzgadores SET ";
if($funcionesjuzgadoresDto->getcveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador='".$funcionesjuzgadoresDto->getcveFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getDesFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getActivo()!="") ||($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getdesFuncionJuzgador()!=""){
$sql.="desFuncionJuzgador='".$funcionesjuzgadoresDto->getdesFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getActivo()!="") ||($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$funcionesjuzgadoresDto->getactivo()."'";
if(($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$funcionesjuzgadoresDto->getfechaRegistro()."'";
if(($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($funcionesjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$funcionesjuzgadoresDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveFuncionJuzgador='".$funcionesjuzgadoresDto->getcveFuncionJuzgador()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new FuncionesjuzgadoresDTO();
$tmp->setcveFuncionJuzgador($funcionesjuzgadoresDto->getcveFuncionJuzgador());
$tmp = $this->selectFuncionesjuzgadores($tmp,"",$this->_proveedor);
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
public function deleteFuncionesjuzgadores($funcionesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblfuncionesjuzgadores  WHERE cveFuncionJuzgador='".$funcionesjuzgadoresDto->getcveFuncionJuzgador()."'";
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
public function selectFuncionesjuzgadores($funcionesjuzgadoresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveFuncionJuzgador,desFuncionJuzgador,activo,fechaRegistro,fechaActualizacion FROM tblfuncionesjuzgadores ";
if(($funcionesjuzgadoresDto->getcveFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getdesFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getactivo()!="") ||($funcionesjuzgadoresDto->getfechaRegistro()!="") ||($funcionesjuzgadoresDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($funcionesjuzgadoresDto->getcveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador='".$funcionesjuzgadoresDto->getCveFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getDesFuncionJuzgador()!="") ||($funcionesjuzgadoresDto->getActivo()!="") ||($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($funcionesjuzgadoresDto->getdesFuncionJuzgador()!=""){
$sql.="desFuncionJuzgador='".$funcionesjuzgadoresDto->getDesFuncionJuzgador()."'";
if(($funcionesjuzgadoresDto->getActivo()!="") ||($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($funcionesjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$funcionesjuzgadoresDto->getActivo()."'";
if(($funcionesjuzgadoresDto->getFechaRegistro()!="") ||($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($funcionesjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$funcionesjuzgadoresDto->getFechaRegistro()."'";
if(($funcionesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($funcionesjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$funcionesjuzgadoresDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new FuncionesjuzgadoresDTO();
$tmp[$contador]->setCveFuncionJuzgador($row["cveFuncionJuzgador"]);
$tmp[$contador]->setDesFuncionJuzgador($row["desFuncionJuzgador"]);
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