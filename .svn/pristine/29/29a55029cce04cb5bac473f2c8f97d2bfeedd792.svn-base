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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitosordenes/DelitosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitosordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitosordenes($delitosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldelitosordenes(";
if($delitosordenesDto->getIdDelitoOrden()!=""){
$sql.="idDelitoOrden";
if(($delitosordenesDto->getIdSolicitudOrden()!="") ||($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getCveDelito()!=""){
$sql.="cveDelito";
if(($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitosordenesDto->getIdDelitoOrden()!=""){
$sql.="'".$delitosordenesDto->getIdDelitoOrden()."'";
if(($delitosordenesDto->getIdSolicitudOrden()!="") ||($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$delitosordenesDto->getIdSolicitudOrden()."'";
if(($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getCveDelito()!=""){
$sql.="'".$delitosordenesDto->getCveDelito()."'";
if(($delitosordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getActivo()!=""){
$sql.="'".$delitosordenesDto->getActivo()."'";
}
if($delitosordenesDto->getFechaRegistro()!=""){
}
if($delitosordenesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosordenesDTO();
$tmp->setidDelitoOrden($this->_proveedor->lastID());
$tmp = $this->selectDelitosordenes($tmp,"",$this->_proveedor);
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
public function updateDelitosordenes($delitosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldelitosordenes SET ";
if($delitosordenesDto->getIdDelitoOrden()!=""){
$sql.="idDelitoOrden='".$delitosordenesDto->getIdDelitoOrden()."'";
if(($delitosordenesDto->getIdSolicitudOrden()!="") ||($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$delitosordenesDto->getIdSolicitudOrden()."'";
if(($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosordenesDto->getCveDelito()."'";
if(($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getActivo()!=""){
$sql.="activo='".$delitosordenesDto->getActivo()."'";
if(($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosordenesDto->getFechaRegistro()."'";
if(($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosordenesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idDelitoOrden='".$delitosordenesDto->getIdDelitoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosordenesDTO();
$tmp->setidDelitoOrden($delitosordenesDto->getIdDelitoOrden());
$tmp = $this->selectDelitosordenes($tmp,"",$this->_proveedor);
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
public function deleteDelitosordenes($delitosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldelitosordenes  WHERE idDelitoOrden='".$delitosordenesDto->getIdDelitoOrden()."'";
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
public function selectDelitosordenes($delitosordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoOrden,idSolicitudOrden,cveDelito,activo,fechaRegistro,fechaActualizacion FROM tbldelitosordenes ";
if(($delitosordenesDto->getIdDelitoOrden()!="") ||($delitosordenesDto->getIdSolicitudOrden()!="") ||($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($delitosordenesDto->getIdDelitoOrden()!=""){
$sql.="idDelitoOrden='".$delitosordenesDto->getIdDelitoOrden()."'";
if(($delitosordenesDto->getIdSolicitudOrden()!="") ||($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$delitosordenesDto->getIdSolicitudOrden()."'";
if(($delitosordenesDto->getCveDelito()!="") ||($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosordenesDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosordenesDto->getCveDelito()."'";
if(($delitosordenesDto->getActivo()!="") ||($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosordenesDto->getActivo()!=""){
$sql.="activo='".$delitosordenesDto->getActivo()."'";
if(($delitosordenesDto->getFechaRegistro()!="") ||($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosordenesDto->getFechaRegistro()."'";
if(($delitosordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DelitosordenesDTO();
$tmp[$contador]->setIdDelitoOrden($row["idDelitoOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
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