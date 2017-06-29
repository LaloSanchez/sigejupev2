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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/regionesmundiales/RegionesmundialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RegionesmundialesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRegionesmundiales($regionesmundialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblregionesmundiales(";
if($regionesmundialesDto->getcveRegionMundial()!=""){
$sql.="cveRegionMundial";
if(($regionesmundialesDto->getDesRegionMundial()!="") ||($regionesmundialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getdesRegionMundial()!=""){
$sql.="desRegionMundial";
if(($regionesmundialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($regionesmundialesDto->getcveRegionMundial()!=""){
$sql.="'".$regionesmundialesDto->getcveRegionMundial()."'";
if(($regionesmundialesDto->getDesRegionMundial()!="") ||($regionesmundialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getdesRegionMundial()!=""){
$sql.="'".$regionesmundialesDto->getdesRegionMundial()."'";
if(($regionesmundialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getactivo()!=""){
$sql.="'".$regionesmundialesDto->getactivo()."'";
}
if($regionesmundialesDto->getfechaRegistro()!=""){
}
if($regionesmundialesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RegionesmundialesDTO();
$tmp->setcveRegionMundial($this->_proveedor->lastID());
$tmp = $this->selectRegionesmundiales($tmp,"",$this->_proveedor);
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
public function updateRegionesmundiales($regionesmundialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblregionesmundiales SET ";
if($regionesmundialesDto->getcveRegionMundial()!=""){
$sql.="cveRegionMundial='".$regionesmundialesDto->getcveRegionMundial()."'";
if(($regionesmundialesDto->getDesRegionMundial()!="") ||($regionesmundialesDto->getActivo()!="") ||($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getdesRegionMundial()!=""){
$sql.="desRegionMundial='".$regionesmundialesDto->getdesRegionMundial()."'";
if(($regionesmundialesDto->getActivo()!="") ||($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getactivo()!=""){
$sql.="activo='".$regionesmundialesDto->getactivo()."'";
if(($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$regionesmundialesDto->getfechaRegistro()."'";
if(($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($regionesmundialesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$regionesmundialesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveRegionMundial='".$regionesmundialesDto->getcveRegionMundial()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RegionesmundialesDTO();
$tmp->setcveRegionMundial($regionesmundialesDto->getcveRegionMundial());
$tmp = $this->selectRegionesmundiales($tmp,"",$this->_proveedor);
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
public function deleteRegionesmundiales($regionesmundialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblregionesmundiales  WHERE cveRegionMundial='".$regionesmundialesDto->getcveRegionMundial()."'";
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
public function selectRegionesmundiales($regionesmundialesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRegionMundial,desRegionMundial,activo,fechaRegistro,fechaActualizacion FROM tblregionesmundiales ";
if(($regionesmundialesDto->getcveRegionMundial()!="") ||($regionesmundialesDto->getdesRegionMundial()!="") ||($regionesmundialesDto->getactivo()!="") ||($regionesmundialesDto->getfechaRegistro()!="") ||($regionesmundialesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($regionesmundialesDto->getcveRegionMundial()!=""){
$sql.="cveRegionMundial='".$regionesmundialesDto->getCveRegionMundial()."'";
if(($regionesmundialesDto->getDesRegionMundial()!="") ||($regionesmundialesDto->getActivo()!="") ||($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionesmundialesDto->getdesRegionMundial()!=""){
$sql.="desRegionMundial='".$regionesmundialesDto->getDesRegionMundial()."'";
if(($regionesmundialesDto->getActivo()!="") ||($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionesmundialesDto->getactivo()!=""){
$sql.="activo='".$regionesmundialesDto->getActivo()."'";
if(($regionesmundialesDto->getFechaRegistro()!="") ||($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionesmundialesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$regionesmundialesDto->getFechaRegistro()."'";
if(($regionesmundialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($regionesmundialesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$regionesmundialesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RegionesmundialesDTO();
$tmp[$contador]->setCveRegionMundial($row["cveRegionMundial"]);
$tmp[$contador]->setDesRegionMundial($row["desRegionMundial"]);
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