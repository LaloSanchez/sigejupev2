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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/alfabetismo/AlfabetismoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AlfabetismoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAlfabetismo($alfabetismoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblalfabetismo(";
if($alfabetismoDto->getcveAlfabetismo()!=""){
$sql.="cveAlfabetismo";
if(($alfabetismoDto->getDesAlfabetismo()!="") ||($alfabetismoDto->getActivo()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getdesAlfabetismo()!=""){
$sql.="desAlfabetismo";
if(($alfabetismoDto->getActivo()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($alfabetismoDto->getcveAlfabetismo()!=""){
$sql.="'".$alfabetismoDto->getcveAlfabetismo()."'";
if(($alfabetismoDto->getDesAlfabetismo()!="") ||($alfabetismoDto->getActivo()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getdesAlfabetismo()!=""){
$sql.="'".$alfabetismoDto->getdesAlfabetismo()."'";
if(($alfabetismoDto->getActivo()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getactivo()!=""){
$sql.="'".$alfabetismoDto->getactivo()."'";
}
if($alfabetismoDto->getfechaRegistro()!=""){
}
if($alfabetismoDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AlfabetismoDTO();
$tmp->setcveAlfabetismo($this->_proveedor->lastID());
$tmp = $this->selectAlfabetismo($tmp,"",$this->_proveedor);
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
public function updateAlfabetismo($alfabetismoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblalfabetismo SET ";
if($alfabetismoDto->getcveAlfabetismo()!=""){
$sql.="cveAlfabetismo='".$alfabetismoDto->getcveAlfabetismo()."'";
if(($alfabetismoDto->getDesAlfabetismo()!="") ||($alfabetismoDto->getActivo()!="") ||($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getdesAlfabetismo()!=""){
$sql.="desAlfabetismo='".$alfabetismoDto->getdesAlfabetismo()."'";
if(($alfabetismoDto->getActivo()!="") ||($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getactivo()!=""){
$sql.="activo='".$alfabetismoDto->getactivo()."'";
if(($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$alfabetismoDto->getfechaRegistro()."'";
if(($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($alfabetismoDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$alfabetismoDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveAlfabetismo='".$alfabetismoDto->getcveAlfabetismo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AlfabetismoDTO();
$tmp->setcveAlfabetismo($alfabetismoDto->getcveAlfabetismo());
$tmp = $this->selectAlfabetismo($tmp,"",$this->_proveedor);
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
public function deleteAlfabetismo($alfabetismoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblalfabetismo  WHERE cveAlfabetismo='".$alfabetismoDto->getcveAlfabetismo()."'";
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
public function selectAlfabetismo($alfabetismoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveAlfabetismo,desAlfabetismo,activo,fechaRegistro,fechaActualizacion FROM tblalfabetismo ";
if(($alfabetismoDto->getcveAlfabetismo()!="") ||($alfabetismoDto->getdesAlfabetismo()!="") ||($alfabetismoDto->getactivo()!="") ||($alfabetismoDto->getfechaRegistro()!="") ||($alfabetismoDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($alfabetismoDto->getcveAlfabetismo()!=""){
$sql.="cveAlfabetismo='".$alfabetismoDto->getCveAlfabetismo()."'";
if(($alfabetismoDto->getDesAlfabetismo()!="") ||($alfabetismoDto->getActivo()!="") ||($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($alfabetismoDto->getdesAlfabetismo()!=""){
$sql.="desAlfabetismo='".$alfabetismoDto->getDesAlfabetismo()."'";
if(($alfabetismoDto->getActivo()!="") ||($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($alfabetismoDto->getactivo()!=""){
$sql.="activo='".$alfabetismoDto->getActivo()."'";
if(($alfabetismoDto->getFechaRegistro()!="") ||($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($alfabetismoDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$alfabetismoDto->getFechaRegistro()."'";
if(($alfabetismoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($alfabetismoDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$alfabetismoDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AlfabetismoDTO();
$tmp[$contador]->setCveAlfabetismo($row["cveAlfabetismo"]);
$tmp[$contador]->setDesAlfabetismo($row["desAlfabetismo"]);
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