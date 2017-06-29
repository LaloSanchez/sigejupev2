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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitoselectronico/DelitoselectronicoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitoselectronicoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitoselectronico($delitoselectronicoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO delitoselectronico(";
if($delitoselectronicoDto->getIdDelitoElectronico()!=""){
$sql.="idDelitoElectronico";
if(($delitoselectronicoDto->getIdMateriaLiti()!="") ||($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getIdMateriaLiti()!=""){
$sql.="idMateriaLiti";
if(($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getCveDelito()!=""){
$sql.="cveDelito";
if(($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitoselectronicoDto->getIdDelitoElectronico()!=""){
$sql.="'".$delitoselectronicoDto->getIdDelitoElectronico()."'";
if(($delitoselectronicoDto->getIdMateriaLiti()!="") ||($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getIdMateriaLiti()!=""){
$sql.="'".$delitoselectronicoDto->getIdMateriaLiti()."'";
if(($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getCveDelito()!=""){
$sql.="'".$delitoselectronicoDto->getCveDelito()."'";
if(($delitoselectronicoDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getActivo()!=""){
$sql.="'".$delitoselectronicoDto->getActivo()."'";
}
if($delitoselectronicoDto->getFechaRegistro()!=""){
}
if($delitoselectronicoDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoselectronicoDTO();
$tmp->setidDelitoElectronico($this->_proveedor->lastID());
$tmp = $this->selectDelitoselectronico($tmp,"",$this->_proveedor);
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
public function updateDelitoselectronico($delitoselectronicoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE delitoselectronico SET ";
if($delitoselectronicoDto->getIdDelitoElectronico()!=""){
$sql.="idDelitoElectronico='".$delitoselectronicoDto->getIdDelitoElectronico()."'";
if(($delitoselectronicoDto->getIdMateriaLiti()!="") ||($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getIdMateriaLiti()!=""){
$sql.="idMateriaLiti='".$delitoselectronicoDto->getIdMateriaLiti()."'";
if(($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitoselectronicoDto->getCveDelito()."'";
if(($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getActivo()!=""){
$sql.="activo='".$delitoselectronicoDto->getActivo()."'";
if(($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoselectronicoDto->getFechaRegistro()."'";
if(($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitoselectronicoDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoselectronicoDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idDelitoElectronico='".$delitoselectronicoDto->getIdDelitoElectronico()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitoselectronicoDTO();
$tmp->setidDelitoElectronico($delitoselectronicoDto->getIdDelitoElectronico());
$tmp = $this->selectDelitoselectronico($tmp,"",$this->_proveedor);
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
public function deleteDelitoselectronico($delitoselectronicoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM delitoselectronico  WHERE idDelitoElectronico='".$delitoselectronicoDto->getIdDelitoElectronico()."'";
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
public function selectDelitoselectronico($delitoselectronicoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoElectronico,idMateriaLiti,cveDelito,activo,fechaRegistro,fechaActualizacion FROM delitoselectronico ";
if(($delitoselectronicoDto->getIdDelitoElectronico()!="") ||($delitoselectronicoDto->getIdMateriaLiti()!="") ||($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($delitoselectronicoDto->getIdDelitoElectronico()!=""){
$sql.="idDelitoElectronico='".$delitoselectronicoDto->getIdDelitoElectronico()."'";
if(($delitoselectronicoDto->getIdMateriaLiti()!="") ||($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoselectronicoDto->getIdMateriaLiti()!=""){
$sql.="idMateriaLiti='".$delitoselectronicoDto->getIdMateriaLiti()."'";
if(($delitoselectronicoDto->getCveDelito()!="") ||($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoselectronicoDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitoselectronicoDto->getCveDelito()."'";
if(($delitoselectronicoDto->getActivo()!="") ||($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoselectronicoDto->getActivo()!=""){
$sql.="activo='".$delitoselectronicoDto->getActivo()."'";
if(($delitoselectronicoDto->getFechaRegistro()!="") ||($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoselectronicoDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitoselectronicoDto->getFechaRegistro()."'";
if(($delitoselectronicoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitoselectronicoDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitoselectronicoDto->getFechaActualizacion()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
//echo $sql;
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new DelitoselectronicoDTO();
$tmp[$contador]->setIdDelitoElectronico($row["idDelitoElectronico"]);
$tmp[$contador]->setIdMateriaLiti($row["idMateriaLiti"]);
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