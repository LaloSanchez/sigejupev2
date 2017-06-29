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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMinisteriosresponsables($ministeriosresponsablesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblministeriosresponsables(";
if($ministeriosresponsablesDto->getidMinisterioResponsable()!=""){
$sql.="idMinisterioResponsable";
if(($ministeriosresponsablesDto->getIdSolicitudCateo()!="") ||($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo";
if(($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getnombre()!=""){
$sql.="nombre";
if(($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getpaterno()!=""){
$sql.="paterno";
if(($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getmaterno()!=""){
$sql.="materno";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ministeriosresponsablesDto->getidMinisterioResponsable()!=""){
$sql.="'".$ministeriosresponsablesDto->getidMinisterioResponsable()."'";
if(($ministeriosresponsablesDto->getIdSolicitudCateo()!="") ||($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getidSolicitudCateo()!=""){
$sql.="'".$ministeriosresponsablesDto->getidSolicitudCateo()."'";
if(($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getnombre()!=""){
$sql.="'".$ministeriosresponsablesDto->getnombre()."'";
if(($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getpaterno()!=""){
$sql.="'".$ministeriosresponsablesDto->getpaterno()."'";
if(($ministeriosresponsablesDto->getMaterno()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getmaterno()!=""){
$sql.="'".$ministeriosresponsablesDto->getmaterno()."'";
}
if($ministeriosresponsablesDto->getfechaRegistro()!=""){
}
if($ministeriosresponsablesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesDTO();
$tmp->setidMinisterioResponsable($this->_proveedor->lastID());
$tmp = $this->selectMinisteriosresponsables($tmp,"",$this->_proveedor);
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
public function updateMinisteriosresponsables($ministeriosresponsablesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblministeriosresponsables SET ";
if($ministeriosresponsablesDto->getidMinisterioResponsable()!=""){
$sql.="idMinisterioResponsable='".$ministeriosresponsablesDto->getidMinisterioResponsable()."'";
if(($ministeriosresponsablesDto->getIdSolicitudCateo()!="") ||($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$ministeriosresponsablesDto->getidSolicitudCateo()."'";
if(($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getnombre()!=""){
$sql.="nombre='".$ministeriosresponsablesDto->getnombre()."'";
if(($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getpaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesDto->getpaterno()."'";
if(($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getmaterno()!=""){
$sql.="materno='".$ministeriosresponsablesDto->getmaterno()."'";
if(($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesDto->getfechaRegistro()."'";
if(($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ministeriosresponsablesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idMinisterioResponsable='".$ministeriosresponsablesDto->getidMinisterioResponsable()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MinisteriosresponsablesDTO();
$tmp->setidMinisterioResponsable($ministeriosresponsablesDto->getidMinisterioResponsable());
$tmp = $this->selectMinisteriosresponsables($tmp,"",$this->_proveedor);
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
public function deleteMinisteriosresponsables($ministeriosresponsablesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblministeriosresponsables  WHERE idMinisterioResponsable='".$ministeriosresponsablesDto->getidMinisterioResponsable()."'";
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
public function selectMinisteriosresponsables($ministeriosresponsablesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMinisterioResponsable,idSolicitudCateo,nombre,paterno,materno,fechaRegistro,fechaActualizacion FROM tblministeriosresponsables ";
if(($ministeriosresponsablesDto->getidMinisterioResponsable()!="") ||($ministeriosresponsablesDto->getidSolicitudCateo()!="") ||($ministeriosresponsablesDto->getnombre()!="") ||($ministeriosresponsablesDto->getpaterno()!="") ||($ministeriosresponsablesDto->getmaterno()!="") ||($ministeriosresponsablesDto->getfechaRegistro()!="") ||($ministeriosresponsablesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($ministeriosresponsablesDto->getidMinisterioResponsable()!=""){
$sql.="idMinisterioResponsable='".$ministeriosresponsablesDto->getIdMinisterioResponsable()."'";
if(($ministeriosresponsablesDto->getIdSolicitudCateo()!="") ||($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$ministeriosresponsablesDto->getIdSolicitudCateo()."'";
if(($ministeriosresponsablesDto->getNombre()!="") ||($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getnombre()!=""){
$sql.="nombre='".$ministeriosresponsablesDto->getNombre()."'";
if(($ministeriosresponsablesDto->getPaterno()!="") ||($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getpaterno()!=""){
$sql.="paterno='".$ministeriosresponsablesDto->getPaterno()."'";
if(($ministeriosresponsablesDto->getMaterno()!="") ||($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getmaterno()!=""){
$sql.="materno='".$ministeriosresponsablesDto->getMaterno()."'";
if(($ministeriosresponsablesDto->getFechaRegistro()!="") ||($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ministeriosresponsablesDto->getFechaRegistro()."'";
if(($ministeriosresponsablesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ministeriosresponsablesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ministeriosresponsablesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MinisteriosresponsablesDTO();
$tmp[$contador]->setIdMinisterioResponsable($row["idMinisterioResponsable"]);
$tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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