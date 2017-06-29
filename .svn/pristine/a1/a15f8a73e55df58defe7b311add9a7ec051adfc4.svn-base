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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AmbitosacososDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAmbitosacosos($ambitosacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblambitosacosos(";
if($ambitosacososDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso";
if(($ambitosacososDto->getDesAmbitoAcoso()!="") ||($ambitosacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getdesAmbitoAcoso()!=""){
$sql.="desAmbitoAcoso";
if(($ambitosacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ambitosacososDto->getcveAmbitoAcoso()!=""){
$sql.="'".$ambitosacososDto->getcveAmbitoAcoso()."'";
if(($ambitosacososDto->getDesAmbitoAcoso()!="") ||($ambitosacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getdesAmbitoAcoso()!=""){
$sql.="'".$ambitosacososDto->getdesAmbitoAcoso()."'";
if(($ambitosacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getactivo()!=""){
$sql.="'".$ambitosacososDto->getactivo()."'";
}
if($ambitosacososDto->getfechaRegistro()!=""){
}
if($ambitosacososDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AmbitosacososDTO();
$tmp->setcveAmbitoAcoso($this->_proveedor->lastID());
$tmp = $this->selectAmbitosacosos($tmp,"",$this->_proveedor);
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
public function updateAmbitosacosos($ambitosacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblambitosacosos SET ";
if($ambitosacososDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso='".$ambitosacososDto->getcveAmbitoAcoso()."'";
if(($ambitosacososDto->getDesAmbitoAcoso()!="") ||($ambitosacososDto->getActivo()!="") ||($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getdesAmbitoAcoso()!=""){
$sql.="desAmbitoAcoso='".$ambitosacososDto->getdesAmbitoAcoso()."'";
if(($ambitosacososDto->getActivo()!="") ||($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getactivo()!=""){
$sql.="activo='".$ambitosacososDto->getactivo()."'";
if(($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ambitosacososDto->getfechaRegistro()."'";
if(($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($ambitosacososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ambitosacososDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveAmbitoAcoso='".$ambitosacososDto->getcveAmbitoAcoso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AmbitosacososDTO();
$tmp->setcveAmbitoAcoso($ambitosacososDto->getcveAmbitoAcoso());
$tmp = $this->selectAmbitosacosos($tmp,"",$this->_proveedor);
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
public function deleteAmbitosacosos($ambitosacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblambitosacosos  WHERE cveAmbitoAcoso='".$ambitosacososDto->getcveAmbitoAcoso()."'";
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
public function selectAmbitosacosos($ambitosacososDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveAmbitoAcoso,desAmbitoAcoso,activo,fechaRegistro,fechaActualizacion FROM tblambitosacosos ";
if(($ambitosacososDto->getcveAmbitoAcoso()!="") ||($ambitosacososDto->getdesAmbitoAcoso()!="") ||($ambitosacososDto->getactivo()!="") ||($ambitosacososDto->getfechaRegistro()!="") ||($ambitosacososDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($ambitosacososDto->getcveAmbitoAcoso()!=""){
$sql.="cveAmbitoAcoso='".$ambitosacososDto->getCveAmbitoAcoso()."'";
if(($ambitosacososDto->getDesAmbitoAcoso()!="") ||($ambitosacososDto->getActivo()!="") ||($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ambitosacososDto->getdesAmbitoAcoso()!=""){
$sql.="desAmbitoAcoso='".$ambitosacososDto->getDesAmbitoAcoso()."'";
if(($ambitosacososDto->getActivo()!="") ||($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ambitosacososDto->getactivo()!=""){
$sql.="activo='".$ambitosacososDto->getActivo()."'";
if(($ambitosacososDto->getFechaRegistro()!="") ||($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ambitosacososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ambitosacososDto->getFechaRegistro()."'";
if(($ambitosacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($ambitosacososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ambitosacososDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AmbitosacososDTO();
$tmp[$contador]->setCveAmbitoAcoso($row["cveAmbitoAcoso"]);
$tmp[$contador]->setDesAmbitoAcoso($row["desAmbitoAcoso"]);
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