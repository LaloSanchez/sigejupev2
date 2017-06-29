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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NivelesinstruccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNivelesinstrucciones($nivelesinstruccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnivelesinstrucciones(";
if($nivelesinstruccionesDto->getcveNivelInstruccion()!=""){
$sql.="cveNivelInstruccion";
if(($nivelesinstruccionesDto->getDesNivelInstruccion()!="") ||($nivelesinstruccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getdesNivelInstruccion()!=""){
$sql.="desNivelInstruccion";
if(($nivelesinstruccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($nivelesinstruccionesDto->getcveNivelInstruccion()!=""){
$sql.="'".$nivelesinstruccionesDto->getcveNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getDesNivelInstruccion()!="") ||($nivelesinstruccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getdesNivelInstruccion()!=""){
$sql.="'".$nivelesinstruccionesDto->getdesNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getactivo()!=""){
$sql.="'".$nivelesinstruccionesDto->getactivo()."'";
}
if($nivelesinstruccionesDto->getfechaRegistro()!=""){
}
if($nivelesinstruccionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NivelesinstruccionesDTO();
$tmp->setcveNivelInstruccion($this->_proveedor->lastID());
$tmp = $this->selectNivelesinstrucciones($tmp,"",$this->_proveedor);
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
public function updateNivelesinstrucciones($nivelesinstruccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnivelesinstrucciones SET ";
if($nivelesinstruccionesDto->getcveNivelInstruccion()!=""){
$sql.="cveNivelInstruccion='".$nivelesinstruccionesDto->getcveNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getDesNivelInstruccion()!="") ||($nivelesinstruccionesDto->getActivo()!="") ||($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getdesNivelInstruccion()!=""){
$sql.="desNivelInstruccion='".$nivelesinstruccionesDto->getdesNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getActivo()!="") ||($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getactivo()!=""){
$sql.="activo='".$nivelesinstruccionesDto->getactivo()."'";
if(($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$nivelesinstruccionesDto->getfechaRegistro()."'";
if(($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nivelesinstruccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nivelesinstruccionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveNivelInstruccion='".$nivelesinstruccionesDto->getcveNivelInstruccion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NivelesinstruccionesDTO();
$tmp->setcveNivelInstruccion($nivelesinstruccionesDto->getcveNivelInstruccion());
$tmp = $this->selectNivelesinstrucciones($tmp,"",$this->_proveedor);
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
public function deleteNivelesinstrucciones($nivelesinstruccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnivelesinstrucciones  WHERE cveNivelInstruccion='".$nivelesinstruccionesDto->getcveNivelInstruccion()."'";
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
public function selectNivelesinstrucciones($nivelesinstruccionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveNivelInstruccion,desNivelInstruccion,activo,fechaRegistro,fechaActualizacion FROM tblnivelesinstrucciones ";
if(($nivelesinstruccionesDto->getcveNivelInstruccion()!="") ||($nivelesinstruccionesDto->getdesNivelInstruccion()!="") ||($nivelesinstruccionesDto->getactivo()!="") ||($nivelesinstruccionesDto->getfechaRegistro()!="") ||($nivelesinstruccionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($nivelesinstruccionesDto->getcveNivelInstruccion()!=""){
$sql.="cveNivelInstruccion='".$nivelesinstruccionesDto->getCveNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getDesNivelInstruccion()!="") ||($nivelesinstruccionesDto->getActivo()!="") ||($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nivelesinstruccionesDto->getdesNivelInstruccion()!=""){
$sql.="desNivelInstruccion='".$nivelesinstruccionesDto->getDesNivelInstruccion()."'";
if(($nivelesinstruccionesDto->getActivo()!="") ||($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nivelesinstruccionesDto->getactivo()!=""){
$sql.="activo='".$nivelesinstruccionesDto->getActivo()."'";
if(($nivelesinstruccionesDto->getFechaRegistro()!="") ||($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nivelesinstruccionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$nivelesinstruccionesDto->getFechaRegistro()."'";
if(($nivelesinstruccionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nivelesinstruccionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nivelesinstruccionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new NivelesinstruccionesDTO();
$tmp[$contador]->setCveNivelInstruccion($row["cveNivelInstruccion"]);
$tmp[$contador]->setDesNivelInstruccion($row["desNivelInstruccion"]);
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