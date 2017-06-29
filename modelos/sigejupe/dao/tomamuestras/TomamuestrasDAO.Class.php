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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TomamuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTomamuestras($tomamuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltomamuestras(";
if($tomamuestrasDto->getIdTomaMuestra()!=""){
$sql.="idTomaMuestra";
if(($tomamuestrasDto->getIdSolicitudMuestra()!="") ||($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra";
if(($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdImputadoMuestra()!=""){
$sql.="idImputadoMuestra";
if(($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra";
if(($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra";
}
$sql.=") VALUES(";
if($tomamuestrasDto->getIdTomaMuestra()!=""){
$sql.="'".$tomamuestrasDto->getIdTomaMuestra()."'";
if(($tomamuestrasDto->getIdSolicitudMuestra()!="") ||($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="'".$tomamuestrasDto->getIdSolicitudMuestra()."'";
if(($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdImputadoMuestra()!=""){
$sql.="'".$tomamuestrasDto->getIdImputadoMuestra()."'";
if(($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="'".$tomamuestrasDto->getIdOfendidoMuestra()."'";
if(($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getCveMuestra()!=""){
$sql.="'".$tomamuestrasDto->getCveMuestra()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TomamuestrasDTO();
$tmp->setidTomaMuestra($this->_proveedor->lastID());
$tmp = $this->selectTomamuestras($tmp,"",$this->_proveedor);
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
public function updateTomamuestras($tomamuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltomamuestras SET ";
if($tomamuestrasDto->getIdTomaMuestra()!=""){
$sql.="idTomaMuestra='".$tomamuestrasDto->getIdTomaMuestra()."'";
if(($tomamuestrasDto->getIdSolicitudMuestra()!="") ||($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$tomamuestrasDto->getIdSolicitudMuestra()."'";
if(($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdImputadoMuestra()!=""){
$sql.="idImputadoMuestra='".$tomamuestrasDto->getIdImputadoMuestra()."'";
if(($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra='".$tomamuestrasDto->getIdOfendidoMuestra()."'";
if(($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=",";
}
}
if($tomamuestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra='".$tomamuestrasDto->getCveMuestra()."'";
}
$sql.=" WHERE idTomaMuestra='".$tomamuestrasDto->getIdTomaMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TomamuestrasDTO();
$tmp->setidTomaMuestra($tomamuestrasDto->getIdTomaMuestra());
$tmp = $this->selectTomamuestras($tmp,"",$this->_proveedor);
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
public function deleteTomamuestras($tomamuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltomamuestras  WHERE idTomaMuestra='".$tomamuestrasDto->getIdTomaMuestra()."'";
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
public function selectTomamuestras($tomamuestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTomaMuestra,idSolicitudMuestra,idImputadoMuestra,idOfendidoMuestra,cveMuestra FROM tbltomamuestras ";
if(($tomamuestrasDto->getIdTomaMuestra()!="") ||($tomamuestrasDto->getIdSolicitudMuestra()!="") ||($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=" WHERE ";
}
if($tomamuestrasDto->getIdTomaMuestra()!=""){
$sql.="idTomaMuestra='".$tomamuestrasDto->getIdTomaMuestra()."'";
if(($tomamuestrasDto->getIdSolicitudMuestra()!="") ||($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=" AND ";
}
}
if($tomamuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$tomamuestrasDto->getIdSolicitudMuestra()."'";
if(($tomamuestrasDto->getIdImputadoMuestra()!="") ||($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=" AND ";
}
}
if($tomamuestrasDto->getIdImputadoMuestra()!=""){
$sql.="idImputadoMuestra='".$tomamuestrasDto->getIdImputadoMuestra()."'";
if(($tomamuestrasDto->getIdOfendidoMuestra()!="") ||($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=" AND ";
}
}
if($tomamuestrasDto->getIdOfendidoMuestra()!=""){
$sql.="idOfendidoMuestra='".$tomamuestrasDto->getIdOfendidoMuestra()."'";
if(($tomamuestrasDto->getCveMuestra()!="") ){
$sql.=" AND ";
}
}
if($tomamuestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra='".$tomamuestrasDto->getCveMuestra()."'";
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
$tmp[$contador] = new TomamuestrasDTO();
$tmp[$contador]->setIdTomaMuestra($row["idTomaMuestra"]);
$tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
$tmp[$contador]->setIdImputadoMuestra($row["idImputadoMuestra"]);
$tmp[$contador]->setIdOfendidoMuestra($row["idOfendidoMuestra"]);
$tmp[$contador]->setCveMuestra($row["cveMuestra"]);
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