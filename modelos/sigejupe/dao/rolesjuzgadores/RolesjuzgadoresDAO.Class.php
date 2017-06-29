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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RolesjuzgadoresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRolesjuzgadores($rolesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblrolesjuzgadores(";
if($rolesjuzgadoresDto->getcveRolJuzgador()!=""){
$sql.="cveRolJuzgador";
if(($rolesjuzgadoresDto->getDesRolJuzgador()!="") ||($rolesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getdesRolJuzgador()!=""){
$sql.="desRolJuzgador";
if(($rolesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($rolesjuzgadoresDto->getcveRolJuzgador()!=""){
$sql.="'".$rolesjuzgadoresDto->getcveRolJuzgador()."'";
if(($rolesjuzgadoresDto->getDesRolJuzgador()!="") ||($rolesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getdesRolJuzgador()!=""){
$sql.="'".$rolesjuzgadoresDto->getdesRolJuzgador()."'";
if(($rolesjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getactivo()!=""){
$sql.="'".$rolesjuzgadoresDto->getactivo()."'";
}
if($rolesjuzgadoresDto->getfechaRegistro()!=""){
}
if($rolesjuzgadoresDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RolesjuzgadoresDTO();
$tmp->setcveRolJuzgador($this->_proveedor->lastID());
$tmp = $this->selectRolesjuzgadores($tmp,"",$this->_proveedor);
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
public function updateRolesjuzgadores($rolesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblrolesjuzgadores SET ";
if($rolesjuzgadoresDto->getcveRolJuzgador()!=""){
$sql.="cveRolJuzgador='".$rolesjuzgadoresDto->getcveRolJuzgador()."'";
if(($rolesjuzgadoresDto->getDesRolJuzgador()!="") ||($rolesjuzgadoresDto->getActivo()!="") ||($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getdesRolJuzgador()!=""){
$sql.="desRolJuzgador='".$rolesjuzgadoresDto->getdesRolJuzgador()."'";
if(($rolesjuzgadoresDto->getActivo()!="") ||($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$rolesjuzgadoresDto->getactivo()."'";
if(($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$rolesjuzgadoresDto->getfechaRegistro()."'";
if(($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($rolesjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$rolesjuzgadoresDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveRolJuzgador='".$rolesjuzgadoresDto->getcveRolJuzgador()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RolesjuzgadoresDTO();
$tmp->setcveRolJuzgador($rolesjuzgadoresDto->getcveRolJuzgador());
$tmp = $this->selectRolesjuzgadores($tmp,"",$this->_proveedor);
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
public function deleteRolesjuzgadores($rolesjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblrolesjuzgadores  WHERE cveRolJuzgador='".$rolesjuzgadoresDto->getcveRolJuzgador()."'";
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
public function selectRolesjuzgadores($rolesjuzgadoresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRolJuzgador,desRolJuzgador,activo,fechaRegistro,fechaActualizacion FROM tblrolesjuzgadores ";
if(($rolesjuzgadoresDto->getcveRolJuzgador()!="") ||($rolesjuzgadoresDto->getdesRolJuzgador()!="") ||($rolesjuzgadoresDto->getactivo()!="") ||($rolesjuzgadoresDto->getfechaRegistro()!="") ||($rolesjuzgadoresDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($rolesjuzgadoresDto->getcveRolJuzgador()!=""){
$sql.="cveRolJuzgador='".$rolesjuzgadoresDto->getCveRolJuzgador()."'";
if(($rolesjuzgadoresDto->getDesRolJuzgador()!="") ||($rolesjuzgadoresDto->getActivo()!="") ||($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($rolesjuzgadoresDto->getdesRolJuzgador()!=""){
$sql.="desRolJuzgador='".$rolesjuzgadoresDto->getDesRolJuzgador()."'";
if(($rolesjuzgadoresDto->getActivo()!="") ||($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($rolesjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$rolesjuzgadoresDto->getActivo()."'";
if(($rolesjuzgadoresDto->getFechaRegistro()!="") ||($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($rolesjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$rolesjuzgadoresDto->getFechaRegistro()."'";
if(($rolesjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($rolesjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$rolesjuzgadoresDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RolesjuzgadoresDTO();
$tmp[$contador]->setCveRolJuzgador($row["cveRolJuzgador"]);
$tmp[$contador]->setDesRolJuzgador($row["desRolJuzgador"]);
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