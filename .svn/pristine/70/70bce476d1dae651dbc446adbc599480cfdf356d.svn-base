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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConductasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConductas($conductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconductas(";
if($conductasDto->getcveConducta()!=""){
$sql.="cveConducta";
if(($conductasDto->getDesConducta()!="") ||($conductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($conductasDto->getdesConducta()!=""){
$sql.="desConducta";
if(($conductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($conductasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($conductasDto->getcveConducta()!=""){
$sql.="'".$conductasDto->getcveConducta()."'";
if(($conductasDto->getDesConducta()!="") ||($conductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($conductasDto->getdesConducta()!=""){
$sql.="'".$conductasDto->getdesConducta()."'";
if(($conductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($conductasDto->getactivo()!=""){
$sql.="'".$conductasDto->getactivo()."'";
}
if($conductasDto->getfechaRegistro()!=""){
}
if($conductasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConductasDTO();
$tmp->setcveConducta($this->_proveedor->lastID());
$tmp = $this->selectConductas($tmp,"",$this->_proveedor);
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
public function updateConductas($conductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconductas SET ";
if($conductasDto->getcveConducta()!=""){
$sql.="cveConducta='".$conductasDto->getcveConducta()."'";
if(($conductasDto->getDesConducta()!="") ||($conductasDto->getActivo()!="") ||($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conductasDto->getdesConducta()!=""){
$sql.="desConducta='".$conductasDto->getdesConducta()."'";
if(($conductasDto->getActivo()!="") ||($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conductasDto->getactivo()!=""){
$sql.="activo='".$conductasDto->getactivo()."'";
if(($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conductasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$conductasDto->getfechaRegistro()."'";
if(($conductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conductasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$conductasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveConducta='".$conductasDto->getcveConducta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConductasDTO();
$tmp->setcveConducta($conductasDto->getcveConducta());
$tmp = $this->selectConductas($tmp,"",$this->_proveedor);
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
public function deleteConductas($conductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconductas  WHERE cveConducta='".$conductasDto->getcveConducta()."'";
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
public function selectConductas($conductasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConducta,desConducta,activo,fechaRegistro,fechaActualizacion FROM tblconductas ";
if(($conductasDto->getcveConducta()!="") ||($conductasDto->getdesConducta()!="") ||($conductasDto->getactivo()!="") ||($conductasDto->getfechaRegistro()!="") ||($conductasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($conductasDto->getcveConducta()!=""){
$sql.="cveConducta='".$conductasDto->getCveConducta()."'";
if(($conductasDto->getDesConducta()!="") ||($conductasDto->getActivo()!="") ||($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conductasDto->getdesConducta()!=""){
$sql.="desConducta='".$conductasDto->getDesConducta()."'";
if(($conductasDto->getActivo()!="") ||($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conductasDto->getactivo()!=""){
$sql.="activo='".$conductasDto->getActivo()."'";
if(($conductasDto->getFechaRegistro()!="") ||($conductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conductasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$conductasDto->getFechaRegistro()."'";
if(($conductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conductasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$conductasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConductasDTO();
$tmp[$contador]->setCveConducta($row["cveConducta"]);
$tmp[$contador]->setDesConducta($row["desConducta"]);
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