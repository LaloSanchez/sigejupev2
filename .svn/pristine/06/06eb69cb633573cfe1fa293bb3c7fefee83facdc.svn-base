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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatusexhortos/EstatusexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatusexhortosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatusexhortos($estatusexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatusexhortos(";
if($estatusexhortosDto->getcveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto";
if(($estatusexhortosDto->getDesEstatusExhorto()!="") ||($estatusexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getdesEstatusExhorto()!=""){
$sql.="desEstatusExhorto";
if(($estatusexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatusexhortosDto->getcveEstatusExhorto()!=""){
$sql.="'".$estatusexhortosDto->getcveEstatusExhorto()."'";
if(($estatusexhortosDto->getDesEstatusExhorto()!="") ||($estatusexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getdesEstatusExhorto()!=""){
$sql.="'".$estatusexhortosDto->getdesEstatusExhorto()."'";
if(($estatusexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getactivo()!=""){
$sql.="'".$estatusexhortosDto->getactivo()."'";
}
if($estatusexhortosDto->getfechaRegistro()!=""){
}
if($estatusexhortosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusexhortosDTO();
$tmp->setcveEstatusExhorto($this->_proveedor->lastID());
$tmp = $this->selectEstatusexhortos($tmp,"",$this->_proveedor);
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
public function updateEstatusexhortos($estatusexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatusexhortos SET ";
if($estatusexhortosDto->getcveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto='".$estatusexhortosDto->getcveEstatusExhorto()."'";
if(($estatusexhortosDto->getDesEstatusExhorto()!="") ||($estatusexhortosDto->getActivo()!="") ||($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getdesEstatusExhorto()!=""){
$sql.="desEstatusExhorto='".$estatusexhortosDto->getdesEstatusExhorto()."'";
if(($estatusexhortosDto->getActivo()!="") ||($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getactivo()!=""){
$sql.="activo='".$estatusexhortosDto->getactivo()."'";
if(($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusexhortosDto->getfechaRegistro()."'";
if(($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatusexhortosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusexhortosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusExhorto='".$estatusexhortosDto->getcveEstatusExhorto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatusexhortosDTO();
$tmp->setcveEstatusExhorto($estatusexhortosDto->getcveEstatusExhorto());
$tmp = $this->selectEstatusexhortos($tmp,"",$this->_proveedor);
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
public function deleteEstatusexhortos($estatusexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatusexhortos  WHERE cveEstatusExhorto='".$estatusexhortosDto->getcveEstatusExhorto()."'";
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
public function selectEstatusexhortos($estatusexhortosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusExhorto,desEstatusExhorto,activo,fechaRegistro,fechaActualizacion FROM tblestatusexhortos ";
if(($estatusexhortosDto->getcveEstatusExhorto()!="") ||($estatusexhortosDto->getdesEstatusExhorto()!="") ||($estatusexhortosDto->getactivo()!="") ||($estatusexhortosDto->getfechaRegistro()!="") ||($estatusexhortosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatusexhortosDto->getcveEstatusExhorto()!=""){
$sql.="cveEstatusExhorto='".$estatusexhortosDto->getCveEstatusExhorto()."'";
if(($estatusexhortosDto->getDesEstatusExhorto()!="") ||($estatusexhortosDto->getActivo()!="") ||($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusexhortosDto->getdesEstatusExhorto()!=""){
$sql.="desEstatusExhorto='".$estatusexhortosDto->getDesEstatusExhorto()."'";
if(($estatusexhortosDto->getActivo()!="") ||($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusexhortosDto->getactivo()!=""){
$sql.="activo='".$estatusexhortosDto->getActivo()."'";
if(($estatusexhortosDto->getFechaRegistro()!="") ||($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusexhortosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatusexhortosDto->getFechaRegistro()."'";
if(($estatusexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatusexhortosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatusexhortosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatusexhortosDTO();
$tmp[$contador]->setCveEstatusExhorto($row["cveEstatusExhorto"]);
$tmp[$contador]->setDesEstatusExhorto($row["desEstatusExhorto"]);
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