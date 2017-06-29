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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposrecursos/TiposrecursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposrecursosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposrecursos($tiposrecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposrecursos(";
if($tiposrecursosDto->getCveRecurso()!=""){
$sql.="cveRecurso";
if(($tiposrecursosDto->getDesRecurso()!="") ||($tiposrecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getDesRecurso()!=""){
$sql.="desRecurso";
if(($tiposrecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposrecursosDto->getCveRecurso()!=""){
$sql.="'".$tiposrecursosDto->getCveRecurso()."'";
if(($tiposrecursosDto->getDesRecurso()!="") ||($tiposrecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getDesRecurso()!=""){
$sql.="'".$tiposrecursosDto->getDesRecurso()."'";
if(($tiposrecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getActivo()!=""){
$sql.="'".$tiposrecursosDto->getActivo()."'";
}
if($tiposrecursosDto->getFechaRegistro()!=""){
}
if($tiposrecursosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposrecursosDTO();
$tmp->setcveRecurso($this->_proveedor->lastID());
$tmp = $this->selectTiposrecursos($tmp,"",$this->_proveedor);
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
public function updateTiposrecursos($tiposrecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposrecursos SET ";
if($tiposrecursosDto->getCveRecurso()!=""){
$sql.="cveRecurso='".$tiposrecursosDto->getCveRecurso()."'";
if(($tiposrecursosDto->getDesRecurso()!="") ||($tiposrecursosDto->getActivo()!="") ||($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getDesRecurso()!=""){
$sql.="desRecurso='".$tiposrecursosDto->getDesRecurso()."'";
if(($tiposrecursosDto->getActivo()!="") ||($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getActivo()!=""){
$sql.="activo='".$tiposrecursosDto->getActivo()."'";
if(($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposrecursosDto->getFechaRegistro()."'";
if(($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposrecursosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposrecursosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveRecurso='".$tiposrecursosDto->getCveRecurso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposrecursosDTO();
$tmp->setcveRecurso($tiposrecursosDto->getCveRecurso());
$tmp = $this->selectTiposrecursos($tmp,"",$this->_proveedor);
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
public function deleteTiposrecursos($tiposrecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposrecursos  WHERE cveRecurso='".$tiposrecursosDto->getCveRecurso()."'";
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
public function selectTiposrecursos($tiposrecursosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRecurso,desRecurso,activo,fechaRegistro,fechaActualizacion FROM tbltiposrecursos ";
if(($tiposrecursosDto->getCveRecurso()!="") ||($tiposrecursosDto->getDesRecurso()!="") ||($tiposrecursosDto->getActivo()!="") ||($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposrecursosDto->getCveRecurso()!=""){
$sql.="cveRecurso='".$tiposrecursosDto->getCveRecurso()."'";
if(($tiposrecursosDto->getDesRecurso()!="") ||($tiposrecursosDto->getActivo()!="") ||($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrecursosDto->getDesRecurso()!=""){
$sql.="desRecurso='".$tiposrecursosDto->getDesRecurso()."'";
if(($tiposrecursosDto->getActivo()!="") ||($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrecursosDto->getActivo()!=""){
$sql.="activo='".$tiposrecursosDto->getActivo()."'";
if(($tiposrecursosDto->getFechaRegistro()!="") ||($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrecursosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposrecursosDto->getFechaRegistro()."'";
if(($tiposrecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposrecursosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposrecursosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposrecursosDTO();
$tmp[$contador]->setCveRecurso($row["cveRecurso"]);
$tmp[$contador]->setDesRecurso(utf8_encode($row["desRecurso"]));
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