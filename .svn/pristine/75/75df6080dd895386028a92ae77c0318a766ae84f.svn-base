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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class GenerosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertGeneros($generosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblgeneros(";
if($generosDto->getcveGenero()!=""){
$sql.="cveGenero";
if(($generosDto->getDesGenero()!="") ||($generosDto->getActivo()!="") ){
$sql.=",";
}
}
if($generosDto->getdesGenero()!=""){
$sql.="desGenero";
if(($generosDto->getActivo()!="") ){
$sql.=",";
}
}
if($generosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($generosDto->getcveGenero()!=""){
$sql.="'".$generosDto->getcveGenero()."'";
if(($generosDto->getDesGenero()!="") ||($generosDto->getActivo()!="") ){
$sql.=",";
}
}
if($generosDto->getdesGenero()!=""){
$sql.="'".$generosDto->getdesGenero()."'";
if(($generosDto->getActivo()!="") ){
$sql.=",";
}
}
if($generosDto->getactivo()!=""){
$sql.="'".$generosDto->getactivo()."'";
}
if($generosDto->getfechaRegistro()!=""){
}
if($generosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GenerosDTO();
$tmp->setcveGenero($this->_proveedor->lastID());
$tmp = $this->selectGeneros($tmp,"",$this->_proveedor);
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
public function updateGeneros($generosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblgeneros SET ";
if($generosDto->getcveGenero()!=""){
$sql.="cveGenero='".$generosDto->getcveGenero()."'";
if(($generosDto->getDesGenero()!="") ||($generosDto->getActivo()!="") ||($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($generosDto->getdesGenero()!=""){
$sql.="desGenero='".$generosDto->getdesGenero()."'";
if(($generosDto->getActivo()!="") ||($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($generosDto->getactivo()!=""){
$sql.="activo='".$generosDto->getactivo()."'";
if(($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($generosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$generosDto->getfechaRegistro()."'";
if(($generosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($generosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$generosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveGenero='".$generosDto->getcveGenero()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GenerosDTO();
$tmp->setcveGenero($generosDto->getcveGenero());
$tmp = $this->selectGeneros($tmp,"",$this->_proveedor);
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
public function deleteGeneros($generosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblgeneros  WHERE cveGenero='".$generosDto->getcveGenero()."'";
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
public function selectGeneros($generosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveGenero,desGenero,activo,fechaRegistro,fechaActualizacion FROM tblgeneros ";
if(($generosDto->getcveGenero()!="") ||($generosDto->getdesGenero()!="") ||($generosDto->getactivo()!="") ||($generosDto->getfechaRegistro()!="") ||($generosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($generosDto->getcveGenero()!=""){
$sql.="cveGenero='".$generosDto->getCveGenero()."'";
if(($generosDto->getDesGenero()!="") ||($generosDto->getActivo()!="") ||($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($generosDto->getdesGenero()!=""){
$sql.="desGenero='".$generosDto->getDesGenero()."'";
if(($generosDto->getActivo()!="") ||($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($generosDto->getactivo()!=""){
$sql.="activo='".$generosDto->getActivo()."'";
if(($generosDto->getFechaRegistro()!="") ||($generosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($generosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$generosDto->getFechaRegistro()."'";
if(($generosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($generosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$generosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new GenerosDTO();
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setDesGenero($row["desGenero"]);
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