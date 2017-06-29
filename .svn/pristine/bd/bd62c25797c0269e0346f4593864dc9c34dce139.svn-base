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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConcursosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConcursos($concursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconcursos(";
if($concursosDto->getcveConcurso()!=""){
$sql.="cveConcurso";
if(($concursosDto->getDesConcurso()!="") ||($concursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($concursosDto->getdesConcurso()!=""){
$sql.="desConcurso";
if(($concursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($concursosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($concursosDto->getcveConcurso()!=""){
$sql.="'".$concursosDto->getcveConcurso()."'";
if(($concursosDto->getDesConcurso()!="") ||($concursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($concursosDto->getdesConcurso()!=""){
$sql.="'".$concursosDto->getdesConcurso()."'";
if(($concursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($concursosDto->getactivo()!=""){
$sql.="'".$concursosDto->getactivo()."'";
}
if($concursosDto->getfechaRegistro()!=""){
}
if($concursosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConcursosDTO();
$tmp->setcveConcurso($this->_proveedor->lastID());
$tmp = $this->selectConcursos($tmp,"",$this->_proveedor);
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
public function updateConcursos($concursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconcursos SET ";
if($concursosDto->getcveConcurso()!=""){
$sql.="cveConcurso='".$concursosDto->getcveConcurso()."'";
if(($concursosDto->getDesConcurso()!="") ||($concursosDto->getActivo()!="") ||($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($concursosDto->getdesConcurso()!=""){
$sql.="desConcurso='".$concursosDto->getdesConcurso()."'";
if(($concursosDto->getActivo()!="") ||($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($concursosDto->getactivo()!=""){
$sql.="activo='".$concursosDto->getactivo()."'";
if(($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($concursosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$concursosDto->getfechaRegistro()."'";
if(($concursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($concursosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$concursosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveConcurso='".$concursosDto->getcveConcurso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConcursosDTO();
$tmp->setcveConcurso($concursosDto->getcveConcurso());
$tmp = $this->selectConcursos($tmp,"",$this->_proveedor);
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
public function deleteConcursos($concursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconcursos  WHERE cveConcurso='".$concursosDto->getcveConcurso()."'";
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
public function selectConcursos($concursosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConcurso,desConcurso,activo,fechaRegistro,fechaActualizacion FROM tblconcursos ";
if(($concursosDto->getcveConcurso()!="") ||($concursosDto->getdesConcurso()!="") ||($concursosDto->getactivo()!="") ||($concursosDto->getfechaRegistro()!="") ||($concursosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($concursosDto->getcveConcurso()!=""){
$sql.="cveConcurso='".$concursosDto->getCveConcurso()."'";
if(($concursosDto->getDesConcurso()!="") ||($concursosDto->getActivo()!="") ||($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($concursosDto->getdesConcurso()!=""){
$sql.="desConcurso='".$concursosDto->getDesConcurso()."'";
if(($concursosDto->getActivo()!="") ||($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($concursosDto->getactivo()!=""){
$sql.="activo='".$concursosDto->getActivo()."'";
if(($concursosDto->getFechaRegistro()!="") ||($concursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($concursosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$concursosDto->getFechaRegistro()."'";
if(($concursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($concursosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$concursosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConcursosDTO();
$tmp[$contador]->setCveConcurso($row["cveConcurso"]);
$tmp[$contador]->setDesConcurso($row["desConcurso"]);
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