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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesmuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatussolicitudesmuestras($estatussolicitudesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatussolicitudesmuestras(";
if($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()!=""){
$sql.="cveEstatusSolicitudMuestra";
if(($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!=""){
$sql.="desEstatusSolicitudMuestra";
if(($estatussolicitudesmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()!=""){
$sql.="'".$estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!=""){
$sql.="'".$estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getActivo()!=""){
$sql.="'".$estatussolicitudesmuestrasDto->getActivo()."'";
}
if($estatussolicitudesmuestrasDto->getFechaRegistro()!=""){
}
if($estatussolicitudesmuestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesmuestrasDTO();
$tmp->setcveEstatusSolicitudMuestra($this->_proveedor->lastID());
$tmp = $this->selectEstatussolicitudesmuestras($tmp,"",$this->_proveedor);
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
public function updateEstatussolicitudesmuestras($estatussolicitudesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatussolicitudesmuestras SET ";
if($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()!=""){
$sql.="cveEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getActivo()!="") ||($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!=""){
$sql.="desEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getActivo()!="") ||($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getActivo()!=""){
$sql.="activo='".$estatussolicitudesmuestrasDto->getActivo()."'";
if(($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesmuestrasDto->getFechaRegistro()."'";
if(($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesmuestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesmuestrasDTO();
$tmp->setcveEstatusSolicitudMuestra($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra());
$tmp = $this->selectEstatussolicitudesmuestras($tmp,"",$this->_proveedor);
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
public function deleteEstatussolicitudesmuestras($estatussolicitudesmuestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatussolicitudesmuestras  WHERE cveEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()."'";
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
public function selectEstatussolicitudesmuestras($estatussolicitudesmuestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusSolicitudMuestra,desEstatusSolicitudMuestra,activo,fechaRegistro,fechaActualizacion FROM tblestatussolicitudesmuestras ";
if(($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getActivo()!="") ||($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()!=""){
$sql.="cveEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getCveEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!="") ||($estatussolicitudesmuestrasDto->getActivo()!="") ||($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()!=""){
$sql.="desEstatusSolicitudMuestra='".$estatussolicitudesmuestrasDto->getDesEstatusSolicitudMuestra()."'";
if(($estatussolicitudesmuestrasDto->getActivo()!="") ||($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesmuestrasDto->getActivo()!=""){
$sql.="activo='".$estatussolicitudesmuestrasDto->getActivo()."'";
if(($estatussolicitudesmuestrasDto->getFechaRegistro()!="") ||($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesmuestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesmuestrasDto->getFechaRegistro()."'";
if(($estatussolicitudesmuestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesmuestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesmuestrasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatussolicitudesmuestrasDTO();
$tmp[$contador]->setCveEstatusSolicitudMuestra($row["cveEstatusSolicitudMuestra"]);
$tmp[$contador]->setDesEstatusSolicitudMuestra($row["desEstatusSolicitudMuestra"]);
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