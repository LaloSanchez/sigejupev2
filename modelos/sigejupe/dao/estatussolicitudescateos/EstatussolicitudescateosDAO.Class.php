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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudescateosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatussolicitudescateos($estatussolicitudescateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatussolicitudescateos(";
if($estatussolicitudescateosDto->getcveEstatusSolicitudCateo()!=""){
$sql.="cveEstatusSolicitudCateo";
if(($estatussolicitudescateosDto->getDesEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getdesEstatusSolicitudCateo()!=""){
$sql.="desEstatusSolicitudCateo";
if(($estatussolicitudescateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatussolicitudescateosDto->getcveEstatusSolicitudCateo()!=""){
$sql.="'".$estatussolicitudescateosDto->getcveEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getDesEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getdesEstatusSolicitudCateo()!=""){
$sql.="'".$estatussolicitudescateosDto->getdesEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getactivo()!=""){
$sql.="'".$estatussolicitudescateosDto->getactivo()."'";
}
if($estatussolicitudescateosDto->getfechaRegistro()!=""){
}
if($estatussolicitudescateosDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudescateosDTO();
$tmp->setcveEstatusSolicitudCateo($this->_proveedor->lastID());
$tmp = $this->selectEstatussolicitudescateos($tmp,"",$this->_proveedor);
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
public function updateEstatussolicitudescateos($estatussolicitudescateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatussolicitudescateos SET ";
if($estatussolicitudescateosDto->getcveEstatusSolicitudCateo()!=""){
$sql.="cveEstatusSolicitudCateo='".$estatussolicitudescateosDto->getcveEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getDesEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getActivo()!="") ||($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getdesEstatusSolicitudCateo()!=""){
$sql.="desEstatusSolicitudCateo='".$estatussolicitudescateosDto->getdesEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getActivo()!="") ||($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getactivo()!=""){
$sql.="activo='".$estatussolicitudescateosDto->getactivo()."'";
if(($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudescateosDto->getfechaRegistro()."'";
if(($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudescateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudescateosDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusSolicitudCateo='".$estatussolicitudescateosDto->getcveEstatusSolicitudCateo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudescateosDTO();
$tmp->setcveEstatusSolicitudCateo($estatussolicitudescateosDto->getcveEstatusSolicitudCateo());
$tmp = $this->selectEstatussolicitudescateos($tmp,"",$this->_proveedor);
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
public function deleteEstatussolicitudescateos($estatussolicitudescateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatussolicitudescateos  WHERE cveEstatusSolicitudCateo='".$estatussolicitudescateosDto->getcveEstatusSolicitudCateo()."'";
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
public function selectEstatussolicitudescateos($estatussolicitudescateosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusSolicitudCateo,desEstatusSolicitudCateo,activo,fechaRegistro,fechaActualizacion FROM tblestatussolicitudescateos ";
if(($estatussolicitudescateosDto->getcveEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getdesEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getactivo()!="") ||($estatussolicitudescateosDto->getfechaRegistro()!="") ||($estatussolicitudescateosDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatussolicitudescateosDto->getcveEstatusSolicitudCateo()!=""){
$sql.="cveEstatusSolicitudCateo='".$estatussolicitudescateosDto->getCveEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getDesEstatusSolicitudCateo()!="") ||($estatussolicitudescateosDto->getActivo()!="") ||($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudescateosDto->getdesEstatusSolicitudCateo()!=""){
$sql.="desEstatusSolicitudCateo='".$estatussolicitudescateosDto->getDesEstatusSolicitudCateo()."'";
if(($estatussolicitudescateosDto->getActivo()!="") ||($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudescateosDto->getactivo()!=""){
$sql.="activo='".$estatussolicitudescateosDto->getActivo()."'";
if(($estatussolicitudescateosDto->getFechaRegistro()!="") ||($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudescateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudescateosDto->getFechaRegistro()."'";
if(($estatussolicitudescateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudescateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudescateosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatussolicitudescateosDTO();
$tmp[$contador]->setCveEstatusSolicitudCateo($row["cveEstatusSolicitudCateo"]);
$tmp[$contador]->setDesEstatusSolicitudCateo($row["desEstatusSolicitudCateo"]);
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