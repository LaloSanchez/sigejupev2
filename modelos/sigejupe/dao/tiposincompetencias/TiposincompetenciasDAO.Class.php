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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tiposincompetencias/TiposincompetenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TiposincompetenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTiposincompetencias($tiposincompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltiposincompetencias(";
if($tiposincompetenciasDto->getcveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia";
if(($tiposincompetenciasDto->getDesTipoIncompetencia()!="") ||($tiposincompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getdesTipoIncompetencia()!=""){
$sql.="desTipoIncompetencia";
if(($tiposincompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tiposincompetenciasDto->getcveTipoIncompetencia()!=""){
$sql.="'".$tiposincompetenciasDto->getcveTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getDesTipoIncompetencia()!="") ||($tiposincompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getdesTipoIncompetencia()!=""){
$sql.="'".$tiposincompetenciasDto->getdesTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getactivo()!=""){
$sql.="'".$tiposincompetenciasDto->getactivo()."'";
}
if($tiposincompetenciasDto->getfechaRegistro()!=""){
}
if($tiposincompetenciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposincompetenciasDTO();
$tmp->setcveTipoIncompetencia($this->_proveedor->lastID());
$tmp = $this->selectTiposincompetencias($tmp,"",$this->_proveedor);
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
public function updateTiposincompetencias($tiposincompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltiposincompetencias SET ";
if($tiposincompetenciasDto->getcveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia='".$tiposincompetenciasDto->getcveTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getDesTipoIncompetencia()!="") ||($tiposincompetenciasDto->getActivo()!="") ||($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getdesTipoIncompetencia()!=""){
$sql.="desTipoIncompetencia='".$tiposincompetenciasDto->getdesTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getActivo()!="") ||($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getactivo()!=""){
$sql.="activo='".$tiposincompetenciasDto->getactivo()."'";
if(($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposincompetenciasDto->getfechaRegistro()."'";
if(($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tiposincompetenciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposincompetenciasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoIncompetencia='".$tiposincompetenciasDto->getcveTipoIncompetencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TiposincompetenciasDTO();
$tmp->setcveTipoIncompetencia($tiposincompetenciasDto->getcveTipoIncompetencia());
$tmp = $this->selectTiposincompetencias($tmp,"",$this->_proveedor);
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
public function deleteTiposincompetencias($tiposincompetenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltiposincompetencias  WHERE cveTipoIncompetencia='".$tiposincompetenciasDto->getcveTipoIncompetencia()."'";
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
public function selectTiposincompetencias($tiposincompetenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoIncompetencia,desTipoIncompetencia,activo,fechaRegistro,fechaActualizacion FROM tbltiposincompetencias ";
if(($tiposincompetenciasDto->getcveTipoIncompetencia()!="") ||($tiposincompetenciasDto->getdesTipoIncompetencia()!="") ||($tiposincompetenciasDto->getactivo()!="") ||($tiposincompetenciasDto->getfechaRegistro()!="") ||($tiposincompetenciasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tiposincompetenciasDto->getcveTipoIncompetencia()!=""){
$sql.="cveTipoIncompetencia='".$tiposincompetenciasDto->getCveTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getDesTipoIncompetencia()!="") ||($tiposincompetenciasDto->getActivo()!="") ||($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposincompetenciasDto->getdesTipoIncompetencia()!=""){
$sql.="desTipoIncompetencia='".$tiposincompetenciasDto->getDesTipoIncompetencia()."'";
if(($tiposincompetenciasDto->getActivo()!="") ||($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposincompetenciasDto->getactivo()!=""){
$sql.="activo='".$tiposincompetenciasDto->getActivo()."'";
if(($tiposincompetenciasDto->getFechaRegistro()!="") ||($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposincompetenciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tiposincompetenciasDto->getFechaRegistro()."'";
if(($tiposincompetenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tiposincompetenciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tiposincompetenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TiposincompetenciasDTO();
$tmp[$contador]->setCveTipoIncompetencia($row["cveTipoIncompetencia"]);
$tmp[$contador]->setDesTipoIncompetencia($row["desTipoIncompetencia"]);
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