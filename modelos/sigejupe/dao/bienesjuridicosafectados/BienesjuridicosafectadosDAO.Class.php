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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/bienesjuridicosafectados/BienesjuridicosafectadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class BienesjuridicosafectadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertBienesjuridicosafectados($bienesjuridicosafectadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblbienesjuridicosafectados(";
if($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()!=""){
$sql.="cveBienJuridicoAfectado";
if(($bienesjuridicosafectadosDto->getDesBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()!=""){
$sql.="desBienJuridicoAfectado";
if(($bienesjuridicosafectadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()!=""){
$sql.="'".$bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getDesBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()!=""){
$sql.="'".$bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getactivo()!=""){
$sql.="'".$bienesjuridicosafectadosDto->getactivo()."'";
}
if($bienesjuridicosafectadosDto->getfechaRegistro()!=""){
}
if($bienesjuridicosafectadosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BienesjuridicosafectadosDTO();
$tmp->setcveBienJuridicoAfectado($this->_proveedor->lastID());
$tmp = $this->selectBienesjuridicosafectados($tmp,"",$this->_proveedor);
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
public function updateBienesjuridicosafectados($bienesjuridicosafectadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblbienesjuridicosafectados SET ";
if($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()!=""){
$sql.="cveBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getDesBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getActivo()!="") ||($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()!=""){
$sql.="desBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getActivo()!="") ||($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getactivo()!=""){
$sql.="activo='".$bienesjuridicosafectadosDto->getactivo()."'";
if(($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$bienesjuridicosafectadosDto->getfechaRegistro()."'";
if(($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($bienesjuridicosafectadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$bienesjuridicosafectadosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new BienesjuridicosafectadosDTO();
$tmp->setcveBienJuridicoAfectado($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado());
$tmp = $this->selectBienesjuridicosafectados($tmp,"",$this->_proveedor);
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
public function deleteBienesjuridicosafectados($bienesjuridicosafectadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblbienesjuridicosafectados  WHERE cveBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()."'";
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
public function selectBienesjuridicosafectados($bienesjuridicosafectadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveBienJuridicoAfectado,desBienJuridicoAfectado,activo,fechaRegistro,fechaActualizacion FROM tblbienesjuridicosafectados ";
if(($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getactivo()!="") ||($bienesjuridicosafectadosDto->getfechaRegistro()!="") ||($bienesjuridicosafectadosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($bienesjuridicosafectadosDto->getcveBienJuridicoAfectado()!=""){
$sql.="cveBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getCveBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getDesBienJuridicoAfectado()!="") ||($bienesjuridicosafectadosDto->getActivo()!="") ||($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($bienesjuridicosafectadosDto->getdesBienJuridicoAfectado()!=""){
$sql.="desBienJuridicoAfectado='".$bienesjuridicosafectadosDto->getDesBienJuridicoAfectado()."'";
if(($bienesjuridicosafectadosDto->getActivo()!="") ||($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($bienesjuridicosafectadosDto->getactivo()!=""){
$sql.="activo='".$bienesjuridicosafectadosDto->getActivo()."'";
if(($bienesjuridicosafectadosDto->getFechaRegistro()!="") ||($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($bienesjuridicosafectadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$bienesjuridicosafectadosDto->getFechaRegistro()."'";
if(($bienesjuridicosafectadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($bienesjuridicosafectadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$bienesjuridicosafectadosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new BienesjuridicosafectadosDTO();
$tmp[$contador]->setCveBienJuridicoAfectado($row["cveBienJuridicoAfectado"]);
$tmp[$contador]->setDesBienJuridicoAfectado($row["desBienJuridicoAfectado"]);
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