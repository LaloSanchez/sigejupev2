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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposjuzgadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposjuzgados($tiposjuzgadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposjuzgados(";
if($tiposjuzgadosDto->getcveTipoJuzgado()!=""){
$sql.="cveTipoJuzgado";
if(($tiposjuzgadosDto->getDesTipoJuzgado()!="") ||($tiposjuzgadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getdesTipoJuzgado()!=""){
$sql.="desTipoJuzgado";
if(($tiposjuzgadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposjuzgadosDto->getcveTipoJuzgado()!=""){
$sql.="'".$tiposjuzgadosDto->getcveTipoJuzgado()."'";
if(($tiposjuzgadosDto->getDesTipoJuzgado()!="") ||($tiposjuzgadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getdesTipoJuzgado()!=""){
$sql.="'".$tiposjuzgadosDto->getdesTipoJuzgado()."'";
if(($tiposjuzgadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getactivo()!=""){
$sql.="'".$tiposjuzgadosDto->getactivo()."'";
}
if($tiposjuzgadosDto->getfechaRegistro()!=""){
}
if($tiposjuzgadosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposjuzgadosDTO();
$tmp->setcveTipoJuzgado($this->_proveedor->lastID());
$tmp = $this->selectTiposjuzgados($tmp,"",$this->_proveedor);
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
public function updateTiposjuzgados($tiposjuzgadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposjuzgados SET ";
if($tiposjuzgadosDto->getcveTipoJuzgado()!=""){
$sql.="cveTipoJuzgado='".$tiposjuzgadosDto->getcveTipoJuzgado()."'";
if(($tiposjuzgadosDto->getDesTipoJuzgado()!="") ||($tiposjuzgadosDto->getActivo()!="") ||($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getdesTipoJuzgado()!=""){
$sql.="desTipoJuzgado='".$tiposjuzgadosDto->getdesTipoJuzgado()."'";
if(($tiposjuzgadosDto->getActivo()!="") ||($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getactivo()!=""){
$sql.="activo='".$tiposjuzgadosDto->getactivo()."'";
if(($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposjuzgadosDto->getfechaRegistro()."'";
if(($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposjuzgadosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoJuzgado='".$tiposjuzgadosDto->getcveTipoJuzgado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposjuzgadosDTO();
$tmp->setcveTipoJuzgado($tiposjuzgadosDto->getcveTipoJuzgado());
$tmp = $this->selectTiposjuzgados($tmp,"",$this->_proveedor);
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
public function deleteTiposjuzgados($tiposjuzgadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposjuzgados  WHERE cveTipoJuzgado='".$tiposjuzgadosDto->getcveTipoJuzgado()."'";
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
public function selectTiposjuzgados($tiposjuzgadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoJuzgado,desTipoJuzgado,activo,fechaRegistro,fechaActualizacion FROM tbltiposjuzgados ";
if(($tiposjuzgadosDto->getcveTipoJuzgado()!="") ||($tiposjuzgadosDto->getdesTipoJuzgado()!="") ||($tiposjuzgadosDto->getactivo()!="") ||($tiposjuzgadosDto->getfechaRegistro()!="") ||($tiposjuzgadosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposjuzgadosDto->getcveTipoJuzgado()!=""){
$sql.="cveTipoJuzgado='".$tiposjuzgadosDto->getCveTipoJuzgado()."'";
if(($tiposjuzgadosDto->getDesTipoJuzgado()!="") ||($tiposjuzgadosDto->getActivo()!="") ||($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadosDto->getdesTipoJuzgado()!=""){
$sql.="desTipoJuzgado='".$tiposjuzgadosDto->getDesTipoJuzgado()."'";
if(($tiposjuzgadosDto->getActivo()!="") ||($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadosDto->getactivo()!=""){
$sql.="activo='".$tiposjuzgadosDto->getActivo()."'";
if(($tiposjuzgadosDto->getFechaRegistro()!="") ||($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposjuzgadosDto->getFechaRegistro()."'";
if(($tiposjuzgadosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposjuzgadosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposjuzgadosDTO();
$tmp[$contador]->setCveTipoJuzgado($row["cveTipoJuzgado"]);
$tmp[$contador]->setDesTipoJuzgado($row["desTipoJuzgado"]);
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