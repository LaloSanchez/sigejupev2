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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblministeriosresponsablesordenes(";
if($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()!=""){
$sql.="idMinisterioResponsableOrden";
if(($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!="") ||($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getNombre()!=""){
$sql.="nombre";
if(($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getPaterno()!=""){
$sql.="paterno";
if(($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getMaterno()!=""){
$sql.="materno";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()!=""){
$sql.="'".$ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()."'";
if(($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!="") ||($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$ministeriosresponsablesordenesDto->getIdSolicitudOrden()."'";
if(($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getNombre()!=""){
$sql.="'".$ministeriosresponsablesordenesDto->getNombre()."'";
if(($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getPaterno()!=""){
$sql.="'".$ministeriosresponsablesordenesDto->getPaterno()."'";
if(($ministeriosresponsablesordenesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getMaterno()!=""){
$sql.="'".$ministeriosresponsablesordenesDto->getMaterno()."'";
}
if($ministeriosresponsablesordenesDto->getFechaRegistro()!=""){
}
if($ministeriosresponsablesordenesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesordenesDTO();
$tmp->setidMinisterioResponsableOrden($this->_proveedor->lastID());
$tmp = $this->selectMinisteriosresponsablesordenes($tmp,"",$this->_proveedor);
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
public function updateMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblministeriosresponsablesordenes SET ";
if($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()!=""){
$sql.="idMinisterioResponsableOrden='".$ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()."'";
if(($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!="") ||($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$ministeriosresponsablesordenesDto->getIdSolicitudOrden()."'";
if(($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getNombre()!=""){
$sql.="nombre='".$ministeriosresponsablesordenesDto->getNombre()."'";
if(($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getPaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesordenesDto->getPaterno()."'";
if(($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getMaterno()!=""){
$sql.="materno='".$ministeriosresponsablesordenesDto->getMaterno()."'";
if(($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesordenesDto->getFechaRegistro()."'";
if(($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesordenesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idMinisterioResponsableOrden='".$ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesordenesDTO();
$tmp->setidMinisterioResponsableOrden($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden());
$tmp = $this->selectMinisteriosresponsablesordenes($tmp,"",$this->_proveedor);
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
public function deleteMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblministeriosresponsablesordenes  WHERE idMinisterioResponsableOrden='".$ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()."'";
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
public function selectMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMinisterioResponsableOrden,idSolicitudOrden,nombre,paterno,materno,fechaRegistro,fechaActualizacion FROM tblministeriosresponsablesordenes ";
if(($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()!="") ||($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!="") ||($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()!=""){
$sql.="idMinisterioResponsableOrden='".$ministeriosresponsablesordenesDto->getIdMinisterioResponsableOrden()."'";
if(($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!="") ||($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$ministeriosresponsablesordenesDto->getIdSolicitudOrden()."'";
if(($ministeriosresponsablesordenesDto->getNombre()!="") ||($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getNombre()!=""){
$sql.="nombre='".$ministeriosresponsablesordenesDto->getNombre()."'";
if(($ministeriosresponsablesordenesDto->getPaterno()!="") ||($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getPaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesordenesDto->getPaterno()."'";
if(($ministeriosresponsablesordenesDto->getMaterno()!="") ||($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getMaterno()!=""){
$sql.="materno='".$ministeriosresponsablesordenesDto->getMaterno()."'";
if(($ministeriosresponsablesordenesDto->getFechaRegistro()!="") ||($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesordenesDto->getFechaRegistro()."'";
if(($ministeriosresponsablesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MinisteriosresponsablesordenesDTO();
$tmp[$contador]->setIdMinisterioResponsableOrden($row["idMinisterioResponsableOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
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