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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitosmuestras/DelitosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitosmuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitosmuestras($delitosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldelitosmuestras(";
if($delitosmuestrasDto->getIdDelitoMuestra()!=""){
$sql.="idDelitoMuestra";
if(($delitosmuestrasDto->getIdSolicitudMuestra()!="") ||($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra";
if(($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getCveDelito()!=""){
$sql.="cveDelito";
if(($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitosmuestrasDto->getIdDelitoMuestra()!=""){
$sql.="'".$delitosmuestrasDto->getIdDelitoMuestra()."'";
if(($delitosmuestrasDto->getIdSolicitudMuestra()!="") ||($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="'".$delitosmuestrasDto->getIdSolicitudMuestra()."'";
if(($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getCveDelito()!=""){
$sql.="'".$delitosmuestrasDto->getCveDelito()."'";
if(($delitosmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getActivo()!=""){
$sql.="'".$delitosmuestrasDto->getActivo()."'";
}
if($delitosmuestrasDto->getFechaRegistro()!=""){
}
if($delitosmuestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosmuestrasDTO();
$tmp->setIdDelitoMuestra($this->_proveedor->lastID());
$tmp = $this->selectDelitosmuestras($tmp,"",$this->_proveedor);
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
public function updateDelitosmuestras($delitosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldelitosmuestras SET ";
if($delitosmuestrasDto->getIdDelitoMuestra()!=""){
$sql.="idDelitoMuestra='".$delitosmuestrasDto->getIdDelitoMuestra()."'";
if(($delitosmuestrasDto->getIdSolicitudMuestra()!="") ||($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$delitosmuestrasDto->getIdSolicitudMuestra()."'";
if(($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosmuestrasDto->getCveDelito()."'";
if(($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getActivo()!=""){
$sql.="activo='".$delitosmuestrasDto->getActivo()."'";
if(($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosmuestrasDto->getFechaRegistro()."'";
if(($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosmuestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE ='".$delitosmuestrasDto->get()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosmuestrasDTO();
$tmp->set($delitosmuestrasDto->get());
$tmp = $this->selectDelitosmuestras($tmp,"",$this->_proveedor);
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
public function deleteDelitosmuestras($delitosmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldelitosmuestras  WHERE ='".$delitosmuestrasDto->get()."'";
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
public function selectDelitosmuestras($delitosmuestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoMuestra,idSolicitudMuestra,cveDelito,activo,fechaRegistro,fechaActualizacion FROM tbldelitosmuestras ";
if(($delitosmuestrasDto->getIdDelitoMuestra()!="") ||($delitosmuestrasDto->getIdSolicitudMuestra()!="") ||($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($delitosmuestrasDto->getIdDelitoMuestra()!=""){
$sql.="idDelitoMuestra='".$delitosmuestrasDto->getIdDelitoMuestra()."'";
if(($delitosmuestrasDto->getIdSolicitudMuestra()!="") ||($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosmuestrasDto->getIdSolicitudMuestra()!=""){
$sql.="idSolicitudMuestra='".$delitosmuestrasDto->getIdSolicitudMuestra()."'";
if(($delitosmuestrasDto->getCveDelito()!="") ||($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosmuestrasDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosmuestrasDto->getCveDelito()."'";
if(($delitosmuestrasDto->getActivo()!="") ||($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosmuestrasDto->getActivo()!=""){
$sql.="activo='".$delitosmuestrasDto->getActivo()."'";
if(($delitosmuestrasDto->getFechaRegistro()!="") ||($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosmuestrasDto->getFechaRegistro()."'";
if(($delitosmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosmuestrasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DelitosmuestrasDTO();
$tmp[$contador]->setIdDelitoMuestra($row["idDelitoMuestra"]);
$tmp[$contador]->setIdSolicitudMuestra($row["idSolicitudMuestra"]);
$tmp[$contador]->setCveDelito($row["cveDelito"]);
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