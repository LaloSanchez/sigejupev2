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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/policiasministeriales/PoliciasministerialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class PoliciasministerialesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertPoliciasministeriales($policiasministerialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblpoliciasministeriales(";
if($policiasministerialesDto->getIdPoliciaMinisterial()!=""){
$sql.="idPoliciaMinisterial";
if(($policiasministerialesDto->getIdIngresoCereso()!="") ||($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getIdIngresoCereso()!=""){
$sql.="idIngresoCereso";
if(($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getNombre()!=""){
$sql.="nombre";
if(($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getPaterno()!=""){
$sql.="paterno";
if(($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getMaterno()!=""){
$sql.="materno";
if(($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getCveAdscripcionMP()!=""){
$sql.="cveAdscripcionMP";
if(($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($policiasministerialesDto->getIdPoliciaMinisterial()!=""){
$sql.="'".$policiasministerialesDto->getIdPoliciaMinisterial()."'";
if(($policiasministerialesDto->getIdIngresoCereso()!="") ||($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getIdIngresoCereso()!=""){
$sql.="'".$policiasministerialesDto->getIdIngresoCereso()."'";
if(($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getNombre()!=""){
$sql.="'".$policiasministerialesDto->getNombre()."'";
if(($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getPaterno()!=""){
$sql.="'".$policiasministerialesDto->getPaterno()."'";
if(($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getMaterno()!=""){
$sql.="'".$policiasministerialesDto->getMaterno()."'";
if(($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getCveAdscripcionMP()!=""){
$sql.="'".$policiasministerialesDto->getCveAdscripcionMP()."'";
if(($policiasministerialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getActivo()!=""){
$sql.="'".$policiasministerialesDto->getActivo()."'";
}
if($policiasministerialesDto->getFechaRegistro()!=""){
}
if($policiasministerialesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PoliciasministerialesDTO();
$tmp->setidPoliciaMinisterial($this->_proveedor->lastID());
$tmp = $this->selectPoliciasministeriales($tmp,"",$this->_proveedor);
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
public function updatePoliciasministeriales($policiasministerialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblpoliciasministeriales SET ";
if($policiasministerialesDto->getIdPoliciaMinisterial()!=""){
$sql.="idPoliciaMinisterial='".$policiasministerialesDto->getIdPoliciaMinisterial()."'";
if(($policiasministerialesDto->getIdIngresoCereso()!="") ||($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getIdIngresoCereso()!=""){
$sql.="idIngresoCereso='".$policiasministerialesDto->getIdIngresoCereso()."'";
if(($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getNombre()!=""){
$sql.="nombre='".$policiasministerialesDto->getNombre()."'";
if(($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getPaterno()!=""){
$sql.="paterno='".$policiasministerialesDto->getPaterno()."'";
if(($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getMaterno()!=""){
$sql.="materno='".$policiasministerialesDto->getMaterno()."'";
if(($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getCveAdscripcionMP()!=""){
$sql.="cveAdscripcionMP='".$policiasministerialesDto->getCveAdscripcionMP()."'";
if(($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getActivo()!=""){
$sql.="activo='".$policiasministerialesDto->getActivo()."'";
if(($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$policiasministerialesDto->getFechaRegistro()."'";
if(($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($policiasministerialesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$policiasministerialesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idPoliciaMinisterial='".$policiasministerialesDto->getIdPoliciaMinisterial()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new PoliciasministerialesDTO();
$tmp->setidPoliciaMinisterial($policiasministerialesDto->getIdPoliciaMinisterial());
$tmp = $this->selectPoliciasministeriales($tmp,"",$this->_proveedor);
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
public function deletePoliciasministeriales($policiasministerialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblpoliciasministeriales  WHERE idPoliciaMinisterial='".$policiasministerialesDto->getIdPoliciaMinisterial()."'";
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
public function selectPoliciasministeriales($policiasministerialesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idPoliciaMinisterial,idIngresoCereso,nombre,paterno,materno,cveAdscripcionMP,activo,fechaRegistro,fechaActualizacion FROM tblpoliciasministeriales ";
if(($policiasministerialesDto->getIdPoliciaMinisterial()!="") ||($policiasministerialesDto->getIdIngresoCereso()!="") ||($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($policiasministerialesDto->getIdPoliciaMinisterial()!=""){
$sql.="idPoliciaMinisterial='".$policiasministerialesDto->getIdPoliciaMinisterial()."'";
if(($policiasministerialesDto->getIdIngresoCereso()!="") ||($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getIdIngresoCereso()!=""){
$sql.="idIngresoCereso='".$policiasministerialesDto->getIdIngresoCereso()."'";
if(($policiasministerialesDto->getNombre()!="") ||($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getNombre()!=""){
$sql.="nombre='".$policiasministerialesDto->getNombre()."'";
if(($policiasministerialesDto->getPaterno()!="") ||($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getPaterno()!=""){
$sql.="paterno='".$policiasministerialesDto->getPaterno()."'";
if(($policiasministerialesDto->getMaterno()!="") ||($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getMaterno()!=""){
$sql.="materno='".$policiasministerialesDto->getMaterno()."'";
if(($policiasministerialesDto->getCveAdscripcionMP()!="") ||($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getCveAdscripcionMP()!=""){
$sql.="cveAdscripcionMP='".$policiasministerialesDto->getCveAdscripcionMP()."'";
if(($policiasministerialesDto->getActivo()!="") ||($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getActivo()!=""){
$sql.="activo='".$policiasministerialesDto->getActivo()."'";
if(($policiasministerialesDto->getFechaRegistro()!="") ||($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$policiasministerialesDto->getFechaRegistro()."'";
if(($policiasministerialesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($policiasministerialesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$policiasministerialesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new PoliciasministerialesDTO();
$tmp[$contador]->setIdPoliciaMinisterial($row["idPoliciaMinisterial"]);
$tmp[$contador]->setIdIngresoCereso($row["idIngresoCereso"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setCveAdscripcionMP($row["cveAdscripcionMP"]);
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