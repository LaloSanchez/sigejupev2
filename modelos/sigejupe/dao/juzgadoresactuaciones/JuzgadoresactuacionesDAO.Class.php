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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadoresactuaciones/JuzgadoresactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresactuacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertJuzgadoresactuaciones($juzgadoresactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbljuzgadoresactuaciones(";
if($juzgadoresactuacionesDto->getIdJuzgadorActuacion()!=""){
$sql.="idJuzgadorActuacion";
if(($juzgadoresactuacionesDto->getIdActuacion()!="") ||($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getCveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador";
if(($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($juzgadoresactuacionesDto->getIdJuzgadorActuacion()!=""){
$sql.="'".$juzgadoresactuacionesDto->getIdJuzgadorActuacion()."'";
if(($juzgadoresactuacionesDto->getIdActuacion()!="") ||($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdActuacion()!=""){
$sql.="'".$juzgadoresactuacionesDto->getIdActuacion()."'";
if(($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdJuzgador()!=""){
$sql.="'".$juzgadoresactuacionesDto->getIdJuzgador()."'";
if(($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getCveFuncionJuzgador()!=""){
$sql.="'".$juzgadoresactuacionesDto->getCveFuncionJuzgador()."'";
if(($juzgadoresactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getActivo()!=""){
$sql.="'".$juzgadoresactuacionesDto->getActivo()."'";
}
if($juzgadoresactuacionesDto->getFechaRegistro()!=""){
}
if($juzgadoresactuacionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresactuacionesDTO();
$tmp->setidJuzgadorActuacion($this->_proveedor->lastID());
$tmp = $this->selectJuzgadoresactuaciones($tmp,"",$this->_proveedor);
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
public function updateJuzgadoresactuaciones($juzgadoresactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbljuzgadoresactuaciones SET ";
if($juzgadoresactuacionesDto->getIdJuzgadorActuacion()!=""){
$sql.="idJuzgadorActuacion='".$juzgadoresactuacionesDto->getIdJuzgadorActuacion()."'";
if(($juzgadoresactuacionesDto->getIdActuacion()!="") ||($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$juzgadoresactuacionesDto->getIdActuacion()."'";
if(($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresactuacionesDto->getIdJuzgador()."'";
if(($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getCveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador='".$juzgadoresactuacionesDto->getCveFuncionJuzgador()."'";
if(($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getActivo()!=""){
$sql.="activo='".$juzgadoresactuacionesDto->getActivo()."'";
if(($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresactuacionesDto->getFechaRegistro()."'";
if(($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresactuacionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idJuzgadorActuacion='".$juzgadoresactuacionesDto->getIdJuzgadorActuacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresactuacionesDTO();
$tmp->setidJuzgadorActuacion($juzgadoresactuacionesDto->getIdJuzgadorActuacion());
$tmp = $this->selectJuzgadoresactuaciones($tmp,"",$this->_proveedor);
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
public function deleteJuzgadoresactuaciones($juzgadoresactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbljuzgadoresactuaciones  WHERE idJuzgadorActuacion='".$juzgadoresactuacionesDto->getIdJuzgadorActuacion()."'";
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
public function selectJuzgadoresactuaciones($juzgadoresactuacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idJuzgadorActuacion,idActuacion,idJuzgador,cveFuncionJuzgador,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadoresactuaciones ";
if(($juzgadoresactuacionesDto->getIdJuzgadorActuacion()!="") ||($juzgadoresactuacionesDto->getIdActuacion()!="") ||($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($juzgadoresactuacionesDto->getIdJuzgadorActuacion()!=""){
$sql.="idJuzgadorActuacion='".$juzgadoresactuacionesDto->getIdJuzgadorActuacion()."'";
if(($juzgadoresactuacionesDto->getIdActuacion()!="") ||($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$juzgadoresactuacionesDto->getIdActuacion()."'";
if(($juzgadoresactuacionesDto->getIdJuzgador()!="") ||($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresactuacionesDto->getIdJuzgador()."'";
if(($juzgadoresactuacionesDto->getCveFuncionJuzgador()!="") ||($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getCveFuncionJuzgador()!=""){
$sql.="cveFuncionJuzgador='".$juzgadoresactuacionesDto->getCveFuncionJuzgador()."'";
if(($juzgadoresactuacionesDto->getActivo()!="") ||($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getActivo()!=""){
$sql.="activo='".$juzgadoresactuacionesDto->getActivo()."'";
if(($juzgadoresactuacionesDto->getFechaRegistro()!="") ||($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresactuacionesDto->getFechaRegistro()."'";
if(($juzgadoresactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresactuacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new JuzgadoresactuacionesDTO();
$tmp[$contador]->setIdJuzgadorActuacion($row["idJuzgadorActuacion"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
$tmp[$contador]->setCveFuncionJuzgador($row["cveFuncionJuzgador"]);
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