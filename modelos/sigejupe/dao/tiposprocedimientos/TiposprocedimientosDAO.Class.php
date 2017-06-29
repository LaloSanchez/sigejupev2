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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposprocedimientos/TiposprocedimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposprocedimientosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposprocedimientos($tiposprocedimientosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposprocedimientos(";
if($tiposprocedimientosDto->getcveTipoProcedimiento()!=""){
$sql.="cveTipoProcedimiento";
if(($tiposprocedimientosDto->getDesTipoProcedimiento()!="") ||($tiposprocedimientosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getdesTipoProcedimiento()!=""){
$sql.="desTipoProcedimiento";
if(($tiposprocedimientosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposprocedimientosDto->getcveTipoProcedimiento()!=""){
$sql.="'".$tiposprocedimientosDto->getcveTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getDesTipoProcedimiento()!="") ||($tiposprocedimientosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getdesTipoProcedimiento()!=""){
$sql.="'".$tiposprocedimientosDto->getdesTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getactivo()!=""){
$sql.="'".$tiposprocedimientosDto->getactivo()."'";
}
if($tiposprocedimientosDto->getfechaRegistro()!=""){
}
if($tiposprocedimientosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposprocedimientosDTO();
$tmp->setcveTipoProcedimiento($this->_proveedor->lastID());
$tmp = $this->selectTiposprocedimientos($tmp,"",$this->_proveedor);
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
public function updateTiposprocedimientos($tiposprocedimientosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposprocedimientos SET ";
if($tiposprocedimientosDto->getcveTipoProcedimiento()!=""){
$sql.="cveTipoProcedimiento='".$tiposprocedimientosDto->getcveTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getDesTipoProcedimiento()!="") ||($tiposprocedimientosDto->getActivo()!="") ||($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getdesTipoProcedimiento()!=""){
$sql.="desTipoProcedimiento='".$tiposprocedimientosDto->getdesTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getActivo()!="") ||($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getactivo()!=""){
$sql.="activo='".$tiposprocedimientosDto->getactivo()."'";
if(($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposprocedimientosDto->getfechaRegistro()."'";
if(($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposprocedimientosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposprocedimientosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoProcedimiento='".$tiposprocedimientosDto->getcveTipoProcedimiento()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposprocedimientosDTO();
$tmp->setcveTipoProcedimiento($tiposprocedimientosDto->getcveTipoProcedimiento());
$tmp = $this->selectTiposprocedimientos($tmp,"",$this->_proveedor);
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
public function deleteTiposprocedimientos($tiposprocedimientosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposprocedimientos  WHERE cveTipoProcedimiento='".$tiposprocedimientosDto->getcveTipoProcedimiento()."'";
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
public function selectTiposprocedimientos($tiposprocedimientosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoProcedimiento,desTipoProcedimiento,activo,fechaRegistro,fechaActualizacion FROM tbltiposprocedimientos ";
if(($tiposprocedimientosDto->getcveTipoProcedimiento()!="") ||($tiposprocedimientosDto->getdesTipoProcedimiento()!="") ||($tiposprocedimientosDto->getactivo()!="") ||($tiposprocedimientosDto->getfechaRegistro()!="") ||($tiposprocedimientosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposprocedimientosDto->getcveTipoProcedimiento()!=""){
$sql.="cveTipoProcedimiento='".$tiposprocedimientosDto->getCveTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getDesTipoProcedimiento()!="") ||($tiposprocedimientosDto->getActivo()!="") ||($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposprocedimientosDto->getdesTipoProcedimiento()!=""){
$sql.="desTipoProcedimiento='".$tiposprocedimientosDto->getDesTipoProcedimiento()."'";
if(($tiposprocedimientosDto->getActivo()!="") ||($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposprocedimientosDto->getactivo()!=""){
$sql.="activo='".$tiposprocedimientosDto->getActivo()."'";
if(($tiposprocedimientosDto->getFechaRegistro()!="") ||($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposprocedimientosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposprocedimientosDto->getFechaRegistro()."'";
if(($tiposprocedimientosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposprocedimientosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposprocedimientosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposprocedimientosDTO();
$tmp[$contador]->setCveTipoProcedimiento($row["cveTipoProcedimiento"]);
$tmp[$contador]->setDesTipoProcedimiento($row["desTipoProcedimiento"]);
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