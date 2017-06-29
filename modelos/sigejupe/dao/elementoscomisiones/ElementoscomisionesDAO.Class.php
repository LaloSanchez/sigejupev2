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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/elementoscomisiones/ElementoscomisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ElementoscomisionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertElementoscomisiones($elementoscomisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblelementoscomisiones(";
if($elementoscomisionesDto->getcveElementoComision()!=""){
$sql.="cveElementoComision";
if(($elementoscomisionesDto->getDesElementoComision()!="") ||($elementoscomisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getdesElementoComision()!=""){
$sql.="desElementoComision";
if(($elementoscomisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($elementoscomisionesDto->getcveElementoComision()!=""){
$sql.="'".$elementoscomisionesDto->getcveElementoComision()."'";
if(($elementoscomisionesDto->getDesElementoComision()!="") ||($elementoscomisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getdesElementoComision()!=""){
$sql.="'".$elementoscomisionesDto->getdesElementoComision()."'";
if(($elementoscomisionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getactivo()!=""){
$sql.="'".$elementoscomisionesDto->getactivo()."'";
}
if($elementoscomisionesDto->getfechaRegistro()!=""){
}
if($elementoscomisionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ElementoscomisionesDTO();
$tmp->setcveElementoComision($this->_proveedor->lastID());
$tmp = $this->selectElementoscomisiones($tmp,"",$this->_proveedor);
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
public function updateElementoscomisiones($elementoscomisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblelementoscomisiones SET ";
if($elementoscomisionesDto->getcveElementoComision()!=""){
$sql.="cveElementoComision='".$elementoscomisionesDto->getcveElementoComision()."'";
if(($elementoscomisionesDto->getDesElementoComision()!="") ||($elementoscomisionesDto->getActivo()!="") ||($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getdesElementoComision()!=""){
$sql.="desElementoComision='".$elementoscomisionesDto->getdesElementoComision()."'";
if(($elementoscomisionesDto->getActivo()!="") ||($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getactivo()!=""){
$sql.="activo='".$elementoscomisionesDto->getactivo()."'";
if(($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$elementoscomisionesDto->getfechaRegistro()."'";
if(($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($elementoscomisionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$elementoscomisionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveElementoComision='".$elementoscomisionesDto->getcveElementoComision()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ElementoscomisionesDTO();
$tmp->setcveElementoComision($elementoscomisionesDto->getcveElementoComision());
$tmp = $this->selectElementoscomisiones($tmp,"",$this->_proveedor);
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
public function deleteElementoscomisiones($elementoscomisionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblelementoscomisiones  WHERE cveElementoComision='".$elementoscomisionesDto->getcveElementoComision()."'";
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
public function selectElementoscomisiones($elementoscomisionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveElementoComision,desElementoComision,activo,fechaRegistro,fechaActualizacion FROM tblelementoscomisiones ";
if(($elementoscomisionesDto->getcveElementoComision()!="") ||($elementoscomisionesDto->getdesElementoComision()!="") ||($elementoscomisionesDto->getactivo()!="") ||($elementoscomisionesDto->getfechaRegistro()!="") ||($elementoscomisionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($elementoscomisionesDto->getcveElementoComision()!=""){
$sql.="cveElementoComision='".$elementoscomisionesDto->getCveElementoComision()."'";
if(($elementoscomisionesDto->getDesElementoComision()!="") ||($elementoscomisionesDto->getActivo()!="") ||($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($elementoscomisionesDto->getdesElementoComision()!=""){
$sql.="desElementoComision='".$elementoscomisionesDto->getDesElementoComision()."'";
if(($elementoscomisionesDto->getActivo()!="") ||($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($elementoscomisionesDto->getactivo()!=""){
$sql.="activo='".$elementoscomisionesDto->getActivo()."'";
if(($elementoscomisionesDto->getFechaRegistro()!="") ||($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($elementoscomisionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$elementoscomisionesDto->getFechaRegistro()."'";
if(($elementoscomisionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($elementoscomisionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$elementoscomisionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ElementoscomisionesDTO();
$tmp[$contador]->setCveElementoComision($row["cveElementoComision"]);
$tmp[$contador]->setDesElementoComision($row["desElementoComision"]);
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