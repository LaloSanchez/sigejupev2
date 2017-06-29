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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/asignarecursos/AsignarecursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AsignarecursosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAsignarecursos($asignarecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblasignarecursos(";
if($asignarecursosDto->getIdAsignaRecurso()!=""){
$sql.="idAsignaRecurso";
if(($asignarecursosDto->getIdReferencia()!="") ||($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdReferencia()!=""){
$sql.="idReferencia";
if(($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getNumDiscos()!=""){
$sql.="numDiscos";
if(($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($asignarecursosDto->getIdAsignaRecurso()!=""){
$sql.="'".$asignarecursosDto->getIdAsignaRecurso()."'";
if(($asignarecursosDto->getIdReferencia()!="") ||($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdReferencia()!=""){
$sql.="'".$asignarecursosDto->getIdReferencia()."'";
if(($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getNumDiscos()!=""){
$sql.="'".$asignarecursosDto->getNumDiscos()."'";
if(($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdJuzgador()!=""){
$sql.="'".$asignarecursosDto->getIdJuzgador()."'";
if(($asignarecursosDto->getActivo()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getActivo()!=""){
$sql.="'".$asignarecursosDto->getActivo()."'";
}
if($asignarecursosDto->getFechaRegistro()!=""){
}
if($asignarecursosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AsignarecursosDTO();
$tmp->setidAsignaRecurso($this->_proveedor->lastID());
$tmp = $this->selectAsignarecursos($tmp,"",$this->_proveedor);
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
public function updateAsignarecursos($asignarecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblasignarecursos SET ";
if($asignarecursosDto->getIdAsignaRecurso()!=""){
$sql.="idAsignaRecurso='".$asignarecursosDto->getIdAsignaRecurso()."'";
if(($asignarecursosDto->getIdReferencia()!="") ||($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdReferencia()!=""){
$sql.="idReferencia='".$asignarecursosDto->getIdReferencia()."'";
if(($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getNumDiscos()!=""){
$sql.="numDiscos='".$asignarecursosDto->getNumDiscos()."'";
if(($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$asignarecursosDto->getIdJuzgador()."'";
if(($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getActivo()!=""){
$sql.="activo='".$asignarecursosDto->getActivo()."'";
if(($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$asignarecursosDto->getFechaRegistro()."'";
if(($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($asignarecursosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$asignarecursosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idAsignaRecurso='".$asignarecursosDto->getIdAsignaRecurso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AsignarecursosDTO();
$tmp->setidAsignaRecurso($asignarecursosDto->getIdAsignaRecurso());
$tmp = $this->selectAsignarecursos($tmp,"",$this->_proveedor);
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
public function deleteAsignarecursos($asignarecursosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblasignarecursos  WHERE idAsignaRecurso='".$asignarecursosDto->getIdAsignaRecurso()."'";
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
public function selectAsignarecursos($asignarecursosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAsignaRecurso,idReferencia,numDiscos,idJuzgador,activo,fechaRegistro,fechaActualizacion FROM tblasignarecursos ";
if(($asignarecursosDto->getIdAsignaRecurso()!="") ||($asignarecursosDto->getIdReferencia()!="") ||($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($asignarecursosDto->getIdAsignaRecurso()!=""){
$sql.="idAsignaRecurso='".$asignarecursosDto->getIdAsignaRecurso()."'";
if(($asignarecursosDto->getIdReferencia()!="") ||($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getIdReferencia()!=""){
$sql.="idReferencia='".$asignarecursosDto->getIdReferencia()."'";
if(($asignarecursosDto->getNumDiscos()!="") ||($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getNumDiscos()!=""){
$sql.="numDiscos='".$asignarecursosDto->getNumDiscos()."'";
if(($asignarecursosDto->getIdJuzgador()!="") ||($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$asignarecursosDto->getIdJuzgador()."'";
if(($asignarecursosDto->getActivo()!="") ||($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getActivo()!=""){
$sql.="activo='".$asignarecursosDto->getActivo()."'";
if(($asignarecursosDto->getFechaRegistro()!="") ||($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$asignarecursosDto->getFechaRegistro()."'";
if(($asignarecursosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($asignarecursosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$asignarecursosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AsignarecursosDTO();
$tmp[$contador]->setIdAsignaRecurso($row["idAsignaRecurso"]);
$tmp[$contador]->setIdReferencia($row["idReferencia"]);
$tmp[$contador]->setNumDiscos($row["numDiscos"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
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