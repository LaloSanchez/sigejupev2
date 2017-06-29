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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/efectossexualescarpetas/EfectossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EfectossexualescarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEfectossexualescarpetas($efectossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblefectossexualescarpetas(";
if($efectossexualescarpetasDto->getidEfectoSexualCarpeta()!=""){
$sql.="idEfectoSexualCarpeta";
if(($efectossexualescarpetasDto->getCveDetalleEfecto()!="") ||($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto";
if(($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($efectossexualescarpetasDto->getidEfectoSexualCarpeta()!=""){
$sql.="'".$efectossexualescarpetasDto->getidEfectoSexualCarpeta()."'";
if(($efectossexualescarpetasDto->getCveDetalleEfecto()!="") ||($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getcveDetalleEfecto()!=""){
$sql.="'".$efectossexualescarpetasDto->getcveDetalleEfecto()."'";
if(($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="'".$efectossexualescarpetasDto->getidSexualCarpeta()."'";
}
if($efectossexualescarpetasDto->getfechaRegistro()!=""){
}
if($efectossexualescarpetasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EfectossexualescarpetasDTO();
$tmp->setidEfectoSexualCarpeta($this->_proveedor->lastID());
$tmp = $this->selectEfectossexualescarpetas($tmp,"",$this->_proveedor);
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
public function updateEfectossexualescarpetas($efectossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblefectossexualescarpetas SET ";
if($efectossexualescarpetasDto->getidEfectoSexualCarpeta()!=""){
$sql.="idEfectoSexualCarpeta='".$efectossexualescarpetasDto->getidEfectoSexualCarpeta()."'";
if(($efectossexualescarpetasDto->getCveDetalleEfecto()!="") ||($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ||($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto='".$efectossexualescarpetasDto->getcveDetalleEfecto()."'";
if(($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ||($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta='".$efectossexualescarpetasDto->getidSexualCarpeta()."'";
if(($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$efectossexualescarpetasDto->getfechaRegistro()."'";
if(($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$efectossexualescarpetasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idEfectoSexualCarpeta='".$efectossexualescarpetasDto->getidEfectoSexualCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EfectossexualescarpetasDTO();
$tmp->setidEfectoSexualCarpeta($efectossexualescarpetasDto->getidEfectoSexualCarpeta());
$tmp = $this->selectEfectossexualescarpetas($tmp,"",$this->_proveedor);
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
public function deleteEfectossexualescarpetas($efectossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblefectossexualescarpetas  WHERE idEfectoSexualCarpeta='".$efectossexualescarpetasDto->getidEfectoSexualCarpeta()."'";
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
public function selectEfectossexualescarpetas($efectossexualescarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idEfectoSexualCarpeta,cveDetalleEfecto,idSexualCarpeta,fechaRegistro,fechaActualizacion FROM tblefectossexualescarpetas ";
if(($efectossexualescarpetasDto->getidEfectoSexualCarpeta()!="") ||($efectossexualescarpetasDto->getcveDetalleEfecto()!="") ||($efectossexualescarpetasDto->getidSexualCarpeta()!="") ||($efectossexualescarpetasDto->getfechaRegistro()!="") ||($efectossexualescarpetasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($efectossexualescarpetasDto->getidEfectoSexualCarpeta()!=""){
$sql.="idEfectoSexualCarpeta='".$efectossexualescarpetasDto->getIdEfectoSexualCarpeta()."'";
if(($efectossexualescarpetasDto->getCveDetalleEfecto()!="") ||($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ||($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualescarpetasDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto='".$efectossexualescarpetasDto->getCveDetalleEfecto()."'";
if(($efectossexualescarpetasDto->getIdSexualCarpeta()!="") ||($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta='".$efectossexualescarpetasDto->getIdSexualCarpeta()."'";
if(($efectossexualescarpetasDto->getFechaRegistro()!="") ||($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$efectossexualescarpetasDto->getFechaRegistro()."'";
if(($efectossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$efectossexualescarpetasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EfectossexualescarpetasDTO();
$tmp[$contador]->setIdEfectoSexualCarpeta($row["idEfectoSexualCarpeta"]);
$tmp[$contador]->setCveDetalleEfecto($row["cveDetalleEfecto"]);
$tmp[$contador]->setIdSexualCarpeta($row["idSexualCarpeta"]);
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