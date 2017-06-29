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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/nipsolicitudes/NipsolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NipsolicitudesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNipsolicitudes($nipsolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnipsolicitudes(";
if($nipsolicitudesDto->getIdNipSolicitud()!=""){
$sql.="idNipSolicitud";
if(($nipsolicitudesDto->getNip()!="") ||($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getNip()!=""){
$sql.="nip";
if(($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaInicial()!=""){
$sql.="fechaInicial";
if(($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaFinal()!=""){
$sql.="fechaFinal";
if(($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($nipsolicitudesDto->getIdNipSolicitud()!=""){
$sql.="'".$nipsolicitudesDto->getIdNipSolicitud()."'";
if(($nipsolicitudesDto->getNip()!="") ||($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getNip()!=""){
$sql.="'".$nipsolicitudesDto->getNip()."'";
if(($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getIdJuzgador()!=""){
$sql.="'".$nipsolicitudesDto->getIdJuzgador()."'";
if(($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaInicial()!=""){
$sql.="'".$nipsolicitudesDto->getFechaInicial()."'";
if(($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaFinal()!=""){
$sql.="'".$nipsolicitudesDto->getFechaFinal()."'";
if(($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getCveTipoCarpeta()!=""){
$sql.="'".$nipsolicitudesDto->getCveTipoCarpeta()."'";
if(($nipsolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getActivo()!=""){
$sql.="'".$nipsolicitudesDto->getActivo()."'";
}
if($nipsolicitudesDto->getFechaRegistro()!=""){
}
if($nipsolicitudesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NipsolicitudesDTO();
$tmp->setidNipSolicitud($this->_proveedor->lastID());
$tmp = $this->selectNipsolicitudes($tmp,"",$this->_proveedor);
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
public function updateNipsolicitudes($nipsolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnipsolicitudes SET ";
if($nipsolicitudesDto->getIdNipSolicitud()!=""){
$sql.="idNipSolicitud='".$nipsolicitudesDto->getIdNipSolicitud()."'";
if(($nipsolicitudesDto->getNip()!="") ||($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getNip()!=""){
$sql.="nip='".$nipsolicitudesDto->getNip()."'";
if(($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$nipsolicitudesDto->getIdJuzgador()."'";
if(($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaInicial()!=""){
$sql.="fechaInicial='".$nipsolicitudesDto->getFechaInicial()."'";
if(($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaFinal()!=""){
$sql.="fechaFinal='".$nipsolicitudesDto->getFechaFinal()."'";
if(($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$nipsolicitudesDto->getCveTipoCarpeta()."'";
if(($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getActivo()!=""){
$sql.="activo='".$nipsolicitudesDto->getActivo()."'";
if(($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$nipsolicitudesDto->getFechaRegistro()."'";
if(($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($nipsolicitudesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nipsolicitudesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idNipSolicitud='".$nipsolicitudesDto->getIdNipSolicitud()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NipsolicitudesDTO();
$tmp->setidNipSolicitud($nipsolicitudesDto->getIdNipSolicitud());
$tmp = $this->selectNipsolicitudes($tmp,"",$this->_proveedor);
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
public function deleteNipsolicitudes($nipsolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnipsolicitudes  WHERE idNipSolicitud='".$nipsolicitudesDto->getIdNipSolicitud()."'";
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
public function selectNipsolicitudes($nipsolicitudesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idNipSolicitud,nip,idJuzgador,fechaInicial,fechaFinal,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblnipsolicitudes ";
if(($nipsolicitudesDto->getIdNipSolicitud()!="") ||($nipsolicitudesDto->getNip()!="") ||($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($nipsolicitudesDto->getIdNipSolicitud()!=""){
$sql.="idNipSolicitud='".$nipsolicitudesDto->getIdNipSolicitud()."'";
if(($nipsolicitudesDto->getNip()!="") ||($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getNip()!=""){
$sql.="nip='".$nipsolicitudesDto->getNip()."'";
if(($nipsolicitudesDto->getIdJuzgador()!="") ||($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$nipsolicitudesDto->getIdJuzgador()."'";
if(($nipsolicitudesDto->getFechaInicial()!="") ||($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getFechaInicial()!=""){
$sql.="fechaInicial='".$nipsolicitudesDto->getFechaInicial()."'";
if(($nipsolicitudesDto->getFechaFinal()!="") ||($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getFechaFinal()!=""){
$sql.="fechaFinal='".$nipsolicitudesDto->getFechaFinal()."'";
if(($nipsolicitudesDto->getCveTipoCarpeta()!="") ||($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$nipsolicitudesDto->getCveTipoCarpeta()."'";
if(($nipsolicitudesDto->getActivo()!="") ||($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getActivo()!=""){
$sql.="activo='".$nipsolicitudesDto->getActivo()."'";
if(($nipsolicitudesDto->getFechaRegistro()!="") ||($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$nipsolicitudesDto->getFechaRegistro()."'";
if(($nipsolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($nipsolicitudesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$nipsolicitudesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new NipsolicitudesDTO();
$tmp[$contador]->setIdNipSolicitud($row["idNipSolicitud"]);
$tmp[$contador]->setNip($row["nip"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
$tmp[$contador]->setFechaInicial($row["fechaInicial"]);
$tmp[$contador]->setFechaFinal($row["fechaFinal"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
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