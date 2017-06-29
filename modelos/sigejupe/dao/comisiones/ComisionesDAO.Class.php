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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ComisionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertComisiones($comisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcomisiones(";
if($comisionesDto->getcveComision()!=""){
$sql.="cveComision";
if(($comisionesDto->getDesComision()!="") ||($comisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($comisionesDto->getdesComision()!=""){
$sql.="desComision";
if(($comisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($comisionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($comisionesDto->getcveComision()!=""){
$sql.="'".$comisionesDto->getcveComision()."'";
if(($comisionesDto->getDesComision()!="") ||($comisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($comisionesDto->getdesComision()!=""){
$sql.="'".$comisionesDto->getdesComision()."'";
if(($comisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($comisionesDto->getactivo()!=""){
$sql.="'".$comisionesDto->getactivo()."'";
}
if($comisionesDto->getfechaRegistro()!=""){
}
if($comisionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ComisionesDTO();
$tmp->setcveComision($this->_proveedor->lastID());
$tmp = $this->selectComisiones($tmp,"",$this->_proveedor);
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
public function updateComisiones($comisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcomisiones SET ";
if($comisionesDto->getcveComision()!=""){
$sql.="cveComision='".$comisionesDto->getcveComision()."'";
if(($comisionesDto->getDesComision()!="") ||($comisionesDto->getActivo()!="") ||($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($comisionesDto->getdesComision()!=""){
$sql.="desComision='".$comisionesDto->getdesComision()."'";
if(($comisionesDto->getActivo()!="") ||($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($comisionesDto->getactivo()!=""){
$sql.="activo='".$comisionesDto->getactivo()."'";
if(($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($comisionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$comisionesDto->getfechaRegistro()."'";
if(($comisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($comisionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$comisionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveComision='".$comisionesDto->getcveComision()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ComisionesDTO();
$tmp->setcveComision($comisionesDto->getcveComision());
$tmp = $this->selectComisiones($tmp,"",$this->_proveedor);
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
public function deleteComisiones($comisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcomisiones  WHERE cveComision='".$comisionesDto->getcveComision()."'";
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
public function selectComisiones($comisionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveComision,desComision,activo,fechaRegistro,fechaActualizacion FROM tblcomisiones ";
if(($comisionesDto->getcveComision()!="") ||($comisionesDto->getdesComision()!="") ||($comisionesDto->getactivo()!="") ||($comisionesDto->getfechaRegistro()!="") ||($comisionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($comisionesDto->getcveComision()!=""){
$sql.="cveComision='".$comisionesDto->getCveComision()."'";
if(($comisionesDto->getDesComision()!="") ||($comisionesDto->getActivo()!="") ||($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($comisionesDto->getdesComision()!=""){
$sql.="desComision='".$comisionesDto->getDesComision()."'";
if(($comisionesDto->getActivo()!="") ||($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($comisionesDto->getactivo()!=""){
$sql.="activo='".$comisionesDto->getActivo()."'";
if(($comisionesDto->getFechaRegistro()!="") ||($comisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($comisionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$comisionesDto->getFechaRegistro()."'";
if(($comisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($comisionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$comisionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ComisionesDTO();
$tmp[$contador]->setCveComision($row["cveComision"]);
$tmp[$contador]->setDesComision($row["desComision"]);
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