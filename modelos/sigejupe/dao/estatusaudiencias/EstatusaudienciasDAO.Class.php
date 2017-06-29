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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatusaudienciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatusaudiencias($estatusaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatusaudiencias(";
if($estatusaudienciasDto->getcveEstatusAudiencia()!=""){
$sql.="cveEstatusAudiencia";
if(($estatusaudienciasDto->getDesEstatusAudiencia()!="") ||($estatusaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getdesEstatusAudiencia()!=""){
$sql.="desEstatusAudiencia";
if(($estatusaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatusaudienciasDto->getcveEstatusAudiencia()!=""){
$sql.="'".$estatusaudienciasDto->getcveEstatusAudiencia()."'";
if(($estatusaudienciasDto->getDesEstatusAudiencia()!="") ||($estatusaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getdesEstatusAudiencia()!=""){
$sql.="'".$estatusaudienciasDto->getdesEstatusAudiencia()."'";
if(($estatusaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getactivo()!=""){
$sql.="'".$estatusaudienciasDto->getactivo()."'";
}
if($estatusaudienciasDto->getfechaRegistro()!=""){
}
if($estatusaudienciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusaudienciasDTO();
$tmp->setcveEstatusAudiencia($this->_proveedor->lastID());
$tmp = $this->selectEstatusaudiencias($tmp,"",$this->_proveedor);
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
public function updateEstatusaudiencias($estatusaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatusaudiencias SET ";
if($estatusaudienciasDto->getcveEstatusAudiencia()!=""){
$sql.="cveEstatusAudiencia='".$estatusaudienciasDto->getcveEstatusAudiencia()."'";
if(($estatusaudienciasDto->getDesEstatusAudiencia()!="") ||($estatusaudienciasDto->getActivo()!="") ||($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getdesEstatusAudiencia()!=""){
$sql.="desEstatusAudiencia='".$estatusaudienciasDto->getdesEstatusAudiencia()."'";
if(($estatusaudienciasDto->getActivo()!="") ||($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getactivo()!=""){
$sql.="activo='".$estatusaudienciasDto->getactivo()."'";
if(($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusaudienciasDto->getfechaRegistro()."'";
if(($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusaudienciasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusAudiencia='".$estatusaudienciasDto->getcveEstatusAudiencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusaudienciasDTO();
$tmp->setcveEstatusAudiencia($estatusaudienciasDto->getcveEstatusAudiencia());
$tmp = $this->selectEstatusaudiencias($tmp,"",$this->_proveedor);
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
public function deleteEstatusaudiencias($estatusaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatusaudiencias  WHERE cveEstatusAudiencia='".$estatusaudienciasDto->getcveEstatusAudiencia()."'";
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
public function selectEstatusaudiencias($estatusaudienciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusAudiencia,desEstatusAudiencia,activo,fechaRegistro,fechaActualizacion FROM tblestatusaudiencias ";
if(($estatusaudienciasDto->getcveEstatusAudiencia()!="") ||($estatusaudienciasDto->getdesEstatusAudiencia()!="") ||($estatusaudienciasDto->getactivo()!="") ||($estatusaudienciasDto->getfechaRegistro()!="") ||($estatusaudienciasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatusaudienciasDto->getcveEstatusAudiencia()!=""){
$sql.="cveEstatusAudiencia='".$estatusaudienciasDto->getCveEstatusAudiencia()."'";
if(($estatusaudienciasDto->getDesEstatusAudiencia()!="") ||($estatusaudienciasDto->getActivo()!="") ||($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusaudienciasDto->getdesEstatusAudiencia()!=""){
$sql.="desEstatusAudiencia='".$estatusaudienciasDto->getDesEstatusAudiencia()."'";
if(($estatusaudienciasDto->getActivo()!="") ||($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusaudienciasDto->getactivo()!=""){
$sql.="activo='".$estatusaudienciasDto->getActivo()."'";
if(($estatusaudienciasDto->getFechaRegistro()!="") ||($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusaudienciasDto->getFechaRegistro()."'";
if(($estatusaudienciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusaudienciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatusaudienciasDTO();
$tmp[$contador]->setCveEstatusAudiencia($row["cveEstatusAudiencia"]);
$tmp[$contador]->setDesEstatusAudiencia($row["desEstatusAudiencia"]);
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