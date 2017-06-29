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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposjuzgadoresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposjuzgadores($tiposjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposjuzgadores(";
if($tiposjuzgadoresDto->getcveTipoJuzgador()!=""){
$sql.="cveTipoJuzgador";
if(($tiposjuzgadoresDto->getDesTipoJuzgador()!="") ||($tiposjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getdesTipoJuzgador()!=""){
$sql.="desTipoJuzgador";
if(($tiposjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposjuzgadoresDto->getcveTipoJuzgador()!=""){
$sql.="'".$tiposjuzgadoresDto->getcveTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getDesTipoJuzgador()!="") ||($tiposjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getdesTipoJuzgador()!=""){
$sql.="'".$tiposjuzgadoresDto->getdesTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getactivo()!=""){
$sql.="'".$tiposjuzgadoresDto->getactivo()."'";
}
if($tiposjuzgadoresDto->getfechaRegistro()!=""){
}
if($tiposjuzgadoresDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposjuzgadoresDTO();
$tmp->setcveTipoJuzgador($this->_proveedor->lastID());
$tmp = $this->selectTiposjuzgadores($tmp,"",$this->_proveedor);
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
public function updateTiposjuzgadores($tiposjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposjuzgadores SET ";
if($tiposjuzgadoresDto->getcveTipoJuzgador()!=""){
$sql.="cveTipoJuzgador='".$tiposjuzgadoresDto->getcveTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getDesTipoJuzgador()!="") ||($tiposjuzgadoresDto->getActivo()!="") ||($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getdesTipoJuzgador()!=""){
$sql.="desTipoJuzgador='".$tiposjuzgadoresDto->getdesTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getActivo()!="") ||($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$tiposjuzgadoresDto->getactivo()."'";
if(($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposjuzgadoresDto->getfechaRegistro()."'";
if(($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposjuzgadoresDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoJuzgador='".$tiposjuzgadoresDto->getcveTipoJuzgador()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposjuzgadoresDTO();
$tmp->setcveTipoJuzgador($tiposjuzgadoresDto->getcveTipoJuzgador());
$tmp = $this->selectTiposjuzgadores($tmp,"",$this->_proveedor);
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
public function deleteTiposjuzgadores($tiposjuzgadoresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposjuzgadores  WHERE cveTipoJuzgador='".$tiposjuzgadoresDto->getcveTipoJuzgador()."'";
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
public function selectTiposjuzgadores($tiposjuzgadoresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoJuzgador,desTipoJuzgador,activo,fechaRegistro,fechaActualizacion FROM tbltiposjuzgadores ";
if(($tiposjuzgadoresDto->getcveTipoJuzgador()!="") ||($tiposjuzgadoresDto->getdesTipoJuzgador()!="") ||($tiposjuzgadoresDto->getactivo()!="") ||($tiposjuzgadoresDto->getfechaRegistro()!="") ||($tiposjuzgadoresDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposjuzgadoresDto->getcveTipoJuzgador()!=""){
$sql.="cveTipoJuzgador='".$tiposjuzgadoresDto->getCveTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getDesTipoJuzgador()!="") ||($tiposjuzgadoresDto->getActivo()!="") ||($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadoresDto->getdesTipoJuzgador()!=""){
$sql.="desTipoJuzgador='".$tiposjuzgadoresDto->getDesTipoJuzgador()."'";
if(($tiposjuzgadoresDto->getActivo()!="") ||($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadoresDto->getactivo()!=""){
$sql.="activo='".$tiposjuzgadoresDto->getActivo()."'";
if(($tiposjuzgadoresDto->getFechaRegistro()!="") ||($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadoresDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposjuzgadoresDto->getFechaRegistro()."'";
if(($tiposjuzgadoresDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposjuzgadoresDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposjuzgadoresDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposjuzgadoresDTO();
$tmp[$contador]->setCveTipoJuzgador($row["cveTipoJuzgador"]);
$tmp[$contador]->setDesTipoJuzgador($row["desTipoJuzgador"]);
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