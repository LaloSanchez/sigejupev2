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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstadoscivilesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstadosciviles($estadoscivilesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestadosciviles(";
if($estadoscivilesDto->getcveEstadoCivil()!=""){
$sql.="cveEstadoCivil";
if(($estadoscivilesDto->getDesEstadoCivil()!="") ||($estadoscivilesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getdesEstadoCivil()!=""){
$sql.="desEstadoCivil";
if(($estadoscivilesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estadoscivilesDto->getcveEstadoCivil()!=""){
$sql.="'".$estadoscivilesDto->getcveEstadoCivil()."'";
if(($estadoscivilesDto->getDesEstadoCivil()!="") ||($estadoscivilesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getdesEstadoCivil()!=""){
$sql.="'".$estadoscivilesDto->getdesEstadoCivil()."'";
if(($estadoscivilesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getactivo()!=""){
$sql.="'".$estadoscivilesDto->getactivo()."'";
}
if($estadoscivilesDto->getfechaRegistro()!=""){
}
if($estadoscivilesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstadoscivilesDTO();
$tmp->setcveEstadoCivil($this->_proveedor->lastID());
$tmp = $this->selectEstadosciviles($tmp,"",$this->_proveedor);
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
public function updateEstadosciviles($estadoscivilesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestadosciviles SET ";
if($estadoscivilesDto->getcveEstadoCivil()!=""){
$sql.="cveEstadoCivil='".$estadoscivilesDto->getcveEstadoCivil()."'";
if(($estadoscivilesDto->getDesEstadoCivil()!="") ||($estadoscivilesDto->getActivo()!="") ||($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getdesEstadoCivil()!=""){
$sql.="desEstadoCivil='".$estadoscivilesDto->getdesEstadoCivil()."'";
if(($estadoscivilesDto->getActivo()!="") ||($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getactivo()!=""){
$sql.="activo='".$estadoscivilesDto->getactivo()."'";
if(($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estadoscivilesDto->getfechaRegistro()."'";
if(($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadoscivilesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estadoscivilesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstadoCivil='".$estadoscivilesDto->getcveEstadoCivil()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstadoscivilesDTO();
$tmp->setcveEstadoCivil($estadoscivilesDto->getcveEstadoCivil());
$tmp = $this->selectEstadosciviles($tmp,"",$this->_proveedor);
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
public function deleteEstadosciviles($estadoscivilesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestadosciviles  WHERE cveEstadoCivil='".$estadoscivilesDto->getcveEstadoCivil()."'";
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
public function selectEstadosciviles($estadoscivilesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstadoCivil,desEstadoCivil,activo,fechaRegistro,fechaActualizacion FROM tblestadosciviles ";
if(($estadoscivilesDto->getcveEstadoCivil()!="") ||($estadoscivilesDto->getdesEstadoCivil()!="") ||($estadoscivilesDto->getactivo()!="") ||($estadoscivilesDto->getfechaRegistro()!="") ||($estadoscivilesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estadoscivilesDto->getcveEstadoCivil()!=""){
$sql.="cveEstadoCivil='".$estadoscivilesDto->getCveEstadoCivil()."'";
if(($estadoscivilesDto->getDesEstadoCivil()!="") ||($estadoscivilesDto->getActivo()!="") ||($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadoscivilesDto->getdesEstadoCivil()!=""){
$sql.="desEstadoCivil='".$estadoscivilesDto->getDesEstadoCivil()."'";
if(($estadoscivilesDto->getActivo()!="") ||($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadoscivilesDto->getactivo()!=""){
$sql.="activo='".$estadoscivilesDto->getActivo()."'";
if(($estadoscivilesDto->getFechaRegistro()!="") ||($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadoscivilesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estadoscivilesDto->getFechaRegistro()."'";
if(($estadoscivilesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadoscivilesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estadoscivilesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstadoscivilesDTO();
$tmp[$contador]->setCveEstadoCivil($row["cveEstadoCivil"]);
$tmp[$contador]->setDesEstadoCivil($row["desEstadoCivil"]);
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