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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/espanol/EspanolDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EspanolDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEspanol($espanolDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblespanol(";
if($espanolDto->getcveEspanol()!=""){
$sql.="cveEspanol";
if(($espanolDto->getDesEspanol()!="") ||($espanolDto->getActivo()!="") ){
$sql.=",";
}
}
if($espanolDto->getdesEspanol()!=""){
$sql.="desEspanol";
if(($espanolDto->getActivo()!="") ){
$sql.=",";
}
}
if($espanolDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($espanolDto->getcveEspanol()!=""){
$sql.="'".$espanolDto->getcveEspanol()."'";
if(($espanolDto->getDesEspanol()!="") ||($espanolDto->getActivo()!="") ){
$sql.=",";
}
}
if($espanolDto->getdesEspanol()!=""){
$sql.="'".$espanolDto->getdesEspanol()."'";
if(($espanolDto->getActivo()!="") ){
$sql.=",";
}
}
if($espanolDto->getactivo()!=""){
$sql.="'".$espanolDto->getactivo()."'";
}
if($espanolDto->getfechaRegistro()!=""){
}
if($espanolDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EspanolDTO();
$tmp->setcveEspanol($this->_proveedor->lastID());
$tmp = $this->selectEspanol($tmp,"",$this->_proveedor);
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
public function updateEspanol($espanolDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblespanol SET ";
if($espanolDto->getcveEspanol()!=""){
$sql.="cveEspanol='".$espanolDto->getcveEspanol()."'";
if(($espanolDto->getDesEspanol()!="") ||($espanolDto->getActivo()!="") ||($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($espanolDto->getdesEspanol()!=""){
$sql.="desEspanol='".$espanolDto->getdesEspanol()."'";
if(($espanolDto->getActivo()!="") ||($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($espanolDto->getactivo()!=""){
$sql.="activo='".$espanolDto->getactivo()."'";
if(($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($espanolDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$espanolDto->getfechaRegistro()."'";
if(($espanolDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($espanolDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$espanolDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEspanol='".$espanolDto->getcveEspanol()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EspanolDTO();
$tmp->setcveEspanol($espanolDto->getcveEspanol());
$tmp = $this->selectEspanol($tmp,"",$this->_proveedor);
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
public function deleteEspanol($espanolDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblespanol  WHERE cveEspanol='".$espanolDto->getcveEspanol()."'";
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
public function selectEspanol($espanolDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEspanol,desEspanol,activo,fechaRegistro,fechaActualizacion FROM tblespanol ";
if(($espanolDto->getcveEspanol()!="") ||($espanolDto->getdesEspanol()!="") ||($espanolDto->getactivo()!="") ||($espanolDto->getfechaRegistro()!="") ||($espanolDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($espanolDto->getcveEspanol()!=""){
$sql.="cveEspanol='".$espanolDto->getCveEspanol()."'";
if(($espanolDto->getDesEspanol()!="") ||($espanolDto->getActivo()!="") ||($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($espanolDto->getdesEspanol()!=""){
$sql.="desEspanol='".$espanolDto->getDesEspanol()."'";
if(($espanolDto->getActivo()!="") ||($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($espanolDto->getactivo()!=""){
$sql.="activo='".$espanolDto->getActivo()."'";
if(($espanolDto->getFechaRegistro()!="") ||($espanolDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($espanolDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$espanolDto->getFechaRegistro()."'";
if(($espanolDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($espanolDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$espanolDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EspanolDTO();
$tmp[$contador]->setCveEspanol($row["cveEspanol"]);
$tmp[$contador]->setDesEspanol($row["desEspanol"]);
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