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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ClasificacionesdelitosordenDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertClasificacionesdelitosorden($clasificacionesdelitosordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblclasificacionesdelitosorden(";
if($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()!=""){
$sql.="cveClasificacionDelitoOrden";
if(($clasificacionesdelitosordenDto->getDesClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()!=""){
$sql.="desClasificacionDelitoOrden";
if(($clasificacionesdelitosordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()!=""){
$sql.="'".$clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getDesClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()!=""){
$sql.="'".$clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getactivo()!=""){
$sql.="'".$clasificacionesdelitosordenDto->getactivo()."'";
}
if($clasificacionesdelitosordenDto->getfechaRegistro()!=""){
}
if($clasificacionesdelitosordenDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ClasificacionesdelitosordenDTO();
$tmp->setcveClasificacionDelitoOrden($this->_proveedor->lastID());
$tmp = $this->selectClasificacionesdelitosorden($tmp,"",$this->_proveedor);
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
public function updateClasificacionesdelitosorden($clasificacionesdelitosordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblclasificacionesdelitosorden SET ";
if($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()!=""){
$sql.="cveClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getDesClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getActivo()!="") ||($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()!=""){
$sql.="desClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getActivo()!="") ||($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getactivo()!=""){
$sql.="activo='".$clasificacionesdelitosordenDto->getactivo()."'";
if(($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$clasificacionesdelitosordenDto->getfechaRegistro()."'";
if(($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($clasificacionesdelitosordenDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$clasificacionesdelitosordenDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ClasificacionesdelitosordenDTO();
$tmp->setcveClasificacionDelitoOrden($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden());
$tmp = $this->selectClasificacionesdelitosorden($tmp,"",$this->_proveedor);
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
public function deleteClasificacionesdelitosorden($clasificacionesdelitosordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblclasificacionesdelitosorden  WHERE cveClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()."'";
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
public function selectClasificacionesdelitosorden($clasificacionesdelitosordenDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveClasificacionDelitoOrden,desClasificacionDelitoOrden,activo,fechaRegistro,fechaActualizacion FROM tblclasificacionesdelitosorden ";
if(($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getactivo()!="") ||($clasificacionesdelitosordenDto->getfechaRegistro()!="") ||($clasificacionesdelitosordenDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($clasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()!=""){
$sql.="cveClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getCveClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getDesClasificacionDelitoOrden()!="") ||($clasificacionesdelitosordenDto->getActivo()!="") ||($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()!=""){
$sql.="desClasificacionDelitoOrden='".$clasificacionesdelitosordenDto->getDesClasificacionDelitoOrden()."'";
if(($clasificacionesdelitosordenDto->getActivo()!="") ||($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosordenDto->getactivo()!=""){
$sql.="activo='".$clasificacionesdelitosordenDto->getActivo()."'";
if(($clasificacionesdelitosordenDto->getFechaRegistro()!="") ||($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosordenDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$clasificacionesdelitosordenDto->getFechaRegistro()."'";
if(($clasificacionesdelitosordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($clasificacionesdelitosordenDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$clasificacionesdelitosordenDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ClasificacionesdelitosordenDTO();
$tmp[$contador]->setCveClasificacionDelitoOrden($row["cveClasificacionDelitoOrden"]);
$tmp[$contador]->setDesClasificacionDelitoOrden($row["desClasificacionDelitoOrden"]);
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