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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipossentenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipossentencias($tipossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipossentencias(";
if($tipossentenciasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia";
if(($tipossentenciasDto->getDesTipoSentencia()!="") ||($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getDesTipoSentencia()!=""){
$sql.="desTipoSentencia";
if(($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getCveInstancia()!=""){
$sql.="cveInstancia";
if(($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipossentenciasDto->getCveTipoSentencia()!=""){
$sql.="'".$tipossentenciasDto->getCveTipoSentencia()."'";
if(($tipossentenciasDto->getDesTipoSentencia()!="") ||($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getDesTipoSentencia()!=""){
$sql.="'".$tipossentenciasDto->getDesTipoSentencia()."'";
if(($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getCveInstancia()!=""){
$sql.="'".$tipossentenciasDto->getCveInstancia()."'";
if(($tipossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getActivo()!=""){
$sql.="'".$tipossentenciasDto->getActivo()."'";
}
if($tipossentenciasDto->getFechaRegistro()!=""){
}
if($tipossentenciasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossentenciasDTO();
$tmp->setcveTipoSentencia($this->_proveedor->lastID());
$tmp = $this->selectTipossentencias($tmp,"",$this->_proveedor);
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
public function updateTipossentencias($tipossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipossentencias SET ";
if($tipossentenciasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia='".$tipossentenciasDto->getCveTipoSentencia()."'";
if(($tipossentenciasDto->getDesTipoSentencia()!="") ||($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getDesTipoSentencia()!=""){
$sql.="desTipoSentencia='".$tipossentenciasDto->getDesTipoSentencia()."'";
if(($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getCveInstancia()!=""){
$sql.="cveInstancia='".$tipossentenciasDto->getCveInstancia()."'";
if(($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getActivo()!=""){
$sql.="activo='".$tipossentenciasDto->getActivo()."'";
if(($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossentenciasDto->getFechaRegistro()."'";
if(($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossentenciasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoSentencia='".$tipossentenciasDto->getCveTipoSentencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossentenciasDTO();
$tmp->setcveTipoSentencia($tipossentenciasDto->getCveTipoSentencia());
$tmp = $this->selectTipossentencias($tmp,"",$this->_proveedor);
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
public function deleteTipossentencias($tipossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipossentencias  WHERE cveTipoSentencia='".$tipossentenciasDto->getCveTipoSentencia()."'";
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
public function selectTipossentencias($tipossentenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoSentencia,desTipoSentencia,cveInstancia,activo,fechaRegistro,fechaActualizacion FROM tbltipossentencias ";
if(($tipossentenciasDto->getCveTipoSentencia()!="") ||($tipossentenciasDto->getDesTipoSentencia()!="") ||($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tipossentenciasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia='".$tipossentenciasDto->getCveTipoSentencia()."'";
if(($tipossentenciasDto->getDesTipoSentencia()!="") ||($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossentenciasDto->getDesTipoSentencia()!=""){
$sql.="desTipoSentencia='".$tipossentenciasDto->getDesTipoSentencia()."'";
if(($tipossentenciasDto->getCveInstancia()!="") ||($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossentenciasDto->getCveInstancia()!=""){
$sql.="cveInstancia='".$tipossentenciasDto->getCveInstancia()."'";
if(($tipossentenciasDto->getActivo()!="") ||($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossentenciasDto->getActivo()!=""){
$sql.="activo='".$tipossentenciasDto->getActivo()."'";
if(($tipossentenciasDto->getFechaRegistro()!="") ||($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossentenciasDto->getFechaRegistro()."'";
if(($tipossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossentenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipossentenciasDTO();
$tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
$tmp[$contador]->setDesTipoSentencia($row["desTipoSentencia"]);
$tmp[$contador]->setCveInstancia($row["cveInstancia"]);
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