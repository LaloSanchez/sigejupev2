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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sentidosresoluciones/SentidosresolucionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SentidosresolucionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSentidosresoluciones($sentidosresolucionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsentidosresoluciones(";
if($sentidosresolucionesDto->getcveSentido()!=""){
$sql.="cveSentido";
if(($sentidosresolucionesDto->getDesSentido()!="") ||($sentidosresolucionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getdesSentido()!=""){
$sql.="desSentido";
if(($sentidosresolucionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($sentidosresolucionesDto->getcveSentido()!=""){
$sql.="'".$sentidosresolucionesDto->getcveSentido()."'";
if(($sentidosresolucionesDto->getDesSentido()!="") ||($sentidosresolucionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getdesSentido()!=""){
$sql.="'".$sentidosresolucionesDto->getdesSentido()."'";
if(($sentidosresolucionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getactivo()!=""){
$sql.="'".$sentidosresolucionesDto->getactivo()."'";
}
if($sentidosresolucionesDto->getfechaRegistro()!=""){
}
if($sentidosresolucionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentidosresolucionesDTO();
$tmp->setcveSentido($this->_proveedor->lastID());
$tmp = $this->selectSentidosresoluciones($tmp,"",$this->_proveedor);
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
public function updateSentidosresoluciones($sentidosresolucionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsentidosresoluciones SET ";
if($sentidosresolucionesDto->getcveSentido()!=""){
$sql.="cveSentido='".$sentidosresolucionesDto->getcveSentido()."'";
if(($sentidosresolucionesDto->getDesSentido()!="") ||($sentidosresolucionesDto->getActivo()!="") ||($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getdesSentido()!=""){
$sql.="desSentido='".$sentidosresolucionesDto->getdesSentido()."'";
if(($sentidosresolucionesDto->getActivo()!="") ||($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getactivo()!=""){
$sql.="activo='".$sentidosresolucionesDto->getactivo()."'";
if(($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$sentidosresolucionesDto->getfechaRegistro()."'";
if(($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentidosresolucionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentidosresolucionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveSentido='".$sentidosresolucionesDto->getcveSentido()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentidosresolucionesDTO();
$tmp->setcveSentido($sentidosresolucionesDto->getcveSentido());
$tmp = $this->selectSentidosresoluciones($tmp,"",$this->_proveedor);
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
public function deleteSentidosresoluciones($sentidosresolucionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsentidosresoluciones  WHERE cveSentido='".$sentidosresolucionesDto->getcveSentido()."'";
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
public function selectSentidosresoluciones($sentidosresolucionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveSentido,desSentido,activo,fechaRegistro,fechaActualizacion FROM tblsentidosresoluciones ";
if(($sentidosresolucionesDto->getcveSentido()!="") ||($sentidosresolucionesDto->getdesSentido()!="") ||($sentidosresolucionesDto->getactivo()!="") ||($sentidosresolucionesDto->getfechaRegistro()!="") ||($sentidosresolucionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($sentidosresolucionesDto->getcveSentido()!=""){
$sql.="cveSentido='".$sentidosresolucionesDto->getCveSentido()."'";
if(($sentidosresolucionesDto->getDesSentido()!="") ||($sentidosresolucionesDto->getActivo()!="") ||($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentidosresolucionesDto->getdesSentido()!=""){
$sql.="desSentido='".$sentidosresolucionesDto->getDesSentido()."'";
if(($sentidosresolucionesDto->getActivo()!="") ||($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentidosresolucionesDto->getactivo()!=""){
$sql.="activo='".$sentidosresolucionesDto->getActivo()."'";
if(($sentidosresolucionesDto->getFechaRegistro()!="") ||($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentidosresolucionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$sentidosresolucionesDto->getFechaRegistro()."'";
if(($sentidosresolucionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentidosresolucionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentidosresolucionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new SentidosresolucionesDTO();
$tmp[$contador]->setCveSentido($row["cveSentido"]);
$tmp[$contador]->setDesSentido($row["desSentido"]);
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