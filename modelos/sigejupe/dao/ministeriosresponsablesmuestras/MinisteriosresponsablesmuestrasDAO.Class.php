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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesmuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblministeriosresponsablesmuestras(";
if($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()!=""){
$sql.="idMinisterioResponsableMuestras";
if(($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!="") ||($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra";
if(($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getNombre()!=""){
$sql.="nombre";
if(($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getPaterno()!=""){
$sql.="paterno";
if(($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getMaterno()!=""){
$sql.="materno";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()!=""){
$sql.="'".$ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()."'";
if(($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!="") ||($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="'".$ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()."'";
if(($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getNombre()!=""){
$sql.="'".$ministeriosresponsablesmuestrasDto->getNombre()."'";
if(($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getPaterno()!=""){
$sql.="'".$ministeriosresponsablesmuestrasDto->getPaterno()."'";
if(($ministeriosresponsablesmuestrasDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getMaterno()!=""){
$sql.="'".$ministeriosresponsablesmuestrasDto->getMaterno()."'";
}
if($ministeriosresponsablesmuestrasDto->getFechaRegistro()!=""){
}
if($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesmuestrasDTO();
$tmp->setidMinisterioResponsableMuestras($this->_proveedor->lastID());
$tmp = $this->selectMinisteriosresponsablesmuestras($tmp,"",$this->_proveedor);
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
public function updateMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblministeriosresponsablesmuestras SET ";
if($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()!=""){
$sql.="idMinisterioResponsableMuestras='".$ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()."'";
if(($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!="") ||($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()."'";
if(($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getNombre()!=""){
$sql.="nombre='".$ministeriosresponsablesmuestrasDto->getNombre()."'";
if(($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getPaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesmuestrasDto->getPaterno()."'";
if(($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getMaterno()!=""){
$sql.="materno='".$ministeriosresponsablesmuestrasDto->getMaterno()."'";
if(($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesmuestrasDto->getFechaRegistro()."'";
if(($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesmuestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idMinisterioResponsableMuestras='".$ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesmuestrasDTO();
$tmp->setidMinisterioResponsableMuestras($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras());
$tmp = $this->selectMinisteriosresponsablesmuestras($tmp,"",$this->_proveedor);
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
public function deleteMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblministeriosresponsablesmuestras  WHERE idMinisterioResponsableMuestras='".$ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()."'";
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
public function selectMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMinisterioResponsableMuestras,idSolicitudMuestra,nombre,paterno,materno,fechaRegistro,fechaActualizacion FROM tblministeriosresponsablesmuestras ";
if(($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()!="") ||($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!="") ||($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()!=""){
$sql.="idMinisterioResponsableMuestras='".$ministeriosresponsablesmuestrasDto->getIdMinisterioResponsableMuestras()."'";
if(($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!="") ||($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$ministeriosresponsablesmuestrasDto->getIdSolicitudMuestra()."'";
if(($ministeriosresponsablesmuestrasDto->getNombre()!="") ||($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getNombre()!=""){
$sql.="nombre='".$ministeriosresponsablesmuestrasDto->getNombre()."'";
if(($ministeriosresponsablesmuestrasDto->getPaterno()!="") ||($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getPaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesmuestrasDto->getPaterno()."'";
if(($ministeriosresponsablesmuestrasDto->getMaterno()!="") ||($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getMaterno()!=""){
$sql.="materno='".$ministeriosresponsablesmuestrasDto->getMaterno()."'";
if(($ministeriosresponsablesmuestrasDto->getFechaRegistro()!="") ||($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesmuestrasDto->getFechaRegistro()."'";
if(($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesmuestrasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MinisteriosresponsablesmuestrasDTO();
$tmp[$contador]->setIdMinisterioResponsableMuestras($row["idMinisterioResponsableMuestras"]);
$tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
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