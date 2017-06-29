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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/efectossexuales/EfectossexualesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EfectossexualesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEfectossexuales($efectossexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblefectossexuales(";
if($efectossexualesDto->getidEfectoSexual()!=""){
$sql.="idEfectoSexual";
if(($efectossexualesDto->getCveDetalleEfecto()!="") ||($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto";
if(($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getidSexual()!=""){
$sql.="idSexual";
if(($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($efectossexualesDto->getidEfectoSexual()!=""){
$sql.="'".$efectossexualesDto->getidEfectoSexual()."'";
if(($efectossexualesDto->getCveDetalleEfecto()!="") ||($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getcveDetalleEfecto()!=""){
$sql.="'".$efectossexualesDto->getcveDetalleEfecto()."'";
if(($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getidSexual()!=""){
$sql.="'".$efectossexualesDto->getidSexual()."'";
if(($efectossexualesDto->getActivo()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getactivo()!=""){
$sql.="'".$efectossexualesDto->getactivo()."'";
}
if($efectossexualesDto->getfechaRegistro()!=""){
}
if($efectossexualesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EfectossexualesDTO();
$tmp->setidEfectoSexual($this->_proveedor->lastID());
$tmp = $this->selectEfectossexuales($tmp,"",$this->_proveedor);
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
public function updateEfectossexuales($efectossexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblefectossexuales SET ";
if($efectossexualesDto->getidEfectoSexual()!=""){
$sql.="idEfectoSexual='".$efectossexualesDto->getidEfectoSexual()."'";
if(($efectossexualesDto->getCveDetalleEfecto()!="") ||($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto='".$efectossexualesDto->getcveDetalleEfecto()."'";
if(($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getidSexual()!=""){
$sql.="idSexual='".$efectossexualesDto->getidSexual()."'";
if(($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getactivo()!=""){
$sql.="activo='".$efectossexualesDto->getactivo()."'";
if(($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$efectossexualesDto->getfechaRegistro()."'";
if(($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($efectossexualesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$efectossexualesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idEfectoSexual='".$efectossexualesDto->getidEfectoSexual()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EfectossexualesDTO();
$tmp->setidEfectoSexual($efectossexualesDto->getidEfectoSexual());
$tmp = $this->selectEfectossexuales($tmp,"",$this->_proveedor);
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
public function deleteEfectossexuales($efectossexualesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblefectossexuales  WHERE idEfectoSexual='".$efectossexualesDto->getidEfectoSexual()."'";
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
public function selectEfectossexuales($efectossexualesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idEfectoSexual,cveDetalleEfecto,idSexual,activo,fechaRegistro,fechaActualizacion FROM tblefectossexuales ";
if(($efectossexualesDto->getidEfectoSexual()!="") ||($efectossexualesDto->getcveDetalleEfecto()!="") ||($efectossexualesDto->getidSexual()!="") ||($efectossexualesDto->getactivo()!="") ||($efectossexualesDto->getfechaRegistro()!="") ||($efectossexualesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($efectossexualesDto->getidEfectoSexual()!=""){
$sql.="idEfectoSexual='".$efectossexualesDto->getIdEfectoSexual()."'";
if(($efectossexualesDto->getCveDetalleEfecto()!="") ||($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualesDto->getcveDetalleEfecto()!=""){
$sql.="cveDetalleEfecto='".$efectossexualesDto->getCveDetalleEfecto()."'";
if(($efectossexualesDto->getIdSexual()!="") ||($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualesDto->getidSexual()!=""){
$sql.="idSexual='".$efectossexualesDto->getIdSexual()."'";
if(($efectossexualesDto->getActivo()!="") ||($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualesDto->getactivo()!=""){
$sql.="activo='".$efectossexualesDto->getActivo()."'";
if(($efectossexualesDto->getFechaRegistro()!="") ||($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$efectossexualesDto->getFechaRegistro()."'";
if(($efectossexualesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($efectossexualesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$efectossexualesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EfectossexualesDTO();
$tmp[$contador]->setIdEfectoSexual($row["idEfectoSexual"]);
$tmp[$contador]->setCveDetalleEfecto($row["cveDetalleEfecto"]);
$tmp[$contador]->setIdSexual($row["idSexual"]);
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