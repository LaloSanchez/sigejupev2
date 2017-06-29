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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstados($estadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestados(";
if($estadosDto->getcveEstado()!=""){
$sql.="cveEstado";
if(($estadosDto->getDesEstado()!="") ||($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getdesEstado()!=""){
$sql.="desEstado";
if(($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getactivo()!=""){
$sql.="activo";
if(($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getcvePais()!=""){
$sql.="cvePais";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estadosDto->getcveEstado()!=""){
$sql.="'".$estadosDto->getcveEstado()."'";
if(($estadosDto->getDesEstado()!="") ||($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getdesEstado()!=""){
$sql.="'".$estadosDto->getdesEstado()."'";
if(($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getactivo()!=""){
$sql.="'".$estadosDto->getactivo()."'";
if(($estadosDto->getCvePais()!="") ){
$sql.=",";
}
}
if($estadosDto->getcvePais()!=""){
$sql.="'".$estadosDto->getcvePais()."'";
}
if($estadosDto->getfechaRegistro()!=""){
}
if($estadosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstadosDTO();
$tmp->setcveEstado($this->_proveedor->lastID());
$tmp = $this->selectEstados($tmp,"",$this->_proveedor);
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
public function updateEstados($estadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestados SET ";
if($estadosDto->getcveEstado()!=""){
$sql.="cveEstado='".$estadosDto->getcveEstado()."'";
if(($estadosDto->getDesEstado()!="") ||($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadosDto->getdesEstado()!=""){
$sql.="desEstado='".$estadosDto->getdesEstado()."'";
if(($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadosDto->getactivo()!=""){
$sql.="activo='".$estadosDto->getactivo()."'";
if(($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadosDto->getcvePais()!=""){
$sql.="cvePais='".$estadosDto->getcvePais()."'";
if(($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estadosDto->getfechaRegistro()."'";
if(($estadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estadosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstado='".$estadosDto->getcveEstado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstadosDTO();
$tmp->setcveEstado($estadosDto->getcveEstado());
$tmp = $this->selectEstados($tmp,"",$this->_proveedor);
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
public function deleteEstados($estadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestados  WHERE cveEstado='".$estadosDto->getcveEstado()."'";
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
public function selectEstados($estadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstado,desEstado,activo,cvePais,fechaRegistro,fechaActualizacion FROM tblestados ";
if(($estadosDto->getcveEstado()!="") ||($estadosDto->getdesEstado()!="") ||($estadosDto->getactivo()!="") ||($estadosDto->getcvePais()!="") ||($estadosDto->getfechaRegistro()!="") ||($estadosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estadosDto->getcveEstado()!=""){
$sql.="cveEstado='".$estadosDto->getCveEstado()."'";
if(($estadosDto->getDesEstado()!="") ||($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadosDto->getdesEstado()!=""){
$sql.="desEstado='".$estadosDto->getDesEstado()."'";
if(($estadosDto->getActivo()!="") ||($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadosDto->getactivo()!=""){
$sql.="activo='".$estadosDto->getActivo()."'";
if(($estadosDto->getCvePais()!="") ||($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadosDto->getcvePais()!=""){
$sql.="cvePais='".$estadosDto->getCvePais()."'";
if(($estadosDto->getFechaRegistro()!="") ||($estadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estadosDto->getFechaRegistro()."'";
if(($estadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estadosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstadosDTO();
$tmp[$contador]->setCveEstado($row["cveEstado"]);
$tmp[$contador]->setDesEstado($row["desEstado"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setCvePais($row["cvePais"]);
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