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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NacionalidadesimputadossolicitudesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnacionalidadesimputadossolicitudes(";
if($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()!=""){
$sql.="idNacionalidadImputadoSolicitud";
if(($nacionalidadesimputadossolicitudesDto->getCvePais()!="") ||($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getcvePais()!=""){
$sql.="cvePais";
if(($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getactivo()!=""){
$sql.="activo";
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()!=""){
$sql.="'".$nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()."'";
if(($nacionalidadesimputadossolicitudesDto->getCvePais()!="") ||($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getcvePais()!=""){
$sql.="'".$nacionalidadesimputadossolicitudesDto->getcvePais()."'";
if(($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getactivo()!=""){
$sql.="'".$nacionalidadesimputadossolicitudesDto->getactivo()."'";
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaRegistro()!=""){
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaActualizacion()!=""){
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="'".$nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NacionalidadesimputadossolicitudesDTO();
$tmp->setidNacionalidadImputadoSolicitud($this->_proveedor->lastID());
$tmp = $this->selectNacionalidadesimputadossolicitudes($tmp,"",$this->_proveedor);
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
public function updateNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnacionalidadesimputadossolicitudes SET ";
if($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()!=""){
$sql.="idNacionalidadImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()."'";
if(($nacionalidadesimputadossolicitudesDto->getCvePais()!="") ||($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getcvePais()!=""){
$sql.="cvePais='".$nacionalidadesimputadossolicitudesDto->getcvePais()."'";
if(($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getactivo()!=""){
$sql.="activo='".$nacionalidadesimputadossolicitudesDto->getactivo()."'";
if(($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$nacionalidadesimputadossolicitudesDto->getfechaRegistro()."'";
if(($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nacionalidadesimputadossolicitudesDto->getfechaActualizacion()."'";
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=",";
}
}
if($nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()."'";
}
$sql.=" WHERE idNacionalidadImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NacionalidadesimputadossolicitudesDTO();
$tmp->setidNacionalidadImputadoSolicitud($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud());
$tmp = $this->selectNacionalidadesimputadossolicitudes($tmp,"",$this->_proveedor);
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
public function deleteNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnacionalidadesimputadossolicitudes  WHERE idNacionalidadImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()."'";
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
public function selectNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idNacionalidadImputadoSolicitud,cvePais,activo,fechaRegistro,fechaActualizacion,idImputadoSolicitud FROM tblnacionalidadesimputadossolicitudes ";
if(($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()!="") ||($nacionalidadesimputadossolicitudesDto->getcvePais()!="") ||($nacionalidadesimputadossolicitudesDto->getactivo()!="") ||($nacionalidadesimputadossolicitudesDto->getfechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getfechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()!="") ){
$sql.=" WHERE ";
}
if($nacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()!=""){
$sql.="idNacionalidadImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getIdNacionalidadImputadoSolicitud()."'";
if(($nacionalidadesimputadossolicitudesDto->getCvePais()!="") ||($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=" AND ";
}
}
if($nacionalidadesimputadossolicitudesDto->getcvePais()!=""){
$sql.="cvePais='".$nacionalidadesimputadossolicitudesDto->getCvePais()."'";
if(($nacionalidadesimputadossolicitudesDto->getActivo()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=" AND ";
}
}
if($nacionalidadesimputadossolicitudesDto->getactivo()!=""){
$sql.="activo='".$nacionalidadesimputadossolicitudesDto->getActivo()."'";
if(($nacionalidadesimputadossolicitudesDto->getFechaRegistro()!="") ||($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=" AND ";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$nacionalidadesimputadossolicitudesDto->getFechaRegistro()."'";
if(($nacionalidadesimputadossolicitudesDto->getFechaActualizacion()!="") ||($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=" AND ";
}
}
if($nacionalidadesimputadossolicitudesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nacionalidadesimputadossolicitudesDto->getFechaActualizacion()."'";
if(($nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()!="") ){
$sql.=" AND ";
}
}
if($nacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()!=""){
$sql.="idImputadoSolicitud='".$nacionalidadesimputadossolicitudesDto->getIdImputadoSolicitud()."'";
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
$tmp[$contador] = new NacionalidadesimputadossolicitudesDTO();
$tmp[$contador]->setIdNacionalidadImputadoSolicitud($row["idNacionalidadImputadoSolicitud"]);
$tmp[$contador]->setCvePais($row["cvePais"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setIdImputadoSolicitud($row["idImputadoSolicitud"]);
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