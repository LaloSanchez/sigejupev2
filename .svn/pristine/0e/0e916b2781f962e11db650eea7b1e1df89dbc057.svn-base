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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertJuzgadoresordenes($juzgadoresordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbljuzgadoresordenes(";
if($juzgadoresordenesDto->getIdJuzgadorOrden()!=""){
$sql.="idJuzgadorOrden";
if(($juzgadoresordenesDto->getIdSolicitudOrden()!="") ||($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($juzgadoresordenesDto->getIdJuzgadorOrden()!=""){
$sql.="'".$juzgadoresordenesDto->getIdJuzgadorOrden()."'";
if(($juzgadoresordenesDto->getIdSolicitudOrden()!="") ||($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$juzgadoresordenesDto->getIdSolicitudOrden()."'";
if(($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdJuzgador()!=""){
$sql.="'".$juzgadoresordenesDto->getIdJuzgador()."'";
if(($juzgadoresordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getActivo()!=""){
$sql.="'".$juzgadoresordenesDto->getActivo()."'";
}
if($juzgadoresordenesDto->getFechaRegistro()!=""){
}
if($juzgadoresordenesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresordenesDTO();
$tmp->setidJuzgadorOrden($this->_proveedor->lastID());
$tmp = $this->selectJuzgadoresordenes($tmp,"",$this->_proveedor);
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
public function updateJuzgadoresordenes($juzgadoresordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbljuzgadoresordenes SET ";
if($juzgadoresordenesDto->getIdJuzgadorOrden()!=""){
$sql.="idJuzgadorOrden='".$juzgadoresordenesDto->getIdJuzgadorOrden()."'";
if(($juzgadoresordenesDto->getIdSolicitudOrden()!="") ||($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$juzgadoresordenesDto->getIdSolicitudOrden()."'";
if(($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresordenesDto->getIdJuzgador()."'";
if(($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getActivo()!=""){
$sql.="activo='".$juzgadoresordenesDto->getActivo()."'";
if(($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresordenesDto->getFechaRegistro()."'";
if(($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresordenesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idJuzgadorOrden='".$juzgadoresordenesDto->getIdJuzgadorOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresordenesDTO();
$tmp->setidJuzgadorOrden($juzgadoresordenesDto->getIdJuzgadorOrden());
$tmp = $this->selectJuzgadoresordenes($tmp,"",$this->_proveedor);
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
public function deleteJuzgadoresordenes($juzgadoresordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbljuzgadoresordenes  WHERE idJuzgadorOrden='".$juzgadoresordenesDto->getIdJuzgadorOrden()."'";
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
public function selectJuzgadoresordenes($juzgadoresordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idJuzgadorOrden,idSolicitudOrden,idJuzgador,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadoresordenes ";
if(($juzgadoresordenesDto->getIdJuzgadorOrden()!="") ||($juzgadoresordenesDto->getIdSolicitudOrden()!="") ||($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($juzgadoresordenesDto->getIdJuzgadorOrden()!=""){
$sql.="idJuzgadorOrden='".$juzgadoresordenesDto->getIdJuzgadorOrden()."'";
if(($juzgadoresordenesDto->getIdSolicitudOrden()!="") ||($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$juzgadoresordenesDto->getIdSolicitudOrden()."'";
if(($juzgadoresordenesDto->getIdJuzgador()!="") ||($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresordenesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresordenesDto->getIdJuzgador()."'";
if(($juzgadoresordenesDto->getActivo()!="") ||($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresordenesDto->getActivo()!=""){
$sql.="activo='".$juzgadoresordenesDto->getActivo()."'";
if(($juzgadoresordenesDto->getFechaRegistro()!="") ||($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresordenesDto->getFechaRegistro()."'";
if(($juzgadoresordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new JuzgadoresordenesDTO();
$tmp[$contador]->setIdJuzgadorOrden($row["idJuzgadorOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
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