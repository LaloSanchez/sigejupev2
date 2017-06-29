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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposreincidencias/TiposreincidenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposreincidenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposreincidencias($tiposreincidenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposreincidencias(";
if($tiposreincidenciasDto->getcveTipoReincidencia()!=""){
$sql.="cveTipoReincidencia";
if(($tiposreincidenciasDto->getDesTipoReincidencia()!="") ||($tiposreincidenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getdesTipoReincidencia()!=""){
$sql.="desTipoReincidencia";
if(($tiposreincidenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposreincidenciasDto->getcveTipoReincidencia()!=""){
$sql.="'".$tiposreincidenciasDto->getcveTipoReincidencia()."'";
if(($tiposreincidenciasDto->getDesTipoReincidencia()!="") ||($tiposreincidenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getdesTipoReincidencia()!=""){
$sql.="'".$tiposreincidenciasDto->getdesTipoReincidencia()."'";
if(($tiposreincidenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getactivo()!=""){
$sql.="'".$tiposreincidenciasDto->getactivo()."'";
}
if($tiposreincidenciasDto->getfechaRegistro()!=""){
}
if($tiposreincidenciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposreincidenciasDTO();
$tmp->setcveTipoReincidencia($this->_proveedor->lastID());
$tmp = $this->selectTiposreincidencias($tmp,"",$this->_proveedor);
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
public function updateTiposreincidencias($tiposreincidenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposreincidencias SET ";
if($tiposreincidenciasDto->getcveTipoReincidencia()!=""){
$sql.="cveTipoReincidencia='".$tiposreincidenciasDto->getcveTipoReincidencia()."'";
if(($tiposreincidenciasDto->getDesTipoReincidencia()!="") ||($tiposreincidenciasDto->getActivo()!="") ||($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getdesTipoReincidencia()!=""){
$sql.="desTipoReincidencia='".$tiposreincidenciasDto->getdesTipoReincidencia()."'";
if(($tiposreincidenciasDto->getActivo()!="") ||($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getactivo()!=""){
$sql.="activo='".$tiposreincidenciasDto->getactivo()."'";
if(($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposreincidenciasDto->getfechaRegistro()."'";
if(($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposreincidenciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposreincidenciasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoReincidencia='".$tiposreincidenciasDto->getcveTipoReincidencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposreincidenciasDTO();
$tmp->setcveTipoReincidencia($tiposreincidenciasDto->getcveTipoReincidencia());
$tmp = $this->selectTiposreincidencias($tmp,"",$this->_proveedor);
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
public function deleteTiposreincidencias($tiposreincidenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposreincidencias  WHERE cveTipoReincidencia='".$tiposreincidenciasDto->getcveTipoReincidencia()."'";
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
public function selectTiposreincidencias($tiposreincidenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoReincidencia,desTipoReincidencia,activo,fechaRegistro,fechaActualizacion FROM tbltiposreincidencias ";
if(($tiposreincidenciasDto->getcveTipoReincidencia()!="") ||($tiposreincidenciasDto->getdesTipoReincidencia()!="") ||($tiposreincidenciasDto->getactivo()!="") ||($tiposreincidenciasDto->getfechaRegistro()!="") ||($tiposreincidenciasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposreincidenciasDto->getcveTipoReincidencia()!=""){
$sql.="cveTipoReincidencia='".$tiposreincidenciasDto->getCveTipoReincidencia()."'";
if(($tiposreincidenciasDto->getDesTipoReincidencia()!="") ||($tiposreincidenciasDto->getActivo()!="") ||($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposreincidenciasDto->getdesTipoReincidencia()!=""){
$sql.="desTipoReincidencia='".$tiposreincidenciasDto->getDesTipoReincidencia()."'";
if(($tiposreincidenciasDto->getActivo()!="") ||($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposreincidenciasDto->getactivo()!=""){
$sql.="activo='".$tiposreincidenciasDto->getActivo()."'";
if(($tiposreincidenciasDto->getFechaRegistro()!="") ||($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposreincidenciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposreincidenciasDto->getFechaRegistro()."'";
if(($tiposreincidenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposreincidenciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposreincidenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposreincidenciasDTO();
$tmp[$contador]->setCveTipoReincidencia($row["cveTipoReincidencia"]);
$tmp[$contador]->setDesTipoReincidencia($row["desTipoReincidencia"]);
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