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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/personasnotificartradicional/PersonasnotificartradicionalDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PersonasnotificartradicionalDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPersonasnotificartradicional($personasnotificartradicionalDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpersonasnotificartradicional(";
if($personasnotificartradicionalDto->getIdPersonasNotificarT()!=""){
$sql.="idPersonasNotificarT";
if(($personasnotificartradicionalDto->getIdActuacion()!="") ||($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte";
if(($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCveTipoParte()!=""){
$sql.="cveTipoParte";
if(($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaNotificacion()!=""){
$sql.="fechaNotificacion";
if(($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getActivo()!=""){
$sql.="activo";
if(($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaModificacion()!=""){
$sql.="fechaModificacion";
if(($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getInstructivo()!=""){
$sql.="Instructivo";
if(($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCorreo()!=""){
$sql.="Correo";
}
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($personasnotificartradicionalDto->getIdPersonasNotificarT()!=""){
$sql.="'".$personasnotificartradicionalDto->getIdPersonasNotificarT()."'";
if(($personasnotificartradicionalDto->getIdActuacion()!="") ||($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdActuacion()!=""){
$sql.="'".$personasnotificartradicionalDto->getIdActuacion()."'";
if(($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdReferenciaParte()!=""){
$sql.="'".$personasnotificartradicionalDto->getIdReferenciaParte()."'";
if(($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCveTipoParte()!=""){
$sql.="'".$personasnotificartradicionalDto->getCveTipoParte()."'";
if(($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaNotificacion()!=""){
$sql.="'".$personasnotificartradicionalDto->getFechaNotificacion()."'";
if(($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getActivo()!=""){
$sql.="'".$personasnotificartradicionalDto->getActivo()."'";
if(($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaRegistro()!=""){
if(($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaModificacion()!=""){
$sql.="'".$personasnotificartradicionalDto->getFechaModificacion()."'";
if(($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getInstructivo()!=""){
$sql.="'".$personasnotificartradicionalDto->getInstructivo()."'";
if(($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCorreo()!=""){
$sql.="'".$personasnotificartradicionalDto->getCorreo()."'";
}
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasnotificartradicionalDTO();
$tmp->setidPersonasNotificarT($this->_proveedor->lastID());
$tmp = $this->selectPersonasnotificartradicional($tmp,"",$this->_proveedor);
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
public function updatePersonasnotificartradicional($personasnotificartradicionalDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpersonasnotificartradicional SET ";
if($personasnotificartradicionalDto->getIdPersonasNotificarT()!=""){
$sql.="idPersonasNotificarT='".$personasnotificartradicionalDto->getIdPersonasNotificarT()."'";
if(($personasnotificartradicionalDto->getIdActuacion()!="") ||($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdActuacion()!=""){
$sql.="idActuacion='".$personasnotificartradicionalDto->getIdActuacion()."'";
if(($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$personasnotificartradicionalDto->getIdReferenciaParte()."'";
if(($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$personasnotificartradicionalDto->getCveTipoParte()."'";
if(($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaNotificacion()!=""){
$sql.="fechaNotificacion='".$personasnotificartradicionalDto->getFechaNotificacion()."'";
if(($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getActivo()!=""){
$sql.="activo='".$personasnotificartradicionalDto->getActivo()."'";
if(($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$personasnotificartradicionalDto->getFechaRegistro()."'";
if(($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getFechaModificacion()!=""){
$sql.="fechaModificacion='".$personasnotificartradicionalDto->getFechaModificacion()."'";
if(($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getInstructivo()!=""){
$sql.="Instructivo='".$personasnotificartradicionalDto->getInstructivo()."'";
if(($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=",";
}
}
if($personasnotificartradicionalDto->getCorreo()!=""){
$sql.="Correo='".$personasnotificartradicionalDto->getCorreo()."'";
}
$sql.=" WHERE idPersonasNotificarT='".$personasnotificartradicionalDto->getIdPersonasNotificarT()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PersonasnotificartradicionalDTO();
$tmp->setidPersonasNotificarT($personasnotificartradicionalDto->getIdPersonasNotificarT());
$tmp = $this->selectPersonasnotificartradicional($tmp,"",$this->_proveedor);
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
public function deletePersonasnotificartradicional($personasnotificartradicionalDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpersonasnotificartradicional  WHERE idPersonasNotificarT='".$personasnotificartradicionalDto->getIdPersonasNotificarT()."'";
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
public function selectPersonasnotificartradicional($personasnotificartradicionalDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idPersonasNotificarT,idActuacion,idReferenciaParte,cveTipoParte,fechaNotificacion,activo,fechaRegistro,fechaModificacion,Instructivo,Correo FROM tblpersonasnotificartradicional ";
if(($personasnotificartradicionalDto->getIdPersonasNotificarT()!="") ||($personasnotificartradicionalDto->getIdActuacion()!="") ||($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" WHERE ";
}
if($personasnotificartradicionalDto->getIdPersonasNotificarT()!=""){
$sql.="idPersonasNotificarT='".$personasnotificartradicionalDto->getIdPersonasNotificarT()."'";
if(($personasnotificartradicionalDto->getIdActuacion()!="") ||($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getIdActuacion()!=""){
$sql.="idActuacion='".$personasnotificartradicionalDto->getIdActuacion()."'";
if(($personasnotificartradicionalDto->getIdReferenciaParte()!="") ||($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$personasnotificartradicionalDto->getIdReferenciaParte()."'";
if(($personasnotificartradicionalDto->getCveTipoParte()!="") ||($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$personasnotificartradicionalDto->getCveTipoParte()."'";
if(($personasnotificartradicionalDto->getFechaNotificacion()!="") ||($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getFechaNotificacion()!=""){
$sql.="fechaNotificacion='".$personasnotificartradicionalDto->getFechaNotificacion()."'";
if(($personasnotificartradicionalDto->getActivo()!="") ||($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getActivo()!=""){
$sql.="activo='".$personasnotificartradicionalDto->getActivo()."'";
if(($personasnotificartradicionalDto->getFechaRegistro()!="") ||($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$personasnotificartradicionalDto->getFechaRegistro()."'";
if(($personasnotificartradicionalDto->getFechaModificacion()!="") ||($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getFechaModificacion()!=""){
$sql.="fechaModificacion='".$personasnotificartradicionalDto->getFechaModificacion()."'";
if(($personasnotificartradicionalDto->getInstructivo()!="") ||($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getInstructivo()!=""){
$sql.="Instructivo='".$personasnotificartradicionalDto->getInstructivo()."'";
if(($personasnotificartradicionalDto->getCorreo()!="") ){
$sql.=" AND ";
}
}
if($personasnotificartradicionalDto->getCorreo()!=""){
$sql.="Correo='".$personasnotificartradicionalDto->getCorreo()."'";
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
$tmp[$contador] = new PersonasnotificartradicionalDTO();
$tmp[$contador]->setIdPersonasNotificarT($row["idPersonasNotificarT"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdReferenciaParte($row["idReferenciaParte"]);
$tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
$tmp[$contador]->setFechaNotificacion($row["fechaNotificacion"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaModificacion($row["fechaModificacion"]);
$tmp[$contador]->setInstructivo($row["Instructivo"]);
$tmp[$contador]->setCorreo($row["Correo"]);
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