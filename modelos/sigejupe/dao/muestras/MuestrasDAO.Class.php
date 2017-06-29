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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MuestrasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMuestras($muestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmuestras(";
if($muestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra";
if(($muestrasDto->getDesMuestra()!="") ||($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getDesMuestra()!=""){
$sql.="desMuestra";
if(($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getTipo()!=""){
$sql.="Tipo";
if(($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($muestrasDto->getCveMuestra()!=""){
$sql.="'".$muestrasDto->getCveMuestra()."'";
if(($muestrasDto->getDesMuestra()!="") ||($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getDesMuestra()!=""){
$sql.="'".$muestrasDto->getDesMuestra()."'";
if(($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getTipo()!=""){
$sql.="'".$muestrasDto->getTipo()."'";
if(($muestrasDto->getActivo()!="") ){
$sql.=",";
}
}
if($muestrasDto->getActivo()!=""){
$sql.="'".$muestrasDto->getActivo()."'";
}
if($muestrasDto->getFechaRegistro()!=""){
}
if($muestrasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MuestrasDTO();
$tmp->setcveMuestra($this->_proveedor->lastID());
$tmp = $this->selectMuestras($tmp,"",$this->_proveedor);
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
public function updateMuestras($muestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmuestras SET ";
if($muestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra='".$muestrasDto->getCveMuestra()."'";
if(($muestrasDto->getDesMuestra()!="") ||($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($muestrasDto->getDesMuestra()!=""){
$sql.="desMuestra='".$muestrasDto->getDesMuestra()."'";
if(($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($muestrasDto->getTipo()!=""){
$sql.="Tipo='".$muestrasDto->getTipo()."'";
if(($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($muestrasDto->getActivo()!=""){
$sql.="activo='".$muestrasDto->getActivo()."'";
if(($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($muestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$muestrasDto->getFechaRegistro()."'";
if(($muestrasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($muestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$muestrasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveMuestra='".$muestrasDto->getCveMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MuestrasDTO();
$tmp->setcveMuestra($muestrasDto->getCveMuestra());
$tmp = $this->selectMuestras($tmp,"",$this->_proveedor);
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
public function deleteMuestras($muestrasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmuestras  WHERE cveMuestra='".$muestrasDto->getCveMuestra()."'";
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
public function selectMuestras($muestrasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveMuestra,desMuestra,Tipo,activo,fechaRegistro,fechaActualizacion FROM tblmuestras ";
if(($muestrasDto->getCveMuestra()!="") ||($muestrasDto->getDesMuestra()!="") ||($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($muestrasDto->getCveMuestra()!=""){
$sql.="cveMuestra='".$muestrasDto->getCveMuestra()."'";
if(($muestrasDto->getDesMuestra()!="") ||($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($muestrasDto->getDesMuestra()!=""){
$sql.="desMuestra='".$muestrasDto->getDesMuestra()."'";
if(($muestrasDto->getTipo()!="") ||($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($muestrasDto->getTipo()!=""){
$sql.="Tipo='".$muestrasDto->getTipo()."'";
if(($muestrasDto->getActivo()!="") ||($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($muestrasDto->getActivo()!=""){
$sql.="activo='".$muestrasDto->getActivo()."'";
if(($muestrasDto->getFechaRegistro()!="") ||($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($muestrasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$muestrasDto->getFechaRegistro()."'";
if(($muestrasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($muestrasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$muestrasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MuestrasDTO();
$tmp[$contador]->setCveMuestra($row["cveMuestra"]);
$tmp[$contador]->setDesMuestra($row["desMuestra"]);
$tmp[$contador]->setTipo($row["Tipo"]);
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